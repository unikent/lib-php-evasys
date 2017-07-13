<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for User StructType
 * @subpackage Structs
 */
class User extends AbstractStructBase
{
    /**
     * The m_nId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $m_nId;
    /**
     * The m_nType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $m_nType;
    /**
     * The m_sLoginName
     * @var string
     */
    public $m_sLoginName;
    /**
     * The m_sExternalId
     * @var string
     */
    public $m_sExternalId;
    /**
     * The m_sTitle
     * @var string
     */
    public $m_sTitle;
    /**
     * The m_sFirstName
     * @var string
     */
    public $m_sFirstName;
    /**
     * The m_sSurName
     * @var string
     */
    public $m_sSurName;
    /**
     * The m_sUnitName
     * @var string
     */
    public $m_sUnitName;
    /**
     * The m_sAddress
     * @var string
     */
    public $m_sAddress;
    /**
     * The m_sEmail
     * @var string
     */
    public $m_sEmail;
    /**
     * The m_nFbid
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $m_nFbid;
    /**
     * The m_nAddressId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $m_nAddressId;
    /**
     * The m_sPassword
     * @var string
     */
    public $m_sPassword;
    /**
     * The m_sPhoneNumber
     * @var string
     */
    public $m_sPhoneNumber;
    /**
     * The m_aCourses
     * @var \StructType\CourseList
     */
    public $m_aCourses;
    /**
     * Constructor method for User
     * @uses User::setM_nId()
     * @uses User::setM_nType()
     * @uses User::setM_sLoginName()
     * @uses User::setM_sExternalId()
     * @uses User::setM_sTitle()
     * @uses User::setM_sFirstName()
     * @uses User::setM_sSurName()
     * @uses User::setM_sUnitName()
     * @uses User::setM_sAddress()
     * @uses User::setM_sEmail()
     * @uses User::setM_nFbid()
     * @uses User::setM_nAddressId()
     * @uses User::setM_sPassword()
     * @uses User::setM_sPhoneNumber()
     * @uses User::setM_aCourses()
     * @param int $m_nId
     * @param int $m_nType
     * @param string $m_sLoginName
     * @param string $m_sExternalId
     * @param string $m_sTitle
     * @param string $m_sFirstName
     * @param string $m_sSurName
     * @param string $m_sUnitName
     * @param string $m_sAddress
     * @param string $m_sEmail
     * @param int $m_nFbid
     * @param int $m_nAddressId
     * @param string $m_sPassword
     * @param string $m_sPhoneNumber
     * @param \StructType\CourseList $m_aCourses
     */
    public function __construct($m_nId = null, $m_nType = null, $m_sLoginName = null, $m_sExternalId = null, $m_sTitle = null, $m_sFirstName = null, $m_sSurName = null, $m_sUnitName = null, $m_sAddress = null, $m_sEmail = null, $m_nFbid = null, $m_nAddressId = null, $m_sPassword = null, $m_sPhoneNumber = null, \StructType\CourseList $m_aCourses = null)
    {
        $this
            ->setM_nId($m_nId)
            ->setM_nType($m_nType)
            ->setM_sLoginName($m_sLoginName)
            ->setM_sExternalId($m_sExternalId)
            ->setM_sTitle($m_sTitle)
            ->setM_sFirstName($m_sFirstName)
            ->setM_sSurName($m_sSurName)
            ->setM_sUnitName($m_sUnitName)
            ->setM_sAddress($m_sAddress)
            ->setM_sEmail($m_sEmail)
            ->setM_nFbid($m_nFbid)
            ->setM_nAddressId($m_nAddressId)
            ->setM_sPassword($m_sPassword)
            ->setM_sPhoneNumber($m_sPhoneNumber)
            ->setM_aCourses($m_aCourses);
    }
    /**
     * Get m_nId value
     * @return int|null
     */
    public function getM_nId()
    {
        return $this->m_nId;
    }
    /**
     * Set m_nId value
     * @param int $m_nId
     * @return \StructType\User
     */
    public function setM_nId($m_nId = null)
    {
        // validation for constraint: int
        if (!is_null($m_nId) && !is_numeric($m_nId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nId)), __LINE__);
        }
        $this->m_nId = $m_nId;
        return $this;
    }
    /**
     * Get m_nType value
     * @return int|null
     */
    public function getM_nType()
    {
        return $this->m_nType;
    }
    /**
     * Set m_nType value
     * @param int $m_nType
     * @return \StructType\User
     */
    public function setM_nType($m_nType = null)
    {
        // validation for constraint: int
        if (!is_null($m_nType) && !is_numeric($m_nType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nType)), __LINE__);
        }
        $this->m_nType = $m_nType;
        return $this;
    }
    /**
     * Get m_sLoginName value
     * @return string|null
     */
    public function getM_sLoginName()
    {
        return $this->m_sLoginName;
    }
    /**
     * Set m_sLoginName value
     * @param string $m_sLoginName
     * @return \StructType\User
     */
    public function setM_sLoginName($m_sLoginName = null)
    {
        // validation for constraint: string
        if (!is_null($m_sLoginName) && !is_string($m_sLoginName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sLoginName)), __LINE__);
        }
        $this->m_sLoginName = $m_sLoginName;
        return $this;
    }
    /**
     * Get m_sExternalId value
     * @return string|null
     */
    public function getM_sExternalId()
    {
        return $this->m_sExternalId;
    }
    /**
     * Set m_sExternalId value
     * @param string $m_sExternalId
     * @return \StructType\User
     */
    public function setM_sExternalId($m_sExternalId = null)
    {
        // validation for constraint: string
        if (!is_null($m_sExternalId) && !is_string($m_sExternalId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sExternalId)), __LINE__);
        }
        $this->m_sExternalId = $m_sExternalId;
        return $this;
    }
    /**
     * Get m_sTitle value
     * @return string|null
     */
    public function getM_sTitle()
    {
        return $this->m_sTitle;
    }
    /**
     * Set m_sTitle value
     * @param string $m_sTitle
     * @return \StructType\User
     */
    public function setM_sTitle($m_sTitle = null)
    {
        // validation for constraint: string
        if (!is_null($m_sTitle) && !is_string($m_sTitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sTitle)), __LINE__);
        }
        $this->m_sTitle = $m_sTitle;
        return $this;
    }
    /**
     * Get m_sFirstName value
     * @return string|null
     */
    public function getM_sFirstName()
    {
        return $this->m_sFirstName;
    }
    /**
     * Set m_sFirstName value
     * @param string $m_sFirstName
     * @return \StructType\User
     */
    public function setM_sFirstName($m_sFirstName = null)
    {
        // validation for constraint: string
        if (!is_null($m_sFirstName) && !is_string($m_sFirstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sFirstName)), __LINE__);
        }
        $this->m_sFirstName = $m_sFirstName;
        return $this;
    }
    /**
     * Get m_sSurName value
     * @return string|null
     */
    public function getM_sSurName()
    {
        return $this->m_sSurName;
    }
    /**
     * Set m_sSurName value
     * @param string $m_sSurName
     * @return \StructType\User
     */
    public function setM_sSurName($m_sSurName = null)
    {
        // validation for constraint: string
        if (!is_null($m_sSurName) && !is_string($m_sSurName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sSurName)), __LINE__);
        }
        $this->m_sSurName = $m_sSurName;
        return $this;
    }
    /**
     * Get m_sUnitName value
     * @return string|null
     */
    public function getM_sUnitName()
    {
        return $this->m_sUnitName;
    }
    /**
     * Set m_sUnitName value
     * @param string $m_sUnitName
     * @return \StructType\User
     */
    public function setM_sUnitName($m_sUnitName = null)
    {
        // validation for constraint: string
        if (!is_null($m_sUnitName) && !is_string($m_sUnitName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sUnitName)), __LINE__);
        }
        $this->m_sUnitName = $m_sUnitName;
        return $this;
    }
    /**
     * Get m_sAddress value
     * @return string|null
     */
    public function getM_sAddress()
    {
        return $this->m_sAddress;
    }
    /**
     * Set m_sAddress value
     * @param string $m_sAddress
     * @return \StructType\User
     */
    public function setM_sAddress($m_sAddress = null)
    {
        // validation for constraint: string
        if (!is_null($m_sAddress) && !is_string($m_sAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sAddress)), __LINE__);
        }
        $this->m_sAddress = $m_sAddress;
        return $this;
    }
    /**
     * Get m_sEmail value
     * @return string|null
     */
    public function getM_sEmail()
    {
        return $this->m_sEmail;
    }
    /**
     * Set m_sEmail value
     * @param string $m_sEmail
     * @return \StructType\User
     */
    public function setM_sEmail($m_sEmail = null)
    {
        // validation for constraint: string
        if (!is_null($m_sEmail) && !is_string($m_sEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sEmail)), __LINE__);
        }
        $this->m_sEmail = $m_sEmail;
        return $this;
    }
    /**
     * Get m_nFbid value
     * @return int|null
     */
    public function getM_nFbid()
    {
        return $this->m_nFbid;
    }
    /**
     * Set m_nFbid value
     * @param int $m_nFbid
     * @return \StructType\User
     */
    public function setM_nFbid($m_nFbid = null)
    {
        // validation for constraint: int
        if (!is_null($m_nFbid) && !is_numeric($m_nFbid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nFbid)), __LINE__);
        }
        $this->m_nFbid = $m_nFbid;
        return $this;
    }
    /**
     * Get m_nAddressId value
     * @return int|null
     */
    public function getM_nAddressId()
    {
        return $this->m_nAddressId;
    }
    /**
     * Set m_nAddressId value
     * @param int $m_nAddressId
     * @return \StructType\User
     */
    public function setM_nAddressId($m_nAddressId = null)
    {
        // validation for constraint: int
        if (!is_null($m_nAddressId) && !is_numeric($m_nAddressId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nAddressId)), __LINE__);
        }
        $this->m_nAddressId = $m_nAddressId;
        return $this;
    }
    /**
     * Get m_sPassword value
     * @return string|null
     */
    public function getM_sPassword()
    {
        return $this->m_sPassword;
    }
    /**
     * Set m_sPassword value
     * @param string $m_sPassword
     * @return \StructType\User
     */
    public function setM_sPassword($m_sPassword = null)
    {
        // validation for constraint: string
        if (!is_null($m_sPassword) && !is_string($m_sPassword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sPassword)), __LINE__);
        }
        $this->m_sPassword = $m_sPassword;
        return $this;
    }
    /**
     * Get m_sPhoneNumber value
     * @return string|null
     */
    public function getM_sPhoneNumber()
    {
        return $this->m_sPhoneNumber;
    }
    /**
     * Set m_sPhoneNumber value
     * @param string $m_sPhoneNumber
     * @return \StructType\User
     */
    public function setM_sPhoneNumber($m_sPhoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($m_sPhoneNumber) && !is_string($m_sPhoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sPhoneNumber)), __LINE__);
        }
        $this->m_sPhoneNumber = $m_sPhoneNumber;
        return $this;
    }
    /**
     * Get m_aCourses value
     * @return \StructType\CourseList|null
     */
    public function getM_aCourses()
    {
        return $this->m_aCourses;
    }
    /**
     * Set m_aCourses value
     * @param \StructType\CourseList $m_aCourses
     * @return \StructType\User
     */
    public function setM_aCourses(\StructType\CourseList $m_aCourses = null)
    {
        $this->m_aCourses = $m_aCourses;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\User
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
