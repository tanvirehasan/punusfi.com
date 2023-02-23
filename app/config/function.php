<?php
//SELECT
function SelectData($TableName, $moresql){
	global $conn;
	$sql = "SELECT * FROM $TableName $moresql";
	$select = mysqli_query($conn, $sql);
	return $select;
}
//update data
function UpdateData($table_name, $more){
	global $conn;
	$sql = "UPDATE {$table_name} SET {$more} ";
	$update = mysqli_query($conn,$sql);
	return $update;
}


function rowcount($TableName, $moresql)
{
    global $conn;
    $sql = "SELECT * FROM $TableName $moresql";
    $select = mysqli_query($conn, $sql);
    $row_count = mysqli_num_rows($select);
    return $row_count;
}


//UserData
function UserData($U_data){
    $row = mysqli_fetch_array(SelectData('users',"WHERE email_id='{$_SESSION['user']}' or user_name='{$_SESSION['user']}' "));
    return $row[$U_data];
}


//UserData
function siteUserData($Usr_data,$username)
{
    $row = mysqli_fetch_array(SelectData('users', "WHERE email_id='$username' or user_name='$username' or id='$username' "));
    return $row[$Usr_data];
}




//UserData
function referidData($data){
    $referid = UserData('refer_id');
    $row = mysqli_fetch_array(SelectData('users', "WHERE user_name='$referid' "));
    return $row[$data];
}

//reconect
function Reconect($url){
	echo "<script> location.replace('".$url."')</script>";
}


//Login Required
function If_Not_Login($url){
	if (!isset($_SESSION['user'])) {
		Reconect($url);
	}
}


//packeg
function PackageData($pack_data){
    $packid = UserData('packageid');
    $row = mysqli_fetch_array(SelectData('packages', "WHERE package_id ='$packid'"));
    return $row[$pack_data];
}



function Team_Tree($data, $plecement_id){
    if(rowcount('team_tree', "WHERE plecement_id='$plecement_id' ")>0){
        $row = mysqli_fetch_array(SelectData('team_tree', "WHERE plecement_id='$plecement_id' "));
        $data= $row[$data];
        return ($data=='') ? '+' : $data;        
    }else{
        return '+';
    }
}





// balunce ============================



// Cash In
function CashIn($userid){
    global $conn;
    $sql= "SELECT SUM(trnx_amount) as totalcashin FROM cash_in_out where recvied_id='$userid' ";
    $select = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($select);
    return $row['totalcashin'];
}

// Cash Out
function CashOut($userid){
    global $conn;
    $sql = "SELECT SUM(trnx_amount) as totalcashout FROM cash_in_out where sent_id='$userid' ";
    $select = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($select);
    return $row['totalcashout'];
}

function Current_balance(){
    $userid = UserData('id');
    $total = CashIn($userid) - CashOut($userid);
    return $total;    
}


// ROI
function ROI(){

    global $conn;
    $userid = UserData('id');
    $pardayroi= PackageData('per_day_roi');
    $invesment = PackageData('package_price');
    
    $sql = "SELECT pack_buy_date FROM investments where user_id='$userid' ";
    $select = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($select);
    $packdate= $row['pack_buy_date'];

    $date1 = date_create("$packdate");
    $date2 = date_create(date('Y-m-d'));
    $diff = date_diff($date1, $date2);
    $Totaldays = $diff->format("%a");
    $perday = ($pardayroi / 100) * $invesment;
    $totalroi = $Totaldays* $perday;
    return [$totalroi, $Totaldays];
 
}

function refericom(){
    global $conn;
    $userid = UserData('id');
    $sql = "SELECT SUM(investmnet) as refer FROM investments where refer_id='$userid' ";
    $select = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($select);
    $totalrefer = $row['refer'];  
    $refernet = (5/100)*$totalrefer;
    return (UserData('stutas') == 1) ? $refernet : 0;
}


