<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomReport StructType
 * @subpackage Structs
 */
class CustomReport extends AbstractStructBase
{
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $ID;
    /**
     * The Name
     * @var string
     */
    public $Name;
    /**
     * Constructor method for CustomReport
     * @uses CustomReport::setID()
     * @uses CustomReport::setName()
     * @param int $iD
     * @param string $name
     */
    public function __construct($iD = null, $name = null)
    {
        $this
            ->setID($iD)
            ->setName($name);
    }
    /**
     * Get ID value
     * @return int|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param int $iD
     * @return \StructType\CustomReport
     */
    public function setID($iD = null)
    {
        // validation for constraint: int
        if (!is_null($iD) && !is_numeric($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\CustomReport
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CustomReport
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
