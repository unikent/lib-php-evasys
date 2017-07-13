<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModuleSurveyCreatorList StructType
 * @subpackage Structs
 */
class ModuleSurveyCreatorList extends AbstractStructBase
{
    /**
     * The ModuleSurveyCreators
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\ModuleSurveyCreator[]
     */
    public $ModuleSurveyCreators;
    /**
     * Constructor method for ModuleSurveyCreatorList
     * @uses ModuleSurveyCreatorList::setModuleSurveyCreators()
     * @param \StructType\ModuleSurveyCreator[] $moduleSurveyCreators
     */
    public function __construct(array $moduleSurveyCreators = array())
    {
        $this
            ->setModuleSurveyCreators($moduleSurveyCreators);
    }
    /**
     * Get ModuleSurveyCreators value
     * @return \StructType\ModuleSurveyCreator[]
     */
    public function getModuleSurveyCreators()
    {
        return $this->ModuleSurveyCreators;
    }
    /**
     * Set ModuleSurveyCreators value
     * @throws \InvalidArgumentException
     * @param \StructType\ModuleSurveyCreator[] $moduleSurveyCreators
     * @return \StructType\ModuleSurveyCreatorList
     */
    public function setModuleSurveyCreators(array $moduleSurveyCreators = array())
    {
        foreach ($moduleSurveyCreators as $moduleSurveyCreatorListModuleSurveyCreatorsItem) {
            // validation for constraint: itemType
            if (!$moduleSurveyCreatorListModuleSurveyCreatorsItem instanceof \StructType\ModuleSurveyCreator) {
                throw new \InvalidArgumentException(sprintf('The ModuleSurveyCreators property can only contain items of \StructType\ModuleSurveyCreator, "%s" given', is_object($moduleSurveyCreatorListModuleSurveyCreatorsItem) ? get_class($moduleSurveyCreatorListModuleSurveyCreatorsItem) : gettype($moduleSurveyCreatorListModuleSurveyCreatorsItem)), __LINE__);
            }
        }
        $this->ModuleSurveyCreators = $moduleSurveyCreators;
        return $this;
    }
    /**
     * Add item to ModuleSurveyCreators value
     * @throws \InvalidArgumentException
     * @param \StructType\ModuleSurveyCreator $item
     * @return \StructType\ModuleSurveyCreatorList
     */
    public function addToModuleSurveyCreators(\StructType\ModuleSurveyCreator $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ModuleSurveyCreator) {
            throw new \InvalidArgumentException(sprintf('The ModuleSurveyCreators property can only contain items of \StructType\ModuleSurveyCreator, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ModuleSurveyCreators[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ModuleSurveyCreatorList
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
