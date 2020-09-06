<?php


class ArrayList
{
    public $arrayList;
    public $size;

    public function __construct(){
        $this->arrayList = array();
    }

    public function size(){
        $this->size = count($this->arrayList);
        return $this->size;
    }

    public function get($index) {
        return $this->arrayList[$index];
    }

    public function add ($obj) {
        array_push($this->arrayList,$obj);
    }

    public function addArr ($arr) {
        $this->arrayList = array_merge($this->arrayList,$arr);
    }

    public function sort(){
        return sort($this->arrayList);
    }


}