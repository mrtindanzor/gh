<div class="categories">
  <div class="category-menu">
    <div class="category-backbtn">
      <?php echo $categorybtn = (new icons('nav-item', 'back to main category'))->back_icon(); ?>
    </div><input type="text" class="categories-search" placeholder="find category...">
  </div>
  <div class="main-categories">
    <?php include 'main_categories_script.php'; ?>
  </div>
  <div class="sub-categories">
  </div>
</div>
