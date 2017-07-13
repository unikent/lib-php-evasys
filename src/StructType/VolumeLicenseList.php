<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VolumeLicenseList StructType
 * @subpackage Structs
 */
class VolumeLicenseList extends AbstractStructBase
{
    /**
     * The VolumeLicenses
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\VolumeLicense[]
     */
    public $VolumeLicenses;
    /**
     * Constructor method for VolumeLicenseList
     * @uses VolumeLicenseList::setVolumeLicenses()
     * @param \StructType\VolumeLicense[] $volumeLicenses
     */
    public function __construct(array $volumeLicenses = array())
    {
        $this
            ->setVolumeLicenses($volumeLicenses);
    }
    /**
     * Get VolumeLicenses value
     * @return \StructType\VolumeLicense[]|null
     */
    public function getVolumeLicenses()
    {
        return $this->VolumeLicenses;
    }
    /**
     * Set VolumeLicenses value
     * @throws \InvalidArgumentException
     * @param \StructType\VolumeLicense[] $volumeLicenses
     * @return \StructType\VolumeLicenseList
     */
    public function setVolumeLicenses(array $volumeLicenses = array())
    {
        foreach ($volumeLicenses as $volumeLicenseListVolumeLicensesItem) {
            // validation for constraint: itemType
            if (!$volumeLicenseListVolumeLicensesItem instanceof \StructType\VolumeLicense) {
                throw new \InvalidArgumentException(sprintf('The VolumeLicenses property can only contain items of \StructType\VolumeLicense, "%s" given', is_object($volumeLicenseListVolumeLicensesItem) ? get_class($volumeLicenseListVolumeLicensesItem) : gettype($volumeLicenseListVolumeLicensesItem)), __LINE__);
            }
        }
        $this->VolumeLicenses = $volumeLicenses;
        return $this;
    }
    /**
     * Add item to VolumeLicenses value
     * @throws \InvalidArgumentException
     * @param \StructType\VolumeLicense $item
     * @return \StructType\VolumeLicenseList
     */
    public function addToVolumeLicenses(\StructType\VolumeLicense $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\VolumeLicense) {
            throw new \InvalidArgumentException(sprintf('The VolumeLicenses property can only contain items of \StructType\VolumeLicense, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VolumeLicenses[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\VolumeLicenseList
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
