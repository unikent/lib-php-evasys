<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemList StructType
 * @subpackage Structs
 */
class ItemList extends AbstractStructBase
{
    /**
     * The Items
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Item[]
     */
    public $Items;
    /**
     * Constructor method for ItemList
     * @uses ItemList::setItems()
     * @param \StructType\Item[] $items
     */
    public function __construct(array $items = array())
    {
        $this
            ->setItems($items);
    }
    /**
     * Get Items value
     * @return \StructType\Item[]|null
     */
    public function getItems()
    {
        return $this->Items;
    }
    /**
     * Set Items value
     * @throws \InvalidArgumentException
     * @param \StructType\Item[] $items
     * @return \StructType\ItemList
     */
    public function setItems(array $items = array())
    {
        foreach ($items as $itemListItemsItem) {
            // validation for constraint: itemType
            if (!$itemListItemsItem instanceof \StructType\Item) {
                throw new \InvalidArgumentException(sprintf('The Items property can only contain items of \StructType\Item, "%s" given', is_object($itemListItemsItem) ? get_class($itemListItemsItem) : gettype($itemListItemsItem)), __LINE__);
            }
        }
        $this->Items = $items;
        return $this;
    }
    /**
     * Add item to Items value
     * @throws \InvalidArgumentException
     * @param \StructType\Item $item
     * @return \StructType\ItemList
     */
    public function addToItems(\StructType\Item $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Item) {
            throw new \InvalidArgumentException(sprintf('The Items property can only contain items of \StructType\Item, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Items[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ItemList
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
