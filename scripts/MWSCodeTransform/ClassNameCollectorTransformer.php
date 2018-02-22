<?php

namespace Scripts\MWSCodeTransform;

use PhpParser\Node;
use PhpParser\NodeVisitorAbstract;

class ClassNameCollectorTransformer extends NodeVisitorAbstract
{
    /** @var array */
    private $changed_names;
    /** @var \Closure */
    private $callback;
    /** @var array */
    private $pending_imports;
    /** @var string|null */
    private $last_declared_classname;

    /**
     * ClassNameCollectorTransformer constructor.
     * @param \Closure $callback
     */
    public function __construct($callback = null)
    {
        $this->changed_names = [];
        $this->callback = $callback;
        $this->pending_imports = [];
    }

    /**
     * @param Node $node
     * @return int|null|\PhpParser\Node|void
     */
    public function enterNode(Node $node)
    {
        if ($this->callback) {
            if ($node instanceof Node\Stmt\Class_ || $node instanceof Node\Stmt\Interface_) {
                $new_name = ($this->callback)($node->name);
                $new_name = explode("\\", $new_name);

                if (count($new_name) >= 2) {
                    $new_name = $new_name[count($new_name) - 1];
                    if ($new_name !== $node->name) {
                        $this->last_declared_classname = $new_name;
                        $this->changed_names[$node->name] = $new_name;
                        $node->name = $new_name;
                    }
                }
            }
            if ($node instanceof Node\Name) {
                $new_name = ($this->callback)($node->toString());
                if ($new_name !== $node->toString()) {
                    $new_name = explode("\\", $new_name);
                    $last = $new_name[count($new_name) - 1];
                    assert(!isset($this->pending_imports[$last]) || $this->pending_imports[$last] === $last);
                    $this->pending_imports[$last] = implode("\\", $new_name);

                    $this->changed_names[$node->toString()] = implode("\\", $new_name);
                    $node->parts = [$last];
                }
            }
        }
    }

    /**
     * @param \Closure $callback
     */
    public function setCallback(\Closure $callback)
    {
        $this->callback = $callback;
    }

    public function getChanges()
    {
        return $this->changed_names;
    }

    public function newPendingImportContext()
    {
        $this->pending_imports = [];
        $this->last_declared_classname = null;
    }

    public function getAndClearPendingImports()
    {
        $result = $this->pending_imports;
        $this->pending_imports = [];
        unset($result[$this->lastDeclaredClassName()]);
        return $result;
    }

    public function lastDeclaredClassName()
    {
        return $this->last_declared_classname;
    }
}