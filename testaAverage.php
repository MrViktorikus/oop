<?php

require_once './AverageDocBlock.php';

$oddArray = array(9,2,3,4,5);
$evenArray = array(1,2,3,4,5,6);

$oddTest = new Average($oddArray);
$evenTest = new Average($evenArray);

echo "<br>Medelvärde på udda: " . $oddTest->getMean();
echo "<br>Medelvärde på udda med 2 decimaler: " . $oddTest->getMean(2);
echo "<br>Medelvärde på udda med 0 decimaler: " . $oddTest->getMean(0);
echo "<br>Medianvärde på udda: " . $oddTest->getMedian();
echo "<br>Medianvärde på udda, 2 decimaler: " . $oddTest->getMedian(2);
echo "<br>";
echo "<br>Medelvärde på jämn: " . $evenTest->getMean();
echo "<br>Medelvärde på jämn, 2 decimaler: " . $evenTest->getMean(2);
echo "<br>Medelvärde på jämn, 0 decimaler: " . $evenTest->getMean(0);
echo "<br>Medianvärde på jämn: " . $evenTest->getMedian();
echo "<br>Medianvärde på jämn, 2 decimaler: " . $evenTest->getMedian(2);


