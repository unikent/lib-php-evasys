<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModuleSession StructType
 * @subpackage Structs
 */
class ModuleSession extends AbstractStructBase
{
    /**
     * The Uid
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Uid;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Name;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Code;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Type;
    /**
     * The InstructorList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\InstructorList
     */
    public $InstructorList;
    /**
     * The ProgramOfStudy
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ProgramOfStudy;
    /**
     * The Enrollment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $Enrollment;
    /**
     * The CustomField1
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CustomField1;
    /**
     * The CustomField2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CustomField2;
    /**
     * The CustomField3
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CustomField3;
    /**
     * The CustomField4
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CustomField4;
    /**
     * The CustomField5
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CustomField5;
    /**
     * The RoomName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RoomName;
    /**
     * Constructor method for ModuleSession
     * @uses ModuleSession::setUid()
     * @uses ModuleSession::setName()
     * @uses ModuleSession::setCode()
     * @uses ModuleSession::setType()
     * @uses ModuleSession::setInstructorList()
     * @uses ModuleSession::setProgramOfStudy()
     * @uses ModuleSession::setEnrollment()
     * @uses ModuleSession::setCustomField1()
     * @uses ModuleSession::setCustomField2()
     * @uses ModuleSession::setCustomField3()
     * @uses ModuleSession::setCustomField4()
     * @uses ModuleSession::setCustomField5()
     * @uses ModuleSession::setRoomName()
     * @param string $uid
     * @param string $name
     * @param string $code
     * @param string $type
     * @param \StructType\InstructorList $instructorList
     * @param string $programOfStudy
     * @param int $enrollment
     * @param string $customField1
     * @param string $customField2
     * @param string $customField3
     * @param string $customField4
     * @param string $customField5
     * @param string $roomName
     */
    public function __construct($uid = null, $name = null, $code = null, $type = null, \StructType\InstructorList $instructorList = null, $programOfStudy = null, $enrollment = null, $customField1 = null, $customField2 = null, $customField3 = null, $customField4 = null, $customField5 = null, $roomName = null)
    {
        $this
            ->setUid($uid)
            ->setName($name)
            ->setCode($code)
            ->setType($type)
            ->setInstructorList($instructorList)
            ->setProgramOfStudy($programOfStudy)
            ->setEnrollment($enrollment)
            ->setCustomField1($customField1)
            ->setCustomField2($customField2)
            ->setCustomField3($customField3)
            ->setCustomField4($customField4)
            ->setCustomField5($customField5)
            ->setRoomName($roomName);
    }
    /**
     * Get Uid value
     * @return string
     */
    public function getUid()
    {
        return $this->Uid;
    }
    /**
     * Set Uid value
     * @param string $uid
     * @return \StructType\ModuleSession
     */
    public function setUid($uid = null)
    {
        // validation for constraint: string
        if (!is_null($uid) && !is_string($uid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uid)), __LINE__);
        }
        $this->Uid = $uid;
        return $this;
    }
    /**
     * Get Name value
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\ModuleSession
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Code value
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \StructType\ModuleSession
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \StructType\ModuleSession
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
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
     * @return \StructType\ModuleSession
     */
    public function setInstructorList(\StructType\InstructorList $instructorList = null)
    {
        $this->InstructorList = $instructorList;
        return $this;
    }
    /**
     * Get ProgramOfStudy value
     * @return string|null
     */
    public function getProgramOfStudy()
    {
        return $this->ProgramOfStudy;
    }
    /**
     * Set ProgramOfStudy value
     * @param string $programOfStudy
     * @return \StructType\ModuleSession
     */
    public function setProgramOfStudy($programOfStudy = null)
    {
        // validation for constraint: string
        if (!is_null($programOfStudy) && !is_string($programOfStudy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($programOfStudy)), __LINE__);
        }
        $this->ProgramOfStudy = $programOfStudy;
        return $this;
    }
    /**
     * Get Enrollment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getEnrollment()
    {
        return isset($this->Enrollment) ? $this->Enrollment : null;
    }
    /**
     * Set Enrollment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $enrollment
     * @return \StructType\ModuleSession
     */
    public function setEnrollment($enrollment = null)
    {
        // validation for constraint: int
        if (!is_null($enrollment) && !is_numeric($enrollment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($enrollment)), __LINE__);
        }
        if (is_null($enrollment) || (is_array($enrollment) && empty($enrollment))) {
            unset($this->Enrollment);
        } else {
            $this->Enrollment = $enrollment;
        }
        return $this;
    }
    /**
     * Get CustomField1 value
     * @return string|null
     */
    public function getCustomField1()
    {
        return $this->CustomField1;
    }
    /**
     * Set CustomField1 value
     * @param string $customField1
     * @return \StructType\ModuleSession
     */
    public function setCustomField1($customField1 = null)
    {
        // validation for constraint: string
        if (!is_null($customField1) && !is_string($customField1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customField1)), __LINE__);
        }
        $this->CustomField1 = $customField1;
        return $this;
    }
    /**
     * Get CustomField2 value
     * @return string|null
     */
    public function getCustomField2()
    {
        return $this->CustomField2;
    }
    /**
     * Set CustomField2 value
     * @param string $customField2
     * @return \StructType\ModuleSession
     */
    public function setCustomField2($customField2 = null)
    {
        // validation for constraint: string
        if (!is_null($customField2) && !is_string($customField2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customField2)), __LINE__);
        }
        $this->CustomField2 = $customField2;
        return $this;
    }
    /**
     * Get CustomField3 value
     * @return string|null
     */
    public function getCustomField3()
    {
        return $this->CustomField3;
    }
    /**
     * Set CustomField3 value
     * @param string $customField3
     * @return \StructType\ModuleSession
     */
    public function setCustomField3($customField3 = null)
    {
        // validation for constraint: string
        if (!is_null($customField3) && !is_string($customField3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customField3)), __LINE__);
        }
        $this->CustomField3 = $customField3;
        return $this;
    }
    /**
     * Get CustomField4 value
     * @return string|null
     */
    public function getCustomField4()
    {
        return $this->CustomField4;
    }
    /**
     * Set CustomField4 value
     * @param string $customField4
     * @return \StructType\ModuleSession
     */
    public function setCustomField4($customField4 = null)
    {
        // validation for constraint: string
        if (!is_null($customField4) && !is_string($customField4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customField4)), __LINE__);
        }
        $this->CustomField4 = $customField4;
        return $this;
    }
    /**
     * Get CustomField5 value
     * @return string|null
     */
    public function getCustomField5()
    {
        return $this->CustomField5;
    }
    /**
     * Set CustomField5 value
     * @param string $customField5
     * @return \StructType\ModuleSession
     */
    public function setCustomField5($customField5 = null)
    {
        // validation for constraint: string
        if (!is_null($customField5) && !is_string($customField5)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customField5)), __LINE__);
        }
        $this->CustomField5 = $customField5;
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
     * @return \StructType\ModuleSession
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ModuleSession
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