Function Genicom(){
    
$userid = UserData('id');
global $genicom;

$datag1 = SelectData('investments', "WHERE refer_id='$userid'");
while($rowg1= $datag1->fetch_object()){
$genicom += (1.5 / 100) * $rowg1->investmnet;
// echo '<br>'.$row->user_id;

$datg2 = SelectData('investments', "WHERE refer_id='$rowg1->user_id'");
while ($rowg2 = $datg2->fetch_object()) {
$genicom += (1.25 / 100) * $rowg2->investmnet;

$datag3 = SelectData('investments', "WHERE refer_id='$rowg2->user_id'");
while ($rowg3 = $datag3->fetch_object()) {
$genicom += (1 / 100) * $rowg3->investmnet;

$datag4 = SelectData('investments', "WHERE refer_id='$rowg3->user_id'");
while ($rowg4 = $datag4->fetch_object()) {
$genicom += (0.75 / 100) * $rowg4->investmnet;

$datag5 = SelectData('investments', "WHERE refer_id='$rowg4->user_id'");
while ($rowg5 = $datag5->fetch_object()) {
$genicom += (0.50 / 100) * $rowg5->investmnet;

$datag6 = SelectData('investments', "WHERE refer_id='$rowg5->user_id'");
while ($rowg6 = $datag6->fetch_object()) {
$genicom += (0.50 / 100) * $rowg6->investmnet;

$datag7 = SelectData('investments', "WHERE refer_id='$rowg6->user_id'");
while ($rowg7 = $datag7->fetch_object()) {
$genicom += (0.50 / 100) * $rowg7->investmnet;

$datag8 = SelectData('investments', "WHERE refer_id='$rowg7->user_id'");
while ($rowg8 = $datag8->fetch_object()) {
$genicom += (0.50 / 100) * $rowg8->investmnet;


$datag9 = SelectData('investments', "WHERE refer_id='$rowg8->user_id'");
while ($rowg9 = $datag9->fetch_object()) {
$genicom += (0.50 / 100) * $rowg9->investmnet;


$datag10 = SelectData('investments', "WHERE refer_id='$rowg9->user_id'");
while ($rowg10 = $datag10->fetch_object()) {
$genicom += (0.50/ 100) * $rowg10->investmnet;

$datag11 = SelectData('investments', "WHERE refer_id='$rowg10->user_id'");
while ($rowg11 = $datag11->fetch_object()) {
$genicom += (0.50 / 100) * $rowg11->investmnet;


$datag12 = SelectData('investments', "WHERE refer_id='$rowg11->user_id'");
while ($rowg12 = $datag12->fetch_object()) {
$genicom += (0.50 / 100) * $rowg12->investmnet;

}}}}}}}}}}}}

return (UserData('stutas')==1)? $genicom:0;

}


function withdrawal(){
    global $conn;
    $username = UserData('user_name');
    $sql = "SELECT SUM(amount) as totalamount FROM withdraw where username='$username' and stutas != 3 ";
    $select = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($select);
    return $row['totalamount'];
}



