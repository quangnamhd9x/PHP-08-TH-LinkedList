<?php

include_once 'Node.php';
class LinkedList
{
    private $firstNode;
    private $lastNode;

    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
    }

    public function addFirst($data){
        $node = new Node($data);
        $node->next = $this->firstNode;
        $this->firstNode = $node;

        if ($this->lastNode == null) {
            $this->lastNode = $node;
        }
    }

    public function add($data,$index){
        $node = new Node($data);
        $current = $this->firstNode;
        $pre = $this->firstNode;

        for ($i = 0; $i < $index; $i++) {
            $pre = $current;
            $current = $current->next;
        }

        $pre->next = $node;
        $node->next = $current;
    }

    public function getLinkedList(){
        $arr = array();
        $current = $this->firstNode;
        while ($current != null) {
            array_push($arr,$current->getNode());
            $current = $current->next;
        }
        return $arr;
    }



}