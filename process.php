<?php 

    if(isset($_POST['btn-send']))
    {
       $Name = $_POST['Name'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($Name) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:contact.php?error');
       }
       else
       {
           $to = "marklippett@hotmail.co.uk";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:contact.php?success");
           }
       }
    }
    else
    {
        header("location:contact.php");
    }
?>