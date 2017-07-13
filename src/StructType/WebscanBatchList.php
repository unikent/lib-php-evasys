<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WebscanBatchList StructType
 * @subpackage Structs
 */
class WebscanBatchList extends AbstractStructBase
{
    /**
     * The WebscanBatch
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\WebscanBatch[]
     */
    public $WebscanBatch;
    /**
     * Constructor method for WebscanBatchList
     * @uses WebscanBatchList::setWebscanBatch()
     * @param \StructType\WebscanBatch[] $webscanBatch
     */
    public function __construct(array $webscanBatch = array())
    {
        $this
            ->setWebscanBatch($webscanBatch);
    }
    /**
     * Get WebscanBatch value
     * @return \StructType\WebscanBatch[]|null
     */
    public function getWebscanBatch()
    {
        return $this->WebscanBatch;
    }
    /**
     * Set WebscanBatch value
     * @throws \InvalidArgumentException
     * @param \StructType\WebscanBatch[] $webscanBatch
     * @return \StructType\WebscanBatchList
     */
    public function setWebscanBatch(array $webscanBatch = array())
    {
        foreach ($webscanBatch as $webscanBatchListWebscanBatchItem) {
            // validation for constraint: itemType
            if (!$webscanBatchListWebscanBatchItem instanceof \StructType\WebscanBatch) {
                throw new \InvalidArgumentException(sprintf('The WebscanBatch property can only contain items of \StructType\WebscanBatch, "%s" given', is_object($webscanBatchListWebscanBatchItem) ? get_class($webscanBatchListWebscanBatchItem) : gettype($webscanBatchListWebscanBatchItem)), __LINE__);
            }
        }
        $this->WebscanBatch = $webscanBatch;
        return $this;
    }
    /**
     * Add item to WebscanBatch value
     * @throws \InvalidArgumentException
     * @param \StructType\WebscanBatch $item
     * @return \StructType\WebscanBatchList
     */
    public function addToWebscanBatch(\StructType\WebscanBatch $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WebscanBatch) {
            throw new \InvalidArgumentException(sprintf('The WebscanBatch property can only contain items of \StructType\WebscanBatch, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WebscanBatch[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WebscanBatchList
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
