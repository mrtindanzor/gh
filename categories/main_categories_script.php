<?php
include 'config.php';
$sql = 'SELECT id, name, image_url FROM categories WHERE parent_id is NULL';
$stmt = $conn->prepare($sql);
$stmt->execute();
while ($rows = $stmt->fetchAll(PDO::FETCH_OBJ)){
  foreach($rows as $row){
?>
<div class="category main-category" data-id="<?= $row->id ?>">
  <img src="<?= $row->image_url ?>" alt="<?= $row->name ?>" class="category-image">
  <span class="category-title" title="<?= $row->name ?>"><?=  $row->name ?></span>
</div>

<?php
 }
}
 ?>
