<html>
<?php 
 $fid=$_GET['fac'];
     // echo $fid;
	
  ?>  
  <head>	
    <frameset cols="20%,*" >
 
    <frame name="2" src="subjectsfac.php?fac=<?php echo $fid?>" noresize>
	<frameset rows="*" >
	   <frame name="3" src="tablefac.html" noresize>
	
	 </frameset>
	 </frameset>
</head>
</html>