<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SurveyRawData StructType
 * @subpackage Structs
 */
class SurveyRawData extends AbstractStructBase
{
    /**
     * The Survey
     * @var \StructType\Survey
     */
    public $Survey;
    /**
     * The SheetResults
     * @var \StructType\ItemAnswerListList
     */
    public $SheetResults;
    /**
     * The ParticipantList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ParticipantList
     */
    public $ParticipantList;
    /**
     * Constructor method for SurveyRawData
     * @uses SurveyRawData::setSurvey()
     * @uses SurveyRawData::setSheetResults()
     * @uses SurveyRawData::setParticipantList()
     * @param \StructType\Survey $survey
     * @param \StructType\ItemAnswerListList $sheetResults
     * @param \StructType\ParticipantList $participantList
     */
    public function __construct(\StructType\Survey $survey = null, \StructType\ItemAnswerListList $sheetResults = null, \StructType\ParticipantList $participantList = null)
    {
        $this
            ->setSurvey($survey)
            ->setSheetResults($sheetResults)
            ->setParticipantList($participantList);
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
     * @return \StructType\SurveyRawData
     */
    public function setSurvey(\StructType\Survey $survey = null)
    {
        $this->Survey = $survey;
        return $this;
    }
    /**
     * Get SheetResults value
     * @return \StructType\ItemAnswerListList|null
     */
    public function getSheetResults()
    {
        return $this->SheetResults;
    }
    /**
     * Set SheetResults value
     * @param \StructType\ItemAnswerListList $sheetResults
     * @return \StructType\SurveyRawData
     */
    public function setSheetResults(\StructType\ItemAnswerListList $sheetResults = null)
    {
        $this->SheetResults = $sheetResults;
        return $this;
    }
    /**
     * Get ParticipantList value
     * @return \StructType\ParticipantList|null
     */
    public function getParticipantList()
    {
        return $this->ParticipantList;
    }
    /**
     * Set ParticipantList value
     * @param \StructType\ParticipantList $participantList
     * @return \StructType\SurveyRawData
     */
    public function setParticipantList(\StructType\ParticipantList $participantList = null)
    {
        $this->ParticipantList = $participantList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SurveyRawData
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
