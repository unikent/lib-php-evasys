<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InstructorList StructType
 * @subpackage Structs
 */
class InstructorList extends AbstractStructBase
{
    /**
     * The Instructors
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\Instructor[]
     */
    public $Instructors;
    /**
     * Constructor method for InstructorList
     * @uses InstructorList::setInstructors()
     * @param \StructType\Instructor[] $instructors
     */
    public function __construct(array $instructors = array())
    {
        $this
            ->setInstructors($instructors);
    }
    /**
     * Get Instructors value
     * @return \StructType\Instructor[]
     */
    public function getInstructors()
    {
        return $this->Instructors;
    }
    /**
     * Set Instructors value
     * @throws \InvalidArgumentException
     * @param \StructType\Instructor[] $instructors
     * @return \StructType\InstructorList
     */
    public function setInstructors(array $instructors = array())
    {
        foreach ($instructors as $instructorListInstructorsItem) {
            // validation for constraint: itemType
            if (!$instructorListInstructorsItem instanceof \StructType\Instructor) {
                throw new \InvalidArgumentException(sprintf('The Instructors property can only contain items of \StructType\Instructor, "%s" given', is_object($instructorListInstructorsItem) ? get_class($instructorListInstructorsItem) : gettype($instructorListInstructorsItem)), __LINE__);
            }
        }
        $this->Instructors = $instructors;
        return $this;
    }
    /**
     * Add item to Instructors value
     * @throws \InvalidArgumentException
     * @param \StructType\Instructor $item
     * @return \StructType\InstructorList
     */
    public function addToInstructors(\StructType\Instructor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Instructor) {
            throw new \InvalidArgumentException(sprintf('The Instructors property can only contain items of \StructType\Instructor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Instructors[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\InstructorList
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
