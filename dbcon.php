<?php
$_server = "localhost";
$user = "root";
$password = "";
$db = "xchat";


$con = mysqli_connect($_server,$user,$password,$db);
if($con){
?>
<script>
    alert("Connection Sucess");
</script>

<?php
}else{

    ?>
    <script>
    alert(" No Connection ");
    </script>
   <?php
}

?>