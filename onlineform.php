<?php

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


$ipaddress = $_SERVER['REMOTE_HOST'];
$array = $_POST;
//============================================================+
 
/*$fname = $array['fname'];
$dob = $array['dob'];
$age = $array['age'];

$phname = $array['phname'];
$phphone = $array['phphone'];
*/

$height = $array['height'];
$weight = $array['weight'];
$insurance = $array['insurance'];
$gender = $array['gender'];
$excessive = $array['excessive'];
$sitingandreading = $array['sitingandreading'];
$tv = $array['tv'];
$puplic = $array['puplic'];
$passenger = $array['passenger'];
$afternoon = $array['afternoon'];
$talking = $array['talking'];
$lunch = $array['lunch'];
$stopedcar = $array['stopedcar'];
$drive = $array['drive'];
$total = $sitingandreading+$tv+$puplic+$passenger+$afternoon+$talking+$lunch+$stopedcar+$drive;

//----------------------------

$sleephistoryproblem =  html2txt($array['sleephistoryproblem']);

$restlesoption = $array['restlesoption'];
$restless = $array['restless'];
$snoreoption = $array['snoreoption'];
$doyousnore = $array['doyousnore'];
$allpositionsoption = $array['allpositionsoption'];

$allpositions =  html2txt($array['allpositions']);

$familtytoldoption = $array['familtytoldoption'];
$familtytold = $array['familtytold'];
$gaspingoption = $array['gaspingoption'];
$gasping = $array['gasping'];
$drymounthoption = $array['drymounthoption'];
$drymounth = $array['drymounth'];
$headacheoption = $array['headacheoption'];
$headache = $array['headache'];
$tinglyoption = $array['tinglyoption'];
$tingly = $array['tingly'];
$kickoption = $array['kickoption'];
$kick = $array['kick'];
$vacationbedoption = $array['vacationbedoption'];
$vacationbed = $array['vacationbed'];
$nightpainoption = $array['nightpainoption'];
$nightpain = $array['nightpain'];
$grindteethoption = $array['grindteethoption'];
$grindteeth = $array['grindteeth'];
$sleepwalkoption = $array['sleepwalkoption'];
$sleepwalk = $array['sleepwalk'];
$sleeptalkoption = $array['sleeptalkoption'];
$sleeptalk = $array['sleeptalk'];
$paralyze = $array['paralyze'];
$paralyzeoption = $array['paralyzeoption'];
$weaknessoption = $array['weaknessoption'];
$weakness = $array['weakness'];
$visualoption = $array['visualoption'];
$visual = $array['visual'];
$staying = $array['staying'];
$stayingoption = $array['stayingoption'];
$changedweightoption = $array['changedweightoption'];
$gainedweight = $array['gainedweight'];
$lostweight = $array['lostweight'];
$hadaccednintoption = $array['hadaccednintoption'];
$dateofaccedeint = $array['dateofaccedeint'];
$describeaccednint = $array['describeaccednint'];

/*---------------------------------------------*/


/*-----------SLEEP HISTORY---------*/
$bedtime = $array['bedtime'];
$weekdaysbedtimeoption  = $array['weekdaysbedtimeoption'];
$waketime = $array['waketime'];
$weekdayswaketimeoption = $array['weekdayswaketimeoption'];
$avaragesleepamountweekday = $array['avaragesleepamountweekday'];
$avaragesleepamountweekend = $array['avaragesleepamountweekend'];
$weekendwakeimeoption = $array['weekendwakeimeoption'];
$weekendwaketime = $array['weekendwaketime'];
$weekendbedtimeoption = $array['weekendbedtimeoption'];
$weekendbedtime = $array['weekendbedtime'];
$minstosleep = $array['minstosleep'];
$hourstosleep = $array['hourstosleep'];
$wakerestedoption = $array['wakerestedoption'];
$cpapoption = $array['cpapoption'];
$cpapop = $array['cpapop'];
$oxygenoption = $array['oxygenoption'];
$oxygen = $array['oxygen'];
$rotatingoption = $array['rotatingoption'];
$manytimewakingup = $array['manytimewakingup'];
$doyoufeelsleepoption = $array['doyoufeelsleepoption'];
$doyounapoption = $array['doyounapoption'];
$howoftennap = $array['howoftennap'];


/*****************FSS**********/

$motivation = $array['motivation'];
$exercise = $array['exercise'];
$easy = $array['easy'];
$physical = $array['physical'];
$problems = $array['problems'];
$prevent = $array['prevent'];
$interferes = $array['interferes'];
$disabling = $array['disabling'];
$family = $array['family'];

$totalfss = $motivation+$exercise+$easy+$physical+$problems+$prevent+$interferes+$disabling+$family;

/***********Medical History**********/

if (@$array['Tonsillectomy'])
{
 $Tonsillectomy = "X";
}
else
{
$Tonsillectomy = "";
}

if (@$array['Cardiac_Cath'])
{
 $Cardiac_Cath = "X";
}
else
{
$Cardiac_Cath = "";
}

if (@$array['Lung_Disease'])
{
 $Lung_Disease = "X";
}
else
{
$Lung_Disease = "";
}

if (@$array['Orthopedic_Surgery'])
{
 $Orthopedic_Surgery = "X";
}
else
{
$Orthopedic_Surgery = "";
}

if (@$array['Hernia_Repair'])
{
 $Hernia_Repair = "X";
}
else
{
$Hernia_Repair = "";
}



if (@$array['Nasal_Surgery'])
{
 $Nasal_Surgery = "X";
}
else
{
$Nasal_Surgery = "";
}

if (@$array['Arthriti'])
{
 $Arthriti = "X";
}
else
{
$Arthriti = "";
}



