<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PDFPlugin StructType
 * @subpackage Structs
 */
class PDFPlugin extends AbstractStructBase
{
    /**
     * The m_nPluginId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $m_nPluginId;
    /**
     * The m_sTitle
     * @var string
     */
    public $m_sTitle;
    /**
     * Constructor method for PDFPlugin
     * @uses PDFPlugin::setM_nPluginId()
     * @uses PDFPlugin::setM_sTitle()
     * @param int $m_nPluginId
     * @param string $m_sTitle
     */
    public function __construct($m_nPluginId = null, $m_sTitle = null)
    {
        $this
            ->setM_nPluginId($m_nPluginId)
            ->setM_sTitle($m_sTitle);
    }
    /**
     * Get m_nPluginId value
     * @return int|null
     */
    public function getM_nPluginId()
    {
        return $this->m_nPluginId;
    }
    /**
     * Set m_nPluginId value
     * @param int $m_nPluginId
     * @return \StructType\PDFPlugin
     */
    public function setM_nPluginId($m_nPluginId = null)
    {
        // validation for constraint: int
        if (!is_null($m_nPluginId) && !is_numeric($m_nPluginId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($m_nPluginId)), __LINE__);
        }
        $this->m_nPluginId = $m_nPluginId;
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
     * @return \StructType\PDFPlugin
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PDFPlugin
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
