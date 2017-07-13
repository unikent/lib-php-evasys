<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CourseTypeList StructType
 * @subpackage Structs
 */
class CourseTypeList extends AbstractStructBase
{
    /**
     * The CourseTypes
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\CourseType[]
     */
    public $CourseTypes;
    /**
     * Constructor method for CourseTypeList
     * @uses CourseTypeList::setCourseTypes()
     * @param \StructType\CourseType[] $courseTypes
     */
    public function __construct(array $courseTypes = array())
    {
        $this
            ->setCourseTypes($courseTypes);
    }
    /**
     * Get CourseTypes value
     * @return \StructType\CourseType[]|null
     */
    public function getCourseTypes()
    {
        return $this->CourseTypes;
    }
    /**
     * Set CourseTypes value
     * @throws \InvalidArgumentException
     * @param \StructType\CourseType[] $courseTypes
     * @return \StructType\CourseTypeList
     */
    public function setCourseTypes(array $courseTypes = array())
    {
        foreach ($courseTypes as $courseTypeListCourseTypesItem) {
            // validation for constraint: itemType
            if (!$courseTypeListCourseTypesItem instanceof \StructType\CourseType) {
                throw new \InvalidArgumentException(sprintf('The CourseTypes property can only contain items of \StructType\CourseType, "%s" given', is_object($courseTypeListCourseTypesItem) ? get_class($courseTypeListCourseTypesItem) : gettype($courseTypeListCourseTypesItem)), __LINE__);
            }
        }
        $this->CourseTypes = $courseTypes;
        return $this;
    }
    /**
     * Add item to CourseTypes value
     * @throws \InvalidArgumentException
     * @param \StructType\CourseType $item
     * @return \StructType\CourseTypeList
     */
    public function addToCourseTypes(\StructType\CourseType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CourseType) {
            throw new \InvalidArgumentException(sprintf('The CourseTypes property can only contain items of \StructType\CourseType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CourseTypes[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CourseTypeList
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
