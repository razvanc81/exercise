<?php


$date = $_GET['date'];


$data = [

	["answer"=>"SNOB","clue"=>"Haughty person","length"=>4,"date"=>$date,"direction"=>"across"],
	["answer"=>"ATONED","clue"=>"Apologized for one's sins","length"=>6,"date"=>$date,"direction"=>"across"],
	["answer"=>"PORTER","clue"=>"Luggage carrier at a hotel","length"=>6,"date"=>$date,"direction"=>"across"],
	["answer"=>"TUTORS","clue"=>"One-on-one teachers","length"=>6,"date"=>$date,"direction"=>"across"],
	["answer"=>"STEPS","clue"=>"Studies recommend taking 8,000+ of these each day","length"=>5,"date"=>$date,"direction"=>"across"],
	["answer"=>"STOUT","clue"=>"Sturdy","length"=>5,"date"=>$date,"direction"=>"down"],
	["answer"=>"NORTE","clue"=>"Direction from Mexico to the U.S., en español","length"=>5,"date"=>$date,"direction"=>"down"],
	["answer"=>"ONTOP","clue"=>"Victorious","length"=>5,"date"=>$date,"direction"=>"down"],
	["answer"=>"BEERS","clue"=>"7-Across and 1-Down, by different meanings","length"=>5,"date"=>$date,"direction"=>"down"],
	["answer"=>"APTS","clue"=>"Many N.Y.C. dwellings=> Abbr.","length"=>4,"date"=>$date,"direction"=>"down"],
	["answer"=>"DRS","clue"=>"Hosp. personnel","length"=>3,"date"=>$date,"direction"=>"down"]

];

header('Content-Type=> application/json; charset=utf-8');
echo json_encode($data);

