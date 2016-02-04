<?php
$query = trim(@$_POST['query']);
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Whois Lookup</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="octicons/octicons.css">
    <link rel="stylesheet" type="text/css" href="css/docs.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<h2 class="text-center"> Whois Lookup </h2>
<br/>
<center>
    <form>
        <div class="input-group text-center" style="width:300px">
            <input type="text" id="domainInp" class="form-control" required
                   style="font-size: 30px;height: 50px;" autofocus
                   placeholder="enter url">
      <span class="input-group-btn">
        <button class="btn btn-default" id="getBtn" style="font-size:23px;height:50px" type="button">Look up</button>
      </span>
        </div>
    </form>
</center>
<br/>
<br/>

<div class="container">
    <div class="row">
        <div class="info col-md-12 fit"></div>
    </div>
</div>

<footer class="text-center">
    File bugs
    <a href="https://github.com/sridharrajs/whois/issues" target="_blank"><span
            class="octicon octicon-issue-opened"></span></a>
    <br/>

    <div class="bs-docs-social">
        <ul class="bs-docs-social-buttons">
            <li>
                <iframe class="github-btn"
                        src="http://ghbtns.com/github-btn.html?user=sridharrajs&repo=whois&type=watch&count=true"
                        width="100" height="20" title="Star on GitHub"></iframe>
            </li>
            <li>
                <iframe class="github-btn"
                        src="http://ghbtns.com/github-btn.html?user=sridharrajs&amp;repo=whois&amp;type=fork&amp;count=true"
                        width="102" height="20" title="Fork on GitHub"></iframe>
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
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>

<!-- Piwik -->
<script type="text/javascript">
    var _paq = _paq || [];
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function () {
        var u = "//piwik.sridhar.co/";
        _paq.push(['setTrackerUrl', u + 'piwik.php']);
        _paq.push(['setSiteId', 4]);
        _paq.push(['enableHeartBeatTimer']);
        var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
        g.type = 'text/javascript';
        g.async = true;
        g.defer = true;
        g.src = u + 'piwik.js';
        s.parentNode.insertBefore(g, s);
    })();
</script>
<noscript><p><img src="//sridhar.co/piwik/piwik.php?idsite=4" style="border:0;" alt=""/></p></noscript>
<!-- End Piwik Code -->


</body>
</html>
