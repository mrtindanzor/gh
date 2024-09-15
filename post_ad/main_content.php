<?php
$down = (new icons('post-down-icon', 'Show more'))->fill_down_icon();
?>
<form class='main-container' method="post" action="post_ad/post_ad_script.php" enctype="multipart/form-data">
  <?php if(isset($response)) echo $response; ?>
  <div class='main-category-picker span-2'>
    <?php echo $down ?>
    <div class='maincat-text'>Select category </div>
    <input type='hidden' name="maincatId" class='maincat-id' value="">
  </div>
  <div class='maincat-display span-2'></div>
  <div class='sub-category-picker span-2'>
    <?php echo $down ?>
    <div class='subcat-text'>Select subcategory </div>
    <input type='hidden' name="subcatId" class='subcat-id' value="">
  </div>
  <div class='subcat-display span-2'></div>
  <div class='select-images span-2'>
    <label for='image-picker' class='image-picker-label'>
      <?php echo $upload_icon = (new icons('upload','upload'))->cloud(); ?>
    </label>
    <input type='file' id='image-picker' name="images[]" class='image-picker' accept='image/*' multiple>
    <div class='previews span-2'></div>
    <div class='error span-2'></div>
  </div>
  <div class='ad-location-picker span-2'>
    <?php echo $down ?>
    <div class='location-text'>Location </div>
  </div>
  <input type='hidden' name="region-id" class='region-id' value=''>
  <input type='hidden' name="city-id" class='city-id' value=''>
  <div class='area-list span-2'>
    <input type='text' class='region-search' placeholder='find location'>
    <div class='region-list span-2'>
    </div>
    <div class='city-list span-2'>
    </div>
  </div>
  <div class='ad-title span-2'>
    <input type='text' name='title' id='title' class='title' placeholder='Title '>
  </div>
  <div class='ad-description span-2'>
    <textarea class='description' name="description" rows="5" id='description' placeholder='Description'></textarea>
  </div>
  <div class='ad-price span-2'>
    <input type='number' name='price' id='price' class='price' placeholder='Price '>
  </div>
  <button class='submit span-2'>Post Ad</button>
</form>