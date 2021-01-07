<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'wsdls/SpeedShip2Service.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 * ################################################################################
 * Don't forget to add wsdltophp/packagebase:dev-master to your main composer.json.
 * ################################################################################
 */
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'wsdls/SpeedShip2Service.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \ericchew87\WWEXSpeedShip2PHP\ClassMap::get(),
);
/**
 * Samples for Service ServiceType
 */
$service = new \ericchew87\WWEXSpeedShip2PHP\Services\Service($options);
$service->setSoapHeaderAuthenticationDetail(new \ericchew87\WWEXSpeedShip2PHP\Structs\AuthenticationDetail());
/**
 * Sample call for voidUPSShipment operation/method
 */
if ($service->voidUPSShipment(new \ericchew87\WWEXSpeedShip2PHP\Structs\VoidUPSShipment()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for trackUPSShipment operation/method
 */
if ($service->trackUPSShipment(new \ericchew87\WWEXSpeedShip2PHP\Structs\TrackUPSShipment()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for shipRatedService operation/method
 */
if ($service->shipRatedService(new \ericchew87\WWEXSpeedShip2PHP\Structs\ShipRatedService()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for shipUPSShipment operation/method
 */
if ($service->shipUPSShipment(new \ericchew87\WWEXSpeedShip2PHP\Structs\ShipUPSShipment()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for getUPSServiceDetails operation/method
 */
if ($service->getUPSServiceDetails(new \ericchew87\WWEXSpeedShip2PHP\Structs\GetUPSServiceDetails()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
