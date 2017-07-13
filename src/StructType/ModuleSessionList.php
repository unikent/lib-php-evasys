<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModuleSessionList StructType
 * @subpackage Structs
 */
class ModuleSessionList extends AbstractStructBase
{
    /**
     * The ModuleSessions
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\ModuleSession[]
     */
    public $ModuleSessions;
    /**
     * Constructor method for ModuleSessionList
     * @uses ModuleSessionList::setModuleSessions()
     * @param \StructType\ModuleSession[] $moduleSessions
     */
    public function __construct(array $moduleSessions = array())
    {
        $this
            ->setModuleSessions($moduleSessions);
    }
    /**
     * Get ModuleSessions value
     * @return \StructType\ModuleSession[]
     */
    public function getModuleSessions()
    {
        return $this->ModuleSessions;
    }
    /**
     * Set ModuleSessions value
     * @throws \InvalidArgumentException
     * @param \StructType\ModuleSession[] $moduleSessions
     * @return \StructType\ModuleSessionList
     */
    public function setModuleSessions(array $moduleSessions = array())
    {
        foreach ($moduleSessions as $moduleSessionListModuleSessionsItem) {
            // validation for constraint: itemType
            if (!$moduleSessionListModuleSessionsItem instanceof \StructType\ModuleSession) {
                throw new \InvalidArgumentException(sprintf('The ModuleSessions property can only contain items of \StructType\ModuleSession, "%s" given', is_object($moduleSessionListModuleSessionsItem) ? get_class($moduleSessionListModuleSessionsItem) : gettype($moduleSessionListModuleSessionsItem)), __LINE__);
            }
        }
        $this->ModuleSessions = $moduleSessions;
        return $this;
    }
    /**
     * Add item to ModuleSessions value
     * @throws \InvalidArgumentException
     * @param \StructType\ModuleSession $item
     * @return \StructType\ModuleSessionList
     */
    public function addToModuleSessions(\StructType\ModuleSession $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ModuleSession) {
            throw new \InvalidArgumentException(sprintf('The ModuleSessions property can only contain items of \StructType\ModuleSession, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ModuleSessions[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ModuleSessionList
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
