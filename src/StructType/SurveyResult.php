<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SurveyResult StructType
 * @subpackage Structs
 */
class SurveyResult extends AbstractStructBase
{
    /**
     * The Survey
     * @var \StructType\Survey
     */
    public $Survey;
    /**
     * The ItemResults
     * @var \StructType\ItemResultList
     */
    public $ItemResults;
    /**
     * The ItemGroupResults
     * @var \StructType\ItemGroupResultList
     */
    public $ItemGroupResults;
    /**
     * Constructor method for SurveyResult
     * @uses SurveyResult::setSurvey()
     * @uses SurveyResult::setItemResults()
     * @uses SurveyResult::setItemGroupResults()
     * @param \StructType\Survey $survey
     * @param \StructType\ItemResultList $itemResults
     * @param \StructType\ItemGroupResultList $itemGroupResults
     */
    public function __construct(\StructType\Survey $survey = null, \StructType\ItemResultList $itemResults = null, \StructType\ItemGroupResultList $itemGroupResults = null)
    {
        $this
            ->setSurvey($survey)
            ->setItemResults($itemResults)
            ->setItemGroupResults($itemGroupResults);
    }
    /**
     * Get Survey value
     * @return \StructType\Survey|null
     */
    public function getSurvey()
    {
        return $this->Survey;
    }
    /**
     * Set Survey value
     * @param \StructType\Survey $survey
     * @return \StructType\SurveyResult
     */
    public function setSurvey(\StructType\Survey $survey = null)
    {
        $this->Survey = $survey;
        return $this;
    }
    /**
     * Get ItemResults value
     * @return \StructType\ItemResultList|null
     */
    public function getItemResults()
    {
        return $this->ItemResults;
    }
    /**
     * Set ItemResults value
     * @param \StructType\ItemResultList $itemResults
     * @return \StructType\SurveyResult
     */
    public function setItemResults(\StructType\ItemResultList $itemResults = null)
    {
        $this->ItemResults = $itemResults;
        return $this;
    }
    /**
     * Get ItemGroupResults value
     * @return \StructType\ItemGroupResultList|null
     */
    public function getItemGroupResults()
    {
        return $this->ItemGroupResults;
    }
    /**
     * Set ItemGroupResults value
     * @param \StructType\ItemGroupResultList $itemGroupResults
     * @return \StructType\SurveyResult
     */
    public function setItemGroupResults(\StructType\ItemGroupResultList $itemGroupResults = null)
    {
        $this->ItemGroupResults = $itemGroupResults;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SurveyResult
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
