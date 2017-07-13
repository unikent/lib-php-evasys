<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Period StructType
 * @subpackage Structs
 */
class Period extends AbstractStructBase
{
    /**
     * The m_nPeriodId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $m_nPeriodId;
    /**
     * The m_sTitel
     * @var string
     */
    public $m_sTitel;
    /**
     * The m_sStartDate
     * @var string
     */
    public $m_sStartDate;
    /**
     * The m_sEndDate
     * @var string
     */
    public $m_sEndDate;
    /**
     * Constructor method for Period
     * @uses Period::setM_nPeriodId()
     * @uses Period::setM_sTitel()
     * @uses Period::setM_sStartDate()
     * @uses Period::setM_sEndDate()
     * @param int $m_nPeriodId
     * @param string $m_sTitel
     * @param string $m_sStartDate
     * @param string $m_sEndDate
     */
    public function __construct($m_nPeriodId = null, $m_sTitel = null, $m_sStartDate = null, $m_sEndDate = null)
    {
        $this
            ->setM_nPeriodId($m_nPeriodId)
            ->setM_sTitel($m_sTitel)
            ->setM_sStartDate($m_sStartDate)
            ->setM_sEndDate($m_sEndDate);
    }
    /**
     * Get m_nPeriodId value
     * @return int|null
     */
    public function getM_nPeriodId()
    {
        return $this->m_nPeriodId;
    }
    /**
     * Set m_nPeriodId value
     * @param int $m_nPeriodId
     * @return \StructType\Period
     */
    public function setM_nPeriodId($m_nPeriodId = null)
    {
        // validation for constraint: int
        if (!is_null($m_nPeriodId) && !is_numeric($m_nPeriodId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nPeriodId)), __LINE__);
        }
        $this->m_nPeriodId = $m_nPeriodId;
        return $this;
    }
    /**
     * Get m_sTitel value
     * @return string|null
     */
    public function getM_sTitel()
    {
        return $this->m_sTitel;
    }
    /**
     * Set m_sTitel value
     * @param string $m_sTitel
     * @return \StructType\Period
     */
    public function setM_sTitel($m_sTitel = null)
    {
        // validation for constraint: string
        if (!is_null($m_sTitel) && !is_string($m_sTitel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sTitel)), __LINE__);
        }
        $this->m_sTitel = $m_sTitel;
        return $this;
    }
    /**
     * Get m_sStartDate value
     * @return string|null
     */
    public function getM_sStartDate()
    {
        return $this->m_sStartDate;
    }
    /**
     * Set m_sStartDate value
     * @param string $m_sStartDate
     * @return \StructType\Period
     */
    public function setM_sStartDate($m_sStartDate = null)
    {
        // validation for constraint: string
        if (!is_null($m_sStartDate) && !is_string($m_sStartDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sStartDate)), __LINE__);
        }
        $this->m_sStartDate = $m_sStartDate;
        return $this;
    }
    /**
     * Get m_sEndDate value
     * @return string|null
     */
    public function getM_sEndDate()
    {
        return $this->m_sEndDate;
    }
    /**
     * Set m_sEndDate value
     * @param string $m_sEndDate
     * @return \StructType\Period
     */
    public function setM_sEndDate($m_sEndDate = null)
    {
        // validation for constraint: string
        if (!is_null($m_sEndDate) && !is_string($m_sEndDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sEndDate)), __LINE__);
        }
        $this->m_sEndDate = $m_sEndDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Period
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
