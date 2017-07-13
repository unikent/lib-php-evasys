<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseRateTask StructType
 * @subpackage Structs
 */
class ResponseRateTask extends AbstractStructBase
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
     * The ResponseRateValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $ResponseRateValue;
    /**
     * The CalcMethod
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $CalcMethod;
    /**
     * The MailToInstructor
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $MailToInstructor;
    /**
     * The MailToDean
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $MailToDean;
    /**
     * Constructor method for ResponseRateTask
     * @uses ResponseRateTask::setSurveyID()
     * @uses ResponseRateTask::setStartTime()
     * @uses ResponseRateTask::setTaskID()
     * @uses ResponseRateTask::setStatus()
     * @uses ResponseRateTask::setResponseRateValue()
     * @uses ResponseRateTask::setCalcMethod()
     * @uses ResponseRateTask::setMailToInstructor()
     * @uses ResponseRateTask::setMailToDean()
     * @param string $surveyID
     * @param string $startTime
     * @param string $taskID
     * @param string $status
     * @param int $responseRateValue
     * @param int $calcMethod
     * @param bool $mailToInstructor
     * @param bool $mailToDean
     */
    public function __construct($surveyID = null, $startTime = null, $taskID = null, $status = null, $responseRateValue = null, $calcMethod = null, $mailToInstructor = null, $mailToDean = null)
    {
        $this
            ->setSurveyID($surveyID)
            ->setStartTime($startTime)
            ->setTaskID($taskID)
            ->setStatus($status)
            ->setResponseRateValue($responseRateValue)
            ->setCalcMethod($calcMethod)
            ->setMailToInstructor($mailToInstructor)
            ->setMailToDean($mailToDean);
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
     * @return \StructType\ResponseRateTask
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
     * @return \StructType\ResponseRateTask
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
     * @return \StructType\ResponseRateTask
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
     * @return \StructType\ResponseRateTask
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
     * Get ResponseRateValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getResponseRateValue()
    {
        return isset($this->ResponseRateValue) ? $this->ResponseRateValue : null;
    }
    /**
     * Set ResponseRateValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $responseRateValue
     * @return \StructType\ResponseRateTask
     */
    public function setResponseRateValue($responseRateValue = null)
    {
        // validation for constraint: int
        if (!is_null($responseRateValue) && !is_numeric($responseRateValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($responseRateValue)), __LINE__);
        }
        if (is_null($responseRateValue) || (is_array($responseRateValue) && empty($responseRateValue))) {
            unset($this->ResponseRateValue);
        } else {
            $this->ResponseRateValue = $responseRateValue;
        }
        return $this;
    }
    /**
     * Get CalcMethod value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getCalcMethod()
    {
        return isset($this->CalcMethod) ? $this->CalcMethod : null;
    }
    /**
     * Set CalcMethod value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $calcMethod
     * @return \StructType\ResponseRateTask
     */
    public function setCalcMethod($calcMethod = null)
    {
        // validation for constraint: int
        if (!is_null($calcMethod) && !is_numeric($calcMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($calcMethod)), __LINE__);
        }
        if (is_null($calcMethod) || (is_array($calcMethod) && empty($calcMethod))) {
            unset($this->CalcMethod);
        } else {
            $this->CalcMethod = $calcMethod;
        }
        return $this;
    }
    /**
     * Get MailToInstructor value
     * @return bool|null
     */
    public function getMailToInstructor()
    {
        return $this->MailToInstructor;
    }
    /**
     * Set MailToInstructor value
     * @param bool $mailToInstructor
     * @return \StructType\ResponseRateTask
     */
    public function setMailToInstructor($mailToInstructor = null)
    {
        // validation for constraint: boolean
        if (!is_null($mailToInstructor) && !is_bool($mailToInstructor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($mailToInstructor)), __LINE__);
        }
        $this->MailToInstructor = $mailToInstructor;
        return $this;
    }
    /**
     * Get MailToDean value
     * @return bool|null
     */
    public function getMailToDean()
    {
        return $this->MailToDean;
    }
    /**
     * Set MailToDean value
     * @param bool $mailToDean
     * @return \StructType\ResponseRateTask
     */
    public function setMailToDean($mailToDean = null)
    {
        // validation for constraint: boolean
        if (!is_null($mailToDean) && !is_bool($mailToDean)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($mailToDean)), __LINE__);
        }
        $this->MailToDean = $mailToDean;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ResponseRateTask
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
