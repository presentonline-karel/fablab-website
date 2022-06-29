<?php

$data = $pages->find('categories')->children()->listed();
$json = [];

foreach($data as $category) {
    

  $json[] = [
    'name' => $category->title()->value(),
    'id' => (string)$category->id(),
    'url'   => (string)$category->url(),
    'description' => (string)$category->info()
  ];

}

echo json_encode($json);
return json_encode($json);