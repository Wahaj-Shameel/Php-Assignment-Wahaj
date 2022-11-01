<?php include 'header.php' ?>

<?php include 'connection.php' ?>


<?php 

    if(isset($_POST['sub'])){

        $FirstName = $_POST['firstname'];
        $LastName = $_POST['lastname'];
        $FatherName = $_POST['fathername'];
        $Gender = $_POST['gen'];
        $City = $_POST['city'];
        $Department = $_POST['department'];
        $Phone = $_POST['phone'];
        

        //Images Work Start Here

        $FileName = $_FILES['uploadphoto']['name'];
        $FileSize = $_FILES['uploadphoto']['size'];
        $FileTempLocation = $_FILES['uploadphoto']['tmp_name'];
        $FileType = $_FILES['uploadphoto']['type'];
        $Folder = 'images/'.$FileName;
        $Choosephoto = $Folder;
        
        if(file_exists($Folder)){
            echo "<script>alert('Image already Exists in the Folder.')</script>";
        }

        else{
            if(move_uploaded_file($FileTempLocation, $Folder)){
                echo "<script>alert('Image Uploaded Successfully!')</script>";
            }
            else{
                echo "<script>alert('Image Uploaded Failed.')</script>";
            }
        }
        //Images Work End Here

        $query = "insert into student (Image,FirstName,LastName,FatherName,Gender,City,Department,Phone) values ('$Choosephoto','$FirstName','$LastName','$FatherName','$Gender','$City','$Department','$Phone')";

        $res = mysqli_query($con,$query);
        if($res){
            echo "<script>alert('Data Inserted into Database Successfully!'); window.location.href = 'viewdata.php';</script>";
        }
        else{
            echo "<script>alert('Data Insertion Failed!')</script>";
        }

    }

    if(isset($_POST['update'])){

        $StdID = $_POST['Stdid']; 
        $FirstName = $_POST['firstname'];
        $LastName = $_POST['lastname'];
        $FatherName = $_POST['fathername'];
        $Gender = $_POST['gen'];
        $City = $_POST['city'];
        $Department = $_POST['department'];
        $Phone = $_POST['phone'];
        

        //Images Work Start Here

        $FileName = $_FILES['uploadphoto']['name'];
        $FileSize = $_FILES['uploadphoto']['size'];
        $FileTempLocation = $_FILES['uploadphoto']['tmp_name'];
        $FileType = $_FILES['uploadphoto']['type'];
        $Folder = 'images/'.$FileName;
        $Image = $Folder;

        if($FileName != "")
    {

        $query= "update student set  Image = '$Image',FirstName = '$FirstName',LastName = '$LastName', FatherName = '$FatherName', Gender = '$Gender',City = '$City', Department = '$Department', Phone = '$Phone' where StudentId = $StdID";

        $res = mysqli_query($con, $query);

        if($res){
            echo "<script>alert('Data Updated into Database Successfully!'); window.location.href = 'viewdata.php';</script>";
            move_uploaded_file($FileTempLocation, $Folder);
        }
        else{
            echo "<script>alert('Data Updation Failed!')</script>";
        }
    }
    else
    {
        $query= "update student set  FirstName = '$FirstName',LastName = '$LastName', FatherName = '$FatherName', Gender = '$Gender',City = '$City', Department = '$Department', Phone = '$Phone' where StudentId = $StdID";

        $res = mysqli_query($con, $query);

        if($res){
            echo "<script>alert('Data Updated into Database Successfully!'); window.location.href = 'viewdata.php';</script>";
            move_uploaded_file($FileTempLocation, $Folder);
        }
        else{
            echo "<script>alert('Data Updation Failed!')</script>";
        }

    }
}
?>

