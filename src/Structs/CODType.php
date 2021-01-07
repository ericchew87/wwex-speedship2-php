<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CODType Structs
 * @subpackage Structs
 */
class CODType extends AbstractStructBase
{
    /**
     * The amount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\AmountType
     */
    public $amount;
    /**
     * The controlNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $controlNumber;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\CODStatusType
     */
    public $status;
    /**
     * Constructor method for CODType
     * @uses CODType::setAmount()
     * @uses CODType::setControlNumber()
     * @uses CODType::setStatus()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\AmountType $amount
     * @param string $controlNumber
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\CODStatusType $status
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\AmountType $amount = null, $controlNumber = null, \ericchew87\WWEXSpeedShip2PHP\Structs\CODStatusType $status = null)
    {
        $this
            ->setAmount($amount)
            ->setControlNumber($controlNumber)
            ->setStatus($status);
    }
    /**
     * Get amount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\AmountType|null
     */
    public function getAmount()
    {
        return isset($this->amount) ? $this->amount : null;
    }
    /**
     * Set amount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\AmountType $amount
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\CODType
     */
    public function setAmount(\ericchew87\WWEXSpeedShip2PHP\Structs\AmountType $amount = null)
    {
        if (is_null($amount) || (is_array($amount) && empty($amount))) {
            unset($this->amount);
        } else {
            $this->amount = $amount;
        }
        return $this;
    }
    /**
     * Get controlNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getControlNumber()
    {
        return isset($this->controlNumber) ? $this->controlNumber : null;
    }
    /**
     * Set controlNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $controlNumber
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\CODType
     */
    public function setControlNumber($controlNumber = null)
    {
        // validation for constraint: string
        if (!is_null($controlNumber) && !is_string($controlNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($controlNumber)), __LINE__);
        }
        if (is_null($controlNumber) || (is_array($controlNumber) && empty($controlNumber))) {
            unset($this->controlNumber);
        } else {
            $this->controlNumber = $controlNumber;
        }
        return $this;
    }
    /**
     * Get status value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\CODStatusType|null
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : null;
    }
    /**
     * Set status value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\CODStatusType $status
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\CODType
     */
    public function setStatus(\ericchew87\WWEXSpeedShip2PHP\Structs\CODStatusType $status = null)
    {
        if (is_null($status) || (is_array($status) && empty($status))) {
            unset($this->status);
        } else {
            $this->status = $status;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\CODType
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
