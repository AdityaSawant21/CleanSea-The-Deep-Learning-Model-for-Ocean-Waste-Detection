<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oceanwaste";


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to database log22";

$email = $_POST['Email1'];
$password = $_POST['password1'];

$sqlquery = " select name from usertable where email = '$email' && password = '$password'";

$result = mysqli_query($conn, $sqlquery);

$num = mysqli_num_rows($result);

$row = mysqli_fetch_assoc($result);
$lognm = $row['name'];


if($num == 1)
{ ?>
        <script> var a = '<?php echo $lognm; ?>';
        alert('Welcome  '+a);
        window.location='hm.php';
        </script>
<?php
}
else
{
echo "<script> alert('Invalid Email Address');window.location='index.php';</script>";
}

?>