<?php include 'connection.php';
$id=$_GET['id'];
$query="DELETE FROM student WHERE id = '$id'";
$data=mysqli_query($conn,$query);
if ($data){
  ?>
<script>
    alert("data Deleted Succesfully");
    window.open("http://localhost/crud2/view.php","_self")
</script>
  <?php
}  else {
    ?>
   <script type="text/javascript" >
    alert("Please Try Again")
   </script>i
    <?php
}
?>
