<?php

namespace ericchew87\WWEXSpeedShip2PHP;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'authenticationDetail' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\AuthenticationDetail',
            'voidUPSShipment' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\VoidUPSShipment',
            'voidUPSShipmentResponse' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\VoidUPSShipmentResponse',
            'trackUPSShipment' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\TrackUPSShipment',
            'trackUPSShipmentResponse' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\TrackUPSShipmentResponse',
            'shipUPSShipment' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipUPSShipment',
            'shipUPSShipmentResponse' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipUPSShipmentResponse',
            'shipRatedService' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipRatedService',
            'shipRatedServiceResponse' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipRatedServiceResponse',
            'getUPSServiceDetails' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\GetUPSServiceDetails',
            'getUPSServiceDetailsResponse' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\GetUPSServiceDetailsResponse',
            'TrackShipmentRequest' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\TrackShipmentRequest',
            'TrackShipmentResponse' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\TrackShipmentResponse',
            'ShipmentTrackingDetails' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipmentTrackingDetails',
            'ShipmentType' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipmentType',
            'AdditionalCodeDescriptionValueType' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\AdditionalCodeDescriptionValueType',
            'DeliveryDateUnavailableType' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\DeliveryDateUnavailableType',
            'DeliveryDetailType' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\DeliveryDetailType',
            'CommonCodeDescriptionType' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\CommonCodeDescriptionType',
            'CodeDescriptionValueType' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\CodeDescriptionValueType',
            'ShipmentReferenceNumberType' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipmentReferenceNumberType',
            'ServiceType' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ServiceType',
            'ShipmentAddressType' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipmentAddressType',
            'AddressType' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\AddressType',
            'PackageType' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\PackageType',
            'CODType' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\CODType',
            'AmountType' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\AmountType',
            'CODStatusType' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\CODStatusType',
            'ActivityType' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ActivityType',
            'ActivityLocationType' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ActivityLocationType',
            'DocumentType' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\DocumentType',
            'NextScheduleActivityType' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\NextScheduleActivityType',
            'StatusType' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\StatusType',
            'MessageType' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\MessageType',
            'PackageAddressType' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\PackageAddressType',
            'ServiceOptionType' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ServiceOptionType',
            'WeightType' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\WeightType',
            'UnitOfMeasurementType' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\UnitOfMeasurementType',
            'RedirectType' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\RedirectType',
            'ReferenceNumberType' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ReferenceNumberType',
            'RefShipmentType' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\RefShipmentType',
            'ShipUPSRequest' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipUPSRequest',
            'BillChargesToDetail' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\BillChargesToDetail',
            'BillDutiesAndTaxesToDetail' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\BillDutiesAndTaxesToDetail',
            'BillDutiesAndTaxesToInfo' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\BillDutiesAndTaxesToInfo',
            'BillShippingChargeToDetail' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\BillShippingChargeToDetail',
            'BillShippingChargeToInfo' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\BillShippingChargeToInfo',
            'EmailShippingLabelDetail' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\EmailShippingLabelDetail',
            'CommonFullAddress' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\CommonFullAddress',
            'ReceiverFullAddress' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ReceiverFullAddress',
            'ReturnFullAddress' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ReturnFullAddress',
            'SendEmailNotificationDetail' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\SendEmailNotificationDetail',
            'NotificationEmailDetails' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\NotificationEmailDetails',
            'NotificationEmailDetail' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\NotificationEmailDetail',
            'SenderFullAddress' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\SenderFullAddress',
            'ShipmentFullServiceOptions' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipmentFullServiceOptions',
            'ShipmentAdditionalServiceOptions' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipmentAdditionalServiceOptions',
            'SchedulePickupDetail' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\SchedulePickupDetail',
            'ShipmentPickupInfo' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipmentPickupInfo',
            'ShipmentPackagesWithAddInfo' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipmentPackagesWithAddInfo',
            'ShipmentPackageWithAddInfo' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipmentPackageWithAddInfo',
            'ShipmentPackageAdditionalInfo' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipmentPackageAdditionalInfo',
            'ShipmentPackageDescriptions' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipmentPackageDescriptions',
            'ShipmentPackageDescription' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipmentPackageDescription',
            'ShipmentReferences' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipmentReferences',
            'ShipmentReference' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipmentReference',
            'UPSShipmentResponse' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\UPSShipmentResponse',
            'ShipmentResponseDetails' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipmentResponseDetails',
            'ShipmentResponseDetail' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipmentResponseDetail',
            'ShipmentDocs' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipmentDocs',
            'ShipmentDoc' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipmentDoc',
            'ShipmentLabels' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipmentLabels',
            'ShipmentLabel' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipmentLabel',
            'ShipRatedServiceRequest' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipRatedServiceRequest',
            'VoidShipmentRequest' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\VoidShipmentRequest',
            'VoidShipmentResponse' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\VoidShipmentResponse',
            'ShipmentVoidDetails' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipmentVoidDetails',
            'ShipmentVoidDetail' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipmentVoidDetail',
            'RateServiceOptions' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\RateServiceOptions',
            'UPSServiceDetails' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\UPSServiceDetails',
            'UPSServiceDetail' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\UPSServiceDetail',
            'ServiceFeeDetail' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ServiceFeeDetail',
            'UPSServiceDetailRequest' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\UPSServiceDetailRequest',
            'UPSServiceDetailResponse' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\UPSServiceDetailResponse',
            'AuthenticationToken' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\AuthenticationToken',
            'ShipmentNumbers' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipmentNumbers',
            'ResponseHeader' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ResponseHeader',
            'ErrorDescription' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ErrorDescription',
            'Notification' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\Notification',
            'AdditionalParameters' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\AdditionalParameters',
            'ShipmentParameter' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipmentParameter',
            'SimpleShipmentAddress' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\SimpleShipmentAddress',
            'ShipmentPackage' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipmentPackage',
            'PackageLevelFees' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\PackageLevelFees',
            'PackageLevelFee' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\PackageLevelFee',
            'FeeItems' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\FeeItems',
            'FeeItem' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\FeeItem',
            'ShipmentLevelFee' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipmentLevelFee',
            'ShipmentPackages' => '\\ericchew87\\WWEXSpeedShip2PHP\\Structs\\ShipmentPackages',
        );
    }
}
