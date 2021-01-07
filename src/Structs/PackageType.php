<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageType Structs
 * @subpackage Structs
 */
class PackageType extends AbstractStructBase
{
    /**
     * The COD
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\CODType
     */
    public $COD;
    /**
     * The activity
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ActivityType[]
     */
    public $activity;
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
     * The alternateTrackingNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $alternateTrackingNumber;
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
     * The document
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\DocumentType[]
     */
    public $document;
    /**
     * The message
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\MessageType[]
     */
    public $message;
    /**
     * The packageAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\PackageAddressType[]
     */
    public $packageAddress;
    /**
     * The packageServiceOption
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ServiceOptionType[]
     */
    public $packageServiceOption;
    /**
     * The packageWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\WeightType
     */
    public $packageWeight;
    /**
     * The redirect
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\RedirectType
     */
    public $redirect;
    /**
     * The referenceNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ReferenceNumberType[]
     */
    public $referenceNumber;
    /**
     * The trackingNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $trackingNumber;
    /**
     * Constructor method for PackageType
     * @uses PackageType::setCOD()
     * @uses PackageType::setActivity()
     * @uses PackageType::setAdditionalAttribute()
     * @uses PackageType::setAlternateTrackingNumber()
     * @uses PackageType::setDeliveryDetail()
     * @uses PackageType::setDocument()
     * @uses PackageType::setMessage()
     * @uses PackageType::setPackageAddress()
     * @uses PackageType::setPackageServiceOption()
     * @uses PackageType::setPackageWeight()
     * @uses PackageType::setRedirect()
     * @uses PackageType::setReferenceNumber()
     * @uses PackageType::setTrackingNumber()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\CODType $cOD
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ActivityType[] $activity
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalCodeDescriptionValueType[] $additionalAttribute
     * @param string[] $alternateTrackingNumber
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\DeliveryDetailType[] $deliveryDetail
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\DocumentType[] $document
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\MessageType[] $message
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\PackageAddressType[] $packageAddress
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ServiceOptionType[] $packageServiceOption
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\WeightType $packageWeight
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\RedirectType $redirect
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ReferenceNumberType[] $referenceNumber
     * @param string $trackingNumber
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\CODType $cOD = null, array $activity = array(), array $additionalAttribute = array(), array $alternateTrackingNumber = array(), array $deliveryDetail = array(), array $document = array(), array $message = array(), array $packageAddress = array(), array $packageServiceOption = array(), \ericchew87\WWEXSpeedShip2PHP\Structs\WeightType $packageWeight = null, \ericchew87\WWEXSpeedShip2PHP\Structs\RedirectType $redirect = null, array $referenceNumber = array(), $trackingNumber = null)
    {
        $this
            ->setCOD($cOD)
            ->setActivity($activity)
            ->setAdditionalAttribute($additionalAttribute)
            ->setAlternateTrackingNumber($alternateTrackingNumber)
            ->setDeliveryDetail($deliveryDetail)
            ->setDocument($document)
            ->setMessage($message)
            ->setPackageAddress($packageAddress)
            ->setPackageServiceOption($packageServiceOption)
            ->setPackageWeight($packageWeight)
            ->setRedirect($redirect)
            ->setReferenceNumber($referenceNumber)
            ->setTrackingNumber($trackingNumber);
    }
    /**
     * Get COD value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\CODType|null
     */
    public function getCOD()
    {
        return isset($this->COD) ? $this->COD : null;
    }
    /**
     * Set COD value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\CODType $cOD
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType
     */
    public function setCOD(\ericchew87\WWEXSpeedShip2PHP\Structs\CODType $cOD = null)
    {
        if (is_null($cOD) || (is_array($cOD) && empty($cOD))) {
            unset($this->COD);
        } else {
            $this->COD = $cOD;
        }
        return $this;
    }
    /**
     * Get activity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ActivityType[]|null
     */
    public function getActivity()
    {
        return isset($this->activity) ? $this->activity : null;
    }
    /**
     * Set activity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ActivityType[] $activity
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType
     */
    public function setActivity(array $activity = array())
    {
        foreach ($activity as $packageTypeActivityItem) {
            // validation for constraint: itemType
            if (!$packageTypeActivityItem instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\ActivityType) {
                throw new \InvalidArgumentException(sprintf('The activity property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\ActivityType, "%s" given', is_object($packageTypeActivityItem) ? get_class($packageTypeActivityItem) : gettype($packageTypeActivityItem)), __LINE__);
            }
        }
        if (is_null($activity) || (is_array($activity) && empty($activity))) {
            unset($this->activity);
        } else {
            $this->activity = $activity;
        }
        return $this;
    }
    /**
     * Add item to activity value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ActivityType $item
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType
     */
    public function addToActivity(\ericchew87\WWEXSpeedShip2PHP\Structs\ActivityType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\ActivityType) {
            throw new \InvalidArgumentException(sprintf('The activity property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\ActivityType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->activity[] = $item;
        return $this;
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType
     */
    public function setAdditionalAttribute(array $additionalAttribute = array())
    {
        foreach ($additionalAttribute as $packageTypeAdditionalAttributeItem) {
            // validation for constraint: itemType
            if (!$packageTypeAdditionalAttributeItem instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalCodeDescriptionValueType) {
                throw new \InvalidArgumentException(sprintf('The additionalAttribute property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalCodeDescriptionValueType, "%s" given', is_object($packageTypeAdditionalAttributeItem) ? get_class($packageTypeAdditionalAttributeItem) : gettype($packageTypeAdditionalAttributeItem)), __LINE__);
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType
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
     * Get alternateTrackingNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getAlternateTrackingNumber()
    {
        return isset($this->alternateTrackingNumber) ? $this->alternateTrackingNumber : null;
    }
    /**
     * Set alternateTrackingNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $alternateTrackingNumber
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType
     */
    public function setAlternateTrackingNumber(array $alternateTrackingNumber = array())
    {
        foreach ($alternateTrackingNumber as $packageTypeAlternateTrackingNumberItem) {
            // validation for constraint: itemType
            if (!is_string($packageTypeAlternateTrackingNumberItem)) {
                throw new \InvalidArgumentException(sprintf('The alternateTrackingNumber property can only contain items of string, "%s" given', is_object($packageTypeAlternateTrackingNumberItem) ? get_class($packageTypeAlternateTrackingNumberItem) : gettype($packageTypeAlternateTrackingNumberItem)), __LINE__);
            }
        }
        if (is_null($alternateTrackingNumber) || (is_array($alternateTrackingNumber) && empty($alternateTrackingNumber))) {
            unset($this->alternateTrackingNumber);
        } else {
            $this->alternateTrackingNumber = $alternateTrackingNumber;
        }
        return $this;
    }
    /**
     * Add item to alternateTrackingNumber value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType
     */
    public function addToAlternateTrackingNumber($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The alternateTrackingNumber property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->alternateTrackingNumber[] = $item;
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType
     */
    public function setDeliveryDetail(array $deliveryDetail = array())
    {
        foreach ($deliveryDetail as $packageTypeDeliveryDetailItem) {
            // validation for constraint: itemType
            if (!$packageTypeDeliveryDetailItem instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\DeliveryDetailType) {
                throw new \InvalidArgumentException(sprintf('The deliveryDetail property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\DeliveryDetailType, "%s" given', is_object($packageTypeDeliveryDetailItem) ? get_class($packageTypeDeliveryDetailItem) : gettype($packageTypeDeliveryDetailItem)), __LINE__);
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType
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
     * Get document value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\DocumentType[]|null
     */
    public function getDocument()
    {
        return isset($this->document) ? $this->document : null;
    }
    /**
     * Set document value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\DocumentType[] $document
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType
     */
    public function setDocument(array $document = array())
    {
        foreach ($document as $packageTypeDocumentItem) {
            // validation for constraint: itemType
            if (!$packageTypeDocumentItem instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\DocumentType) {
                throw new \InvalidArgumentException(sprintf('The document property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\DocumentType, "%s" given', is_object($packageTypeDocumentItem) ? get_class($packageTypeDocumentItem) : gettype($packageTypeDocumentItem)), __LINE__);
            }
        }
        if (is_null($document) || (is_array($document) && empty($document))) {
            unset($this->document);
        } else {
            $this->document = $document;
        }
        return $this;
    }
    /**
     * Add item to document value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\DocumentType $item
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType
     */
    public function addToDocument(\ericchew87\WWEXSpeedShip2PHP\Structs\DocumentType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\DocumentType) {
            throw new \InvalidArgumentException(sprintf('The document property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\DocumentType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->document[] = $item;
        return $this;
    }
    /**
     * Get message value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\MessageType[]|null
     */
    public function getMessage()
    {
        return isset($this->message) ? $this->message : null;
    }
    /**
     * Set message value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\MessageType[] $message
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType
     */
    public function setMessage(array $message = array())
    {
        foreach ($message as $packageTypeMessageItem) {
            // validation for constraint: itemType
            if (!$packageTypeMessageItem instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\MessageType) {
                throw new \InvalidArgumentException(sprintf('The message property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\MessageType, "%s" given', is_object($packageTypeMessageItem) ? get_class($packageTypeMessageItem) : gettype($packageTypeMessageItem)), __LINE__);
            }
        }
        if (is_null($message) || (is_array($message) && empty($message))) {
            unset($this->message);
        } else {
            $this->message = $message;
        }
        return $this;
    }
    /**
     * Add item to message value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\MessageType $item
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType
     */
    public function addToMessage(\ericchew87\WWEXSpeedShip2PHP\Structs\MessageType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\MessageType) {
            throw new \InvalidArgumentException(sprintf('The message property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\MessageType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->message[] = $item;
        return $this;
    }
    /**
     * Get packageAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageAddressType[]|null
     */
    public function getPackageAddress()
    {
        return isset($this->packageAddress) ? $this->packageAddress : null;
    }
    /**
     * Set packageAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\PackageAddressType[] $packageAddress
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType
     */
    public function setPackageAddress(array $packageAddress = array())
    {
        foreach ($packageAddress as $packageTypePackageAddressItem) {
            // validation for constraint: itemType
            if (!$packageTypePackageAddressItem instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\PackageAddressType) {
                throw new \InvalidArgumentException(sprintf('The packageAddress property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\PackageAddressType, "%s" given', is_object($packageTypePackageAddressItem) ? get_class($packageTypePackageAddressItem) : gettype($packageTypePackageAddressItem)), __LINE__);
            }
        }
        if (is_null($packageAddress) || (is_array($packageAddress) && empty($packageAddress))) {
            unset($this->packageAddress);
        } else {
            $this->packageAddress = $packageAddress;
        }
        return $this;
    }
    /**
     * Add item to packageAddress value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\PackageAddressType $item
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType
     */
    public function addToPackageAddress(\ericchew87\WWEXSpeedShip2PHP\Structs\PackageAddressType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\PackageAddressType) {
            throw new \InvalidArgumentException(sprintf('The packageAddress property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\PackageAddressType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->packageAddress[] = $item;
        return $this;
    }
    /**
     * Get packageServiceOption value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ServiceOptionType[]|null
     */
    public function getPackageServiceOption()
    {
        return isset($this->packageServiceOption) ? $this->packageServiceOption : null;
    }
    /**
     * Set packageServiceOption value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ServiceOptionType[] $packageServiceOption
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType
     */
    public function setPackageServiceOption(array $packageServiceOption = array())
    {
        foreach ($packageServiceOption as $packageTypePackageServiceOptionItem) {
            // validation for constraint: itemType
            if (!$packageTypePackageServiceOptionItem instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\ServiceOptionType) {
                throw new \InvalidArgumentException(sprintf('The packageServiceOption property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\ServiceOptionType, "%s" given', is_object($packageTypePackageServiceOptionItem) ? get_class($packageTypePackageServiceOptionItem) : gettype($packageTypePackageServiceOptionItem)), __LINE__);
            }
        }
        if (is_null($packageServiceOption) || (is_array($packageServiceOption) && empty($packageServiceOption))) {
            unset($this->packageServiceOption);
        } else {
            $this->packageServiceOption = $packageServiceOption;
        }
        return $this;
    }
    /**
     * Add item to packageServiceOption value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ServiceOptionType $item
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType
     */
    public function addToPackageServiceOption(\ericchew87\WWEXSpeedShip2PHP\Structs\ServiceOptionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\ServiceOptionType) {
            throw new \InvalidArgumentException(sprintf('The packageServiceOption property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\ServiceOptionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->packageServiceOption[] = $item;
        return $this;
    }
    /**
     * Get packageWeight value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\WeightType|null
     */
    public function getPackageWeight()
    {
        return isset($this->packageWeight) ? $this->packageWeight : null;
    }
    /**
     * Set packageWeight value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\WeightType $packageWeight
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType
     */
    public function setPackageWeight(\ericchew87\WWEXSpeedShip2PHP\Structs\WeightType $packageWeight = null)
    {
        if (is_null($packageWeight) || (is_array($packageWeight) && empty($packageWeight))) {
            unset($this->packageWeight);
        } else {
            $this->packageWeight = $packageWeight;
        }
        return $this;
    }
    /**
     * Get redirect value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\RedirectType|null
     */
    public function getRedirect()
    {
        return isset($this->redirect) ? $this->redirect : null;
    }
    /**
     * Set redirect value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\RedirectType $redirect
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType
     */
    public function setRedirect(\ericchew87\WWEXSpeedShip2PHP\Structs\RedirectType $redirect = null)
    {
        if (is_null($redirect) || (is_array($redirect) && empty($redirect))) {
            unset($this->redirect);
        } else {
            $this->redirect = $redirect;
        }
        return $this;
    }
    /**
     * Get referenceNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ReferenceNumberType[]|null
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
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ReferenceNumberType[] $referenceNumber
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType
     */
    public function setReferenceNumber(array $referenceNumber = array())
    {
        foreach ($referenceNumber as $packageTypeReferenceNumberItem) {
            // validation for constraint: itemType
            if (!$packageTypeReferenceNumberItem instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\ReferenceNumberType) {
                throw new \InvalidArgumentException(sprintf('The referenceNumber property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\ReferenceNumberType, "%s" given', is_object($packageTypeReferenceNumberItem) ? get_class($packageTypeReferenceNumberItem) : gettype($packageTypeReferenceNumberItem)), __LINE__);
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
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ReferenceNumberType $item
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType
     */
    public function addToReferenceNumber(\ericchew87\WWEXSpeedShip2PHP\Structs\ReferenceNumberType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\ReferenceNumberType) {
            throw new \InvalidArgumentException(sprintf('The referenceNumber property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\ReferenceNumberType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->referenceNumber[] = $item;
        return $this;
    }
    /**
     * Get trackingNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return isset($this->trackingNumber) ? $this->trackingNumber : null;
    }
    /**
     * Set trackingNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $trackingNumber
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType
     */
    public function setTrackingNumber($trackingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($trackingNumber) && !is_string($trackingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trackingNumber)), __LINE__);
        }
        if (is_null($trackingNumber) || (is_array($trackingNumber) && empty($trackingNumber))) {
            unset($this->trackingNumber);
        } else {
            $this->trackingNumber = $trackingNumber;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageType
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
