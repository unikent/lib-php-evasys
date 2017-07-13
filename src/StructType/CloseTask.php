<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CloseTask StructType
 * @subpackage Structs
 */
class CloseTask extends AbstractStructBase
{
    /**
     * The SurveyID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SurveyID;
    /**
     * The StartTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $StartTime;
    /**
     * The TaskID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TaskID;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The SendReport
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $SendReport;
    /**
     * Constructor method for CloseTask
     * @uses CloseTask::setSurveyID()
     * @uses CloseTask::setStartTime()
     * @uses CloseTask::setTaskID()
     * @uses CloseTask::setStatus()
     * @uses CloseTask::setSendReport()
     * @param string $surveyID
     * @param string $startTime
     * @param string $taskID
     * @param string $status
     * @param bool $sendReport
     */
    public function __construct($surveyID = null, $startTime = null, $taskID = null, $status = null, $sendReport = null)
    {
        $this
            ->setSurveyID($surveyID)
            ->setStartTime($startTime)
            ->setTaskID($taskID)
            ->setStatus($status)
            ->setSendReport($sendReport);
    }
    /**
     * Get SurveyID value
     * @return string
     */
    public function getSurveyID()
    {
        return $this->SurveyID;
    }
    /**
     * Set SurveyID value
     * @param string $surveyID
     * @return \StructType\CloseTask
     */
    public function setSurveyID($surveyID = null)
    {
        // validation for constraint: string
        if (!is_null($surveyID) && !is_string($surveyID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($surveyID)), __LINE__);
        }
        $this->SurveyID = $surveyID;
        return $this;
    }
    /**
     * Get StartTime value
     * @return string
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \StructType\CloseTask
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        return $this;
    }
    /**
     * Get TaskID value
     * @return string|null
     */
    public function getTaskID()
    {
        return $this->TaskID;
    }
    /**
     * Set TaskID value
     * @param string $taskID
     * @return \StructType\CloseTask
     */
    public function setTaskID($taskID = null)
    {
        // validation for constraint: string
        if (!is_null($taskID) && !is_string($taskID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taskID)), __LINE__);
        }
        $this->TaskID = $taskID;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \StructType\CloseTask
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get SendReport value
     * @return bool|null
     */
    public function getSendReport()
    {
        return $this->SendReport;
    }
    /**
     * Set SendReport value
     * @param bool $sendReport
     * @return \StructType\CloseTask
     */
    public function setSendReport($sendReport = null)
    {
        // validation for constraint: boolean
        if (!is_null($sendReport) && !is_bool($sendReport)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sendReport)), __LINE__);
        }
        $this->SendReport = $sendReport;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CloseTask
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
