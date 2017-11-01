<?php

//	echo '<option value="1">jason</option>';
//	echo '<option value="2">jason2</option>';
//	exit;

$type = $_GET["type"];

if ($type == "GET_USER_IN_PROJECT")
	//	echo json_encode(array("unselected"=>array(0=>"id", 12=>"Alex", 23=>"Leon", 231=>"Leon1", 232=>"Leon2", 233=>"Leon3", 234=>"Leon4", 235=>"Leon5", 236=>"Leon6", 237=>"Leon7", 238=>"Leon8", 239=>"Leon9", 230=>"Leon0", 123=>"1Leon", 223=>"2Leon"), "selected"=>array(2=>"Jason", 23=>"Rax")));
	echo json_encode(array (
		"unselected" => array (
			0 => array (
				"id" => 12,
				"name" => "Alex",
				"my_data" => "ggggggggg"
			),
			1 => array (
				"id" => 121,
				"name" => "Alex1"
			),
			2 => array (
				"id" => 122,
				"name" => "Alex2"
			),
			3 => array (
				"id" => 123,
				"name" => "Alex3"
			),
			4 => array (
				"id" => 124,
				"name" => "Alex4"
			),
			5 => array (
				"id" => 125,
				"name" => "Alex5"
			),
			6 => array (
				"id" => 126,
				"name" => "Alex6"
			),
			7 => array (
				"id" => 127,
				"name" => "Alex7"
			),
			8 => array (
				"id" => 128,
				"name" => "Alex8"
			)
		),
		"selected" => array (
			0 => array (
				"id" => 622,
				"name" => "KKK"
			)
		)
	));
else
	if ($type == "SEARCH_USER_FOR_PROJECT") {
		// $_GET['keyword']
		// $_GET['selected_id_list']="12,1,3";
		echo json_encode(array (
			"result" => array (
				0 => array (
					"id" => 12,
					"name" => "Alex",
					"color" => "red"
				),
				1 => array (
					"id" => 121,
					"name" => "Alex1",
					"color" => "blue"
				),
				2 => array (
					"id" => 121,
					"name" => $_POST['keyword'],
					"color" => "yellow"
				)
			),
			"selected"=>array(array("id"=>10000,"name"=>"me"),array("id"=>10010,"name"=>"you"))
		));
	} else
		if ($type == "SEARCH_ROLE") {
			// $_GET['keyword']
			// $_GET['selected_id_list']="12,1,3";
			echo json_encode(array (
				"result" => array (
					0 => array (
						"id" => 12,
						"name" => "EE"
					),
					1 => array (
						"id" => 121,
						"name" => "SW"
					),
					2 => array (
						"id" => 121,
						"name" => $_POST['keyword']
					)
				)
			));
		} else
			if ($type == "SEARCH_DEPARTMENT") {
				// $_POST['keyword']
				// $_GET['selected_id_list']="12,1,3";
				echo json_encode(array (
					"result" => array (
						0 => array (
							"id" => 12,
							"name" => "ES1000"
						),
						1 => array (
							"id" => 121,
							"name" => "ES1100"
						),
						2 => array (
							"id" => 121,
							"name" => $_POST['keyword']
						)
					)
				));
			}
?>