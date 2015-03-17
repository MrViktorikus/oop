<?php

class Average {

    // dessa variabler är protected så de går inte att nå utifrån klassen (jmf public)
    protected $array;
    protected $array_length;

    //konstruktor
    public function __construct(array $values) {
        //array innan $values hjälper php lista ut vad det är för något som skickas in. Obligatorisk parameter.
        //skriver till variablerna som bara finns i denna klass och som inte går att nå utifrån
        $this->array = $values;
        $this->array_length = count($values);
    }

    //medelvärde
    public function getMean($precision = null) {
        //när man tilldelar en parameter ett värde som ovan blir parametern valfri. Den har ett standardvärde ifall man inte skickar in något.
        $mean = array_sum($this->array) / $this->array_length;

        //kolla om precision har angetts
        if (!is_null($precision)) {
            //avrunda till valt antal decimaler
            return round($mean, $precision);
        } else {
            return $mean;
        }
    }

    //median
    public function getMedian($precision = null) {
        //sortering krävs för att kunna ta reda på median
        sort($this->array);

        //hitta mittenposition, kan vara decimaltal, om 5 värden i array ger den 2.5
        $middle = $this->array_length / 2;

        //ta reda på om arrayen har jämnt eller udda antal poster med modulus, % ger 1 om ojämnt annars 0
        if ($this->array_length % 2) {
            //ojämnt antal, avrunda $middle nedåt, om 5 värden 2
            $middle = floor($middle);

            //returnera värdet på medianpositionen
            return $this->array[$middle];
        } else {
            //ojämnt antal, summera värdena närmast mitten
            $middleValues = $this->array[$middle - 1] + $this->array[$middle];

            //dela med 2 och avrunda till valt antal decimaler och returnera
            return round($middleValues / 2, $precision);
        }
    }

}
