<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Survey StructType
 * @subpackage Structs
 */
class Survey extends AbstractStructBase
{
    /**
     * The m_nSurveyId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $m_nSurveyId;
    /**
     * The m_nState
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $m_nState;
    /**
     * The m_sTitle
     * @var string
     */
    public $m_sTitle;
    /**
     * The m_cType
     * @var string
     */
    public $m_cType;
    /**
     * The m_nFrmid
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $m_nFrmid;
    /**
     * The m_nStuid
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $m_nStuid;
    /**
     * The m_nVerid
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $m_nVerid;
    /**
     * The m_nOpenState
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $m_nOpenState;
    /**
     * The m_nFormCount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $m_nFormCount;
    /**
     * The m_nPswdCount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $m_nPswdCount;
    /**
     * The m_sLastDataCollectionDate
     * @var string
     */
    public $m_sLastDataCollectionDate;
    /**
     * The m_nPageLinkOffset
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $m_nPageLinkOffset;
    /**
     * The m_sMaskTan
     * @var string
     */
    public $m_sMaskTan;
    /**
     * The m_nMaskState
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $m_nMaskState;
    /**
     * The m_oPeriod
     * @var \StructType\Period
     */
    public $m_oPeriod;
    /**
     * Constructor method for Survey
     * @uses Survey::setM_nSurveyId()
     * @uses Survey::setM_nState()
     * @uses Survey::setM_sTitle()
     * @uses Survey::setM_cType()
     * @uses Survey::setM_nFrmid()
     * @uses Survey::setM_nStuid()
     * @uses Survey::setM_nVerid()
     * @uses Survey::setM_nOpenState()
     * @uses Survey::setM_nFormCount()
     * @uses Survey::setM_nPswdCount()
     * @uses Survey::setM_sLastDataCollectionDate()
     * @uses Survey::setM_nPageLinkOffset()
     * @uses Survey::setM_sMaskTan()
     * @uses Survey::setM_nMaskState()
     * @uses Survey::setM_oPeriod()
     * @param int $m_nSurveyId
     * @param int $m_nState
     * @param string $m_sTitle
     * @param string $m_cType
     * @param int $m_nFrmid
     * @param int $m_nStuid
     * @param int $m_nVerid
     * @param int $m_nOpenState
     * @param int $m_nFormCount
     * @param int $m_nPswdCount
     * @param string $m_sLastDataCollectionDate
     * @param int $m_nPageLinkOffset
     * @param string $m_sMaskTan
     * @param int $m_nMaskState
     * @param \StructType\Period $m_oPeriod
     */
    public function __construct($m_nSurveyId = null, $m_nState = null, $m_sTitle = null, $m_cType = null, $m_nFrmid = null, $m_nStuid = null, $m_nVerid = null, $m_nOpenState = null, $m_nFormCount = null, $m_nPswdCount = null, $m_sLastDataCollectionDate = null, $m_nPageLinkOffset = null, $m_sMaskTan = null, $m_nMaskState = null, \StructType\Period $m_oPeriod = null)
    {
        $this
            ->setM_nSurveyId($m_nSurveyId)
            ->setM_nState($m_nState)
            ->setM_sTitle($m_sTitle)
            ->setM_cType($m_cType)
            ->setM_nFrmid($m_nFrmid)
            ->setM_nStuid($m_nStuid)
            ->setM_nVerid($m_nVerid)
            ->setM_nOpenState($m_nOpenState)
            ->setM_nFormCount($m_nFormCount)
            ->setM_nPswdCount($m_nPswdCount)
            ->setM_sLastDataCollectionDate($m_sLastDataCollectionDate)
            ->setM_nPageLinkOffset($m_nPageLinkOffset)
            ->setM_sMaskTan($m_sMaskTan)
            ->setM_nMaskState($m_nMaskState)
            ->setM_oPeriod($m_oPeriod);
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
     * @return \StructType\Survey
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
     * Get m_nState value
     * @return int|null
     */
    public function getM_nState()
    {
        return $this->m_nState;
    }
    /**
     * Set m_nState value
     * @param int $m_nState
     * @return \StructType\Survey
     */
    public function setM_nState($m_nState = null)
    {
        // validation for constraint: int
        if (!is_null($m_nState) && !is_numeric($m_nState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nState)), __LINE__);
        }
        $this->m_nState = $m_nState;
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
     * @return \StructType\Survey
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
     * Get m_cType value
     * @return string|null
     */
    public function getM_cType()
    {
        return $this->m_cType;
    }
    /**
     * Set m_cType value
     * @param string $m_cType
     * @return \StructType\Survey
     */
    public function setM_cType($m_cType = null)
    {
        // validation for constraint: string
        if (!is_null($m_cType) && !is_string($m_cType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_cType)), __LINE__);
        }
        $this->m_cType = $m_cType;
        return $this;
    }
    /**
     * Get m_nFrmid value
     * @return int|null
     */
    public function getM_nFrmid()
    {
        return $this->m_nFrmid;
    }
    /**
     * Set m_nFrmid value
     * @param int $m_nFrmid
     * @return \StructType\Survey
     */
    public function setM_nFrmid($m_nFrmid = null)
    {
        // validation for constraint: int
        if (!is_null($m_nFrmid) && !is_numeric($m_nFrmid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nFrmid)), __LINE__);
        }
        $this->m_nFrmid = $m_nFrmid;
        return $this;
    }
    /**
     * Get m_nStuid value
     * @return int|null
     */
    public function getM_nStuid()
    {
        return $this->m_nStuid;
    }
    /**
     * Set m_nStuid value
     * @param int $m_nStuid
     * @return \StructType\Survey
     */
    public function setM_nStuid($m_nStuid = null)
    {
        // validation for constraint: int
        if (!is_null($m_nStuid) && !is_numeric($m_nStuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nStuid)), __LINE__);
        }
        $this->m_nStuid = $m_nStuid;
        return $this;
    }
    /**
     * Get m_nVerid value
     * @return int|null
     */
    public function getM_nVerid()
    {
        return $this->m_nVerid;
    }
    /**
     * Set m_nVerid value
     * @param int $m_nVerid
     * @return \StructType\Survey
     */
    public function setM_nVerid($m_nVerid = null)
    {
        // validation for constraint: int
        if (!is_null($m_nVerid) && !is_numeric($m_nVerid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nVerid)), __LINE__);
        }
        $this->m_nVerid = $m_nVerid;
        return $this;
    }
    /**
     * Get m_nOpenState value
     * @return int|null
     */
    public function getM_nOpenState()
    {
        return $this->m_nOpenState;
    }
    /**
     * Set m_nOpenState value
     * @param int $m_nOpenState
     * @return \StructType\Survey
     */
    public function setM_nOpenState($m_nOpenState = null)
    {
        // validation for constraint: int
        if (!is_null($m_nOpenState) && !is_numeric($m_nOpenState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nOpenState)), __LINE__);
        }
        $this->m_nOpenState = $m_nOpenState;
        return $this;
    }
    /**
     * Get m_nFormCount value
     * @return int|null
     */
    public function getM_nFormCount()
    {
        return $this->m_nFormCount;
    }
    /**
     * Set m_nFormCount value
     * @param int $m_nFormCount
     * @return \StructType\Survey
     */
    public function setM_nFormCount($m_nFormCount = null)
    {
        // validation for constraint: int
        if (!is_null($m_nFormCount) && !is_numeric($m_nFormCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nFormCount)), __LINE__);
        }
        $this->m_nFormCount = $m_nFormCount;
        return $this;
    }
    /**
     * Get m_nPswdCount value
     * @return int|null
     */
    public function getM_nPswdCount()
    {
        return $this->m_nPswdCount;
    }
    /**
     * Set m_nPswdCount value
     * @param int $m_nPswdCount
     * @return \StructType\Survey
     */
    public function setM_nPswdCount($m_nPswdCount = null)
    {
        // validation for constraint: int
        if (!is_null($m_nPswdCount) && !is_numeric($m_nPswdCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nPswdCount)), __LINE__);
        }
        $this->m_nPswdCount = $m_nPswdCount;
        return $this;
    }
    /**
     * Get m_sLastDataCollectionDate value
     * @return string|null
     */
    public function getM_sLastDataCollectionDate()
    {
        return $this->m_sLastDataCollectionDate;
    }
    /**
     * Set m_sLastDataCollectionDate value
     * @param string $m_sLastDataCollectionDate
     * @return \StructType\Survey
     */
    public function setM_sLastDataCollectionDate($m_sLastDataCollectionDate = null)
    {
        // validation for constraint: string
        if (!is_null($m_sLastDataCollectionDate) && !is_string($m_sLastDataCollectionDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sLastDataCollectionDate)), __LINE__);
        }
        $this->m_sLastDataCollectionDate = $m_sLastDataCollectionDate;
        return $this;
    }
    /**
     * Get m_nPageLinkOffset value
     * @return int|null
     */
    public function getM_nPageLinkOffset()
    {
        return $this->m_nPageLinkOffset;
    }
    /**
     * Set m_nPageLinkOffset value
     * @param int $m_nPageLinkOffset
     * @return \StructType\Survey
     */
    public function setM_nPageLinkOffset($m_nPageLinkOffset = null)
    {
        // validation for constraint: int
        if (!is_null($m_nPageLinkOffset) && !is_numeric($m_nPageLinkOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nPageLinkOffset)), __LINE__);
        }
        $this->m_nPageLinkOffset = $m_nPageLinkOffset;
        return $this;
    }
    /**
     * Get m_sMaskTan value
     * @return string|null
     */
    public function getM_sMaskTan()
    {
        return $this->m_sMaskTan;
    }
    /**
     * Set m_sMaskTan value
     * @param string $m_sMaskTan
     * @return \StructType\Survey
     */
    public function setM_sMaskTan($m_sMaskTan = null)
    {
        // validation for constraint: string
        if (!is_null($m_sMaskTan) && !is_string($m_sMaskTan)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sMaskTan)), __LINE__);
        }
        $this->m_sMaskTan = $m_sMaskTan;
        return $this;
    }
    /**
     * Get m_nMaskState value
     * @return int|null
     */
    public function getM_nMaskState()
    {
        return $this->m_nMaskState;
    }
    /**
     * Set m_nMaskState value
     * @param int $m_nMaskState
     * @return \StructType\Survey
     */
    public function setM_nMaskState($m_nMaskState = null)
    {
        // validation for constraint: int
        if (!is_null($m_nMaskState) && !is_numeric($m_nMaskState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nMaskState)), __LINE__);
        }
        $this->m_nMaskState = $m_nMaskState;
        return $this;
    }
    /**
     * Get m_oPeriod value
     * @return \StructType\Period|null
     */
    public function getM_oPeriod()
    {
        return $this->m_oPeriod;
    }
    /**
     * Set m_oPeriod value
     * @param \StructType\Period $m_oPeriod
     * @return \StructType\Survey
     */
    public function setM_oPeriod(\StructType\Period $m_oPeriod = null)
    {
        $this->m_oPeriod = $m_oPeriod;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Survey
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
