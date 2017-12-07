<?php
 $student_reg_no=$_POST['re_id'];
   $student_first_name=$_POST['fname'];
   $student_last_name=$_POST['lname'];
   $admitted_in=$_POST['admit_in'];
   $regulation_code=$_POST['reg'];
   $student_type=$_POST['st'];
   //$security=$_post['security question'];
   //$answer=$_post['answer'];
    
	//$student_reg_no=stripcslashes($student_reg_no);
	//$student_first_name=stripcslashes($student_first_name);
	//$student_last_name=stripcslashes($student_last_name);
	//$admitted_in=stripcslashes($admitted_in);
	//$regulation_code=stripcslashes($regulation_code);
	//$student_type=stripcslashes($student_type);
	
	 $student_reg_no=mysql_real_escape_string($student_reg_no);
	  $student_first_name=mysql_real_escape_string($student_first_name);
	   $student_last_name=mysql_real_escape_string($student_last_name);
	   $admitted_in=mysql_real_escape_string($admitted_in);
	    $regulation_code=mysql_real_escape_string($regulation_code);
		 $student_type=mysql_real_escape_string($student_type);
	
   
   mysql_connect("localhost","root","");
   mysql_select_db("feed back");
   
   $result="INSERT INTO student"."(student_reg_no,student_type,admitted_in,regulation_code)"."VALUES"."('$student_reg_no','$student_type','$admitted_in','$regulation_code')";
    $row=mysql_query($result);
	if(!$row){
	 die('could not enter data!!'.mysql_error());
	}
	echo "entered data successfully";
	
?>