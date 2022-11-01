<?php include 'header.php' ?>
<?php include 'connection.php' ?>

<style>
    table tr{
        color: #3a76cb;
    font-weight: bold;
    }
</style>

<?php 

$query = "Select * from student";

if(isset($_GET['srch'])){
    $search = $_GET['search'];
    $query = "Select * from student where FirstName like '%$search%' or LastName like '%$search%' or FatherName '%$search%' or Gender like '%$search%' or City like '%$search%' or 	Department like '%$search%' or 	Phone like '%$search%'";};

($result = mysqli_query($con, $query)) or die('Incorrect Query.');
$rowcount = mysqli_num_rows($result);
if($rowcount > 0){
    ?>

            <form action = "" method = "get">
                <div class="input-group col-lg-6 container mb-5 mt-3">
                    <input type="text" class="form-control" placeholder="Search" name = "search">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary" name = "srch" >Search</button>
                        <a href="ViewData.php" class = "btn btn-primary ml-3">Reset</a>
                    </div>
                        
                </div>
                
            </form>

    

    <table class = "container table table-bordered ">

        <tr>
            <th>Image</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Father Name</th>
            <th>Gender</th>
            <th>City</th>
            <th>Department</th>
            <th>Phone</th>
        </tr>
        <?php while ($data = mysqli_fetch_assoc($result)) {
            echo '<tr>'; ?> 
                    <td ><img src="<?= $data['Image'] ?>" style="margin-left:12px; height: 65px; width:65px;"></td>      
                    <td><?= $data['FirstName'] ?></td>
                    <td><?= $data['LastName'] ?></td>
                    <td><?= $data['FatherName'] ?> </td>
                    <td><?= $data['Gender'] ?> </td>
                    <td><?= $data['City'] ?> </td>
                    <td><?= $data['Department'] ?> </td>
                    <td><?= $data['Phone'] ?> </td>
                    <td><a href="edit.php?id=<?= $data['StudentId'] ?>" class = "btn btn-primary">Edit</a></td>
                     <td><a href="viewdata.php?delid=<?= $data['StudentId'] ?>" class = "btn btn-danger">Delete</a></td>
           <?php echo '</tr>';
        } ?>
 

    </table>
    

<?php
 } 
else {echo '<p>No Records Found </p>';} 

    error_reporting(0);

    $DelID =  $_GET['delid'];
        $quer =  "delete from student where StudentId = $DelID";

    $res = mysqli_query($con,$quer);
    


    if ($res) {
        echo "<script> alert('Data Deleted')</script>";
    } else {
        echo "<script> alert('Data Deletion Failed') </script>";
    }
    
?>



<?php include 'footer.php'?>
