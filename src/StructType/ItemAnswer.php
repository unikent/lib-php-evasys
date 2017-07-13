<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemAnswer StructType
 * @subpackage Structs
 */
class ItemAnswer extends AbstractStructBase
{
    /**
     * The ItemId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $ItemId;
    /**
     * The ItemCode
     * @var string
     */
    public $ItemCode;
    /**
     * The ItemValue
     * @var string
     */
    public $ItemValue;
    /**
     * The ResultId
     * @var string
     */
    public $ResultId;
    /**
     * Constructor method for ItemAnswer
     * @uses ItemAnswer::setItemId()
     * @uses ItemAnswer::setItemCode()
     * @uses ItemAnswer::setItemValue()
     * @uses ItemAnswer::setResultId()
     * @param int $itemId
     * @param string $itemCode
     * @param string $itemValue
     * @param string $resultId
     */
    public function __construct($itemId = null, $itemCode = null, $itemValue = null, $resultId = null)
    {
        $this
            ->setItemId($itemId)
            ->setItemCode($itemCode)
            ->setItemValue($itemValue)
            ->setResultId($resultId);
    }
    /**
     * Get ItemId value
     * @return int|null
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param int $itemId
     * @return \StructType\ItemAnswer
     */
    public function setItemId($itemId = null)
    {
        // validation for constraint: int
        if (!is_null($itemId) && !is_numeric($itemId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($itemId)), __LINE__);
        }
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Get ItemCode value
     * @return string|null
     */
    public function getItemCode()
    {
        return $this->ItemCode;
    }
    /**
     * Set ItemCode value
     * @param string $itemCode
     * @return \StructType\ItemAnswer
     */
    public function setItemCode($itemCode = null)
    {
        // validation for constraint: string
        if (!is_null($itemCode) && !is_string($itemCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemCode)), __LINE__);
        }
        $this->ItemCode = $itemCode;
        return $this;
    }
    /**
     * Get ItemValue value
     * @return string|null
     */
    public function getItemValue()
    {
        return $this->ItemValue;
    }
    /**
     * Set ItemValue value
     * @param string $itemValue
     * @return \StructType\ItemAnswer
     */
    public function setItemValue($itemValue = null)
    {
        // validation for constraint: string
        if (!is_null($itemValue) && !is_string($itemValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemValue)), __LINE__);
        }
        $this->ItemValue = $itemValue;
        return $this;
    }
    /**
     * Get ResultId value
     * @return string|null
     */
    public function getResultId()
    {
        return $this->ResultId;
    }
    /**
     * Set ResultId value
     * @param string $resultId
     * @return \StructType\ItemAnswer
     */
    public function setResultId($resultId = null)
    {
        // validation for constraint: string
        if (!is_null($resultId) && !is_string($resultId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resultId)), __LINE__);
        }
        $this->ResultId = $resultId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ItemAnswer
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
