<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VolumeLicense StructType
 * @subpackage Structs
 */
class VolumeLicense extends AbstractStructBase
{
    /**
     * The LicenseId
     * @var int
     */
    public $LicenseId;
    /**
     * The LicenseVolume
     * @var int
     */
    public $LicenseVolume;
    /**
     * The LicenseCycles
     * @var int
     */
    public $LicenseCycles;
    /**
     * The LicenseStartDate
     * @var string
     */
    public $LicenseStartDate;
    /**
     * The LicenseEndDate
     * @var string
     */
    public $LicenseEndDate;
    /**
     * The LicenseActivityStatus
     * @var bool
     */
    public $LicenseActivityStatus;
    /**
     * The UsedLicenseCycles
     * @var int
     */
    public $UsedLicenseCycles;
    /**
     * The UsedLicenseVolume
     * @var float
     */
    public $UsedLicenseVolume;
    /**
     * The LicenseKey
     * @var string
     */
    public $LicenseKey;
    /**
     * Constructor method for VolumeLicense
     * @uses VolumeLicense::setLicenseId()
     * @uses VolumeLicense::setLicenseVolume()
     * @uses VolumeLicense::setLicenseCycles()
     * @uses VolumeLicense::setLicenseStartDate()
     * @uses VolumeLicense::setLicenseEndDate()
     * @uses VolumeLicense::setLicenseActivityStatus()
     * @uses VolumeLicense::setUsedLicenseCycles()
     * @uses VolumeLicense::setUsedLicenseVolume()
     * @uses VolumeLicense::setLicenseKey()
     * @param int $licenseId
     * @param int $licenseVolume
     * @param int $licenseCycles
     * @param string $licenseStartDate
     * @param string $licenseEndDate
     * @param bool $licenseActivityStatus
     * @param int $usedLicenseCycles
     * @param float $usedLicenseVolume
     * @param string $licenseKey
     */
    public function __construct($licenseId = null, $licenseVolume = null, $licenseCycles = null, $licenseStartDate = null, $licenseEndDate = null, $licenseActivityStatus = null, $usedLicenseCycles = null, $usedLicenseVolume = null, $licenseKey = null)
    {
        $this
            ->setLicenseId($licenseId)
            ->setLicenseVolume($licenseVolume)
            ->setLicenseCycles($licenseCycles)
            ->setLicenseStartDate($licenseStartDate)
            ->setLicenseEndDate($licenseEndDate)
            ->setLicenseActivityStatus($licenseActivityStatus)
            ->setUsedLicenseCycles($usedLicenseCycles)
            ->setUsedLicenseVolume($usedLicenseVolume)
            ->setLicenseKey($licenseKey);
    }
    /**
     * Get LicenseId value
     * @return int|null
     */
    public function getLicenseId()
    {
        return $this->LicenseId;
    }
    /**
     * Set LicenseId value
     * @param int $licenseId
     * @return \StructType\VolumeLicense
     */
    public function setLicenseId($licenseId = null)
    {
        // validation for constraint: int
        if (!is_null($licenseId) && !is_numeric($licenseId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($licenseId)), __LINE__);
        }
        $this->LicenseId = $licenseId;
        return $this;
    }
    /**
     * Get LicenseVolume value
     * @return int|null
     */
    public function getLicenseVolume()
    {
        return $this->LicenseVolume;
    }
    /**
     * Set LicenseVolume value
     * @param int $licenseVolume
     * @return \StructType\VolumeLicense
     */
    public function setLicenseVolume($licenseVolume = null)
    {
        // validation for constraint: int
        if (!is_null($licenseVolume) && !is_numeric($licenseVolume)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($licenseVolume)), __LINE__);
        }
        $this->LicenseVolume = $licenseVolume;
        return $this;
    }
    /**
     * Get LicenseCycles value
     * @return int|null
     */
    public function getLicenseCycles()
    {
        return $this->LicenseCycles;
    }
    /**
     * Set LicenseCycles value
     * @param int $licenseCycles
     * @return \StructType\VolumeLicense
     */
    public function setLicenseCycles($licenseCycles = null)
    {
        // validation for constraint: int
        if (!is_null($licenseCycles) && !is_numeric($licenseCycles)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($licenseCycles)), __LINE__);
        }
        $this->LicenseCycles = $licenseCycles;
        return $this;
    }
    /**
     * Get LicenseStartDate value
     * @return string|null
     */
    public function getLicenseStartDate()
    {
        return $this->LicenseStartDate;
    }
    /**
     * Set LicenseStartDate value
     * @param string $licenseStartDate
     * @return \StructType\VolumeLicense
     */
    public function setLicenseStartDate($licenseStartDate = null)
    {
        // validation for constraint: string
        if (!is_null($licenseStartDate) && !is_string($licenseStartDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($licenseStartDate)), __LINE__);
        }
        $this->LicenseStartDate = $licenseStartDate;
        return $this;
    }
    /**
     * Get LicenseEndDate value
     * @return string|null
     */
    public function getLicenseEndDate()
    {
        return $this->LicenseEndDate;
    }
    /**
     * Set LicenseEndDate value
     * @param string $licenseEndDate
     * @return \StructType\VolumeLicense
     */
    public function setLicenseEndDate($licenseEndDate = null)
    {
        // validation for constraint: string
        if (!is_null($licenseEndDate) && !is_string($licenseEndDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($licenseEndDate)), __LINE__);
        }
        $this->LicenseEndDate = $licenseEndDate;
        return $this;
    }
    /**
     * Get LicenseActivityStatus value
     * @return bool|null
     */
    public function getLicenseActivityStatus()
    {
        return $this->LicenseActivityStatus;
    }
    /**
     * Set LicenseActivityStatus value
     * @param bool $licenseActivityStatus
     * @return \StructType\VolumeLicense
     */
    public function setLicenseActivityStatus($licenseActivityStatus = null)
    {
        // validation for constraint: boolean
        if (!is_null($licenseActivityStatus) && !is_bool($licenseActivityStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($licenseActivityStatus)), __LINE__);
        }
        $this->LicenseActivityStatus = $licenseActivityStatus;
        return $this;
    }
    /**
     * Get UsedLicenseCycles value
     * @return int|null
     */
    public function getUsedLicenseCycles()
    {
        return $this->UsedLicenseCycles;
    }
    /**
     * Set UsedLicenseCycles value
     * @param int $usedLicenseCycles
     * @return \StructType\VolumeLicense
     */
    public function setUsedLicenseCycles($usedLicenseCycles = null)
    {
        // validation for constraint: int
        if (!is_null($usedLicenseCycles) && !is_numeric($usedLicenseCycles)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($usedLicenseCycles)), __LINE__);
        }
        $this->UsedLicenseCycles = $usedLicenseCycles;
        return $this;
    }
    /**
     * Get UsedLicenseVolume value
     * @return float|null
     */
    public function getUsedLicenseVolume()
    {
        return $this->UsedLicenseVolume;
    }
    /**
     * Set UsedLicenseVolume value
     * @param float $usedLicenseVolume
     * @return \StructType\VolumeLicense
     */
    public function setUsedLicenseVolume($usedLicenseVolume = null)
    {
        $this->UsedLicenseVolume = $usedLicenseVolume;
        return $this;
    }
    /**
     * Get LicenseKey value
     * @return string|null
     */
    public function getLicenseKey()
    {
        return $this->LicenseKey;
    }
    /**
     * Set LicenseKey value
     * @param string $licenseKey
     * @return \StructType\VolumeLicense
     */
    public function setLicenseKey($licenseKey = null)
    {
        // validation for constraint: string
        if (!is_null($licenseKey) && !is_string($licenseKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($licenseKey)), __LINE__);
        }
        $this->LicenseKey = $licenseKey;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\VolumeLicense
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
