<?php
/*
    (c) Daphné Augier 2019
*/

require_once './vendor/autoload.php';
require_once 'config.php';

print_r($_POST);
	/**	CITIES **/
	/* retrieve all rows from cities */
	$query = "SELECT id, name, photo, description FROM cities WHERE navbar>0 ORDER BY navbar";

	
	if ($stmt = $link->prepare($query)) {
	    $stmt->execute();
	    $stmt->bind_result($id, $name, $photo, $desc);

	    while ($stmt->fetch()) {
	        $cities[] = ['id' => $id, 'name' => $name, 'photo' => $photo, 'description' => $desc];

	    }

	    $stmt->close();
	}
	
	$query = "SELECT id, name, photo, description FROM cities ORDER BY name";
	
	
	if ($stmt = $link->prepare($query)) {
	    $stmt->execute();
	    $stmt->bind_result($id, $name, $photo, $desc);

	    while ($stmt->fetch()) {
	        $all_cities[] = ['id' => $id, 'name' => $name, 'photo' => $photo, 'description' => $desc];

	    }

	    $stmt->close();
    }
	
	/** ARTISTS **/
	$query = "SELECT id, name, photo, description FROM artists WHERE navbar>0 ORDER BY navbar";

	
	if ($stmt = $link->prepare($query)) {
	    $stmt->execute();
	    $stmt->bind_result($id, $name, $photo, $desc);

	    while ($stmt->fetch()) {
	        $artists[] = ['id' => $id, 'name' => $name, 'photo' => $photo, 'description' => $desc];

	    }

	    $stmt->close();
	}
	
	$query = "SELECT id, name, photo, description FROM artists ORDER BY name";
	
	
	if ($stmt = $link->prepare($query)) {
	    $stmt->execute();
	    $stmt->bind_result($id, $name, $photo, $desc);

	    while ($stmt->fetch()) {
	        $all_artists[] = ['id' => $id, 'name' => $name, 'photo' => $photo, 'description' => $desc];

	    }

	    $stmt->close();
    }

echo $twig->render('index.html', ['cities' => $cities, 'all_cities'=> $all_cities, 'artists' => $artists, 'all_artists' => $all_artists]);
 
?>
