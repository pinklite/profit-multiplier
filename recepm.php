<?php
include_once("setup.php");
?>
<html>
<head>
<title>Refer 2 Friends To Us &amp; Watch Amazing Things Happening To You!</title>
<style>
h1{font-family: Verdana}
h2{font-family: Verdana}
h3{font-family: Verdana}
h4{font-family: Verdana}
h5{font-family: Verdana}
h6{font-family: Verdana}
a:hover {  color: #0066CC}
a:hover {  text-decoration: underline}
a:link { text-decoration: underline; color: #000099; font-weight: bold}
a:visited {  text-decoration: underline; color: #0066FF}
body {
	font-family: Verdana;
	font-size: 12pt;
	background-color: #E0DFE3;
}
p{  font-size:12pt}
td{  font-size:12pt}
li{  font-size:12pt}
a:active {  color: #FF0000}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form action="epm.php" method="post" name="vmaform" id="vmaform">
<table width="640" border="0" align="center" cellpadding="10" cellspacing="0" bgcolor="#FFFFFF">
    <tr> 
      <td colspan="2" align="center" valign="middle">
	  <div align="left">
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
<tr> 
<td><h2 align="center">Tell 2 of Your Friends &amp; <br>
Here's What Will Happen to You:-</h2>
<ul>
<li>You get to purchase the <strong><?php echo $productname;?></strong> for only <strong>$    <?php echo $amount;?></strong>, that's a jaw-dropping <strong>$ <?php echo $amountdisc;?> off</strong> the normal 
price!</li>
</ul>
<ul>
<li>Your payment will be made through a safe and secure transaction process via 
<strong>Payment Processor</strong>.</li>
</ul>
<ul>
<li>Upon completion of the payment totalling <strong>$ <?php echo $amount;?></strong>, you will immediately 
receive the <strong>.Zip</strong> file containing the entire package of the <strong><?php echo $productname;?></strong> system. Save this <strong>.Zip</strong> file to 
your computer in a safe and secure place, and back it up, just in case.</li>
</ul>
<ul>
<li>Before you continue, make sure that you <strong>Sign Up With My Affiliate 
Program </strong> first, otherwise you'll lose out on your <strong><?php echo $commissionamount;?> commissions</strong>.</li>
</ul>
<ul>
<li>For the <strong> perpetual pay-out potential</strong> of this Affiliate Program 
to work at its maximum effectiveness, the 2 friends that you are about to refer 
must truly be passionate about Internet Marketing and will be very interested 
in knowing about the<strong> <?php echo $productname;?></strong> system that 
will virally multiply their website traffic and online sales.</li>
</ul>
<ul>
<li>Do not attempt to use this form to spam people. If you had somehow come to 
this website because someone had referred you via an unsolicited or inappropriate 
or spam-like method, please report the name and email address of that person to 
-<strong><?php echo $myemail;?></strong><strong><u></u></strong>, with 
&quot;Spam complaint&quot; in the subject line. <br>
<br>
</li>
<li>Please note that I do not approve 
  of spam and I have outlined my <a href="../disclaimers.php#antispam">Anti-Spam 
    Policy</a>, and therefore, any spam you receive is the sole responsibility of 
  the person who did it to you, who had abused my system.</li>
</ul>
<ul>
<li>Read my <a href="../disclaimers.php#disclaimer">Earnings Disclaimer</a> to 
understand that in no way do I guarantee 100% that you will earn any amount of 
money at all. What I do guarantee is that if the 2nd friend whom you had referred 
decides to purchase the<strong> <?php echo $productname;?></strong>, then you 
will get your <strong><?php echo $commissionamount;?> commissions</strong> immediately via <strong>Paypal</strong>.</li>
</ul>
<ul>
<li>And if that 2nd friend refers 2 more of her friends and the 1st of the 2 friends 
she had referred also purchases the <strong><?php echo $productname;?></strong>, 
then you will earn <strong><?php echo $commissionamount;?> commissions</strong> on that sale as well.</li>
</ul>
<ul>
<li>You will, subsequently, provided that the chain of referrals does not break, 
earn <strong><?php echo $commissionamount;?> commissions</strong> on sales from the 1st of the 2 friends referred 
at every level onward.</li>
</ul>
<ul>
<li>Again, all this may or may not happen due to any number of factors, some of 
which are beyond our control. What is within our control, however, is the here 
and now, where you decide who you wish to refer to the <strong><?php echo $productname;?></strong> system, the 2 persons who will help maximise your perpetual 
pay-out potential from this Affiliate Program.</li>
</ul>
<ul>
<li>Oh yes, the <strong><?php echo $productname;?></strong> system does not work 
on Hotmail accounts. Sorry.</li>
</ul></td>
</tr>
</table>
<table width="500" border="1" align="center" cellpadding="5" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#EEEEEE">
<tr> 
<td align="right" valign="middle"><p><strong>Your Name:</strong></p></td>
<td><p> 
<input name="name" type="text" id="name" size="40">
</p></td>
</tr>
<tr> 
<td align="right" valign="middle"><p><strong>Your Email:</strong></p></td>
<td><p> 
<input name="email" type="text" id="email" size="40">
</p></td>
</tr>
<tr> 
<td align="right" valign="middle"><p><strong>Your Friend #1's Name:</strong></p></td>
<td><p> 
<input name="f1name" type="text" id="f1name" size="40">
</p></td>
</tr>
<tr> 
<td align="right" valign="middle"><p><strong>Your Friend #1's Email:</strong></p></td>
<td><p> 
<input name="f1email" type="text" id="f1email" size="40">
</p></td>
</tr>
<tr> 
<td align="right" valign="middle"><p><strong>Your Friend #2's Name:</strong></p></td>
<td><p> 
<input name="f2name" type="text" id="f2name" size="40">
</p></td>
</tr>
<tr> 
<td align="right" valign="middle"><p><strong>Your Friend #2's Email:</strong></p></td>
<td><p> 
<input name="f2email" type="text" id="f2email" size="40">
</p></td>
</tr>
<tr> 
<td align="right" valign="middle"><p><strong>Your Affiliate ID:</strong></p></td>
<td><p> 
<input name="referrer" type="text" id="referrer" size="40">
</p></td>
</tr>
<tr> 
<td colspan="2" align="center" valign="middle"><p><strong> 
<input name="agree" type="checkbox" id="agree" value="1" checked>
I understand the terms stated above.</strong> 
<input name="v" type="hidden" id="v" value="<?php echo $v; ?>">
</p>
<p> 
<input type="submit" name="Submit" value="Tell My Friends Now!" onClick="if(this.value == 'Tell My Friends Now!') this.form.submit(); this.value = 'Please hold on...'; this.disabled = true;">
</p></td>
</tr>
<tr> 
<td colspan="2" align="center" valign="middle"><p><strong>Copyright &copy; 2006 
by 
      <?php echo $myname; ?>
</strong></p></td>
</tr>
<tr>
<td colspan="2" align="center" valign="middle"><p align="center"><strong><font size="-1"><a href="disclaimers.php#disclaimer">Disclaimers</a>. 
<a href="disclaimers.php#privacypolicy">Privacy Policy</a>. <a href="disclaimers.php#termsofuse">Terms 
of Use</a>. <a href="disclaimers.php#antispam">Anti-Spam</a>.</font></strong></p></td>
</tr>
</table>
     	</div>
	  </td>
    </tr>
</table>
</form>
</body>
</html>
