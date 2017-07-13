<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Person StructType
 * @subpackage Structs
 */
class Person extends AbstractStructBase
{
    /**
     * The m_sIdentifier
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $m_sIdentifier;
    /**
     * The m_sEmail
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $m_sEmail;
    /**
     * The m_nId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $m_nId;
    /**
     * The m_sTitle
     * @var string
     */
    public $m_sTitle;
    /**
     * The m_sFirstname
     * @var string
     */
    public $m_sFirstname;
    /**
     * The m_sLastname
     * @var string
     */
    public $m_sLastname;
    /**
     * The m_nGender
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $m_nGender;
    /**
     * The m_sAddress
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $m_sAddress;
    /**
     * The m_sCustom1
     * @var string
     */
    public $m_sCustom1;
    /**
     * The m_sCustom2
     * @var string
     */
    public $m_sCustom2;
    /**
     * The m_sCustom3
     * @var string
     */
    public $m_sCustom3;
    /**
     * Constructor method for Person
     * @uses Person::setM_sIdentifier()
     * @uses Person::setM_sEmail()
     * @uses Person::setM_nId()
     * @uses Person::setM_sTitle()
     * @uses Person::setM_sFirstname()
     * @uses Person::setM_sLastname()
     * @uses Person::setM_nGender()
     * @uses Person::setM_sAddress()
     * @uses Person::setM_sCustom1()
     * @uses Person::setM_sCustom2()
     * @uses Person::setM_sCustom3()
     * @param string $m_sIdentifier
     * @param string $m_sEmail
     * @param int $m_nId
     * @param string $m_sTitle
     * @param string $m_sFirstname
     * @param string $m_sLastname
     * @param int $m_nGender
     * @param int $m_sAddress
     * @param string $m_sCustom1
     * @param string $m_sCustom2
     * @param string $m_sCustom3
     */
    public function __construct($m_sIdentifier = null, $m_sEmail = null, $m_nId = null, $m_sTitle = null, $m_sFirstname = null, $m_sLastname = null, $m_nGender = null, $m_sAddress = null, $m_sCustom1 = null, $m_sCustom2 = null, $m_sCustom3 = null)
    {
        $this
            ->setM_sIdentifier($m_sIdentifier)
            ->setM_sEmail($m_sEmail)
            ->setM_nId($m_nId)
            ->setM_sTitle($m_sTitle)
            ->setM_sFirstname($m_sFirstname)
            ->setM_sLastname($m_sLastname)
            ->setM_nGender($m_nGender)
            ->setM_sAddress($m_sAddress)
            ->setM_sCustom1($m_sCustom1)
            ->setM_sCustom2($m_sCustom2)
            ->setM_sCustom3($m_sCustom3);
    }
    /**
     * Get m_sIdentifier value
     * @return string
     */
    public function getM_sIdentifier()
    {
        return $this->m_sIdentifier;
    }
    /**
     * Set m_sIdentifier value
     * @param string $m_sIdentifier
     * @return \StructType\Person
     */
    public function setM_sIdentifier($m_sIdentifier = null)
    {
        // validation for constraint: string
        if (!is_null($m_sIdentifier) && !is_string($m_sIdentifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sIdentifier)), __LINE__);
        }
        $this->m_sIdentifier = $m_sIdentifier;
        return $this;
    }
    /**
     * Get m_sEmail value
     * @return string
     */
    public function getM_sEmail()
    {
        return $this->m_sEmail;
    }
    /**
     * Set m_sEmail value
     * @param string $m_sEmail
     * @return \StructType\Person
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
     * @return \StructType\Person
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
     * @return \StructType\Person
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
     * Get m_sFirstname value
     * @return string|null
     */
    public function getM_sFirstname()
    {
        return $this->m_sFirstname;
    }
    /**
     * Set m_sFirstname value
     * @param string $m_sFirstname
     * @return \StructType\Person
     */
    public function setM_sFirstname($m_sFirstname = null)
    {
        // validation for constraint: string
        if (!is_null($m_sFirstname) && !is_string($m_sFirstname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sFirstname)), __LINE__);
        }
        $this->m_sFirstname = $m_sFirstname;
        return $this;
    }
    /**
     * Get m_sLastname value
     * @return string|null
     */
    public function getM_sLastname()
    {
        return $this->m_sLastname;
    }
    /**
     * Set m_sLastname value
     * @param string $m_sLastname
     * @return \StructType\Person
     */
    public function setM_sLastname($m_sLastname = null)
    {
        // validation for constraint: string
        if (!is_null($m_sLastname) && !is_string($m_sLastname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sLastname)), __LINE__);
        }
        $this->m_sLastname = $m_sLastname;
        return $this;
    }
    /**
     * Get m_nGender value
     * @return int|null
     */
    public function getM_nGender()
    {
        return $this->m_nGender;
    }
    /**
     * Set m_nGender value
     * @param int $m_nGender
     * @return \StructType\Person
     */
    public function setM_nGender($m_nGender = null)
    {
        // validation for constraint: int
        if (!is_null($m_nGender) && !is_numeric($m_nGender)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nGender)), __LINE__);
        }
        $this->m_nGender = $m_nGender;
        return $this;
    }
    /**
     * Get m_sAddress value
     * @return int|null
     */
    public function getM_sAddress()
    {
        return $this->m_sAddress;
    }
    /**
     * Set m_sAddress value
     * @param int $m_sAddress
     * @return \StructType\Person
     */
    public function setM_sAddress($m_sAddress = null)
    {
        // validation for constraint: int
        if (!is_null($m_sAddress) && !is_numeric($m_sAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_sAddress)), __LINE__);
        }
        $this->m_sAddress = $m_sAddress;
        return $this;
    }
    /**
     * Get m_sCustom1 value
     * @return string|null
     */
    public function getM_sCustom1()
    {
        return $this->m_sCustom1;
    }
    /**
     * Set m_sCustom1 value
     * @param string $m_sCustom1
     * @return \StructType\Person
     */
    public function setM_sCustom1($m_sCustom1 = null)
    {
        // validation for constraint: string
        if (!is_null($m_sCustom1) && !is_string($m_sCustom1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sCustom1)), __LINE__);
        }
        $this->m_sCustom1 = $m_sCustom1;
        return $this;
    }
    /**
     * Get m_sCustom2 value
     * @return string|null
     */
    public function getM_sCustom2()
    {
        return $this->m_sCustom2;
    }
    /**
     * Set m_sCustom2 value
     * @param string $m_sCustom2
     * @return \StructType\Person
     */
    public function setM_sCustom2($m_sCustom2 = null)
    {
        // validation for constraint: string
        if (!is_null($m_sCustom2) && !is_string($m_sCustom2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sCustom2)), __LINE__);
        }
        $this->m_sCustom2 = $m_sCustom2;
        return $this;
    }
    /**
     * Get m_sCustom3 value
     * @return string|null
     */
    public function getM_sCustom3()
    {
        return $this->m_sCustom3;
    }
    /**
     * Set m_sCustom3 value
     * @param string $m_sCustom3
     * @return \StructType\Person
     */
    public function setM_sCustom3($m_sCustom3 = null)
    {
        // validation for constraint: string
        if (!is_null($m_sCustom3) && !is_string($m_sCustom3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sCustom3)), __LINE__);
        }
        $this->m_sCustom3 = $m_sCustom3;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Person
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
