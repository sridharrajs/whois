<?
  $query = $_GET['query'];
  $xml = file_get_contents("http://data.alexa.com/data?cli=10&url=".$query);
  $info = (array) new SimpleXMLElement($xml);
  $result = array();
  foreach ($info['SD']->COUNTRY as $key => $value) {
	echo "<b>Alexa Ranking </b>".'<br/>';
	echo "Country ".' '.$value['NAME'].'<br/>';
	echo "Country Code".' '.$value['CODE'].'<br/>';
	echo "Ranking in ".$value['NAME'].' '.$value['RANK'].'<br/>';
  } 
  foreach ($info['SD']->POPULARITY as $key => $value) {
	echo 'Global Rank '.$value['TEXT'].'</br>';
  }
?>