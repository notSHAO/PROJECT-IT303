<?php
    require '../connection/dbconnect.php';

    if(isset($_POST['submitInfo']))
    {
        $fname=mysqli_real_escape_string($connect,$_POST['fullname']);
        $username=mysqli_real_escape_string($connect,$_POST['username']);
        $email=mysqli_real_escape_string($connect,$_POST['email']);
        $password=mysqli_real_escape_string($connect,$_POST['userpass']);
    
        if($fname != '' || $username !='' || $email!=''|| $password !='')
        {
            $result=mysqli_query($connect,"INSERT INTO userinfo(fullname,username,email,userpass) 
            VALUES('$fname','$username','$email','$password')");
            if($result){
                header("location: ../pages/loginpage.php");
                exit(0);
            }
        }
    }
   
    session_start();
    if(isset($_POST['logInfo'])){
       $email= $_POST['email'];
       $password= $_POST['userpass'];
       $adminQuery=mysqli_query($connect,"SELECT * from apadmin WHERE adminEmail='$email'");
       $nu=mysqli_num_rows($adminQuery);
       $query = mysqli_query($connect, "SELECT * from userinfo WHERE email= '$email'");
       $no = mysqli_num_rows($query);
       if($no>0){
           $data = mysqli_fetch_assoc($query);
           if($data['userpass']==$password){
                $_SESSION['email']=$email;
               header("location: ../pages/homeloginpage.php");
           }
           else{
               echo'<script> window.location.href = "../pages/loginpage.php";alert("Invalid Username or Password.")</script>';
           }
       }
       else if($nu>0){
            $adminData=mysqli_fetch_assoc($adminQuery);
            if($adminData['adminPass']==$password){
                header("location: ../pages/homeloginadmin.php");
            }
       }
           else{
               echo '<script> window.location.href = "../pages/loginpage.php";alert("Invalid Username or Password")</script>'; 
           }
       }
       if(isset($_POST['emailCon'])){
        $email= $_POST['email'];
        $query = mysqli_query($connect, "SELECT * from userinfo WHERE email= '$email'");
       $no = mysqli_num_rows($query);
       if($no>0){
           $data = mysqli_fetch_assoc($query);
           if($data['email']==$email){
                $_SESSION['email']=$email;
               header("location: ../pages/forgotpage.php");
           }
           else{
               echo'<script> window.location.href = "../pages/emailcon.php";alert("Invalid Username or Password.")</script>';
           }
       }
       else{
        echo'<script> window.location.href = "../pages/emailcon.php";alert("The Email is Not Registered.")</script>';
    }
    }
       if(isset($_POST['forgotPass']) && isset($_POST['newpass'])) {
        $email = $_POST['email'];
        $newPassword = $_POST['newpass'];
        $confirmEmail="SELECT userinfo where $email='$email'";
        $updatePasswordQuery = "UPDATE userinfo SET userpass='$newPassword' WHERE email='$email'";  
        $run_query=mysqli_query($connect,$updatePasswordQuery);
        if($run_query){
            echo '<script> window.location.href = "../pages/loginpage.php";alert("Password Changed!")</script>';
      
        }
        else {
            echo "Email not provided.";
        }
    } 

    if(isset($_POST['changePass']) && isset($_POST['newpass'])) {
        $email = $_POST['email'];
        $newPassword = $_POST['newpass'];
        $updatePasswordQuery = "UPDATE userinfo SET userpass='$newPassword' WHERE email='$email'";  
        $run_query=mysqli_query($connect,$updatePasswordQuery);
        if($run_query){
            echo '<script> window.location.href = "../pages/profile.php";alert("Password Changed!")</script>';
      
        }
        else {
            echo "Email not provided.";
        }
    }

    if(isset($_POST['submitadd'])){

        $apartmentName=mysqli_real_escape_string($connect,$_POST['apartmentName']);
        $apartmentPrice=mysqli_real_escape_string($connect,$_POST['apartmentPrice']);
        $fbPage=mysqli_real_escape_string($connect,$_POST['fbPage']);
        $contactNum=mysqli_real_escape_string($connect,$_POST['contactNum']);
        $apartmentLoc=mysqli_real_escape_string($connect,$_POST['apartmentLoc']);
        $apartmentDesc=mysqli_real_escape_string($connect,$_POST['apartmentDesc']);
        $fileName=$_FILES['apartmentImage']['name'];
        $tempname=$_FILES['apartmentImage']['tmp_name'];
        $fileName1=$_FILES['apartmentImage1']['name'];
        $tempname1=$_FILES['apartmentImage1']['tmp_name'];
        $fileName2=$_FILES['apartmentImage2']['name'];
        $tempname2=$_FILES['apartmentImage2']['tmp_name'];
        $fileName3=$_FILES['apartmentImage3']['name'];
        $tempname3=$_FILES['apartmentImage3']['tmp_name'];
        $folder= '../img/'.$fileName;
    
        if( $apartmentName != '' || $apartmentPrice!= '' || $fbPage != '' || $contactNum !='')
        {
    
            $result = mysqli_query($connect,"INSERT INTO apartments(apartmentName,apartmentPrice,fbPage,
            contactNum,apartmentImage,apartmentLoc,apartmentDesc,apartmentImage1,apartmentImage2,apartmentImage3)
            VALUES ('$apartmentName','$apartmentPrice','$fbPage','$contactNum','$fileName','$apartmentLoc','$apartmentDesc','$fileName1','$fileName2','$fileName3')");
    if($result){
    header("location: ../pages/homeloginadmin.php");
    exit(0);
    } 
        }
    }

    if(isset($_POST['deleteData'])){
        $userID=mysqli_real_escape_string($connect,$_POST['deleteData']);
        $query="DELETE FROM userinfo WHERE userID = $userID";
        if (mysqli_query($connect, $query)) {
            
            header("Location: ../pages/profileadmin.php");
            exit();
        } 
    }

    if(isset($_POST['deleteApart'])){
        $apartmentID=mysqli_real_escape_string($connect,$_POST['deleteApart']);
        $query="DELETE FROM apartments WHERE apartmentID = $apartmentID";
        if (mysqli_query($connect, $query)) {
            header("Location: ../pages/homeloginadmin.php");
            exit();
        } 
    }

    if(isset($_POST['editAcc'])){
        $uID=mysqli_real_escape_string($connect,$_POST['userID']);
        $fname=mysqli_real_escape_string($connect,$_POST['fullname']);
        $username=mysqli_real_escape_string($connect,$_POST['username']);
        $email=mysqli_real_escape_string($connect,$_POST['email']);
        $password=mysqli_real_escape_string($connect,$_POST['userpass']);
    
      
        $query="UPDATE userinfo SET fullname='$fname', username='$username', email='$email', userpass='$password' WHERE userID='$uID'";
        $run_query=mysqli_query($connect,$query);
            if($run_query){
                header("location: ../pages/profileadmin.php");
                exit(0);
            }
    }
    
    if(isset($_POST['editApart'])){
        $aID=mysqli_real_escape_string($connect,$_POST['apartmentID']);
        $apartmentName=mysqli_real_escape_string($connect,$_POST['apartmentName']);
        $apartmentPrice=mysqli_real_escape_string($connect,$_POST['apartmentPrice']);
        $fbPage=mysqli_real_escape_string($connect,$_POST['fbPage']);
        $contactNum=mysqli_real_escape_string($connect,$_POST['contactNum']);
        $apartmentLoc=mysqli_real_escape_string($connect,$_POST['apartmentLoc']);
        $apartmentDesc=mysqli_real_escape_string($connect,$_POST['apartmentDesc']);

        $fileName=$_FILES['apartmentImage']['name'];
        $tempname=$_FILES['apartmentImage']['tmp_name'];
        $folder= '../img/'.$fileName;

        $fileName1=$_FILES['apartmentImage1']['name'];
        $tempname1=$_FILES['apartmentImage1']['tmp_name1'];
        $folder= './PROJECT/img/'.$fileName1;

        $fileName2=$_FILES['apartmentImage2']['name'];
        $tempname2=$_FILES['apartmentImage2']['tmp_name2'];
        $folder= '../img/'.$fileName2;

        $fileName3=$_FILES['apartmentImage3']['name'];
        $tempname3=$_FILES['apartmentImage3']['tmp_name3'];
        $folder= '../img/'.$fileName3;
       
       if (!file_exists('PROJECT/imgs/')) {
        mkdir('../img/', 0777, true);
    }
       $query="UPDATE apartments SET apartmentName='$apartmentName', apartmentPrice='$apartmentPrice', 
        fbPage='$fbPage', contactNum='$contactNum',apartmentImage='$fileName', apartmentLoc='$apartmentLoc', apartmentDesc='$apartmentDesc', apartmentImage1='$fileName1',apartmentImage2='$fileName2',apartmentImage3='$fileName3' WHERE apartmentID='$aID'";
        $run_query=mysqli_query($connect,$query);
           if($run_query){ 
               header("location: ../pages/homeloginadmin.php");
                exit(0);
           }
        }
 
?> 