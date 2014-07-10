<?php




 function getInfoFromGenres($genre)
    {   
        $films = array(

				'genres' => array("comedy","tragedy","action","romance"),				
				
				'film_titles' => array("Big","Star Wars","Titanic","French Kiss"),

				'stars' => array("Bill Murray", "Mark Hammell", "Leonard DiCaprio", "Cate Blanchett"),

				);

        if($genre == $films['genres'][0])
        {
            echo 'Film Title : '.$films['film_titles'][0].' ('.  strtolower($films['film_titles'][0]).')<br/>';
            echo 'Stars : '.$films['stars'][0].' ('.  strtolower($films['stars'][0]).')<br/>';
            
        }
        
        else if($genre == $films['genres'][1])
        {
            echo 'Film Titles : '.$films['film_titles'][1].' ('.  strtolower($films['film_titles'][1]).')<br/>';
            echo 'Stars : '.$films['stars'][1].' ('.  strtolower($film['stars'][1]).')<br/>';
            
        }
        
        else if($genre == $film['genres'][2])
        {
            echo 'Film Title : '.$films['film_titles'][2].' ('.  strtolower($films['film_titles'][2]).')<br/>';
            echo 'Stars : '.$films['stars'][2].' ('.  strtolower($films['stars'][2]).')<br/>';
            
        }
        
        else if($genre == $films['genres'][3])
        {
            echo 'Film Title : '.$films['film_titles'][3].' ('.  strtolower($films['film_title'][3]).')<br/>';
            echo 'Stars : '.$films['stars'][3].' ('.  strtolower($films['stars'][3]).')<br/>';
            
        }
        
}

getInfoFromGenres('comedy');


			
				