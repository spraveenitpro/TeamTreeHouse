 <?php 

/* 

Code Block For Conditionals
$today = "Monday";
if ($today == "Monday") {
	echo "Welcome back to work";
}
*/
 /*

$hour = date('G');

echo $hour;

if ($hour > 6 and $hour < 11) {

	echo "Good Morning";
}

if ($hour > 11 and $hour < 16) {

	echo "Good Afternoon";
}

if ($hour > 16 and $hour < 20) {

	echo "Good Evening";
}

if ($hour >  20) {

	echo "Good Night";
}

*/
/*

$flavors = array ("vanilla", "chocolate","strawberry","cookie dough");

var_dump($flavors);

echo $flavors[0]."\n".$flavors[1]."\n".$flavors[2];

echo "<br>Totall number of flavours ".count($flavors);


foreach ($flavors as $flavor) {
	# code...
	echo $flavor."\n";
} */
 
/*
$countries = array();
$countries[0] = array(
	"code" => "US",
	"name" => "United States",
	"capital" => "Washiton DC",
	"population" => 22200000000,
	"anthem" => "Star Spangled Banner"
);

$countries[1] = array (
	"code" => "DE",
	"name" => "Germany",
	"capital" => "Berlin",
	"population" => 200000000,
	"anthem" => "Heil Hitler"

);


?>

<?php

foreach ($countries as $country) { ?>
	 
 
<h1><?php echo $country["name"]; ?></h1>
<dl>

	<dt>Country Code</dt>
	<dd><?php echo $country["code"]; ?></dd>
	<dt>Country Capital</dt>
	<dd><?php echo $country["capital"]; ?></dd>
	<dt>Country Population</dt>
	<dd><?php echo $country["population"]; ?></dd>
</dl>

<?php } ?>








 <?php

 /*

$country = array(
	"code" => "US",
	"name" => "United States",
	"capital" => "Washiton DC",
	"population" => 22200000000,
	"anthem" => "Star Spangled Banner"
	);
?>

<h1><?php echo $country["name"]; ?></h1>
<dl>

	<dt>Country Code</dt>
	<dd><?php echo $country["code"]; ?></dd>
	<dt>Country Name</dt>
	<dd><?php echo $country["name"]; ?></dd>
	<dt>Country Capital</dt>
	<dd><?php echo $country["capital"]; ?></dd>
	<dt>Country Population</dt>
	<dd><?php echo $country["population"]; ?></dd>
	<dt>Country Anthem</dt>
	<dd><?php echo $country["anthem"]; ?></dd>
	



</dl>
<?php
	echo "(".$country["capital"].")" ;
 




$flavors= array("vannila","chocolate","Strawberry","cookie dough");
$count = count($flavors);
echo $count;




function mimic_count($array) {

	$sum = 0;
	foreach ($array as $number){

		$sum =  $sum + 1;
	}
	return $sum;
}

$num = array(1,2,3,4,5,1,2,1,2,1,1);
echo mimic_count($num);
*/
 

$numbers = array(1,2,3,4);

$total = count($numbers);

$sum = 0;

$output = "";

$i = 0;

foreach($numbers as $number) {

    $i = $i + 1;

    if ($i < $total) {

        $output = $number . $output;

    }

}

echo $output;

?>

 
