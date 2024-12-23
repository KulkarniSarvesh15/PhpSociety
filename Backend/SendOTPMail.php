<?php
	$OTP = rand(100000,999999);
    $NID = $_SESSION['NewUserID'];
    $checksql = "SELECT COUNT(*) AS NR FROM `userverification` where UserID = ".$NID;
    $checkquery = mysqli_query($conn,$checksql);
    $checkrow=mysqli_fetch_assoc($checkquery);
    if($checkrow['NR']>0){
        $Usql = "UPDATE `userverification` SET `OTP` = '$OTP', `IsVerified` = '0', 
                `GeneratedOn` = CURRENT_TIMESTAMP, `Expiry` = ADDTIME(CURRENT_TIMESTAMP,'0:5:0')  
                WHERE `userverification`.`UserID` = ".$NID;
        $Uquery = mysqli_query($conn,$Usql);
    }
    else{
        $sql = "INSERT INTO `userverification` 
           (`UserID`, `OTP`, `IsVerified`, `GeneratedOn`, `Expiry`) 
           VALUES ('$NID', '$OTP', '0', current_timestamp(), ADDTIME(CURRENT_TIMESTAMP,'0:5:0'));";
        $query = mysqli_query($conn,$sql);
    }

	#$To = $Email;
	$To = "smsoft.development@gmail.com";
	$Subject = "Society Soft Plus - User Verification";
	$Message = "<div style='font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2'>
                    <div style='margin:50px auto;width:70%;padding:20px 0'>
                        <div style='border-bottom:1px solid #eee'>
                            <a href='' style='font-size:1.4em;color: #4E73FD;text-decoration:none;font-weight:600'>Society Soft Plus</a>
                        </div>
                        <p style='font-size:1.1em'>Hi,</p>
                        <p>Thank you for choosing Society Soft Plus. <br />Use the following OTP to complete your Sign Up procedures. OTP is valid for 5 minutes</p>
                        <h2 style='background: #4E73FD;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;'>".$OTP."</h2>
                        <p style='font-size:0.9em;'>Regards,<br />Society Soft Plus</p>
                        <hr style='border:none;border-top:1px solid #eee' />
                        <div style='float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300'>
                            <p>Copyright © Society Soft Plus 2020</p>
                        </div>
                    </div>
               </div>";
	$Headers = "From: Society Soft Plus \r\n";
	$Headers .= "MINE-Version: 1.0" . "\r\n";
	$Headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	mail($To,$Subject,$Message,$Headers);
?>