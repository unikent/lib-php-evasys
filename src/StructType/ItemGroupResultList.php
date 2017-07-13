<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemGroupResultList StructType
 * @subpackage Structs
 */
class ItemGroupResultList extends AbstractStructBase
{
    /**
     * The ItemGroupResults
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ItemGroupResult[]
     */
    public $ItemGroupResults;
    /**
     * Constructor method for ItemGroupResultList
     * @uses ItemGroupResultList::setItemGroupResults()
     * @param \StructType\ItemGroupResult[] $itemGroupResults
     */
    public function __construct(array $itemGroupResults = array())
    {
        $this
            ->setItemGroupResults($itemGroupResults);
    }
    /**
     * Get ItemGroupResults value
     * @return \StructType\ItemGroupResult[]|null
     */
    public function getItemGroupResults()
    {
        return $this->ItemGroupResults;
    }
    /**
     * Set ItemGroupResults value
     * @throws \InvalidArgumentException
     * @param \StructType\ItemGroupResult[] $itemGroupResults
     * @return \StructType\ItemGroupResultList
     */
    public function setItemGroupResults(array $itemGroupResults = array())
    {
        foreach ($itemGroupResults as $itemGroupResultListItemGroupResultsItem) {
            // validation for constraint: itemType
            if (!$itemGroupResultListItemGroupResultsItem instanceof \StructType\ItemGroupResult) {
                throw new \InvalidArgumentException(sprintf('The ItemGroupResults property can only contain items of \StructType\ItemGroupResult, "%s" given', is_object($itemGroupResultListItemGroupResultsItem) ? get_class($itemGroupResultListItemGroupResultsItem) : gettype($itemGroupResultListItemGroupResultsItem)), __LINE__);
            }
        }
        $this->ItemGroupResults = $itemGroupResults;
        return $this;
    }
    /**
     * Add item to ItemGroupResults value
     * @throws \InvalidArgumentException
     * @param \StructType\ItemGroupResult $item
     * @return \StructType\ItemGroupResultList
     */
    public function addToItemGroupResults(\StructType\ItemGroupResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ItemGroupResult) {
            throw new \InvalidArgumentException(sprintf('The ItemGroupResults property can only contain items of \StructType\ItemGroupResult, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ItemGroupResults[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ItemGroupResultList
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
