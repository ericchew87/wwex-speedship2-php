<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentType Structs
 * @subpackage Structs
 */
class ShipmentType extends AbstractStructBase
{
    /**
     * The additionalAttribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalCodeDescriptionValueType[]
     */
    public $additionalAttribute;
    /**
     * The deliveryDateUnavailable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\DeliveryDateUnavailableType
     */
    public $deliveryDateUnavailable;
    /**
     * The deliveryDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\DeliveryDetailType[]
     */
    public $deliveryDetail;
    /**
     * The inquiryNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\CodeDescriptionValueType
     */
    public $inquiryNumber;
    /**
     * The pickupDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $pickupDate;
    /**
     * The referenceNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReferenceNumberType[]
     */
    public $referenceNumber;
    /**
     * The service
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ServiceType
     */
    public $service;
    /**
     * The shipmentAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentAddressType[]
     */
    public $shipmentAddress;
    /**
     * The shipmentPackage
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType[]
     */
    public $shipmentPackage;
    /**
     * The shipmentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\RefShipmentType
     */
    public $shipmentType;
    /**
     * The shipmentWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\WeightType
     */
    public $shipmentWeight;
    /**
     * The shipperNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $shipperNumber;
    /**
     * Constructor method for ShipmentType
     * @uses ShipmentType::setAdditionalAttribute()
     * @uses ShipmentType::setDeliveryDateUnavailable()
     * @uses ShipmentType::setDeliveryDetail()
     * @uses ShipmentType::setInquiryNumber()
     * @uses ShipmentType::setPickupDate()
     * @uses ShipmentType::setReferenceNumber()
     * @uses ShipmentType::setService()
     * @uses ShipmentType::setShipmentAddress()
     * @uses ShipmentType::setShipmentPackage()
     * @uses ShipmentType::setShipmentType()
     * @uses ShipmentType::setShipmentWeight()
     * @uses ShipmentType::setShipperNumber()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalCodeDescriptionValueType[] $additionalAttribute
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\DeliveryDateUnavailableType $deliveryDateUnavailable
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\DeliveryDetailType[] $deliveryDetail
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\CodeDescriptionValueType $inquiryNumber
     * @param string $pickupDate
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReferenceNumberType[] $referenceNumber
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ServiceType $service
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentAddressType[] $shipmentAddress
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType[] $shipmentPackage
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\RefShipmentType $shipmentType
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\WeightType $shipmentWeight
     * @param string $shipperNumber
     */
    public function __construct(array $additionalAttribute = array(), \ericchew87\WWEXSpeedShip2PHP\Structs\DeliveryDateUnavailableType $deliveryDateUnavailable = null, array $deliveryDetail = array(), \ericchew87\WWEXSpeedShip2PHP\Structs\CodeDescriptionValueType $inquiryNumber = null, $pickupDate = null, array $referenceNumber = array(), \ericchew87\WWEXSpeedShip2PHP\Structs\ServiceType $service = null, array $shipmentAddress = array(), array $shipmentPackage = array(), \ericchew87\WWEXSpeedShip2PHP\Structs\RefShipmentType $shipmentType = null, \ericchew87\WWEXSpeedShip2PHP\Structs\WeightType $shipmentWeight = null, $shipperNumber = null)
    {
        $this
            ->setAdditionalAttribute($additionalAttribute)
            ->setDeliveryDateUnavailable($deliveryDateUnavailable)
            ->setDeliveryDetail($deliveryDetail)
            ->setInquiryNumber($inquiryNumber)
            ->setPickupDate($pickupDate)
            ->setReferenceNumber($referenceNumber)
            ->setService($service)
            ->setShipmentAddress($shipmentAddress)
            ->setShipmentPackage($shipmentPackage)
            ->setShipmentType($shipmentType)
            ->setShipmentWeight($shipmentWeight)
            ->setShipperNumber($shipperNumber);
    }
    /**
     * Get additionalAttribute value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalCodeDescriptionValueType[]|null
     */
    public function getAdditionalAttribute()
    {
        return isset($this->additionalAttribute) ? $this->additionalAttribute : null;
    }
    /**
     * Set additionalAttribute value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalCodeDescriptionValueType[] $additionalAttribute
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentType
     */
    public function setAdditionalAttribute(array $additionalAttribute = array())
    {
        foreach ($additionalAttribute as $shipmentTypeAdditionalAttributeItem) {
            // validation for constraint: itemType
            if (!$shipmentTypeAdditionalAttributeItem instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalCodeDescriptionValueType) {
                throw new \InvalidArgumentException(sprintf('The additionalAttribute property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalCodeDescriptionValueType, "%s" given', is_object($shipmentTypeAdditionalAttributeItem) ? get_class($shipmentTypeAdditionalAttributeItem) : gettype($shipmentTypeAdditionalAttributeItem)), __LINE__);
            }
        }
        if (is_null($additionalAttribute) || (is_array($additionalAttribute) && empty($additionalAttribute))) {
            unset($this->additionalAttribute);
        } else {
            $this->additionalAttribute = $additionalAttribute;
        }
        return $this;
    }
    /**
     * Add item to additionalAttribute value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalCodeDescriptionValueType $item
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentType
     */
    public function addToAdditionalAttribute(\ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalCodeDescriptionValueType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalCodeDescriptionValueType) {
            throw new \InvalidArgumentException(sprintf('The additionalAttribute property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalCodeDescriptionValueType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->additionalAttribute[] = $item;
        return $this;
    }
    /**
     * Get deliveryDateUnavailable value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\DeliveryDateUnavailableType|null
     */
    public function getDeliveryDateUnavailable()
    {
        return isset($this->deliveryDateUnavailable) ? $this->deliveryDateUnavailable : null;
    }
    /**
     * Set deliveryDateUnavailable value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\DeliveryDateUnavailableType $deliveryDateUnavailable
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentType
     */
    public function setDeliveryDateUnavailable(\ericchew87\WWEXSpeedShip2PHP\Structs\DeliveryDateUnavailableType $deliveryDateUnavailable = null)
    {
        if (is_null($deliveryDateUnavailable) || (is_array($deliveryDateUnavailable) && empty($deliveryDateUnavailable))) {
            unset($this->deliveryDateUnavailable);
        } else {
            $this->deliveryDateUnavailable = $deliveryDateUnavailable;
        }
        return $this;
    }
    /**
     * Get deliveryDetail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\DeliveryDetailType[]|null
     */
    public function getDeliveryDetail()
    {
        return isset($this->deliveryDetail) ? $this->deliveryDetail : null;
    }
    /**
     * Set deliveryDetail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\DeliveryDetailType[] $deliveryDetail
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentType
     */
    public function setDeliveryDetail(array $deliveryDetail = array())
    {
        foreach ($deliveryDetail as $shipmentTypeDeliveryDetailItem) {
            // validation for constraint: itemType
            if (!$shipmentTypeDeliveryDetailItem instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\DeliveryDetailType) {
                throw new \InvalidArgumentException(sprintf('The deliveryDetail property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\DeliveryDetailType, "%s" given', is_object($shipmentTypeDeliveryDetailItem) ? get_class($shipmentTypeDeliveryDetailItem) : gettype($shipmentTypeDeliveryDetailItem)), __LINE__);
            }
        }
        if (is_null($deliveryDetail) || (is_array($deliveryDetail) && empty($deliveryDetail))) {
            unset($this->deliveryDetail);
        } else {
            $this->deliveryDetail = $deliveryDetail;
        }
        return $this;
    }
    /**
     * Add item to deliveryDetail value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\DeliveryDetailType $item
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentType
     */
    public function addToDeliveryDetail(\ericchew87\WWEXSpeedShip2PHP\Structs\DeliveryDetailType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\DeliveryDetailType) {
            throw new \InvalidArgumentException(sprintf('The deliveryDetail property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\DeliveryDetailType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->deliveryDetail[] = $item;
        return $this;
    }
    /**
     * Get inquiryNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\CodeDescriptionValueType|null
     */
    public function getInquiryNumber()
    {
        return isset($this->inquiryNumber) ? $this->inquiryNumber : null;
    }
    /**
     * Set inquiryNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\CodeDescriptionValueType $inquiryNumber
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentType
     */
    public function setInquiryNumber(\ericchew87\WWEXSpeedShip2PHP\Structs\CodeDescriptionValueType $inquiryNumber = null)
    {
        if (is_null($inquiryNumber) || (is_array($inquiryNumber) && empty($inquiryNumber))) {
            unset($this->inquiryNumber);
        } else {
            $this->inquiryNumber = $inquiryNumber;
        }
        return $this;
    }
    /**
     * Get pickupDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPickupDate()
    {
        return isset($this->pickupDate) ? $this->pickupDate : null;
    }
    /**
     * Set pickupDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pickupDate
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentType
     */
    public function setPickupDate($pickupDate = null)
    {
        // validation for constraint: string
        if (!is_null($pickupDate) && !is_string($pickupDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupDate)), __LINE__);
        }
        if (is_null($pickupDate) || (is_array($pickupDate) && empty($pickupDate))) {
            unset($this->pickupDate);
        } else {
            $this->pickupDate = $pickupDate;
        }
        return $this;
    }
    /**
     * Get referenceNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReferenceNumberType[]|null
     */
    public function getReferenceNumber()
    {
        return isset($this->referenceNumber) ? $this->referenceNumber : null;
    }
    /**
     * Set referenceNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReferenceNumberType[] $referenceNumber
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentType
     */
    public function setReferenceNumber(array $referenceNumber = array())
    {
        foreach ($referenceNumber as $shipmentTypeReferenceNumberItem) {
            // validation for constraint: itemType
            if (!$shipmentTypeReferenceNumberItem instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReferenceNumberType) {
                throw new \InvalidArgumentException(sprintf('The referenceNumber property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReferenceNumberType, "%s" given', is_object($shipmentTypeReferenceNumberItem) ? get_class($shipmentTypeReferenceNumberItem) : gettype($shipmentTypeReferenceNumberItem)), __LINE__);
            }
        }
        if (is_null($referenceNumber) || (is_array($referenceNumber) && empty($referenceNumber))) {
            unset($this->referenceNumber);
        } else {
            $this->referenceNumber = $referenceNumber;
        }
        return $this;
    }
    /**
     * Add item to referenceNumber value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReferenceNumberType $item
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentType
     */
    public function addToReferenceNumber(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReferenceNumberType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReferenceNumberType) {
            throw new \InvalidArgumentException(sprintf('The referenceNumber property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReferenceNumberType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->referenceNumber[] = $item;
        return $this;
    }
    /**
     * Get service value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ServiceType|null
     */
    public function getService()
    {
        return isset($this->service) ? $this->service : null;
    }
    /**
     * Set service value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ServiceType $service
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentType
     */
    public function setService(\ericchew87\WWEXSpeedShip2PHP\Structs\ServiceType $service = null)
    {
        if (is_null($service) || (is_array($service) && empty($service))) {
            unset($this->service);
        } else {
            $this->service = $service;
        }
        return $this;
    }
    /**
     * Get shipmentAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentAddressType[]|null
     */
    public function getShipmentAddress()
    {
        return isset($this->shipmentAddress) ? $this->shipmentAddress : null;
    }
    /**
     * Set shipmentAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentAddressType[] $shipmentAddress
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentType
     */
    public function setShipmentAddress(array $shipmentAddress = array())
    {
        foreach ($shipmentAddress as $shipmentTypeShipmentAddressItem) {
            // validation for constraint: itemType
            if (!$shipmentTypeShipmentAddressItem instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentAddressType) {
                throw new \InvalidArgumentException(sprintf('The shipmentAddress property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentAddressType, "%s" given', is_object($shipmentTypeShipmentAddressItem) ? get_class($shipmentTypeShipmentAddressItem) : gettype($shipmentTypeShipmentAddressItem)), __LINE__);
            }
        }
        if (is_null($shipmentAddress) || (is_array($shipmentAddress) && empty($shipmentAddress))) {
            unset($this->shipmentAddress);
        } else {
            $this->shipmentAddress = $shipmentAddress;
        }
        return $this;
    }
    /**
     * Add item to shipmentAddress value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentAddressType $item
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentType
     */
    public function addToShipmentAddress(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentAddressType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentAddressType) {
            throw new \InvalidArgumentException(sprintf('The shipmentAddress property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentAddressType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->shipmentAddress[] = $item;
        return $this;
    }
    /**
     * Get shipmentPackage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType[]|null
     */
    public function getShipmentPackage()
    {
        return isset($this->shipmentPackage) ? $this->shipmentPackage : null;
    }
    /**
     * Set shipmentPackage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType[] $shipmentPackage
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentType
     */
    public function setShipmentPackage(array $shipmentPackage = array())
    {
        foreach ($shipmentPackage as $shipmentTypeShipmentPackageItem) {
            // validation for constraint: itemType
            if (!$shipmentTypeShipmentPackageItem instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType) {
                throw new \InvalidArgumentException(sprintf('The shipmentPackage property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType, "%s" given', is_object($shipmentTypeShipmentPackageItem) ? get_class($shipmentTypeShipmentPackageItem) : gettype($shipmentTypeShipmentPackageItem)), __LINE__);
            }
        }
        if (is_null($shipmentPackage) || (is_array($shipmentPackage) && empty($shipmentPackage))) {
            unset($this->shipmentPackage);
        } else {
            $this->shipmentPackage = $shipmentPackage;
        }
        return $this;
    }
    /**
     * Add item to shipmentPackage value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType $item
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentType
     */
    public function addToShipmentPackage(\ericchew87\WWEXSpeedShip2PHP\Structs\PackageType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType) {
            throw new \InvalidArgumentException(sprintf('The shipmentPackage property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->shipmentPackage[] = $item;
        return $this;
    }
    /**
     * Get shipmentType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\RefShipmentType|null
     */
    public function getShipmentType()
    {
        return isset($this->shipmentType) ? $this->shipmentType : null;
    }
    /**
     * Set shipmentType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\RefShipmentType $shipmentType
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentType
     */
    public function setShipmentType(\ericchew87\WWEXSpeedShip2PHP\Structs\RefShipmentType $shipmentType = null)
    {
        if (is_null($shipmentType) || (is_array($shipmentType) && empty($shipmentType))) {
            unset($this->shipmentType);
        } else {
            $this->shipmentType = $shipmentType;
        }
        return $this;
    }
    /**
     * Get shipmentWeight value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\WeightType|null
     */
    public function getShipmentWeight()
    {
        return isset($this->shipmentWeight) ? $this->shipmentWeight : null;
    }
    /**
     * Set shipmentWeight value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\WeightType $shipmentWeight
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentType
     */
    public function setShipmentWeight(\ericchew87\WWEXSpeedShip2PHP\Structs\WeightType $shipmentWeight = null)
    {
        if (is_null($shipmentWeight) || (is_array($shipmentWeight) && empty($shipmentWeight))) {
            unset($this->shipmentWeight);
        } else {
            $this->shipmentWeight = $shipmentWeight;
        }
        return $this;
    }
    /**
     * Get shipperNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipperNumber()
    {
        return isset($this->shipperNumber) ? $this->shipperNumber : null;
    }
    /**
     * Set shipperNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shipperNumber
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentType
     */
    public function setShipperNumber($shipperNumber = null)
    {
        // validation for constraint: string
        if (!is_null($shipperNumber) && !is_string($shipperNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipperNumber)), __LINE__);
        }
        if (is_null($shipperNumber) || (is_array($shipperNumber) && empty($shipperNumber))) {
            unset($this->shipperNumber);
        } else {
            $this->shipperNumber = $shipperNumber;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentType
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
