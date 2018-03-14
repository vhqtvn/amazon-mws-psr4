<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

class MarketplaceWebServiceModelFBAFeedsOrderAcknowledgementItemCancelReasonEnum{
    const K_NOINVENTORY = "NoInventory";
    const K_SHIPPINGADDRESSUNDELIVERABLE = "ShippingAddressUndeliverable";
    const K_CUSTOMEREXCHANGE = "CustomerExchange";
    const K_BUYERCANCELED = "BuyerCanceled";
    const K_GENERALADJUSTMENT = "GeneralAdjustment";
    const K_CARRIERCREDITDECISION = "CarrierCreditDecision";
    const K_RISKASSESSMENTINFORMATIONNOTVALID = "RiskAssessmentInformationNotValid";
    const K_CARRIERCOVERAGEFAILURE = "CarrierCoverageFailure";
    const K_CUSTOMERRETURN = "CustomerReturn";
    const K_MERCHANDISENOTRECEIVED = "MerchandiseNotReceived";


    const VALUES = [
        self::K_NOINVENTORY,
        self::K_SHIPPINGADDRESSUNDELIVERABLE,
        self::K_CUSTOMEREXCHANGE,
        self::K_BUYERCANCELED,
        self::K_GENERALADJUSTMENT,
        self::K_CARRIERCREDITDECISION,
        self::K_RISKASSESSMENTINFORMATIONNOTVALID,
        self::K_CARRIERCOVERAGEFAILURE,
        self::K_CUSTOMERRETURN,
        self::K_MERCHANDISENOTRECEIVED,
    ];

}
