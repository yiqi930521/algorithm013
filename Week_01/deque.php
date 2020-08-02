<?php
/**
 * PHP Data Structures deque 扩展
 */

$deque = new \Ds\Deque();

//addFirst
$deque->insert(0, "a");
$deque->insert(0, "b");
$deque->insert(0, "c");

//removeFirst
print_r($deque->shift());
print_r($deque);

//addLast
$deque->push("d");
print_r($deque);

while ($deque->count() > 0) {
    //removeLast
    print_r($deque->pop());
}