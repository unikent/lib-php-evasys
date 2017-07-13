<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OnlineSurveyKeyList StructType
 * @subpackage Structs
 */
class OnlineSurveyKeyList extends AbstractStructBase
{
    /**
     * The OnlineSurveyKeys
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\OnlineSurveyKey[]
     */
    public $OnlineSurveyKeys;
    /**
     * Constructor method for OnlineSurveyKeyList
     * @uses OnlineSurveyKeyList::setOnlineSurveyKeys()
     * @param \StructType\OnlineSurveyKey[] $onlineSurveyKeys
     */
    public function __construct(array $onlineSurveyKeys = array())
    {
        $this
            ->setOnlineSurveyKeys($onlineSurveyKeys);
    }
    /**
     * Get OnlineSurveyKeys value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\OnlineSurveyKey[]|null
     */
    public function getOnlineSurveyKeys()
    {
        return isset($this->OnlineSurveyKeys) ? $this->OnlineSurveyKeys : null;
    }
    /**
     * Set OnlineSurveyKeys value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\OnlineSurveyKey[] $onlineSurveyKeys
     * @return \StructType\OnlineSurveyKeyList
     */
    public function setOnlineSurveyKeys(array $onlineSurveyKeys = array())
    {
        foreach ($onlineSurveyKeys as $onlineSurveyKeyListOnlineSurveyKeysItem) {
            // validation for constraint: itemType
            if (!$onlineSurveyKeyListOnlineSurveyKeysItem instanceof \StructType\OnlineSurveyKey) {
                throw new \InvalidArgumentException(sprintf('The OnlineSurveyKeys property can only contain items of \StructType\OnlineSurveyKey, "%s" given', is_object($onlineSurveyKeyListOnlineSurveyKeysItem) ? get_class($onlineSurveyKeyListOnlineSurveyKeysItem) : gettype($onlineSurveyKeyListOnlineSurveyKeysItem)), __LINE__);
            }
        }
        if (is_null($onlineSurveyKeys) || (is_array($onlineSurveyKeys) && empty($onlineSurveyKeys))) {
            unset($this->OnlineSurveyKeys);
        } else {
            $this->OnlineSurveyKeys = $onlineSurveyKeys;
        }
        return $this;
    }
    /**
     * Add item to OnlineSurveyKeys value
     * @throws \InvalidArgumentException
     * @param \StructType\OnlineSurveyKey $item
     * @return \StructType\OnlineSurveyKeyList
     */
    public function addToOnlineSurveyKeys(\StructType\OnlineSurveyKey $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\OnlineSurveyKey) {
            throw new \InvalidArgumentException(sprintf('The OnlineSurveyKeys property can only contain items of \StructType\OnlineSurveyKey, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OnlineSurveyKeys[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\OnlineSurveyKeyList
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
