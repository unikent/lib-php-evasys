<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StringList StructType
 * @subpackage Structs
 */
class StringList extends AbstractStructBase
{
    /**
     * The Strings
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Strings;
    /**
     * Constructor method for StringList
     * @uses StringList::setStrings()
     * @param string[] $strings
     */
    public function __construct(array $strings = array())
    {
        $this
            ->setStrings($strings);
    }
    /**
     * Get Strings value
     * @return string[]|null
     */
    public function getStrings()
    {
        return $this->Strings;
    }
    /**
     * Set Strings value
     * @throws \InvalidArgumentException
     * @param string[] $strings
     * @return \StructType\StringList
     */
    public function setStrings(array $strings = array())
    {
        foreach ($strings as $stringListStringsItem) {
            // validation for constraint: itemType
            if (!is_string($stringListStringsItem)) {
                throw new \InvalidArgumentException(sprintf('The Strings property can only contain items of string, "%s" given', is_object($stringListStringsItem) ? get_class($stringListStringsItem) : gettype($stringListStringsItem)), __LINE__);
            }
        }
        $this->Strings = $strings;
        return $this;
    }
    /**
     * Add item to Strings value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\StringList
     */
    public function addToStrings($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Strings property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Strings[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\StringList
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
