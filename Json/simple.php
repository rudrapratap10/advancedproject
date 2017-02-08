<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
</script>

  
<script type="text/javascript">
        function showdata(value)
         {
            var id= value;
            var datastring  = 'getid='+id; 
            $.ajax({
            type: "POST", data: datastring,
            url: "test.php",
            dataType: 'json',
            success: function (data) {
                document.getElementById('firstName').value = data.firstname;    
               document.getElementById('lastName').value = data.lastname;
               document.getElementById('email').value = data.email;
            }
        });
      }
    
    </script>
    <?php include('db.php'); ?>
  <title>Form Validation</title>

  
</head>
<body>
    <div id="main">
    <header><h2>Employee Details</h2></header>
 <div id="result"></div>
    <form method="POST" action="">
     

 <table cellpadding="10">
            <tr>
                <td><label>FIRST NAME </label></td>
    	        <td><input name="firstName" type="text" id="firstName" placeholder="Enter Your Name" style="text-transform:capitalize;" /></td>
                 
            </tr>

            <tr>
                <td><label>LAST NAME </label></td>
                <td><input name="lastName" type="text" placeholder="Enter Your Name" id="lastName" style="text-transform:capitalize;" /></td>
                 
            </tr>

            <tr>
                <td><label>EMAIL ID</label></td>
                <td><input name="email" type="text" id="email" placeholder="Enter Your Email Id" /></td>
                
            </tr>

           
</table>
<br>
        	<div class="sub"><input type="button" name="Submit" id="submit" value="submit" onclick="showdata(1);"></div>
    </form>
    </div>
</body>

</html>

    
        
            
            
            
        
            
            
                
            
        
        
        
            
        
            
                
            
        






    