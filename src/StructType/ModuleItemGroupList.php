<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModuleItemGroupList StructType
 * @subpackage Structs
 */
class ModuleItemGroupList extends AbstractStructBase
{
    /**
     * The ItemGroups
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ModuleItemGroup[]
     */
    public $ItemGroups;
    /**
     * Constructor method for ModuleItemGroupList
     * @uses ModuleItemGroupList::setItemGroups()
     * @param \StructType\ModuleItemGroup[] $itemGroups
     */
    public function __construct(array $itemGroups = array())
    {
        $this
            ->setItemGroups($itemGroups);
    }
    /**
     * Get ItemGroups value
     * @return \StructType\ModuleItemGroup[]|null
     */
    public function getItemGroups()
    {
        return $this->ItemGroups;
    }
    /**
     * Set ItemGroups value
     * @throws \InvalidArgumentException
     * @param \StructType\ModuleItemGroup[] $itemGroups
     * @return \StructType\ModuleItemGroupList
     */
    public function setItemGroups(array $itemGroups = array())
    {
        foreach ($itemGroups as $moduleItemGroupListItemGroupsItem) {
            // validation for constraint: itemType
            if (!$moduleItemGroupListItemGroupsItem instanceof \StructType\ModuleItemGroup) {
                throw new \InvalidArgumentException(sprintf('The ItemGroups property can only contain items of \StructType\ModuleItemGroup, "%s" given', is_object($moduleItemGroupListItemGroupsItem) ? get_class($moduleItemGroupListItemGroupsItem) : gettype($moduleItemGroupListItemGroupsItem)), __LINE__);
            }
        }
        $this->ItemGroups = $itemGroups;
        return $this;
    }
    /**
     * Add item to ItemGroups value
     * @throws \InvalidArgumentException
     * @param \StructType\ModuleItemGroup $item
     * @return \StructType\ModuleItemGroupList
     */
    public function addToItemGroups(\StructType\ModuleItemGroup $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ModuleItemGroup) {
            throw new \InvalidArgumentException(sprintf('The ItemGroups property can only contain items of \StructType\ModuleItemGroup, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ItemGroups[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ModuleItemGroupList
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