if (@$array['Asthma'])
{
 $Asthma = "X";
}
else
{
$Asthma = "";
}

if (@$array['Appendectomy'])
{
 $Appendectomy = "X";
}
else
{
$Appendectomy = "";
}

if (@$array['Diabetes'])
{
 $Diabetes = "X";
}
else
{
$Diabetes = "";
}

if (@$array['Ulcers'])
{
 $Ulcers = "X";
}
else
{
$Ulcers = "";
}
if (@$array['High_Cholesterol'])
{
 $High_Cholesterol = "X";
}
else
{
$High_Cholesterol = "";
}
if (@$array['Cardiac_Bypass'])
{
 $Cardiac_Bypass = "X";
}
else
{
$Cardiac_Bypass = "";
}

if (@$array['Heart_Disease'])
{
 $Heart_Disease= "X";
}
else
{
$Heart_Disease = "";
}
if (@$array['Thyroid_Disease'])
{
 $Thyroid_Disease= "X";
}
else
{
$Thyroid_Disease = "";
}


if (@$array['reflux'])
{
 $reflux= "X";
}
else
{
$reflux = "";
}

if (@$array['Hysterectomy'])
{
 $Hysterectomy= "X";
}
else
{
$Hysterectomy = "";
}

if (@$array['Emphysema'])
{
 $Emphysema= "X";
}
else
{
$Emphysema = "";
}

if (@$array['Seizure_Disorder'])
{
 $Seizure_Disorder= "X";
}
else
{
$Seizure_Disorder = "";
}

if (@$array['High_Blood_Pressure'])
{
 $High_Blood_Pressure= "X";
}
else
{
$High_Blood_Pressure = "";
}

$othermedications = $array['othermedications'];
$allergy = $array['allergy'];
/**********MEDICATIONS************/



$midicalname1 = $array['midicalname1'];
$midicaldose1 = $array['midicaldose1'];


$midicalname2 = $array['midicalname2'];
$midicaldose2 = $array['midicaldose2'];

$midicalname3 = $array['midicalname3'];
$midicaldose3 = $array['midicaldose3'];

$midicalname4 = $array['midicalname4'];
$midicaldose4 = $array['midicaldose4'];


$midicalname5 = $array['midicalname5'];
$midicaldose5 = $array['midicaldose5'];

$midicalname6 = $array['midicalname6'];
$midicaldose6 = $array['midicaldose6'];

$midicalname7 = $array['midicalname7'];
$midicaldose7 = $array['midicaldose7'];

$midicalname8 = $array['midicalname8'];
$midicaldose8 = $array['midicaldose8'];

$midicalname9 = $array['midicalname9'];
$midicaldose9 = $array['midicaldose9'];

$midicalname10 = $array['midicalname10'];
$midicaldose10 = $array['midicaldose10'];



$overthecounter = $array['overthecounter'];

/*********Social History *********/
$muchcaffiene = $array['muchcaffiene'];
$manycups = $array['manycups'];
$tobbacosmoke = $array['tobbacosmoke'];
$tobbacomanypacks = $array['tobbacomanypacks'];
$tobbacomanyyears = $array['tobbacomanyyears'];
$alcoholdrink = $array['alcoholdrink'];
$beer = $array['beer'];
$liquor = $array['liquor'];
$cocktails = $array['cocktails'];
$illicitdrugs = $array['illicitdrugs'];
$whatillicitdrugsusing = $array['whatillicitdrugsusing'];
$homestatus = $array['homestatus'];
if ($array['havechilred'])
{
$havechilred = "yes";
}
 else
{
$havechilred = "no";
}

$numberofchild = $array['numberofchild'];

$workstatus = $array['workstatus'];
$workdays = $array['workdays'];

$worknights = $array['worknights'];
$shiftwork = $array['shiftwork'];
$occupation = $array['occupation'];


/***********Family History************/
$familydiabetes = $array['familydiabetes'];
$familydiabetesmember = $array['familydiabetesmember'];
$familystroke = $array['familystroke'];
$familystrokemember = $array['familystrokemember'];

$familyhbp = $array['familyhbp'];
$familyhbpmember = $array['familyhbpmember'];
$familyheartdis = $array['familyheartdis'];

$familyheartdismember = $array['familyheartdismember'];
$familycancer = $array['familycancer'];
$familycancermember = $array['familycancermember'];

$familyanxiety = $array['familyanxiety'];
$familyanxietymember = $array['familyanxietymember'];
$familydepression = $array['familydepression'];
$familydepressionmember = $array['familydepressionmember'];
$familyapn = $array['familyapn'];
$familyapnmember = $array['familyapnmember'];

$familydaytimesleeping = $array['familydaytimesleeping'];
$familydaytimesleepingmember = $array['familydaytimesleepingmember'];
$familymembersnoring = $array['familymembersnoring'];

$familymembersnoringmember = $array['familymembersnoringmember'];
$familyobese = $array['familyobese'];

$familyobesemember = $array['familyobesemember'];

$familynarcolepsy =$array['familynarcolepsy'];
$familyfamilynarcolepsymember = $array['familyfamilynarcolepsymember'];

$familyotherconditions = $array['familyotherconditions'];
$familyotherconditionsymember = $array['familyotherconditionsymember'];

/******REVIEW **********/



