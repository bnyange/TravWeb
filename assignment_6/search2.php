<!-- Guest-search-results.php -->
<?php
$servername = "localhost";
$username = "akamirwa";
$password = "NClQw7";
$dbname = "Group-5";
   // creating a connection
   $con = new mysqli($servername, $username, $password, $dbname);

   // to ensure that the connection is made
   if(mysqli_connect_errno())
   {
    die("Connection failed!" . mysqli_connect_errno());
   }
    if (isset($_POST['id2'])){
   $id = mysqli_real_escape_string($con, $_POST['id2']);
   //creating a query

   //$query = "SELECT * FROM Users WHERE id < '$id'";
   $query = "SELECT * FROM User WHERE gender = 'female'";
   $result = mysqli_query($con, $query);
   if($result){
      echo "<ul>";
   while ($row = $result->fetch_assoc()) {
       $field1name = $row["id"];
       //$field1name = $row["gender"];
       echo "<li><a href='display2.php?id=$field1name'>$field1name</a></li>";
       //echo "<li><a href='display2.php?gender=$field1name'>$field1name</a></li>";
    }
   echo "</ul>";
}
else{
    echo "Not found";
}
    }
?>
<!-- <a href = "search.html">GO BACK TO SEARCH</a> -->



