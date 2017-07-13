<?php

namespace EnumType;

/**
 * This class stands for CourseIdType EnumType
 * @subpackage Enumerations
 */
class CourseIdType
{
    /**
     * Constant for value 'INTERNAL'
     * @return string 'INTERNAL'
     */
    const VALUE_INTERNAL = 'INTERNAL';
    /**
     * Constant for value 'PUBLIC'
     * @return string 'PUBLIC'
     */
    const VALUE_PUBLIC = 'PUBLIC';
    /**
     * Constant for value 'EXTERNAL'
     * @return string 'EXTERNAL'
     */
    const VALUE_EXTERNAL = 'EXTERNAL';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_INTERNAL
     * @uses self::VALUE_PUBLIC
     * @uses self::VALUE_EXTERNAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INTERNAL,
            self::VALUE_PUBLIC,
            self::VALUE_EXTERNAL,
        );
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