$fever = $array['fever'];
$nightsweat = $array['nightsweat'];
$unexplainedgain = $array['unexplainedgain'];
$hearingloss = $array['hearingloss'];
$sorethroat = $array['sorethroat'];
$hoarseness = $array['hoarseness'];
$nasalcongestion = $array['nasalcongestion'];
$coughing = $array['coughing'];
$shortbreath = $array['shortbreath'];
$layingflat = $array['layingflat'];
$breathnight = $array['breathnight'];
$wheezing = $array['wheezing'];
$coughblood = $array['coughblood'];
$tbskin = $array['tbskin'];
$joinche= $array['joinche'];
$muclache = $array['muclache'];
$excessivethirt = $array['excessivethirt'];
$skindry = $array['skindry'];
$heatinto = $array['heatinto'];
$coldinto = $array['coldinto'];
$postmeno = $array['postmeno'];
$couldpregrant = $array['couldpregrant'];
$chestpain = $array['chestpain'];
$anklepain = $array['anklepain'];
$mumer = $array['mumer'];
$blackstool = $array['blackstool'];
$vomitingnausea = $array['vomitingnausea'];
$swalloing = $array['swalloing'];
$abdominalpain = $array['abdominalpain'];
$frequentbladder = $array['frequentbladder'];
$painfulurin = $array['painfulurin'];
$frequenturin = $array['frequenturin'];
$bloodurin =  $array['bloodurin'];
$nighttimeurinate = $array['nighttimeurinate'];
$lossurinatecontrol = $array['lossurinatecontrol'];
$urinestream = $array['urinestream'];
$skinrash = $array['skinrash'];
$easyskinbruis =$array['easyskinbruis'];
$losstoappetite = $array['losstoappetite'];
$feelingdepressed = $array['feelingdepressed'];
$feelinganxiety = $array['feelinganxiety'];

$agitation = $array['agitation'];
$increasedstress = $array['increasedstress'];
$paralysis = $array['paralysis'];
$numhand  = $array['numhand'];
$balance = $array['balance'];
$historyofstrok = $array['historyofstrok'];
$noconcentrate = $array['noconcentrate'];
$seizureshistory = $array['seizureshistory'];
$headachehistory = $array['headachehistory'];


/*************************/


/********LAST FORM********/
$nameofpatient = $array['nameofpatient'];
$male = $array['male'];
$female = $array['female'];
$homeaddress = $array['homeaddress'];
$cityhomeaddress = $array['cityhomeaddress'];
$statehomeaddress = $array['statehomeaddress'];
$ziphomeaddress = $array['ziphomeaddress'];
$martialstatus = $array['martialstatus'];
$numberhomeaddress = $array['numberhomeaddress'];
$sinhomeaddress = $array['sinhomeaddress'];
$agehomeaddress = $array['agehomeaddress'];
$dobhomeaddress = $array['dobhomeaddress'];
$emphomeaddress = $array['emphomeaddress'];
$bushomeaddress = $array['bushomeaddress'];
$empaddhomeaddress  = $array['empaddhomeaddress'];
$empaddcityhomeaddress = $array['empaddcityhomeaddress'];
$empaddstatehomeaddress = $array['empaddstatehomeaddress'];
$empaddziphomeaddress = $array['empaddziphomeaddress'];
$relativehomeaddress = $array['relativehomeaddress'];
$relationhomeaddress = $array['relationhomeaddress'];
$primarycarehomeaddress = $array['primarycarehomeaddress'];
$primarycarephonehomeaddress = $array['primarycarephonehomeaddress'];
$spousename = $array['spousename'];
$spousedob = $array['spousedob'];
$spousesocsec = $array['spousesocsec'];
$spouseemp = $array['spouseemp'];
$spousebus = $array['spousebus'];
$spousebusaddress = $array['spousebusaddress'];
$spousebusaddresscity = $array['spousebusaddresscity'];
$spousebusaddressstate = $array['spousebusaddressstate'];
$spousebusaddresszipcode = $array['spousebusaddresszipcode'];
$spousebusaddressparentsname = $array['spousebusaddressparentsname'];
$spousebusaddressparentsaddress = $array['spousebusaddressparentsaddress'];
$spousebusaddressparentsphone = $array['spousebusaddressparentsphone'];
$nameofguardian = $array['nameofguardian'];
$guardiangender = $array['guardiangender'];
$homeaddressguardian = $array['homeaddressguardian'];
$cityhomeaddressguardian = $array['cityhomeaddressguardian'];
$statehomeaddressguardian = $array['statehomeaddressguardian'];
$ziphomeaddressguardian = $array['ziphomeaddressguardian'];
$martialstatusguardian = $array['martialstatusguardian'];
$numberhomeaddressguardian = $array['numberhomeaddressguardian'];
$cellhomeaddressguardian = $array['cellhomeaddressguardian'];
$sinhomeaddressguardian = $array['sinhomeaddressguardian'];
$agehomeaddressguardian = $array['agehomeaddressguardian'];
$dobhomeaddressguardian = $array['dobhomeaddressguardian'];
$empaddhomeaddressguardian = $array['empaddhomeaddressguardian'];
$empaddcityhomeaddressguardian = $array['empaddcityhomeaddressguardian'];
$empaddstatehomeaddressguardian = $array['empaddstatehomeaddressguardian'];
$empaddziphomeaddressguardian = $array['empaddziphomeaddressguardian'];

/*****AUTHORIZE**************/


$nameofpatient = $array['nameofpatient'];
$authorize1 = $array['authorize1'];
$authorize2 = $array['authorize2'];
$authorize3 = $array['authorize3'];
$authorize4 = $array['authorize4'];
$authorize5 = $array['authorize5'];
$authorize6 = $array['authorize6'];
$authorize7 = $array['authorize7'];
$authorize8 = $array['authorize8'];


$comercialauthorize = $array['comercialauthorize'];

if (@$array['comercialauthorize'])
{
 $comercialauthorize= "X"; 
 $authorize9 = $array['authorize9'];
}
else
{
 $comercialauthorize = "n/a";
 $authorize9 = "n/a";
}

