<?php


class MyList
{
    public $firstNode;
    public $lastNode;
    public $count;
    public $limit;

    public function __construct($limit){
        $this->limit = $limit;
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }

    public function insertFirstNode($node){
        if ($this->count < $this->limit){
            if ($this->count == 0){
                $this->firstNode = $node;
                $this->lastNode = $node;
            } else {
                $node->link = $this->firstNode;
                $this->firstNode = $node;
            }
            $this->count++;
        } else {
            echo 'FULL';
        }
    }
    public function insertLastNode($node){
        if ($this->count < $this->limit){
            if ($this->count == 0){
                $this->firstNode = $node;
                $this->lastNode = $node;
            } else {
                $this->lastNode->link = $node;
                $this->lastNode = $node;
            }
            $this->count++;
        } else {
            echo 'FULL';
        }
    }

    public function getFirstNode(){
        return $this->firstNode;
    }
    public function getLastNode(){
        return $this->lastNode;
    }
}