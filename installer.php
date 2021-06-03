<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Script Configuration</title>
<style type="text/css">
<!--
.norm {
	font-family: Verdana, Arial, Helvetica;
	font-size: 11px;
}

.button {
	border: solid 2px #222255;
	padding: 5 5 5 5;
	background-color: #9999DD;
	font-weight: bold;
	color: black;
}
.style1 {color: #FF0000}
.style2 {color: #FF0000; font-weight: bold; }
-->
</style>
</head>

<body  bgcolor="#000044"  >
<?
	$uBase = $_SERVER['PHP_SELF'];

	$scriptName = explode("/",$_SERVER['SCRIPT_NAME']);
	$scriptName = $scriptName[sizeof($scriptName)-1];

	$urlBase = $_SERVER['SERVER_NAME'];

	$pos = strpos($uBase,$scriptName);
	$completeBase =  substr($uBase,1,$pos-1);

	if ($_GET['c']=="save") {
		$confSrc = implode("",file("setup.tpl.php"));
		
		$srcArr[0] = "/{@yourname@}/";
		$srcArr[1] = "/{@youremail@}/";
		$srcArr[2] = "/{@DriveURL@}/";
		$srcArr[3] = "/{@installurl@}/";
		$srcArr[4] = "/{@yourdomain@}/";
		$srcArr[5] = "/{@thankyou@}/";
		$srcArr[6] = "/{@affiliatesignupurl@}/";
		$srcArr[7] = "/{@myaffiliateurl@}/";
		$srcArr[8] = "/{@emailsubject@}/";
		$srcArr[9] = "/{@emailbody@}/";
		$srcArr[10] = "/{@thankyoumessage@}/";
		$srcArr[11] = "/{@productamount@}/";
		$srcArr[12] = "/{@amountafterdiscount@}/";
		$srcArr[13] = "/{@productname@}/";
		$srcArr[14] = "/{@commission@}/";


		$dstArr[0] = $_POST['yourname'];
		$dstArr[1] = $_POST['youremail'];
		$dstArr[2] = $_POST['DriveURL'];
		$dstArr[3] = $_POST['installurl'];
		$dstArr[4] = $_POST['yourdomain'];
		$dstArr[5] = $_POST['thankyou'];
		$dstArr[6] = $_POST['affiliatesignupurl'];
		$dstArr[7] = $_POST['myaffiliateurl'];
		$dstArr[8] = $_POST['emailsubject'];
		$dstArr[9] = $_POST['emailbody'];
		$dstArr[10] = $_POST['thankyoumessage'];

		$dstArr[11] = $_POST['productamount'];
		$dstArr[12] = $_POST['amountafterdiscount'];
		$dstArr[13] = $_POST['productname'];
		$dstArr[14] = $_POST['commission'];


		$confConverted = preg_replace($srcArr,$dstArr,$confSrc);
		$fh = fopen("setup.php","w");
		fwrite($fh,$confConverted);
		fclose($fh);

		echo "<div align='center' class='norm' style='color:white'><br><b>Configuration Saved.</b></div>";
		die();
	}
?>
<form method="post" action="?c=save">
<br />
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#000000">
  <tr>
    <td><img src="images/header.jpg" width="700" height="120" /></td>
  </tr>
</table>
<table class='norm'  width="700" border="0" align="center" cellpadding="10" cellspacing="0" style="border: solid 2px #999999" bgcolor="white">
  <tr>
    <td><table  width="70%" border="2" align="center" cellpadding="10" cellspacing="2" bordercolor="#000000" class='norm'>
      <tr>
        <td width="47%"><strong>Your Name Here</strong></td>
        <td width="53%"><input type="text" name="yourname" /></td>
      </tr>
      <tr>
        <td><strong>Your Email</strong></td>
        <td><input type="text" name="youremail" /></td>
      </tr>
      <tr>
        <td><p><strong>URL To Script </strong></p>
            <p>The complete URL of the website where you install the script</p></td>
        <td><p>
            <input name="installurl" type="text" size="30" value="<?=$completeBase?>" />
          </p>
            <p class="style1">**By default the field above should be filled automatically and you don't have to edit it, unless you know what you're doing. </p></td>
      </tr>
      <tr>
        <td><p><strong>Domain URL </strong></p>
            <p>Just your domain with the .com or .net, etc, extension.</p>
          <p> Do not put 'http://'</p>
          <p>&nbsp;</p></td>
        <td><p>
            <input name="yourdomain" type="text" value="<?=$urlBase?>" size="30" />
          </p>
            <p class="style1">**By default the field above should be filled automatically and you don't have to edit it, unless you know what you're doing. </p></td>
      </tr>
      <tr>
        <td><p><strong>URL To Drive Traffic To</strong></p>
            <p>Key in the URL to wher you would like to drive traffic to.</p></td>
        <td><input name="DriveURL" type="text" size="30" /></td>
      </tr>
      <tr>
        <td><p><strong>URL To Your Thank You Page </strong></p>
            <p> The full URL of the page that you want to bring your referrers to after they've entered the names &amp; emails of their 2 friends and submitted the form.</p></td>
        <td><input name="thankyou" type="text" size="30" /></td>
      </tr>
      <tr>
        <td><strong>URL For Visitors To Signup As An Affiliate </strong></td>
        <td><input name="affiliatesignupurl" type="text" size="30" /></td>
      </tr>
      <tr>
        <td><p><strong>What the affiliate link will look like.</strong><br />
          E.g. Clickbank affiliate link format:-</p>
            <p>http://hop.clickbank.net/?AFFILIATE-ID/MERCHANT-ID</p>
          <p> Of course, you can use ANY affiliate program system,
            not just ClickBank. Take whatever link format your
            affiliate program system uses and replace the characters that are meant for the AFFILIATE ID with ' $v ', like this:-</p></td>
        <td><p>
            <input name="myaffiliateurl" type="text" size="30" />
          </p>
            <p>eg. </p>
          <p>http://www.yourdomain.com/?affiliate=<strong>$v</strong></p>
          <p>Where $v is the represents the affiliate ID </p></td>
      </tr>
      <tr>
        <td><p>Enter the selling price of your product for this marketing drive.</p>
            <p>This should be the special offer price to encourage the visitor to refer two friends.</p>
          <p>&nbsp;</p></td>
        <td><p>
            <input name="productamount" type="text" size="30" />
          </p>
            <p class="style1">Enter in figures, without the dollar ($) sign. For example 50 instead of $50. </p></td>
      </tr>
      <tr>
        <td><p>Key In The Amount Of Actual Price Less The Selling Price Above </p>
            <p>For example if you're selling a product at $97 and you're offering it at $50 off for this special offer, key in $47 </p>
          <p>&nbsp;</p></td>
        <td><p>
            <input name="amountafterdiscount" type="text" size="30" />
          </p>
            <p class="style1">Enter in figures, without the dollar ($) sign. For example: 47 instead of $47 </p></td>
      </tr>
      <tr>
        <td>What is the name of your product? </td>
        <td><input name="productname" type="text" size="30" /></td>
      </tr>
      <tr>
        <td>What is the amount of commission given in % format </td>
        <td><input name="commission" type="text" size="30" /></td>
      </tr>
      <tr>
        <td><p><strong>Referred email subject </strong></p>
            <p>Subject of the Email that will be sent out 
              to the referred friends of your visitors. 
              Keep it short, simple &amp; commanding.</p></td>
        <td><input name="emailsubject" type="text" size="30" /></td>
      </tr>
      <tr class="norm">
        <td height="22" colspan="2"><p><strong>eMail Message To Referred Friends </strong></p>
            <p>The Email message that is to be sent out to the referred friends of your visitors.</p>
          <p>Make it short &amp; friendly. Avoid excessively
            promotional-sounding language. Yet make it sound beneficial. Appropriately SPAM-FILTER-PROOF<br />
            your message where required.</p>
          <p>NO NEED to add &quot;Hi&quot; or &quot;Dear Friend&quot; etc as these will be automatically added for you.</p>
          <p class="style2"> **Note: If you need to use &quot; quotation &quot; marks, add a \ slash before the mark, like this:- \&quot;quote\&quot;<br />
            </p>
          <p class="style2">You don't have to add the \ slash for single ' quotes '.</p>
          <p><strong>You don't have to put the Referral Link after &quot;Click here -&gt;&quot; in the message text above. It will be automatically added for you.</strong></p></td>
      </tr>
      <tr class="norm">
        <td height="22" colspan="2"><p align="center">
            <textarea name="emailbody" cols="60" rows="20">I came across this thing and thought I'd be too guilty not 
to let you see it too, knowing that you're passionate about 
internet marketing, just like me.

It's quite simple, really. Can you answer these 3 questions?</textarea>
          </p>
            <label></label></td>
      </tr>
      <tr class="norm">
        <td height="22" colspan="2"><p><strong>Thank You eMail Message </strong></p>
            <p>The Email message that is to be sent out to your Affiliates or Referrers.</p>
          <p>Make it short &amp; friendly. Avoid excessively
            promotional-sounding language. Yet make it sound beneficial. Appropriately SPAM-FILTER-PROOF<br />
            your message where required.</p>
          <p>NO NEED to add &quot;Hi&quot; or &quot;Dear Friend&quot; etc as these will be automatically added for you.</p>
          <p class="style2"> **Note: If you need to use &quot; quotation &quot; marks, add a \ slash before the mark, like this:- \&quot;quote\&quot;<br />
            </p>
          <p class="style2">You don't have to add the \ slash for single ' quotes '.</p>
          <p><strong>You don't have to put the Referral Link after &quot;Click here -&gt;&quot; in the message text above. It will be automatically added for you.</strong></p></td>
      </tr>
      <tr class="norm">
        <td height="22" colspan="2"><p align="center">
            <textarea name="thankyoumessage" cols="60" rows="20">Thanks for referring your 2 friends to the (REPLACE THIS WITH YOUR PRODUCT NAME.)

Here's the referral link you can use to promote the (REPLACE THIS WITH YOUR PRODUCT NAME.) and earn X% perpetual commissions</textarea>
          </p>
            <p align="center">
              <label>
              <input type="submit" name="Submit" value="Submit And Update Script Configuration" class="button" />
              </label>
            </p>
          <label></label></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
