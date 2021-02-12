<?php  
if( isset($_POST['add']) ){
	$title = $_POST['title'];
	$description = $_POST['description'];
	$image = $_POST['image'];
	$price = $_POST['price'];

	$link = mysqli_connect('localhost', 'root', '', 'store');

	$sql = "INSERT INTO `products`( `title`, `image`, `description`, `price`) VALUES ('$title','$image','$description','$price')";

	$result = mysqli_query($link, $sql);

	mysqli_close($link);

}

if( isset($_POST["update"]) ){
	echo "ապրանքը թարմացնելու համար նախատեսված sql կոդը գրեք ինքներդ (UPDATE)";

	$id = $_POST['id'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	$image = $_POST['image'];	

	$db = mysqli_connect("localhost", "root", "", "store");

	// գրեք sql կոդը այստեղ(UPDATE)
	// classroom-ի 6-րդ դասի մեջ նայիր թե ինչպես է պետք գրել UPDATE հրամանը
	// ՈՒՇԱԴՐՈՒԹՅՈՒՆ կդարձնես չակերտներին
	$sql = "UPDATE `products` SET `title`='$title',`image`='$image',`description`='$description' WHERE id = $id";
	$r = mysqli_query($db, $sql);

	if($r){
		echo "News Successfuly Updated";
	}
	else{
		echo "db error";
	}
}



// Սա ապրանքը բազայից ջնջելու համար նախատեսված կոդն է
if( isset($_GET['action']) && $_GET['action'] == "delete"){
	$id = $_GET['id'];

	$db = mysqli_connect("localhost", "root", "", "store");

	$sql = "DELETE FROM products WHERE id = $id";

	$r = mysqli_query($db, $sql);
}




?>