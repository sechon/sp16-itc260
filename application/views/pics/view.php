<?php
//views/pics/view.php

$this->load->view($this->config->item('theme').'header');

?>

<h2><?php echo $title; ?></h2>

<?php

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


<?php $this->load->view($this->config->item('theme').'footer'); ?>