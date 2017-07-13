<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Instructor StructType
 * @subpackage Structs
 */
class Instructor extends AbstractStructBase
{
    /**
     * The InstructorUid
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $InstructorUid;
    /**
     * The LastName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $LastName;
    /**
     * The InstructorLogin
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InstructorLogin;
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FirstName;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The Gender
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Gender;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Email;
    /**
     * The Phone
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Phone;
    /**
     * The Language
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Language;
    /**
     * The IsActiveUser
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $IsActiveUser;
    /**
     * Constructor method for Instructor
     * @uses Instructor::setInstructorUid()
     * @uses Instructor::setLastName()
     * @uses Instructor::setInstructorLogin()
     * @uses Instructor::setFirstName()
     * @uses Instructor::setTitle()
     * @uses Instructor::setGender()
     * @uses Instructor::setEmail()
     * @uses Instructor::setPhone()
     * @uses Instructor::setLanguage()
     * @uses Instructor::setIsActiveUser()
     * @param string $instructorUid
     * @param string $lastName
     * @param string $instructorLogin
     * @param string $firstName
     * @param string $title
     * @param string $gender
     * @param string $email
     * @param string $phone
     * @param string $language
     * @param string $isActiveUser
     */
    public function __construct($instructorUid = null, $lastName = null, $instructorLogin = null, $firstName = null, $title = null, $gender = null, $email = null, $phone = null, $language = null, $isActiveUser = null)
    {
        $this
            ->setInstructorUid($instructorUid)
            ->setLastName($lastName)
            ->setInstructorLogin($instructorLogin)
            ->setFirstName($firstName)
            ->setTitle($title)
            ->setGender($gender)
            ->setEmail($email)
            ->setPhone($phone)
            ->setLanguage($language)
            ->setIsActiveUser($isActiveUser);
    }
    /**
     * Get InstructorUid value
     * @return string
     */
    public function getInstructorUid()
    {
        return $this->InstructorUid;
    }
    /**
     * Set InstructorUid value
     * @param string $instructorUid
     * @return \StructType\Instructor
     */
    public function setInstructorUid($instructorUid = null)
    {
        // validation for constraint: string
        if (!is_null($instructorUid) && !is_string($instructorUid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($instructorUid)), __LINE__);
        }
        $this->InstructorUid = $instructorUid;
        return $this;
    }
    /**
     * Get LastName value
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }
    /**
     * Set LastName value
     * @param string $lastName
     * @return \StructType\Instructor
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastName)), __LINE__);
        }
        $this->LastName = $lastName;
        return $this;
    }
    /**
     * Get InstructorLogin value
     * @return string|null
     */
    public function getInstructorLogin()
    {
        return $this->InstructorLogin;
    }
    /**
     * Set InstructorLogin value
     * @param string $instructorLogin
     * @return \StructType\Instructor
     */
    public function setInstructorLogin($instructorLogin = null)
    {
        // validation for constraint: string
        if (!is_null($instructorLogin) && !is_string($instructorLogin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($instructorLogin)), __LINE__);
        }
        $this->InstructorLogin = $instructorLogin;
        return $this;
    }
    /**
     * Get FirstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }
    /**
     * Set FirstName value
     * @param string $firstName
     * @return \StructType\Instructor
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
        }
        $this->FirstName = $firstName;
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
     * @return \StructType\Instructor
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
     * Get Gender value
     * @return string|null
     */
    public function getGender()
    {
        return $this->Gender;
    }
    /**
     * Set Gender value
     * @param string $gender
     * @return \StructType\Instructor
     */
    public function setGender($gender = null)
    {
        // validation for constraint: string
        if (!is_null($gender) && !is_string($gender)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gender)), __LINE__);
        }
        $this->Gender = $gender;
        return $this;
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \StructType\Instructor
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Get Phone value
     * @return string|null
     */
    public function getPhone()
    {
        return $this->Phone;
    }
    /**
     * Set Phone value
     * @param string $phone
     * @return \StructType\Instructor
     */
    public function setPhone($phone = null)
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phone)), __LINE__);
        }
        $this->Phone = $phone;
        return $this;
    }
    /**
     * Get Language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->Language;
    }
    /**
     * Set Language value
     * @param string $language
     * @return \StructType\Instructor
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($language)), __LINE__);
        }
        $this->Language = $language;
        return $this;
    }
    /**
     * Get IsActiveUser value
     * @return string|null
     */
    public function getIsActiveUser()
    {
        return $this->IsActiveUser;
    }
    /**
     * Set IsActiveUser value
     * @param string $isActiveUser
     * @return \StructType\Instructor
     */
    public function setIsActiveUser($isActiveUser = null)
    {
        // validation for constraint: string
        if (!is_null($isActiveUser) && !is_string($isActiveUser)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($isActiveUser)), __LINE__);
        }
        $this->IsActiveUser = $isActiveUser;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Instructor
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
