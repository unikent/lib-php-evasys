<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SurveyList StructType
 * @subpackage Structs
 */
class SurveyList extends AbstractStructBase
{
    /**
     * The Surveys
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Survey[]
     */
    public $Surveys;
    /**
     * Constructor method for SurveyList
     * @uses SurveyList::setSurveys()
     * @param \StructType\Survey[] $surveys
     */
    public function __construct(array $surveys = array())
    {
        $this
            ->setSurveys($surveys);
    }
    /**
     * Get Surveys value
     * @return \StructType\Survey[]|null
     */
    public function getSurveys()
    {
        return $this->Surveys;
    }
    /**
     * Set Surveys value
     * @throws \InvalidArgumentException
     * @param \StructType\Survey[] $surveys
     * @return \StructType\SurveyList
     */
    public function setSurveys(array $surveys = array())
    {
        foreach ($surveys as $surveyListSurveysItem) {
            // validation for constraint: itemType
            if (!$surveyListSurveysItem instanceof \StructType\Survey) {
                throw new \InvalidArgumentException(sprintf('The Surveys property can only contain items of \StructType\Survey, "%s" given', is_object($surveyListSurveysItem) ? get_class($surveyListSurveysItem) : gettype($surveyListSurveysItem)), __LINE__);
            }
        }
        $this->Surveys = $surveys;
        return $this;
    }
    /**
     * Add item to Surveys value
     * @throws \InvalidArgumentException
     * @param \StructType\Survey $item
     * @return \StructType\SurveyList
     */
    public function addToSurveys(\StructType\Survey $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Survey) {
            throw new \InvalidArgumentException(sprintf('The Surveys property can only contain items of \StructType\Survey, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Surveys[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SurveyList
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