$today = date("F j, Y, g:i a");




require_once('../config/lang/eng.php');
require_once('../tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Digitalize Media Team');
$pdf->SetTitle('New patient forms');
$pdf->SetSubject('New patient forms');
$pdf->SetKeywords('Home Sleep Clinic');

// set default header data
$pdf->SetHeaderData('new-logo.png', PDF_HEADER_LOGO_WIDTH, "New patient forms","New patient forms");

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

$array = $_POST;
//print_r($_POST);

$message ="<H3>DEMOGRAPHIC DATA</H3>
<B>Name of Patient:</B> $nameofpatient<BR><B>Gender: </B> $gender&nbsp;&nbsp;<B>Date Of Birth (mm/dd/yyyy):</B> $dobhomeaddress <B>Age:</B>$agehomeaddress &nbsp;&nbsp;<B>Marital Status:</B> $martialstatus &nbsp;&nbsp;<B>Height:</B>$height <B>&nbsp;&nbsp;Weight:</B> $weight<BR>
<B>Insurance:</B> $insurance<BR>
<B>Social Security Number:</B> $sinhomeaddress<BR>
<B>Nearest Relative:</B> $relativehomeaddress&nbsp;&nbsp;<B>Realtionship:</B> $relationhomeaddress<BR>
<H3>Primary Care Physician</H3>
<B>Primary Care Physician:</B> $primarycarehomeaddress<BR>
<B>Phone:</B> $primarycarephonehomeaddress<BR>
<H3>Patient Address</H3>
<B>Home address:</B> $homeaddress&nbsp;&nbsp;<B>City</B> $cityhomeaddress <B>&nbsp;&nbsp;State:</B> $statehomeaddress <B>&nbsp;&nbsp;ZIP: </B> $ziphomeaddress <BR>
<B>Home Phone Number: </B> $numberhomeaddress<BR>
<B>Cell Phone Number: </B> $cellhomeaddress<BR>
<H3>Employment Information</H3>
<B>Employment Name:</B> $emphomeaddress<BR>
<B>Business Phone: </B> $bushomeaddress<BR>
<B>Address of Employer:</B> $empaddhomeaddress<BR>
<B>City:</B> $empaddcityhomeaddress <B>State:</B> $empaddstatehomeaddress <B>ZIP:</B> $empaddziphomeaddress<BR>
<BR>
<H3>Spouse Information</H3>
<B>Name of Spouse</B> $spousename<BR>
<B>Date of Birth:</B> $spousedob<BR>
<B>Social Secutity Number:</B> $spousesocsec<BR>
<H3>Employment:</H3> 
<B>Employment Name:</B> $spouseemp<BR>
<B>Business Phone:</B> $spousebus<BR>
<B>Address of Employer:</B> $spousebusaddress<BR>
<B>City:</B> $spousebusaddresscity <B>State:</B> $spousebusaddressstate <B>ZIP:</B> $spousebusaddresszipcode<BR>
<BR>
<H3>If Single, Information of Parent</H3>
<B>Name of Parent:</B> $spousebusaddressparentsname<BR>
<B>Address of Parent:</B> $spousebusaddressparentsaddress<BR>
<B>Phone of Parent:</B> $spousebusaddressparentsphone<BR>
<BR>
<H3>Guardian Information (If Patient is a Minor)</H3>
<B>Name of Guardian:</B> $nameofguardian<BR>
<B>Gender of Guardian:</B> $guardiangender<BR>
<B>Home Address of Guardian:</B> $homeaddressguardian<BR>
<B>City:</B> $cityhomeaddressguardian  <B>State:</B> $statehomeaddressguardian <B>ZIP:</B> $ziphomeaddressguardian<BR>
<B>Martial Status of Guardian:</B> $martialstatusguardian<BR>
<B>Home Phone Number of Guardian:</B> $numberhomeaddressguardian<BR>
<B>Cell Phone Numberof Guardian:</B> $cellhomeaddressguardian<BR>
<B>Social Secutity Number of Guardian:</B> $sinhomeaddressguardian<BR>
<B>Date Of Birth (guardian):</B> $dobhomeaddressguardian <B>Age:</B> $agehomeaddressguardian<BR>
<H3>Employment Information of Guardian</H3>
<B>Employment Name:</B> $emphomeaddressguardian<BR>
<B>Business Phone:</B> $bushomeaddressguardian<BR>
<B>Address of Employer:</B> $empaddhomeaddressguardian<BR>
<B>City:</B> $empaddcityhomeaddressguardian <B>State:</B> $empaddstatehomeaddressguardian <B>ZIP:</B> $empaddziphomeaddressguardian<BR>
<HR>
<H3>EXCESSIVE DAYTIME SLEEPINESS</H3>
<B>Do you experience excessive daytime sleepiness?</B> $excessive <BR>
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
<HR>
<H3>SLEEP HISTORY</H3>
<B>Describe the problem you are experiencing with your sleep and when it first began:</B><BR>
$sleephistoryproblem<BR>
<B>Are you a restless sleeper?</B> $restlesoption <B>For how long?</B> $restless<BR>
<B>Has anyone told you snore:</B> $snoreoption    <B>For how long?</B> $doyousnore<BR>
<B>Do you snore sleeping in all positions?</B> $allpositionsoption <B>For how long?</B> $allpositions<BR>
<B>Has your family told you that you quit breathing at  night?</B> $familtytoldoption <B>For how long?</B> $familtytold<BR>
<B>Have you ever awakened gasping for breath?</B> $gaspingoption <B>For how long?</B> $gasping<BR>
<B>Do you awaken with dry mouth?</B> $drymounthoption <B>For how long?</B> $drymounth<BR>
<B>Do you have morning headaches?</B> $headacheoption <B>For how long?</B> $headache<BR>
<B>Do you have (tingly) legs and feel as if you have to move them?</B> $tinglyoption <B> For how long?</B> $tingly<BR>
<B>Do you kick your legs at night?</B> $kickoption <B>For how long?</B> $kick<BR>
<B>Do you sleep better away from your own bed?</B> (Vacation) $vacationbedoption<B> For how long?</B> $vacationbed<BR>
<B>Do you have pain that bothers you at night?</B> $nightpainoption <B> For how long?</B> $nightpain<BR>
<B>Do you grind your teeth at night?</B>  $grindteethoption<B> For how long?</B> $grindteeth<BR>
<B>Do you sleep walk?</B> $sleepwalkoption<B> For how long?</B> $sleepwalk<BR>
<B>Do you talk in your sleep?</B> $sleeptalkoption <B>For how long?</B> $sleeptalk <BR>
<B>Have you ever experienced periods in which you feel paralyzed while you are going to sleep or waking up?</B> $paralyzeoption<B>For how long?</B> $paralyze<BR>
<B>Have you ever experienced sudden physical weakness during strong emotions? <i>(i.e Legs going limp while laughing or when angry)</i></B> 
$weaknessoption <B>For how long?</B> $weakness<BR>
<B>Have you ever had a visual hallucination or dream like mental images when falling asleep?</B> $visualoption<B>For how long?</B> $visual</B><BR>
<B>do you have difficulty staying awake to drive?</B> $stayingoption <B>For how long?</B> $staying <BR>
<B>your weight changed in the last 5yrs?</B> $changedweightoption <B>Gained:</B> $gainedweight <B>Pounds</B> |  <B>Lost:</B> $lostweight Pounds<BR>
<B>Have you ever had an automobile accident due to sleepiness?</B> $hadaccednintoption<B>if so, Date of accident:</B> $dateofaccedeint <BR>
<B>Details about the accident:</B> $describeaccednint</BR>
<HR>
<H3>SLEEP SCHEDULE</H3>
<B>Weekdays:</B> Bedtime: $bedtime $weekdaysbedtimeoption | Wake time: $waketime $weekdayswaketimeoption<BR>
<B>Average amount of sleep per night:</B> $avaragesleepamountweekday hours<BR>
<B>Weekends:</B> Bedtime: $weekendbedtime $weekendbedtimeoption | Wake time: $weekendwaketime $weekendwakeimeoption<BR>
<B>Average amount of sleep per night:</B> $avaragesleepamountweekend hours<BR>
<B>How long does it take you to go to sleep?</B> $hourstosleep hours | $minstosleep mins<BR>
<B>Do you wake feeling rested?</B> $wakerestedoption<BR>
<B>Do you currently use CPAP treatment at night?</B> $cpapoption  <B>If so, Pressure:</B> $cpapop<BR>
<B>Are you currently using supplemental oxygen?</B> $oxygenoption <B>If yes, $oxygen  LPM</B><BR>
<B>Do you have rotating or night shift work?</B> $rotatingoption <BR>
<B>How many times do you wake up from sleep?</B> $manytimewakingup <BR>
<B>Do you fall back to sleep easily?</B> $doyoufeelsleepoption </BR>
<B>Do you nap?</B> $doyounapoption  <B>If so, how often?</B> $howoftennap<BR>
<HR>
<H3>FSS Questionnaire</H3>
<B>During the past week, I have found that:</B><BR>
<B>$motivation</B>   My motivation is lower when I am fatigued<BR>
<B>$exercise</B>   Exercise brings on my fatigue<BR>
<B>$easy</B>   I am easily fatigued<BR>
<B>$physical</B>   Fatigue interferes with my physical functioning<BR>
<B>$problems</B>   Fatigue causes frequent problems for me<BR>
<B>$prevent</B>   My fatigue prevents sustained physical functioning<BR>
<B>$interferes</B>   Fatigue interferes with carrying out certain duties and responsibilities<BR>
<B>$disabling</B>   Fatigue is among my three most disabling symptoms<BR>
<B>$family</B>   Fatigue interferes with my work, family, or social life<BR>
<B>$totalfss</B>   TOTAL SCORE<BR>

