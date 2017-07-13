<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemResultList StructType
 * @subpackage Structs
 */
class ItemResultList extends AbstractStructBase
{
    /**
     * The ItemResults
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ItemResult[]
     */
    public $ItemResults;
    /**
     * Constructor method for ItemResultList
     * @uses ItemResultList::setItemResults()
     * @param \StructType\ItemResult[] $itemResults
     */
    public function __construct(array $itemResults = array())
    {
        $this
            ->setItemResults($itemResults);
    }
    /**
     * Get ItemResults value
     * @return \StructType\ItemResult[]|null
     */
    public function getItemResults()
    {
        return $this->ItemResults;
    }
    /**
     * Set ItemResults value
     * @throws \InvalidArgumentException
     * @param \StructType\ItemResult[] $itemResults
     * @return \StructType\ItemResultList
     */
    public function setItemResults(array $itemResults = array())
    {
        foreach ($itemResults as $itemResultListItemResultsItem) {
            // validation for constraint: itemType
            if (!$itemResultListItemResultsItem instanceof \StructType\ItemResult) {
                throw new \InvalidArgumentException(sprintf('The ItemResults property can only contain items of \StructType\ItemResult, "%s" given', is_object($itemResultListItemResultsItem) ? get_class($itemResultListItemResultsItem) : gettype($itemResultListItemResultsItem)), __LINE__);
            }
        }
        $this->ItemResults = $itemResults;
        return $this;
    }
    /**
     * Add item to ItemResults value
     * @throws \InvalidArgumentException
     * @param \StructType\ItemResult $item
     * @return \StructType\ItemResultList
     */
    public function addToItemResults(\StructType\ItemResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ItemResult) {
            throw new \InvalidArgumentException(sprintf('The ItemResults property can only contain items of \StructType\ItemResult, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ItemResults[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ItemResultList
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
