<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParticipantList StructType
 * @subpackage Structs
 */
class ParticipantList extends AbstractStructBase
{
    /**
     * The SurveyParticipant
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\SurveyParticipant[]
     */
    public $SurveyParticipant;
    /**
     * Constructor method for ParticipantList
     * @uses ParticipantList::setSurveyParticipant()
     * @param \StructType\SurveyParticipant[] $surveyParticipant
     */
    public function __construct(array $surveyParticipant = array())
    {
        $this
            ->setSurveyParticipant($surveyParticipant);
    }
    /**
     * Get SurveyParticipant value
     * @return \StructType\SurveyParticipant[]|null
     */
    public function getSurveyParticipant()
    {
        return $this->SurveyParticipant;
    }
    /**
     * Set SurveyParticipant value
     * @throws \InvalidArgumentException
     * @param \StructType\SurveyParticipant[] $surveyParticipant
     * @return \StructType\ParticipantList
     */
    public function setSurveyParticipant(array $surveyParticipant = array())
    {
        foreach ($surveyParticipant as $participantListSurveyParticipantItem) {
            // validation for constraint: itemType
            if (!$participantListSurveyParticipantItem instanceof \StructType\SurveyParticipant) {
                throw new \InvalidArgumentException(sprintf('The SurveyParticipant property can only contain items of \StructType\SurveyParticipant, "%s" given', is_object($participantListSurveyParticipantItem) ? get_class($participantListSurveyParticipantItem) : gettype($participantListSurveyParticipantItem)), __LINE__);
            }
        }
        $this->SurveyParticipant = $surveyParticipant;
        return $this;
    }
    /**
     * Add item to SurveyParticipant value
     * @throws \InvalidArgumentException
     * @param \StructType\SurveyParticipant $item
     * @return \StructType\ParticipantList
     */
    public function addToSurveyParticipant(\StructType\SurveyParticipant $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SurveyParticipant) {
            throw new \InvalidArgumentException(sprintf('The SurveyParticipant property can only contain items of \StructType\SurveyParticipant, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SurveyParticipant[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ParticipantList
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
