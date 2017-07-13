<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WebscanBatch StructType
 * @subpackage Structs
 */
class WebscanBatch extends AbstractStructBase
{
    /**
     * The m_nReaderBatchId
     * @var int
     */
    public $m_nReaderBatchId;
    /**
     * The m_nBatchId
     * @var int
     */
    public $m_nBatchId;
    /**
     * The m_nStatus
     * @var int
     */
    public $m_nStatus;
    /**
     * The m_sText
     * @var string
     */
    public $m_sText;
    /**
     * The m_nProceedActionValue
     * @var int
     */
    public $m_nProceedActionValue;
    /**
     * The m_sProceedAction
     * @var string
     */
    public $m_sProceedAction;
    /**
     * The m_nCancelActionValue
     * @var int
     */
    public $m_nCancelActionValue;
    /**
     * The m_sCancelAction
     * @var string
     */
    public $m_sCancelAction;
    /**
     * Constructor method for WebscanBatch
     * @uses WebscanBatch::setM_nReaderBatchId()
     * @uses WebscanBatch::setM_nBatchId()
     * @uses WebscanBatch::setM_nStatus()
     * @uses WebscanBatch::setM_sText()
     * @uses WebscanBatch::setM_nProceedActionValue()
     * @uses WebscanBatch::setM_sProceedAction()
     * @uses WebscanBatch::setM_nCancelActionValue()
     * @uses WebscanBatch::setM_sCancelAction()
     * @param int $m_nReaderBatchId
     * @param int $m_nBatchId
     * @param int $m_nStatus
     * @param string $m_sText
     * @param int $m_nProceedActionValue
     * @param string $m_sProceedAction
     * @param int $m_nCancelActionValue
     * @param string $m_sCancelAction
     */
    public function __construct($m_nReaderBatchId = null, $m_nBatchId = null, $m_nStatus = null, $m_sText = null, $m_nProceedActionValue = null, $m_sProceedAction = null, $m_nCancelActionValue = null, $m_sCancelAction = null)
    {
        $this
            ->setM_nReaderBatchId($m_nReaderBatchId)
            ->setM_nBatchId($m_nBatchId)
            ->setM_nStatus($m_nStatus)
            ->setM_sText($m_sText)
            ->setM_nProceedActionValue($m_nProceedActionValue)
            ->setM_sProceedAction($m_sProceedAction)
            ->setM_nCancelActionValue($m_nCancelActionValue)
            ->setM_sCancelAction($m_sCancelAction);
    }
    /**
     * Get m_nReaderBatchId value
     * @return int|null
     */
    public function getM_nReaderBatchId()
    {
        return $this->m_nReaderBatchId;
    }
    /**
     * Set m_nReaderBatchId value
     * @param int $m_nReaderBatchId
     * @return \StructType\WebscanBatch
     */
    public function setM_nReaderBatchId($m_nReaderBatchId = null)
    {
        // validation for constraint: int
        if (!is_null($m_nReaderBatchId) && !is_numeric($m_nReaderBatchId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nReaderBatchId)), __LINE__);
        }
        $this->m_nReaderBatchId = $m_nReaderBatchId;
        return $this;
    }
    /**
     * Get m_nBatchId value
     * @return int|null
     */
    public function getM_nBatchId()
    {
        return $this->m_nBatchId;
    }
    /**
     * Set m_nBatchId value
     * @param int $m_nBatchId
     * @return \StructType\WebscanBatch
     */
    public function setM_nBatchId($m_nBatchId = null)
    {
        // validation for constraint: int
        if (!is_null($m_nBatchId) && !is_numeric($m_nBatchId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nBatchId)), __LINE__);
        }
        $this->m_nBatchId = $m_nBatchId;
        return $this;
    }
    /**
     * Get m_nStatus value
     * @return int|null
     */
    public function getM_nStatus()
    {
        return $this->m_nStatus;
    }
    /**
     * Set m_nStatus value
     * @param int $m_nStatus
     * @return \StructType\WebscanBatch
     */
    public function setM_nStatus($m_nStatus = null)
    {
        // validation for constraint: int
        if (!is_null($m_nStatus) && !is_numeric($m_nStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nStatus)), __LINE__);
        }
        $this->m_nStatus = $m_nStatus;
        return $this;
    }
    /**
     * Get m_sText value
     * @return string|null
     */
    public function getM_sText()
    {
        return $this->m_sText;
    }
    /**
     * Set m_sText value
     * @param string $m_sText
     * @return \StructType\WebscanBatch
     */
    public function setM_sText($m_sText = null)
    {
        // validation for constraint: string
        if (!is_null($m_sText) && !is_string($m_sText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sText)), __LINE__);
        }
        $this->m_sText = $m_sText;
        return $this;
    }
    /**
     * Get m_nProceedActionValue value
     * @return int|null
     */
    public function getM_nProceedActionValue()
    {
        return $this->m_nProceedActionValue;
    }
    /**
     * Set m_nProceedActionValue value
     * @param int $m_nProceedActionValue
     * @return \StructType\WebscanBatch
     */
    public function setM_nProceedActionValue($m_nProceedActionValue = null)
    {
        // validation for constraint: int
        if (!is_null($m_nProceedActionValue) && !is_numeric($m_nProceedActionValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nProceedActionValue)), __LINE__);
        }
        $this->m_nProceedActionValue = $m_nProceedActionValue;
        return $this;
    }
    /**
     * Get m_sProceedAction value
     * @return string|null
     */
    public function getM_sProceedAction()
    {
        return $this->m_sProceedAction;
    }
    /**
     * Set m_sProceedAction value
     * @param string $m_sProceedAction
     * @return \StructType\WebscanBatch
     */
    public function setM_sProceedAction($m_sProceedAction = null)
    {
        // validation for constraint: string
        if (!is_null($m_sProceedAction) && !is_string($m_sProceedAction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sProceedAction)), __LINE__);
        }
        $this->m_sProceedAction = $m_sProceedAction;
        return $this;
    }
    /**
     * Get m_nCancelActionValue value
     * @return int|null
     */
    public function getM_nCancelActionValue()
    {
        return $this->m_nCancelActionValue;
    }
    /**
     * Set m_nCancelActionValue value
     * @param int $m_nCancelActionValue
     * @return \StructType\WebscanBatch
     */
    public function setM_nCancelActionValue($m_nCancelActionValue = null)
    {
        // validation for constraint: int
        if (!is_null($m_nCancelActionValue) && !is_numeric($m_nCancelActionValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nCancelActionValue)), __LINE__);
        }
        $this->m_nCancelActionValue = $m_nCancelActionValue;
        return $this;
    }
    /**
     * Get m_sCancelAction value
     * @return string|null
     */
    public function getM_sCancelAction()
    {
        return $this->m_sCancelAction;
    }
    /**
     * Set m_sCancelAction value
     * @param string $m_sCancelAction
     * @return \StructType\WebscanBatch
     */
    public function setM_sCancelAction($m_sCancelAction = null)
    {
        // validation for constraint: string
        if (!is_null($m_sCancelAction) && !is_string($m_sCancelAction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($m_sCancelAction)), __LINE__);
        }
        $this->m_sCancelAction = $m_sCancelAction;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WebscanBatch
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
