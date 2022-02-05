<html>
 <head>
  <title>Ajax call</title>
 </head>
 <body>
 <?php 
	$db = new PDO('sqlite:tshoot.db');
    $pid = $_POST['PKEY'];
	$retText="";
	$result = $db->query('select * from questions where PID='.$pid);
	foreach($result as $row)
	{  
		$retText = $retText.$row['ID'].$row['TXT']."<br>";
	}
	$pid = $pid + 1;
	$result = $db->query('select * from questions where PID='.$pid);
	
		
	foreach($result as $row)
	{  
		//print($row['ID'].$row['TXT']."<br>");
		$retText = $retText."<input type='radio' value=".$row['ID']." name=\"q1\" onclick=update(".$row['ID'].");><label for=\"\">".$row['TXT']."</lab><br>";
	}
	echo $retText;
?> 
 </body>
</html>