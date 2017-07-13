<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Module StructType
 * @subpackage Structs
 */
class Module extends AbstractStructBase
{
    /**
     * The ModuleUid
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ModuleUid;
    /**
     * The ModuleName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ModuleName;
    /**
     * The ModuleCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ModuleCode;
    /**
     * The ModuleSessionList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\ModuleSessionList
     */
    public $ModuleSessionList;
    /**
     * The InstructorList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\InstructorList
     */
    public $InstructorList;
    /**
     * The SubunitName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SubunitName;
    /**
     * The ModuleProgramOfStudy
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ModuleProgramOfStudy;
    /**
     * The ModuleEnrollment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $ModuleEnrollment;
    /**
     * The ModuleCustomField1
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ModuleCustomField1;
    /**
     * The ModuleCustomField2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ModuleCustomField2;
    /**
     * The ModuleCustomField3
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ModuleCustomField3;
    /**
     * The ModuleCustomField4
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ModuleCustomField4;
    /**
     * The ModuleCustomField5
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ModuleCustomField5;
    /**
     * The ModulePeriodId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ModulePeriodId;
    /**
     * The ModulePeriodIdType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ModulePeriodIdType;
    /**
     * The RoomName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RoomName;
    /**
     * The ParticipantList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PersonList
     */
    public $ParticipantList;
    /**
     * The AnonymousParticipants
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $AnonymousParticipants;
    /**
     * The ModuleSurveyCreatorList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ModuleSurveyCreatorList
     */
    public $ModuleSurveyCreatorList;
    /**
     * Constructor method for Module
     * @uses Module::setModuleUid()
     * @uses Module::setModuleName()
     * @uses Module::setModuleCode()
     * @uses Module::setModuleSessionList()
     * @uses Module::setInstructorList()
     * @uses Module::setSubunitName()
     * @uses Module::setModuleProgramOfStudy()
     * @uses Module::setModuleEnrollment()
     * @uses Module::setModuleCustomField1()
     * @uses Module::setModuleCustomField2()
     * @uses Module::setModuleCustomField3()
     * @uses Module::setModuleCustomField4()
     * @uses Module::setModuleCustomField5()
     * @uses Module::setModulePeriodId()
     * @uses Module::setModulePeriodIdType()
     * @uses Module::setRoomName()
     * @uses Module::setParticipantList()
     * @uses Module::setAnonymousParticipants()
     * @uses Module::setModuleSurveyCreatorList()
     * @param string $moduleUid
     * @param string $moduleName
     * @param string $moduleCode
     * @param \StructType\ModuleSessionList $moduleSessionList
     * @param \StructType\InstructorList $instructorList
     * @param string $subunitName
     * @param string $moduleProgramOfStudy
     * @param int $moduleEnrollment
     * @param string $moduleCustomField1
     * @param string $moduleCustomField2
     * @param string $moduleCustomField3
     * @param string $moduleCustomField4
     * @param string $moduleCustomField5
     * @param string $modulePeriodId
     * @param string $modulePeriodIdType
     * @param string $roomName
     * @param \StructType\PersonList $participantList
     * @param bool $anonymousParticipants
     * @param \StructType\ModuleSurveyCreatorList $moduleSurveyCreatorList
     */
    public function __construct($moduleUid = null, $moduleName = null, $moduleCode = null, \StructType\ModuleSessionList $moduleSessionList = null, \StructType\InstructorList $instructorList = null, $subunitName = null, $moduleProgramOfStudy = null, $moduleEnrollment = null, $moduleCustomField1 = null, $moduleCustomField2 = null, $moduleCustomField3 = null, $moduleCustomField4 = null, $moduleCustomField5 = null, $modulePeriodId = null, $modulePeriodIdType = null, $roomName = null, \StructType\PersonList $participantList = null, $anonymousParticipants = null, \StructType\ModuleSurveyCreatorList $moduleSurveyCreatorList = null)
    {
        $this
            ->setModuleUid($moduleUid)
            ->setModuleName($moduleName)
            ->setModuleCode($moduleCode)
            ->setModuleSessionList($moduleSessionList)
            ->setInstructorList($instructorList)
            ->setSubunitName($subunitName)
            ->setModuleProgramOfStudy($moduleProgramOfStudy)
            ->setModuleEnrollment($moduleEnrollment)
            ->setModuleCustomField1($moduleCustomField1)
            ->setModuleCustomField2($moduleCustomField2)
            ->setModuleCustomField3($moduleCustomField3)
            ->setModuleCustomField4($moduleCustomField4)
            ->setModuleCustomField5($moduleCustomField5)
            ->setModulePeriodId($modulePeriodId)
            ->setModulePeriodIdType($modulePeriodIdType)
            ->setRoomName($roomName)
            ->setParticipantList($participantList)
            ->setAnonymousParticipants($anonymousParticipants)
            ->setModuleSurveyCreatorList($moduleSurveyCreatorList);
    }
    /**
     * Get ModuleUid value
     * @return string
     */
    public function getModuleUid()
    {
        return $this->ModuleUid;
    }
    /**
     * Set ModuleUid value
     * @param string $moduleUid
     * @return \StructType\Module
     */
    public function setModuleUid($moduleUid = null)
    {
        // validation for constraint: string
        if (!is_null($moduleUid) && !is_string($moduleUid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($moduleUid)), __LINE__);
        }
        $this->ModuleUid = $moduleUid;
        return $this;
    }
    /**
     * Get ModuleName value
     * @return string
     */
    public function getModuleName()
    {
        return $this->ModuleName;
    }
    /**
     * Set ModuleName value
     * @param string $moduleName
     * @return \StructType\Module
     */
    public function setModuleName($moduleName = null)
    {
        // validation for constraint: string
        if (!is_null($moduleName) && !is_string($moduleName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($moduleName)), __LINE__);
        }
        $this->ModuleName = $moduleName;
        return $this;
    }
    /**
     * Get ModuleCode value
     * @return string
     */
    public function getModuleCode()
    {
        return $this->ModuleCode;
    }
    /**
     * Set ModuleCode value
     * @param string $moduleCode
     * @return \StructType\Module
     */
    public function setModuleCode($moduleCode = null)
    {
        // validation for constraint: string
        if (!is_null($moduleCode) && !is_string($moduleCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($moduleCode)), __LINE__);
        }
        $this->ModuleCode = $moduleCode;
        return $this;
    }
    /**
     * Get ModuleSessionList value
     * @return \StructType\ModuleSessionList
     */
    public function getModuleSessionList()
    {
        return $this->ModuleSessionList;
    }
    /**
     * Set ModuleSessionList value
     * @param \StructType\ModuleSessionList $moduleSessionList
     * @return \StructType\Module
     */
    public function setModuleSessionList(\StructType\ModuleSessionList $moduleSessionList = null)
    {
        $this->ModuleSessionList = $moduleSessionList;
        return $this;
    }
    /**
     * Get InstructorList value
     * @return \StructType\InstructorList
     */
    public function getInstructorList()
    {
        return $this->InstructorList;
    }
    /**
     * Set InstructorList value
     * @param \StructType\InstructorList $instructorList
     * @return \StructType\Module
     */
    public function setInstructorList(\StructType\InstructorList $instructorList = null)
    {
        $this->InstructorList = $instructorList;
        return $this;
    }
    /**
     * Get SubunitName value
     * @return string
     */
    public function getSubunitName()
    {
        return $this->SubunitName;
    }
    /**
     * Set SubunitName value
     * @param string $subunitName
     * @return \StructType\Module
     */
    public function setSubunitName($subunitName = null)
    {
        // validation for constraint: string
        if (!is_null($subunitName) && !is_string($subunitName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subunitName)), __LINE__);
        }
        $this->SubunitName = $subunitName;
        return $this;
    }
    /**
     * Get ModuleProgramOfStudy value
     * @return string|null
     */
    public function getModuleProgramOfStudy()
    {
        return $this->ModuleProgramOfStudy;
    }
    /**
     * Set ModuleProgramOfStudy value
     * @param string $moduleProgramOfStudy
     * @return \StructType\Module
     */
    public function setModuleProgramOfStudy($moduleProgramOfStudy = null)
    {
        // validation for constraint: string
        if (!is_null($moduleProgramOfStudy) && !is_string($moduleProgramOfStudy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($moduleProgramOfStudy)), __LINE__);
        }
        $this->ModuleProgramOfStudy = $moduleProgramOfStudy;
        return $this;
    }
    /**
     * Get ModuleEnrollment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getModuleEnrollment()
    {
        return isset($this->ModuleEnrollment) ? $this->ModuleEnrollment : null;
    }
    /**
     * Set ModuleEnrollment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $moduleEnrollment
     * @return \StructType\Module
     */
    public function setModuleEnrollment($moduleEnrollment = null)
    {
        // validation for constraint: int
        if (!is_null($moduleEnrollment) && !is_numeric($moduleEnrollment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($moduleEnrollment)), __LINE__);
        }
        if (is_null($moduleEnrollment) || (is_array($moduleEnrollment) && empty($moduleEnrollment))) {
            unset($this->ModuleEnrollment);
        } else {
            $this->ModuleEnrollment = $moduleEnrollment;
        }
        return $this;
    }
    /**
     * Get ModuleCustomField1 value
     * @return string|null
     */
    public function getModuleCustomField1()
    {
        return $this->ModuleCustomField1;
    }
    /**
     * Set ModuleCustomField1 value
     * @param string $moduleCustomField1
     * @return \StructType\Module
     */
    public function setModuleCustomField1($moduleCustomField1 = null)
    {
        // validation for constraint: string
        if (!is_null($moduleCustomField1) && !is_string($moduleCustomField1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($moduleCustomField1)), __LINE__);
        }
        $this->ModuleCustomField1 = $moduleCustomField1;
        return $this;
    }
    /**
     * Get ModuleCustomField2 value
     * @return string|null
     */
    public function getModuleCustomField2()
    {
        return $this->ModuleCustomField2;
    }
    /**
     * Set ModuleCustomField2 value
     * @param string $moduleCustomField2
     * @return \StructType\Module
     */
    public function setModuleCustomField2($moduleCustomField2 = null)
    {
        // validation for constraint: string
        if (!is_null($moduleCustomField2) && !is_string($moduleCustomField2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($moduleCustomField2)), __LINE__);
        }
        $this->ModuleCustomField2 = $moduleCustomField2;
        return $this;
    }
    /**
     * Get ModuleCustomField3 value
     * @return string|null
     */
    public function getModuleCustomField3()
    {
        return $this->ModuleCustomField3;
    }
    /**
     * Set ModuleCustomField3 value
     * @param string $moduleCustomField3
     * @return \StructType\Module
     */
    public function setModuleCustomField3($moduleCustomField3 = null)
    {
        // validation for constraint: string
        if (!is_null($moduleCustomField3) && !is_string($moduleCustomField3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($moduleCustomField3)), __LINE__);
        }
        $this->ModuleCustomField3 = $moduleCustomField3;
        return $this;
    }
    /**
     * Get ModuleCustomField4 value
     * @return string|null
     */
    public function getModuleCustomField4()
    {
        return $this->ModuleCustomField4;
    }
    /**
     * Set ModuleCustomField4 value
     * @param string $moduleCustomField4
     * @return \StructType\Module
     */
    public function setModuleCustomField4($moduleCustomField4 = null)
    {
        // validation for constraint: string
        if (!is_null($moduleCustomField4) && !is_string($moduleCustomField4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($moduleCustomField4)), __LINE__);
        }
        $this->ModuleCustomField4 = $moduleCustomField4;
        return $this;
    }
    /**
     * Get ModuleCustomField5 value
     * @return string|null
     */
    public function getModuleCustomField5()
    {
        return $this->ModuleCustomField5;
    }
    /**
     * Set ModuleCustomField5 value
     * @param string $moduleCustomField5
     * @return \StructType\Module
     */
    public function setModuleCustomField5($moduleCustomField5 = null)
    {
        // validation for constraint: string
        if (!is_null($moduleCustomField5) && !is_string($moduleCustomField5)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($moduleCustomField5)), __LINE__);
        }
        $this->ModuleCustomField5 = $moduleCustomField5;
        return $this;
    }
    /**
     * Get ModulePeriodId value
     * @return string|null
     */
    public function getModulePeriodId()
    {
        return $this->ModulePeriodId;
    }
    /**
     * Set ModulePeriodId value
     * @param string $modulePeriodId
     * @return \StructType\Module
     */
    public function setModulePeriodId($modulePeriodId = null)
    {
        // validation for constraint: string
        if (!is_null($modulePeriodId) && !is_string($modulePeriodId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($modulePeriodId)), __LINE__);
        }
        $this->ModulePeriodId = $modulePeriodId;
        return $this;
    }
    /**
     * Get ModulePeriodIdType value
     * @return string|null
     */
    public function getModulePeriodIdType()
    {
        return $this->ModulePeriodIdType;
    }
    /**
     * Set ModulePeriodIdType value
     * @uses \EnumType\PeriodIdType::valueIsValid()
     * @uses \EnumType\PeriodIdType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $modulePeriodIdType
     * @return \StructType\Module
     */
    public function setModulePeriodIdType($modulePeriodIdType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PeriodIdType::valueIsValid($modulePeriodIdType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $modulePeriodIdType, implode(', ', \EnumType\PeriodIdType::getValidValues())), __LINE__);
        }
        $this->ModulePeriodIdType = $modulePeriodIdType;
        return $this;
    }
    /**
     * Get RoomName value
     * @return string|null
     */
    public function getRoomName()
    {
        return $this->RoomName;
    }
    /**
     * Set RoomName value
     * @param string $roomName
     * @return \StructType\Module
     */
    public function setRoomName($roomName = null)
    {
        // validation for constraint: string
        if (!is_null($roomName) && !is_string($roomName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomName)), __LINE__);
        }
        $this->RoomName = $roomName;
        return $this;
    }
    /**
     * Get ParticipantList value
     * @return \StructType\PersonList|null
     */
    public function getParticipantList()
    {
        return $this->ParticipantList;
    }
    /**
     * Set ParticipantList value
     * @param \StructType\PersonList $participantList
     * @return \StructType\Module
     */
    public function setParticipantList(\StructType\PersonList $participantList = null)
    {
        $this->ParticipantList = $participantList;
        return $this;
    }
    /**
     * Get AnonymousParticipants value
     * @return bool|null
     */
    public function getAnonymousParticipants()
    {
        return $this->AnonymousParticipants;
    }
    /**
     * Set AnonymousParticipants value
     * @param bool $anonymousParticipants
     * @return \StructType\Module
     */
    public function setAnonymousParticipants($anonymousParticipants = null)
    {
        // validation for constraint: boolean
        if (!is_null($anonymousParticipants) && !is_bool($anonymousParticipants)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($anonymousParticipants)), __LINE__);
        }
        $this->AnonymousParticipants = $anonymousParticipants;
        return $this;
    }
    /**
     * Get ModuleSurveyCreatorList value
     * @return \StructType\ModuleSurveyCreatorList|null
     */
    public function getModuleSurveyCreatorList()
    {
        return $this->ModuleSurveyCreatorList;
    }
    /**
     * Set ModuleSurveyCreatorList value
     * @param \StructType\ModuleSurveyCreatorList $moduleSurveyCreatorList
     * @return \StructType\Module
     */
    public function setModuleSurveyCreatorList(\StructType\ModuleSurveyCreatorList $moduleSurveyCreatorList = null)
    {
        $this->ModuleSurveyCreatorList = $moduleSurveyCreatorList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Module
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