<HR>
<H3>PAST MEDICAL HISTORY</H3>
<TABLE>
<TR><TH></TH><TH></TH><TH></TH><TH></TH></TR>
<TR><TD><B>$Tonsillectomy</B> Tonsillectomy</TD><TD><B>$Hernia_Repair</B>Hernia Repair</TD><TD><B>$Appendectomy</B>Appendectomy</TD>
<TD><B>$Cardiac_Bypass</B>Cardiac Bypass</TD></TR>

<TR><TD><B>$Hysterectomy</B>Hysterectomy</TD><TD><B>$Orthopedic_Surgery</B>Orthopedic Surgery</TD><TD><B>$Cardiac_Cath</B>Cardiac Cath</TD>
<TD><B>$Nasal_Surgery</B>Nasal Surgery</TD></TR>
<TR><TD><B>$Diabetes</B>Diabetes</TD><TD><B>$Heart_Disease</B>Heart Disease</TD><TD><B>$Emphysema</B>Emphysema</TD><TD><B>$Asthma</B>Asthma</TD></TR>
<TR><TD><B>$Lung_Disease</B>Lung Disease</TD><TD><B>$Arthritis</B>Arthritis</TD><TD><B>$Ulcers</B>Ulcers</TD><TD><B>$Thyroid_Disease</B>Thyroid Disease</TD></TR>
<TR><TD><B>$Seizure_Disorder</B>Seizure Disorder</TD><TD><B>$High_Blood_Pressure</B>High Blood Pressure</TD>
<TD><B>$High_Cholesterol</B> High Cholesterol</TD><TD><B>$reflux</B>GERD/Reflux</TD></TR>
</TABLE>
<B>OTHER:</B><BR>
$othermedications<BR>

