<?php  include 'header.php' ?>
<?php include 'connection.php' ?>

<?php 

error_reporting(0);
$id = $_GET['id'];
$query = "Select * from student where StudentId = $id";
$Getdata = mysqli_query($con, $query);
$result = mysqli_fetch_assoc($Getdata);

?> 

<div class="container bg-white col-md-8">
    <h3 class="StdRegis">Edit Student Registration</h3>

    

    <form action="crud.php" method="post" enctype="multipart/form-data">

    <div class="row">    
                    
            <img src="<?= $result['Image']?>" style="margin-left:78%; border-radius:10px; margin-top:-30px; height: 120px; width:120px;">            
        </div>

        <div class="row mt-2">
            <input type="hidden" name="Stdid" value="<?= $result['StudentId']?>">
        </div>
        

        <div class="row mt-2">
            <div class="col-md-4">
                <div class="form-group mt-2">

                    <label for="" class="mb-1">First Name:</label>
                    
                    <input type="text" name="firstname" id="FirstName" placeholder="First Name" class="form-control" value="<?= $result['FirstName'] ?>">
                </div>
            </div>
            
            <div class="col-md-4">
            <div class="form-group mt-2">
                    <label for="" class="mb-1">Last Name:</label>
                    
                    <input type="text" name="lastname" id="LastName" placeholder="Last Name" class="form-control" value="<?= $result['LastName'] ?>">
                </div>
            </div>

            <div class="col-md-4">

                
                <div class="form-group mt-2">
                <label for="" class="mb-1">Choose Photo:</label>
                    <input type="file" class="form-control" name="uploadphoto" value="<?= $result['Image'] ?>">
                </div>
            </div>

            

    
        </div>

        <div class="row">

        <div class="col-md-4">
            <div class="form-group mt-2">
                    <label for="" class="mb-1">Father Name:</label>
                    
                    <input type="text" name="fathername" id="FatherName" placeholder="Father Name" class="form-control " value="<?= $result['FatherName'] ?>">
                </div>
            </div>

            <div class="col-md-6">
            

                <div class="form-group mt-2">
                    <label for="gen" class="mb-1">Gender:</label> 
                        <div class="form-check-inline form-control  ml-5">
                                <label class="form-check-label">
                                Male: <input type="radio" class="form-check-input" name="gen" value = "Male" <?php if($result['Gender'] == 'Male'){ echo 'checked';} ?>>
                                </label>
                                <label class="form-check-label">
                                Female: <input type="radio" class="form-check-input" name="gen" value = "Female" <?php if($result['Gender'] == 'Female'){ echo 'checked';} ?>>
                                </label>
                        </div>
                            
                </div>
                    
            </div>
    
        </div>

        <div class="row">


            <div class="col-md-4">
                <div class="form-group">
                    <label for="city" class="mt-2 mb-1">Select City:</label>
                    <select class="form-control" id="city" name = "city">
                        <option value="">--Select--</option>
                        <option value = "Karachi" <?php if($result['City'] == 'Karachi'){echo 'selected';} ?>>Karachi</option>
                        <option value = "Lahore" <?php if($result['City'] == 'Lahore'){echo 'selected';} ?>>Lahore</option>
                        <option value = "Islamabad" <?php if($result['City'] == 'Islamabad'){echo 'selected';} ?>>Islamabad</option>
                        <option value = "Peshawar" <?php if($result['City'] == 'Peshawar'){echo 'selected';} ?>>Peshawar</option>
                    </select>
                </div>
            </div>

        </div>

        <div class="row">

        <div class="col-md-4">
                <div class="form-group">
                    <label for="city" class="mt-2 mb-1">Select Department:</label>
                    <select class="form-control" id="Department" name = "department">
                        <option value="">--Select--</option>
                        <option value = "SoftwareEngineering" <?php if($result['Department'] == 'SoftwareEngineering'){echo 'selected';} ?>>Software Engineering</option>
                        <option value = "ComputerScience" <?php if($result['Department'] == 'ComputerScience'){echo 'selected';} ?>>Computer Science</option>
                        <option value = "Commerce" <?php if($result['Department'] == 'Commerce'){echo 'selected';} ?>>Commerce</option>
                        <option value = "Medical" <?php if($result['Department'] == 'Medical'){echo 'selected';} ?>>Medical</option>
                    </select>
                </div>
            </div>


            <div class="col-md-6">
            <label for="" class="mt-2 mb-1">Phone:</label>                
                <input type="number" id="" name="phone" class="form-control" placeholder="Enter Your Phone Number" value="<?= $result['Phone'] ?>">

            </div>   

        </div>

        

        

        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="subbtn btn btn-dark form-control mb-4 mt-3" name="update">Update</button>

            </div>
        </div>
    </form>
</div>


<?php  include 'footer.php' ?>
