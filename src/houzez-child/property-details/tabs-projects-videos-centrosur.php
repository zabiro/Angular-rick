<?php
global $post, $ele_settings;

$section_title = isset($ele_settings['section_title']) && !empty($ele_settings['section_title']) ? $ele_settings['section_title'] : houzez_option('sps_floor_plans', 'Floor Plans');

$show_header = isset($ele_settings['section_header']) ? $ele_settings['section_header'] : true;
$default_open = isset($ele_settings['show_open']) && $ele_settings['show_open'] == 'true' ? 'show' : '';
$additional_features = get_post_meta( get_the_ID(), 'additional_features', true );

$tab_end = '</div>';
$li_start = '<li class="nav-item">';
$li_end = '</li>';
if( isset($additional_features[0]['fave_additional_feature_title']) && !empty( $additional_features[0]['fave_additional_feature_title']) ) {
?>

				<?php
				$i = 0;
				foreach ($additional_features  as $adf):
                    if(!empty($adf['fave_additional_feature_value'])){
                        if($adf['fave_additional_feature_title'] == 'recorrido del proyecto'){
                            echo '<h3 class="text-center py-5">
                                    Videos
                                   </h3>
                                   <div class="listing-tabs horizontal-listing-tabs">
                                   <ul class="nav nav-tabs nav-justified">';
                        }
                    if( $i == 0 ) { $a_active = 'active'; } else { $a_active = ''; }

                          $title_slug = preg_replace('/\s+/', '_', $adf['fave_additional_feature_title']);

                          switch ($adf['fave_additional_feature_title']) {

                              case 'recorrido del proyecto':
                              case 'cómo llegar':
                                  if($adf['fave_additional_feature_title'] != "")
                                  {
                                      echo $li_start;
                                      echo '<a class="nav-link ' . $a_active . '" href="#property-' . $title_slug . '" data-toggle="tab">' . ucfirst($adf['fave_additional_feature_title']) . '</a>';
                                      echo $li_end;
                                      $i++;
                                  }
                                  break;
                              default;
                              break;
                          }

                      }
		            ?>
				<?php endforeach; ?>
        </ul>
</div><!-- property-floor-plans-wrap -->
<div class="tab-content horizontal-tab-content" id="property-tab-content">
    <?php
    $j = 0;

    foreach ($additional_features  as $adf):
        if(!is_null($adf['fave_additional_feature_value']) && !empty($adf['fave_additional_feature_value']) ) {
            if ($j == 0) {
                $tab_active = 'show active';
            } else {
                $tab_active = '';
            }

            if ($key = 'fave_additional_feature_value') {

                $title_slug = preg_replace('/\s+/', '_', $adf['fave_additional_feature_title']);
                echo '<div class="tab-pane fade ' . $tab_active . '" id="property-' . $title_slug . '" role="tabpanel">';
               if($adf['fave_additional_feature_title'] == 'recorrido del proyecto'){
                   get_template_part('template-parts/centrosur/youtube-embed');
               }else if($adf['fave_additional_feature_title'] == 'cómo llegar') {
                   echo $adf['fave_additional_feature_value'];
               }
                echo '</div>';
                $j++;
            }
        }  ?>



    <?php endforeach; ?>
</div>

<?php } ?>
