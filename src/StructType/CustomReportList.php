<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomReportList StructType
 * @subpackage Structs
 */
class CustomReportList extends AbstractStructBase
{
    /**
     * The CustomReports
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\CustomReport[]
     */
    public $CustomReports;
    /**
     * Constructor method for CustomReportList
     * @uses CustomReportList::setCustomReports()
     * @param \StructType\CustomReport[] $customReports
     */
    public function __construct(array $customReports = array())
    {
        $this
            ->setCustomReports($customReports);
    }
    /**
     * Get CustomReports value
     * @return \StructType\CustomReport[]|null
     */
    public function getCustomReports()
    {
        return $this->CustomReports;
    }
    /**
     * Set CustomReports value
     * @throws \InvalidArgumentException
     * @param \StructType\CustomReport[] $customReports
     * @return \StructType\CustomReportList
     */
    public function setCustomReports(array $customReports = array())
    {
        foreach ($customReports as $customReportListCustomReportsItem) {
            // validation for constraint: itemType
            if (!$customReportListCustomReportsItem instanceof \StructType\CustomReport) {
                throw new \InvalidArgumentException(sprintf('The CustomReports property can only contain items of \StructType\CustomReport, "%s" given', is_object($customReportListCustomReportsItem) ? get_class($customReportListCustomReportsItem) : gettype($customReportListCustomReportsItem)), __LINE__);
            }
        }
        $this->CustomReports = $customReports;
        return $this;
    }
    /**
     * Add item to CustomReports value
     * @throws \InvalidArgumentException
     * @param \StructType\CustomReport $item
     * @return \StructType\CustomReportList
     */
    public function addToCustomReports(\StructType\CustomReport $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CustomReport) {
            throw new \InvalidArgumentException(sprintf('The CustomReports property can only contain items of \StructType\CustomReport, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustomReports[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CustomReportList
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
