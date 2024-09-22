<form method="post" action="post_ad/post_ad_script.php" enctype="multipart/form-data" class="form-container">
  <?php if(isset($response)) echo '<div class="response">'.$response.'</div>'; ?>
  <?php if(isset($success_response)) echo '<div class="success_response">'.$success_response.'</div>'; ?>

  <label for="category" class='main-category-picker'>
    <div class='maincat-text'>Choose category </div>
    <input type="hidden" id="category" name="maincatId" class='maincat-id' value="">
  </label>
  <div class='maincat-display'></div>

  <label for="subcategory" class='sub-category-picker'>
    <div class='subcat-text'>Choose subcategory </div>
    <input type="hidden" id="subcategory" name="subcatId" class='subcat-id' value="">
  </label>
  <div class='subcat-display'></div>

  <label for="image-picker" class="image">
    <?php echo $upload_icon = (new icons('upload','upload'))->cloud() ; ?>
    Add images
    <input type="file" id='image-picker' name="images[]" class='image-picker' accept='image/*' multiple>
  </label>
  <div class='previews'></div>
  <div class='error'></div>

  <label for="region-id" class='ad-location-picker'>
    <div class='location-text'>Choose location </div>
    <input type='hidden' name="region-id" id="region-id" class='region-id' value=''>
    <input type='hidden' name="city-id" class='city-id' value=''>
  </label>
  <div class='area-list'>
    <input type='text' class='region-search' placeholder='find location'>
    <div class='region-list'>
    </div>
    <div class='city-list'>
    </div>
  </div>

  <input type="text" name="title" id="" class="title" placeholder="Title">

  <div for="condition" class="condition-wrapper">
    Condition
    <input type="radio" name="condition" id="" value="1">Brand New
    <input type="radio" name="condition" id="" value="0">Used
  </div>

  <textarea class='description' name="description" rows="5" id='description' placeholder='Description'></textarea>
  <input type='text' name='price' id='price' class='price' placeholder='Price '>
  <div for="negotiate" class="negotiate-wrapper">
    Negotiable
    <input type="radio" name="negotiate" id="" value="1">Yes
    <input type="radio" name="negotiate" id="" value="0">No
  </div>
  <input type="submit" value="Post Ad" class="submit">
</form>