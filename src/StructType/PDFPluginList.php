<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PDFPluginList StructType
 * @subpackage Structs
 */
class PDFPluginList extends AbstractStructBase
{
    /**
     * The PDFPlugins
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\PDFPlugin[]
     */
    public $PDFPlugins;
    /**
     * Constructor method for PDFPluginList
     * @uses PDFPluginList::setPDFPlugins()
     * @param \StructType\PDFPlugin[] $pDFPlugins
     */
    public function __construct(array $pDFPlugins = array())
    {
        $this
            ->setPDFPlugins($pDFPlugins);
    }
    /**
     * Get PDFPlugins value
     * @return \StructType\PDFPlugin[]
     */
    public function getPDFPlugins()
    {
        return $this->PDFPlugins;
    }
    /**
     * Set PDFPlugins value
     * @throws \InvalidArgumentException
     * @param \StructType\PDFPlugin[] $pDFPlugins
     * @return \StructType\PDFPluginList
     */
    public function setPDFPlugins(array $pDFPlugins = array())
    {
        foreach ($pDFPlugins as $pDFPluginListPDFPluginsItem) {
            // validation for constraint: itemType
            if (!$pDFPluginListPDFPluginsItem instanceof \StructType\PDFPlugin) {
                throw new \InvalidArgumentException(sprintf('The PDFPlugins property can only contain items of \StructType\PDFPlugin, "%s" given', is_object($pDFPluginListPDFPluginsItem) ? get_class($pDFPluginListPDFPluginsItem) : gettype($pDFPluginListPDFPluginsItem)), __LINE__);
            }
        }
        $this->PDFPlugins = $pDFPlugins;
        return $this;
    }
    /**
     * Add item to PDFPlugins value
     * @throws \InvalidArgumentException
     * @param \StructType\PDFPlugin $item
     * @return \StructType\PDFPluginList
     */
    public function addToPDFPlugins(\StructType\PDFPlugin $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PDFPlugin) {
            throw new \InvalidArgumentException(sprintf('The PDFPlugins property can only contain items of \StructType\PDFPlugin, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PDFPlugins[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PDFPluginList
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
