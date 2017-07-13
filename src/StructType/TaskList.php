<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaskList StructType
 * @subpackage Structs
 */
class TaskList extends AbstractStructBase
{
    /**
     * The InvitationTask
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\InvitationTask[]
     */
    public $InvitationTask;
    /**
     * The RemindTask
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\RemindTask[]
     */
    public $RemindTask;
    /**
     * The ResponseRateTask
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ResponseRateTask[]
     */
    public $ResponseRateTask;
    /**
     * The CloseTask
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\CloseTask[]
     */
    public $CloseTask;
    /**
     * Constructor method for TaskList
     * @uses TaskList::setInvitationTask()
     * @uses TaskList::setRemindTask()
     * @uses TaskList::setResponseRateTask()
     * @uses TaskList::setCloseTask()
     * @param \StructType\InvitationTask[] $invitationTask
     * @param \StructType\RemindTask[] $remindTask
     * @param \StructType\ResponseRateTask[] $responseRateTask
     * @param \StructType\CloseTask[] $closeTask
     */
    public function __construct(array $invitationTask = array(), array $remindTask = array(), array $responseRateTask = array(), array $closeTask = array())
    {
        $this
            ->setInvitationTask($invitationTask)
            ->setRemindTask($remindTask)
            ->setResponseRateTask($responseRateTask)
            ->setCloseTask($closeTask);
    }
    /**
     * Get InvitationTask value
     * @return \StructType\InvitationTask[]|null
     */
    public function getInvitationTask()
    {
        return $this->InvitationTask;
    }
    /**
     * Set InvitationTask value
     * @throws \InvalidArgumentException
     * @param \StructType\InvitationTask[] $invitationTask
     * @return \StructType\TaskList
     */
    public function setInvitationTask(array $invitationTask = array())
    {
        foreach ($invitationTask as $taskListInvitationTaskItem) {
            // validation for constraint: itemType
            if (!$taskListInvitationTaskItem instanceof \StructType\InvitationTask) {
                throw new \InvalidArgumentException(sprintf('The InvitationTask property can only contain items of \StructType\InvitationTask, "%s" given', is_object($taskListInvitationTaskItem) ? get_class($taskListInvitationTaskItem) : gettype($taskListInvitationTaskItem)), __LINE__);
            }
        }
        $this->InvitationTask = $invitationTask;
        return $this;
    }
    /**
     * Add item to InvitationTask value
     * @throws \InvalidArgumentException
     * @param \StructType\InvitationTask $item
     * @return \StructType\TaskList
     */
    public function addToInvitationTask(\StructType\InvitationTask $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\InvitationTask) {
            throw new \InvalidArgumentException(sprintf('The InvitationTask property can only contain items of \StructType\InvitationTask, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->InvitationTask[] = $item;
        return $this;
    }
    /**
     * Get RemindTask value
     * @return \StructType\RemindTask[]|null
     */
    public function getRemindTask()
    {
        return $this->RemindTask;
    }
    /**
     * Set RemindTask value
     * @throws \InvalidArgumentException
     * @param \StructType\RemindTask[] $remindTask
     * @return \StructType\TaskList
     */
    public function setRemindTask(array $remindTask = array())
    {
        foreach ($remindTask as $taskListRemindTaskItem) {
            // validation for constraint: itemType
            if (!$taskListRemindTaskItem instanceof \StructType\RemindTask) {
                throw new \InvalidArgumentException(sprintf('The RemindTask property can only contain items of \StructType\RemindTask, "%s" given', is_object($taskListRemindTaskItem) ? get_class($taskListRemindTaskItem) : gettype($taskListRemindTaskItem)), __LINE__);
            }
        }
        $this->RemindTask = $remindTask;
        return $this;
    }
    /**
     * Add item to RemindTask value
     * @throws \InvalidArgumentException
     * @param \StructType\RemindTask $item
     * @return \StructType\TaskList
     */
    public function addToRemindTask(\StructType\RemindTask $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\RemindTask) {
            throw new \InvalidArgumentException(sprintf('The RemindTask property can only contain items of \StructType\RemindTask, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RemindTask[] = $item;
        return $this;
    }
    /**
     * Get ResponseRateTask value
     * @return \StructType\ResponseRateTask[]|null
     */
    public function getResponseRateTask()
    {
        return $this->ResponseRateTask;
    }
    /**
     * Set ResponseRateTask value
     * @throws \InvalidArgumentException
     * @param \StructType\ResponseRateTask[] $responseRateTask
     * @return \StructType\TaskList
     */
    public function setResponseRateTask(array $responseRateTask = array())
    {
        foreach ($responseRateTask as $taskListResponseRateTaskItem) {
            // validation for constraint: itemType
            if (!$taskListResponseRateTaskItem instanceof \StructType\ResponseRateTask) {
                throw new \InvalidArgumentException(sprintf('The ResponseRateTask property can only contain items of \StructType\ResponseRateTask, "%s" given', is_object($taskListResponseRateTaskItem) ? get_class($taskListResponseRateTaskItem) : gettype($taskListResponseRateTaskItem)), __LINE__);
            }
        }
        $this->ResponseRateTask = $responseRateTask;
        return $this;
    }
    /**
     * Add item to ResponseRateTask value
     * @throws \InvalidArgumentException
     * @param \StructType\ResponseRateTask $item
     * @return \StructType\TaskList
     */
    public function addToResponseRateTask(\StructType\ResponseRateTask $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ResponseRateTask) {
            throw new \InvalidArgumentException(sprintf('The ResponseRateTask property can only contain items of \StructType\ResponseRateTask, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ResponseRateTask[] = $item;
        return $this;
    }
    /**
     * Get CloseTask value
     * @return \StructType\CloseTask[]|null
     */
    public function getCloseTask()
    {
        return $this->CloseTask;
    }
    /**
     * Set CloseTask value
     * @throws \InvalidArgumentException
     * @param \StructType\CloseTask[] $closeTask
     * @return \StructType\TaskList
     */
    public function setCloseTask(array $closeTask = array())
    {
        foreach ($closeTask as $taskListCloseTaskItem) {
            // validation for constraint: itemType
            if (!$taskListCloseTaskItem instanceof \StructType\CloseTask) {
                throw new \InvalidArgumentException(sprintf('The CloseTask property can only contain items of \StructType\CloseTask, "%s" given', is_object($taskListCloseTaskItem) ? get_class($taskListCloseTaskItem) : gettype($taskListCloseTaskItem)), __LINE__);
            }
        }
        $this->CloseTask = $closeTask;
        return $this;
    }
    /**
     * Add item to CloseTask value
     * @throws \InvalidArgumentException
     * @param \StructType\CloseTask $item
     * @return \StructType\TaskList
     */
    public function addToCloseTask(\StructType\CloseTask $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CloseTask) {
            throw new \InvalidArgumentException(sprintf('The CloseTask property can only contain items of \StructType\CloseTask, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CloseTask[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TaskList
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
