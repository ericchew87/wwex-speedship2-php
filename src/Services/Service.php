<?php

namespace ericchew87\WWEXSpeedShip2PHP\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapClientBase
{
    /**
     * Sets the AuthenticationDetail SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\AuthenticationDetail $authenticationDetail
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderAuthenticationDetail(\ericchew87\WWEXSpeedShip2PHP\Structs\AuthenticationDetail $authenticationDetail, $nameSpace = 'http://service.v1.speedship2.s3f.soapservice.ws.wwex.com', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'authenticationDetail', $authenticationDetail, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named voidUPSShipment
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : authenticationDetail
     * - SOAPHeaderNamespaces : http://service.v1.speedship2.s3f.soapservice.ws.wwex.com
     * - SOAPHeaderTypes : \ericchew87\WWEXSpeedShip2PHP\Structs\AuthenticationDetail
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\VoidUPSShipment $parameters
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\VoidUPSShipmentResponse|bool
     */
    public function voidUPSShipment(\ericchew87\WWEXSpeedShip2PHP\Structs\VoidUPSShipment $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->voidUPSShipment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named trackUPSShipment
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : authenticationDetail
     * - SOAPHeaderNamespaces : http://service.v1.speedship2.s3f.soapservice.ws.wwex.com
     * - SOAPHeaderTypes : \ericchew87\WWEXSpeedShip2PHP\Structs\AuthenticationDetail
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\TrackUPSShipment $parameters
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\TrackUPSShipmentResponse|bool
     */
    public function trackUPSShipment(\ericchew87\WWEXSpeedShip2PHP\Structs\TrackUPSShipment $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->trackUPSShipment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named shipRatedService
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : authenticationDetail
     * - SOAPHeaderNamespaces : http://service.v1.speedship2.s3f.soapservice.ws.wwex.com
     * - SOAPHeaderTypes : \ericchew87\WWEXSpeedShip2PHP\Structs\AuthenticationDetail
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipRatedService $parameters
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipRatedServiceResponse|bool
     */
    public function shipRatedService(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipRatedService $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->shipRatedService($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named shipUPSShipment
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : authenticationDetail
     * - SOAPHeaderNamespaces : http://service.v1.speedship2.s3f.soapservice.ws.wwex.com
     * - SOAPHeaderTypes : \ericchew87\WWEXSpeedShip2PHP\Structs\AuthenticationDetail
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipUPSShipment $parameters
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipUPSShipmentResponse|bool
     */
    public function shipUPSShipment(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipUPSShipment $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->shipUPSShipment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUPSServiceDetails
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : authenticationDetail
     * - SOAPHeaderNamespaces : http://service.v1.speedship2.s3f.soapservice.ws.wwex.com
     * - SOAPHeaderTypes : \ericchew87\WWEXSpeedShip2PHP\Structs\AuthenticationDetail
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\GetUPSServiceDetails $parameters
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\GetUPSServiceDetailsResponse|bool
     */
    public function getUPSServiceDetails(\ericchew87\WWEXSpeedShip2PHP\Structs\GetUPSServiceDetails $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getUPSServiceDetails($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\GetUPSServiceDetailsResponse|\ericchew87\WWEXSpeedShip2PHP\Structs\ShipRatedServiceResponse|\ericchew87\WWEXSpeedShip2PHP\Structs\ShipUPSShipmentResponse|\ericchew87\WWEXSpeedShip2PHP\Structs\TrackUPSShipmentResponse|\ericchew87\WWEXSpeedShip2PHP\Structs\VoidUPSShipmentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
