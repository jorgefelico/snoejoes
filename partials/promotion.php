
<?php

$curl = curl_init();

function get_string_between($string, $start, $end){
    $string = " ".$string;
    $ini = strpos($string,$start);
    if ($ini == 0) return "";
    $ini += strlen($start);
    $len = strpos($string,$end,$ini) - $ini;
    return substr($string,$ini,$len);
}

curl_setopt_array($curl, Array(
	CURLOPT_URL            => 'http://www.snoejoes.com/blog/category/promotion/feed/',
	CURLOPT_USERAGENT      => 'spider',
	CURLOPT_TIMEOUT        => 120,
	CURLOPT_CONNECTTIMEOUT => 30,
	CURLOPT_RETURNTRANSFER => TRUE,
	CURLOPT_ENCODING       => 'UTF-8'
));

$data = curl_exec($curl);

curl_close($curl);

$xml = simplexml_load_string($data, 'SimpleXMLElement', LIBXML_NOCDATA);

$current = 0;
$limit = 5;

?>
<div class="row">
<div class="columns large-12">
  <h2>News and Promotions</h2>
	<ul class="promotion">

		<?php foreach($xml->channel->item as $item) {

      $thumb = get_string_between($item->description, "<thumbnail>", "</thumbnail>");
      $content = get_string_between($item->description, "<content>", "</content>");

      echo "<li><a href='$item->link'>". $thumb ."</a></li>";
			// $item->pubDate; $item->link;
			$current++;
			if($current == $limit){break;};


		}
		?>

	</ul>
</div>
</div>
