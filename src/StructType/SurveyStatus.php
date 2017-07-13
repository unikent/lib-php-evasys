<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SurveyStatus StructType
 * @subpackage Structs
 */
class SurveyStatus extends AbstractStructBase
{
    /**
     * The SurveyId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $SurveyId;
    /**
     * The SurveyStatus
     * @var string
     */
    public $SurveyStatus;
    /**
     * The StatusMessage
     * @var \StructType\StringList
     */
    public $StatusMessage;
    /**
     * Constructor method for SurveyStatus
     * @uses SurveyStatus::setSurveyId()
     * @uses SurveyStatus::setSurveyStatus()
     * @uses SurveyStatus::setStatusMessage()
     * @param int $surveyId
     * @param string $surveyStatus
     * @param \StructType\StringList $statusMessage
     */
    public function __construct($surveyId = null, $surveyStatus = null, \StructType\StringList $statusMessage = null)
    {
        $this
            ->setSurveyId($surveyId)
            ->setSurveyStatus($surveyStatus)
            ->setStatusMessage($statusMessage);
    }
    /**
     * Get SurveyId value
     * @return int|null
     */
    public function getSurveyId()
    {
        return $this->SurveyId;
    }
    /**
     * Set SurveyId value
     * @param int $surveyId
     * @return \StructType\SurveyStatus
     */
    public function setSurveyId($surveyId = null)
    {
        // validation for constraint: int
        if (!is_null($surveyId) && !is_numeric($surveyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($surveyId)), __LINE__);
        }
        $this->SurveyId = $surveyId;
        return $this;
    }
    /**
     * Get SurveyStatus value
     * @return string|null
     */
    public function getSurveyStatus()
    {
        return $this->SurveyStatus;
    }
    /**
     * Set SurveyStatus value
     * @param string $surveyStatus
     * @return \StructType\SurveyStatus
     */
    public function setSurveyStatus($surveyStatus = null)
    {
        // validation for constraint: string
        if (!is_null($surveyStatus) && !is_string($surveyStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($surveyStatus)), __LINE__);
        }
        $this->SurveyStatus = $surveyStatus;
        return $this;
    }
    /**
     * Get StatusMessage value
     * @return \StructType\StringList|null
     */
    public function getStatusMessage()
    {
        return $this->StatusMessage;
    }
    /**
     * Set StatusMessage value
     * @param \StructType\StringList $statusMessage
     * @return \StructType\SurveyStatus
     */
    public function setStatusMessage(\StructType\StringList $statusMessage = null)
    {
        $this->StatusMessage = $statusMessage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SurveyStatus
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
