<?php

namespace Drupal\integration\Controller;
use Drupal\Core\Controller\ControllerBase;


class portfolioController extends ControllerBase  {


 public  function portfolioPage() {

// $query = \Drupal::database()->select('node_field_data', 't');
// $query->fields('t', ['title']);
// $query->fields('facebook_link',['field_facebook_link_uri']);
//   $query ->join('node__field_facebook_link','facebook_link','facebook_link.entity_id = t.nid');

// $query->fields('job',['field_job_title_value']);
//   $query ->join('node__field_job_title','job','job.entity_id = t.nid');

//   $query->fields('google_link',['field_google_link_uri']);
//   $query ->join('node__field_google_link','google_link','google_link.entity_id = t.nid');



//   $query->fields('twitter_link',['field_twitter_link_uri']);
//   $query ->join('node__field_twitter_link','twitter_link','twitter_link.entity_id = t.nid');


//      $query->fields('team_image',[' field_team_image_target_id']);
//   $query ->join('node__field_team_image','team_image','team_image.entity_id = t.nid');

//     $query->condition('type', 'team');
//     $query->condition('status', 1);
//     $teams = $query->execute()->fetchAll();
//  foreach ($teams as $item) {
//         $item->img = $this->imgPath($item->field_team_image_target_id);
       
//     }
// var_dump($teams);

$build['page']["#markup"]=\Drupal::theme()->render('portfolio_page',[
  //'teams' => $teams,
  //'projects' => $projects,
  'title' => 'Our portfolio'

]);
// var_dump($build);die;

return $build;

   }

public function imgPath($image_target_id){
    if(isset($image_target_id)){
    $file = \Drupal\file\Entity\File::load($image_target_id);
    // var_dump(str_replace("public://", "/",$file->getFileUri()));die();
    if (isset($file))
        return $path = "/eve/sites/default/files".str_replace("public://", "/",$file->getFileUri());
    }
  }

}


?>