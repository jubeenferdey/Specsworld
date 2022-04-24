<?php
error_reporting(0);
?>
<?php
$msg = "";
$conn = mysqli_connect("localhost","root","","glass");
if(!$conn){
    die("Error while connecting to the database");
} else{
// If upload button is clicked ...
if (isset($_POST['submit'])) {

    $glassName = $_POST['glassName'];
    $glassPower = $_POST['glassPower'];
    $glassType = $_POST['glassType'];
    $glassPrice = $_POST['glassPrice'];
    $glassShape = $_POST['glassShape'];

    $filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];	
	$folder = "../uploads/".$filename;

    $query = "INSERT INTO glasses  (name,power,type,price,shape,image) VALUES 
    ('$glassName', '$glassPower', '$glassType', '$glassPrice', '$glassShape', '$filename')";
    if(mysqli_query($conn, $query)){
    header("Location: ../pages/productAddedPrompt.php");
    } else {
        echo "There has been an Error Occurred during insertion.".mysqli_error($conn)."<br>";
    }
		
    // Now let's move the uploaded image into the folder: image
		if (move_uploaded_file($tempname, $folder)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
	}
}
}
?>



