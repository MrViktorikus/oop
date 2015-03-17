<?php

/**
 * Skapar en klass som slår tärningar
 * @author johkel
 */
class Dice {

    protected $sides;

    /**
     * Konstruktur för tärning.
     * @param int $sides Antal sidor på tärningen
     */
    public function __construct($sides = 6) {
        $this->sides = $sides;
    }

    /**
     * Slå de skapade tärningarna och returnera summan.
     * @return int Returnerar summan
     */
    public function rollDice($timesToRoll = 1) {
        $diceRolls = array();
        for ($i = 0; $i < $timesToRoll; $i++) {
            $tmpRoll = rand(1, $this->sides);
            $diceRolls["dice"][] = $tmpRoll;
        }
        $diceRolls["sum"] = array_sum($diceRolls["dice"]);
        $diceRolls["sides"] = $this->sides;
        $diceRolls["times"] = $timesToRoll;

        return $diceRolls;
    }

}
