<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailAddressList StructType
 * @subpackage Structs
 */
class EmailAddressList extends AbstractStructBase
{
    /**
     * The EmailAddresses
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - pattern: [^@]+@[^\.]+\..+
     * @var string[]
     */
    public $EmailAddresses;
    /**
     * Constructor method for EmailAddressList
     * @uses EmailAddressList::setEmailAddresses()
     * @param string[] $emailAddresses
     */
    public function __construct(array $emailAddresses = array())
    {
        $this
            ->setEmailAddresses($emailAddresses);
    }
    /**
     * Get EmailAddresses value
     * @return string[]|null
     */
    public function getEmailAddresses()
    {
        return $this->EmailAddresses;
    }
    /**
     * Set EmailAddresses value
     * @throws \InvalidArgumentException
     * @param string[] $emailAddresses
     * @return \StructType\EmailAddressList
     */
    public function setEmailAddresses(array $emailAddresses = array())
    {
        // validation for constraint: pattern
        if (is_scalar($emailAddresses) && !preg_match('/[^@]+@[^\.]+\..+/', $emailAddresses)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[^@]+@[^\.]+\..+", "%s" given', var_export($emailAddresses, true)), __LINE__);
        }
        foreach ($emailAddresses as $emailAddressListEmailAddressesItem) {
            // validation for constraint: itemType
            if (!is_string($emailAddressListEmailAddressesItem)) {
                throw new \InvalidArgumentException(sprintf('The EmailAddresses property can only contain items of string, "%s" given', is_object($emailAddressListEmailAddressesItem) ? get_class($emailAddressListEmailAddressesItem) : gettype($emailAddressListEmailAddressesItem)), __LINE__);
            }
        }
        $this->EmailAddresses = $emailAddresses;
        return $this;
    }
    /**
     * Add item to EmailAddresses value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\EmailAddressList
     */
    public function addToEmailAddresses($item)
    {
        // validation for constraint: pattern
        if (is_scalar($item) && !preg_match('/[^@]+@[^\.]+\..+/', $item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[^@]+@[^\.]+\..+", "%s" given', var_export($item, true)), __LINE__);
        }
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The EmailAddresses property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->EmailAddresses[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\EmailAddressList
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