<HR>
<H3>MEDICATIONS </H3>

<TABLE>
<TR><TH>NAME</TH><TH>DOSE</TH></TR>
<TR><TH>$midicalname1</TH><TH>$midicaldose1</TH></TR>
<TR><TH>$midicalname2</TH><TH>$midicaldose2</TH></TR>
<TR><TH>$midicalname3</TH><TH>$midicaldose3</TH></TR>
<TR><TH>$midicalname4</TH><TH>$midicaldose4</TH></TR>
<TR><TH>$midicalname5</TH><TH>$midicaldose5</TH></TR>
<TR><TH>$midicalname6</TH><TH>$midicaldose6</TH></TR>
<TR><TH>$midicalname7</TH><TH>$midicaldose7</TH></TR>
<TR><TH>$midicalname8</TH><TH>$midicaldose8</TH></TR>
<TR><TH>$midicalname9</TH><TH>$midicaldose9</TH></TR>
<TR><TH>$midicalname10</TH><TH>$midicaldose10</TH></TR>

</TABLE>
<B>Over the counter medications:</B> $overthecounter<BR>
<B>Do you have any allergies to medications?</B> $allergy<BR>
<HR>
<H3>SOCIAL HISTORY</H3>
<B>Caffeine:</B><BR>
<B>How much caffeine do you consume on a daily basis?</B> $muchcaffiene<BR>
<B>How many cups per day?</B> $manycups<BR>
<BR>
<B>Tobacco:</B><BR>
<B>Do you smoke?</B>$tobbacosmoke &nbsp;&nbsp;<B>How many packs a day</B> $tobbacomanypacks &nbsp;&nbsp;<B>How many years?</B> $tobbacomanyyears<BR>
<BR>
<B>Alcohol:</B><BR>
<B>Do you drink?</B> $alcoholdrink <BR>
$beer $liquor $cocktails<BR>
<BR><B>Illicit Drugs</B><BR>
<B>Do you take any illicit drugs ?</B> $illicitdrugs &nbsp;&nbsp; <B>What are you using?</B> $whatillicitdrugsusing<BR>
<BR><B>Home:</B> $homestatus &nbsp;&nbsp; <B>Have Children?</B> $havechilred &nbsp;&nbsp; <B>If yes, how many?</B> $numberofchild<BR>
<BR>
<B>Work:</B><BR>
<B>Current work status:</B> $workstatus &nbsp;&nbsp;<B>Work days:</B> $workdays &nbsp;&nbsp;<B>Work nights:</B> $worknights<BR>
<B>Shift work</B> $shiftwork<BR>
<B>Occupation</B> $occupation<BR>
<HR>

<H3>FAMILY HISTORY</H3>
<TABLE>
<TR><TH>Condition</TH><TH>YES/NO</TH><TH>Family Member</TH></TR>
<TR><TD>Diabetes</TD><TD>$familydiabetes</TD><TD>$familydiabetesmember</TD></TR>
<TR><TD>Stroke</TD><TD>$familystroke</TD><TD>$familystrokemember</TD></TR>
<TR><TD>High B/P</TD><TD>$familyhbp</TD><TD>$familyhbpmember</TD></TR>

<TR><TD>Heart Disease</TD><TD>$familyheartdis</TD><TD>$familyheartdismember</TD></TR>
<TR><TD>Cancer</TD><TD>$familycancer</TD><TD>$familycancermember</TD></TR>

<TR><TD>Anxiety</TD><TD>$familyanxiety</TD><TD>$familyanxietymember</TD></TR>
<TR><TD>Depression</TD><TD>$familydepression</TD><TD>$familydepressionmember</TD></TR>
<TR><TD>Sleep Apnea</TD><TD>$familyapn</TD><TD>$familyapnmember</TD></TR>
<TR><TD>Daytime Sleepiness </TD><TD>$familydaytimesleeping</TD><TD>$familydaytimesleepingmember</TD></TR>
<TR><TD>Snoring </TD><TD>$familymembersnoring</TD><TD>$familymembersnoringmember</TD></TR>
<TR><TD>Obesity  </TD><TD>$familyobese</TD><TD>$familyobesemember</TD></TR>
<TR><TD>Narcolepsy  </TD><TD>$familynarcolepsy</TD><TD>$familyfamilynarcolepsymember</TD></TR>
<TR><TD>Other  </TD><TD>$familyotherconditions</TD><TD>$familyotherconditionsymember </TD></TR>
</TABLE>
<HR>";
// create some HTML content

//HTML parser

