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


echo "<pre>";
$array = $_POST;

print_r($array);

echo "</pre>";



//$array = $_POST;
		
$referaldate = $array['todaysdate'];
$nameofpatient = $array['nameofpatient'];
$dobhomeaddress = $array['dobhomeaddress'];
$numberhomeaddress = $array['numberhomeaddress'];
$rcellnumber = $array['rcellnumber'];
$rworknumber = $array['rworknumber'];
$primarycarehomeaddress = $array['primarycarehomeaddress'];
$physicianaddress = $array['physicianaddress'];
$physicianphone = $array['physicianphone'];

$physicianfax = $array['physicianfax'];



if ($array['rose'])
{
 $rosa = X;
}
else
{
$rosa = "&nbsp;&nbsp;";
}


if ($array['insomnia'])
{
 $insomnia = X;
}
else
{
$insomnia = "&nbsp;&nbsp;";
}


if ($array['narcolepsy'])
{
 $narcolepsy = X;
}
else
{
$narcolepsy = "&nbsp;&nbsp;";
}


if ($array['fatigue'])
{
 $fatigue = X;
}
else
{
$fatigue = "&nbsp;&nbsp;";
}



if ($array['restless'])
{
 $restless = X;
}
else
{
$restless = "&nbsp;&nbsp;";
}



$otherrproblem = $array['otherrproblem'];


if ($array['SleepConsult'])
{
$SleepConsult = X;
}
else
{
$SleepConsult = "&nbsp;&nbsp;";
}

if ($array['homesleeptrest'])
{
$homesleeptrest = X;
}
else
{
$homesleeptrest = "&nbsp;&nbsp;";
}



if ($array['homecpap'])
{
$homecpap = X;
}
else
{
$homecpap = "&nbsp;&nbsp;";
}




if ($array['mwt'])
{
$mwt = X;
}
else
{
$mwt = "&nbsp;&nbsp;";
}


	

$today = date("F j, Y, g:i a");

$htmlmessage="<H3>REFERRAL FORM </H3>
<B>Date: </B> $referaldate <BR>
<B>Patient name: </B> $nameofpatient<BR>
<B>Date of birth:</B> $dobhomeaddress<BR><BR>
<B>Home Phone:</B> $numberhomeaddress<BR>
<B>Cell Phone:</B> $rcellnumber<BR><BR>
<B>Work Phone:</B> $rworknumber<BR>

<B>Referring Physician:</B> $primarycarehomeaddress<BR>

<B>Address:</B> $physicianaddress<BR>
<B>Phone:</B> $physicianphone<BR>
<B>Fax:</B> $physicianfax<BR>

<B>Reason for referral<B><BR>
<U>$rosa</U><B>&nbsp;&nbsp;&nbsp;&nbsp;Obstructive Sleep Apnea</B><BR>
<U>$insomnia</U><B>&nbsp;&nbsp;&nbsp;&nbsp;Insomnia</B><BR>
<U>$narcolepsy</U><B>&nbsp;&nbsp;&nbsp;&nbsp;Narcolepsy</B><BR>
<U>$fatigue</U><B>&nbsp;&nbsp;&nbsp;&nbsp;Fatigue </B><BR>
<U>$restless</U><B>&nbsp;&nbsp;&nbsp;&nbsp;Restless Legs Syndrome </B><BR>
<B>Other:</B>$otherrproblem<BR>

<B>Physician Orders</B><BR>

<U>$SleepConsult</U><B>&nbsp;&nbsp;&nbsp;&nbsp;Sleep Consult</B><BR>
<U>$homesleeptrest</U><B>&nbsp;&nbsp;&nbsp;&nbsp;Home sleep testing </B><BR>
<U>$homecpap</U><B>&nbsp;&nbsp;&nbsp;&nbsp;Home CPAP Titration and Management</B><BR>
<U>$mwt</U><B>&nbsp;&nbsp;&nbsp;&nbsp;M.W.T. (Maintenance of  Wakefulness Test)  for truck drivers </B><BR>


DATE: $today";

//echo $htmlmessage;



require_once('../config/lang/eng.php');
require_once('../tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Digitalize Media Team');
$pdf->SetTitle('REFERRAL FORM');
$pdf->SetSubject('REFERRAL FORM');
$pdf->SetKeywords('Home Sleep Clinic');

// set default header data
$pdf->SetHeaderData('new-logo.png', PDF_HEADER_LOGO_WIDTH, 'REFERRAL FORM', 'REFERRAL FORM');

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
$namewithnoextention = $nameofpatient.$dobhomeaddress.$primarycarehomeaddress;

$finalnamewithnoextention1 = str_replace( " " , "" ,$namewithnoextention);
$finalnamewithnoextention2 = str_replace( "." , "" ,$finalnamewithnoextention1 );
$finalnamewithnoextention2 = str_replace( "/" , "" ,$finalnamewithnoextention1 );


$filename = "referalforms/".$finalnamewithnoextention2.".pdf";

//Close and output PDF document
$pdf->Output($filename, 'F');
//echo "Thank you !";

$headers  = 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\n";

// Additional headers
$headers .= 'To: Dr.Brijawi'."\n";
$headers .= 'From: Home Sleep Clinic <info@homesleepclinic.com>'."\n";

$MAIL_TO = "cbcprint@yahoo.com";

$subject = "NEW REFERRAL FORM";

$message = "<DIV align='center'><img src='http://www.homesleepclinic.com/css/images/new-logo.png'><BR><H3>REFERRAL FORM ONLINE SUBMIT</H3></DIV>
<BR>
A  Patient has just filled and send the online REFERRAL FORM , please click
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