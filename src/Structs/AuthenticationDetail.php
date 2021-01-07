<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for authenticationDetail Structs
 * @subpackage Structs
 */
class AuthenticationDetail extends AbstractStructBase
{
    /**
     * The authenticationToken
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\AuthenticationToken
     */
    public $authenticationToken;
    /**
     * Constructor method for authenticationDetail
     * @uses AuthenticationDetail::setAuthenticationToken()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\AuthenticationToken $authenticationToken
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\AuthenticationToken $authenticationToken = null)
    {
        $this
            ->setAuthenticationToken($authenticationToken);
    }
    /**
     * Get authenticationToken value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\AuthenticationToken|null
     */
    public function getAuthenticationToken()
    {
        return isset($this->authenticationToken) ? $this->authenticationToken : null;
    }
    /**
     * Set authenticationToken value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\AuthenticationToken $authenticationToken
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\AuthenticationDetail
     */
    public function setAuthenticationToken(\ericchew87\WWEXSpeedShip2PHP\Structs\AuthenticationToken $authenticationToken = null)
    {
        if (is_null($authenticationToken) || (is_array($authenticationToken) && empty($authenticationToken))) {
            unset($this->authenticationToken);
        } else {
            $this->authenticationToken = $authenticationToken;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\AuthenticationDetail
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
