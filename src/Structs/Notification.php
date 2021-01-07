<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Notification Structs
 * @subpackage Structs
 */
class Notification extends AbstractStructBase
{
    /**
     * The notification
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $notification;
    /**
     * Constructor method for Notification
     * @uses Notification::setNotification()
     * @param string[] $notification
     */
    public function __construct(array $notification = array())
    {
        $this
            ->setNotification($notification);
    }
    /**
     * Get notification value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getNotification()
    {
        return isset($this->notification) ? $this->notification : null;
    }
    /**
     * Set notification value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $notification
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\Notification
     */
    public function setNotification(array $notification = array())
    {
        foreach ($notification as $notificationNotificationItem) {
            // validation for constraint: itemType
            if (!is_string($notificationNotificationItem)) {
                throw new \InvalidArgumentException(sprintf('The notification property can only contain items of string, "%s" given', is_object($notificationNotificationItem) ? get_class($notificationNotificationItem) : gettype($notificationNotificationItem)), __LINE__);
            }
        }
        if (is_null($notification) || (is_array($notification) && empty($notification))) {
            unset($this->notification);
        } else {
            $this->notification = $notification;
        }
        return $this;
    }
    /**
     * Add item to notification value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\Notification
     */
    public function addToNotification($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The notification property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->notification[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\Notification
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
