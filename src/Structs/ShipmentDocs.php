<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentDocs Structs
 * @subpackage Structs
 */
class ShipmentDocs extends AbstractStructBase
{
    /**
     * The shipmentDoc
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentDoc[]
     */
    public $shipmentDoc;
    /**
     * Constructor method for ShipmentDocs
     * @uses ShipmentDocs::setShipmentDoc()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentDoc[] $shipmentDoc
     */
    public function __construct(array $shipmentDoc = array())
    {
        $this
            ->setShipmentDoc($shipmentDoc);
    }
    /**
     * Get shipmentDoc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentDoc[]|null
     */
    public function getShipmentDoc()
    {
        return isset($this->shipmentDoc) ? $this->shipmentDoc : null;
    }
    /**
     * Set shipmentDoc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentDoc[] $shipmentDoc
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentDocs
     */
    public function setShipmentDoc(array $shipmentDoc = array())
    {
        foreach ($shipmentDoc as $shipmentDocsShipmentDocItem) {
            // validation for constraint: itemType
            if (!$shipmentDocsShipmentDocItem instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentDoc) {
                throw new \InvalidArgumentException(sprintf('The shipmentDoc property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentDoc, "%s" given', is_object($shipmentDocsShipmentDocItem) ? get_class($shipmentDocsShipmentDocItem) : gettype($shipmentDocsShipmentDocItem)), __LINE__);
            }
        }
        if (is_null($shipmentDoc) || (is_array($shipmentDoc) && empty($shipmentDoc))) {
            unset($this->shipmentDoc);
        } else {
            $this->shipmentDoc = $shipmentDoc;
        }
        return $this;
    }
    /**
     * Add item to shipmentDoc value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentDoc $item
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentDocs
     */
    public function addToShipmentDoc(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentDoc $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentDoc) {
            throw new \InvalidArgumentException(sprintf('The shipmentDoc property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentDoc, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->shipmentDoc[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentDocs
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
