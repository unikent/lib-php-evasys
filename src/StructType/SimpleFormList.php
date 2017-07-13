<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SimpleFormList StructType
 * @subpackage Structs
 */
class SimpleFormList extends AbstractStructBase
{
    /**
     * The SimpleForms
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\SimpleForm[]
     */
    public $SimpleForms;
    /**
     * Constructor method for SimpleFormList
     * @uses SimpleFormList::setSimpleForms()
     * @param \StructType\SimpleForm[] $simpleForms
     */
    public function __construct(array $simpleForms = array())
    {
        $this
            ->setSimpleForms($simpleForms);
    }
    /**
     * Get SimpleForms value
     * @return \StructType\SimpleForm[]|null
     */
    public function getSimpleForms()
    {
        return $this->SimpleForms;
    }
    /**
     * Set SimpleForms value
     * @throws \InvalidArgumentException
     * @param \StructType\SimpleForm[] $simpleForms
     * @return \StructType\SimpleFormList
     */
    public function setSimpleForms(array $simpleForms = array())
    {
        foreach ($simpleForms as $simpleFormListSimpleFormsItem) {
            // validation for constraint: itemType
            if (!$simpleFormListSimpleFormsItem instanceof \StructType\SimpleForm) {
                throw new \InvalidArgumentException(sprintf('The SimpleForms property can only contain items of \StructType\SimpleForm, "%s" given', is_object($simpleFormListSimpleFormsItem) ? get_class($simpleFormListSimpleFormsItem) : gettype($simpleFormListSimpleFormsItem)), __LINE__);
            }
        }
        $this->SimpleForms = $simpleForms;
        return $this;
    }
    /**
     * Add item to SimpleForms value
     * @throws \InvalidArgumentException
     * @param \StructType\SimpleForm $item
     * @return \StructType\SimpleFormList
     */
    public function addToSimpleForms(\StructType\SimpleForm $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SimpleForm) {
            throw new \InvalidArgumentException(sprintf('The SimpleForms property can only contain items of \StructType\SimpleForm, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SimpleForms[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SimpleFormList
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
