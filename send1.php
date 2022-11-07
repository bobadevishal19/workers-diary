<!-- Send Registration form data -->
<?php


if (isset($_POST['name1']) && isset($_POST['userid'])&& isset($_POST['phone'])&& isset($_POST['profession'])) {
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
	$profession = validate($_POST['profession']);
	




	if (empty($name1) ||  empty($userid) || empty($phone)|| empty($profession)) {
		header("Location: worker.html");
	}else {

		$sql = "INSERT INTO table1(name1,userid,phone,profession) VALUES('$name1','$userid','$phone','$profession')";
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
	header("Location: worker.html");
}
?>
