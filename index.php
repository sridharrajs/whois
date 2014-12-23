<?php
/*

Speedy Whois - A website for whois queries, based on the phpWhois class.
Copyleft by Uri Even-Chen, Speedy Software.
http://www.speedywhois.com/

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

*/

$query= trim(@$_POST['query']);

header('Content-Type: text/html; charset=UTF-8');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Speedy Whois - Check the owner of any domain name!</title>
<script type="text/javascript"><!--

{
   if (top != self)
   {
      top.location= self.location;
   }
}

<?php
if (!(strlen($query) > 0))
{
?>
function setfocus()
{
   document.queryform.query.focus();
   return;
}

<?php
}
?>
//--></script>
<style type="text/css"><!--

a:link
{
   text-decoration : underline;
   color : #0000CC;
   background-color : transparent;
}

a:visited
{
   text-decoration : underline;
   color : #0000CC;
   background-color : transparent;
}

a:hover
{
   text-decoration : underline;
   color : #FF0000;
   background-color : transparent;
}

a:active
{
   text-decoration : underline;
   color : #990099;
   background-color : transparent;
}

a.black:link
{
   text-decoration : none;
   color : #000000;
   background-color : transparent;
}

a.black:visited
{
   text-decoration : none;
   color : #000000;
   background-color : transparent;
}

a.black:hover
{
   text-decoration : none;
   color : #FF0000;
   background-color : transparent;
}

a.black:active
{
   text-decoration : none;
   color : #990099;
   background-color : transparent;
}

.upperrow
{
   height : 38px;
}

.middlerow
{
   height : 24px;
}

.lowerrow
{
   height : 36px;
}

.queryinput
{
	width: 200px;
}

//--></style>
</head>
<body text="#000000" link="#0000CC" vlink="#0000CC" alink="#FF0000" bgcolor="#FFFFFF"<?php
if (!(strlen($query) > 0))
{
?> onload="setfocus();"<?php
}
?>>
<center>
<b><font face="Arial" size="+3">Speedy Whois</font></b><br />
<b><font face="Arial" size="+1">Check the owner of any domain name!</font></b><br />
<br />
<?php
if (strlen($query) > 0)
{
?>
<table cellpadding="0" cellspacing="0" border="0" width="728" dir="ltr">
<tr align="left" valign="top"><td>
<?php
   include_once('phpwhois/whois.main.php');
   include_once('phpwhoisutils/whois.utils.php');

   $whois= new Whois();
   $result= $whois->Lookup($query);

   echo "<br />\n";
   echo "<b>Results for " . $query . ":</b><br />\n";
   echo "<br />\n";

   if (!empty($result['rawdata']))
   {
      $utils= new utils;
      echo $utils->showHTML($result);
   }
   else
   {
      echo implode($whois->Query['errstr'],"<br />\n");
   }

   echo "<br />\n";
?>
</td></tr>
</table><br />
<?php
}
else
{
?>
<blockquote>
</blockquote>
<?php
}
?>
<form name="queryform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<table cellpadding="6" cellspacing="0" border="0" width="540" dir="ltr">
<tr><td bgcolor="#92CAFE">
<table width="100%" cellpadding="0" cellspacing="0" border="0" dir="ltr">
   <tr class="upperrow">
      <td align="left" valign="top" nowrap="nowrap"><font face="Arial" size="+0"><b>Enter any domain name:</b></font></td>
   </tr>
   <tr class="middlerow">
      <td align="center" valign="middle" nowrap="nowrap"><input type="text" name="query" value="" class="queryinput" />&nbsp;<input type="submit" name="submit" value="Check Domain" /></td>
   </tr>
   <tr class="lowerrow">
      <td align="right" valign="bottom"></td>
   </tr>
</table>
</td></tr>
</table>
</form>
<br />
<br />
<font face="Arial" size="+0"><b>Webmasters - <a href="http://www.speedywhois.com/webmasters/" target="_top">Create your own whois website!</a></b></font><br />
<br />
<font face="Arial" size="-1"><a href="http://www.speedywhois.com/" target="_top" class="black"><b>Speedy Whois</b></a> is brought to you by <a href="http://www.speedy.net/" target="_top" class="black"><b>Speedy Net</b></a>.</font><br />
<br />
</center>
</body>
</html>
