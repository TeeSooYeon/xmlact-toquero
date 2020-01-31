<?php
	$domOBJ = new DOMDocument();
	$domOBJ->load("http://xml-activity-toquero.herokuapp.com/rss.php");
	
	$content = $domOBJ->getElementsbyTagName("viruses");
	
?>
<ul>
	<?php
		foreach($content as $data){
			$vname = $data->getElementsByTagName("name")->item(0)->nodeValue;
			$vdesc = $data->getElementsByTagName("desc")->item(0)->nodeValue;
			$vcure = $data->getElementsByTagName("cure")->item(0)->nodeValue;
			
			echo"<li>Virus:$vname
					<ul>
						<li>Virus Description: $vdesc</li>
						<li>Cure: $vcure</li>
					</ul>
				</li>";
		}
	?>
</ul>
