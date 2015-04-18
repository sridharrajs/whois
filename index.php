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
<title>Whois Lookup</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="octicons/octicons.css">
<link rel="stylesheet" type="text/css" href="css/docs.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<h2 class="text-center"> Whois Lookup </h2>
<br/>
<center>
 <div class="input-group text-center" style="width:300px">
      <input type="text" id="domainInp" class="form-control" style="width: 400px;font-size: 30px;height: 50px;" placeholder="example.com">
      <span class="input-group-btn">
        <button class="btn btn-default" id="getBtn" style = "font-size:23px;height:50px" type="button">Look up</button>
      </span>
    </div>
    </center>
<br/>
<br/>

<div class="container" style="display:hidden;"> 
<div class="row">
<div class="alexa col-md-12 text-center"></div>
   <br/>
   <br/>
   <div class="general col-md-12"></div>
</div>
<br/>
<br/>
<div class="row">
<div class="domain col-md-3 fit"></div>
<div class="register col-md-3 fit"></div>
<div class="admin col-md-3 fit"></div>
<div class="tech col-md-3 fit"></div>
</div>
</div>

<footer class="text-center">
File bugs
<a href="https://github.com/sridharrajs/whois/issues" target="_blank"><span class="octicon octicon-issue-opened"></span></a>
<br/>
    <div class="bs-docs-social">
  <ul class="bs-docs-social-buttons">
    <li>
      <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=sridharrajs&repo=whois&type=watch&count=true" width="100" height="20" title="Star on GitHub"></iframe>
    </li>
    <li>
      <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=sridharrajs&amp;repo=whois&amp;type=fork&amp;count=true" width="102" height="20" title="Fork on GitHub"></iframe>
    </li>
    
    <li>
<iframe src="http://ghbtns.com/github-btn.html?user=sridharrajs&type=follow&count=true"
  allowtransparency="true" frameborder="0" scrolling="0" width="165" height="20"></iframe>
    </li>
  </ul>
  <br/>
  Designed and built with <i class="glyphicon glyphicon-heart"></i> by 
<a href="https://github.com/sridharrajs/" target="_blank">@sridharrajs</a>
</div>
</footer>

<script type="text/javascript" src="js/jQuery v1.11.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>

</body>
</html>
