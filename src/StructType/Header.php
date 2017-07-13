<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Header StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Header
 * @subpackage Structs
 */
class Header extends AbstractStructBase
{
    /**
     * The Ticket
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Ticket;
    /**
     * The Login
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Login;
    /**
     * The Password
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Password;
    /**
     * Constructor method for Header
     * @uses Header::setTicket()
     * @uses Header::setLogin()
     * @uses Header::setPassword()
     * @param string $ticket
     * @param string $login
     * @param string $password
     */
    public function __construct($ticket = null, $login = null, $password = null)
    {
        $this
            ->setTicket($ticket)
            ->setLogin($login)
            ->setPassword($password);
    }
    /**
     * Get Ticket value
     * @return string|null
     */
    public function getTicket()
    {
        return $this->Ticket;
    }
    /**
     * Set Ticket value
     * @param string $ticket
     * @return \StructType\Header
     */
    public function setTicket($ticket = null)
    {
        // validation for constraint: string
        if (!is_null($ticket) && !is_string($ticket)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticket)), __LINE__);
        }
        $this->Ticket = $ticket;
        return $this;
    }
    /**
     * Get Login value
     * @return string|null
     */
    public function getLogin()
    {
        return $this->Login;
    }
    /**
     * Set Login value
     * @param string $login
     * @return \StructType\Header
     */
    public function setLogin($login = null)
    {
        // validation for constraint: string
        if (!is_null($login) && !is_string($login)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($login)), __LINE__);
        }
        $this->Login = $login;
        return $this;
    }
    /**
     * Get Password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param string $password
     * @return \StructType\Header
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($password)), __LINE__);
        }
        $this->Password = $password;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Header
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
