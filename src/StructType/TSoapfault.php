<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tSoapfault StructType
 * @subpackage Structs
 */
class TSoapfault extends AbstractStructBase
{
    /**
     * The sErrorCode
     * @var string
     */
    public $sErrorCode;
    /**
     * The sErrorMessage
     * @var string
     */
    public $sErrorMessage;
    /**
     * The sDetails
     * @var string
     */
    public $sDetails;
    /**
     * Constructor method for tSoapfault
     * @uses TSoapfault::setSErrorCode()
     * @uses TSoapfault::setSErrorMessage()
     * @uses TSoapfault::setSDetails()
     * @param string $sErrorCode
     * @param string $sErrorMessage
     * @param string $sDetails
     */
    public function __construct($sErrorCode = null, $sErrorMessage = null, $sDetails = null)
    {
        $this
            ->setSErrorCode($sErrorCode)
            ->setSErrorMessage($sErrorMessage)
            ->setSDetails($sDetails);
    }
    /**
     * Get sErrorCode value
     * @return string|null
     */
    public function getSErrorCode()
    {
        return $this->sErrorCode;
    }
    /**
     * Set sErrorCode value
     * @param string $sErrorCode
     * @return \StructType\TSoapfault
     */
    public function setSErrorCode($sErrorCode = null)
    {
        // validation for constraint: string
        if (!is_null($sErrorCode) && !is_string($sErrorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sErrorCode)), __LINE__);
        }
        $this->sErrorCode = $sErrorCode;
        return $this;
    }
    /**
     * Get sErrorMessage value
     * @return string|null
     */
    public function getSErrorMessage()
    {
        return $this->sErrorMessage;
    }
    /**
     * Set sErrorMessage value
     * @param string $sErrorMessage
     * @return \StructType\TSoapfault
     */
    public function setSErrorMessage($sErrorMessage = null)
    {
        // validation for constraint: string
        if (!is_null($sErrorMessage) && !is_string($sErrorMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sErrorMessage)), __LINE__);
        }
        $this->sErrorMessage = $sErrorMessage;
        return $this;
    }
    /**
     * Get sDetails value
     * @return string|null
     */
    public function getSDetails()
    {
        return $this->sDetails;
    }
    /**
     * Set sDetails value
     * @param string $sDetails
     * @return \StructType\TSoapfault
     */
    public function setSDetails($sDetails = null)
    {
        // validation for constraint: string
        if (!is_null($sDetails) && !is_string($sDetails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sDetails)), __LINE__);
        }
        $this->sDetails = $sDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TSoapfault
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
