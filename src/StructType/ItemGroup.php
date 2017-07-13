<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemGroup StructType
 * @subpackage Structs
 */
class ItemGroup extends AbstractStructBase
{
    /**
     * The ItemGroupId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $ItemGroupId;
    /**
     * The Position
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $Position;
    /**
     * The Title
     * @var string
     */
    public $Title;
    /**
     * The Description
     * @var string
     */
    public $Description;
    /**
     * The IndicatorDimension
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $IndicatorDimension;
    /**
     * The IsText
     * @var bool
     */
    public $IsText;
    /**
     * The FontSize
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $FontSize;
    /**
     * The ItemList
     * @var \StructType\ItemList
     */
    public $ItemList;
    /**
     * Constructor method for ItemGroup
     * @uses ItemGroup::setItemGroupId()
     * @uses ItemGroup::setPosition()
     * @uses ItemGroup::setTitle()
     * @uses ItemGroup::setDescription()
     * @uses ItemGroup::setIndicatorDimension()
     * @uses ItemGroup::setIsText()
     * @uses ItemGroup::setFontSize()
     * @uses ItemGroup::setItemList()
     * @param int $itemGroupId
     * @param int $position
     * @param string $title
     * @param string $description
     * @param int $indicatorDimension
     * @param bool $isText
     * @param int $fontSize
     * @param \StructType\ItemList $itemList
     */
    public function __construct($itemGroupId = null, $position = null, $title = null, $description = null, $indicatorDimension = null, $isText = null, $fontSize = null, \StructType\ItemList $itemList = null)
    {
        $this
            ->setItemGroupId($itemGroupId)
            ->setPosition($position)
            ->setTitle($title)
            ->setDescription($description)
            ->setIndicatorDimension($indicatorDimension)
            ->setIsText($isText)
            ->setFontSize($fontSize)
            ->setItemList($itemList);
    }
    /**
     * Get ItemGroupId value
     * @return int|null
     */
    public function getItemGroupId()
    {
        return $this->ItemGroupId;
    }
    /**
     * Set ItemGroupId value
     * @param int $itemGroupId
     * @return \StructType\ItemGroup
     */
    public function setItemGroupId($itemGroupId = null)
    {
        // validation for constraint: int
        if (!is_null($itemGroupId) && !is_numeric($itemGroupId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($itemGroupId)), __LINE__);
        }
        $this->ItemGroupId = $itemGroupId;
        return $this;
    }
    /**
     * Get Position value
     * @return int|null
     */
    public function getPosition()
    {
        return $this->Position;
    }
    /**
     * Set Position value
     * @param int $position
     * @return \StructType\ItemGroup
     */
    public function setPosition($position = null)
    {
        // validation for constraint: int
        if (!is_null($position) && !is_numeric($position)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($position)), __LINE__);
        }
        $this->Position = $position;
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \StructType\ItemGroup
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\ItemGroup
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get IndicatorDimension value
     * @return int|null
     */
    public function getIndicatorDimension()
    {
        return $this->IndicatorDimension;
    }
    /**
     * Set IndicatorDimension value
     * @param int $indicatorDimension
     * @return \StructType\ItemGroup
     */
    public function setIndicatorDimension($indicatorDimension = null)
    {
        // validation for constraint: int
        if (!is_null($indicatorDimension) && !is_numeric($indicatorDimension)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($indicatorDimension)), __LINE__);
        }
        $this->IndicatorDimension = $indicatorDimension;
        return $this;
    }
    /**
     * Get IsText value
     * @return bool|null
     */
    public function getIsText()
    {
        return $this->IsText;
    }
    /**
     * Set IsText value
     * @param bool $isText
     * @return \StructType\ItemGroup
     */
    public function setIsText($isText = null)
    {
        // validation for constraint: boolean
        if (!is_null($isText) && !is_bool($isText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isText)), __LINE__);
        }
        $this->IsText = $isText;
        return $this;
    }
    /**
     * Get FontSize value
     * @return int|null
     */
    public function getFontSize()
    {
        return $this->FontSize;
    }
    /**
     * Set FontSize value
     * @param int $fontSize
     * @return \StructType\ItemGroup
     */
    public function setFontSize($fontSize = null)
    {
        // validation for constraint: int
        if (!is_null($fontSize) && !is_numeric($fontSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($fontSize)), __LINE__);
        }
        $this->FontSize = $fontSize;
        return $this;
    }
    /**
     * Get ItemList value
     * @return \StructType\ItemList|null
     */
    public function getItemList()
    {
        return $this->ItemList;
    }
    /**
     * Set ItemList value
     * @param \StructType\ItemList $itemList
     * @return \StructType\ItemGroup
     */
    public function setItemList(\StructType\ItemList $itemList = null)
    {
        $this->ItemList = $itemList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ItemGroup
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
