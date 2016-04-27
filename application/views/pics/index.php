
<?php
//views/pics/index.php

$this->load->view($this->config->item('theme').'header');

?>

<h2><?php echo $title; ?></h2>

<?php
/*
flickr-api-test.php

original from: http://lifesforlearning.com/connecting-to-the-flickr-api-with-php/

*/

$api_key = 'e3c827848ba7a996e22e30a51250e8bc';
$tags = 'puppies,kittens';

$perPage = 25;
$url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
$url.= '&api_key=' . $api_key;
$url.= '&tags=' . $tags;
$url.= '&per_page=' . $perPage;
$url.= '&format=json';
$url.= '&nojsoncallback=1';
 
$response = json_decode(file_get_contents($url));
$pics = $response->photos->photo;
 
/*
echo "<pre>";
echo var_dump($response);
echo "</pre>";
die;
*/
 
foreach($pics as $pic){

    $size = 'q';
    $photo_url = '
    http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';
    
    echo "<div class='col-md-4'>";
    echo "<img class='flickr center-block' title='" . $pic->title . "' src='" . $photo_url . "' />";
    echo "<a class='text-center center-block' href='" . $photo_url . "'> " . $pic->title . " </a>";
    echo "</div>";
 
}

//endforeach; 

?>

<?php

$this->load->view($this->config->item('theme').'footer');

?>






