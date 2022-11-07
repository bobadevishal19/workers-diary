<!-- Send Registration form data -->
<?php


if (isset($_POST['name1']) && isset($_POST['userid'])&& isset($_POST['phone'])&& isset($_POST['email']) && isset($_POST['gender']) && isset($_POST['address'])) {
	include 'db_conn.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name1 = validate($_POST['name1']);
	$userid = validate($_POST['userid']);
		$phone = validate($_POST['phone']);
	$email = validate($_POST['email']);
		$gender = validate($_POST['gender']);
	$address = validate($_POST['address']);





	if (empty($name1) ||  empty($userid) || empty($phone)|| empty($email) ||  empty($gender) || empty($address )) {
		header("Location: booking.html");
	}else {

		$sql = "INSERT INTO table2(name1,userid,phone,email,gender,address) VALUES('$name1', '$userid','$phone','$email','$gender','$address')";
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
	header("Location: booking.html");
}
?>
