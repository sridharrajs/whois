<?php
$query = $_GET['query'];
include_once('phpwhois/whois.main.php');
include_once('phpwhoisutils/whois.utils.php');
$whois = new Whois();
$result = $whois->Lookup($query);
if (!empty($result['rawdata'])) {
    $utils = new utils;
    echo $utils->showHTML($result);
} else {
    echo implode($whois->Query['errstr'], "<br />\n");
}
echo "<br />\n";