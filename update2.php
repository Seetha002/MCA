<html>
	<body>
	<form method="post"action="update2.php">
	<?php
	require('connect.php');
	if(isset($_POST['sub1']))
	{
	$id1=$_POST['id'];
	$bname=$_POST['bn'];
	$author=$_POST['at'];
	$publisher=$_POST['pub'];
	$quantity=$_POST['qn'];
	$price=$_POST['pz'];
	$sql = "UPDATE library SET Book_name='$bname',Author='$author',Publisher='$publisher',Quantity='$quantity',Prize='$price' WHERE Id='$id1'";
	$result=mysqli_query($conn, $sql);
	if ($result) 
	{
  		header('Location: successpage.html');
	} 
	else 
	{
 		 header('Location: fail.html');
	}
	mysqli_close($conn);
	}
	?>
	</body>
</html>
