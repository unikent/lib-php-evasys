<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Course StructType
 * @subpackage Structs
 */
class Course extends AbstractStructBase
{
    /**
     * The m_nCourseId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $m_nCourseId;
    /**
     * The m_sProgramOfStudy
     * @var string
     */
    public $m_sProgramOfStudy;
    /**
     * The m_sCourseTitle
     * @var string
     */
    public $m_sCourseTitle;
    /**
     * The m_sRoom
     * @var string
     */
    public $m_sRoom;
    /**
     * The m_nCourseType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $m_nCourseType;
    /**
     * The m_sPubCourseId
     * @var string
     */
    public $m_sPubCourseId;
    /**
     * The m_sExternalId
     * @var string
     */
    public $m_sExternalId;
    /**
     * The m_nCountStud
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $m_nCountStud;
    /**
     * The m_aCustomFieldValues
     * @var \StructType\StringList
     */
    public $m_aCustomFieldValues;
    /**
     * The m_nUserId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $m_nUserId;
    /**
     * The m_nFbid
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $m_nFbid;
    /**
     * The m_nPeriodId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $m_nPeriodId;
    /**
     * The m_aoParticipants
     * @var \StructType\PersonList
     */
    public $m_aoParticipants;
    /**
     * The m_aoSecondaryInstructors
     * @var \StructType\UserList
     */
    public $m_aoSecondaryInstructors;
    /**
     * The m_oSurveyHolder
     * @var \StructType\SurveyHolder
     */
    public $m_oSurveyHolder;
    /**
     * Constructor method for Course
     * @uses Course::setM_nCourseId()
     * @uses Course::setM_sProgramOfStudy()
     * @uses Course::setM_sCourseTitle()
     * @uses Course::setM_sRoom()
     * @uses Course::setM_nCourseType()
     * @uses Course::setM_sPubCourseId()
     * @uses Course::setM_sExternalId()
     * @uses Course::setM_nCountStud()
     * @uses Course::setM_aCustomFieldValues()
     * @uses Course::setM_nUserId()
     * @uses Course::setM_nFbid()
     * @uses Course::setM_nPeriodId()
     * @uses Course::setM_aoParticipants()
     * @uses Course::setM_aoSecondaryInstructors()
     * @uses Course::setM_oSurveyHolder()
     * @param int $m_nCourseId
     * @param string $m_sProgramOfStudy
     * @param string $m_sCourseTitle
     * @param string $m_sRoom
     * @param int $m_nCourseType
     * @param string $m_sPubCourseId
     * @param string $m_sExternalId
     * @param int $m_nCountStud
     * @param \StructType\StringList $m_aCustomFieldValues
     * @param int $m_nUserId
     * @param int $m_nFbid
     * @param int $m_nPeriodId
     * @param \StructType\PersonList $m_aoParticipants
     * @param \StructType\UserList $m_aoSecondaryInstructors
     * @param \StructType\SurveyHolder $m_oSurveyHolder
     */
    public function __construct($m_nCourseId = null, $m_sProgramOfStudy = null, $m_sCourseTitle = null, $m_sRoom = null, $m_nCourseType = null, $m_sPubCourseId = null, $m_sExternalId = null, $m_nCountStud = null, \StructType\StringList $m_aCustomFieldValues = null, $m_nUserId = null, $m_nFbid = null, $m_nPeriodId = null, \StructType\PersonList $m_aoParticipants = null, \StructType\UserList $m_aoSecondaryInstructors = null, \StructType\SurveyHolder $m_oSurveyHolder = null)
    {
        $this
            ->setM_nCourseId($m_nCourseId)
            ->setM_sProgramOfStudy($m_sProgramOfStudy)
            ->setM_sCourseTitle($m_sCourseTitle)
            ->setM_sRoom($m_sRoom)
            ->setM_nCourseType($m_nCourseType)
            ->setM_sPubCourseId($m_sPubCourseId)
            ->setM_sExternalId($m_sExternalId)
            ->setM_nCountStud($m_nCountStud)
            ->setM_aCustomFieldValues($m_aCustomFieldValues)
            ->setM_nUserId($m_nUserId)
            ->setM_nFbid($m_nFbid)
            ->setM_nPeriodId($m_nPeriodId)
            ->setM_aoParticipants($m_aoParticipants)
            ->setM_aoSecondaryInstructors($m_aoSecondaryInstructors)
            ->setM_oSurveyHolder($m_oSurveyHolder);
    }
    /**
     * Get m_nCourseId value
     * @return int|null
     */
    public function getM_nCourseId()
    {
        return $this->m_nCourseId;
    }
    /**
     * Set m_nCourseId value
     * @param int $m_nCourseId
     * @return \StructType\Course
     */
    public function setM_nCourseId($m_nCourseId = null)
    {
        // validation for constraint: int
        if (!is_null($m_nCourseId) && !is_numeric($m_nCourseId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nCourseId)), __LINE__);
        }
        $this->m_nCourseId = $m_nCourseId;
        return $this;
    }
    /**
     * Get m_sProgramOfStudy value
     * @return string|null
     */
    public function getM_sProgramOfStudy()
    {
        return $this->m_sProgramOfStudy;
    }
    /**
     * Set m_sProgramOfStudy value
     * @param string $m_sProgramOfStudy
     * @return \StructType\Course
     */
    public function setM_sProgramOfStudy($m_sProgramOfStudy = null)
    {
        // validation for constraint: string
        if (!is_null($m_sProgramOfStudy) && !is_string($m_sProgramOfStudy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sProgramOfStudy)), __LINE__);
        }
        $this->m_sProgramOfStudy = $m_sProgramOfStudy;
        return $this;
    }
    /**
     * Get m_sCourseTitle value
     * @return string|null
     */
    public function getM_sCourseTitle()
    {
        return $this->m_sCourseTitle;
    }
    /**
     * Set m_sCourseTitle value
     * @param string $m_sCourseTitle
     * @return \StructType\Course
     */
    public function setM_sCourseTitle($m_sCourseTitle = null)
    {
        // validation for constraint: string
        if (!is_null($m_sCourseTitle) && !is_string($m_sCourseTitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sCourseTitle)), __LINE__);
        }
        $this->m_sCourseTitle = $m_sCourseTitle;
        return $this;
    }
    /**
     * Get m_sRoom value
     * @return string|null
     */
    public function getM_sRoom()
    {
        return $this->m_sRoom;
    }
    /**
     * Set m_sRoom value
     * @param string $m_sRoom
     * @return \StructType\Course
     */
    public function setM_sRoom($m_sRoom = null)
    {
        // validation for constraint: string
        if (!is_null($m_sRoom) && !is_string($m_sRoom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sRoom)), __LINE__);
        }
        $this->m_sRoom = $m_sRoom;
        return $this;
    }
    /**
     * Get m_nCourseType value
     * @return int|null
     */
    public function getM_nCourseType()
    {
        return $this->m_nCourseType;
    }
    /**
     * Set m_nCourseType value
     * @param int $m_nCourseType
     * @return \StructType\Course
     */
    public function setM_nCourseType($m_nCourseType = null)
    {
        // validation for constraint: int
        if (!is_null($m_nCourseType) && !is_numeric($m_nCourseType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nCourseType)), __LINE__);
        }
        $this->m_nCourseType = $m_nCourseType;
        return $this;
    }
    /**
     * Get m_sPubCourseId value
     * @return string|null
     */
    public function getM_sPubCourseId()
    {
        return $this->m_sPubCourseId;
    }
    /**
     * Set m_sPubCourseId value
     * @param string $m_sPubCourseId
     * @return \StructType\Course
     */
    public function setM_sPubCourseId($m_sPubCourseId = null)
    {
        // validation for constraint: string
        if (!is_null($m_sPubCourseId) && !is_string($m_sPubCourseId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sPubCourseId)), __LINE__);
        }
        $this->m_sPubCourseId = $m_sPubCourseId;
        return $this;
    }
    /**
     * Get m_sExternalId value
     * @return string|null
     */
    public function getM_sExternalId()
    {
        return $this->m_sExternalId;
    }
    /**
     * Set m_sExternalId value
     * @param string $m_sExternalId
     * @return \StructType\Course
     */
    public function setM_sExternalId($m_sExternalId = null)
    {
        // validation for constraint: string
        if (!is_null($m_sExternalId) && !is_string($m_sExternalId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sExternalId)), __LINE__);
        }
        $this->m_sExternalId = $m_sExternalId;
        return $this;
    }
    /**
     * Get m_nCountStud value
     * @return int|null
     */
    public function getM_nCountStud()
    {
        return $this->m_nCountStud;
    }
    /**
     * Set m_nCountStud value
     * @param int $m_nCountStud
     * @return \StructType\Course
     */
    public function setM_nCountStud($m_nCountStud = null)
    {
        // validation for constraint: int
        if (!is_null($m_nCountStud) && !is_numeric($m_nCountStud)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nCountStud)), __LINE__);
        }
        $this->m_nCountStud = $m_nCountStud;
        return $this;
    }
    /**
     * Get m_aCustomFieldValues value
     * @return \StructType\StringList|null
     */
    public function getM_aCustomFieldValues()
    {
        return $this->m_aCustomFieldValues;
    }
    /**
     * Set m_aCustomFieldValues value
     * @param \StructType\StringList $m_aCustomFieldValues
     * @return \StructType\Course
     */
    public function setM_aCustomFieldValues(\StructType\StringList $m_aCustomFieldValues = null)
    {
        $this->m_aCustomFieldValues = $m_aCustomFieldValues;
        return $this;
    }
    /**
     * Get m_nUserId value
     * @return int|null
     */
    public function getM_nUserId()
    {
        return $this->m_nUserId;
    }
    /**
     * Set m_nUserId value
     * @param int $m_nUserId
     * @return \StructType\Course
     */
    public function setM_nUserId($m_nUserId = null)
    {
        // validation for constraint: int
        if (!is_null($m_nUserId) && !is_numeric($m_nUserId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nUserId)), __LINE__);
        }
        $this->m_nUserId = $m_nUserId;
        return $this;
    }
    /**
     * Get m_nFbid value
     * @return int|null
     */
    public function getM_nFbid()
    {
        return $this->m_nFbid;
    }
    /**
     * Set m_nFbid value
     * @param int $m_nFbid
     * @return \StructType\Course
     */
    public function setM_nFbid($m_nFbid = null)
    {
        // validation for constraint: int
        if (!is_null($m_nFbid) && !is_numeric($m_nFbid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nFbid)), __LINE__);
        }
        $this->m_nFbid = $m_nFbid;
        return $this;
    }
    /**
     * Get m_nPeriodId value
     * @return int|null
     */
    public function getM_nPeriodId()
    {
        return $this->m_nPeriodId;
    }
    /**
     * Set m_nPeriodId value
     * @param int $m_nPeriodId
     * @return \StructType\Course
     */
    public function setM_nPeriodId($m_nPeriodId = null)
    {
        // validation for constraint: int
        if (!is_null($m_nPeriodId) && !is_numeric($m_nPeriodId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nPeriodId)), __LINE__);
        }
        $this->m_nPeriodId = $m_nPeriodId;
        return $this;
    }
    /**
     * Get m_aoParticipants value
     * @return \StructType\PersonList|null
     */
    public function getM_aoParticipants()
    {
        return $this->m_aoParticipants;
    }
    /**
     * Set m_aoParticipants value
     * @param \StructType\PersonList $m_aoParticipants
     * @return \StructType\Course
     */
    public function setM_aoParticipants(\StructType\PersonList $m_aoParticipants = null)
    {
        $this->m_aoParticipants = $m_aoParticipants;
        return $this;
    }
    /**
     * Get m_aoSecondaryInstructors value
     * @return \StructType\UserList|null
     */
    public function getM_aoSecondaryInstructors()
    {
        return $this->m_aoSecondaryInstructors;
    }
    /**
     * Set m_aoSecondaryInstructors value
     * @param \StructType\UserList $m_aoSecondaryInstructors
     * @return \StructType\Course
     */
    public function setM_aoSecondaryInstructors(\StructType\UserList $m_aoSecondaryInstructors = null)
    {
        $this->m_aoSecondaryInstructors = $m_aoSecondaryInstructors;
        return $this;
    }
    /**
     * Get m_oSurveyHolder value
     * @return \StructType\SurveyHolder|null
     */
    public function getM_oSurveyHolder()
    {
        return $this->m_oSurveyHolder;
    }
    /**
     * Set m_oSurveyHolder value
     * @param \StructType\SurveyHolder $m_oSurveyHolder
     * @return \StructType\Course
     */
    public function setM_oSurveyHolder(\StructType\SurveyHolder $m_oSurveyHolder = null)
    {
        $this->m_oSurveyHolder = $m_oSurveyHolder;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Course
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
