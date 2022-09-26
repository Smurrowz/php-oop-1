<?php  
include __DIR__ . '/Movie.php';

$lotr = new Movie('Lord of the Rings','Peter Jackson',2001,'fantasy',9);
$fightClub = new Movie('Fight Club','David Fincher',1999,'Thriller',8);
$fightClub->setActors('Edward Norton','Brad Pitt');
$fightClub->setDescription('Nelle settimane successive, il protagonista viene coinvolto da Tyler nella creazione del Fight Club, un circolo segreto i cui appartenenti prendono parte a violenti combattimenti tra loro, in uno scantinato di un bar, di proprietà del gangster Lou, il quale inizialmente prova a mandare via Tyler e i compagni, minacciandolo con terribili percosse');
var_dump($lotr);
var_dump($fightClub);
echo $fightClub->printMovie() ;
echo $lotr->printMovie();
