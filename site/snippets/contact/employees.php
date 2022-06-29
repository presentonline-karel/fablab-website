<?php
//Is this even being used right now?



$employees = $page->employees()->toStructure();

// Employees on contactpage
foreach ($employees as $employee) : ?>
    <h2><?= $employee->name() ?></h2>
    <h5><?= $employee->function() ?></h5>

    <p><?= $employee->tel() ?></p>
    <p><?= $employee->email() ?></p>
<?php endforeach ?>