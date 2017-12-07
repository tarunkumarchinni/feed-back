<html>
<head>
   <title>login page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor='red'>
  <div id="frm">
    <form action="process.php" method="POST">
	<p>
	      <label>usertype:</label>
		  <select name="ut">
		  <option value="1">student</option>
		  <option value="2">faculty</option>
		  <option value="3">admin</option>
		  </select>
		
	  </p>
	  <p>
	      <label>username:</label>
		  <input type="text" id="user" name="user"/>
	  </p>
	  <p>
	      <label>password:</label>
		  <input type="password" id="pass" name="pass"/>
	  </p>
	  <p>
	     <input type="submit" id="button" value="login"/>
	  </p>
	</form>
  </div>
</body>
</html>
