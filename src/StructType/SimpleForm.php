<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SimpleForm StructType
 * @subpackage Structs
 */
class SimpleForm extends AbstractStructBase
{
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $ID;
    /**
     * The Name
     * @var string
     */
    public $Name;
    /**
     * The OwnerID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $OwnerID;
    /**
     * The FormEngine
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $FormEngine;
    /**
     * The CustomReportList
     * @var \StructType\CustomReportList
     */
    public $CustomReportList;
    /**
     * Constructor method for SimpleForm
     * @uses SimpleForm::setID()
     * @uses SimpleForm::setName()
     * @uses SimpleForm::setOwnerID()
     * @uses SimpleForm::setFormEngine()
     * @uses SimpleForm::setCustomReportList()
     * @param int $iD
     * @param string $name
     * @param int $ownerID
     * @param int $formEngine
     * @param \StructType\CustomReportList $customReportList
     */
    public function __construct($iD = null, $name = null, $ownerID = null, $formEngine = null, \StructType\CustomReportList $customReportList = null)
    {
        $this
            ->setID($iD)
            ->setName($name)
            ->setOwnerID($ownerID)
            ->setFormEngine($formEngine)
            ->setCustomReportList($customReportList);
    }
    /**
     * Get ID value
     * @return int|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param int $iD
     * @return \StructType\SimpleForm
     */
    public function setID($iD = null)
    {
        // validation for constraint: int
        if (!is_null($iD) && !is_numeric($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\SimpleForm
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get OwnerID value
     * @return int|null
     */
    public function getOwnerID()
    {
        return $this->OwnerID;
    }
    /**
     * Set OwnerID value
     * @param int $ownerID
     * @return \StructType\SimpleForm
     */
    public function setOwnerID($ownerID = null)
    {
        // validation for constraint: int
        if (!is_null($ownerID) && !is_numeric($ownerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ownerID)), __LINE__);
        }
        $this->OwnerID = $ownerID;
        return $this;
    }
    /**
     * Get FormEngine value
     * @return int|null
     */
    public function getFormEngine()
    {
        return $this->FormEngine;
    }
    /**
     * Set FormEngine value
     * @param int $formEngine
     * @return \StructType\SimpleForm
     */
    public function setFormEngine($formEngine = null)
    {
        // validation for constraint: int
        if (!is_null($formEngine) && !is_numeric($formEngine)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($formEngine)), __LINE__);
        }
        $this->FormEngine = $formEngine;
        return $this;
    }
    /**
     * Get CustomReportList value
     * @return \StructType\CustomReportList|null
     */
    public function getCustomReportList()
    {
        return $this->CustomReportList;
    }
    /**
     * Set CustomReportList value
     * @param \StructType\CustomReportList $customReportList
     * @return \StructType\SimpleForm
     */
    public function setCustomReportList(\StructType\CustomReportList $customReportList = null)
    {
        $this->CustomReportList = $customReportList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SimpleForm
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
