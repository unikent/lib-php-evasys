<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SurveyStatusList StructType
 * @subpackage Structs
 */
class SurveyStatusList extends AbstractStructBase
{
    /**
     * The SurveyStatusArray
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\SurveyStatus[]
     */
    public $SurveyStatusArray;
    /**
     * Constructor method for SurveyStatusList
     * @uses SurveyStatusList::setSurveyStatusArray()
     * @param \StructType\SurveyStatus[] $surveyStatusArray
     */
    public function __construct(array $surveyStatusArray = array())
    {
        $this
            ->setSurveyStatusArray($surveyStatusArray);
    }
    /**
     * Get SurveyStatusArray value
     * @return \StructType\SurveyStatus[]|null
     */
    public function getSurveyStatusArray()
    {
        return $this->SurveyStatusArray;
    }
    /**
     * Set SurveyStatusArray value
     * @throws \InvalidArgumentException
     * @param \StructType\SurveyStatus[] $surveyStatusArray
     * @return \StructType\SurveyStatusList
     */
    public function setSurveyStatusArray(array $surveyStatusArray = array())
    {
        foreach ($surveyStatusArray as $surveyStatusListSurveyStatusArrayItem) {
            // validation for constraint: itemType
            if (!$surveyStatusListSurveyStatusArrayItem instanceof \StructType\SurveyStatus) {
                throw new \InvalidArgumentException(sprintf('The SurveyStatusArray property can only contain items of \StructType\SurveyStatus, "%s" given', is_object($surveyStatusListSurveyStatusArrayItem) ? get_class($surveyStatusListSurveyStatusArrayItem) : gettype($surveyStatusListSurveyStatusArrayItem)), __LINE__);
            }
        }
        $this->SurveyStatusArray = $surveyStatusArray;
        return $this;
    }
    /**
     * Add item to SurveyStatusArray value
     * @throws \InvalidArgumentException
     * @param \StructType\SurveyStatus $item
     * @return \StructType\SurveyStatusList
     */
    public function addToSurveyStatusArray(\StructType\SurveyStatus $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SurveyStatus) {
            throw new \InvalidArgumentException(sprintf('The SurveyStatusArray property can only contain items of \StructType\SurveyStatus, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SurveyStatusArray[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SurveyStatusList
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
