<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentType Structs
 * @subpackage Structs
 */
class DocumentType extends AbstractStructBase
{
    /**
     * The content
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $content;
    /**
     * The format
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\CommonCodeDescriptionType
     */
    public $format;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\CommonCodeDescriptionType
     */
    public $type;
    /**
     * Constructor method for DocumentType
     * @uses DocumentType::setContent()
     * @uses DocumentType::setFormat()
     * @uses DocumentType::setType()
     * @param string $content
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\CommonCodeDescriptionType $format
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\CommonCodeDescriptionType $type
     */
    public function __construct($content = null, \ericchew87\WWEXSpeedShip2PHP\Structs\CommonCodeDescriptionType $format = null, \ericchew87\WWEXSpeedShip2PHP\Structs\CommonCodeDescriptionType $type = null)
    {
        $this
            ->setContent($content)
            ->setFormat($format)
            ->setType($type);
    }
    /**
     * Get content value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getContent()
    {
        return isset($this->content) ? $this->content : null;
    }
    /**
     * Set content value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $content
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\DocumentType
     */
    public function setContent($content = null)
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($content)), __LINE__);
        }
        if (is_null($content) || (is_array($content) && empty($content))) {
            unset($this->content);
        } else {
            $this->content = $content;
        }
        return $this;
    }
    /**
     * Get format value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\CommonCodeDescriptionType|null
     */
    public function getFormat()
    {
        return isset($this->format) ? $this->format : null;
    }
    /**
     * Set format value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\CommonCodeDescriptionType $format
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\DocumentType
     */
    public function setFormat(\ericchew87\WWEXSpeedShip2PHP\Structs\CommonCodeDescriptionType $format = null)
    {
        if (is_null($format) || (is_array($format) && empty($format))) {
            unset($this->format);
        } else {
            $this->format = $format;
        }
        return $this;
    }
    /**
     * Get type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\CommonCodeDescriptionType|null
     */
    public function getType()
    {
        return isset($this->type) ? $this->type : null;
    }
    /**
     * Set type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\CommonCodeDescriptionType $type
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\DocumentType
     */
    public function setType(\ericchew87\WWEXSpeedShip2PHP\Structs\CommonCodeDescriptionType $type = null)
    {
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->type);
        } else {
            $this->type = $type;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\DocumentType
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
