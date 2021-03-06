<?php
// $Id$

/*!
 * Views Slideshow Dynamic display block module template: vsdupright10p - content template
 * (c) Copyright Phelsa Information Technology, 2011. All rights reserved.
 * Version 1.1 (04-JUL-2011)
 * Licenced under GPL license 
 * http://www.gnu.org/licenses/gpl.html 
 */

/**
 * @file
 * Dynamic display block module template: vsdupright10p - content template
 *
 * Available variables:
 * - $settings['origin']: From which module comes the block.
 * - $settings['delta']: Block number of the block.
 *
 * - $settings['template']: template name
 * - $settings['output_type']: type of content
 *
 * - $views_slideshow_ddblock_slider_items: array with slidecontent
 * - $settings['slide_text_position']: of the text in the slider (top | right | bottom | left)
 * - $settings['slide_direction']: direction of the text in the slider (horizontal | vertical )
 * - 
 * - $views_slideshow_ddblock_pager_content: Themed pager content
 * - $settings['pager_position']: position of the pager (top | bottom)
 *
 * notes: don't change the ID names, they are used by the jQuery script.
 */
 
$settings = $views_slideshow_ddblock_slider_settings;
// add Cascading style sheet
drupal_add_css($directory . '/custom/modules/views_slideshow_ddblock/' . $settings['template'] . '/views-slideshow-ddblock-cycle-' . $settings['template'] . '.css', 'template', 'all', FALSE);
?>
<!-- dynamic display block slideshow -->
<div id="views-slideshow-ddblock-<?php print $settings['delta'] ?>" class="views-slideshow-ddblock-cycle-<?php print $settings['template'] ?> clear-block">
 <div class="container clearfix">
  <div class="container-inner clearfix">
   <?php if ($settings['pager_position'] == "top") : ?>
    <!-- number pager --> 
    <?php print $views_slideshow_ddblock_pager_content ?>
   <?php endif; ?>
   <!-- slider content -->
   <div class="slider clearfix">
    <div class="slider-inner clearfix">
     <?php if ($settings['output_type'] == 'view_fields') : ?>
      <?php $slide_counter = 0; foreach ($views_slideshow_ddblock_slider_items as $slider_item): ?>
       <div class="slide slide-<?php print $slide_counter;?> clearfix">
        <div class="slide-inner clearfix">
         <?php print $slider_item['slide_image']; ?>
         <?php if ($settings['slide_text'] == 1) :?>
          <div class="slide-text slide-text-<?php print $settings['slide_direction'] ?> slide-text-<?php print $settings['slide_text_position'] ?> clearfix">
           <div class="slide-text-inner clearfix">
            <?php if (!empty($slider_item['slide_title'])) :?>
             <div class="slide-title slide-title-<?php print $settings['slide_direction'] ?> clearfix">
              <div class="slide-title-inner clearfix">
               <h2><?php print $slider_item['slide_title'] ?></h2>
              </div> <!-- slide-title-inner-->
             </div>  <!-- slide-title-->
            <?php endif; ?>
            <?php if (!empty($slider_item['slide_text'])) :?>
             <div class="slide-body-<?php print $settings['slide_direction'] ?> clearfix">
              <div class="slide-body-inner clearfix">
               <?php print $slider_item['slide_text'] ?>
              </div> <!-- slide-body-inner-->
             </div>  <!-- slide-body-->
            <?php endif; ?>
            <?php if (!empty($slider_item['slide_read_more'])) :?>
             <div class="slide-read-more slide-read-more-<?php print $settings['slide_direction'] ?> clearfix">
              <?php print $slider_item['slide_read_more'] ?>
             </div><!-- slide-read-more-->
            <?php endif; ?>
           </div> <!-- slide-text-inner-->
          </div>  <!-- slide-text-->
         <?php endif; ?>
        </div> <!-- slide-inner-->
       </div>  <!-- slide-->
      <?php $slide_counter++; endforeach; ?>
     <?php endif; ?>
    </div> <!-- slider-inner-->
   </div>  <!-- slider-->
   <?php if ($settings['pager_position'] == "bottom") : ?>
    <!-- number pager --> 
    <?php print $views_slideshow_ddblock_pager_content ?>
   <?php endif; ?>
  </div> <!-- container-inner-->
 </div> <!--container-->
</div> <!--  template -->
