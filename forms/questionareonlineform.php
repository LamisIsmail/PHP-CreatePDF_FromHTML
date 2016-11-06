<?php

if ($_POST['myinput'] !="")
{
echo "";
}
else
{

function html2txt($document){
$search = array('@<script[^>]*?>.*?</script>@si',  // Strip out javascript
               '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
               '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
               '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments including CDATA
);
$text = preg_replace($search, '', $document);
return $text;
} 

function get_ip_address() {
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key) {
        if (array_key_exists($key, $_SERVER) === true) {
            foreach (explode(',', $_SERVER[$key]) as $ip) {
                if (filter_var($ip, FILTER_VALIDATE_IP) !== false) {
                    return $ip;
                }
            }
        }
    }
}

$numberip = get_ip_address();



$postedarray = $_POST;



 foreach ($postedarray as $key => $value) {
	    //echo "Key: $key; Value: $value[0]<br />\n";	
		if (is_array($value))
		{
		 $array[$key] = $value[0]; 
		}
		else
		{
		$array[$key] = $value; 
		}
		
		}

print_r($array);




//$array = $_POST;
		
$qname= $array['qname'];
$qdob= $array['qdob'];
$question1 = $array['question1'];
$question1why= $array['question1why'];
$question2= $array['question2'];
$question2details= $array['question2details'];
$question3= $array['question3'];
$question3details= $array['question3details'];

$Snore= $array['Snore'];
$Choke= $array['Choke'];
$Heartburn= $array['Heartburn'];
$drymouth= $array['drymouth'];
$morningheadaches= $array['morningheadaches'];
$tossbed= $array['tossbed'];

$question5details= $array['question5details'];
$question6= $array['question6'];
$question7= $array['question7'];
$question8= $array['question8'];

$Mask= $array['Mask'];
$Headgear= $array['Headgear'];
$Filters= $array['Filters'];
$Hoses= $array['Hoses'];

$sitingandreading= $array['sitingandreading'];
$tv= $array['tv'];
$puplic= $array['puplic'];
$passenger= $array['passenger'];
$afternoon= $array['afternoon'];
$talking= $array['talking'];
$lunch= $array['lunch'];
$stopedcar = $array['stopedcar'];
$drive= $array['drive'];
$comments= $array['comments'];
$certified=$array['certified'];

if ($certified)
{
 $certified = "X";
}
else
{
$certified = "";
}

$ipaddress = $_SERVER['REMOTE_HOST'];
$array = $_POST;

$total = $sitingandreading+$tv+$puplic+$passenger+$afternoon+$talking+$lunch+$stopedcar+$drive;



$Mask= $array['Mask'];
if ($Mask)
{
 $Mask = "YES";
}
else
{
$Mask = "NO";

}
$Headgear= $array['Headgear'];
if ($Headgear)
{
 $Headgear = "YES";
}
else
{
 $Headgear = "NO";
}

$Filters= $array['Filters'];
if ($Filters)
{
 $Filters= "YES";
}
else
{
 $Filters= "NO";
}


$Hoses= $array['Hoses'];
if ($Hoses)
{
 $Hoses= "YES";
}
else
{
 $Hoses= "NO";
}


$Snore= $array['Snore'];
if ($Snore)
{
 $Snore= "YES";
}
else
{
 $Snore= "NO";
}


$Choke= $array['Choke'];
if ($Choke)
{
 $Choke= "YES";
}
else
{
 $Choke= "NO";
}

$Heartburn= $array['Heartburn'];
if ($Heartburn)
{
 $Heartburn = "YES";
}
else
{
 $Heartburn = "NO";
}



$drymouth= $array['drymouth'];
if ($drymouth)
{
 $drymouth = "YES";
}
else
{
 $drymouth = "NO";
}


$morningheadaches= $array['morningheadaches'];
if ($morningheadaches)
{
 $morningheadaches = "YES";
}
else
{
  $morningheadaches = "NO";
}



$tossbed= $array['tossbed'];
if ($tossbed)
{
$tossbed = "YES";
}
else
{
$tossbed = "NO";

}


$today = date("F j, Y, g:i a");

$htmlmessage="<H3>Follow Up Patient Form </H3>
<B>Name:</B> $qname<BR>
<B>Date of birth:</B> $qdob<BR><BR>

<B>1- Are you currently wearing your CPAP mask every night?</B> $question1<BR>
<B>If no, why?</B> $question1why<BR><BR>

<B>2- Are you having any problems with it?</B> $question2<BR>
<B>Details:</B> $question2details<BR><BR>

<B>3- Do you feel any better since starting on the CPAP machine?</B> $question3<BR>
<B>Details:</B> $question3details<BR><BR>

