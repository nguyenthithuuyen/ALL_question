<?php

include_once 'Node.php';

class LinkedList
{
    private $count = 0;
    private $firstNode;
    private $lastNode;

    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count;

    }

    public function insertFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;

        /* If this is the first node inserted in the list
           then set the lastNode pointer to it.
        */
        if ($this->lastNode == NULL)
            $this->lastNode = $link;

        $this->count++;
    }

    public function insertLast($data)
    {
        if ($this->firstNode != NULL) {
            $link = new Node($data);
            $this->lastNode->next = $link;
            $link->next = NULL;
            $this->lastNode = $link;
            $this->count++;
        } else {
            $this->insertFirst($data);
        }
    }

    public function totalNodes()
    {
        return $this->count;
    }

    public function readList()
    {
        $listData = array();
        $current = $this->firstNode;

        while ($current != NULL) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
}