$authorizandsign= "<H3>DISCLOSURES AND AUTHORIZATIONS</H3>
<U><I>NAME: $nameofpatient </I></U><BR>
<U><B>$authorize1</B></U>&nbsp;I am requesting that Home Sleep Clinic, (HSC) and the doctors who practice there to test me for possible sleep disorders. I understand that as a patient, I am required to authorize HSC for such service and hereby authorizing such tests.<BR><BR>
<U><B>$authorize2</B></U>&nbsp;I understand that photographs, videotapes, digital, or other images may be recorded to document my care, and I consent to this. I understand that HSC will retain the ownership rights to these images, but that I will be allowed access to view them or obtain copies. I understand that these images will be stored in a secure manner that will protect my privacy and that they will be kept for the time period required by law.<BR><BR>
<U><B>$authorize3</B></U>&nbsp;I acknowledge that I have consulted my physician and understand that the nature of the test(s) that I am about to undergo with HSC. By signing this document, I consent to the test that will be performed on me by the staff of HSC.
<H3>Receipt of Notice of Privacy Practice and Disclosure, Patients Rights and Responsibilities and Provider Performance Standards</H3>
<U><B>$authorize4</B></U>&nbsp;I have reviewed the Notice of Privacy Practices of HSC, Patient Rights and Responsibilities and Provider Performance 
Standards, and understand my rights stated in these documents. I authorize the use and disclosure of my protected health information for the purpose of treatment, determination of benefits, payment and care as described in the Notice of Privacy Practice. This includes any doctors and their staff who provides services to HSC, and any employee or agent of any medical equipment company used to supply medical equipment to me. I authorize HSC to leave messages on my answering machine/voicemail, with whoever may answer my home phone and to call me at work.
<H3>Patient Assignment of Benefits Agreement</H3>
<U><B>$authorize5</B></U>&nbsp;I authorize direct remittance of payment of all insurance or Medicare benefits to HSC for all covered services. I understand and agree that this Assignment of Benefits will have continuing effect for so long as I am receiving services from HSC. I authorize my insurance company to mail ALL PAYMENTS directly to HSC.<BR><BR>
<U><B>$authorize6</B></U>&nbsp;I understand that I ultimately bear the financial responsibility for the payment of all fees associated with services and procedures provided by HSC. I will be responsible for all charges not covered by my insurance and if I receive any payments from my insurance carrier directly for any services provided by HSC, I will immediately forward such payments to HSC.<BR><BR>
<U><B>$authorize7</B></U>&nbsp;I understand that the Explanation of Benefits (EOB) from my insurance carrier in NOT a bill from HSC, and that no charges are due from me until I receive a statement directly from HSC.
<H3>Past Due Accounts</H3>
<U><B>$authorize8</B></U>&nbsp;I understand that a fee may be charged by HSC on all accounts which are 90 days, or more past due at a rate of 50%  per month. I understand that the 50% per month may be added to any account that is 90 days or more past due, and herby agree to pay such charges if levied. I also understand that in the event my account is placed with a collection agency, and/or a lawsuit is brought against me for collections of amount due HSC I will be responsible for payment of all costs if collections, including but not limited to court costs and reasonable attorneys fees.
<H3>Commercial Drivers</H3>
<U><B>$authorize9</B></U>&nbsp;I understand that if I am diagnosed with sleep disorder, the agency that has issued my commercial drivers license may be contacted if I do not follow my doctors instructions and recommendations or if I am not compliant with my treatment plan.
<H3>Responsibility of Equipment</H3>
<U><B>$authorize10</B></U>&nbsp;I understand that the equipment that I am taking home with me is my responsibility.
I understand that the equipment must return the next day or I will be charged $100.00 per day that it is not returned.<BR><BR>
<U><B>X</B></U>&nbsp;I have read all of the above, and initials and signature represent my unqualified acceptance and acknowledgement of each of the statements written above. I authorize a copy of this form to be used in place of the original<BR><BR>
<U><B>X</B></U>&nbsp;I have read and understood the Patient Rights and Responsibilities section<BR><BR>
<B>$nameofpatient </B><BR><B>Date :</B> $today <BR>
<H5>Online User Infomration</H5>
<B>User Remote Address :</B> $ipaddress <BR>
<B>User IP Address:</B>$numberip<BR>";

$html= $message;


//$html = $message;

// output the HTML content

//echo $html;

$pdf->writeHTML($html, true, 0, true, 0);

//$pdf->writeHTML($html, true, false, true, false, '');

$pdf->AddPage();

$sysmtomsreveiw = "<H3>SYMPTOMS REVIEW</H3>
<table border='0'>
<tr>
<th width='296'></th>
<th width='10'></th>
  <th></th>
  <th width='292'></th>
  <th width='10'></th>
</tr>
<tr>
<td><B>Constitutional Review</B></td><td></td>
<td></td>
<td><B>GI Review:</B></td>
<td></td>
</tr>
<tr>
<td>Fever</td>
<td>$fever</td>
<td>&nbsp;</td>
<td>Black  Stools or bleeding from bowels</td>
<td>$blackstool</td>
</tr>
<tr>
<td>Night Sweats</td><td>$nightsweat</td>
<td>&nbsp;</td>
<td>Nausea/Vomiting</td>
<td>$vomitingnausea</td>
</tr>
<tr>
<td>Unexplained weight loss/gain</td><td>$unexplainedgain</td>
<td>&nbsp;</td>
<td>Trouble swallowing</td>
<td>$swalloing</td>
</tr>


<tr>
<td><B>Ear, Nose and Throat Review</B></td><td></td>
<td></td>
<td>Abdominal pain</td>
<td>$abdominalpain</td>
</tr>
<tr>
<td>Hearing Loss</td>
<td>$hearingloss</td>
<td>&nbsp;</td>
<td><B>GU Review</B></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Hoarseness</td><td>$hoarseness</td>
<td>&nbsp;</td>
<td>Frequent bladder infections</td>
<td>$frequentbladder</td>
</tr>

<tr>
<td>Sore Throat</td><td>$sorethroat</td>
<td>&nbsp;</td>
<td>Painful urination</td>
<td>$painfulurin</td>
</tr>

<tr>
<td>Nasal Congestion</td><td>$nasalcongestion</td>
<td>&nbsp;</td>
<td>Frequent urination</td>
<td>$frequenturin</td>
</tr>
<tr>
  <td><B>Pulmonary Review:</B></td>
  <td></td>
  <td></td>
  <td>Blood in urine</td>
  <td>$bloodurin</td>
