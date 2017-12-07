<html>
<!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
		<!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
       <link rel="stylesheet" href="assets/css/style.css">
<?php
  $cy=$_GET['cycle'];
      echo $cy;
 $in=$_GET['subject_code'];
  echo $in;
  $j=$_GET['reg'];
  echo $j;
  $k=$_GET['semi'];
  echo $k;
  $t=$_GET['stu'];
  echo $t;
 $q1=$_POST['r1'];
 $q2=$_POST['r2'];
 $q3=$_POST['r3'];
 $q4=$_POST['r4'];
 $q1=stripcslashes($q1);
 $q2=stripcslashes($q2);
 $q3=stripcslashes($q3);
 $q4=stripcslashes($q4);
 $q1=mysql_real_escape_string($q1);
 $q2=mysql_real_escape_string($q2);
 $q3=mysql_real_escape_string($q3);
 $q4=mysql_real_escape_string($q4);
 $rating=($q1+$q2+$q3+$q4)/4;
 $comment=$_POST['com'];
   mysql_connect("localhost","root","");
   mysql_select_db("feed back");
 

   $a=mysql_query("SELECT regulation_code,semister,course_code,subject_code FROM courseoffered where regulation_code='$j' and semister='$k' and subject_code='$in' ")or die("failed to query database".mysql_error());
    $r1=mysql_fetch_array($a);
	//$n=$r1['course_code'];
//		echo $n;
/*	$b=mysql_query("SELECT * FROM programstructure where regulation_code='r13' and semister='2' ")or die("failed to query database".mysql_error());
    $r2=mysql_fetch_array($b);*/
	//while($r1=mysql_fetch_array($a,MYSQL_ASSOC)){
	if($r1['subject_code']==$in)
	{
		$n=$r1['course_code'];
		echo $n;
/*		$c=mysql_query("SELECT * FROM feedbackquestion where cycle_no='1' ")or die("failed to query database".mysql_error());
    $r3=mysql_fetch_array($c);
	if($c['cycle_no']=='1')
	{
	  $q=$c['question_no'];	
	*/  
	$b="INSERT INTO questions"."(question_id,q1,q2,q3,q4,q5,q6,q7,q8)"."VALUES"."('NULL','$q1','$q2','$q3','$q4','','','','')";
    $r2=mysql_query($b);
	 //$qr1=$r2['question_id'];
	 //echo $qr1;
	     if(!$r2){
	     die('could not enter data!!'.mysql_error());
	      }
		  else{
	      echo "entered data successfully question";
		 $c=mysql_query("SELECT MAX(question_id) FROM questions ")or die("failed to query database".mysql_error());
          $r3=mysql_fetch_row($c);
	      // $qr1=$r3;
              $qid=$r3[0];
               echo $qid;		   
       $result="INSERT INTO feedbackratinglog"."(feedback_no,course_code,cycle_no,question_no,feedback_weightage,rating_answer,subject_code)"."VALUES"."('NULL','$n','$cy','$qid','5','$rating','$in')";
        $row=mysql_query($result);
	     if(!$row){
	     die('could not enter data!!'.mysql_error());
	      }
		  else{
	      echo "entered data successfully";
	       include("end.html");
		   }
		  }
		   $d=mysql_query("SELECT max(feedback_no) FROM feedbackratinglog  ")or die("failed to query database".mysql_error());
          $r4=mysql_fetch_row($d);
		  $l=$r4[0];
		  echo $l;
	    $result1="INSERT INTO feedbackcommentlog"."(feedback_no,course_code,cycle_no,feedback_weightage,feedback_comments)"."VALUES"."('$k','$n','$cy','5','$comment')";
        $row1=mysql_query($result1);
	     if(!$row1){
	     die('could not enter data!!'.mysql_error());
	      }
		  else{
	      echo "entered data successfully";
	      
		   }
		  
		  
	}
	
	
	//}
	//}
?>
<form action="subjectsendstu.php?cycle=<?php echo "$cy";?>&reg=<?php echo "$j"; ?>&semi=<?php echo "$k";?>&stu=<?php echo "$t";?>" method="POST">
 <button> <a href="login1.html">logout</a></button>
  <button class="btn" type="submit" name="b"/>next subject feedback</button>
  </form>
</html>
