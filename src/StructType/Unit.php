<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Unit StructType
 * @subpackage Structs
 */
class Unit extends AbstractStructBase
{
    /**
     * The m_nId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $m_nId;
    /**
     * The m_sName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $m_sName;
    /**
     * The m_nImageAccess
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $m_nImageAccess;
    /**
     * The m_nPublicUnitNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $m_nPublicUnitNumber;
    /**
     * The m_aUsers
     * @var \StructType\UserList
     */
    public $m_aUsers;
    /**
     * Constructor method for Unit
     * @uses Unit::setM_nId()
     * @uses Unit::setM_sName()
     * @uses Unit::setM_nImageAccess()
     * @uses Unit::setM_nPublicUnitNumber()
     * @uses Unit::setM_aUsers()
     * @param int $m_nId
     * @param string $m_sName
     * @param int $m_nImageAccess
     * @param int $m_nPublicUnitNumber
     * @param \StructType\UserList $m_aUsers
     */
    public function __construct($m_nId = null, $m_sName = null, $m_nImageAccess = null, $m_nPublicUnitNumber = null, \StructType\UserList $m_aUsers = null)
    {
        $this
            ->setM_nId($m_nId)
            ->setM_sName($m_sName)
            ->setM_nImageAccess($m_nImageAccess)
            ->setM_nPublicUnitNumber($m_nPublicUnitNumber)
            ->setM_aUsers($m_aUsers);
    }
    /**
     * Get m_nId value
     * @return int
     */
    public function getM_nId()
    {
        return $this->m_nId;
    }
    /**
     * Set m_nId value
     * @param int $m_nId
     * @return \StructType\Unit
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
     * Get m_sName value
     * @return string
     */
    public function getM_sName()
    {
        return $this->m_sName;
    }
    /**
     * Set m_sName value
     * @param string $m_sName
     * @return \StructType\Unit
     */
    public function setM_sName($m_sName = null)
    {
        // validation for constraint: string
        if (!is_null($m_sName) && !is_string($m_sName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sName)), __LINE__);
        }
        $this->m_sName = $m_sName;
        return $this;
    }
    /**
     * Get m_nImageAccess value
     * @return int
     */
    public function getM_nImageAccess()
    {
        return $this->m_nImageAccess;
    }
    /**
     * Set m_nImageAccess value
     * @param int $m_nImageAccess
     * @return \StructType\Unit
     */
    public function setM_nImageAccess($m_nImageAccess = null)
    {
        // validation for constraint: int
        if (!is_null($m_nImageAccess) && !is_numeric($m_nImageAccess)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nImageAccess)), __LINE__);
        }
        $this->m_nImageAccess = $m_nImageAccess;
        return $this;
    }
    /**
     * Get m_nPublicUnitNumber value
     * @return int|null
     */
    public function getM_nPublicUnitNumber()
    {
        return $this->m_nPublicUnitNumber;
    }
    /**
     * Set m_nPublicUnitNumber value
     * @param int $m_nPublicUnitNumber
     * @return \StructType\Unit
     */
    public function setM_nPublicUnitNumber($m_nPublicUnitNumber = null)
    {
        // validation for constraint: int
        if (!is_null($m_nPublicUnitNumber) && !is_numeric($m_nPublicUnitNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nPublicUnitNumber)), __LINE__);
        }
        $this->m_nPublicUnitNumber = $m_nPublicUnitNumber;
        return $this;
    }
    /**
     * Get m_aUsers value
     * @return \StructType\UserList|null
     */
    public function getM_aUsers()
    {
        return $this->m_aUsers;
    }
    /**
     * Set m_aUsers value
     * @param \StructType\UserList $m_aUsers
     * @return \StructType\Unit
     */
    public function setM_aUsers(\StructType\UserList $m_aUsers = null)
    {
        $this->m_aUsers = $m_aUsers;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Unit
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
