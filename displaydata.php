<a href="index.php" >Home</a>
<?php


ini_set('max_execution_time',0); // set the maximum execution time unlimiteds

if (isset($_POST['submit_url'])) {

//$xml=("https://feeds.datafeedwatch.com/17979/1aa50eb76e0c0155343cffc5361c5017d5863cef.xml");

$xml =$_POST['xml_url'];

// echo $xml;
// exit();
$xmlDoc = new DOMDocument();
$xmlDoc->load($xml);


// //get elements from "<channel>"
 $channel=$xmlDoc->getElementsByTagName('channel')->item(0);
 //print_r($channel)
 //echo count($channel);

 // $channel_title = $channel->getElementsByTagName('title');
 // echo $channel_title;
 //exit();
// ->item(0)->childNodes->item(0)->nodeValue;
// $channel_link = $channel->getElementsByTagName('link')
// ->item(0)->childNodes->item(0)->nodeValue;
// $channel_desc = $channel->getElementsByTagName('description')
// ->item(0)->childNodes->item(0)->nodeValue;

//output elements from "<channel>"
// echo("<p><a href='" . $channel_link
// //   . "'>" . $channel_title . "</a>");
// // echo("<br>");
// echo($channel_desc . "</p>");

//get and output "<item>" elements
$x=$xmlDoc->getElementsByTagName('item');


$item_id="";
$item_id=""; 
$item_title="";
$item_brand="";
$item_link="";
$item_image="";
$item_price="";
$item_avail="";
$item_condition="";
$item_ptype="";
$item_desc="";
for ($i=0; $i<$x->length; $i++) {
  //print_r($x->item($i)->getElementsByTagName('id'));
if($x->item($i)->getElementsByTagName('id')->length == 1) {
  $item_id=$x->item($i)->getElementsByTagName('id')->item(0)->childNodes->item(0)->nodeValue;
}

if($x->item($i)->getElementsByTagName('title')->length == 1) {
  $item_title=$x->item($i)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
}
if($x->item($i)->getElementsByTagName('link')->length == 1) {
  $item_link=$x->item($i)->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
}
if($x->item($i)->getElementsByTagName('description')->length == 1) {
$item_desc=$x->item($i)->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;
}
if($x->item($i)->getElementsByTagName('availability')->length == 1) {
$item_avail=$x->item($i)->getElementsByTagName('availability')->item(0)->childNodes->item(0)->nodeValue;
}

if($x->item($i)->getElementsByTagName('image_link')->length == 1) {
$item_image=$x->item($i)->getElementsByTagName('image_link')->item(0)->childNodes->item(0)->nodeValue;
}
// print($x->item($i)->getElementsByTagName('brand')->length);
if($x->item($i)->getElementsByTagName('brand')->length == 1) {
$item_brand=$x->item($i)->getElementsByTagName('brand')->item(0)->childNodes->item(0)->nodeValue;
}else{
  $item_brand="";
}
if($x->item($i)->getElementsByTagName('price')->length == 1) {
$item_price=$x->item($i)->getElementsByTagName('price')->item(0)->childNodes->item(0)->nodeValue;
}
if($x->item($i)->getElementsByTagName('condition')->length == 1) {
$item_condition=$x->item($i)->getElementsByTagName('condition')->item(0)->childNodes->item(0)->nodeValue;
}
if($x->item($i)->getElementsByTagName('product_type')->length == 1) {
$item_ptype=$x->item($i)->getElementsByTagName('product_type')->item(0)->childNodes->item(0)->nodeValue;
}
  printf(
"<ul><li>SKU:</strong> %s - <strong>IMG:</strong> <img src='%s' height='80' width='80' /> - <strong>Product Name:</strong> %s - <strong>Brand:</strong> %s -<strong>LINK:</strong> %s- <strong>Price:</strong> %s- <strong>Availability:</strong> %s-<strong>Description:</strong> %s - <strong>Type:</strong> %s-<strong>Description:</strong> %s</li></ul>",
$item_id,
$item_image,
$item_title,
$item_brand,
$item_link,
$item_price,
$item_avail,
$item_condition,
$item_ptype,
$item_desc
);



}//ends for loop
}//ends main-if
?>