<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalHeaderLineList StructType
 * @subpackage Structs
 */
class AdditionalHeaderLineList extends AbstractStructBase
{
    /**
     * The AdditionalHeaderLines
     * Meta informations extracted from the WSDL
     * - maxOccurs: 8
     * - minOccurs: 0
     * @var \StructType\AdditionalHeaderLine[]
     */
    public $AdditionalHeaderLines;
    /**
     * Constructor method for AdditionalHeaderLineList
     * @uses AdditionalHeaderLineList::setAdditionalHeaderLines()
     * @param \StructType\AdditionalHeaderLine[] $additionalHeaderLines
     */
    public function __construct(array $additionalHeaderLines = array())
    {
        $this
            ->setAdditionalHeaderLines($additionalHeaderLines);
    }
    /**
     * Get AdditionalHeaderLines value
     * @return \StructType\AdditionalHeaderLine[]|null
     */
    public function getAdditionalHeaderLines()
    {
        return $this->AdditionalHeaderLines;
    }
    /**
     * Set AdditionalHeaderLines value
     * @throws \InvalidArgumentException
     * @param \StructType\AdditionalHeaderLine[] $additionalHeaderLines
     * @return \StructType\AdditionalHeaderLineList
     */
    public function setAdditionalHeaderLines(array $additionalHeaderLines = array())
    {
        foreach ($additionalHeaderLines as $additionalHeaderLineListAdditionalHeaderLinesItem) {
            // validation for constraint: itemType
            if (!$additionalHeaderLineListAdditionalHeaderLinesItem instanceof \StructType\AdditionalHeaderLine) {
                throw new \InvalidArgumentException(sprintf('The AdditionalHeaderLines property can only contain items of \StructType\AdditionalHeaderLine, "%s" given', is_object($additionalHeaderLineListAdditionalHeaderLinesItem) ? get_class($additionalHeaderLineListAdditionalHeaderLinesItem) : gettype($additionalHeaderLineListAdditionalHeaderLinesItem)), __LINE__);
            }
        }
        $this->AdditionalHeaderLines = $additionalHeaderLines;
        return $this;
    }
    /**
     * Add item to AdditionalHeaderLines value
     * @throws \InvalidArgumentException
     * @param \StructType\AdditionalHeaderLine $item
     * @return \StructType\AdditionalHeaderLineList
     */
    public function addToAdditionalHeaderLines(\StructType\AdditionalHeaderLine $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AdditionalHeaderLine) {
            throw new \InvalidArgumentException(sprintf('The AdditionalHeaderLines property can only contain items of \StructType\AdditionalHeaderLine, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AdditionalHeaderLines[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AdditionalHeaderLineList
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
