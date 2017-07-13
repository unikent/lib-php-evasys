<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemGroupList StructType
 * @subpackage Structs
 */
class ItemGroupList extends AbstractStructBase
{
    /**
     * The ItemGroups
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ItemGroup[]
     */
    public $ItemGroups;
    /**
     * Constructor method for ItemGroupList
     * @uses ItemGroupList::setItemGroups()
     * @param \StructType\ItemGroup[] $itemGroups
     */
    public function __construct(array $itemGroups = array())
    {
        $this
            ->setItemGroups($itemGroups);
    }
    /**
     * Get ItemGroups value
     * @return \StructType\ItemGroup[]|null
     */
    public function getItemGroups()
    {
        return $this->ItemGroups;
    }
    /**
     * Set ItemGroups value
     * @throws \InvalidArgumentException
     * @param \StructType\ItemGroup[] $itemGroups
     * @return \StructType\ItemGroupList
     */
    public function setItemGroups(array $itemGroups = array())
    {
        foreach ($itemGroups as $itemGroupListItemGroupsItem) {
            // validation for constraint: itemType
            if (!$itemGroupListItemGroupsItem instanceof \StructType\ItemGroup) {
                throw new \InvalidArgumentException(sprintf('The ItemGroups property can only contain items of \StructType\ItemGroup, "%s" given', is_object($itemGroupListItemGroupsItem) ? get_class($itemGroupListItemGroupsItem) : gettype($itemGroupListItemGroupsItem)), __LINE__);
            }
        }
        $this->ItemGroups = $itemGroups;
        return $this;
    }
    /**
     * Add item to ItemGroups value
     * @throws \InvalidArgumentException
     * @param \StructType\ItemGroup $item
     * @return \StructType\ItemGroupList
     */
    public function addToItemGroups(\StructType\ItemGroup $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ItemGroup) {
            throw new \InvalidArgumentException(sprintf('The ItemGroups property can only contain items of \StructType\ItemGroup, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \StructType\ItemGroupList
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
