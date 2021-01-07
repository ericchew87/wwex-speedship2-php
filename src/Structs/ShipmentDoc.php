<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentDoc Structs
 * @subpackage Structs
 */
class ShipmentDoc extends AbstractStructBase
{
    /**
     * The docContent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $docContent;
    /**
     * The docName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $docName;
    /**
     * Constructor method for ShipmentDoc
     * @uses ShipmentDoc::setDocContent()
     * @uses ShipmentDoc::setDocName()
     * @param string $docContent
     * @param string $docName
     */
    public function __construct($docContent = null, $docName = null)
    {
        $this
            ->setDocContent($docContent)
            ->setDocName($docName);
    }
    /**
     * Get docContent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDocContent()
    {
        return isset($this->docContent) ? $this->docContent : null;
    }
    /**
     * Set docContent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $docContent
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentDoc
     */
    public function setDocContent($docContent = null)
    {
        // validation for constraint: string
        if (!is_null($docContent) && !is_string($docContent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($docContent)), __LINE__);
        }
        if (is_null($docContent) || (is_array($docContent) && empty($docContent))) {
            unset($this->docContent);
        } else {
            $this->docContent = $docContent;
        }
        return $this;
    }
    /**
     * Get docName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDocName()
    {
        return isset($this->docName) ? $this->docName : null;
    }
    /**
     * Set docName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $docName
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentDoc
     */
    public function setDocName($docName = null)
    {
        // validation for constraint: string
        if (!is_null($docName) && !is_string($docName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($docName)), __LINE__);
        }
        if (is_null($docName) || (is_array($docName) && empty($docName))) {
            unset($this->docName);
        } else {
            $this->docName = $docName;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentDoc
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
