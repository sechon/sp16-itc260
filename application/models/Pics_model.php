<?php
//Pics_model.php

class Pics_model extends CI_Model {
    
        public function get_pics($tags)
        {
            $api_key = 'e3c827848ba7a996e22e30a51250e8bc';

            $perPage = 25;
            $url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
            $url.= '&api_key=' . $api_key;
            $url.= '&tags=' . $tags;
            $url.= '&per_page=' . $perPage;
            $url.= '&format=json';
            $url.= '&nojsoncallback=1';
            
            $response = json_decode(file_get_contents($url));
            return $response->photos->photo;
            
            
        }
}