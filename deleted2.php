<html>
    <head>
      <style>

       body{
         background-image: url("./home.jpg");
        }
        table {
 border-collapse: collapse;
 width: 100%;
}

th, td {
 text-align: left;
 padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
 background-color: #04AA6D;
 color: white;
}
          </style>
      <title> Delete Announcement</title></head>
    <body><center>
        <table border=1px cellspacing=10 cellpadding=10 >
         <tr>
          <th style="">Name</th>
          <th style="">userid</th>
          <th style="">Phone</th>
          <th style="">profession</th>
          
</tr>

<?php
include("db_conn.php");
error_reporting(0);
$query="SELECT * FROM table1";
$data= mysqli_query($conn,$query);
$total=mysqli_num_rows($data);


if($total !=0)
{
     while($result=mysqli_fetch_assoc($data)){
     echo "
        <tr>
        <td>". $result['name1'] ."</td>
        <td>". $result['userid'] ."</td>
        <td>". $result['phone'] ."</td>
        <td>". $result['profession'] ."</td>
        
        <td> <button style='background-color:orange'><a href= 'delete.php?rn=$result[phone]' style='text-decoration:none;color:white;'>Delete</a></button></td>
        </tr>

     ";
     }
}

else{
    echo "no records found";
}
?>

</table>
</body>
</html>
