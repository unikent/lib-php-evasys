<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SurveyTypeList StructType
 * @subpackage Structs
 */
class SurveyTypeList extends AbstractStructBase
{
    /**
     * The SurveyTypes
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\SurveyType[]
     */
    public $SurveyTypes;
    /**
     * Constructor method for SurveyTypeList
     * @uses SurveyTypeList::setSurveyTypes()
     * @param \StructType\SurveyType[] $surveyTypes
     */
    public function __construct(array $surveyTypes = array())
    {
        $this
            ->setSurveyTypes($surveyTypes);
    }
    /**
     * Get SurveyTypes value
     * @return \StructType\SurveyType[]|null
     */
    public function getSurveyTypes()
    {
        return $this->SurveyTypes;
    }
    /**
     * Set SurveyTypes value
     * @throws \InvalidArgumentException
     * @param \StructType\SurveyType[] $surveyTypes
     * @return \StructType\SurveyTypeList
     */
    public function setSurveyTypes(array $surveyTypes = array())
    {
        foreach ($surveyTypes as $surveyTypeListSurveyTypesItem) {
            // validation for constraint: itemType
            if (!$surveyTypeListSurveyTypesItem instanceof \StructType\SurveyType) {
                throw new \InvalidArgumentException(sprintf('The SurveyTypes property can only contain items of \StructType\SurveyType, "%s" given', is_object($surveyTypeListSurveyTypesItem) ? get_class($surveyTypeListSurveyTypesItem) : gettype($surveyTypeListSurveyTypesItem)), __LINE__);
            }
        }
        $this->SurveyTypes = $surveyTypes;
        return $this;
    }
    /**
     * Add item to SurveyTypes value
     * @throws \InvalidArgumentException
     * @param \StructType\SurveyType $item
     * @return \StructType\SurveyTypeList
     */
    public function addToSurveyTypes(\StructType\SurveyType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SurveyType) {
            throw new \InvalidArgumentException(sprintf('The SurveyTypes property can only contain items of \StructType\SurveyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SurveyTypes[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SurveyTypeList
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
