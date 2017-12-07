<html>
  
 <?php $t=$_GET['stu'];
      echo $t;
 $cy=$_GET['cycle'];
      echo $cy;?>
	    <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
	  <body>
	  
	 
	    
	

	<div class="form-bottom1">
   <form class="login-form" action="subjects.php?cycle=<?php echo "$cy";?>&stu=<?php echo "$t";?>" method="POST" >
   	
    <center><font color="black">  <label>REGULATION :</label>
	  <input type="text" id="reg" name="reg" class="form-username form-control" placeholder="Regulation.." ></input></center>
     <!-- <select type="select" name="s1">
	  <option value="1" >r13</option>
	  <option value="2">r10</option>
	  </select>-->
	</br>
	  <center><label>SEMISTER :</label></font>
	 <!-- <input type="text" id="semi" name="semi" class="form-username form-control"></input></center>
     --><center><select type="select" name="semi" id="semi" class="form-username form-control">
	  <option value="0">select semister..</option>
	  <option value="1">1-1</option>
	  <option value="2">1-2</option>
	  <option value="3">2-1</option>
	  <option value="4">2-2</option>
	  <option value="5">3-1</option>
	  <option value="6">3-2</option>
	  <option value="7">4-1</option>
	  <option value="8">4-2</option>
	  </select></br></br></center>
	 <!-- <a href="subjects.php" target="4">getsubjects</a>--></br>
	  <center><button type="submit" name="getsubjects" value="getsubjects" class="btn">Get Subjects</button></center>
	 </form>
	 </div>
	 
	 
	 
	  <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
 </body>
 </html>	 