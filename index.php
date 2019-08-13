<?php
/*
    (c) Daphné Augier 2019
*/

require_once './vendor/autoload.php';
require_once 'config.php';

	/* retrieve all rows from cities */
	$query = "SELECT id, name, photo, description FROM cities";
	
	if ($stmt = $link->prepare($query)) {
	    $stmt->execute();
	    $stmt->bind_result($id, $name, $photo, $desc);
//	    $count = 0;
	    while ($stmt->fetch()) {
	        $cities[] = ['id' => $id, 'name' => $name, 'photo' => $photo, 'description' => $desc];
//	        $count++;
	    }
/*	
	    $count = 3 - $count % 3;
	    if ($count <3){
	        for ($i=0;$i<$count;$i++){
	            $cities[] = ['id' => 0, 'name' => 'City', 'photo' => 'blanc.gif', 'description' => ''];
	        }    
        }
    */
	    $stmt->close();
    }
    

echo $twig->render('index.html', ['cities' => $cities]);

?>
