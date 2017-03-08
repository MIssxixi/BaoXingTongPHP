<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php
$connection = mysqli_connect("localhost","root","ZOU80230xi","testdatabase") or die("Error " . mysqli_error($connection));

$getvalue = $_GET["key"];
$postvalue = $_POST["key"];
echo "getvalue:$getvalue<br>";
echo "postvalue:$postvalue";

if ($postvalue == "value")
{
	echo  "success";
    $query = "update GuaranteeSlips set name = 'ture' where guaranteeSlipModelId = 100";
	mysqli_query($connection,$query);
    
    sendResponse(200, "success!!!!!!!!");
}
else
{
	echo 'failed';
	$query = "update GuaranteeSlips set name = 'aafailed' where guaranteeSlipModelId = 100";
	mysqli_query($connection,$query);

}
?>
