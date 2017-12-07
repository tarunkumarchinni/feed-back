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
<div class="form-bottom1">
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
  ?>

<form class="registration-form" action="formans.php?subject_code=<?php echo "$in";?>&reg=<?php echo "$j";?>&semi=<?php echo "$k";?>&cycle=<?php echo "$cy";?>&stu=<?php echo "$t";?>" method="POST">
 <center><font color="yellow" size="100"><head>feed back</head></font></center>
 <?php
  // $row=mysql_fetch_array($result1);
 // $in=$_GET['$i'];
  //echo $in;
  //$in=$_GET['subject_code'];
  //echo $in;
  mysql_connect("localhost","root","");
   mysql_select_db("feed back");
   $result=mysql_query("SELECT * FROM feedbackquestion where cycle_no='$cy' ")or die("failed to query database".mysql_error());
    $r1=mysql_fetch_array($result);
	if($r1['cycle_no']==$cy){
	echo "<font color='white'><h3> </h3><h4>{$r1['question_text']}</h4>";
	
  
 echo "<input type='radio' name='r1' value='5' checked>5</br>
	<input type='radio' name='r1' value='4'>4</br>
	<input type='radio' name='r1' value='3'>3</br>
	<input type='radio' name='r1' value='2'>2</br>
	<input type='radio' name='r1' value='1'>1</br>";
 
 /* mysql_connect("localhost","root","");
   mysql_select_db("feed back");
   $resul=mysql_query("SELECT * FROM feedbackquestion where cycle_no='1' ")or die("failed to query database".mysql_error());*/
    $r2=mysql_fetch_array($result);
	echo "<h3> {$r2['2']} </h3><h4></h4>";
  
echo "<input type='radio' name='r2' value='5' checked>5</br>
	<input type='radio' name='r2' value='4'>4</br>
	<input type='radio' name='r2' value='3'>3</br>
	<input type='radio' name='r2' value='2'>2</br>
	<input type='radio' name='r2' value='1'>1</br>";
	
  /*mysql_connect("localhost","root","");
   mysql_select_db("feed back");
   $resu=mysql_query("SELECT * FROM feedbackquestion where cycle_no='1' ")or die("failed to query database".mysql_error());*/
    $r3=mysql_fetch_array($result);
	if($r3['cycle_no']==$cy){
	echo "<h3>  </h3><h4>{$r3['question_text']}</h4>";}
  
	
echo "<input type='radio' name='r3' value='5' checked>5</br>
	<input type='radio' name='r3' value='4'>4</br>
	<input type='radio' name='r3' value='3'>3</br>
	<input type='radio' name='r3' value='2'>2</br>
	<input type='radio' name='r3' value='1'>1</br>";
	 $r4=mysql_fetch_array($result);
	if($r4['cycle_no']==$cy){
	echo "<h3>  </h3><h4>{$r4['question_text']}</h4>";}
  
	
echo "<input type='radio' name='r4' value='5' checked>5</br>
	<input type='radio' name='r4' value='4'>4</br>
	<input type='radio' name='r4' value='3'>3</br>
	<input type='radio' name='r4' value='2'>2</br>
	<input type='radio' name='r4' value='1'>1</br>";
	}
 // echo "<center><a href='formans.php?subject_code=".$in."'><h4><input type='submit' name='submit' value='submit'></h4></a></center>";
// echo "<label>comments</label></br>".
 //     "<textarea name='com' placeholder='enter the comments here' height='30' width='30'></textarea>";
    echo"<div class='form-group'></br><label><font color='yellow'>COMMENTS</font></label></br></br><textarea name='com' placeholder='enter the comments here..'	class='form-about-yourself form-control' id='com'></textarea></div></font>";
 
 ?>
<center><button class="btn" type='submit' name='submit' value='submit'>submit</button></center>
</form>
<div>


</html>