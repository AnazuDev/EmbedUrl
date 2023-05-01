<?php
$stream = "";
$url = "embed.php?Url=$stream";

$url_parts = parse_url($url);
$query_string = $url_parts['query'];

parse_str($query_string, $query_params);

$embed = array(
    "url" => $query_params['Url']
);

echo json_decode($embed);

?>