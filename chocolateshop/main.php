<?php

$host_name = 'localhost';
$name = 'root';
$pass = '';
$db = 'nazim';

$con= mysqli_connect($host_name,$name,$pass) or die ('databae error!');
mysqli_select_db($con,$db);


    if(isset($_POST['reg']))
     {
         $name = $_POST['name'];
         $address = $_POST['address'];
         $phone = $_POST['phone'];
         $email = $_POST['email'];
         $pass = md5($_POST['pass']);
         $cpass =md5($_POST['cpass']);
         if($pass == $cpass){
             
             $query =" select*from user where email='$email' ";
             $query_check = mysqli_query($con,$query);
             if($query_check){
                 if(mysqli_num_rows($query_check) > 0){ 
                         $msg = "2";
                         header("Location:signupp.php?msg=".$msg);   
                    }else{ 
                     $insertion = "insert into user values('$name','$address','$phone','$email','$pass') ";
                     $run = mysqli_query($con,$insertion);
                     if($run){
                         $msg = "1";
                         header("Location:loginp.php?msg=".$msg);
                     }else{  
                         $msg = "3";
                         header("Location:signupp.php?msg=".$msg);
//                     echo"
//                     <script>
//                         alert ('Connction Faild');
//                         window.location.href='index.php';
//                     </script>
//                     ";   //run else    
                     }
                     //email check else
                 }
              }else{
                   $msg = "4";
                   header("Location:signupp.php?msg=".$msg);
                   //query check
                   }
            }else{
             $msg = "5";
            header("Location:signupp.php?msg=".$msg);
            //passowr else
             }
     }else{
         //isset ar else
  }

                               //login code 

session_start(); 
if(isset($_POST['login'])){
         $email = $_POST['email'];
         $pass =md5($_POST['pass']);

       $query =" select*from user where email='$email' AND pass='$pass' ";
       $check = mysqli_query($con,$query);
    
    if($check){
        if(mysqli_num_rows($check) > 0){
            if($email == "admin@gmail.com"){
                
                header("location:admin.php");
            }else if($email == "employee@gmail.com"){
                header("location:employee.php");
            }
            else{
                $_SESSION['User']=$_POST['email'];
             header("location:person.php");
            }
            
             
        }else{
            $msg = "51";
            header("Location:loginp.php?msg=".$msg); 
           //email passowr check
        }
    }else{
        $msg = "52";
        header("Location:loginp.php?msg=".$msg); 
       //query else
      }
 }else{
    //login click check
 }
  

                //Message send

if(isset($_POST['sendd'])){
         $name = $_POST['nname'];
         $email =$_POST['eemail'];
         $mess =$_POST['mess'];
    
       $query ="insert into message values('$name','$email','$mess') ";
       $check = mysqli_query($con,$query);
    
    if($check){
            $msg = "99";
            header("Location:index.php?msg=".$msg); 
    }else{
        
      }
 }else{
    
 }

?>