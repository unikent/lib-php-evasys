<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SurveyType StructType
 * @subpackage Structs
 */
class SurveyType extends AbstractStructBase
{
    /**
     * The m_chSurveyType
     * @var string
     */
    public $m_chSurveyType;
    /**
     * The m_sDescription
     * @var string
     */
    public $m_sDescription;
    /**
     * Constructor method for SurveyType
     * @uses SurveyType::setM_chSurveyType()
     * @uses SurveyType::setM_sDescription()
     * @param string $m_chSurveyType
     * @param string $m_sDescription
     */
    public function __construct($m_chSurveyType = null, $m_sDescription = null)
    {
        $this
            ->setM_chSurveyType($m_chSurveyType)
            ->setM_sDescription($m_sDescription);
    }
    /**
     * Get m_chSurveyType value
     * @return string|null
     */
    public function getM_chSurveyType()
    {
        return $this->m_chSurveyType;
    }
    /**
     * Set m_chSurveyType value
     * @param string $m_chSurveyType
     * @return \StructType\SurveyType
     */
    public function setM_chSurveyType($m_chSurveyType = null)
    {
        // validation for constraint: string
        if (!is_null($m_chSurveyType) && !is_string($m_chSurveyType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_chSurveyType)), __LINE__);
        }
        $this->m_chSurveyType = $m_chSurveyType;
        return $this;
    }
    /**
     * Get m_sDescription value
     * @return string|null
     */
    public function getM_sDescription()
    {
        return $this->m_sDescription;
    }
    /**
     * Set m_sDescription value
     * @param string $m_sDescription
     * @return \StructType\SurveyType
     */
    public function setM_sDescription($m_sDescription = null)
    {
        // validation for constraint: string
        if (!is_null($m_sDescription) && !is_string($m_sDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sDescription)), __LINE__);
        }
        $this->m_sDescription = $m_sDescription;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SurveyType
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
