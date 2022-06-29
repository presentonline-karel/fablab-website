<?php

//index
$data = $pages->find('categories')->children()->children()->listed();
$json = [];
$imageSource = null;
foreach($data as $machine) {
    
    if ($machine->images()->isNotEmpty()){
        $imageSource =  $machine->images()->first()->url();
    }
    if((int)(string)$machine->amount()>1){
      for ($i=1; $i <= (int)(string)$machine->amount(); $i++) { 
        # code...
        if($i>1){
          $json[] = [
            'name' => (string)$machine->title() . ' ' .$i,
            'id' => (string)$machine->id()."-".$i,
            'url'   => (string)$machine->url(),
            'category' => (string)$machine->parent()->title(),
            'image-source' => (string)$imageSource,
            'available' => (string)$machine->isAvailable()
          ];
        }
        else{
          $json[] = [
            'name' => (string)$machine->title() . ' ' .$i,
            'id' => (string)$machine->id(),
            'url'   => (string)$machine->url(),
            'category' => (string)$machine->parent()->title(),
            'image-source' => (string)$imageSource,
            'available' => (string)$machine->isAvailable()
          ];
        }
       
      }
    }
    else{
      $json[] = [
        'name' => (string)$machine->title(),
        'id' => (string)$machine->id(),
        'url'   => (string)$machine->url(),
        'category' => (string)$machine->parent()->title(),
        'image-source' => (string)$imageSource,
        'available' => (string)$machine->isAvailable()
      ];
    }
  

}

echo json_encode($json);
return json_encode($json);