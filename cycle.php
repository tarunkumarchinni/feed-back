<html>
 <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
  <head>
   <?php $t=$_GET['stu'];
	  ?>
	  
   <!-- <frameset rows="10%,*">
	 <frame name="1" src="h1.html" noresize>-->
	
	 <frameset cols="10%,*" >
	 <frame name="2" src="h2.php?stu=<?php echo $t?>" noresize>
	<frameset rows="*" >
	 <frame name="3" src="table.html" noresize>
	
	
	 </frameset>
	 </frameset>
	</head>
</html>
	