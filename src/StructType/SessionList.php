<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SessionList StructType
 * @subpackage Structs
 */
class SessionList extends AbstractStructBase
{
    /**
     * The Sessions
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\Session[]
     */
    public $Sessions;
    /**
     * Constructor method for SessionList
     * @uses SessionList::setSessions()
     * @param \StructType\Session[] $sessions
     */
    public function __construct(array $sessions = array())
    {
        $this
            ->setSessions($sessions);
    }
    /**
     * Get Sessions value
     * @return \StructType\Session[]
     */
    public function getSessions()
    {
        return $this->Sessions;
    }
    /**
     * Set Sessions value
     * @throws \InvalidArgumentException
     * @param \StructType\Session[] $sessions
     * @return \StructType\SessionList
     */
    public function setSessions(array $sessions = array())
    {
        foreach ($sessions as $sessionListSessionsItem) {
            // validation for constraint: itemType
            if (!$sessionListSessionsItem instanceof \StructType\Session) {
                throw new \InvalidArgumentException(sprintf('The Sessions property can only contain items of \StructType\Session, "%s" given', is_object($sessionListSessionsItem) ? get_class($sessionListSessionsItem) : gettype($sessionListSessionsItem)), __LINE__);
            }
        }
        $this->Sessions = $sessions;
        return $this;
    }
    /**
     * Add item to Sessions value
     * @throws \InvalidArgumentException
     * @param \StructType\Session $item
     * @return \StructType\SessionList
     */
    public function addToSessions(\StructType\Session $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Session) {
            throw new \InvalidArgumentException(sprintf('The Sessions property can only contain items of \StructType\Session, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Sessions[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SessionList
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
