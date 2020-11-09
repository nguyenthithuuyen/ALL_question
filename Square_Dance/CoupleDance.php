<?php

include_once 'Dancer.php';

class CoupleDance
{
    public $male;
    public $female;


    public function __construct()
    {
        $this->male = new SplQueue();
        $this->female = new SplQueue();

    }

    public function addDancer($dance)
    {
        if ($dance->getGender() == 'male') {
            $this->male->enqueue($dance);
        } else {
            $this->female->enqueue($dance);
        }

    }

    public function coupleDance()
    {
        while (!$this->female->isEmpty() || !$this->male->isEmpty()) {
            if ($this->male->isEmpty()) {
                return count($this->female) . 'nu dang cho' . '<br>';
            }

            if ($this->female->isEmpty()) {
                return count($this->male) . 'nam dang cho' . '<br>';
            }

            echo 'cap: ' . $this->male->dequeue()->getName() . '-' . $this->female->dequeue()->getName() . '<br>';
        }


    }

    /**
     * @return SplQueue
     */
    public function getMale()
    {
        return $this->male;
    }

    /**
     * @return SplQueue
     */
    public function getFemale()
    {
        return $this->female;
    }


}