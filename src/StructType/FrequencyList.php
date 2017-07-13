<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FrequencyList StructType
 * @subpackage Structs
 */
class FrequencyList extends AbstractStructBase
{
    /**
     * The Frequencies
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var float[]
     */
    public $Frequencies;
    /**
     * Constructor method for FrequencyList
     * @uses FrequencyList::setFrequencies()
     * @param float[] $frequencies
     */
    public function __construct(array $frequencies = array())
    {
        $this
            ->setFrequencies($frequencies);
    }
    /**
     * Get Frequencies value
     * @return float[]|null
     */
    public function getFrequencies()
    {
        return $this->Frequencies;
    }
    /**
     * Set Frequencies value
     * @throws \InvalidArgumentException
     * @param float[] $frequencies
     * @return \StructType\FrequencyList
     */
    public function setFrequencies(array $frequencies = array())
    {
        foreach ($frequencies as $frequencyListFrequenciesItem) {
            // validation for constraint: itemType
            if (!is_float($frequencyListFrequenciesItem)) {
                throw new \InvalidArgumentException(sprintf('The Frequencies property can only contain items of float, "%s" given', is_object($frequencyListFrequenciesItem) ? get_class($frequencyListFrequenciesItem) : gettype($frequencyListFrequenciesItem)), __LINE__);
            }
        }
        $this->Frequencies = $frequencies;
        return $this;
    }
    /**
     * Add item to Frequencies value
     * @throws \InvalidArgumentException
     * @param float $item
     * @return \StructType\FrequencyList
     */
    public function addToFrequencies($item)
    {
        // validation for constraint: itemType
        if (!is_float($item)) {
            throw new \InvalidArgumentException(sprintf('The Frequencies property can only contain items of float, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Frequencies[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\FrequencyList
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
