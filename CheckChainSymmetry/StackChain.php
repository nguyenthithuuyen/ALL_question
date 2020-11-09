<?php


class StackChain
{
    protected $stack;
    protected $limit;

    public function __construct($limit)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }

    public function isFull()
    {
        return count($this->stack) == $this->limit;
    }

    public function push($character)
    {
        if ($this->isEmpty()) {
            echo " trong";
            exit();
        }
        array_unshift($this->stack, $character);
    }

    public function pop()
    {
        if ($this->isFull()) {
            echo "day";
            exit();
        }
        array_shift($this->stack);
    }

}