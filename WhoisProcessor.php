<?php
$query = $_GET['query'];
include_once('phpwhois/whois.main.php');
include_once('phpwhoisutils/whois.utils.php');
$whois = new Whois();
$naked_domain = getNakedDomain($query);
$result = $whois->Lookup($naked_domain);
if (!empty($result['rawdata'])) {
    $utils = new utils;
    echo $utils->showHTML($result);
} else {
    echo implode($whois->Query['errstr'], "<br />\n");
}
echo "<br />\n";


function getNakedDomain($input)
{
    $input = trim($input, '/');
    if (!preg_match('#^http(s)?://#', $input)) {
        $input = 'http://' . $input;
    }
    $urlParts = parse_url($input);
    return preg_replace('/^www\./', '', $urlParts['host']);
}