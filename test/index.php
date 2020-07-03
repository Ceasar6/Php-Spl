<?php
 //DEMO Queue
/*$queue = new SplQueue();
$queue->enqueue('A');
$queue->enqueue('B');
$queue->enqueue('C');
$queue->rewind();
while ($queue->valid()) {
    echo $queue->current(), "\n";
    $queue->next();
}
print_r($queue);
echo '<br>';
echo '<br>';
$queue->dequeue();
echo '<br>';
echo '<br>';
print_r($queue);*/

 //DEMO Stack
/*$stack = new SplStack();
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
$stack->push(5);
$stack->rewind();
for($stack->rewind();$stack->valid();$stack->next()){

    echo $stack->current()."<br/>";
}
echo "<br/>";*/

//DEMO SPLDoublyLinkedList
$dlist = new SplDoublyLinkedList();
$dlist->push('hiramariam');
$dlist->push('maaz');
$dlist->push('zafar');
$dlist->unshift(1);
$dlist->unshift(2);
$dlist->unshift(3);
$dlist->add(3 , 2.24);
$dlist->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
$dlist->getIteratorMode();
$dlist->rewind();
while($dlist->valid()){
    echo $dlist->current(),'<br>';
    $dlist->next();
}


