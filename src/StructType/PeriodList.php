<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PeriodList StructType
 * @subpackage Structs
 */
class PeriodList extends AbstractStructBase
{
    /**
     * The Periods
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Period[]
     */
    public $Periods;
    /**
     * Constructor method for PeriodList
     * @uses PeriodList::setPeriods()
     * @param \StructType\Period[] $periods
     */
    public function __construct(array $periods = array())
    {
        $this
            ->setPeriods($periods);
    }
    /**
     * Get Periods value
     * @return \StructType\Period[]|null
     */
    public function getPeriods()
    {
        return $this->Periods;
    }
    /**
     * Set Periods value
     * @throws \InvalidArgumentException
     * @param \StructType\Period[] $periods
     * @return \StructType\PeriodList
     */
    public function setPeriods(array $periods = array())
    {
        foreach ($periods as $periodListPeriodsItem) {
            // validation for constraint: itemType
            if (!$periodListPeriodsItem instanceof \StructType\Period) {
                throw new \InvalidArgumentException(sprintf('The Periods property can only contain items of \StructType\Period, "%s" given', is_object($periodListPeriodsItem) ? get_class($periodListPeriodsItem) : gettype($periodListPeriodsItem)), __LINE__);
            }
        }
        $this->Periods = $periods;
        return $this;
    }
    /**
     * Add item to Periods value
     * @throws \InvalidArgumentException
     * @param \StructType\Period $item
     * @return \StructType\PeriodList
     */
    public function addToPeriods(\StructType\Period $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Period) {
            throw new \InvalidArgumentException(sprintf('The Periods property can only contain items of \StructType\Period, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Periods[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PeriodList
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
