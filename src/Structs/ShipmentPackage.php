<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentPackage Structs
 * @subpackage Structs
 */
class ShipmentPackage extends AbstractStructBase
{
    /**
     * The additionalParameters
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters
     */
    public $additionalParameters;
    /**
     * The additonalHandling
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $additonalHandling;
    /**
     * The codPaymentForm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $codPaymentForm;
    /**
     * The codValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $codValue;
    /**
     * The confirmDeliveryOption
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $confirmDeliveryOption;
    /**
     * The handlingChargeAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $handlingChargeAmount;
    /**
     * The handlingChargeUOM
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $handlingChargeUOM;
    /**
     * The height
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $height;
    /**
     * The insuranceValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $insuranceValue;
    /**
     * The largePackage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $largePackage;
    /**
     * The length
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $length;
    /**
     * The packageNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $packageNumber;
    /**
     * The packageType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $packageType;
    /**
     * The weight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $weight;
    /**
     * The width
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $width;
    /**
     * Constructor method for ShipmentPackage
     * @uses ShipmentPackage::setAdditionalParameters()
     * @uses ShipmentPackage::setAdditonalHandling()
     * @uses ShipmentPackage::setCodPaymentForm()
     * @uses ShipmentPackage::setCodValue()
     * @uses ShipmentPackage::setConfirmDeliveryOption()
     * @uses ShipmentPackage::setHandlingChargeAmount()
     * @uses ShipmentPackage::setHandlingChargeUOM()
     * @uses ShipmentPackage::setHeight()
     * @uses ShipmentPackage::setInsuranceValue()
     * @uses ShipmentPackage::setLargePackage()
     * @uses ShipmentPackage::setLength()
     * @uses ShipmentPackage::setPackageNumber()
     * @uses ShipmentPackage::setPackageType()
     * @uses ShipmentPackage::setWeight()
     * @uses ShipmentPackage::setWidth()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters $additionalParameters
     * @param string $additonalHandling
     * @param string $codPaymentForm
     * @param string $codValue
     * @param string $confirmDeliveryOption
     * @param string $handlingChargeAmount
     * @param string $handlingChargeUOM
     * @param string $height
     * @param string $insuranceValue
     * @param string $largePackage
     * @param string $length
     * @param string $packageNumber
     * @param string $packageType
     * @param string $weight
     * @param string $width
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters $additionalParameters = null, $additonalHandling = null, $codPaymentForm = null, $codValue = null, $confirmDeliveryOption = null, $handlingChargeAmount = null, $handlingChargeUOM = null, $height = null, $insuranceValue = null, $largePackage = null, $length = null, $packageNumber = null, $packageType = null, $weight = null, $width = null)
    {
        $this
            ->setAdditionalParameters($additionalParameters)
            ->setAdditonalHandling($additonalHandling)
            ->setCodPaymentForm($codPaymentForm)
            ->setCodValue($codValue)
            ->setConfirmDeliveryOption($confirmDeliveryOption)
            ->setHandlingChargeAmount($handlingChargeAmount)
            ->setHandlingChargeUOM($handlingChargeUOM)
            ->setHeight($height)
            ->setInsuranceValue($insuranceValue)
            ->setLargePackage($largePackage)
            ->setLength($length)
            ->setPackageNumber($packageNumber)
            ->setPackageType($packageType)
            ->setWeight($weight)
            ->setWidth($width);
    }
    /**
     * Get additionalParameters value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters|null
     */
    public function getAdditionalParameters()
    {
        return isset($this->additionalParameters) ? $this->additionalParameters : null;
    }
    /**
     * Set additionalParameters value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters $additionalParameters
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage
     */
    public function setAdditionalParameters(\ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters $additionalParameters = null)
    {
        if (is_null($additionalParameters) || (is_array($additionalParameters) && empty($additionalParameters))) {
            unset($this->additionalParameters);
        } else {
            $this->additionalParameters = $additionalParameters;
        }
        return $this;
    }
    /**
     * Get additonalHandling value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAdditonalHandling()
    {
        return isset($this->additonalHandling) ? $this->additonalHandling : null;
    }
    /**
     * Set additonalHandling value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $additonalHandling
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage
     */
    public function setAdditonalHandling($additonalHandling = null)
    {
        // validation for constraint: string
        if (!is_null($additonalHandling) && !is_string($additonalHandling)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additonalHandling)), __LINE__);
        }
        if (is_null($additonalHandling) || (is_array($additonalHandling) && empty($additonalHandling))) {
            unset($this->additonalHandling);
        } else {
            $this->additonalHandling = $additonalHandling;
        }
        return $this;
    }
    /**
     * Get codPaymentForm value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCodPaymentForm()
    {
        return isset($this->codPaymentForm) ? $this->codPaymentForm : null;
    }
    /**
     * Set codPaymentForm value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $codPaymentForm
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage
     */
    public function setCodPaymentForm($codPaymentForm = null)
    {
        // validation for constraint: string
        if (!is_null($codPaymentForm) && !is_string($codPaymentForm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codPaymentForm)), __LINE__);
        }
        if (is_null($codPaymentForm) || (is_array($codPaymentForm) && empty($codPaymentForm))) {
            unset($this->codPaymentForm);
        } else {
            $this->codPaymentForm = $codPaymentForm;
        }
        return $this;
    }
    /**
     * Get codValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCodValue()
    {
        return isset($this->codValue) ? $this->codValue : null;
    }
    /**
     * Set codValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $codValue
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage
     */
    public function setCodValue($codValue = null)
    {
        // validation for constraint: string
        if (!is_null($codValue) && !is_string($codValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codValue)), __LINE__);
        }
        if (is_null($codValue) || (is_array($codValue) && empty($codValue))) {
            unset($this->codValue);
        } else {
            $this->codValue = $codValue;
        }
        return $this;
    }
    /**
     * Get confirmDeliveryOption value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getConfirmDeliveryOption()
    {
        return isset($this->confirmDeliveryOption) ? $this->confirmDeliveryOption : null;
    }
    /**
     * Set confirmDeliveryOption value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $confirmDeliveryOption
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage
     */
    public function setConfirmDeliveryOption($confirmDeliveryOption = null)
    {
        // validation for constraint: string
        if (!is_null($confirmDeliveryOption) && !is_string($confirmDeliveryOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($confirmDeliveryOption)), __LINE__);
        }
        if (is_null($confirmDeliveryOption) || (is_array($confirmDeliveryOption) && empty($confirmDeliveryOption))) {
            unset($this->confirmDeliveryOption);
        } else {
            $this->confirmDeliveryOption = $confirmDeliveryOption;
        }
        return $this;
    }
    /**
     * Get handlingChargeAmount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getHandlingChargeAmount()
    {
        return isset($this->handlingChargeAmount) ? $this->handlingChargeAmount : null;
    }
    /**
     * Set handlingChargeAmount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $handlingChargeAmount
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage
     */
    public function setHandlingChargeAmount($handlingChargeAmount = null)
    {
        // validation for constraint: string
        if (!is_null($handlingChargeAmount) && !is_string($handlingChargeAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($handlingChargeAmount)), __LINE__);
        }
        if (is_null($handlingChargeAmount) || (is_array($handlingChargeAmount) && empty($handlingChargeAmount))) {
            unset($this->handlingChargeAmount);
        } else {
            $this->handlingChargeAmount = $handlingChargeAmount;
        }
        return $this;
    }
    /**
     * Get handlingChargeUOM value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getHandlingChargeUOM()
    {
        return isset($this->handlingChargeUOM) ? $this->handlingChargeUOM : null;
    }
    /**
     * Set handlingChargeUOM value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $handlingChargeUOM
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage
     */
    public function setHandlingChargeUOM($handlingChargeUOM = null)
    {
        // validation for constraint: string
        if (!is_null($handlingChargeUOM) && !is_string($handlingChargeUOM)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($handlingChargeUOM)), __LINE__);
        }
        if (is_null($handlingChargeUOM) || (is_array($handlingChargeUOM) && empty($handlingChargeUOM))) {
            unset($this->handlingChargeUOM);
        } else {
            $this->handlingChargeUOM = $handlingChargeUOM;
        }
        return $this;
    }
    /**
     * Get height value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getHeight()
    {
        return isset($this->height) ? $this->height : null;
    }
    /**
     * Set height value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $height
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage
     */
    public function setHeight($height = null)
    {
        // validation for constraint: string
        if (!is_null($height) && !is_string($height)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($height)), __LINE__);
        }
        if (is_null($height) || (is_array($height) && empty($height))) {
            unset($this->height);
        } else {
            $this->height = $height;
        }
        return $this;
    }
    /**
     * Get insuranceValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInsuranceValue()
    {
        return isset($this->insuranceValue) ? $this->insuranceValue : null;
    }
    /**
     * Set insuranceValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $insuranceValue
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage
     */
    public function setInsuranceValue($insuranceValue = null)
    {
        // validation for constraint: string
        if (!is_null($insuranceValue) && !is_string($insuranceValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($insuranceValue)), __LINE__);
        }
        if (is_null($insuranceValue) || (is_array($insuranceValue) && empty($insuranceValue))) {
            unset($this->insuranceValue);
        } else {
            $this->insuranceValue = $insuranceValue;
        }
        return $this;
    }
    /**
     * Get largePackage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLargePackage()
    {
        return isset($this->largePackage) ? $this->largePackage : null;
    }
    /**
     * Set largePackage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $largePackage
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage
     */
    public function setLargePackage($largePackage = null)
    {
        // validation for constraint: string
        if (!is_null($largePackage) && !is_string($largePackage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($largePackage)), __LINE__);
        }
        if (is_null($largePackage) || (is_array($largePackage) && empty($largePackage))) {
            unset($this->largePackage);
        } else {
            $this->largePackage = $largePackage;
        }
        return $this;
    }
    /**
     * Get length value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLength()
    {
        return isset($this->length) ? $this->length : null;
    }
    /**
     * Set length value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $length
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage
     */
    public function setLength($length = null)
    {
        // validation for constraint: string
        if (!is_null($length) && !is_string($length)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($length)), __LINE__);
        }
        if (is_null($length) || (is_array($length) && empty($length))) {
            unset($this->length);
        } else {
            $this->length = $length;
        }
        return $this;
    }
    /**
     * Get packageNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPackageNumber()
    {
        return isset($this->packageNumber) ? $this->packageNumber : null;
    }
    /**
     * Set packageNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $packageNumber
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage
     */
    public function setPackageNumber($packageNumber = null)
    {
        // validation for constraint: string
        if (!is_null($packageNumber) && !is_string($packageNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($packageNumber)), __LINE__);
        }
        if (is_null($packageNumber) || (is_array($packageNumber) && empty($packageNumber))) {
            unset($this->packageNumber);
        } else {
            $this->packageNumber = $packageNumber;
        }
        return $this;
    }
    /**
     * Get packageType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPackageType()
    {
        return isset($this->packageType) ? $this->packageType : null;
    }
    /**
     * Set packageType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $packageType
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage
     */
    public function setPackageType($packageType = null)
    {
        // validation for constraint: string
        if (!is_null($packageType) && !is_string($packageType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($packageType)), __LINE__);
        }
        if (is_null($packageType) || (is_array($packageType) && empty($packageType))) {
            unset($this->packageType);
        } else {
            $this->packageType = $packageType;
        }
        return $this;
    }
    /**
     * Get weight value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWeight()
    {
        return isset($this->weight) ? $this->weight : null;
    }
    /**
     * Set weight value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $weight
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage
     */
    public function setWeight($weight = null)
    {
        // validation for constraint: string
        if (!is_null($weight) && !is_string($weight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($weight)), __LINE__);
        }
        if (is_null($weight) || (is_array($weight) && empty($weight))) {
            unset($this->weight);
        } else {
            $this->weight = $weight;
        }
        return $this;
    }
    /**
     * Get width value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWidth()
    {
        return isset($this->width) ? $this->width : null;
    }
    /**
     * Set width value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $width
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage
     */
    public function setWidth($width = null)
    {
        // validation for constraint: string
        if (!is_null($width) && !is_string($width)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($width)), __LINE__);
        }
        if (is_null($width) || (is_array($width) && empty($width))) {
            unset($this->width);
        } else {
            $this->width = $width;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage
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
