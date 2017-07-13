<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadStatus StructType
 * @subpackage Structs
 */
class UploadStatus extends AbstractStructBase
{
    /**
     * The CourseUid
     * @var string
     */
    public $CourseUid;
    /**
     * The StatusId
     * @var string
     */
    public $StatusId;
    /**
     * The StatusMessage
     * @var string
     */
    public $StatusMessage;
    /**
     * The SurveyStatusList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\SurveyStatusList
     */
    public $SurveyStatusList;
    /**
     * Constructor method for UploadStatus
     * @uses UploadStatus::setCourseUid()
     * @uses UploadStatus::setStatusId()
     * @uses UploadStatus::setStatusMessage()
     * @uses UploadStatus::setSurveyStatusList()
     * @param string $courseUid
     * @param string $statusId
     * @param string $statusMessage
     * @param \StructType\SurveyStatusList $surveyStatusList
     */
    public function __construct($courseUid = null, $statusId = null, $statusMessage = null, \StructType\SurveyStatusList $surveyStatusList = null)
    {
        $this
            ->setCourseUid($courseUid)
            ->setStatusId($statusId)
            ->setStatusMessage($statusMessage)
            ->setSurveyStatusList($surveyStatusList);
    }
    /**
     * Get CourseUid value
     * @return string|null
     */
    public function getCourseUid()
    {
        return $this->CourseUid;
    }
    /**
     * Set CourseUid value
     * @param string $courseUid
     * @return \StructType\UploadStatus
     */
    public function setCourseUid($courseUid = null)
    {
        // validation for constraint: string
        if (!is_null($courseUid) && !is_string($courseUid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($courseUid)), __LINE__);
        }
        $this->CourseUid = $courseUid;
        return $this;
    }
    /**
     * Get StatusId value
     * @return string|null
     */
    public function getStatusId()
    {
        return $this->StatusId;
    }
    /**
     * Set StatusId value
     * @param string $statusId
     * @return \StructType\UploadStatus
     */
    public function setStatusId($statusId = null)
    {
        // validation for constraint: string
        if (!is_null($statusId) && !is_string($statusId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusId)), __LINE__);
        }
        $this->StatusId = $statusId;
        return $this;
    }
    /**
     * Get StatusMessage value
     * @return string|null
     */
    public function getStatusMessage()
    {
        return $this->StatusMessage;
    }
    /**
     * Set StatusMessage value
     * @param string $statusMessage
     * @return \StructType\UploadStatus
     */
    public function setStatusMessage($statusMessage = null)
    {
        // validation for constraint: string
        if (!is_null($statusMessage) && !is_string($statusMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusMessage)), __LINE__);
        }
        $this->StatusMessage = $statusMessage;
        return $this;
    }
    /**
     * Get SurveyStatusList value
     * @return \StructType\SurveyStatusList|null
     */
    public function getSurveyStatusList()
    {
        return $this->SurveyStatusList;
    }
    /**
     * Set SurveyStatusList value
     * @param \StructType\SurveyStatusList $surveyStatusList
     * @return \StructType\UploadStatus
     */
    public function setSurveyStatusList(\StructType\SurveyStatusList $surveyStatusList = null)
    {
        $this->SurveyStatusList = $surveyStatusList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\UploadStatus
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
