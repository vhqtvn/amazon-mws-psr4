Amazon Marketplace Webservice PSR4
----------------------------------
Amazon Marketplace Webservice SDKs in PSR4.

Install using composer:
```bash
composer require vhqtvn/amazon-mws-psr4
```

Example usage:
```php
try {
    $service = new MarketplaceWebServiceOrdersClient(
        AWS_ACCESS_KEY_ID,
        AWS_SECRET_ACCESS_KEY,
        APP_NAME,
        APP_VERSION,
        [
            'ServiceURL' => "https://mws.amazonservices.com/Orders/" . MarketplaceWebServiceOrdersClient::SERVICE_VERSION,
        ]
    );
    $request = new MarketplaceWebServiceOrdersModelListOrdersRequest();
    $request->setSellerId($client->MERCHANT_ID);
    $request->setMarketplaceId($client->MARKETPLACE_ID);
    $request->setCreatedAfter(Carbon::now()->modify('-1 day')->toIso8601String());
    $response = $service->ListOrders($request);
    foreach ($response->ListOrdersResult->Orders as $order) {
        echo "============================================\n";
        echo "= Order $order->AmazonOrderId\n";
        echo "= Customer Email $order->BuyerEmail\n";
        echo "= Customer Name $order->BuyerName\n";
    }
} catch (MarketplaceWebServiceOrdersException $ex) {
    echo("Caught Exception: " . $ex->getMessage() . "\n");
    echo("Response Status Code: " . $ex->getStatusCode() . "\n");
    echo("Error Code: " . $ex->getErrorCode() . "\n");
    echo("Error Type: " . $ex->getErrorType() . "\n");
    echo("Request ID: " . $ex->getRequestId() . "\n");
    echo("XML: " . $ex->getXML() . "\n");
    echo("ResponseHeaderMetadata: " . $ex->getResponseHeaderMetadata() . "\n");
} catch (\Exception $ex) {
```