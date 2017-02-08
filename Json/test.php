<?php
   include('db.php'); 

     if(isset($_POST['getid'])){
        $id = $_POST['getid'];
        $query=mysql_query("SELECT firstName,lastName,email FROM json.employee_profile where id=$id");
        $row =mysql_fetch_assoc($query);
        $firstname=$row['firstName'];
        $lastname=$row['lastName'];
        $email=$row['email'];
        $xdata = array(
                                 'firstname'    => $firstname,
                                 'lastname'    => $lastname,
                                 'email'    => $email,
  
                                 );
        echo json_encode($xdata);
       
    }

   if(isset($_POST['getvalue'])){
        $id = $_POST['getvalue'];
        $query=mysql_query("SELECT mobile,companyname FROM json.employee_details where slno=$id");
        $row =mysql_fetch_assoc($query);
        $mobile=$row['mobile'];
        $name=$row['companyname'];
        $ydata = array(
                                 'mobile'    => $mobile,
                                 'companyname'    => $name,
                                 );
        echo json_encode($ydata);
       
    }
     ?>