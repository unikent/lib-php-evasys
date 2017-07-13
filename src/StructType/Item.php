<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Item StructType
 * @subpackage Structs
 */
class Item extends AbstractStructBase
{
    /**
     * The ItemId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $ItemId;
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
     * The ItemCode
     * @var string
     */
    public $ItemCode;
    /**
     * The AnswerCount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $AnswerCount;
    /**
     * The Type
     * @var string
     */
    public $Type;
    /**
     * The Options
     * @var \StructType\StringList
     */
    public $Options;
    /**
     * The GraphType
     * @var string
     */
    public $GraphType;
    /**
     * The Abstention
     * @var string
     */
    public $Abstention;
    /**
     * The Orientation
     * @var string
     */
    public $Orientation;
    /**
     * The RowCount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $RowCount;
    /**
     * The IsMirrored
     * @var bool
     */
    public $IsMirrored;
    /**
     * The UseIcr
     * @var string
     */
    public $UseIcr;
    /**
     * The ShowDropdown
     * @var bool
     */
    public $ShowDropdown;
    /**
     * The MaximalAnswers
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $MaximalAnswers;
    /**
     * The Alignment
     * @var string
     */
    public $Alignment;
    /**
     * The Degree
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $Degree;
    /**
     * Constructor method for Item
     * @uses Item::setItemId()
     * @uses Item::setPosition()
     * @uses Item::setTitle()
     * @uses Item::setItemCode()
     * @uses Item::setAnswerCount()
     * @uses Item::setType()
     * @uses Item::setOptions()
     * @uses Item::setGraphType()
     * @uses Item::setAbstention()
     * @uses Item::setOrientation()
     * @uses Item::setRowCount()
     * @uses Item::setIsMirrored()
     * @uses Item::setUseIcr()
     * @uses Item::setShowDropdown()
     * @uses Item::setMaximalAnswers()
     * @uses Item::setAlignment()
     * @uses Item::setDegree()
     * @param int $itemId
     * @param int $position
     * @param string $title
     * @param string $itemCode
     * @param int $answerCount
     * @param string $type
     * @param \StructType\StringList $options
     * @param string $graphType
     * @param string $abstention
     * @param string $orientation
     * @param int $rowCount
     * @param bool $isMirrored
     * @param string $useIcr
     * @param bool $showDropdown
     * @param int $maximalAnswers
     * @param string $alignment
     * @param int $degree
     */
    public function __construct($itemId = null, $position = null, $title = null, $itemCode = null, $answerCount = null, $type = null, \StructType\StringList $options = null, $graphType = null, $abstention = null, $orientation = null, $rowCount = null, $isMirrored = null, $useIcr = null, $showDropdown = null, $maximalAnswers = null, $alignment = null, $degree = null)
    {
        $this
            ->setItemId($itemId)
            ->setPosition($position)
            ->setTitle($title)
            ->setItemCode($itemCode)
            ->setAnswerCount($answerCount)
            ->setType($type)
            ->setOptions($options)
            ->setGraphType($graphType)
            ->setAbstention($abstention)
            ->setOrientation($orientation)
            ->setRowCount($rowCount)
            ->setIsMirrored($isMirrored)
            ->setUseIcr($useIcr)
            ->setShowDropdown($showDropdown)
            ->setMaximalAnswers($maximalAnswers)
            ->setAlignment($alignment)
            ->setDegree($degree);
    }
    /**
     * Get ItemId value
     * @return int|null
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param int $itemId
     * @return \StructType\Item
     */
    public function setItemId($itemId = null)
    {
        // validation for constraint: int
        if (!is_null($itemId) && !is_numeric($itemId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($itemId)), __LINE__);
        }
        $this->ItemId = $itemId;
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
     * @return \StructType\Item
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
     * @return \StructType\Item
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
     * Get ItemCode value
     * @return string|null
     */
    public function getItemCode()
    {
        return $this->ItemCode;
    }
    /**
     * Set ItemCode value
     * @param string $itemCode
     * @return \StructType\Item
     */
    public function setItemCode($itemCode = null)
    {
        // validation for constraint: string
        if (!is_null($itemCode) && !is_string($itemCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemCode)), __LINE__);
        }
        $this->ItemCode = $itemCode;
        return $this;
    }
    /**
     * Get AnswerCount value
     * @return int|null
     */
    public function getAnswerCount()
    {
        return $this->AnswerCount;
    }
    /**
     * Set AnswerCount value
     * @param int $answerCount
     * @return \StructType\Item
     */
    public function setAnswerCount($answerCount = null)
    {
        // validation for constraint: int
        if (!is_null($answerCount) && !is_numeric($answerCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($answerCount)), __LINE__);
        }
        $this->AnswerCount = $answerCount;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \EnumType\QuestionTypes::valueIsValid()
     * @uses \EnumType\QuestionTypes::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \StructType\Item
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\QuestionTypes::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \EnumType\QuestionTypes::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Options value
     * @return \StructType\StringList|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \StructType\StringList $options
     * @return \StructType\Item
     */
    public function setOptions(\StructType\StringList $options = null)
    {
        $this->Options = $options;
        return $this;
    }
    /**
     * Get GraphType value
     * @return string|null
     */
    public function getGraphType()
    {
        return $this->GraphType;
    }
    /**
     * Set GraphType value
     * @param string $graphType
     * @return \StructType\Item
     */
    public function setGraphType($graphType = null)
    {
        // validation for constraint: string
        if (!is_null($graphType) && !is_string($graphType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($graphType)), __LINE__);
        }
        $this->GraphType = $graphType;
        return $this;
    }
    /**
     * Get Abstention value
     * @return string|null
     */
    public function getAbstention()
    {
        return $this->Abstention;
    }
    /**
     * Set Abstention value
     * @param string $abstention
     * @return \StructType\Item
     */
    public function setAbstention($abstention = null)
    {
        // validation for constraint: string
        if (!is_null($abstention) && !is_string($abstention)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($abstention)), __LINE__);
        }
        $this->Abstention = $abstention;
        return $this;
    }
    /**
     * Get Orientation value
     * @return string|null
     */
    public function getOrientation()
    {
        return $this->Orientation;
    }
    /**
     * Set Orientation value
     * @param string $orientation
     * @return \StructType\Item
     */
    public function setOrientation($orientation = null)
    {
        // validation for constraint: string
        if (!is_null($orientation) && !is_string($orientation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orientation)), __LINE__);
        }
        $this->Orientation = $orientation;
        return $this;
    }
    /**
     * Get RowCount value
     * @return int|null
     */
    public function getRowCount()
    {
        return $this->RowCount;
    }
    /**
     * Set RowCount value
     * @param int $rowCount
     * @return \StructType\Item
     */
    public function setRowCount($rowCount = null)
    {
        // validation for constraint: int
        if (!is_null($rowCount) && !is_numeric($rowCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($rowCount)), __LINE__);
        }
        $this->RowCount = $rowCount;
        return $this;
    }
    /**
     * Get IsMirrored value
     * @return bool|null
     */
    public function getIsMirrored()
    {
        return $this->IsMirrored;
    }
    /**
     * Set IsMirrored value
     * @param bool $isMirrored
     * @return \StructType\Item
     */
    public function setIsMirrored($isMirrored = null)
    {
        // validation for constraint: boolean
        if (!is_null($isMirrored) && !is_bool($isMirrored)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isMirrored)), __LINE__);
        }
        $this->IsMirrored = $isMirrored;
        return $this;
    }
    /**
     * Get UseIcr value
     * @return string|null
     */
    public function getUseIcr()
    {
        return $this->UseIcr;
    }
    /**
     * Set UseIcr value
     * @param string $useIcr
     * @return \StructType\Item
     */
    public function setUseIcr($useIcr = null)
    {
        // validation for constraint: string
        if (!is_null($useIcr) && !is_string($useIcr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($useIcr)), __LINE__);
        }
        $this->UseIcr = $useIcr;
        return $this;
    }
    /**
     * Get ShowDropdown value
     * @return bool|null
     */
    public function getShowDropdown()
    {
        return $this->ShowDropdown;
    }
    /**
     * Set ShowDropdown value
     * @param bool $showDropdown
     * @return \StructType\Item
     */
    public function setShowDropdown($showDropdown = null)
    {
        // validation for constraint: boolean
        if (!is_null($showDropdown) && !is_bool($showDropdown)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($showDropdown)), __LINE__);
        }
        $this->ShowDropdown = $showDropdown;
        return $this;
    }
    /**
     * Get MaximalAnswers value
     * @return int|null
     */
    public function getMaximalAnswers()
    {
        return $this->MaximalAnswers;
    }
    /**
     * Set MaximalAnswers value
     * @param int $maximalAnswers
     * @return \StructType\Item
     */
    public function setMaximalAnswers($maximalAnswers = null)
    {
        // validation for constraint: int
        if (!is_null($maximalAnswers) && !is_numeric($maximalAnswers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximalAnswers)), __LINE__);
        }
        $this->MaximalAnswers = $maximalAnswers;
        return $this;
    }
    /**
     * Get Alignment value
     * @return string|null
     */
    public function getAlignment()
    {
        return $this->Alignment;
    }
    /**
     * Set Alignment value
     * @uses \EnumType\Alignment::valueIsValid()
     * @uses \EnumType\Alignment::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $alignment
     * @return \StructType\Item
     */
    public function setAlignment($alignment = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\Alignment::valueIsValid($alignment)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $alignment, implode(', ', \EnumType\Alignment::getValidValues())), __LINE__);
        }
        $this->Alignment = $alignment;
        return $this;
    }
    /**
     * Get Degree value
     * @return int|null
     */
    public function getDegree()
    {
        return $this->Degree;
    }
    /**
     * Set Degree value
     * @param int $degree
     * @return \StructType\Item
     */
    public function setDegree($degree = null)
    {
        // validation for constraint: int
        if (!is_null($degree) && !is_numeric($degree)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($degree)), __LINE__);
        }
        $this->Degree = $degree;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Item
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
