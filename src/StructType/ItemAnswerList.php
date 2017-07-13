<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemAnswerList StructType
 * @subpackage Structs
 */
class ItemAnswerList extends AbstractStructBase
{
    /**
     * The ItemAnswers
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ItemAnswer[]
     */
    public $ItemAnswers;
    /**
     * Constructor method for ItemAnswerList
     * @uses ItemAnswerList::setItemAnswers()
     * @param \StructType\ItemAnswer[] $itemAnswers
     */
    public function __construct(array $itemAnswers = array())
    {
        $this
            ->setItemAnswers($itemAnswers);
    }
    /**
     * Get ItemAnswers value
     * @return \StructType\ItemAnswer[]|null
     */
    public function getItemAnswers()
    {
        return $this->ItemAnswers;
    }
    /**
     * Set ItemAnswers value
     * @throws \InvalidArgumentException
     * @param \StructType\ItemAnswer[] $itemAnswers
     * @return \StructType\ItemAnswerList
     */
    public function setItemAnswers(array $itemAnswers = array())
    {
        foreach ($itemAnswers as $itemAnswerListItemAnswersItem) {
            // validation for constraint: itemType
            if (!$itemAnswerListItemAnswersItem instanceof \StructType\ItemAnswer) {
                throw new \InvalidArgumentException(sprintf('The ItemAnswers property can only contain items of \StructType\ItemAnswer, "%s" given', is_object($itemAnswerListItemAnswersItem) ? get_class($itemAnswerListItemAnswersItem) : gettype($itemAnswerListItemAnswersItem)), __LINE__);
            }
        }
        $this->ItemAnswers = $itemAnswers;
        return $this;
    }
    /**
     * Add item to ItemAnswers value
     * @throws \InvalidArgumentException
     * @param \StructType\ItemAnswer $item
     * @return \StructType\ItemAnswerList
     */
    public function addToItemAnswers(\StructType\ItemAnswer $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ItemAnswer) {
            throw new \InvalidArgumentException(sprintf('The ItemAnswers property can only contain items of \StructType\ItemAnswer, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ItemAnswers[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ItemAnswerList
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
