<!DOCTYPE html>
<html >
<head>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</head>
<body>
   <p>Date From :
    <input type="text" id="TextBox1" class="datepicker" />
</p>
<p>Date To :
    <input type="text" id="TextBox2" class="datepicker" />
</p>
<p>Difference :
    <button type="button" onclick="showdiff()" >Show</button>
</p>
 <div>
        <input type="checkbox" class="leave" name="leave" value="firsthalf">First half<br>
        <input type="checkbox" class="leave" name="leave" value="secondhalf">Second half<br>
       
</div>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
 <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript">
$(document).ready(function(){
   $( ".datepicker" ).datepicker();

   });
function showdiff()
{
    var fromdate = new Date($('#TextBox1').val());
    var frmdate = fromdate;
    var todate = new Date($('#TextBox2').val());
    var tdate = todate;
    
    
       var days = new Date(todate - fromdate);
       var diff = (days/ (1000 * 60 * 60 * 24))+1;
        alert(diff);
    if(diff > 1)
    {
      $("input.leave").attr("disabled", true);
    }
    else if(diff == 1)
    {
        $('input:checkbox').prop('checked', true);
    }
}
</script>
</body>
</html>               
</html>               
 $myfile1 = fopen("totalusers.txt", "r") or die("Unable to open file!");
                                 $read = fgets($myfile1);
               $myfile = fopen("totalusers.txt", "w") or die("Unable to open file!");
                                 $txt =$read+1;
                                 $array = file('totalusers.txt'); 
                                 $array[0] = "";
                                 fwrite($myfile, $txt);