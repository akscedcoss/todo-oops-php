<?php
class Tasks
{
    private $task;
    private $status;
    function __construct($val)
    {
        $this->task = $val;
        $this->status = 'incomplete';
    }
    function getTask()
    {
        return $this->task;
    }
    function setTask($val)
    {
        $this->task = $val;
    }
    function changeStatus()
    {
        if ($this->status == 'incomplete') {
            $this->status = 'complete';
        } else {
            $this->status = 'incomplete';
        }
    }
}
