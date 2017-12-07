<html>
 <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
		 <link rel="stylesheet" href="assets/css/style.css">
		 <div class="form-top">
	    <div class="form-top-left">
	                        			<h3>Feedbak Rating & Comments Details</h3>
	                            		<!--<p>Enter usertype , username and password to log on:</p>-->
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-lock"></i>
	                        		</div>
		</div>
		</div>
<form action="login1.html" method="POST" target="self">		
<font color="white">
<?php
 $c=0;$d=0;$e=0;$f=0;$g=0;$total=0;
   $y1=$_GET['t'];
   $t1=$_GET['y'];
 //  echo $y1;
 //  echo $t1;
 


$con=mysql_connect("localhost","root","","feed back");
if(!$con){
echo"connection error";
}
else{

     mysql_select_db("feed back");
   
  
  $result=mysql_query("SELECT * from feedbackratinglog where subject_code='$t1'")or die("failed to query database".mysql_error());
 $n=mysql_num_rows($result);
 
 
  //echo $n."</br>";
  while($row=mysql_fetch_array($result)){
  
  $k=$row['course_code'];
  $t=$row['cycle_no'];
  // echo $row['rating_answer']."</br>";
   $total=$total+$row['rating_answer'];
   if($row['rating_answer']==1){
	   $c++;
   }
   elseif($row['rating_answer']==2){
	   $d++;
   }
   elseif($row['rating_answer']==3){
	   $e++;
   }
   elseif($row['rating_answer']==4){
	   $f++;
   }
   elseif($row['rating_answer']==5){
	   $g++;
   }
   else{
	
   }
   
   
 }
 /* echo "number of students given rating 1 are :".$c."</br>";
  echo "number of students given rating 2 are :".$d."</br>";
  echo "number of students given rating 3 are :".$e."</br>";
  echo "number of students given rating 4 are :".$f."</br>";
  echo "number of students given rating 5 are :".$g."</br>";*/
 // echo "total avg rating of all rating out of 5 is:".$total/$n."</br>";
  echo "<center><b>Rating Count</b></center></br>";
  echo "<center><font color='white'><table border='1' style='width:100%;text-align:left;border-collapse:collapse;background-color:gold;'>
  <tr style='background-color:yellowgreen;color:white;'><th>rating</th><th>countof ratings</th></tr>
  <tr><td>5</td><td>".$g."</td></tr>
  <tr><td>4</td><td>".$f."</td></tr>
  <tr><td>3</td><td>".$e."</td></tr>
  <tr><td>2</td><td>".$d."</td></tr>
  <tr><td>1</td><td>".$c."</td></tr>
  </table></font></center>";
  echo"------------------------------------------------------------------------------</br></br>"; 
   echo "<center><b>Total Rating</b></center></br>";
  echo "<center><font color='white'><table border='1' style='width:100%;text-align:left;border-collapse:collapse;background-color:gold;'>
  <tr style='background-color:yellowgreen;color:white;'><th>rating out of </th><th>total rating given</th></tr>
  <tr><td>5</td><td>".$total/$n."</td></tr>
  </table></font></center>";
  
 echo"------------------------------------------------------------------------------</br></br>";
 //echo $k;
 //echo $t;
 echo "<center><b>Comments Given</b></center></br>";
  $result1=mysql_query("SELECT * from feedbackcommentlog where course_code='$k'and cycle_no='$t' ")or die("failed to query database".mysql_error());
 $n1=mysql_num_rows($result1);
 //echo $n1;
 echo "<center><table border='1' style='width:100%;text-align:left;border-collapse:collapse;background-color:gold;'><tr style='background-color:yellowgreen;color:white;'><th>Comments</th></tr>";
  while($row1=mysql_fetch_array($result1)){
  
  
  // echo $row1['feedback_comments']."</br>";
//$total=$total+$row['rating_answer'];
   if($row1['feedback_comments']==NULL){
	  // echo "null</br>";
	  // break;
   }
   else{
	   echo "<tr><td>".$row1['feedback_comments']."</td></tr>";
   }
   
   
 
}
echo "</table></center></br></br>";
}
?>
<!--<table style="width:100%;text-align:left;border-collapse:collapse;background-color:gold;">
	<tr style="background-color:yellowgreen;color:white;">
		<th>Table Header</th>
		<th>Table Header</th>
	</tr>
	<tr>
		<td>Table cell</td>
		<td>Table cell</td>
	</tr>
	<tr>
		<td>Table cell</td>
		<td>Table cell</td>
	</tr>
</table>-->
</font>
<button type="submit" class="btn" name="logout" id="logout">Logout</button></br></br>
</form>
</html>
   


