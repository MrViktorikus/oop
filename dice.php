<?php
require_once 'class.Dice.php';

$sidor = 6;
$antal = 2;

if (isset($_GET["sidor"])) {
    $sidor = (int) filter_input(INPUT_GET, 'sidor', FILTER_SANITIZE_SPECIAL_CHARS);
    $antal = (int) filter_input(INPUT_GET, 'antal', FILTER_SANITIZE_SPECIAL_CHARS);
}

$dice1 = new Dice($sidor);
$diceRolled = $dice1->rollDice($antal);

//var_dump($diceRolled);

function listDiceRolled($rolls){
    $tmp = "<ol>";
    foreach($rolls as $roll) {
        $tmp .= "<li>".$roll."</li>";
    }
    $tmp .= "</ol>";
    return $tmp;
}


?>
<!DOCTYPE html>
<html>
    <head>
        <title>dice</title>
        <meta charset="utf8">
    </head>
    <body>
        <form action="" method="GET">
            <label for="antal">Antal</label><input tyoe="text" name="antal" id="antal">
            <br>
            <label for="sidor">Sidor</label><input type="text" name="sidor" id="sidor">
            <br>
            <input type="submit" value="skicka">
        </form>
        <h2>Tärningsslagen</h2>
        <ul>
            <li>Antal sidor på tärningen: <?php echo $diceRolled["sides"] ?></li>
            <li>Antal gånger den slogs: <?php echo $diceRolled["times"] ?></li>
            <li>Summan av tärningsslagen: <?php echo $diceRolled["sum"] ?></li>
            <li>Slag:
                <?php echo listDiceRolled($diceRolled["dice"]); ?>
            </li>
        </ul>
    </body>
</html>