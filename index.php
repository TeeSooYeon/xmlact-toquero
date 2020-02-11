<?php
	$domOBJ = new DOMDocument();
	$domOBJ->load("http://xml-activity-toquero.herokuapp.com/rss.php");
	
	$content = $domOBJ->getElementsbyTagName("viruses");
	
?>
<html>
	<head>
		<title>Xml Activity by Hans</title>
	</head>
<ul>
	<?php
		foreach($content as $data){
			$vname = $data->getElementsByTagName("name")->item(0)->nodeValue;
			$vdesc = $data->getElementsByTagName("desc")->item(0)->nodeValue;
			$vcure = $data->getElementsByTagName("cure")->item(0)->nodeValue;
			
			echo"<li><h3>Virus:</h3>$vname
					<ul>
						<li><h4>Virus Description:</h4> $vdesc</li>
						<li><h4>Cure:</h4> $vcure</li>
					</ul>
				</li>";
		}
	?>
</ul>
</html>
