<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemGroupResult StructType
 * @subpackage Structs
 */
class ItemGroupResult extends AbstractStructBase
{
    /**
     * The ItemGroupId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $ItemGroupId;
    /**
     * The Mean
     * @var float
     */
    public $Mean;
    /**
     * The StdDev
     * @var float
     */
    public $StdDev;
    /**
     * The Norm
     * @var float
     */
    public $Norm;
    /**
     * Constructor method for ItemGroupResult
     * @uses ItemGroupResult::setItemGroupId()
     * @uses ItemGroupResult::setMean()
     * @uses ItemGroupResult::setStdDev()
     * @uses ItemGroupResult::setNorm()
     * @param int $itemGroupId
     * @param float $mean
     * @param float $stdDev
     * @param float $norm
     */
    public function __construct($itemGroupId = null, $mean = null, $stdDev = null, $norm = null)
    {
        $this
            ->setItemGroupId($itemGroupId)
            ->setMean($mean)
            ->setStdDev($stdDev)
            ->setNorm($norm);
    }
    /**
     * Get ItemGroupId value
     * @return int|null
     */
    public function getItemGroupId()
    {
        return $this->ItemGroupId;
    }
    /**
     * Set ItemGroupId value
     * @param int $itemGroupId
     * @return \StructType\ItemGroupResult
     */
    public function setItemGroupId($itemGroupId = null)
    {
        // validation for constraint: int
        if (!is_null($itemGroupId) && !is_numeric($itemGroupId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($itemGroupId)), __LINE__);
        }
        $this->ItemGroupId = $itemGroupId;
        return $this;
    }
    /**
     * Get Mean value
     * @return float|null
     */
    public function getMean()
    {
        return $this->Mean;
    }
    /**
     * Set Mean value
     * @param float $mean
     * @return \StructType\ItemGroupResult
     */
    public function setMean($mean = null)
    {
        $this->Mean = $mean;
        return $this;
    }
    /**
     * Get StdDev value
     * @return float|null
     */
    public function getStdDev()
    {
        return $this->StdDev;
    }
    /**
     * Set StdDev value
     * @param float $stdDev
     * @return \StructType\ItemGroupResult
     */
    public function setStdDev($stdDev = null)
    {
        $this->StdDev = $stdDev;
        return $this;
    }
    /**
     * Get Norm value
     * @return float|null
     */
    public function getNorm()
    {
        return $this->Norm;
    }
    /**
     * Set Norm value
     * @param float $norm
     * @return \StructType\ItemGroupResult
     */
    public function setNorm($norm = null)
    {
        $this->Norm = $norm;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ItemGroupResult
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