//eamil
function email_send($subject, $title, $text, $receiver){
	  
$body = "<!DOCTYPE html>
<html lang='en' xmlns='http://www.w3.org/1999/xhtml' xmlns:o='urn:schemas-microsoft-com:office:office'>
<head>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width,initial-scale=1'>
	<meta name='x-apple-disable-message-reformatting'>
	<title>Punus</title>
	<style>
		table, td, div, h1, p {font-family: Arial, sans-serif;}
	</style>
</head>
<body style='margin:0;padding:0;'>
	<table role='presentation' style='width:100%; border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;'>
		<tr>
			<td align='center' style='padding:0;'>
				<table role='presentation' style='width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;'>
					<tr>
						<td align='center' style='padding:40px 0 30px 0;background:#F2F2F2;'>
							<img src='https://punusfi.com/img/logo.png' alt='' width='300' style='height:auto;display:block;' />
						</td>
					</tr>
					<tr>
						<td style='padding:36px 30px 42px 30px;'>
							<table role='presentation' style='width:100%;border-collapse:collapse;border:0;border-spacing:0;'>
								<tr>
									<td style='padding:0 0 36px 0;'>
										<h1 style='font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;'>".$title."</h1>
										<p style='margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;'>".$text. "</p>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td style='padding:30px;background:#fc5b3f;'>
							<table role='presentation' style='width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;'>
								<tr>
									<td style='padding:0;width:50%;' align='left'>
										<p style='margin:0;font-size:14px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;'>
											© Punus Finance International (PFI) ".date('Y'). "<br/><a href='http://www.punusfi.com' style='color:#ffffff;text-decoration:underline;'>Unsubscribe</a>
										</p>
									</td>
									<td style='padding:0;width:50%;' align='right'>
										<table role='presentation' style='border-collapse:collapse;border:0;border-spacing:0;'>
											<tr>
												<td style='padding:0 0 0 10px;width:38px;'>
													<a href='http://www.twitter.com/' style='color:#ffffff;'><img src='https://assets.codepen.io/210284/tw_1.png' alt='Twitter' width='38' style='height:auto;display:block;border:0;' /></a>
												</td>
												<td style='padding:0 0 0 10px;width:38px;'>
													<a href='http://www.facebook.com/' style='color:#ffffff;'><img src='https://assets.codepen.io/210284/fb_1.png' alt='Facebook' width='38' style='height:auto;display:block;border:0;' /></a>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>

";


    include('smtp/PHPMailerAutoload.php');

	$mail = new PHPMailer(); 
	// $mail->SMTPDebug  = 1;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "support@punusfi.com";
	$mail->Password = "hfcwwkxtzdqqennx";
	$mail->SetFrom("support@punusfi.com", "Punus Finance International");
	$mail->Subject = $subject;
	$mail->Body =$body;
	$mail->AddAddress($receiver);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		$mail->ErrorInfo;
	    }else{
		return 'Sent';
	}
	
	return $body;
}



