</tr>
<tr>
  <td>Coughing</td>
  <td>$coughing</td>
  <td>&nbsp;</td>
  <td>Night time urination</td>
  <td>$nighttimeurinate</td>
</tr>
<tr>
  <td>Shortness of breath</td>
  <td>$shortbreath</td>
  <td>&nbsp;</td>
  <td>Loss of bladder control</td>
  <td>$lossurinatecontrol</td>
</tr>
<tr>
  <td>Difficulty breathing lying flat</td>
  <td>$layingflat</td>
  <td>&nbsp;</td>
  <td>Difficulty starting a stream of urine</td>
  <td>$urinestream</td>
</tr>
<tr>
  <td>Difficulty breathing at night</td>
  <td>$breathnight</td>
  <td>&nbsp;</td>
  <td><B>Skin Review</B></td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td>Wheezing</td>
  <td>$wheezing</td>
  <td>&nbsp;</td>
  <td>Skin Rash</td>
  <td>$skinrash</td>
</tr>
<tr>
  <td>Coughing up blood</td>
  <td>$coughblood</td>
  <td>&nbsp;</td>
  <td>Easy bruising</td>
  <td>$easyskinbruis</td>
</tr>
<tr>
  <td>History of positive TB skin test</td>
  <td>$tbskin</td>
  <td>&nbsp;</td>
  <td><B>Psychosocial/Social Review</B></td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td><B>Musculoskeletal  Review</B></td>
  <td></td>
  <td></td>
  <td>Loss of appetite</td>
  <td>$losstoappetite</td>
</tr>
<tr>
  <td>Muscle aching</td>
  <td>$muclache</td>
  <td>&nbsp;</td>
  <td>Feeling depressed</td>
  <td>$feelingdepressed</td>
</tr>
<tr>
  <td>Joint Pain</td>
  <td>$joinche</td>
  <td>&nbsp;</td>
  <td>Anxiety</td>
  <td>$feelinganxiety</td>
</tr>
<tr>
  <td><B>Endocrine Review</B></td>
  <td></td>
  <td></td>
  <td>Agitation</td>
  <td>$agitation</td>
</tr>
<tr>
  <td>Excessive thirst</td>
  <td>$excessivethirt</td>
  <td>&nbsp;</td>
  <td>Increased stress/trouble at work</td>
  <td>$increasedstress</td>
</tr>
<tr>
  <td>Skin moistness or dryness</td>
  <td>$skindry</td>
  <td></td>
  <td><B>Neurological Review:</B></td>
  <td></td>
</tr>
<tr>
  <td>Heat intolerance</td>
  <td>$heatinto</td>
  <td></td>
  <td>Paralysis</td>
  <td>$paralysis</td>
</tr>
<tr>
  <td>Cold intolerance</td>
  <td>$coldinto</td>
  <td></td>
  <td>Numbness/Weakness in hands, feet, or legs</td>
  <td>$numhand</td>
</tr>
<tr>
  <td><B>GYN  Review</B></td>
  <td></td>
  <td></td>
  <td>Trouble with balance</td>
  <td>$balance</td>
</tr>
<tr>
  <td>Post-menopausal</td>
  <td>$postmeno</td>
  <td></td>
  <td>History of stroke</td>
  <td>$historyofstrok</td>
</tr>
<tr>
  <td>I am or could now be pregnant</td>
  <td>$couldpregrant</td>
  <td></td>
  <td>Difficulty with concentration</td>
  <td>$noconcentrate</td>
</tr>
<tr>
  <td><B>Cardiac Review:</B></td>
  <td></td>
  <td></td>
  <td>Seizures</td>
  <td>$seizureshistory</td>
</tr>
<tr>
  <td>Chest  Pain</td>
  <td>$chestpain</td>
  <td></td>
  <td>&nbsp;Headaches</td>
  <td>$headachehistory</td>
</tr>
<tr>
  <td>Ankle Swelling</td>
  <td>$anklepain</td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>Heart Murmur</td>
  <td>$mumer</td>
  <td></td>
  <td></td>
  <td></td>
</tr>
</table>";

$meailfullmessage = $html.$sysmtomsreveiw.$authorizandsign;

$pdf->writeHTML($sysmtomsreveiw , true, 0, true, 0);
$pdf->AddPage();
$pdf->writeHTML($authorizandsign, true, 0, true, 0);

// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------
$filename = "submit/".$nameofpatient."_".$sinhomeaddress.".pdf";

//Close and output PDF document
$pdf->Output($filename, 'F');
//echo "Thank you !";

$headers  = 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\n";

// Additional headers
$headers .= 'To: Dr.Brijawi'."\n";
$headers .= 'From: Home Sleep Clinic <Email Address>'."\n";

$MAIL_TO = "Email Address";

$subject = "New Patient Forms";

$message = "<DIV align='center'><img src='new-logo.png'><BR><H3>INTIAL FORM ONLINE SUBMIT</H3></DIV>
<BR>
New patient has just filled the New Patient Forms, please click
<a href='../pdf/forms/".$filename."' target='_BLANK'>
here to view the filled form</a>";

$time = date('Y-m-d H:i');

$body = "Time: $time<BR>";
$body .= "Name: $nameofpatient<BR>";
$body .= "Message:<BR>$message<BR>";
$body .= "Form Content:<BR>$meailfullmessage";

@mail($MAIL_TO, $subject, $body , $headers);
@mail("lamismedia@gmail.com", $subject, $body , $headers);
//@mail("Email Address", $subject, $body , $headers);
@mail("Email Address", $subject, $body , $headers);

header ("Location: Link to Confirmation Page ");
//============================================================+
// END OF FILE                                                
//============================================================+
