<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonList StructType
 * @subpackage Structs
 */
class PersonList extends AbstractStructBase
{
    /**
     * The Persons
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Person[]
     */
    public $Persons;
    /**
     * Constructor method for PersonList
     * @uses PersonList::setPersons()
     * @param \StructType\Person[] $persons
     */
    public function __construct(array $persons = array())
    {
        $this
            ->setPersons($persons);
    }
    /**
     * Get Persons value
     * @return \StructType\Person[]|null
     */
    public function getPersons()
    {
        return $this->Persons;
    }
    /**
     * Set Persons value
     * @throws \InvalidArgumentException
     * @param \StructType\Person[] $persons
     * @return \StructType\PersonList
     */
    public function setPersons(array $persons = array())
    {
        foreach ($persons as $personListPersonsItem) {
            // validation for constraint: itemType
            if (!$personListPersonsItem instanceof \StructType\Person) {
                throw new \InvalidArgumentException(sprintf('The Persons property can only contain items of \StructType\Person, "%s" given', is_object($personListPersonsItem) ? get_class($personListPersonsItem) : gettype($personListPersonsItem)), __LINE__);
            }
        }
        $this->Persons = $persons;
        return $this;
    }
    /**
     * Add item to Persons value
     * @throws \InvalidArgumentException
     * @param \StructType\Person $item
     * @return \StructType\PersonList
     */
    public function addToPersons(\StructType\Person $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Person) {
            throw new \InvalidArgumentException(sprintf('The Persons property can only contain items of \StructType\Person, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Persons[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PersonList
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
