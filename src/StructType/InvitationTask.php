<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvitationTask StructType
 * @subpackage Structs
 */
class InvitationTask extends AbstractStructBase
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
     * The SenderName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SenderName;
    /**
     * The SenderEmail
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SenderEmail;
    /**
     * The EmailText
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EmailText;
    /**
     * The EmailSubject
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EmailSubject;
    /**
     * Constructor method for InvitationTask
     * @uses InvitationTask::setSurveyID()
     * @uses InvitationTask::setStartTime()
     * @uses InvitationTask::setTaskID()
     * @uses InvitationTask::setStatus()
     * @uses InvitationTask::setSenderName()
     * @uses InvitationTask::setSenderEmail()
     * @uses InvitationTask::setEmailText()
     * @uses InvitationTask::setEmailSubject()
     * @param string $surveyID
     * @param string $startTime
     * @param string $taskID
     * @param string $status
     * @param string $senderName
     * @param string $senderEmail
     * @param string $emailText
     * @param string $emailSubject
     */
    public function __construct($surveyID = null, $startTime = null, $taskID = null, $status = null, $senderName = null, $senderEmail = null, $emailText = null, $emailSubject = null)
    {
        $this
            ->setSurveyID($surveyID)
            ->setStartTime($startTime)
            ->setTaskID($taskID)
            ->setStatus($status)
            ->setSenderName($senderName)
            ->setSenderEmail($senderEmail)
            ->setEmailText($emailText)
            ->setEmailSubject($emailSubject);
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
     * @return \StructType\InvitationTask
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
     * @return \StructType\InvitationTask
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
     * @return \StructType\InvitationTask
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
     * @return \StructType\InvitationTask
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
     * Get SenderName value
     * @return string|null
     */
    public function getSenderName()
    {
        return $this->SenderName;
    }
    /**
     * Set SenderName value
     * @param string $senderName
     * @return \StructType\InvitationTask
     */
    public function setSenderName($senderName = null)
    {
        // validation for constraint: string
        if (!is_null($senderName) && !is_string($senderName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderName)), __LINE__);
        }
        $this->SenderName = $senderName;
        return $this;
    }
    /**
     * Get SenderEmail value
     * @return string|null
     */
    public function getSenderEmail()
    {
        return $this->SenderEmail;
    }
    /**
     * Set SenderEmail value
     * @param string $senderEmail
     * @return \StructType\InvitationTask
     */
    public function setSenderEmail($senderEmail = null)
    {
        // validation for constraint: string
        if (!is_null($senderEmail) && !is_string($senderEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderEmail)), __LINE__);
        }
        $this->SenderEmail = $senderEmail;
        return $this;
    }
    /**
     * Get EmailText value
     * @return string|null
     */
    public function getEmailText()
    {
        return $this->EmailText;
    }
    /**
     * Set EmailText value
     * @param string $emailText
     * @return \StructType\InvitationTask
     */
    public function setEmailText($emailText = null)
    {
        // validation for constraint: string
        if (!is_null($emailText) && !is_string($emailText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailText)), __LINE__);
        }
        $this->EmailText = $emailText;
        return $this;
    }
    /**
     * Get EmailSubject value
     * @return string|null
     */
    public function getEmailSubject()
    {
        return $this->EmailSubject;
    }
    /**
     * Set EmailSubject value
     * @param string $emailSubject
     * @return \StructType\InvitationTask
     */
    public function setEmailSubject($emailSubject = null)
    {
        // validation for constraint: string
        if (!is_null($emailSubject) && !is_string($emailSubject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailSubject)), __LINE__);
        }
        $this->EmailSubject = $emailSubject;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\InvitationTask
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
