<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemResult StructType
 * @subpackage Structs
 */
class ItemResult extends AbstractStructBase
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
     * The ResponseCount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $ResponseCount;
    /**
     * The AbstentionCount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $AbstentionCount;
    /**
     * The FrequencyDistribution
     * @var \StructType\FrequencyList
     */
    public $FrequencyDistribution;
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
     * The Median
     * @var float
     */
    public $Median;
    /**
     * The Norm
     * @var float
     */
    public $Norm;
    /**
     * Constructor method for ItemResult
     * @uses ItemResult::setItemId()
     * @uses ItemResult::setItemCode()
     * @uses ItemResult::setResponseCount()
     * @uses ItemResult::setAbstentionCount()
     * @uses ItemResult::setFrequencyDistribution()
     * @uses ItemResult::setMean()
     * @uses ItemResult::setStdDev()
     * @uses ItemResult::setMedian()
     * @uses ItemResult::setNorm()
     * @param int $itemId
     * @param string $itemCode
     * @param int $responseCount
     * @param int $abstentionCount
     * @param \StructType\FrequencyList $frequencyDistribution
     * @param float $mean
     * @param float $stdDev
     * @param float $median
     * @param float $norm
     */
    public function __construct($itemId = null, $itemCode = null, $responseCount = null, $abstentionCount = null, \StructType\FrequencyList $frequencyDistribution = null, $mean = null, $stdDev = null, $median = null, $norm = null)
    {
        $this
            ->setItemId($itemId)
            ->setItemCode($itemCode)
            ->setResponseCount($responseCount)
            ->setAbstentionCount($abstentionCount)
            ->setFrequencyDistribution($frequencyDistribution)
            ->setMean($mean)
            ->setStdDev($stdDev)
            ->setMedian($median)
            ->setNorm($norm);
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
     * @return \StructType\ItemResult
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
     * @return \StructType\ItemResult
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
     * Get ResponseCount value
     * @return int|null
     */
    public function getResponseCount()
    {
        return $this->ResponseCount;
    }
    /**
     * Set ResponseCount value
     * @param int $responseCount
     * @return \StructType\ItemResult
     */
    public function setResponseCount($responseCount = null)
    {
        // validation for constraint: int
        if (!is_null($responseCount) && !is_numeric($responseCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($responseCount)), __LINE__);
        }
        $this->ResponseCount = $responseCount;
        return $this;
    }
    /**
     * Get AbstentionCount value
     * @return int|null
     */
    public function getAbstentionCount()
    {
        return $this->AbstentionCount;
    }
    /**
     * Set AbstentionCount value
     * @param int $abstentionCount
     * @return \StructType\ItemResult
     */
    public function setAbstentionCount($abstentionCount = null)
    {
        // validation for constraint: int
        if (!is_null($abstentionCount) && !is_numeric($abstentionCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($abstentionCount)), __LINE__);
        }
        $this->AbstentionCount = $abstentionCount;
        return $this;
    }
    /**
     * Get FrequencyDistribution value
     * @return \StructType\FrequencyList|null
     */
    public function getFrequencyDistribution()
    {
        return $this->FrequencyDistribution;
    }
    /**
     * Set FrequencyDistribution value
     * @param \StructType\FrequencyList $frequencyDistribution
     * @return \StructType\ItemResult
     */
    public function setFrequencyDistribution(\StructType\FrequencyList $frequencyDistribution = null)
    {
        $this->FrequencyDistribution = $frequencyDistribution;
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
     * @return \StructType\ItemResult
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
     * @return \StructType\ItemResult
     */
    public function setStdDev($stdDev = null)
    {
        $this->StdDev = $stdDev;
        return $this;
    }
    /**
     * Get Median value
     * @return float|null
     */
    public function getMedian()
    {
        return $this->Median;
    }
    /**
     * Set Median value
     * @param float $median
     * @return \StructType\ItemResult
     */
    public function setMedian($median = null)
    {
        $this->Median = $median;
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
     * @return \StructType\ItemResult
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
     * @return \StructType\ItemResult
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
