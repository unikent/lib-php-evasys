<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalHeaderLine StructType
 * @subpackage Structs
 */
class AdditionalHeaderLine extends AbstractStructBase
{
    /**
     * The LeftFieldContent
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $LeftFieldContent;
    /**
     * The RightFieldContent
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $RightFieldContent;
    /**
     * Constructor method for AdditionalHeaderLine
     * @uses AdditionalHeaderLine::setLeftFieldContent()
     * @uses AdditionalHeaderLine::setRightFieldContent()
     * @param string $leftFieldContent
     * @param string $rightFieldContent
     */
    public function __construct($leftFieldContent = null, $rightFieldContent = null)
    {
        $this
            ->setLeftFieldContent($leftFieldContent)
            ->setRightFieldContent($rightFieldContent);
    }
    /**
     * Get LeftFieldContent value
     * @return string|null
     */
    public function getLeftFieldContent()
    {
        return $this->LeftFieldContent;
    }
    /**
     * Set LeftFieldContent value
     * @param string $leftFieldContent
     * @return \StructType\AdditionalHeaderLine
     */
    public function setLeftFieldContent($leftFieldContent = null)
    {
        // validation for constraint: string
        if (!is_null($leftFieldContent) && !is_string($leftFieldContent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($leftFieldContent)), __LINE__);
        }
        $this->LeftFieldContent = $leftFieldContent;
        return $this;
    }
    /**
     * Get RightFieldContent value
     * @return string|null
     */
    public function getRightFieldContent()
    {
        return $this->RightFieldContent;
    }
    /**
     * Set RightFieldContent value
     * @param string $rightFieldContent
     * @return \StructType\AdditionalHeaderLine
     */
    public function setRightFieldContent($rightFieldContent = null)
    {
        // validation for constraint: string
        if (!is_null($rightFieldContent) && !is_string($rightFieldContent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rightFieldContent)), __LINE__);
        }
        $this->RightFieldContent = $rightFieldContent;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AdditionalHeaderLine
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
