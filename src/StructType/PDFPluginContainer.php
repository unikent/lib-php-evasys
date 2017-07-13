<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PDFPluginContainer StructType
 * @subpackage Structs
 */
class PDFPluginContainer extends AbstractStructBase
{
    /**
     * The m_aPluginArray
     * @var \StructType\PDFPluginList
     */
    public $m_aPluginArray;
    /**
     * Constructor method for PDFPluginContainer
     * @uses PDFPluginContainer::setM_aPluginArray()
     * @param \StructType\PDFPluginList $m_aPluginArray
     */
    public function __construct(\StructType\PDFPluginList $m_aPluginArray = null)
    {
        $this
            ->setM_aPluginArray($m_aPluginArray);
    }
    /**
     * Get m_aPluginArray value
     * @return \StructType\PDFPluginList|null
     */
    public function getM_aPluginArray()
    {
        return $this->m_aPluginArray;
    }
    /**
     * Set m_aPluginArray value
     * @param \StructType\PDFPluginList $m_aPluginArray
     * @return \StructType\PDFPluginContainer
     */
    public function setM_aPluginArray(\StructType\PDFPluginList $m_aPluginArray = null)
    {
        $this->m_aPluginArray = $m_aPluginArray;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PDFPluginContainer
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
