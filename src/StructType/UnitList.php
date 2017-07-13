<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnitList StructType
 * @subpackage Structs
 */
class UnitList extends AbstractStructBase
{
    /**
     * The Units
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Unit[]
     */
    public $Units;
    /**
     * Constructor method for UnitList
     * @uses UnitList::setUnits()
     * @param \StructType\Unit[] $units
     */
    public function __construct(array $units = array())
    {
        $this
            ->setUnits($units);
    }
    /**
     * Get Units value
     * @return \StructType\Unit[]|null
     */
    public function getUnits()
    {
        return $this->Units;
    }
    /**
     * Set Units value
     * @throws \InvalidArgumentException
     * @param \StructType\Unit[] $units
     * @return \StructType\UnitList
     */
    public function setUnits(array $units = array())
    {
        foreach ($units as $unitListUnitsItem) {
            // validation for constraint: itemType
            if (!$unitListUnitsItem instanceof \StructType\Unit) {
                throw new \InvalidArgumentException(sprintf('The Units property can only contain items of \StructType\Unit, "%s" given', is_object($unitListUnitsItem) ? get_class($unitListUnitsItem) : gettype($unitListUnitsItem)), __LINE__);
            }
        }
        $this->Units = $units;
        return $this;
    }
    /**
     * Add item to Units value
     * @throws \InvalidArgumentException
     * @param \StructType\Unit $item
     * @return \StructType\UnitList
     */
    public function addToUnits(\StructType\Unit $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Unit) {
            throw new \InvalidArgumentException(sprintf('The Units property can only contain items of \StructType\Unit, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Units[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\UnitList
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
