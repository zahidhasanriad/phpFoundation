<?php

//get film titles and stars name where genres name is given

	function showFilmGenre($genre)
		{

	    //Showing Film Genre
			echo "Film Genre : $genre<br/>";
		}


	function getFilmTitles($genre) // get the film title
    	{   

			//$films array contains genres, film titles, stars

			$films = array( 

				'genres' => array("comedy","tragedy","action","romance"),				

				'film_titles' => array("Big","Star Wars","Titanic","French Kiss"),

				'stars' => array("Bill Murray", "Mark Hammell", "Leonard DiCaprio", "Cate Blanchett"),

				);


					//Showing Film Genre
					echo "Film Genre : $genre<br/>";

        				$counter_key = 0;
    
							//search specific genres like comedy and count comedy's key as counter key
							foreach ($films as $films_key => $films_value) 
								{
    
   								 if($films_key == "genres")
   									 {
       								 foreach ($films_value as $genre_key => $genre_value)
       									{

          								  if($genre_value == $genre)
            								{
               									$counter_key = $genre_key; 
               
           								 	}
            
        								}
    								}
  
								}

									//getting Film Title using the counter key
									$film_title = $films ['film_titles'][$counter_key];
 
 										return $film_title;

		}



	function getStars($genre)
    	{   

    		$films = array(

				'genres' => array("comedy","tragedy","action","romance"),				

				'film_titles' => array("Big","Star Wars","Titanic","French Kiss"),

				'stars' => array("Bill Murray", "Mark Hammell", "Leonard DiCaprio", "Cate Blanchett"),

				);

        			
        			$counter_key = 0;
    

						foreach ($films as $films_key => $films_value) 
							{
    
   								if($films_key == "genres")
    								{
       									foreach ($films_value as $genre_key => $genre_value)
        									{
            									if($genre_value == $genre)
           											{
               											$counter_key = $genre_key; 
               
           											}
            
       										}
    								}
  
							}

  
								$stars_name = $films['stars'][$counter_key]; //star name using same counter key used for genre


									$slug = str_replace(' ',"-", strtolower ( $stars_name)); // lower case star name where space is replaced by hyphen
 
 										return ($stars_name."<br />"."Slug: ".$slug);

		}


			echo  "Film Title: ".getFilmTitles ("comedy"); //showing Film Title
  				echo "<br/>";
  					echo "Star Name: ".getStars ("comedy"); //showing Star Name
