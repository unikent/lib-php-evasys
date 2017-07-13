<?php

namespace EnumType;

/**
 * This class stands for PeriodIdType EnumType
 * @subpackage Enumerations
 */
class PeriodIdType
{
    /**
     * Constant for value 'INTERNAL'
     * @return string 'INTERNAL'
     */
    const VALUE_INTERNAL = 'INTERNAL';
    /**
     * Constant for value 'PERIODNAME'
     * @return string 'PERIODNAME'
     */
    const VALUE_PERIODNAME = 'PERIODNAME';
    /**
     * Constant for value 'PERIODDATE'
     * @return string 'PERIODDATE'
     */
    const VALUE_PERIODDATE = 'PERIODDATE';
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
     * @uses self::VALUE_PERIODNAME
     * @uses self::VALUE_PERIODDATE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INTERNAL,
            self::VALUE_PERIODNAME,
            self::VALUE_PERIODDATE,
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
