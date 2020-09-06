<?php
include 'ArrayList.php';

$arrayList = new ArrayList();
$arrayList->add(1);
$arrayList->addArr([2,3,4]);
echo '<pre>';
print_r($arrayList->arrayList);
echo '</pre>';