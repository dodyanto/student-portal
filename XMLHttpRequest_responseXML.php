<?php
 header('Content-Type: text/xml');
 header ('Cache-Control: no-cache');
 header ('Cache-Control: no-store' , false);     // false => this header not override the previous similar header
$link = mysql_connect('localhost','root','');
$db = mysql_select_db('qa');



//-------------- If want to read an existing .xml file -------------------------

// $XmlFile="Data.xml";

/*// Using the DOM Functions
$doc=new DOMDocument();
$doc->formatOutput=true;

$doc->load($XmlFile);

// echo  $doc->saveXML();     // Returns the xml as string
*/

// OR: Directly open the file:
// readfile($XmlFile);            // Output directly the given file to browser

//-------------- If want to read an existing .xml file (END) -----------------

                                                                 $n= $_GET['name'];
                                                               // $n= "guru";

    $data = mysql_query("SELECT * FROM users WHERE username='$n'") or die(mysql_error());
    while($info = mysql_fetch_array( $data ))
    {
  $name=$info['username'];
  $phone=$info['phone'];
  $col=$info['college'];
  $dept=$info['dept'];
  $photo=$info['photo'];
      $email=$info['email'];
       $noq=$info['noq'];
   }
// Manually create a string representation of a new xml document
// Inserting also the GET variable 


$xmlStr='<?xml version="1.0" encoding="UTF-8"?>
<data>
<name>'.$name.'</name>
<phone>'.$phone.'</phone>
<college>'.$col.'</college>
<dept>'.$dept.'</dept>
<photo>'.$photo.'</photo>
<email>'.$email.'</email>
<noq>'.$noq.'</noq>
</data>
';

 $file=fopen("well.txt","w+");
fwrite($file, $xmlStr);
echo $xmlStr;


?>
