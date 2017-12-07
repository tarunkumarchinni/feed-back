<html>
<!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
       <!-- <link rel="stylesheet" href="assets/css/style.css">
 <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
		
<body >
 
<?php
   $usertype=$_POST['ut'];
   $id_no=$_POST['user'];
   $crypt_password=$_POST['pass'];
   $student_reg_no=$_POST['user'];
   $faculty_reg_no=$_POST['user'];
	
   $usertype=stripcslashes($usertype);
   $id_no=stripcslashes($id_no);
   $crypt_password=stripcslashes($crypt_password);
   $student_reg_no=stripcslashes($student_reg_no);
   
   $usertype=mysql_real_escape_string($usertype);
   $id_no=mysql_real_escape_string($id_no);
   $crypt_password=mysql_real_escape_string($crypt_password);
   $student_reg_no=mysql_real_escape_string($student_reg_no);
  // $student_reg_no=$id_no;
   mysql_connect("localhost","root","");
   mysql_select_db("feed back");
   
   $result=mysql_query("select * from users where usertype='$usertype' and id_no='$id_no' and crypt_password='$crypt_password'")or die("failed to query database".mysql_error());
    $row=mysql_fetch_array($result);
	if($row['usertype']==$usertype && $row['id_no']==$id_no && $row['crypt_password']==$crypt_password){
       //echo "<html><marquee><i><h2><font color='blue'>login success!!!!! welcome".$row['id_no']."</font></h2></i></marquee></html><br><br>";
		  // echo "<html><marquee><i><h2><font color='blue'>login success!!!!!</font></h2></i></marquee></html><br><br>";
          //1  echo "<html><marquee><i><h2><font color='BROWN'> welcome".$row['id_no']."</font></h2></i></marquee></html><br><br>";
        $re=mysql_query("select * from student where  student_reg_no='$student_reg_no'")or die("failed to query database".mysql_error());	   
        $r=mysql_fetch_array($re);	
		// $re1=mysql_query("select * from faculty where  faculty_code='$faculty_reg_no'")or die("failed to query database".mysql_error());	   
        //$r1=mysql_fetch_array($re1);	
	   if($r['student_reg_no']==$id_no) {
		    include("profile.html");
             echo "<font color='brown'><center><p><h3>REGISTRATION ID :</h3></font><font color='#273746'><h4>{$r['student_reg_no']} </h4></font></p></center> <br> ".
           "<font color='brown'><center><h3>FIRST NAME :</h3></font><font color='#273746'><h4> {$r['student_first_name']}</h4></center></font> <br>".
           "<font color='brown'><center><h3>LAST NAME :</h3></font><font color='#273746'> <h4>{$r['student_last_name']}</h4> </center></font><br>".
		   "<font color='brown'><center><h3>STUDENT TYPE :</h3></font><font color='#273746'><h4> {$r['student_type']}</h4> </center></font><br><br> ".
		   "<font color='brown'><center><h3>ADMITTED IN : </h3></font><font color='#273746'><h4>{$r['admitted_in']} </h4></center></font><br><br> ".
		   "<font color='brown'><center><h3>REGULATION : </h3></font><font color='#273746'><h4>{$r['regulation_code']}</h4></center> </font><br><br> ".
         "<form action='cycle.php?stu=".$id_no."' method='POST'><center><button class='btn' type='submit'  value='Next..' ><font color='#273746'>next</font></button></center></form>";
// "<html><head><frameset rows='20%,*'><frame name='1' src='h1.html'><frameset cols='20%,*'><frame name='2' src='h2.html'>
	 //<frame name='3' src='f4.html'></frameset></head></html>";
		 
	//	 $reg=mysql_query("select * from programstructure where regulation_code=$['regulation_code']")or die("failed to query database".mysql_error());
		// $t=mysql_fetch_array($reg);
		 // if($t['regulation_code']==$r['regulation_code']){
		//	  echo "<center><p><h3>subject name :</h3><h4>{$t['subject_name']} </h4></p></center> <br>";
		  //}
		 }
		 else{
		   $re1=mysql_query("select * from faculty where  faculty_code='$faculty_reg_no'")or die("failed to query database".mysql_error());	   
             $r1=mysql_fetch_array($re1);
		   if($r1['faculty_code']==$id_no){
			 echo "entered";
			 include("facprofile.html");
			  echo "<font color='brown'><center><p><h3>FACULTY REGISTRATION ID :</h3></font><font color='#273746'><h4>{$r1['faculty_code']} </h4></font></p></center> <br> ".
           "<font color='brown'><center><h3>FIRST NAME :</h3></font><font color='#273746'><h4> {$r1['faculty_first_name']}</h4></center> </font><br>".
           "<font color='brown'><center><h3>LAST NAME :</h3></font><font color='#273746'> <h4>{$r1['faculty_last_name']}</h4> </center></font><br>".
		   "<font color='brown'><center><h3>TELEPHONE/MOBILE NO :</h3></font><font color='#273746'><h4> {$r1['faculty_tel']}</h4> </center></font><br><br> ".
		   "<font color='brown'><center><h3>EMAIL : </h3></font><font color='#273746'><h4>{$r1['faculty_email']} </h4></center></font><br><br> ".
		   "<font color='brown'><center><h3>DEPARTMENT : </h3></font><font color='#273746'><h4>{$r1['home_department']}</h4></center></font> <br><br> ".
  		   "<font color='brown'><center><h3>JOINING DATE : </h3></font><font color='#273746'><h4>{$r1['joining_date']}</h4></center></font> <br><br> ".
	     "<font color='brown'><center><h3>RELIEVED DATE : </h3></font><font color='#273746'><h4>{$r1['relieved_date']}</h4></center></font> <br><br> ".
         "<form action='facdisplay.php?fac=".$id_no."' method='POST'><center><button type='submit' class='btn' value='Next..'>Next..</button></center></form>";
			 
		 }
		 else{
			 echo "failed";
		 }
		 }
		//   include("1.php");
			
		  // echo "\n"$row['usertype'];
	}else{
	   echo "failed to login!";
	   include("fail.html");
	}
	
   ?>
   </body>
   </html>