<B>4- When using your CPAP do you have any of the following complaints?<B><BR>
<U>$Snore</U><B>&nbsp;&nbsp;&nbsp;&nbsp;Snore</B><BR>
<U>$Choke</U><B>&nbsp;&nbsp;&nbsp;&nbsp;Choke</B><BR>
<U>$Heartburn</U><B>&nbsp;&nbsp;&nbsp;&nbsp;Heartburn</B><BR>
<U>$drymouth</U><B>&nbsp;&nbsp;&nbsp;&nbsp;Dry mouth</B><BR>
<U>$morningheadaches</U><B>&nbsp;&nbsp;&nbsp;&nbsp;Morning headaches</B><BR>
<U>$tossbed</U><B>&nbsp;&nbsp;&nbsp;&nbsp;Toss and turn in bed</B><BR><BR>
<B>5- How many hours are you using your machine?</B> $question5details<BR><BR>

<B>6- Are you using the humidifier on your machine?</B> $question6<BR><BR>
<B>7- Have you lost or gained weight since starting the CPAP?</B> $question7<BR><BR>
<B>8- Do you need any supplies  yes or no  If yes, please mark below supplies needed</B> $question8<BR>
<U>$Mask</U><B>&nbsp;&nbsp;&nbsp;&nbsp;Mask</B><BR>
<U>$Headgear</U><B>&nbsp;&nbsp;&nbsp;&nbsp;Headgear</B><BR>
<U>$Filters</U><B>&nbsp;&nbsp;&nbsp;&nbsp;Filters</B><BR>
<U>$Hoses</U><B>&nbsp;&nbsp;&nbsp;&nbsp;Hoses</B><BR><BR>

Rate your chance of dozing in the situations below using the following scale:<BR>
0=has not happened to me this past year and I do not  think it would<BR>
1=has happened a time or two in the last year or has a slight chance of happening<BR>
2=has happened on occasion in the last few months and is likely to happen again<BR>
3=happens frequently and will happen again<BR>
<B>$sitingandreading</B> When reading<BR>
<B>$tv</B> When watching TV<BR>
<B>$puplic</B> When inactive in a public place (theater, at a meeting or lecture)<BR>
<B>$passenger</B> While waiting (at a stop light, at a doctor office)<BR>
<B>$afternoon</B> While lying down to rest or take a break during the day<BR>
<B>$talking</B> While sitting and talking to someone in person or on the phone<BR>
<B>$lunch</B> While sitting quietly during the day after eating<BR>
<B>$stopedcar</B> When riding as a passenger in a car, train, or plane for an hour or more<BR>
<B>$drive</B> While driving a vehicle<BR>
<B>$total</B> TOTAL<BR>
<B>Comments or questions</B> $comments<BR>
<B><U>$certified</U>&nbsp;&nbsp; I certify that all information is correct and complete.  if any information would change, I will notify this office immediately</B><BR>
DATE: $today";

//echo $htmlmessage;




require_once('../config/lang/eng.php');
require_once('../tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Digitalize Media Team');
$pdf->SetTitle('Follow Up Patient Form');
$pdf->SetSubject('WELLNESS QUESTIONNAIRE');
$pdf->SetKeywords('Follow Up Patient Form');

// set default header data
$pdf->SetHeaderData('new-logo.png', PDF_HEADER_LOGO_WIDTH, 'Follow Up Patient Form', 'Follow Up Patient Form');

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
$pdf->setLanguageArray($l);

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', '', 9);

// add a page
$pdf->AddPage();

//$array = $_POST;
//print_r($_POST);



$html= $htmlmessage;


//$html = $message;

// output the HTML content

//echo $html;

$pdf->writeHTML($html, true, 0, true, 0);



// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------
$filename = "questionaire/questionaire_".$qname."_".$qdob.".pdf";

//Close and output PDF document
$pdf->Output($filename, 'F');
//echo "Thank you !";

$headers  = 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\n";

// Additional headers
$headers .= 'To: Dr.Brijawi'."\n";
$headers .= 'From: Home Sleep Clinic <info@homesleepclinic.com>'."\n";

$MAIL_TO = "cbcprint@yahoo.com";

$subject = "Follow Up Patient Form";

$message = "<DIV align='center'><img src='http://www.homesleepclinic.com/css/images/new-logo.png'><BR><H3>WELLNESS QUESTIONNAIRE ONLINE SUBMIT</H3></DIV>
<BR>
A Patient has just filled and send online Follow Up Patient Form , please click
<a href='http://www.homesleepclinic.com/desktop/pdf/forms/".$filename."' target='_BLANK'>
here to view the filled form</a>";

$time = date('Y-m-d H:i');

$body = "Time: $time<BR>";
$body .= "Name: $qname<BR>";
$body .= "Message:<BR>$message<BR>";
$body .= "Form Content:<BR>$html";

@mail($MAIL_TO, $subject, $body , $headers);
@mail("lamismedia@gmail.com", $subject, $body , $headers);
//@mail("jenwormald@yahoo.com", $subject, $body , $headers);
@mail("homesleepclinic@yahoo.com", $subject, $body , $headers);

header ("Location: http://www.homesleepclinic.com/desktop/thankyou.html");
//============================================================+
// END OF FILE                                                
//============================================================+

}

?>