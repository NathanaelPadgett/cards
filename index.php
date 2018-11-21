<?php
$suits = array('Spades','Hearts','Clubs','Diamonds');
$faces = array('2','3','4','5','6','7','8','9','10','J','Q','K','A');
$deck = array();
foreach ($suits as $suit) {
    foreach ($faces as $face) {
        $deck[] = array("face"=>$face, "suit"=>$suit);
    }
}
print "<h1>Create a deck</h1>";
foreach ($deck as $key => $card) {
	print "<img src='images/card".$card['suit'].$card['face'].".png'>";
}

print "<h1>Cards in deck: ".count($deck)."</h1>";

print "<h1>Shuffle the deck</h1>";
shuffle($deck);

print "<h1>Show the shuffled deck</h1>";
foreach ($deck as $key => $card) {
	print "<img src='images/card".$card['suit'].$card['face'].".png'>";
}

print "<h1>Take off the top card</h1>";
$card = array_shift($deck);
print "<img src='images/card".$card['suit'].$card['face'].".png'>";

print "<h1>Cards in deck: ".count($deck)."</h1>";

print "<h1>Show the deck after the top card was removed</h1>";
print "<h1>Cards in deck: ".count($deck)."</h1>";
foreach ($deck as $key => $card) {
	print "<img src='images/card".$card['suit'].$card['face'].".png'>";
}

print "<h1>Distribute three hands of five cards</h1>";

$hands = array(1 => array(), 2=>array(), 3=>array());
for ($i = 0; $i < 5; $i++) {
    $hands[1][] = array_shift($deck);
    $hands[2][] = array_shift($deck);
    $hands[3][] = array_shift($deck);
}

foreach ($hands as $key => $cards) {
	foreach ($cards as $key => $card) {
		print "<img src='images/card".$card['suit'].$card['face'].".png'>";
	}
	print "<br>";
}

print "<h1>Cards in deck: ".count($deck)."</h1>";

print "<h1>Show the deck</h1>";
foreach ($deck as $key => $card) {
	print "<img src='images/card".$card['suit'].$card['face'].".png'>";
}