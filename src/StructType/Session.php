<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Session StructType
 * @subpackage Structs
 */
class Session extends AbstractStructBase
{
    /**
     * The CourseUid
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $CourseUid;
    /**
     * The CourseName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $CourseName;
    /**
     * The CourseCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $CourseCode;
    /**
     * The CourseType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $CourseType;
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
     * The CourseProgramOfStudy
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CourseProgramOfStudy;
    /**
     * The CourseEnrollment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $CourseEnrollment;
    /**
     * The CourseCustomField1
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CourseCustomField1;
    /**
     * The CourseCustomField2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CourseCustomField2;
    /**
     * The CourseCustomField3
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CourseCustomField3;
    /**
     * The CourseCustomField4
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CourseCustomField4;
    /**
     * The CourseCustomField5
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CourseCustomField5;
    /**
     * The CoursePeriodId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CoursePeriodId;
    /**
     * The CoursePeriodIdType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CoursePeriodIdType;
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
     * The SurveyCreatorList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\SurveyCreatorList
     */
    public $SurveyCreatorList;
    /**
     * Constructor method for Session
     * @uses Session::setCourseUid()
     * @uses Session::setCourseName()
     * @uses Session::setCourseCode()
     * @uses Session::setCourseType()
     * @uses Session::setInstructorList()
     * @uses Session::setSubunitName()
     * @uses Session::setCourseProgramOfStudy()
     * @uses Session::setCourseEnrollment()
     * @uses Session::setCourseCustomField1()
     * @uses Session::setCourseCustomField2()
     * @uses Session::setCourseCustomField3()
     * @uses Session::setCourseCustomField4()
     * @uses Session::setCourseCustomField5()
     * @uses Session::setCoursePeriodId()
     * @uses Session::setCoursePeriodIdType()
     * @uses Session::setRoomName()
     * @uses Session::setParticipantList()
     * @uses Session::setAnonymousParticipants()
     * @uses Session::setSurveyCreatorList()
     * @param string $courseUid
     * @param string $courseName
     * @param string $courseCode
     * @param string $courseType
     * @param \StructType\InstructorList $instructorList
     * @param string $subunitName
     * @param string $courseProgramOfStudy
     * @param int $courseEnrollment
     * @param string $courseCustomField1
     * @param string $courseCustomField2
     * @param string $courseCustomField3
     * @param string $courseCustomField4
     * @param string $courseCustomField5
     * @param string $coursePeriodId
     * @param string $coursePeriodIdType
     * @param string $roomName
     * @param \StructType\PersonList $participantList
     * @param bool $anonymousParticipants
     * @param \StructType\SurveyCreatorList $surveyCreatorList
     */
    public function __construct($courseUid = null, $courseName = null, $courseCode = null, $courseType = null, \StructType\InstructorList $instructorList = null, $subunitName = null, $courseProgramOfStudy = null, $courseEnrollment = null, $courseCustomField1 = null, $courseCustomField2 = null, $courseCustomField3 = null, $courseCustomField4 = null, $courseCustomField5 = null, $coursePeriodId = null, $coursePeriodIdType = null, $roomName = null, \StructType\PersonList $participantList = null, $anonymousParticipants = null, \StructType\SurveyCreatorList $surveyCreatorList = null)
    {
        $this
            ->setCourseUid($courseUid)
            ->setCourseName($courseName)
            ->setCourseCode($courseCode)
            ->setCourseType($courseType)
            ->setInstructorList($instructorList)
            ->setSubunitName($subunitName)
            ->setCourseProgramOfStudy($courseProgramOfStudy)
            ->setCourseEnrollment($courseEnrollment)
            ->setCourseCustomField1($courseCustomField1)
            ->setCourseCustomField2($courseCustomField2)
            ->setCourseCustomField3($courseCustomField3)
            ->setCourseCustomField4($courseCustomField4)
            ->setCourseCustomField5($courseCustomField5)
            ->setCoursePeriodId($coursePeriodId)
            ->setCoursePeriodIdType($coursePeriodIdType)
            ->setRoomName($roomName)
            ->setParticipantList($participantList)
            ->setAnonymousParticipants($anonymousParticipants)
            ->setSurveyCreatorList($surveyCreatorList);
    }
    /**
     * Get CourseUid value
     * @return string
     */
    public function getCourseUid()
    {
        return $this->CourseUid;
    }
    /**
     * Set CourseUid value
     * @param string $courseUid
     * @return \StructType\Session
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
     * Get CourseName value
     * @return string
     */
    public function getCourseName()
    {
        return $this->CourseName;
    }
    /**
     * Set CourseName value
     * @param string $courseName
     * @return \StructType\Session
     */
    public function setCourseName($courseName = null)
    {
        // validation for constraint: string
        if (!is_null($courseName) && !is_string($courseName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($courseName)), __LINE__);
        }
        $this->CourseName = $courseName;
        return $this;
    }
    /**
     * Get CourseCode value
     * @return string
     */
    public function getCourseCode()
    {
        return $this->CourseCode;
    }
    /**
     * Set CourseCode value
     * @param string $courseCode
     * @return \StructType\Session
     */
    public function setCourseCode($courseCode = null)
    {
        // validation for constraint: string
        if (!is_null($courseCode) && !is_string($courseCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($courseCode)), __LINE__);
        }
        $this->CourseCode = $courseCode;
        return $this;
    }
    /**
     * Get CourseType value
     * @return string
     */
    public function getCourseType()
    {
        return $this->CourseType;
    }
    /**
     * Set CourseType value
     * @param string $courseType
     * @return \StructType\Session
     */
    public function setCourseType($courseType = null)
    {
        // validation for constraint: string
        if (!is_null($courseType) && !is_string($courseType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($courseType)), __LINE__);
        }
        $this->CourseType = $courseType;
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
     * @return \StructType\Session
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
     * @return \StructType\Session
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
     * Get CourseProgramOfStudy value
     * @return string|null
     */
    public function getCourseProgramOfStudy()
    {
        return $this->CourseProgramOfStudy;
    }
    /**
     * Set CourseProgramOfStudy value
     * @param string $courseProgramOfStudy
     * @return \StructType\Session
     */
    public function setCourseProgramOfStudy($courseProgramOfStudy = null)
    {
        // validation for constraint: string
        if (!is_null($courseProgramOfStudy) && !is_string($courseProgramOfStudy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($courseProgramOfStudy)), __LINE__);
        }
        $this->CourseProgramOfStudy = $courseProgramOfStudy;
        return $this;
    }
    /**
     * Get CourseEnrollment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getCourseEnrollment()
    {
        return isset($this->CourseEnrollment) ? $this->CourseEnrollment : null;
    }
    /**
     * Set CourseEnrollment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $courseEnrollment
     * @return \StructType\Session
     */
    public function setCourseEnrollment($courseEnrollment = null)
    {
        // validation for constraint: int
        if (!is_null($courseEnrollment) && !is_numeric($courseEnrollment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($courseEnrollment)), __LINE__);
        }
        if (is_null($courseEnrollment) || (is_array($courseEnrollment) && empty($courseEnrollment))) {
            unset($this->CourseEnrollment);
        } else {
            $this->CourseEnrollment = $courseEnrollment;
        }
        return $this;
    }
    /**
     * Get CourseCustomField1 value
     * @return string|null
     */
    public function getCourseCustomField1()
    {
        return $this->CourseCustomField1;
    }
    /**
     * Set CourseCustomField1 value
     * @param string $courseCustomField1
     * @return \StructType\Session
     */
    public function setCourseCustomField1($courseCustomField1 = null)
    {
        // validation for constraint: string
        if (!is_null($courseCustomField1) && !is_string($courseCustomField1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($courseCustomField1)), __LINE__);
        }
        $this->CourseCustomField1 = $courseCustomField1;
        return $this;
    }
    /**
     * Get CourseCustomField2 value
     * @return string|null
     */
    public function getCourseCustomField2()
    {
        return $this->CourseCustomField2;
    }
    /**
     * Set CourseCustomField2 value
     * @param string $courseCustomField2
     * @return \StructType\Session
     */
    public function setCourseCustomField2($courseCustomField2 = null)
    {
        // validation for constraint: string
        if (!is_null($courseCustomField2) && !is_string($courseCustomField2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($courseCustomField2)), __LINE__);
        }
        $this->CourseCustomField2 = $courseCustomField2;
        return $this;
    }
    /**
     * Get CourseCustomField3 value
     * @return string|null
     */
    public function getCourseCustomField3()
    {
        return $this->CourseCustomField3;
    }
    /**
     * Set CourseCustomField3 value
     * @param string $courseCustomField3
     * @return \StructType\Session
     */
    public function setCourseCustomField3($courseCustomField3 = null)
    {
        // validation for constraint: string
        if (!is_null($courseCustomField3) && !is_string($courseCustomField3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($courseCustomField3)), __LINE__);
        }
        $this->CourseCustomField3 = $courseCustomField3;
        return $this;
    }
    /**
     * Get CourseCustomField4 value
     * @return string|null
     */
    public function getCourseCustomField4()
    {
        return $this->CourseCustomField4;
    }
    /**
     * Set CourseCustomField4 value
     * @param string $courseCustomField4
     * @return \StructType\Session
     */
    public function setCourseCustomField4($courseCustomField4 = null)
    {
        // validation for constraint: string
        if (!is_null($courseCustomField4) && !is_string($courseCustomField4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($courseCustomField4)), __LINE__);
        }
        $this->CourseCustomField4 = $courseCustomField4;
        return $this;
    }
    /**
     * Get CourseCustomField5 value
     * @return string|null
     */
    public function getCourseCustomField5()
    {
        return $this->CourseCustomField5;
    }
    /**
     * Set CourseCustomField5 value
     * @param string $courseCustomField5
     * @return \StructType\Session
     */
    public function setCourseCustomField5($courseCustomField5 = null)
    {
        // validation for constraint: string
        if (!is_null($courseCustomField5) && !is_string($courseCustomField5)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($courseCustomField5)), __LINE__);
        }
        $this->CourseCustomField5 = $courseCustomField5;
        return $this;
    }
    /**
     * Get CoursePeriodId value
     * @return string|null
     */
    public function getCoursePeriodId()
    {
        return $this->CoursePeriodId;
    }
    /**
     * Set CoursePeriodId value
     * @param string $coursePeriodId
     * @return \StructType\Session
     */
    public function setCoursePeriodId($coursePeriodId = null)
    {
        // validation for constraint: string
        if (!is_null($coursePeriodId) && !is_string($coursePeriodId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($coursePeriodId)), __LINE__);
        }
        $this->CoursePeriodId = $coursePeriodId;
        return $this;
    }
    /**
     * Get CoursePeriodIdType value
     * @return string|null
     */
    public function getCoursePeriodIdType()
    {
        return $this->CoursePeriodIdType;
    }
    /**
     * Set CoursePeriodIdType value
     * @uses \EnumType\PeriodIdType::valueIsValid()
     * @uses \EnumType\PeriodIdType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $coursePeriodIdType
     * @return \StructType\Session
     */
    public function setCoursePeriodIdType($coursePeriodIdType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PeriodIdType::valueIsValid($coursePeriodIdType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $coursePeriodIdType, implode(', ', \EnumType\PeriodIdType::getValidValues())), __LINE__);
        }
        $this->CoursePeriodIdType = $coursePeriodIdType;
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
     * @return \StructType\Session
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
     * @return \StructType\Session
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
     * @return \StructType\Session
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
     * Get SurveyCreatorList value
     * @return \StructType\SurveyCreatorList|null
     */
    public function getSurveyCreatorList()
    {
        return $this->SurveyCreatorList;
    }
    /**
     * Set SurveyCreatorList value
     * @param \StructType\SurveyCreatorList $surveyCreatorList
     * @return \StructType\Session
     */
    public function setSurveyCreatorList(\StructType\SurveyCreatorList $surveyCreatorList = null)
    {
        $this->SurveyCreatorList = $surveyCreatorList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Session
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
