<?php

namespace EnumType;

/**
 * This class stands for Alignment EnumType
 * @subpackage Enumerations
 */
class Alignment
{
    /**
     * Constant for value 'right'
     * @return string 'right'
     */
    const VALUE_RIGHT = 'right';
    /**
     * Constant for value 'left'
     * @return string 'left'
     */
    const VALUE_LEFT = 'left';
    /**
     * Constant for value 'center'
     * @return string 'center'
     */
    const VALUE_CENTER = 'center';
    /**
     * Constant for value 'justify'
     * @return string 'justify'
     */
    const VALUE_JUSTIFY = 'justify';
    /**
     * Constant for value ''
     * @return string ''
     */
    const VALUE_ = '';
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
     * @uses self::VALUE_RIGHT
     * @uses self::VALUE_LEFT
     * @uses self::VALUE_CENTER
     * @uses self::VALUE_JUSTIFY
     * @uses self::VALUE_
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_RIGHT,
            self::VALUE_LEFT,
            self::VALUE_CENTER,
            self::VALUE_JUSTIFY,
            self::VALUE_,
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
