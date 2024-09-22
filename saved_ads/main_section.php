<?php
    include './inc/config/config.php';
    $userId = $_SESSION['id'];
    $conn = (new conn())->connect();
    $query = 'SELECT advertId FROM saved_ads WHERE userId = :userId';
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':userId' ,$userId );
    $stmt->execute();
      $rows = $stmt->fetchAll(PDO::FETCH_OBJ);
    if($stmt->rowCount() > 0) {
      echo '<div class="saved-container">';

      foreach($rows as $row){
        $advertId = $row->advertId;
        $status = 1;
        $sql = 'Select adverts.*, Max(adverts_images.images) as image FROM adverts INNER JOIN adverts_images ON adverts.id = adverts_images.advertId WHERE adverts.id = :advertId GROUP BY adverts.id ORDER BY adverts.id DESC';
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':advertId', $advertId);
      $stmt->execute();
      if($stmt->rowCount() > 0) {
      $myadverts = $stmt->fetchAll(PDO::FETCH_OBJ);
      $total = 0;
      
      foreach($myadverts as $ad){
        $price = (int)$ad->price;
        if($ad->status == 1){
          $newTotal = $total + $price ;
            echo '<div class="ad-wrapper" data-id="'.$ad->id.'" data-status="'.$ad->status.'">
        <a class="ad-info" title="'.$ad->title.'" >
          <div class="ad-image-wrapper">
            <img src='.$ad->image.' alt='.$ad->title.' class="ad-image"/>
          </div>
          <div class="ad-details">
              <span class="ad-title">'.$ad->title.'</span>
              <span class="ad-description">'.$ad->description.'</span>
              <span class="ad-price">GHS '.$price.'.00</span>
          </div>
        </a>
        <div class="ad-contrs">
          <span class="delete" title="Delete Advert">Remove</span>
          <span class="ad-state-0 ad-status" title="Publish Advert">Publish</span>
        </div>
        </div>';
        }
          if($ad->status == 0){
            echo '<div class="ad-wrapper" data-id="'.$ad->id.'" data-status="'.$ad->status.'">
        <a class="ad-info" title="'.$ad->title.'" >
          <div class="ad-image-wrapper">
            <img src='.$ad->image.' alt='.$ad->title.' class="ad-image"/>
          </div>
          <div class="ad-details">
              This advert has been closed
          </div>
        </a>
        <div class="ad-contrs">
          <span class="delete" title="Delete Advert">Remove</span>
        </div>
        </div>';
      }
          }
        } 
      }
      echo '</div>
      <div class="total-ads-price">Total:'.$newTotal;
      
    } else {
      $postBtn = (new icons('post-icon', 'Post Advert'))->plus_circle();
      echo '<div class="no-adverts-container">
            <span class="no-text">
              You have no saved adverts
            </span>
          </div>';
    }
                          