<?php
if(isset($_SESSION))
{
	session_destroy();
}
echo "<script>alert('you are logged out')</script>";
header('location: index.html');
?>
/*
<?php
//here it is all about reports, they can be viewed only by the adminstrators;
require'connect.php';



$sql = "SELECT `id`,`username`,`email`,`date`,`location`,`session` FROM `bookings` WHERE id=1";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();

}

$conn->close();

if(isset($_POST['next']))
{
    $id=1;
    while ($id > 1) {
        $id++;
        $sql = "SELECT `id`,`username`,`email`,`date`,`location`,`session` FROM `bookings` WHERE id=2";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {

            $row = $result->fetch_assoc();

        }
        $conn->close();
    }
}
?>

*/
