<?php

namespace EnumType;

/**
 * This class stands for QuestionTypes EnumType
 * @subpackage Enumerations
 */
class QuestionTypes
{
    /**
     * Constant for value '0'
     * @return string '0'
     */
    const VALUE_0 = '0';
    /**
     * Constant for value '2'
     * @return string '2'
     */
    const VALUE_2 = '2';
    /**
     * Constant for value '4'
     * @return string '4'
     */
    const VALUE_4 = '4';
    /**
     * Constant for value '6'
     * @return string '6'
     */
    const VALUE_6 = '6';
    /**
     * Constant for value '8'
     * @return string '8'
     */
    const VALUE_8 = '8';
    /**
     * Constant for value '10'
     * @return string '10'
     */
    const VALUE_10 = '10';
    /**
     * Constant for value '14'
     * @return string '14'
     */
    const VALUE_14 = '14';
    /**
     * Constant for value '1001'
     * @return string '1001'
     */
    const VALUE_1001 = '1001';
    /**
     * Constant for value '1002'
     * @return string '1002'
     */
    const VALUE_1002 = '1002';
    /**
     * Constant for value '1003'
     * @return string '1003'
     */
    const VALUE_1003 = '1003';
    /**
     * Constant for value '1004'
     * @return string '1004'
     */
    const VALUE_1004 = '1004';
    /**
     * Constant for value '1005'
     * @return string '1005'
     */
    const VALUE_1005 = '1005';
    /**
     * Constant for value '1006'
     * @return string '1006'
     */
    const VALUE_1006 = '1006';
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
     * @uses self::VALUE_0
     * @uses self::VALUE_2
     * @uses self::VALUE_4
     * @uses self::VALUE_6
     * @uses self::VALUE_8
     * @uses self::VALUE_10
     * @uses self::VALUE_14
     * @uses self::VALUE_1001
     * @uses self::VALUE_1002
     * @uses self::VALUE_1003
     * @uses self::VALUE_1004
     * @uses self::VALUE_1005
     * @uses self::VALUE_1006
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_0,
            self::VALUE_2,
            self::VALUE_4,
            self::VALUE_6,
            self::VALUE_8,
            self::VALUE_10,
            self::VALUE_14,
            self::VALUE_1001,
            self::VALUE_1002,
            self::VALUE_1003,
            self::VALUE_1004,
            self::VALUE_1005,
            self::VALUE_1006,
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
