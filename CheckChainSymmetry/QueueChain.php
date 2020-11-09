<?php


class QueueChain
{
    protected $queue;
    public function __construct()
    {
        $this->queue=[];
    }
    public function isEmpty(){
        return count($this->queue)==0;
    }
    public function enqueue($character){
        array_push($this->queue,$character);
    }
    public function dequeue(){
        if ($this->isEmpty())
        {
            echo "khong con phan tu";
            exit();
        }
        return array_shift($this->queue);
    }

}