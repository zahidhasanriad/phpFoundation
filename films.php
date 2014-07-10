<?php

$films = array(

				'genres' => array("comedy","tragedy","action","romance"),				
				
				'film_titles' => array("Big","Star Wars","Titanic","French Kiss"),

				'stars' => array("Bill Murray", "Mark Hammell", "Leonard DiCaprio", "Cate Blanchett"),

				);


	/*function getInfoFromGenres($films['genres'])
		{

			
			

		}	*/

		foreach ($films as $key => $value){
			
			if ($key === 'genres' && $value === 'comedy'){

				print_r ($films);
			}


			
				