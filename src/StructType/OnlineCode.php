<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OnlineCode StructType
 * @subpackage Structs
 */
class OnlineCode extends AbstractStructBase
{
    /**
     * The m_sOnlineCode
     * @var string
     */
    public $m_sOnlineCode;
    /**
     * The m_nCodeType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $m_nCodeType;
    /**
     * The m_nSurveyId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $m_nSurveyId;
    /**
     * The m_sRecipientMailAddress
     * @var string
     */
    public $m_sRecipientMailAddress;
    /**
     * The m_sDirectOnlineLink
     * @var string
     */
    public $m_sDirectOnlineLink;
    /**
     * Constructor method for OnlineCode
     * @uses OnlineCode::setM_sOnlineCode()
     * @uses OnlineCode::setM_nCodeType()
     * @uses OnlineCode::setM_nSurveyId()
     * @uses OnlineCode::setM_sRecipientMailAddress()
     * @uses OnlineCode::setM_sDirectOnlineLink()
     * @param string $m_sOnlineCode
     * @param int $m_nCodeType
     * @param int $m_nSurveyId
     * @param string $m_sRecipientMailAddress
     * @param string $m_sDirectOnlineLink
     */
    public function __construct($m_sOnlineCode = null, $m_nCodeType = null, $m_nSurveyId = null, $m_sRecipientMailAddress = null, $m_sDirectOnlineLink = null)
    {
        $this
            ->setM_sOnlineCode($m_sOnlineCode)
            ->setM_nCodeType($m_nCodeType)
            ->setM_nSurveyId($m_nSurveyId)
            ->setM_sRecipientMailAddress($m_sRecipientMailAddress)
            ->setM_sDirectOnlineLink($m_sDirectOnlineLink);
    }
    /**
     * Get m_sOnlineCode value
     * @return string|null
     */
    public function getM_sOnlineCode()
    {
        return $this->m_sOnlineCode;
    }
    /**
     * Set m_sOnlineCode value
     * @param string $m_sOnlineCode
     * @return \StructType\OnlineCode
     */
    public function setM_sOnlineCode($m_sOnlineCode = null)
    {
        // validation for constraint: string
        if (!is_null($m_sOnlineCode) && !is_string($m_sOnlineCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sOnlineCode)), __LINE__);
        }
        $this->m_sOnlineCode = $m_sOnlineCode;
        return $this;
    }
    /**
     * Get m_nCodeType value
     * @return int|null
     */
    public function getM_nCodeType()
    {
        return $this->m_nCodeType;
    }
    /**
     * Set m_nCodeType value
     * @param int $m_nCodeType
     * @return \StructType\OnlineCode
     */
    public function setM_nCodeType($m_nCodeType = null)
    {
        // validation for constraint: int
        if (!is_null($m_nCodeType) && !is_numeric($m_nCodeType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nCodeType)), __LINE__);
        }
        $this->m_nCodeType = $m_nCodeType;
        return $this;
    }
    /**
     * Get m_nSurveyId value
     * @return int|null
     */
    public function getM_nSurveyId()
    {
        return $this->m_nSurveyId;
    }
    /**
     * Set m_nSurveyId value
     * @param int $m_nSurveyId
     * @return \StructType\OnlineCode
     */
    public function setM_nSurveyId($m_nSurveyId = null)
    {
        // validation for constraint: int
        if (!is_null($m_nSurveyId) && !is_numeric($m_nSurveyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nSurveyId)), __LINE__);
        }
        $this->m_nSurveyId = $m_nSurveyId;
        return $this;
    }
    /**
     * Get m_sRecipientMailAddress value
     * @return string|null
     */
    public function getM_sRecipientMailAddress()
    {
        return $this->m_sRecipientMailAddress;
    }
    /**
     * Set m_sRecipientMailAddress value
     * @param string $m_sRecipientMailAddress
     * @return \StructType\OnlineCode
     */
    public function setM_sRecipientMailAddress($m_sRecipientMailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($m_sRecipientMailAddress) && !is_string($m_sRecipientMailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sRecipientMailAddress)), __LINE__);
        }
        $this->m_sRecipientMailAddress = $m_sRecipientMailAddress;
        return $this;
    }
    /**
     * Get m_sDirectOnlineLink value
     * @return string|null
     */
    public function getM_sDirectOnlineLink()
    {
        return $this->m_sDirectOnlineLink;
    }
    /**
     * Set m_sDirectOnlineLink value
     * @param string $m_sDirectOnlineLink
     * @return \StructType\OnlineCode
     */
    public function setM_sDirectOnlineLink($m_sDirectOnlineLink = null)
    {
        // validation for constraint: string
        if (!is_null($m_sDirectOnlineLink) && !is_string($m_sDirectOnlineLink)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sDirectOnlineLink)), __LINE__);
        }
        $this->m_sDirectOnlineLink = $m_sDirectOnlineLink;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\OnlineCode
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
