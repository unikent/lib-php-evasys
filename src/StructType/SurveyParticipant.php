<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SurveyParticipant StructType
 * @subpackage Structs
 */
class SurveyParticipant extends AbstractStructBase
{
    /**
     * The ResultId
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $ResultId;
    /**
     * The Person
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \StructType\Person
     */
    public $Person;
    /**
     * Constructor method for SurveyParticipant
     * @uses SurveyParticipant::setResultId()
     * @uses SurveyParticipant::setPerson()
     * @param string $resultId
     * @param \StructType\Person $person
     */
    public function __construct($resultId = null, \StructType\Person $person = null)
    {
        $this
            ->setResultId($resultId)
            ->setPerson($person);
    }
    /**
     * Get ResultId value
     * @return string
     */
    public function getResultId()
    {
        return $this->ResultId;
    }
    /**
     * Set ResultId value
     * @param string $resultId
     * @return \StructType\SurveyParticipant
     */
    public function setResultId($resultId = null)
    {
        // validation for constraint: string
        if (!is_null($resultId) && !is_string($resultId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resultId)), __LINE__);
        }
        $this->ResultId = $resultId;
        return $this;
    }
    /**
     * Get Person value
     * @return \StructType\Person
     */
    public function getPerson()
    {
        return $this->Person;
    }
    /**
     * Set Person value
     * @param \StructType\Person $person
     * @return \StructType\SurveyParticipant
     */
    public function setPerson(\StructType\Person $person = null)
    {
        $this->Person = $person;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SurveyParticipant
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