function cunty_list(){?>

    <option value="Afghanistan">Select a country</option>
    <option value="Afghanistan">Afghanistan</option>
    <option value="Åland Islands">Åland Islands</option>
    <option value="Albania">Albania</option>
    <option value="Algeria">Algeria</option>
    <option value="American Samoa">American Samoa</option>
    <option value="Andorra">Andorra</option>
    <option value="Angola">Angola</option>
    <option value="Anguilla">Anguilla</option>
    <option value="Antarctica">Antarctica</option>
    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
    <option value="Argentina">Argentina</option>
    <option value="Armenia">Armenia</option>
    <option value="Aruba">Aruba</option>
    <option value="Australia">Australia</option>
    <option value="Austria">Austria</option>
    <option value="Azerbaijan">Azerbaijan</option>
    <option value="Bahamas">Bahamas</option>
    <option value="Bahrain">Bahrain</option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="Barbados">Barbados</option>
    <option value="Belarus">Belarus</option>
    <option value="Belgium">Belgium</option>
    <option value="Belize">Belize</option>
    <option value="Benin">Benin</option>
    <option value="Bermuda">Bermuda</option>
    <option value="Bhutan">Bhutan</option>
    <option value="Bolivia">Bolivia</option>
    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
    <option value="Botswana">Botswana</option>
    <option value="Bouvet Island">Bouvet Island</option>
    <option value="Brazil">Brazil</option>
    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
    <option value="Brunei Darussalam">Brunei Darussalam</option>
    <option value="Bulgaria">Bulgaria</option>
    <option value="Burkina Faso">Burkina Faso</option>
    <option value="Burundi">Burundi</option>
    <option value="Cambodia">Cambodia</option>
    <option value="Cameroon">Cameroon</option>
    <option value="Canada">Canada</option>
    <option value="Cape Verde">Cape Verde</option>
    <option value="Cayman Islands">Cayman Islands</option>
    <option value="Central African Republic">Central African Republic</option>
    <option value="Chad">Chad</option>
    <option value="Chile">Chile</option>
    <option value="China">China</option>
    <option value="Christmas Island">Christmas Island</option>
    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
    <option value="Colombia">Colombia</option>
    <option value="Comoros">Comoros</option>
    <option value="Congo">Congo</option>
    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
    <option value="Cook Islands">Cook Islands</option>
    <option value="Costa Rica">Costa Rica</option>
    <option value="Cote D'ivoire">Cote D'ivoire</option>
    <option value="Croatia">Croatia</option>
    <option value="Cuba">Cuba</option>
    <option value="Cyprus">Cyprus</option>
    <option value="Czech Republic">Czech Republic</option>
    <option value="Denmark">Denmark</option>
    <option value="Djibouti">Djibouti</option>
    <option value="Dominica">Dominica</option>
    <option value="Dominican Republic">Dominican Republic</option>
    <option value="Ecuador">Ecuador</option>
    <option value="Egypt">Egypt</option>
    <option value="El Salvador">El Salvador</option>
    <option value="Equatorial Guinea">Equatorial Guinea</option>
    <option value="Eritrea">Eritrea</option>
    <option value="Estonia">Estonia</option>
    <option value="Ethiopia">Ethiopia</option>
    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
    <option value="Faroe Islands">Faroe Islands</option>
    <option value="Fiji">Fiji</option>
    <option value="Finland">Finland</option>
    <option value="France">France</option>
    <option value="French Guiana">French Guiana</option>
    <option value="French Polynesia">French Polynesia</option>
    <option value="French Southern Territories">French Southern Territories</option>
    <option value="Gabon">Gabon</option>
    <option value="Gambia">Gambia</option>
    <option value="Georgia">Georgia</option>
    <option value="Germany">Germany</option>
    <option value="Ghana">Ghana</option>
    <option value="Gibraltar">Gibraltar</option>
    <option value="Greece">Greece</option>
    <option value="Greenland">Greenland</option>
    <option value="Grenada">Grenada</option>
    <option value="Guadeloupe">Guadeloupe</option>
    <option value="Guam">Guam</option>
    <option value="Guatemala">Guatemala</option>
    <option value="Guernsey">Guernsey</option>
    <option value="Guinea">Guinea</option>
    <option value="Guinea-bissau">Guinea-bissau</option>
    <option value="Guyana">Guyana</option>
    <option value="Haiti">Haiti</option>
    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
    <option value="Honduras">Honduras</option>
    <option value="Hong Kong">Hong Kong</option>
    <option value="Hungary">Hungary</option>
    <option value="Iceland">Iceland</option>
    <option value="India">India</option>
    <option value="Indonesia">Indonesia</option>
    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
    <option value="Iraq">Iraq</option>
    <option value="Ireland">Ireland</option>
    <option value="Isle of Man">Isle of Man</option>
    <option value="Israel">Israel</option>
    <option value="Italy">Italy</option>
    <option value="Jamaica">Jamaica</option>
    <option value="Japan">Japan</option>
    <option value="Jersey">Jersey</option>
    <option value="Jordan">Jordan</option>
    <option value="Kazakhstan">Kazakhstan</option>
    <option value="Kenya">Kenya</option>
    <option value="Kiribati">Kiribati</option>
    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
    <option value="Korea, Republic of">Korea, Republic of</option>
    <option value="Kuwait">Kuwait</option>
    <option value="Kyrgyzstan">Kyrgyzstan</option>
    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
    <option value="Latvia">Latvia</option>
    <option value="Lebanon">Lebanon</option>
    <option value="Lesotho">Lesotho</option>
    <option value="Liberia">Liberia</option>
    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
    <option value="Liechtenstein">Liechtenstein</option>
    <option value="Lithuania">Lithuania</option>
    <option value="Luxembourg">Luxembourg</option>
    <option value="Macao">Macao</option>
    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
    <option value="Madagascar">Madagascar</option>
    <option value="Malawi">Malawi</option>
    <option value="Malaysia">Malaysia</option>
    <option value="Maldives">Maldives</option>
    <option value="Mali">Mali</option>
    <option value="Malta">Malta</option>
    <option value="Marshall Islands">Marshall Islands</option>
    <option value="Martinique">Martinique</option>
    <option value="Mauritania">Mauritania</option>
    <option value="Mauritius">Mauritius</option>
    <option value="Mayotte">Mayotte</option>
    <option value="Mexico">Mexico</option>
    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
    <option value="Moldova, Republic of">Moldova, Republic of</option>
    <option value="Monaco">Monaco</option>
    <option value="Mongolia">Mongolia</option>
    <option value="Montenegro">Montenegro</option>
    <option value="Montserrat">Montserrat</option>
    <option value="Morocco">Morocco</option>
    <option value="Mozambique">Mozambique</option>
    <option value="Myanmar">Myanmar</option>
    <option value="Namibia">Namibia</option>
    <option value="Nauru">Nauru</option>
    <option value="Nepal">Nepal</option>
    <option value="Netherlands">Netherlands</option>
    <option value="Netherlands Antilles">Netherlands Antilles</option>
    <option value="New Caledonia">New Caledonia</option>
    <option value="New Zealand">New Zealand</option>
    <option value="Nicaragua">Nicaragua</option>
    <option value="Niger">Niger</option>
    <option value="Nigeria">Nigeria</option>
    <option value="Niue">Niue</option>
    <option value="Norfolk Island">Norfolk Island</option>
    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
    <option value="Norway">Norway</option>
    <option value="Oman">Oman</option>
    <option value="Pakistan">Pakistan</option>
    <option value="Palau">Palau</option>
    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
    <option value="Panama">Panama</option>
    <option value="Papua New Guinea">Papua New Guinea</option>
    <option value="Paraguay">Paraguay</option>
    <option value="Peru">Peru</option>
    <option value="Philippines">Philippines</option>
    <option value="Pitcairn">Pitcairn</option>
    <option value="Poland">Poland</option>
    <option value="Portugal">Portugal</option>
    <option value="Puerto Rico">Puerto Rico</option>
    <option value="Qatar">Qatar</option>
    <option value="Reunion">Reunion</option>
    <option value="Romania">Romania</option>
    <option value="Russian Federation">Russian Federation</option>
    <option value="Rwanda">Rwanda</option>
    <option value="Saint Helena">Saint Helena</option>
    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
    <option value="Saint Lucia">Saint Lucia</option>
    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
    <option value="Samoa">Samoa</option>
    <option value="San Marino">San Marino</option>
    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
    <option value="Saudi Arabia">Saudi Arabia</option>
    <option value="Senegal">Senegal</option>
    <option value="Serbia">Serbia</option>
    <option value="Seychelles">Seychelles</option>
    <option value="Sierra Leone">Sierra Leone</option>
    <option value="Singapore">Singapore</option>
    <option value="Slovakia">Slovakia</option>
    <option value="Slovenia">Slovenia</option>
    <option value="Solomon Islands">Solomon Islands</option>
    <option value="Somalia">Somalia</option>
    <option value="South Africa">South Africa</option>
    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
    <option value="Spain">Spain</option>
    <option value="Sri Lanka">Sri Lanka</option>
    <option value="Sudan">Sudan</option>
    <option value="Suriname">Suriname</option>
    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
    <option value="Swaziland">Swaziland</option>
    <option value="Sweden">Sweden</option>
    <option value="Switzerland">Switzerland</option>
    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
    <option value="Taiwan">Taiwan</option>
    <option value="Tajikistan">Tajikistan</option>
    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
    <option value="Thailand">Thailand</option>
    <option value="Timor-leste">Timor-leste</option>
    <option value="Togo">Togo</option>
    <option value="Tokelau">Tokelau</option>
    <option value="Tonga">Tonga</option>
    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
    <option value="Tunisia">Tunisia</option>
    <option value="Turkey">Turkey</option>
    <option value="Turkmenistan">Turkmenistan</option>
    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
    <option value="Tuvalu">Tuvalu</option>
    <option value="Uganda">Uganda</option>
    <option value="Ukraine">Ukraine</option>
    <option value="United Arab Emirates">United Arab Emirates</option>
    <option value="United Kingdom">United Kingdom</option>
    <option value="United States">United States</option>
    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
    <option value="Uruguay">Uruguay</option>
    <option value="Uzbekistan">Uzbekistan</option>
    <option value="Vanuatu">Vanuatu</option>
    <option value="Venezuela">Venezuela</option>
    <option value="Viet Nam">Viet Nam</option>
    <option value="Virgin Islands, British">Virgin Islands, British</option>
    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
    <option value="Wallis and Futuna">Wallis and Futuna</option>
    <option value="Western Sahara">Western Sahara</option>
    <option value="Yemen">Yemen</option>
    <option value="Zambia">Zambia</option>
    <option value="Zimbabwe">Zimbabwe</option>

<?php } ?>