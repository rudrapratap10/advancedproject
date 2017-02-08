<?php 
$specials = "[{\"senderId\":\"relyon\",\"requestId\":\"3761776c6f55303036363632\",\"report\":[{\"date\":\"2017-01-23 12:15:54\",\"number\":\"919449599735\",\"status\":\"1\",\"desc\":\"DELIVERED\"},{\"date\":\"2017-01-25 12:15:54\",\"number\":\"7026115488\",\"status\":\"1\",\"desc\":\"OK\"}],\"userId\":\"137740\",\"campaignName\":\"none\"}]";

$jsonData = json_decode($specials,true);
print_r($jsonData);
foreach($jsonData as $key => $val)
{

	echo $val['senderId']."<br>";
	echo $val['requestId']."<br>";
	echo $val['userId']."<br>";

	foreach($val['report'] as $rep => $repval)
	{
		echo $repval['date']."<br>";
		echo $repval['number']."<br>";
		echo $repval['status']."<br>";
		echo $repval['desc']."<br>";

	}
}

?>