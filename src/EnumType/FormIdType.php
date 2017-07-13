<?php

namespace EnumType;

/**
 * This class stands for FormIdType EnumType
 * @subpackage Enumerations
 */
class FormIdType
{
    /**
     * Constant for value 'INTERNAL'
     * @return string 'INTERNAL'
     */
    const VALUE_INTERNAL = 'INTERNAL';
    /**
     * Constant for value 'FORMNAME'
     * @return string 'FORMNAME'
     */
    const VALUE_FORMNAME = 'FORMNAME';
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
     * @uses self::VALUE_FORMNAME
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INTERNAL,
            self::VALUE_FORMNAME,
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
