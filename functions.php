<?php


// Custom Functions for CSS/Javascript Versioning
$GLOBALS["TEMPLATE_URL"] = get_bloginfo('template_url')."/";
$GLOBALS["TEMPLATE_RELATIVE_URL"] = wp_make_link_relative($GLOBALS["TEMPLATE_URL"]);

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

function new_excerpt_length($length) {
	return 10; //number of words 
	}
add_filter('excerpt_length', 'new_excerpt_length'); 

function slidesh0w($postId) {

		// Get the post ID
		$iPostID = $postId;

		//Put images from post in to array $images. Order by menu order defined in post gallery
		$images = get_children( array('post_parent' => $iPostID, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID') );
		
		//check if there are any images attached to the post
		if (isset($images))
		{
				//set counter to 0
				$count=0;	
				//go through all images in array $images
				echo"<div id=\"gallery\" class=\"ad-gallery\">
      <div class=\"ad-image-wrapper\">
      </div>
      <div id=\"navig\" class=\"ad-nav\">
        <div class=\"ad-thumbs\">
          <ul class=\"ad-thumb-list\">";
			foreach( $images as $image )
				{
					$imageID = $image->ID;
					//get medium and large image url for image
					$thumbImageSrc = wp_get_attachment_image_src($imageID, $size='thumbnail', $icon = false); 
					$medImageSrc = wp_get_attachment_image_src($imageID, $size='medium', $icon = false); 
					$largeImageSrc = wp_get_attachment_image_src($imageID, $size='large', $icon = false); 
					
					//echo"<a href='$largeImageSrc[0]' rel='shadowbox[Bilder]'><img src='$thumbImageSrc[0]' border='0'></a>";
					echo"<li><a href='$largeImageSrc[0]' class='thickbox' rel='portfolio'><img src='$thumbImageSrc[0]' alt='image'  /></a></li>";
					//}
					//increase counter
					$count++;
				
				} //foreach
				//echo"end";
				echo"</ul>
        </div><!-- .ad-thumbs -->
      </div><!--#navig-->
    </div><!--#gallery-->";
		}
		}


function bxw_get_thumbs($myID) { //used in sidebar - can be used twice on a page...
    $myPostID = $myID;   
    $arrImages =& get_children('post_type=attachment&post_mime_type=image&post_parent=' . $myPostID . '&orderby=menu_order&order=ASC' );
    // If images exist for this page
    if($arrImages) {
        $arrKeys = array_keys($arrImages);  
        $iNum = $arrKeys[0];
        $sThumbUrl = wp_get_attachment_thumb_url($iNum);
        $sImgString = '<img src="' . $sThumbUrl . '" alt="Thumbnail Image" />';
        echo $sImgString;
    }
}

function wp_get_attachment_medium_url($id){
 $medium_array = image_downsize( $id, 'medium' );
 $medium_path = $medium_array[0];
 return $medium_path;
}


function bxw_get_mediumimg($myID) { //used on homepage
    $myPostID = $myID;
    $arrImages =& get_children('post_type=attachment&post_mime_type=image&post_parent=' . $myPostID . '&orderby=menu_order&order=ASC' );
    if($arrImages) {
        $arrKeys = array_keys($arrImages);
        $iNum = $arrKeys[0];
        $sThumbUrl = wp_get_attachment_thumb_url($iNum);
        $sMediumUrl = wp_get_attachment_medium_url($iNum);
        $sImageUrl = wp_get_attachment_url($iNum);
        $sImgString = '<img src="' . $sMediumUrl . '" alt="Featured Image" />';
        echo $sImgString;
    }
}



?>