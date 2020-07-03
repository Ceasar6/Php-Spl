<?php
include_once 'Dancer.php';
include_once 'SquareDance.php';


$club = new SquareDance();

$club->addToQueue($club->createDance());
$club->addToQueue($club->createDance());
$club->addToQueue($club->createDance());
$club->addToQueue($club->createDance());
$club->addToQueue($club->createDance());
$club->addToQueue($club->createDance());

/*var_dump($club->manQueue);
var_dump($club->womanQueue);
die();*/
$status = false;
while (!$status) {
    $status = $club->manQueue->isEmpty() || $club->womanQueue->isEmpty();
    if ($status) {
        echo 'Wait a minute'.'<br>';
    } else {
        echo $club->makePair() . '<br>';
    }
}
/*echo $club ->makePair(),'<br>';
echo $club ->makePair(),'<br>';
echo $club ->makePair(),'<br>';
echo $club ->makePair().'<br>';*/
/*$club->addToQueue('luan', 'Female');
$club->addToQueue('minh', 'Female');
$club->addToQueue('tung', 'Female');*/

/*echo $club->makePair(), '<br>';
echo $club->makePair(), '<br>';*/

echo '<br> <h3> Queue List</h3>';
foreach ($club->manQueue as $dance) {
    echo $dance->getName() . ' , ';
}
foreach ($club->womanQueue as $dance) {
    echo $dance->getName() . '  , ';
}

/*echo '<br> <h3> In Club </h3>';
foreach ($club->SquareDance as $couple){
    foreach ($couple as $dance){
        echo $dance->getName() . '  ';
    }
    echo '<br>';
}*/

