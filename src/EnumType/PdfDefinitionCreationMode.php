<?php

namespace EnumType;

/**
 * This class stands for PdfDefinitionCreationMode EnumType
 * @subpackage Enumerations
 */
class PdfDefinitionCreationMode
{
    /**
     * Constant for value 'INCLUSIVE'
     * @return string 'INCLUSIVE'
     */
    const VALUE_INCLUSIVE = 'INCLUSIVE';
    /**
     * Constant for value 'EXCLUSIVE'
     * @return string 'EXCLUSIVE'
     */
    const VALUE_EXCLUSIVE = 'EXCLUSIVE';
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
     * @uses self::VALUE_INCLUSIVE
     * @uses self::VALUE_EXCLUSIVE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INCLUSIVE,
            self::VALUE_EXCLUSIVE,
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
