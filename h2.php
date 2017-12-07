<html>
<body>
<!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
		</body>
 <head>
 </br>
  <ul>
  <?php
       $q=1;
       $r=2;
       $s=3;
  // echo $q;
  $t=$_GET['stu'];
   echo "<font align='left'>".$t."</font>";
    echo "</br></br></br></br>";   
   echo "<li><a href='regulation.php?cycle=".$q."&stu=".$t."' target='3'>cycle1</a></li></br>".
   "<li><a href='regulation.php?cycle=".$r."&stu=".$t."' target='3'>cycle2</a></li></br>".
   "<li><a href='regulation.php?cycle=".$s."&stu=".$t."' target='3'>cycle3</a></li></br>";
   ?>
   </ul>
  </head>
  
 </html> 
 
  