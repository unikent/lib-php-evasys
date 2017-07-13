<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModuleSurveyCreator StructType
 * @subpackage Structs
 */
class ModuleSurveyCreator extends AbstractStructBase
{
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
     * The DeleteExistingSurvey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $DeleteExistingSurvey;
    /**
     * The FormOwnerId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $FormOwnerId;
    /**
     * The CustomModuleForm
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CustomModuleForm
     */
    public $CustomModuleForm;
    /**
     * Constructor method for ModuleSurveyCreator
     * @uses ModuleSurveyCreator::setPeriodId()
     * @uses ModuleSurveyCreator::setPeriodIdType()
     * @uses ModuleSurveyCreator::setSurveyType()
     * @uses ModuleSurveyCreator::setVerification()
     * @uses ModuleSurveyCreator::setNotice()
     * @uses ModuleSurveyCreator::setFormRecipientList()
     * @uses ModuleSurveyCreator::setInviteParticipants()
     * @uses ModuleSurveyCreator::setInvitationTask()
     * @uses ModuleSurveyCreator::setRemindTask()
     * @uses ModuleSurveyCreator::setResponseRateTask()
     * @uses ModuleSurveyCreator::setCloseTask()
     * @uses ModuleSurveyCreator::setDeleteExistingSurvey()
     * @uses ModuleSurveyCreator::setFormOwnerId()
     * @uses ModuleSurveyCreator::setCustomModuleForm()
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
     * @param bool $deleteExistingSurvey
     * @param int $formOwnerId
     * @param \StructType\CustomModuleForm $customModuleForm
     */
    public function __construct($periodId = null, $periodIdType = null, \StructType\SurveyType $surveyType = null, $verification = null, $notice = null, \StructType\EmailAddressList $formRecipientList = null, $inviteParticipants = null, \StructType\InvitationTask $invitationTask = null, \StructType\RemindTask $remindTask = null, \StructType\ResponseRateTask $responseRateTask = null, \StructType\CloseTask $closeTask = null, $deleteExistingSurvey = null, $formOwnerId = null, \StructType\CustomModuleForm $customModuleForm = null)
    {
        $this
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
            ->setDeleteExistingSurvey($deleteExistingSurvey)
            ->setFormOwnerId($formOwnerId)
            ->setCustomModuleForm($customModuleForm);
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
     * @return \StructType\ModuleSurveyCreator
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
     * @return \StructType\ModuleSurveyCreator
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
     * @return \StructType\ModuleSurveyCreator
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
     * @return \StructType\ModuleSurveyCreator
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
     * @return \StructType\ModuleSurveyCreator
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
     * @return \StructType\ModuleSurveyCreator
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
     * @return \StructType\ModuleSurveyCreator
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
     * @return \StructType\ModuleSurveyCreator
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
     * @return \StructType\ModuleSurveyCreator
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
     * @return \StructType\ModuleSurveyCreator
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
     * @return \StructType\ModuleSurveyCreator
     */
    public function setCloseTask(\StructType\CloseTask $closeTask = null)
    {
        $this->CloseTask = $closeTask;
        return $this;
    }
    /**
     * Get DeleteExistingSurvey value
     * @return bool|null
     */
    public function getDeleteExistingSurvey()
    {
        return $this->DeleteExistingSurvey;
    }
    /**
     * Set DeleteExistingSurvey value
     * @param bool $deleteExistingSurvey
     * @return \StructType\ModuleSurveyCreator
     */
    public function setDeleteExistingSurvey($deleteExistingSurvey = null)
    {
        // validation for constraint: boolean
        if (!is_null($deleteExistingSurvey) && !is_bool($deleteExistingSurvey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($deleteExistingSurvey)), __LINE__);
        }
        $this->DeleteExistingSurvey = $deleteExistingSurvey;
        return $this;
    }
    /**
     * Get FormOwnerId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getFormOwnerId()
    {
        return isset($this->FormOwnerId) ? $this->FormOwnerId : null;
    }
    /**
     * Set FormOwnerId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $formOwnerId
     * @return \StructType\ModuleSurveyCreator
     */
    public function setFormOwnerId($formOwnerId = null)
    {
        // validation for constraint: int
        if (!is_null($formOwnerId) && !is_numeric($formOwnerId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($formOwnerId)), __LINE__);
        }
        if (is_null($formOwnerId) || (is_array($formOwnerId) && empty($formOwnerId))) {
            unset($this->FormOwnerId);
        } else {
            $this->FormOwnerId = $formOwnerId;
        }
        return $this;
    }
    /**
     * Get CustomModuleForm value
     * @return \StructType\CustomModuleForm|null
     */
    public function getCustomModuleForm()
    {
        return $this->CustomModuleForm;
    }
    /**
     * Set CustomModuleForm value
     * @param \StructType\CustomModuleForm $customModuleForm
     * @return \StructType\ModuleSurveyCreator
     */
    public function setCustomModuleForm(\StructType\CustomModuleForm $customModuleForm = null)
    {
        $this->CustomModuleForm = $customModuleForm;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ModuleSurveyCreator
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
