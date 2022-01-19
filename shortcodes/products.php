<?php
/*
$uri = $_SERVER['HTTP_HOST'];
$json_url = 'https://'.$uri.'/wp-json/wp/v2/product/?orderby=date&per_page=100&order=asc';
$taxonomy_slug;
if($taxonomy_slug){
	$json_url .= '&'.$taxonomy_slug.'=';
}
if($taxonomy_id && $taxonomy_slug){
	$json_url .= $taxonomy_id;
}
$json = file_get_contents($json_url);
$array = json_decode($json,true);
echo '  <div class="row m-0">';
foreach($array as $item) {
    $learn_url=$item['link'];
	$buy_url=$item['acf']['amazon_url'];
	$title=$item['title']['rendered'];
	$price=$item['acf']['price'];
	// $price= do_shortcode( '[wbcr_snippet id="187" url="'.$url.'"]' );
	$image_1_id = $item['acf']['image_1'];
	$image_1_array = file_get_contents('https://'.$uri.'/wp-json/wp/v2/media/'. $image_1_id);
	$image_1_array = json_decode($image_1_array,true);
	//$image_1_url = $image_1_array['guid']['rendered'];
	$image_1_url = $image_1_array['media_details']['sizes']['newspack-article-block-square-small']['source_url'];
	$manufacturer_id = $item['manufacturer'][0];
	echo'<div class="col-sm-12 col-md-6 col-lg-4">';
	echo '<div class="card mt-3">';
	echo '<a class="" href="'.$learn_url.'" role="button"><img class="card-img-top p-1" src="'.$image_1_url.'" alt="" /></a>';
    echo '<div class="card-body"><a class="" href="'.$learn_url.'" role="button"><h5 class="card-title">' .   $title . '</h5></a>';
	echo '    <p class="card-text"><small class="text-muted">by '.do_shortcode('[manufacturer_name manufacturer_id="'.$manufacturer_id.'"]').'</small></p>';
    echo'<p class="font-weight-bold">$'.$price .'</p>';
    echo '<a class="btn btn-warning btn-block" href="'.$learn_url.'" role="button">Learn More</a>';
	echo '<a class="btn btn-danger btn-block" href="'.$buy_url.'" role="button" target="_blank">Buy Now</a>';
	echo '</div>';
	echo '</div>';
	echo '</div>';
}
echo '</div>';
*/
?>