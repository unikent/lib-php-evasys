<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OnlineCodeList StructType
 * @subpackage Structs
 */
class OnlineCodeList extends AbstractStructBase
{
    /**
     * The OnlineCodes
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\OnlineCode[]
     */
    public $OnlineCodes;
    /**
     * Constructor method for OnlineCodeList
     * @uses OnlineCodeList::setOnlineCodes()
     * @param \StructType\OnlineCode[] $onlineCodes
     */
    public function __construct(array $onlineCodes = array())
    {
        $this
            ->setOnlineCodes($onlineCodes);
    }
    /**
     * Get OnlineCodes value
     * @return \StructType\OnlineCode[]|null
     */
    public function getOnlineCodes()
    {
        return $this->OnlineCodes;
    }
    /**
     * Set OnlineCodes value
     * @throws \InvalidArgumentException
     * @param \StructType\OnlineCode[] $onlineCodes
     * @return \StructType\OnlineCodeList
     */
    public function setOnlineCodes(array $onlineCodes = array())
    {
        foreach ($onlineCodes as $onlineCodeListOnlineCodesItem) {
            // validation for constraint: itemType
            if (!$onlineCodeListOnlineCodesItem instanceof \StructType\OnlineCode) {
                throw new \InvalidArgumentException(sprintf('The OnlineCodes property can only contain items of \StructType\OnlineCode, "%s" given', is_object($onlineCodeListOnlineCodesItem) ? get_class($onlineCodeListOnlineCodesItem) : gettype($onlineCodeListOnlineCodesItem)), __LINE__);
            }
        }
        $this->OnlineCodes = $onlineCodes;
        return $this;
    }
    /**
     * Add item to OnlineCodes value
     * @throws \InvalidArgumentException
     * @param \StructType\OnlineCode $item
     * @return \StructType\OnlineCodeList
     */
    public function addToOnlineCodes(\StructType\OnlineCode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\OnlineCode) {
            throw new \InvalidArgumentException(sprintf('The OnlineCodes property can only contain items of \StructType\OnlineCode, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OnlineCodes[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\OnlineCodeList
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
