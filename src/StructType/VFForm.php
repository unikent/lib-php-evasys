<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VFForm StructType
 * @subpackage Structs
 */
class VFForm extends AbstractStructBase
{
    /**
     * The FormId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $FormId;
    /**
     * The FormName
     * @var string
     */
    public $FormName;
    /**
     * The FormTitle
     * @var string
     */
    public $FormTitle;
    /**
     * The OwnerId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $OwnerId;
    /**
     * The PaperFormat
     * @var string
     */
    public $PaperFormat;
    /**
     * The ShowNumeration
     * @var bool
     */
    public $ShowNumeration;
    /**
     * The AnswerBoxSize
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $AnswerBoxSize;
    /**
     * The MaxPages
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $MaxPages;
    /**
     * The MaxQuestions
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $MaxQuestions;
    /**
     * The FontFamily
     * @var string
     */
    public $FontFamily;
    /**
     * The FontSize
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $FontSize;
    /**
     * The RowHeight
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $RowHeight;
    /**
     * The CreateDate
     * @var string
     */
    public $CreateDate;
    /**
     * The IsActivated
     * @var bool
     */
    public $IsActivated;
    /**
     * The ResultAccess
     * @var bool
     */
    public $ResultAccess;
    /**
     * The HeadLineUpperLeft
     * @var string
     */
    public $HeadLineUpperLeft;
    /**
     * The HeadLineLowerLeft
     * @var string
     */
    public $HeadLineLowerLeft;
    /**
     * The HeadLineUpperRight
     * @var string
     */
    public $HeadLineUpperRight;
    /**
     * The HeadLineLowerRight
     * @var string
     */
    public $HeadLineLowerRight;
    /**
     * The HeadLineMark
     * @var string
     */
    public $HeadLineMark;
    /**
     * The HeadLineCorrection
     * @var string
     */
    public $HeadLineCorrection;
    /**
     * The ItemGroupList
     * @var \StructType\ItemGroupList
     */
    public $ItemGroupList;
    /**
     * The HeaderLineCount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $HeaderLineCount;
    /**
     * The AdditionalHeaderLineList
     * @var \StructType\AdditionalHeaderLineList
     */
    public $AdditionalHeaderLineList;
    /**
     * Constructor method for VFForm
     * @uses VFForm::setFormId()
     * @uses VFForm::setFormName()
     * @uses VFForm::setFormTitle()
     * @uses VFForm::setOwnerId()
     * @uses VFForm::setPaperFormat()
     * @uses VFForm::setShowNumeration()
     * @uses VFForm::setAnswerBoxSize()
     * @uses VFForm::setMaxPages()
     * @uses VFForm::setMaxQuestions()
     * @uses VFForm::setFontFamily()
     * @uses VFForm::setFontSize()
     * @uses VFForm::setRowHeight()
     * @uses VFForm::setCreateDate()
     * @uses VFForm::setIsActivated()
     * @uses VFForm::setResultAccess()
     * @uses VFForm::setHeadLineUpperLeft()
     * @uses VFForm::setHeadLineLowerLeft()
     * @uses VFForm::setHeadLineUpperRight()
     * @uses VFForm::setHeadLineLowerRight()
     * @uses VFForm::setHeadLineMark()
     * @uses VFForm::setHeadLineCorrection()
     * @uses VFForm::setItemGroupList()
     * @uses VFForm::setHeaderLineCount()
     * @uses VFForm::setAdditionalHeaderLineList()
     * @param int $formId
     * @param string $formName
     * @param string $formTitle
     * @param int $ownerId
     * @param string $paperFormat
     * @param bool $showNumeration
     * @param int $answerBoxSize
     * @param int $maxPages
     * @param int $maxQuestions
     * @param string $fontFamily
     * @param int $fontSize
     * @param int $rowHeight
     * @param string $createDate
     * @param bool $isActivated
     * @param bool $resultAccess
     * @param string $headLineUpperLeft
     * @param string $headLineLowerLeft
     * @param string $headLineUpperRight
     * @param string $headLineLowerRight
     * @param string $headLineMark
     * @param string $headLineCorrection
     * @param \StructType\ItemGroupList $itemGroupList
     * @param int $headerLineCount
     * @param \StructType\AdditionalHeaderLineList $additionalHeaderLineList
     */
    public function __construct($formId = null, $formName = null, $formTitle = null, $ownerId = null, $paperFormat = null, $showNumeration = null, $answerBoxSize = null, $maxPages = null, $maxQuestions = null, $fontFamily = null, $fontSize = null, $rowHeight = null, $createDate = null, $isActivated = null, $resultAccess = null, $headLineUpperLeft = null, $headLineLowerLeft = null, $headLineUpperRight = null, $headLineLowerRight = null, $headLineMark = null, $headLineCorrection = null, \StructType\ItemGroupList $itemGroupList = null, $headerLineCount = null, \StructType\AdditionalHeaderLineList $additionalHeaderLineList = null)
    {
        $this
            ->setFormId($formId)
            ->setFormName($formName)
            ->setFormTitle($formTitle)
            ->setOwnerId($ownerId)
            ->setPaperFormat($paperFormat)
            ->setShowNumeration($showNumeration)
            ->setAnswerBoxSize($answerBoxSize)
            ->setMaxPages($maxPages)
            ->setMaxQuestions($maxQuestions)
            ->setFontFamily($fontFamily)
            ->setFontSize($fontSize)
            ->setRowHeight($rowHeight)
            ->setCreateDate($createDate)
            ->setIsActivated($isActivated)
            ->setResultAccess($resultAccess)
            ->setHeadLineUpperLeft($headLineUpperLeft)
            ->setHeadLineLowerLeft($headLineLowerLeft)
            ->setHeadLineUpperRight($headLineUpperRight)
            ->setHeadLineLowerRight($headLineLowerRight)
            ->setHeadLineMark($headLineMark)
            ->setHeadLineCorrection($headLineCorrection)
            ->setItemGroupList($itemGroupList)
            ->setHeaderLineCount($headerLineCount)
            ->setAdditionalHeaderLineList($additionalHeaderLineList);
    }
    /**
     * Get FormId value
     * @return int|null
     */
    public function getFormId()
    {
        return $this->FormId;
    }
    /**
     * Set FormId value
     * @param int $formId
     * @return \StructType\VFForm
     */
    public function setFormId($formId = null)
    {
        // validation for constraint: int
        if (!is_null($formId) && !is_numeric($formId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($formId)), __LINE__);
        }
        $this->FormId = $formId;
        return $this;
    }
    /**
     * Get FormName value
     * @return string|null
     */
    public function getFormName()
    {
        return $this->FormName;
    }
    /**
     * Set FormName value
     * @param string $formName
     * @return \StructType\VFForm
     */
    public function setFormName($formName = null)
    {
        // validation for constraint: string
        if (!is_null($formName) && !is_string($formName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($formName)), __LINE__);
        }
        $this->FormName = $formName;
        return $this;
    }
    /**
     * Get FormTitle value
     * @return string|null
     */
    public function getFormTitle()
    {
        return $this->FormTitle;
    }
    /**
     * Set FormTitle value
     * @param string $formTitle
     * @return \StructType\VFForm
     */
    public function setFormTitle($formTitle = null)
    {
        // validation for constraint: string
        if (!is_null($formTitle) && !is_string($formTitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($formTitle)), __LINE__);
        }
        $this->FormTitle = $formTitle;
        return $this;
    }
    /**
     * Get OwnerId value
     * @return int|null
     */
    public function getOwnerId()
    {
        return $this->OwnerId;
    }
    /**
     * Set OwnerId value
     * @param int $ownerId
     * @return \StructType\VFForm
     */
    public function setOwnerId($ownerId = null)
    {
        // validation for constraint: int
        if (!is_null($ownerId) && !is_numeric($ownerId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ownerId)), __LINE__);
        }
        $this->OwnerId = $ownerId;
        return $this;
    }
    /**
     * Get PaperFormat value
     * @return string|null
     */
    public function getPaperFormat()
    {
        return $this->PaperFormat;
    }
    /**
     * Set PaperFormat value
     * @param string $paperFormat
     * @return \StructType\VFForm
     */
    public function setPaperFormat($paperFormat = null)
    {
        // validation for constraint: string
        if (!is_null($paperFormat) && !is_string($paperFormat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paperFormat)), __LINE__);
        }
        $this->PaperFormat = $paperFormat;
        return $this;
    }
    /**
     * Get ShowNumeration value
     * @return bool|null
     */
    public function getShowNumeration()
    {
        return $this->ShowNumeration;
    }
    /**
     * Set ShowNumeration value
     * @param bool $showNumeration
     * @return \StructType\VFForm
     */
    public function setShowNumeration($showNumeration = null)
    {
        // validation for constraint: boolean
        if (!is_null($showNumeration) && !is_bool($showNumeration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($showNumeration)), __LINE__);
        }
        $this->ShowNumeration = $showNumeration;
        return $this;
    }
    /**
     * Get AnswerBoxSize value
     * @return int|null
     */
    public function getAnswerBoxSize()
    {
        return $this->AnswerBoxSize;
    }
    /**
     * Set AnswerBoxSize value
     * @param int $answerBoxSize
     * @return \StructType\VFForm
     */
    public function setAnswerBoxSize($answerBoxSize = null)
    {
        // validation for constraint: int
        if (!is_null($answerBoxSize) && !is_numeric($answerBoxSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($answerBoxSize)), __LINE__);
        }
        $this->AnswerBoxSize = $answerBoxSize;
        return $this;
    }
    /**
     * Get MaxPages value
     * @return int|null
     */
    public function getMaxPages()
    {
        return $this->MaxPages;
    }
    /**
     * Set MaxPages value
     * @param int $maxPages
     * @return \StructType\VFForm
     */
    public function setMaxPages($maxPages = null)
    {
        // validation for constraint: int
        if (!is_null($maxPages) && !is_numeric($maxPages)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxPages)), __LINE__);
        }
        $this->MaxPages = $maxPages;
        return $this;
    }
    /**
     * Get MaxQuestions value
     * @return int|null
     */
    public function getMaxQuestions()
    {
        return $this->MaxQuestions;
    }
    /**
     * Set MaxQuestions value
     * @param int $maxQuestions
     * @return \StructType\VFForm
     */
    public function setMaxQuestions($maxQuestions = null)
    {
        // validation for constraint: int
        if (!is_null($maxQuestions) && !is_numeric($maxQuestions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxQuestions)), __LINE__);
        }
        $this->MaxQuestions = $maxQuestions;
        return $this;
    }
    /**
     * Get FontFamily value
     * @return string|null
     */
    public function getFontFamily()
    {
        return $this->FontFamily;
    }
    /**
     * Set FontFamily value
     * @param string $fontFamily
     * @return \StructType\VFForm
     */
    public function setFontFamily($fontFamily = null)
    {
        // validation for constraint: string
        if (!is_null($fontFamily) && !is_string($fontFamily)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fontFamily)), __LINE__);
        }
        $this->FontFamily = $fontFamily;
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
     * @return \StructType\VFForm
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
     * Get RowHeight value
     * @return int|null
     */
    public function getRowHeight()
    {
        return $this->RowHeight;
    }
    /**
     * Set RowHeight value
     * @param int $rowHeight
     * @return \StructType\VFForm
     */
    public function setRowHeight($rowHeight = null)
    {
        // validation for constraint: int
        if (!is_null($rowHeight) && !is_numeric($rowHeight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($rowHeight)), __LINE__);
        }
        $this->RowHeight = $rowHeight;
        return $this;
    }
    /**
     * Get CreateDate value
     * @return string|null
     */
    public function getCreateDate()
    {
        return $this->CreateDate;
    }
    /**
     * Set CreateDate value
     * @param string $createDate
     * @return \StructType\VFForm
     */
    public function setCreateDate($createDate = null)
    {
        // validation for constraint: string
        if (!is_null($createDate) && !is_string($createDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createDate)), __LINE__);
        }
        $this->CreateDate = $createDate;
        return $this;
    }
    /**
     * Get IsActivated value
     * @return bool|null
     */
    public function getIsActivated()
    {
        return $this->IsActivated;
    }
    /**
     * Set IsActivated value
     * @param bool $isActivated
     * @return \StructType\VFForm
     */
    public function setIsActivated($isActivated = null)
    {
        // validation for constraint: boolean
        if (!is_null($isActivated) && !is_bool($isActivated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isActivated)), __LINE__);
        }
        $this->IsActivated = $isActivated;
        return $this;
    }
    /**
     * Get ResultAccess value
     * @return bool|null
     */
    public function getResultAccess()
    {
        return $this->ResultAccess;
    }
    /**
     * Set ResultAccess value
     * @param bool $resultAccess
     * @return \StructType\VFForm
     */
    public function setResultAccess($resultAccess = null)
    {
        // validation for constraint: boolean
        if (!is_null($resultAccess) && !is_bool($resultAccess)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($resultAccess)), __LINE__);
        }
        $this->ResultAccess = $resultAccess;
        return $this;
    }
    /**
     * Get HeadLineUpperLeft value
     * @return string|null
     */
    public function getHeadLineUpperLeft()
    {
        return $this->HeadLineUpperLeft;
    }
    /**
     * Set HeadLineUpperLeft value
     * @param string $headLineUpperLeft
     * @return \StructType\VFForm
     */
    public function setHeadLineUpperLeft($headLineUpperLeft = null)
    {
        // validation for constraint: string
        if (!is_null($headLineUpperLeft) && !is_string($headLineUpperLeft)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($headLineUpperLeft)), __LINE__);
        }
        $this->HeadLineUpperLeft = $headLineUpperLeft;
        return $this;
    }
    /**
     * Get HeadLineLowerLeft value
     * @return string|null
     */
    public function getHeadLineLowerLeft()
    {
        return $this->HeadLineLowerLeft;
    }
    /**
     * Set HeadLineLowerLeft value
     * @param string $headLineLowerLeft
     * @return \StructType\VFForm
     */
    public function setHeadLineLowerLeft($headLineLowerLeft = null)
    {
        // validation for constraint: string
        if (!is_null($headLineLowerLeft) && !is_string($headLineLowerLeft)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($headLineLowerLeft)), __LINE__);
        }
        $this->HeadLineLowerLeft = $headLineLowerLeft;
        return $this;
    }
    /**
     * Get HeadLineUpperRight value
     * @return string|null
     */
    public function getHeadLineUpperRight()
    {
        return $this->HeadLineUpperRight;
    }
    /**
     * Set HeadLineUpperRight value
     * @param string $headLineUpperRight
     * @return \StructType\VFForm
     */
    public function setHeadLineUpperRight($headLineUpperRight = null)
    {
        // validation for constraint: string
        if (!is_null($headLineUpperRight) && !is_string($headLineUpperRight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($headLineUpperRight)), __LINE__);
        }
        $this->HeadLineUpperRight = $headLineUpperRight;
        return $this;
    }
    /**
     * Get HeadLineLowerRight value
     * @return string|null
     */
    public function getHeadLineLowerRight()
    {
        return $this->HeadLineLowerRight;
    }
    /**
     * Set HeadLineLowerRight value
     * @param string $headLineLowerRight
     * @return \StructType\VFForm
     */
    public function setHeadLineLowerRight($headLineLowerRight = null)
    {
        // validation for constraint: string
        if (!is_null($headLineLowerRight) && !is_string($headLineLowerRight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($headLineLowerRight)), __LINE__);
        }
        $this->HeadLineLowerRight = $headLineLowerRight;
        return $this;
    }
    /**
     * Get HeadLineMark value
     * @return string|null
     */
    public function getHeadLineMark()
    {
        return $this->HeadLineMark;
    }
    /**
     * Set HeadLineMark value
     * @param string $headLineMark
     * @return \StructType\VFForm
     */
    public function setHeadLineMark($headLineMark = null)
    {
        // validation for constraint: string
        if (!is_null($headLineMark) && !is_string($headLineMark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($headLineMark)), __LINE__);
        }
        $this->HeadLineMark = $headLineMark;
        return $this;
    }
    /**
     * Get HeadLineCorrection value
     * @return string|null
     */
    public function getHeadLineCorrection()
    {
        return $this->HeadLineCorrection;
    }
    /**
     * Set HeadLineCorrection value
     * @param string $headLineCorrection
     * @return \StructType\VFForm
     */
    public function setHeadLineCorrection($headLineCorrection = null)
    {
        // validation for constraint: string
        if (!is_null($headLineCorrection) && !is_string($headLineCorrection)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($headLineCorrection)), __LINE__);
        }
        $this->HeadLineCorrection = $headLineCorrection;
        return $this;
    }
    /**
     * Get ItemGroupList value
     * @return \StructType\ItemGroupList|null
     */
    public function getItemGroupList()
    {
        return $this->ItemGroupList;
    }
    /**
     * Set ItemGroupList value
     * @param \StructType\ItemGroupList $itemGroupList
     * @return \StructType\VFForm
     */
    public function setItemGroupList(\StructType\ItemGroupList $itemGroupList = null)
    {
        $this->ItemGroupList = $itemGroupList;
        return $this;
    }
    /**
     * Get HeaderLineCount value
     * @return int|null
     */
    public function getHeaderLineCount()
    {
        return $this->HeaderLineCount;
    }
    /**
     * Set HeaderLineCount value
     * @param int $headerLineCount
     * @return \StructType\VFForm
     */
    public function setHeaderLineCount($headerLineCount = null)
    {
        // validation for constraint: int
        if (!is_null($headerLineCount) && !is_numeric($headerLineCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($headerLineCount)), __LINE__);
        }
        $this->HeaderLineCount = $headerLineCount;
        return $this;
    }
    /**
     * Get AdditionalHeaderLineList value
     * @return \StructType\AdditionalHeaderLineList|null
     */
    public function getAdditionalHeaderLineList()
    {
        return $this->AdditionalHeaderLineList;
    }
    /**
     * Set AdditionalHeaderLineList value
     * @param \StructType\AdditionalHeaderLineList $additionalHeaderLineList
     * @return \StructType\VFForm
     */
    public function setAdditionalHeaderLineList(\StructType\AdditionalHeaderLineList $additionalHeaderLineList = null)
    {
        $this->AdditionalHeaderLineList = $additionalHeaderLineList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\VFForm
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
