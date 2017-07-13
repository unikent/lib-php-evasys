<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SurveyHolder StructType
 * @subpackage Structs
 */
class SurveyHolder extends AbstractStructBase
{
    /**
     * The m_aSurveys
     * @var \StructType\SurveyList
     */
    public $m_aSurveys;
    /**
     * Constructor method for SurveyHolder
     * @uses SurveyHolder::setM_aSurveys()
     * @param \StructType\SurveyList $m_aSurveys
     */
    public function __construct(\StructType\SurveyList $m_aSurveys = null)
    {
        $this
            ->setM_aSurveys($m_aSurveys);
    }
    /**
     * Get m_aSurveys value
     * @return \StructType\SurveyList|null
     */
    public function getM_aSurveys()
    {
        return $this->m_aSurveys;
    }
    /**
     * Set m_aSurveys value
     * @param \StructType\SurveyList $m_aSurveys
     * @return \StructType\SurveyHolder
     */
    public function setM_aSurveys(\StructType\SurveyList $m_aSurveys = null)
    {
        $this->m_aSurveys = $m_aSurveys;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SurveyHolder
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
