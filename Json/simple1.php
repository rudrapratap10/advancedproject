<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
</script>

  
<script type="text/javascript">
     function showvalue(value)
         {
            var id= value;
            var datastring1  = 'getvalue='+id; 
            $.ajax({
            type: "POST", data: datastring1,
            url: "test.php",
            dataType: 'json',
            success: function (data) {
                document.getElementById('mobile').value = data.mobile;    
               document.getElementById('name').value = data.companyname;
               
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
                <td><label>Mobile Number</label></td>
    	        <td><input name="mobile" type="text" id="mobile" placeholder="Enter Your Mobile Number"  /></td>
                 
            </tr>
            <tr>
                <td><label>Company Name</label></td>
                <td><input name="name" type="text" id="name" placeholder="Enter Your company name"  /></td>
                 
            </tr>
         
           

         
           
</table>
<br>
        	<div class="sub"><input type="button" name="Submit" id="submit" value="Submit" onclick="showvalue(2);"></div>
    </form>
    </div>
</body>

</html>

    
        
            
            
            
        
            
            
                
            
        
        
        
            
        
            
                
            
        






    