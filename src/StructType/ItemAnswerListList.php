<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemAnswerListList StructType
 * @subpackage Structs
 */
class ItemAnswerListList extends AbstractStructBase
{
    /**
     * The ItemAnswerLists
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ItemAnswerList[]
     */
    public $ItemAnswerLists;
    /**
     * Constructor method for ItemAnswerListList
     * @uses ItemAnswerListList::setItemAnswerLists()
     * @param \StructType\ItemAnswerList[] $itemAnswerLists
     */
    public function __construct(array $itemAnswerLists = array())
    {
        $this
            ->setItemAnswerLists($itemAnswerLists);
    }
    /**
     * Get ItemAnswerLists value
     * @return \StructType\ItemAnswerList[]|null
     */
    public function getItemAnswerLists()
    {
        return $this->ItemAnswerLists;
    }
    /**
     * Set ItemAnswerLists value
     * @throws \InvalidArgumentException
     * @param \StructType\ItemAnswerList[] $itemAnswerLists
     * @return \StructType\ItemAnswerListList
     */
    public function setItemAnswerLists(array $itemAnswerLists = array())
    {
        foreach ($itemAnswerLists as $itemAnswerListListItemAnswerListsItem) {
            // validation for constraint: itemType
            if (!$itemAnswerListListItemAnswerListsItem instanceof \StructType\ItemAnswerList) {
                throw new \InvalidArgumentException(sprintf('The ItemAnswerLists property can only contain items of \StructType\ItemAnswerList, "%s" given', is_object($itemAnswerListListItemAnswerListsItem) ? get_class($itemAnswerListListItemAnswerListsItem) : gettype($itemAnswerListListItemAnswerListsItem)), __LINE__);
            }
        }
        $this->ItemAnswerLists = $itemAnswerLists;
        return $this;
    }
    /**
     * Add item to ItemAnswerLists value
     * @throws \InvalidArgumentException
     * @param \StructType\ItemAnswerList $item
     * @return \StructType\ItemAnswerListList
     */
    public function addToItemAnswerLists(\StructType\ItemAnswerList $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ItemAnswerList) {
            throw new \InvalidArgumentException(sprintf('The ItemAnswerLists property can only contain items of \StructType\ItemAnswerList, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ItemAnswerLists[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ItemAnswerListList
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
