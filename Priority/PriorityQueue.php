<?php

include_once "Patient.php";

class PriorityQueue
{
    const MAX_SIZE = 10;
    protected $limit;
    protected $array;

    public function __construct()
    {

        $this->array = [];
        $this->limit = self::MAX_SIZE;
    }

    protected function enqueue($patent)
    {
        if ($this->isFull()) {
            echo "day";
            exit();
        }
        array_push($this->array, $patent);

    }

    public function dequeue()
    {

        usort($this->array, function ($a, $b) {
            if ($a->code < $b->code) {
                return true;
            }
            return false;
        });

        return $this->array[0];

    }

    public function size()
    {
        return count($this->array);
    }

    public function isFull()
    {
        return $this->size();

    }
}