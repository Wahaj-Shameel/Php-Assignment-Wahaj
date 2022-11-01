
function validation(){
    var StdFirstName = document.getElementById('FirstName').value;
    var StdLasttName = document.getElementById('LastName').value;
    var StdFatherName = document.getElementById('FatherName').value;
    var StdPhone = document.getElementById('phone').value;


    // Regular Expressions
    var StdudentPattern =/^[a-zA-Z0-9 ,.\/-]{3,}$/
    var Phonepattern =/^[0-9-]{1,12}$/

    if(StdudentPattern.test(StdFirstName)){
        document.getElementById('FirstName').style.borderColor="";
    }
    else{
        document.getElementById('FirstName').style.borderColor="red";
        alert("Please Enter Your First Name which at least 3 letters.");
        return false;
    }

    if(StdudentPattern.test(StdLasttName)){
        document.getElementById('LastName').style.borderColor="";
    }
    else{
        document.getElementById('LastName').style.borderColor="red";
        console.log("Please Enter Your Last Name which at least 3 letters.");
        return false;
    }

    if(StdudentPattern.test(StdFatherName)){
        document.getElementById('FatherName').style.borderColor="";
    }
    else{
        document.getElementById('FatherName').style.borderColor="red";
        alert("Please Enter Your Compelete Father Name ");
        return false;
    }

    if(Phonepattern.test(StdPhone)){
        document.getElementById('phone').style.borderColor="";
    }
    else{
        document.getElementById('phone').style.borderColor="red";
        alert("Phone Number is invalid ");
        return false;
    }
     
}