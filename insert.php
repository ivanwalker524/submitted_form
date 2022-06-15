<?php
$server = "localhost";
$username ="root";
$password ="";
$dbname ="ivan";

$conn =mysqli_connect($server, $username, $password, $dbname);
if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['nationality']) && !empty($_POST['email']) && !empty($_POST['phone'])){
        $name = $_POST['name'];
        $nationality =$_POST['nationality'];
        $email = $_POST['email'];
        $phone =$_POST['phone'];
        $query = "INSERT INTO dummy1 (name,nationality,email,phone) values('$name','$nationality','$email','$phone')";
        $run = mysqli_query($conn,$query) or die(mysqli_error());
        if ($run){
            echo " Form submitted successfully";
        }
            else 
                echo "Form not submitted";
        }
        else{
            echo " all fields required";
    } 
}
echo "<br><br>"
?>
<?php
session_start();
if (isset($_POST['name'])){
   $name=$_POST['name'];
    $nationality=$_POST['nationality'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    echo '<br />';
}
echo "Name: $name <br><br>";
echo "Nationality: $nationality <br><br>";
echo "Email: $email <br><br>";
echo "Phone: $phone <br><br>";
?>
