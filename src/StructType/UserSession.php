<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserSession StructType
 * @subpackage Structs
 */
class UserSession extends AbstractStructBase
{
    /**
     * The SessionId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SessionId;
    /**
     * The ServerIp
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ServerIp;
    /**
     * The UserStartPage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $UserStartPage;
    /**
     * Constructor method for UserSession
     * @uses UserSession::setSessionId()
     * @uses UserSession::setServerIp()
     * @uses UserSession::setUserStartPage()
     * @param string $sessionId
     * @param string $serverIp
     * @param string $userStartPage
     */
    public function __construct($sessionId = null, $serverIp = null, $userStartPage = null)
    {
        $this
            ->setSessionId($sessionId)
            ->setServerIp($serverIp)
            ->setUserStartPage($userStartPage);
    }
    /**
     * Get SessionId value
     * @return string
     */
    public function getSessionId()
    {
        return $this->SessionId;
    }
    /**
     * Set SessionId value
     * @param string $sessionId
     * @return \StructType\UserSession
     */
    public function setSessionId($sessionId = null)
    {
        // validation for constraint: string
        if (!is_null($sessionId) && !is_string($sessionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sessionId)), __LINE__);
        }
        $this->SessionId = $sessionId;
        return $this;
    }
    /**
     * Get ServerIp value
     * @return string
     */
    public function getServerIp()
    {
        return $this->ServerIp;
    }
    /**
     * Set ServerIp value
     * @param string $serverIp
     * @return \StructType\UserSession
     */
    public function setServerIp($serverIp = null)
    {
        // validation for constraint: string
        if (!is_null($serverIp) && !is_string($serverIp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serverIp)), __LINE__);
        }
        $this->ServerIp = $serverIp;
        return $this;
    }
    /**
     * Get UserStartPage value
     * @return string
     */
    public function getUserStartPage()
    {
        return $this->UserStartPage;
    }
    /**
     * Set UserStartPage value
     * @param string $userStartPage
     * @return \StructType\UserSession
     */
    public function setUserStartPage($userStartPage = null)
    {
        // validation for constraint: string
        if (!is_null($userStartPage) && !is_string($userStartPage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userStartPage)), __LINE__);
        }
        $this->UserStartPage = $userStartPage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\UserSession
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
