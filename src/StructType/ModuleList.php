<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModuleList StructType
 * @subpackage Structs
 */
class ModuleList extends AbstractStructBase
{
    /**
     * The Modules
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\Module[]
     */
    public $Modules;
    /**
     * Constructor method for ModuleList
     * @uses ModuleList::setModules()
     * @param \StructType\Module[] $modules
     */
    public function __construct(array $modules = array())
    {
        $this
            ->setModules($modules);
    }
    /**
     * Get Modules value
     * @return \StructType\Module[]
     */
    public function getModules()
    {
        return $this->Modules;
    }
    /**
     * Set Modules value
     * @throws \InvalidArgumentException
     * @param \StructType\Module[] $modules
     * @return \StructType\ModuleList
     */
    public function setModules(array $modules = array())
    {
        foreach ($modules as $moduleListModulesItem) {
            // validation for constraint: itemType
            if (!$moduleListModulesItem instanceof \StructType\Module) {
                throw new \InvalidArgumentException(sprintf('The Modules property can only contain items of \StructType\Module, "%s" given', is_object($moduleListModulesItem) ? get_class($moduleListModulesItem) : gettype($moduleListModulesItem)), __LINE__);
            }
        }
        $this->Modules = $modules;
        return $this;
    }
    /**
     * Add item to Modules value
     * @throws \InvalidArgumentException
     * @param \StructType\Module $item
     * @return \StructType\ModuleList
     */
    public function addToModules(\StructType\Module $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Module) {
            throw new \InvalidArgumentException(sprintf('The Modules property can only contain items of \StructType\Module, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Modules[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ModuleList
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
