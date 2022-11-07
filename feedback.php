<!-- Send Registration form data -->
<?php


if (isset($_POST['name1']) && isset($_POST['email'])&& isset($_POST['categorie'])&& isset($_POST['feedback'])) {
	include 'db_conn.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name1 = validate($_POST['name1']);
	$email = validate($_POST['email']);
	$categorie = validate($_POST['categorie']);
	$feedback = validate($_POST['feedback']);





	if (empty($name1) ||  empty($email) || empty($categorie)|| empty($feedback)) {
		header("Location:user_Feedback.html" );
	}else {

		$sql = "INSERT INTO table1(name1,email,categorie,feedback) VALUES('$name1','$email','$categorie','$feedback')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
0			?>
        <script>alert("Your response has been recorded THANK YOU !");</script>
        <?php
		}else {
			echo "Your response has not been send PLEASE TRY AGAIN !";
		}
	}

}else {
	header("Location:user_Feedback.html");
}
?>
