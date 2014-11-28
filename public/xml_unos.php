
<?php

/* ==========================================================================
Funkcija parsa team.xml u assoc array koji u index.php ispisujemo
========================================================================== */

function php_net_feed()
{
	$output = array();
	$file = "./res/team.xml";
	$xml = simplexml_load_file($file);
	foreach($xml->member as $item) {
		$output[] = array(
			'name' => $item->name,
			'image' => $item->image,
			'jtitle' => $item->jtitle,
			'desc' => $item->desc
		);
	}

	return $output;
}

/*
Glavna assoc array
========================================================================== */
$feed = php_net_feed();


/* ==========================================================================
   TODO  $feed[]['image']; nije ubačen, jel bi pokidalo webstranicu. Ne vode nigdje.
   ========================================================================== */

/* ==========================================================================
    TODO Performance bio bolji uz JSON. 
 	$xml = simplexml_load_file($file);
 	$json = json_encode($xml);
 	$array = json_decode($json,TRUE);
 	echo '<pre>', print_r($array,true), '</p>';
   ========================================================================== */
?>