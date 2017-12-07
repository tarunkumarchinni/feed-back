<html>
 <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
		<div class="form-top">
		  <!-- CSS -->
      
        <link rel="stylesheet" href="assets/css/style.css">
	    <div class="form-top-left">
	                        			<h3>Subjects list</h3>
	                            		<!--<p>Enter usertype , username and password to log on:</p>-->
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-lock"></i>
	                        		</div>
		</div>

<?php

$coursefaculty=$_GET['fac'];
echo $coursefaculty;
$con=mysql_connect("localhost","root","","feedback");
if(!$con){
echo"connection error";
}
else{
/*$sql="SELECT subjectcode from courseoffered where coursefaculty='f1'";
$res=mysql_query($sql);
$r=mysql_fetch_array($res);
$n=mysql_num_rows($res);

for($i=0;$i<$n;$i++){
	echo $r[$i];
}
 
if($r>0){
	foreach($r as $sql ){
      $sql1="SELECT subjectname from programstructure where subjectcode='$sql'";
      $res1=mysql_query($con,$sql);
	  $r1=mysql_fetch_array($res1);
	  echo $r1;
	  
	}
}
else
echo"invalid credintials";*/
     mysql_select_db("feed back");
   
   $result=mysql_query("SELECT * from courseoffered where course_faculty='$coursefaculty'")or die("failed to query database".mysql_error());
   // $row=mysql_fetch_array($result);
   $l=$coursefaculty;
   while($row=mysql_fetch_array($result)){
	if($row['course_faculty']==$coursefaculty){
       //echo "<html><marquee><i><h2><font color='blue'>login success!!!!! welcome".$row['id_no']."</font></h2></i></marquee></html><br><br>";
		  // echo "<html><marquee><i><h2><font color='blue'>login success!!!!!</font></h2></i></marquee></html><br><br>";
           // echo "<html><marquee><i><h2><font color='BROWN'> welcome".$row['subject_code']."</font></h2></i></marquee></html><br><br>";
       $i=$row['subject_code'];
	   $re=mysql_query("SELECT subject_name from programstructure where subject_code='$i'")or die("failed to query database".mysql_error());	   
        $r=mysql_fetch_array($re);	
		// $re1=mysql_query("select * from faculty where  faculty_code='$faculty_reg_no'")or die("failed to query database".mysql_error());	   
        //$r1=mysql_fetch_array($re1);	
		echo "<a href='overallrating.php?t=".$l."&y=".$i."' target='3'><center><font color='black'>{$r['subject_name']}</br></br></br></center></a></font>";
	}
	else{}
  }
 
}
?>
</html>