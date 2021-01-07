<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ActivityType Structs
 * @subpackage Structs
 */
class ActivityType extends AbstractStructBase
{
    /**
     * The activityLocation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ActivityLocationType
     */
    public $activityLocation;
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
     * The date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $date;
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
     * The nextScheduleActivity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\NextScheduleActivityType
     */
    public $nextScheduleActivity;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\StatusType
     */
    public $status;
    /**
     * The time
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $time;
    /**
     * Constructor method for ActivityType
     * @uses ActivityType::setActivityLocation()
     * @uses ActivityType::setAdditionalAttribute()
     * @uses ActivityType::setDate()
     * @uses ActivityType::setDocument()
     * @uses ActivityType::setNextScheduleActivity()
     * @uses ActivityType::setStatus()
     * @uses ActivityType::setTime()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ActivityLocationType $activityLocation
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalCodeDescriptionValueType[] $additionalAttribute
     * @param string $date
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\DocumentType[] $document
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\NextScheduleActivityType $nextScheduleActivity
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\StatusType $status
     * @param string $time
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\ActivityLocationType $activityLocation = null, array $additionalAttribute = array(), $date = null, array $document = array(), \ericchew87\WWEXSpeedShip2PHP\Structs\NextScheduleActivityType $nextScheduleActivity = null, \ericchew87\WWEXSpeedShip2PHP\Structs\StatusType $status = null, $time = null)
    {
        $this
            ->setActivityLocation($activityLocation)
            ->setAdditionalAttribute($additionalAttribute)
            ->setDate($date)
            ->setDocument($document)
            ->setNextScheduleActivity($nextScheduleActivity)
            ->setStatus($status)
            ->setTime($time);
    }
    /**
     * Get activityLocation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ActivityLocationType|null
     */
    public function getActivityLocation()
    {
        return isset($this->activityLocation) ? $this->activityLocation : null;
    }
    /**
     * Set activityLocation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ActivityLocationType $activityLocation
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ActivityType
     */
    public function setActivityLocation(\ericchew87\WWEXSpeedShip2PHP\Structs\ActivityLocationType $activityLocation = null)
    {
        if (is_null($activityLocation) || (is_array($activityLocation) && empty($activityLocation))) {
            unset($this->activityLocation);
        } else {
            $this->activityLocation = $activityLocation;
        }
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ActivityType
     */
    public function setAdditionalAttribute(array $additionalAttribute = array())
    {
        foreach ($additionalAttribute as $activityTypeAdditionalAttributeItem) {
            // validation for constraint: itemType
            if (!$activityTypeAdditionalAttributeItem instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalCodeDescriptionValueType) {
                throw new \InvalidArgumentException(sprintf('The additionalAttribute property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalCodeDescriptionValueType, "%s" given', is_object($activityTypeAdditionalAttributeItem) ? get_class($activityTypeAdditionalAttributeItem) : gettype($activityTypeAdditionalAttributeItem)), __LINE__);
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ActivityType
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
     * Get date value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDate()
    {
        return isset($this->date) ? $this->date : null;
    }
    /**
     * Set date value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $date
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ActivityType
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        if (is_null($date) || (is_array($date) && empty($date))) {
            unset($this->date);
        } else {
            $this->date = $date;
        }
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ActivityType
     */
    public function setDocument(array $document = array())
    {
        foreach ($document as $activityTypeDocumentItem) {
            // validation for constraint: itemType
            if (!$activityTypeDocumentItem instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\DocumentType) {
                throw new \InvalidArgumentException(sprintf('The document property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\DocumentType, "%s" given', is_object($activityTypeDocumentItem) ? get_class($activityTypeDocumentItem) : gettype($activityTypeDocumentItem)), __LINE__);
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ActivityType
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
     * Get nextScheduleActivity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\NextScheduleActivityType|null
     */
    public function getNextScheduleActivity()
    {
        return isset($this->nextScheduleActivity) ? $this->nextScheduleActivity : null;
    }
    /**
     * Set nextScheduleActivity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\NextScheduleActivityType $nextScheduleActivity
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ActivityType
     */
    public function setNextScheduleActivity(\ericchew87\WWEXSpeedShip2PHP\Structs\NextScheduleActivityType $nextScheduleActivity = null)
    {
        if (is_null($nextScheduleActivity) || (is_array($nextScheduleActivity) && empty($nextScheduleActivity))) {
            unset($this->nextScheduleActivity);
        } else {
            $this->nextScheduleActivity = $nextScheduleActivity;
        }
        return $this;
    }
    /**
     * Get status value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\StatusType|null
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : null;
    }
    /**
     * Set status value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\StatusType $status
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ActivityType
     */
    public function setStatus(\ericchew87\WWEXSpeedShip2PHP\Structs\StatusType $status = null)
    {
        if (is_null($status) || (is_array($status) && empty($status))) {
            unset($this->status);
        } else {
            $this->status = $status;
        }
        return $this;
    }
    /**
     * Get time value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTime()
    {
        return isset($this->time) ? $this->time : null;
    }
    /**
     * Set time value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $time
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ActivityType
     */
    public function setTime($time = null)
    {
        // validation for constraint: string
        if (!is_null($time) && !is_string($time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($time)), __LINE__);
        }
        if (is_null($time) || (is_array($time) && empty($time))) {
            unset($this->time);
        } else {
            $this->time = $time;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ActivityType
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
