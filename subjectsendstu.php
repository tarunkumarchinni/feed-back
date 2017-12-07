<html>
<!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
<div class="form-bottom1">
<?php
 $cy=$_GET['cycle'];
      echo $cy;
	  $t=$_GET['stu'];
      echo $t;
	  

 if(isset($_GET['reg']))
 {
   $regulation_code=$_GET['reg'];
   $sem=$_GET['semi'];
   echo $regulation_code;
   echo $sem;
   $regulation_code=stripcslashes($regulation_code);
   $sem=stripcslashes($sem);
   
   $regulation_code=mysql_real_escape_string($regulation_code);
   $sem=mysql_real_escape_string($sem);
 
  // $student_reg_no=$id_no;
   mysql_connect("localhost","root","");
   mysql_select_db("feed back");
   $result1=mysql_query("select subject_code,subject_name from programstructure where regulation_code='$regulation_code' and semister='$sem'")or die("failed to query database".mysql_error());
    $row=mysql_fetch_array($result1);
	
	while($row=mysql_fetch_array($result1,MYSQL_ASSOC)){
		
		 $i=$row['subject_code'];
       //echo $i;	    
	 echo "<font color='white'><h3>subject:  {$row["subject_code"]}</h3></font><a href='form.php?subject_code=".$i."&reg=".$regulation_code."&stu=".$t."&semi=".$sem."&cycle=".$cy."' target='_blank'><h4>{$row["subject_name"]}</h4></a>";
	   //echo '<html><h3>subject:</h3><a href="form.php"><h4>'.$row['subject_name'].'</h4></a></html>';
		   //$i=$row['subject_code'];
		// $in=$_POST["{$row['subject_code']}"];
		//<form method="post" action="edit-record.php?id='. $row['id'].'">
	
	
	}
	

 }
 else{
	 echo "give correct information.";
 }
 ?>
<div>
</html>