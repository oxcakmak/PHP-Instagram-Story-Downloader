<?php
/*
Author: Osman Çakmak
Skype: oxcakmak
Email: oxcakmak@hotmail.com
Website: http://oxcakmak.com/
Country: Turkey [TR]
*/
require_once('class.instagramStory.php');
$story = new instagram_story();
echo $story->getStory("oxcakmak");
?>
