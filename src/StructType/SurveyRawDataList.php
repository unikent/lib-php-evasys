<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SurveyRawDataList StructType
 * @subpackage Structs
 */
class SurveyRawDataList extends AbstractStructBase
{
    /**
     * The SurveyRawDataArray
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\SurveyRawData[]
     */
    public $SurveyRawDataArray;
    /**
     * Constructor method for SurveyRawDataList
     * @uses SurveyRawDataList::setSurveyRawDataArray()
     * @param \StructType\SurveyRawData[] $surveyRawDataArray
     */
    public function __construct(array $surveyRawDataArray = array())
    {
        $this
            ->setSurveyRawDataArray($surveyRawDataArray);
    }
    /**
     * Get SurveyRawDataArray value
     * @return \StructType\SurveyRawData[]|null
     */
    public function getSurveyRawDataArray()
    {
        return $this->SurveyRawDataArray;
    }
    /**
     * Set SurveyRawDataArray value
     * @throws \InvalidArgumentException
     * @param \StructType\SurveyRawData[] $surveyRawDataArray
     * @return \StructType\SurveyRawDataList
     */
    public function setSurveyRawDataArray(array $surveyRawDataArray = array())
    {
        foreach ($surveyRawDataArray as $surveyRawDataListSurveyRawDataArrayItem) {
            // validation for constraint: itemType
            if (!$surveyRawDataListSurveyRawDataArrayItem instanceof \StructType\SurveyRawData) {
                throw new \InvalidArgumentException(sprintf('The SurveyRawDataArray property can only contain items of \StructType\SurveyRawData, "%s" given', is_object($surveyRawDataListSurveyRawDataArrayItem) ? get_class($surveyRawDataListSurveyRawDataArrayItem) : gettype($surveyRawDataListSurveyRawDataArrayItem)), __LINE__);
            }
        }
        $this->SurveyRawDataArray = $surveyRawDataArray;
        return $this;
    }
    /**
     * Add item to SurveyRawDataArray value
     * @throws \InvalidArgumentException
     * @param \StructType\SurveyRawData $item
     * @return \StructType\SurveyRawDataList
     */
    public function addToSurveyRawDataArray(\StructType\SurveyRawData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SurveyRawData) {
            throw new \InvalidArgumentException(sprintf('The SurveyRawDataArray property can only contain items of \StructType\SurveyRawData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SurveyRawDataArray[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SurveyRawDataList
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
