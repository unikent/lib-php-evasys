<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CourseList StructType
 * @subpackage Structs
 */
class CourseList extends AbstractStructBase
{
    /**
     * The Courses
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Course[]
     */
    public $Courses;
    /**
     * Constructor method for CourseList
     * @uses CourseList::setCourses()
     * @param \StructType\Course[] $courses
     */
    public function __construct(array $courses = array())
    {
        $this
            ->setCourses($courses);
    }
    /**
     * Get Courses value
     * @return \StructType\Course[]|null
     */
    public function getCourses()
    {
        return $this->Courses;
    }
    /**
     * Set Courses value
     * @throws \InvalidArgumentException
     * @param \StructType\Course[] $courses
     * @return \StructType\CourseList
     */
    public function setCourses(array $courses = array())
    {
        foreach ($courses as $courseListCoursesItem) {
            // validation for constraint: itemType
            if (!$courseListCoursesItem instanceof \StructType\Course) {
                throw new \InvalidArgumentException(sprintf('The Courses property can only contain items of \StructType\Course, "%s" given', is_object($courseListCoursesItem) ? get_class($courseListCoursesItem) : gettype($courseListCoursesItem)), __LINE__);
            }
        }
        $this->Courses = $courses;
        return $this;
    }
    /**
     * Add item to Courses value
     * @throws \InvalidArgumentException
     * @param \StructType\Course $item
     * @return \StructType\CourseList
     */
    public function addToCourses(\StructType\Course $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Course) {
            throw new \InvalidArgumentException(sprintf('The Courses property can only contain items of \StructType\Course, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Courses[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CourseList
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
