<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserList StructType
 * @subpackage Structs
 */
class UserList extends AbstractStructBase
{
    /**
     * The Users
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\User[]
     */
    public $Users;
    /**
     * Constructor method for UserList
     * @uses UserList::setUsers()
     * @param \StructType\User[] $users
     */
    public function __construct(array $users = array())
    {
        $this
            ->setUsers($users);
    }
    /**
     * Get Users value
     * @return \StructType\User[]|null
     */
    public function getUsers()
    {
        return $this->Users;
    }
    /**
     * Set Users value
     * @throws \InvalidArgumentException
     * @param \StructType\User[] $users
     * @return \StructType\UserList
     */
    public function setUsers(array $users = array())
    {
        foreach ($users as $userListUsersItem) {
            // validation for constraint: itemType
            if (!$userListUsersItem instanceof \StructType\User) {
                throw new \InvalidArgumentException(sprintf('The Users property can only contain items of \StructType\User, "%s" given', is_object($userListUsersItem) ? get_class($userListUsersItem) : gettype($userListUsersItem)), __LINE__);
            }
        }
        $this->Users = $users;
        return $this;
    }
    /**
     * Add item to Users value
     * @throws \InvalidArgumentException
     * @param \StructType\User $item
     * @return \StructType\UserList
     */
    public function addToUsers(\StructType\User $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\User) {
            throw new \InvalidArgumentException(sprintf('The Users property can only contain items of \StructType\User, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Users[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\UserList
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
