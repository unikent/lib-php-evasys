<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OnlineSurveyKey StructType
 * @subpackage Structs
 */
class OnlineSurveyKey extends AbstractStructBase
{
    /**
     * The CourseId
     * @var string
     */
    public $CourseId;
    /**
     * The TransactionNumber
     * @var string
     */
    public $TransactionNumber;
    /**
     * The CourseName
     * @var string
     */
    public $CourseName;
    /**
     * The Instructor
     * @var \StructType\Instructor
     */
    public $Instructor;
    /**
     * Constructor method for OnlineSurveyKey
     * @uses OnlineSurveyKey::setCourseId()
     * @uses OnlineSurveyKey::setTransactionNumber()
     * @uses OnlineSurveyKey::setCourseName()
     * @uses OnlineSurveyKey::setInstructor()
     * @param string $courseId
     * @param string $transactionNumber
     * @param string $courseName
     * @param \StructType\Instructor $instructor
     */
    public function __construct($courseId = null, $transactionNumber = null, $courseName = null, \StructType\Instructor $instructor = null)
    {
        $this
            ->setCourseId($courseId)
            ->setTransactionNumber($transactionNumber)
            ->setCourseName($courseName)
            ->setInstructor($instructor);
    }
    /**
     * Get CourseId value
     * @return string|null
     */
    public function getCourseId()
    {
        return $this->CourseId;
    }
    /**
     * Set CourseId value
     * @param string $courseId
     * @return \StructType\OnlineSurveyKey
     */
    public function setCourseId($courseId = null)
    {
        // validation for constraint: string
        if (!is_null($courseId) && !is_string($courseId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($courseId)), __LINE__);
        }
        $this->CourseId = $courseId;
        return $this;
    }
    /**
     * Get TransactionNumber value
     * @return string|null
     */
    public function getTransactionNumber()
    {
        return $this->TransactionNumber;
    }
    /**
     * Set TransactionNumber value
     * @param string $transactionNumber
     * @return \StructType\OnlineSurveyKey
     */
    public function setTransactionNumber($transactionNumber = null)
    {
        // validation for constraint: string
        if (!is_null($transactionNumber) && !is_string($transactionNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionNumber)), __LINE__);
        }
        $this->TransactionNumber = $transactionNumber;
        return $this;
    }
    /**
     * Get CourseName value
     * @return string|null
     */
    public function getCourseName()
    {
        return $this->CourseName;
    }
    /**
     * Set CourseName value
     * @param string $courseName
     * @return \StructType\OnlineSurveyKey
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
     * Get Instructor value
     * @return \StructType\Instructor|null
     */
    public function getInstructor()
    {
        return $this->Instructor;
    }
    /**
     * Set Instructor value
     * @param \StructType\Instructor $instructor
     * @return \StructType\OnlineSurveyKey
     */
    public function setInstructor(\StructType\Instructor $instructor = null)
    {
        $this->Instructor = $instructor;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\OnlineSurveyKey
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
