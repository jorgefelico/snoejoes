
<?php

$curl = curl_init();

curl_setopt_array($curl, Array(
	CURLOPT_URL            => 'http://www.snoejoes.com/blog/feed/',
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
<div class="columns medium-4">
	<h4>Recent News</h4>
	<ul>

		<?php foreach($xml->channel->item as $item) {
			echo "<li><a href='$item->link'>". $item->title ."</a></li>";
			// $item->pubDate; $item->link;
			$current++;
			if($current == $limit){break;};

		}
		?>


	</ul>
</div>
