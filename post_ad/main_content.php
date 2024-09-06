<?php
$down = (new icons('post-down-icon', 'Show more'))->fill_down_icon();
?>
<form class='main-container' method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
  enctype="multipart/form-data">
  <?php echo $response; ?>
  <div class='submit-ad-title'>
    Submit Ad
  </div>
  <div class='categories-and-image-picker'>
    <div class='main-category-picker'>
      <div class='maincat-text'>Select category *</div>
      <?= $down ?>
      <input type='hidden' name="maincatId" class='maincat-id' value="">
    </div>
    <div class='maincat-display'></div>
    <div class='sub-category-picker'>
      <div class='subcat-text'>Select subcategory *</div>
      <?= $down ?>
      <input type='hidden' name="subcatId" class='subcat-id' value="">
    </div>
    <div class='subcat-display'></div>
    <div class='select-images'>
      Add images
      <label for='image-picker' class='image-picker-label'></label>
      <input type='file' id='image-picker' name="images[]" class='image-picker' accept='image/*' multiple>
      <div class='previews'></div>
      <div class='error'></div>
    </div>
  </div>
  <div class='ad-info'>
    <div class='ad-location-picker'>
      <div class='location-text'>Location *</div>
      <?= $down ?>
    </div>
    <input type='hidden' name="region-id" class='region-id' value=''>
    <input type='hidden' name="city-id" class='city-id' value=''>
    <div class='area-list'>
      <input type='text' class='region-search' placeholder='find location'>
      <div class='region-list'>
      </div>
      <div class='city-list'>
      </div>
    </div>
    <div class='ad-title'>
      <input type='text' name='title' id='title' class='title' placeholder='Title *'>
    </div>
    <div class='ad-description'>
      <textarea class='description' name="description" id='description' placeholder='Description'></textarea>
    </div>
    <div class='ad-price'>
      <input type='number' name='price' id='price' class='price' placeholder='Price *'>
    </div>
  </div>
  <button class='submit'>Post Ad</button>
</form>