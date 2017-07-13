<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CourseType StructType
 * @subpackage Structs
 */
class CourseType extends AbstractStructBase
{
    /**
     * The m_nCourseTypeId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $m_nCourseTypeId;
    /**
     * The m_sName
     * @var string
     */
    public $m_sName;
    /**
     * The m_nModuleFrmId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $m_nModuleFrmId;
    /**
     * Constructor method for CourseType
     * @uses CourseType::setM_nCourseTypeId()
     * @uses CourseType::setM_sName()
     * @uses CourseType::setM_nModuleFrmId()
     * @param int $m_nCourseTypeId
     * @param string $m_sName
     * @param int $m_nModuleFrmId
     */
    public function __construct($m_nCourseTypeId = null, $m_sName = null, $m_nModuleFrmId = null)
    {
        $this
            ->setM_nCourseTypeId($m_nCourseTypeId)
            ->setM_sName($m_sName)
            ->setM_nModuleFrmId($m_nModuleFrmId);
    }
    /**
     * Get m_nCourseTypeId value
     * @return int|null
     */
    public function getM_nCourseTypeId()
    {
        return $this->m_nCourseTypeId;
    }
    /**
     * Set m_nCourseTypeId value
     * @param int $m_nCourseTypeId
     * @return \StructType\CourseType
     */
    public function setM_nCourseTypeId($m_nCourseTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($m_nCourseTypeId) && !is_numeric($m_nCourseTypeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nCourseTypeId)), __LINE__);
        }
        $this->m_nCourseTypeId = $m_nCourseTypeId;
        return $this;
    }
    /**
     * Get m_sName value
     * @return string|null
     */
    public function getM_sName()
    {
        return $this->m_sName;
    }
    /**
     * Set m_sName value
     * @param string $m_sName
     * @return \StructType\CourseType
     */
    public function setM_sName($m_sName = null)
    {
        // validation for constraint: string
        if (!is_null($m_sName) && !is_string($m_sName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sName)), __LINE__);
        }
        $this->m_sName = $m_sName;
        return $this;
    }
    /**
     * Get m_nModuleFrmId value
     * @return int|null
     */
    public function getM_nModuleFrmId()
    {
        return $this->m_nModuleFrmId;
    }
    /**
     * Set m_nModuleFrmId value
     * @param int $m_nModuleFrmId
     * @return \StructType\CourseType
     */
    public function setM_nModuleFrmId($m_nModuleFrmId = null)
    {
        // validation for constraint: int
        if (!is_null($m_nModuleFrmId) && !is_numeric($m_nModuleFrmId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nModuleFrmId)), __LINE__);
        }
        $this->m_nModuleFrmId = $m_nModuleFrmId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CourseType
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
