//* Add this to you functions.php in your child theme
//* Modifies Youtuhe oembed to not show related video

function Oembed_youtube_no_title($html,$url,$args){
$url_string = parse_url($url, PHP_URL_QUERY);
parse_str($url_string, $id);
if (isset($id['v'])) {
return '<iframe width="'.$args['width'].'" height="'.$args['height'].'" src="http://www.youtube.com/embed/'.$id['v'].'?rel=0" frameborder="0" allowfullscreen></iframe>';
}
return $html;
}
add_filter('oembed_result','Oembed_youtube_no_title',10,3);
