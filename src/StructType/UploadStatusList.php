<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadStatusList StructType
 * @subpackage Structs
 */
class UploadStatusList extends AbstractStructBase
{
    /**
     * The UploadStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\UploadStatus[]
     */
    public $UploadStatus;
    /**
     * Constructor method for UploadStatusList
     * @uses UploadStatusList::setUploadStatus()
     * @param \StructType\UploadStatus[] $uploadStatus
     */
    public function __construct(array $uploadStatus = array())
    {
        $this
            ->setUploadStatus($uploadStatus);
    }
    /**
     * Get UploadStatus value
     * @return \StructType\UploadStatus[]
     */
    public function getUploadStatus()
    {
        return $this->UploadStatus;
    }
    /**
     * Set UploadStatus value
     * @throws \InvalidArgumentException
     * @param \StructType\UploadStatus[] $uploadStatus
     * @return \StructType\UploadStatusList
     */
    public function setUploadStatus(array $uploadStatus = array())
    {
        foreach ($uploadStatus as $uploadStatusListUploadStatusItem) {
            // validation for constraint: itemType
            if (!$uploadStatusListUploadStatusItem instanceof \StructType\UploadStatus) {
                throw new \InvalidArgumentException(sprintf('The UploadStatus property can only contain items of \StructType\UploadStatus, "%s" given', is_object($uploadStatusListUploadStatusItem) ? get_class($uploadStatusListUploadStatusItem) : gettype($uploadStatusListUploadStatusItem)), __LINE__);
            }
        }
        $this->UploadStatus = $uploadStatus;
        return $this;
    }
    /**
     * Add item to UploadStatus value
     * @throws \InvalidArgumentException
     * @param \StructType\UploadStatus $item
     * @return \StructType\UploadStatusList
     */
    public function addToUploadStatus(\StructType\UploadStatus $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\UploadStatus) {
            throw new \InvalidArgumentException(sprintf('The UploadStatus property can only contain items of \StructType\UploadStatus, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->UploadStatus[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\UploadStatusList
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
