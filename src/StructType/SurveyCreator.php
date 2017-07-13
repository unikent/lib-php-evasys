<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SurveyCreator StructType
 * @subpackage Structs
 */
class SurveyCreator extends AbstractStructBase
{
    /**
     * The FormId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $FormId;
    /**
     * The FormIdType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $FormIdType;
    /**
     * The PeriodId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $PeriodId;
    /**
     * The PeriodIdType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $PeriodIdType;
    /**
     * The SurveyType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\SurveyType
     */
    public $SurveyType;
    /**
     * The Verification
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Verification;
    /**
     * The Notice
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Notice;
    /**
     * The FormRecipientList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EmailAddressList
     */
    public $FormRecipientList;
    /**
     * The InviteParticipants
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $InviteParticipants;
    /**
     * The InvitationTask
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\InvitationTask
     */
    public $InvitationTask;
    /**
     * The RemindTask
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\RemindTask
     */
    public $RemindTask;
    /**
     * The ResponseRateTask
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ResponseRateTask
     */
    public $ResponseRateTask;
    /**
     * The CloseTask
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CloseTask
     */
    public $CloseTask;
    /**
     * The SerialPrint
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $SerialPrint;
    /**
     * Constructor method for SurveyCreator
     * @uses SurveyCreator::setFormId()
     * @uses SurveyCreator::setFormIdType()
     * @uses SurveyCreator::setPeriodId()
     * @uses SurveyCreator::setPeriodIdType()
     * @uses SurveyCreator::setSurveyType()
     * @uses SurveyCreator::setVerification()
     * @uses SurveyCreator::setNotice()
     * @uses SurveyCreator::setFormRecipientList()
     * @uses SurveyCreator::setInviteParticipants()
     * @uses SurveyCreator::setInvitationTask()
     * @uses SurveyCreator::setRemindTask()
     * @uses SurveyCreator::setResponseRateTask()
     * @uses SurveyCreator::setCloseTask()
     * @uses SurveyCreator::setSerialPrint()
     * @param string $formId
     * @param string $formIdType
     * @param string $periodId
     * @param string $periodIdType
     * @param \StructType\SurveyType $surveyType
     * @param bool $verification
     * @param string $notice
     * @param \StructType\EmailAddressList $formRecipientList
     * @param bool $inviteParticipants
     * @param \StructType\InvitationTask $invitationTask
     * @param \StructType\RemindTask $remindTask
     * @param \StructType\ResponseRateTask $responseRateTask
     * @param \StructType\CloseTask $closeTask
     * @param bool $serialPrint
     */
    public function __construct($formId = null, $formIdType = null, $periodId = null, $periodIdType = null, \StructType\SurveyType $surveyType = null, $verification = null, $notice = null, \StructType\EmailAddressList $formRecipientList = null, $inviteParticipants = null, \StructType\InvitationTask $invitationTask = null, \StructType\RemindTask $remindTask = null, \StructType\ResponseRateTask $responseRateTask = null, \StructType\CloseTask $closeTask = null, $serialPrint = null)
    {
        $this
            ->setFormId($formId)
            ->setFormIdType($formIdType)
            ->setPeriodId($periodId)
            ->setPeriodIdType($periodIdType)
            ->setSurveyType($surveyType)
            ->setVerification($verification)
            ->setNotice($notice)
            ->setFormRecipientList($formRecipientList)
            ->setInviteParticipants($inviteParticipants)
            ->setInvitationTask($invitationTask)
            ->setRemindTask($remindTask)
            ->setResponseRateTask($responseRateTask)
            ->setCloseTask($closeTask)
            ->setSerialPrint($serialPrint);
    }
    /**
     * Get FormId value
     * @return string
     */
    public function getFormId()
    {
        return $this->FormId;
    }
    /**
     * Set FormId value
     * @param string $formId
     * @return \StructType\SurveyCreator
     */
    public function setFormId($formId = null)
    {
        // validation for constraint: string
        if (!is_null($formId) && !is_string($formId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($formId)), __LINE__);
        }
        $this->FormId = $formId;
        return $this;
    }
    /**
     * Get FormIdType value
     * @return string
     */
    public function getFormIdType()
    {
        return $this->FormIdType;
    }
    /**
     * Set FormIdType value
     * @uses \EnumType\FormIdType::valueIsValid()
     * @uses \EnumType\FormIdType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $formIdType
     * @return \StructType\SurveyCreator
     */
    public function setFormIdType($formIdType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\FormIdType::valueIsValid($formIdType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $formIdType, implode(', ', \EnumType\FormIdType::getValidValues())), __LINE__);
        }
        $this->FormIdType = $formIdType;
        return $this;
    }
    /**
     * Get PeriodId value
     * @return string
     */
    public function getPeriodId()
    {
        return $this->PeriodId;
    }
    /**
     * Set PeriodId value
     * @param string $periodId
     * @return \StructType\SurveyCreator
     */
    public function setPeriodId($periodId = null)
    {
        // validation for constraint: string
        if (!is_null($periodId) && !is_string($periodId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($periodId)), __LINE__);
        }
        $this->PeriodId = $periodId;
        return $this;
    }
    /**
     * Get PeriodIdType value
     * @return string
     */
    public function getPeriodIdType()
    {
        return $this->PeriodIdType;
    }
    /**
     * Set PeriodIdType value
     * @uses \EnumType\PeriodIdType::valueIsValid()
     * @uses \EnumType\PeriodIdType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $periodIdType
     * @return \StructType\SurveyCreator
     */
    public function setPeriodIdType($periodIdType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PeriodIdType::valueIsValid($periodIdType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $periodIdType, implode(', ', \EnumType\PeriodIdType::getValidValues())), __LINE__);
        }
        $this->PeriodIdType = $periodIdType;
        return $this;
    }
    /**
     * Get SurveyType value
     * @return \StructType\SurveyType
     */
    public function getSurveyType()
    {
        return $this->SurveyType;
    }
    /**
     * Set SurveyType value
     * @param \StructType\SurveyType $surveyType
     * @return \StructType\SurveyCreator
     */
    public function setSurveyType(\StructType\SurveyType $surveyType = null)
    {
        $this->SurveyType = $surveyType;
        return $this;
    }
    /**
     * Get Verification value
     * @return bool|null
     */
    public function getVerification()
    {
        return $this->Verification;
    }
    /**
     * Set Verification value
     * @param bool $verification
     * @return \StructType\SurveyCreator
     */
    public function setVerification($verification = null)
    {
        // validation for constraint: boolean
        if (!is_null($verification) && !is_bool($verification)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($verification)), __LINE__);
        }
        $this->Verification = $verification;
        return $this;
    }
    /**
     * Get Notice value
     * @return string|null
     */
    public function getNotice()
    {
        return $this->Notice;
    }
    /**
     * Set Notice value
     * @param string $notice
     * @return \StructType\SurveyCreator
     */
    public function setNotice($notice = null)
    {
        // validation for constraint: string
        if (!is_null($notice) && !is_string($notice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($notice)), __LINE__);
        }
        $this->Notice = $notice;
        return $this;
    }
    /**
     * Get FormRecipientList value
     * @return \StructType\EmailAddressList|null
     */
    public function getFormRecipientList()
    {
        return $this->FormRecipientList;
    }
    /**
     * Set FormRecipientList value
     * @param \StructType\EmailAddressList $formRecipientList
     * @return \StructType\SurveyCreator
     */
    public function setFormRecipientList(\StructType\EmailAddressList $formRecipientList = null)
    {
        $this->FormRecipientList = $formRecipientList;
        return $this;
    }
    /**
     * Get InviteParticipants value
     * @return bool|null
     */
    public function getInviteParticipants()
    {
        return $this->InviteParticipants;
    }
    /**
     * Set InviteParticipants value
     * @param bool $inviteParticipants
     * @return \StructType\SurveyCreator
     */
    public function setInviteParticipants($inviteParticipants = null)
    {
        // validation for constraint: boolean
        if (!is_null($inviteParticipants) && !is_bool($inviteParticipants)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($inviteParticipants)), __LINE__);
        }
        $this->InviteParticipants = $inviteParticipants;
        return $this;
    }
    /**
     * Get InvitationTask value
     * @return \StructType\InvitationTask|null
     */
    public function getInvitationTask()
    {
        return $this->InvitationTask;
    }
    /**
     * Set InvitationTask value
     * @param \StructType\InvitationTask $invitationTask
     * @return \StructType\SurveyCreator
     */
    public function setInvitationTask(\StructType\InvitationTask $invitationTask = null)
    {
        $this->InvitationTask = $invitationTask;
        return $this;
    }
    /**
     * Get RemindTask value
     * @return \StructType\RemindTask|null
     */
    public function getRemindTask()
    {
        return $this->RemindTask;
    }
    /**
     * Set RemindTask value
     * @param \StructType\RemindTask $remindTask
     * @return \StructType\SurveyCreator
     */
    public function setRemindTask(\StructType\RemindTask $remindTask = null)
    {
        $this->RemindTask = $remindTask;
        return $this;
    }
    /**
     * Get ResponseRateTask value
     * @return \StructType\ResponseRateTask|null
     */
    public function getResponseRateTask()
    {
        return $this->ResponseRateTask;
    }
    /**
     * Set ResponseRateTask value
     * @param \StructType\ResponseRateTask $responseRateTask
     * @return \StructType\SurveyCreator
     */
    public function setResponseRateTask(\StructType\ResponseRateTask $responseRateTask = null)
    {
        $this->ResponseRateTask = $responseRateTask;
        return $this;
    }
    /**
     * Get CloseTask value
     * @return \StructType\CloseTask|null
     */
    public function getCloseTask()
    {
        return $this->CloseTask;
    }
    /**
     * Set CloseTask value
     * @param \StructType\CloseTask $closeTask
     * @return \StructType\SurveyCreator
     */
    public function setCloseTask(\StructType\CloseTask $closeTask = null)
    {
        $this->CloseTask = $closeTask;
        return $this;
    }
    /**
     * Get SerialPrint value
     * @return bool|null
     */
    public function getSerialPrint()
    {
        return $this->SerialPrint;
    }
    /**
     * Set SerialPrint value
     * @param bool $serialPrint
     * @return \StructType\SurveyCreator
     */
    public function setSerialPrint($serialPrint = null)
    {
        // validation for constraint: boolean
        if (!is_null($serialPrint) && !is_bool($serialPrint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($serialPrint)), __LINE__);
        }
        $this->SerialPrint = $serialPrint;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SurveyCreator
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
