<?php
$biodata = array(
	'name' => ('Vellyna Angelicha Sitorus'), 
	'age' => 20, 
	'address' => ('Jalan SM. Raja Km. 11,5 Medan'),
	'hobbies' => array('Learn to play the guitar','Coding'),
	'is_maried' => false,
	'list_school' => array('name' => ['SMKN BI PROVSU','USU'], 
                        'year_in' => ['2012','2015']), 
                        'year_out' => ['2015','2019'], 
                        'major' => ['Computer & Network Engineering','Computer Science'],
	'skills' => array('skill_name' => ['c/c++','java','c#'], 'level' => ['advanced','advanced','advanced']),
	'interest_in_coding' => true,
);
$json = json_encode($biodata);
echo $json;
?>
