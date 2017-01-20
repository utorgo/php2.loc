
<?php
$array = [		
		"multi" => [
				"dimensional" => [
						"array" => "foo"
				]
		]
];

//var_dump($array["multi"]["dimensional"]["array"]);

$array = [
		"db" => [
				"host" => "mysql:host=127.0.0.1;dbname=test','test','+1279484"
				
		]
];

var_dump($array["db"]["host"]);