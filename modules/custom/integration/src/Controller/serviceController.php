<?php

namespace Drupal\integration\Controller;
use Drupal\Core\Controller\ControllerBase;


class serviceController extends ControllerBase  {


 public  function servicePage() {

$query = \Drupal::database()->select('node_field_data', 't');
$query->fields('t', ['title']);
$query->fields('service_description',['field_service_description_value']);
  $query ->join('node__field_service_description','service_description','service_description.entity_id = t.nid');

  $query->fields('service_image',[' field_service_image_target_id']);
  $query ->join('node__field_service_image','service_image','service_image.entity_id = t.nid');
    $query->condition('type', 'service');
    $query->condition('status', 1);
    $services = $query->execute()->fetchAll();
 foreach ($services as $item) {
        $item->img = $this->imgPath($item->field_service_image_target_id);
       
    }
// var_dump($services);
// $query_clients = \Drupal::database()->select('node_field_data', 'h');
//     $query_clients->fields('h', ['title']);
//     $query_clients->condition('type', 'happy_clients');
//     $query_clients->condition('status', 1);
//     $clients = $query_clients->execute()->fetchAll();




$query_projects = \Drupal::database()->select('node_field_data', 't');
    $query_projects->fields('t', ['title']);
    //->fields('alias_table','field_descritpion_value')
   // ->join('node__fielddescription_','aliad_table','alias.table.entity_id = t.nid')

     $query_projects->fields('main_image',[' field_project_main_image_target_id']);
  $query_projects ->join('node__field_project_main_image','main_image','main_image.entity_id = t.nid');
    $query_projects->condition('type', 'recent_projects');
    $query_projects->condition('status', 1);
    $projects = $query_projects->execute()->fetchAll();
    foreach ($projects as $item) {
        $item->img = $this->imgPath($item->field_project_main_image_target_id);
       
    }
// var_dump($projects);

$build['page']["#markup"]=\Drupal::theme()->render('integration',[
  'services' => $services,
  'projects' => $projects,
  'title' => 'Our Service'

]);

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