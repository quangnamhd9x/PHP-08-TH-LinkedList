<?php
include_once 'MyList.php';
include_once 'Node.php';


$myList = new MyList(5);
$node = new Node(35);
$node1 = new Node(5345);
$node2 = new Node(3123455);
$node4 = new Node(8888);

$myList->insertFirstNode($node);
$myList->insertFirstNode($node1);
$myList->insertFirstNode($node2);
$myList->insertLastNode($node4);
print_r($myList->getFirstNode());
//print_r($myList->getLastNode());


//$node1->getNode();
//$node2->getNode();
//$node3->getNode();


