<?php
                         
                         if($_GET['section'] == 'myadverts') {
                          $myProfileSection = ''; 
                          include './inc/config/config.php';
                          $conn = (new conn())->connect();
                          $sql = 'Select adverts.*, Max(adverts_images.images) as image FROM adverts INNER JOIN adverts_images WHERE  adverts.userId = :userId AND adverts.id = adverts_images.advertId GROUP BY adverts.id ORDER BY adverts.id DESC';
                          $stmt = $conn->prepare($sql);
                          $stmt->bindParam(':userId', $userId);
                          $stmt->execute();
                          if($stmt->rowCount() > 0) {
                            echo '<div class="ad-container">';
                          $myadverts = $stmt->fetchAll(PDO::FETCH_OBJ);
                      
                          
                          foreach($myadverts as $ad){
                            $price = $ad->price;

                           $ad->status == 1 ? $state = '<span class="ad-state-1 ad-status" title="Deactivate Advert">Deactivate</span>' : $state = '<span class="ad-state-0 ad-status" title="Publish Advert">Publish</span>';
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
                             <span class="delete" title="Delete Advert">Delete</span>
                             '.$state.'
                            </div>
                          </div> ';
                            }
                          echo '</div>';
                          } else {
                            $postBtn = (new icons('post-icon', 'Post Advert'))->plus_circle();
                            echo '<div class="no-adverts-container">
                                    <a href="'.$post_ad_link.'" class="post-link">'.$postBtn.'</a>
                                  <span class="no-text">
                                    Post an advert to find them here
                                  </span>
                                </div>';
                          }
                                                        }