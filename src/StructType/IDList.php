<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IDList StructType
 * @subpackage Structs
 */
class IDList extends AbstractStructBase
{
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    public $ID;
    /**
     * Constructor method for IDList
     * @uses IDList::setID()
     * @param int[] $iD
     */
    public function __construct(array $iD = array())
    {
        $this
            ->setID($iD);
    }
    /**
     * Get ID value
     * @return int[]|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @throws \InvalidArgumentException
     * @param int[] $iD
     * @return \StructType\IDList
     */
    public function setID(array $iD = array())
    {
        foreach ($iD as $iDListIDItem) {
            // validation for constraint: itemType
            if (!is_numeric($iDListIDItem)) {
                throw new \InvalidArgumentException(sprintf('The ID property can only contain items of integer, "%s" given', is_object($iDListIDItem) ? get_class($iDListIDItem) : gettype($iDListIDItem)), __LINE__);
            }
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Add item to ID value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \StructType\IDList
     */
    public function addToID($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The ID property can only contain items of integer, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ID[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\IDList
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
