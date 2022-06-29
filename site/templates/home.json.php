<?php
$json = [];

// using the `toStructure()` method, we create a structure collection
$admins = $site->admins()->toStructure();
// we can then loop through the entries and render the individual fields
foreach ($admins as $admin){
    $json[] = [
        'email' =>  (string)$admin->email(),
        'role' =>  (string)$admin->adminType(),

    ];
}
   
echo json_encode($json);
?>