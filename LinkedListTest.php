<?php

include_once 'Node.php';
include_once 'LinkedList.php';

$linkedList = new LinkedList();
$linkedList->addFirst('MinMax');
$linkedList->add('Mommy',1);
$linkedList->add('Daddy',3);

echo '<pre>';
print_r($linkedList->getLinkedList());
echo '</pre>';