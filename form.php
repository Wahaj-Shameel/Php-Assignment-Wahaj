<?php  include 'header.php' ?>
<?php include 'connection.php' ?>


<style>
    .StdRegis{
        color: #3a76cb;
        
}
label{
    color: #3a76cb;
    font-weight: bold;
    
}

input{
    color: #3a76cb;
}
.subbtn{
    background:#3a76cb;
    color:#fff;
    font-weight: bold;

}

</style>

<?php 


if(isset($_POST['uploadImg'])){
    
    $FileName = $_FILES['uploadphoto']['name'];
    $FileSize = $_FILES['uploadphoto']['size'];
    $FileTempLocation = $_FILES['uploadphoto']['tmp_name'];
    $FileType = $_FILES['uploadphoto']['type'];
}

?> 

<div class="container bg-white col-md-8">

    <h3 class="StdRegis">Student Registration</h3>


    <form action="crud.php" onsubmit="return validation()" method="post" enctype="multipart/form-data" >   

        <div class="row mt-2">


            <div class="col-md-4">
                <div class="form-group mt-2">

                    <label for="" class="mb-1">First Name:</label>
                    
                    <input type="text" name="firstname" id="FirstName" placeholder="First Name" class="form-control">
                </div>
            </div>
            
            <div class="col-md-4">
            <div class="form-group mt-2">
                    <label for="" class="mb-1">Last Name:</label>
                    
                    <input type="text" name="lastname" id="LastName" placeholder="Last Name" class="form-control ">
                </div>
            </div>
   
            <div class="col-md-4">
        
        <div class=" user-profile-image">
                <input  type="file" id="Pro_Image" name="uploadphoto" style="visibility: hidden;" required/>       
                <img src="images/upload.jpg" style=" border-radius:10px; margin-top:-30px; height: 120px; width:120px; Border: 2px solid #3a76cb" id="UserImage"> 
                <p style="Color: #3a76cb; font-weight: bold;">Upload Your Photo</p>
                 
                </div>   
                </div> 
    
        </div>

        <div class="row">

        <div class="col-md-4">
            <div class="form-group mt-2">
                    <label for="" class="mb-1">Father Name:</label>
                    
                    <input type="text" name="fathername" id="FatherName" placeholder="Father Name" class="form-control ">
                </div>
            </div>

            <div class="col-md-6">
            

                <div class="form-group mt-2">
                    <label for="gen" class="mb-1">Gender:</label> 
                        <div class="form-check-inline form-control  ml-5">
                                <label class="form-check-label">
                                Male: <input type="radio" class="form-check-input" name="gen" value = "Male" required>
                                </label>
                                <label class="form-check-label">
                                Female: <input type="radio" class="form-check-input" name="gen" value = "Female" required>
                                </label>
                        </div>
                            
                </div>
                    
            </div>
    
        </div>

        <div class="row">


            <div class="col-md-4">
                <div class="form-group">
                    <label for="city" class="mt-2 mb-1">Select City:</label>
                    <select class="form-control" id="city" name = "city" required>
                        <option value="">--Select--</option>
                        <option value = "Karachi">Karachi</option>
                        <option value = "Lahore">Lahore</option>
                        <option value = "Islamabad">Islamabad</option>
                        <option value = "Peshawar">Peshawar</option>
                    </select>
                </div>
            </div>

        </div>

        <div class="row">

        <div class="col-md-4">
                <div class="form-group">
                    <label for="city" class="mt-2 mb-1">Select Department:</label>
                    <select class="form-control" id="Department" name = "department" required>
                        <option value="">--Select--</option>
                        <option value = "SoftwareEngineering">Software Engineering</option>
                        <option value = "ComputerScience">Computer Science</option>
                        <option value = "Commerce">Commerce</option>
                        <option value = "Medical">Medical</option>
                    </select>
                </div>
            </div>


            <div class="col-md-6">
            <label for="" class="mt-2 mb-1">Phone:</label>                
                <input type="number" id="phone" name="phone" class="form-control" placeholder="Enter Your Phone Number">

            </div>   

        </div>

        

        

        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="subbtn   form-control mb-4 mt-3" name="sub">Submit</button>

            </div>
        </div>
    </form>
</div>


<?php  include 'footer.php' ?>

<script>
        $(document).ready(function () {


            

            $("#UserImage").click(function () {
                $("#Pro_Image").trigger('click')
            })


            $("#Pro_Image").change(function () {
                if (this.files && this.files[0]) {
                    var fileReader = new FileReader();
                    fileReader.readAsDataURL(this.files[0]);
                    fileReader.onload = function (x) {

                        $("#UserImage").attr('src', x.target.result);
                    }
                }
            })
        })
    </script>



