<?php
if ($_POST['myinput'] !="")
{
echo "";
}
else
{
/*require_once('../../recaptcha/recaptchalib.php');
 $privatekey = "6LfrYNsSAAAAAFe79BMY1hBe7IJX5bCwpw-bLwQX";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
  */

    // Your code here to handle a successful verification
  


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


$array = $_POST;

$insurancecompany =  $array['insurancecompany'];
$insuredname = $array['insuredname'];
$relation =  $array['relation'];
$insuredsocialsecuritynumber = $array['insuredsocialsecuritynumber'];
$dobhomeaddress =  $array['dobhomeaddress'];
$numberhomeaddress = $array['numberhomeaddress'];
$mailingaddress = $array['mailingaddress'];
$groupnumber = $array['groupnumber'];
$membernumber = $array['membernumber'];



$insurancecompany2 =  $array['insurancecompany2'];
$insuredname2 = $array['insuredname2'];
$relation2 =  $array['relation2'];
$insuredsocialsecuritynumber2 = $array['insuredsocialsecuritynumber2'];
$dobhomeaddress2 =  $array['dobhomeaddress2'];
$numberhomeaddress2 = $array['numberhomeaddress2'];
$mailingaddress2 = $array['mailingaddress2'];
$groupnumber2 = $array['groupnumber2'];
$membernumber2 = $array['membernumber2'];



$today = date("F j, Y, g:i a");

$htmlmessage="<H3>INSURANCE FORM </H3>
<B>Date: </B> $today <BR>
<H3>Primary Insurance</H3>
<B>Insurance Company Name: </B>$insurancecompany<BR>
<B>Insured Name (if other than self):</B> $insuredname<BR><BR>
<B>Relationship of Insured to Patient:</B> $relation<BR>
<B>Insured Social Security Number:</B> $insuredsocialsecuritynumber<BR>
<B>Date Of Birth:</B> $dobhomeaddress<BR><BR>
<B>Insured Phone Number:</B> $numberhomeaddress<BR>
<B>Insured Mailing Address:</B>$mailingaddress <BR>
<B>Group Number:</B>$groupnumber<BR>
<B>Member Number:</B> $membernumber<BR>

<H3>Primary Insurance</H3>
<B>Insurance Company Name: </B>$insurancecompany2<BR>
<B>Insured Name (if other than self):</B> $insuredname2<BR><BR>
<B>Relationship of Insured to Patient:</B> $relation2<BR>
<B>Insured Social Security Number:</B> $insuredsocialsecuritynumber2<BR>
<B>Date Of Birth:</B> $dobhomeaddress2<BR><BR>
<B>Insured Phone Number:</B> $numberhomeaddress2<BR>
<B>Insured Mailing Address:</B>$mailingaddress2 <BR>
<B>Group Number:</B>$groupnumber2<BR>
<B>Member Number:</B> $membernumber2<BR>

DATE: $today";

//echo $htmlmessage;



require_once('../config/lang/eng.php');
require_once('../tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Digitalize Media Team');
$pdf->SetTitle('INSURANCE FORM');
$pdf->SetSubject('INSURANCE FORM');
$pdf->SetKeywords('Home Sleep Clinic');

// set default header data
$pdf->SetHeaderData('new-logo.png', PDF_HEADER_LOGO_WIDTH, 'INSURANCE FORM', 'INSURANCE FORM');

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
$namewithnoextention = $insuredname.$dobhomeaddress;

$finalnamewithnoextention1 = str_replace( " " , "" ,$namewithnoextention);
$finalnamewithnoextention2 = str_replace( "." , "" ,$finalnamewithnoextention1 );
$finalnamewithnoextention2 = str_replace( "/" , "" ,$finalnamewithnoextention1 );


$filename = "insurance/".$finalnamewithnoextention2.".pdf";

//Close and output PDF document
$pdf->Output($filename, 'F');
//echo "Thank you !";

$headers  = 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\n";

// Additional headers
$headers .= 'To: Dr.Brijawi'."\n";
$headers .= 'From: Home Sleep Clinic <info@homesleepclinic.com>'."\n";

$MAIL_TO = "cbcprint@yahoo.com";

$subject = "NEW INSURANCE FORM";

$message = "<DIV align='center'><img src='http://www.homesleepclinic.com/css/images/new-logo.png'><BR><H3>INSURANCE FORM ONLINE SUBMIT</H3></DIV>
<BR>
This is a test for INSURANCE FORM , please click
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