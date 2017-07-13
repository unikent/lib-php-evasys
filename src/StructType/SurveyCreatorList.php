<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SurveyCreatorList StructType
 * @subpackage Structs
 */
class SurveyCreatorList extends AbstractStructBase
{
    /**
     * The SurveyCreators
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\SurveyCreator[]
     */
    public $SurveyCreators;
    /**
     * Constructor method for SurveyCreatorList
     * @uses SurveyCreatorList::setSurveyCreators()
     * @param \StructType\SurveyCreator[] $surveyCreators
     */
    public function __construct(array $surveyCreators = array())
    {
        $this
            ->setSurveyCreators($surveyCreators);
    }
    /**
     * Get SurveyCreators value
     * @return \StructType\SurveyCreator[]
     */
    public function getSurveyCreators()
    {
        return $this->SurveyCreators;
    }
    /**
     * Set SurveyCreators value
     * @throws \InvalidArgumentException
     * @param \StructType\SurveyCreator[] $surveyCreators
     * @return \StructType\SurveyCreatorList
     */
    public function setSurveyCreators(array $surveyCreators = array())
    {
        foreach ($surveyCreators as $surveyCreatorListSurveyCreatorsItem) {
            // validation for constraint: itemType
            if (!$surveyCreatorListSurveyCreatorsItem instanceof \StructType\SurveyCreator) {
                throw new \InvalidArgumentException(sprintf('The SurveyCreators property can only contain items of \StructType\SurveyCreator, "%s" given', is_object($surveyCreatorListSurveyCreatorsItem) ? get_class($surveyCreatorListSurveyCreatorsItem) : gettype($surveyCreatorListSurveyCreatorsItem)), __LINE__);
            }
        }
        $this->SurveyCreators = $surveyCreators;
        return $this;
    }
    /**
     * Add item to SurveyCreators value
     * @throws \InvalidArgumentException
     * @param \StructType\SurveyCreator $item
     * @return \StructType\SurveyCreatorList
     */
    public function addToSurveyCreators(\StructType\SurveyCreator $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SurveyCreator) {
            throw new \InvalidArgumentException(sprintf('The SurveyCreators property can only contain items of \StructType\SurveyCreator, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SurveyCreators[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SurveyCreatorList
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
