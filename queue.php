<?php 
class QueueExample {
   
    public $dataStore = array();
    public function getLength() {
        if(!empty($this->dataStore))
            return count($this->dataStore);
    }
    
    public function isEmpty() {
        return $this->getLength() === 0;
    }
    
    public function enqueue($element) {
        $this->dataStore[] = $element;
        // array_push($this->dataStore, $element);
    }
    
    public function dequeue() {
        if (!$this->isEmpty()) {
            return array_shift($this->dataStore);
        }
        return false;
    }
    
    public function show() {
        if (!$this->isEmpty()) {
            for ($i = 0; $i < $this->getLength(); $i++) {
                echo $this->dataStore[$i] . PHP_EOL;
            }
        } else {
            return "empty";
        }
    }
    // Clear queue
    public function clearQueue() {
        unset($this->dataStore);
        // $this->dataStore = array();
    }
}
$q = new QueueExample();
$q->enqueue('a');
$q->enqueue('b');
$q->enqueue('c');
echo 'The length of the queue is:' . $q->getLength();
echo "</br>";
echo 'The queue is:';
$q->show();
echo "</br>";
$q->dequeue();
echo "</br>";
echo "a Out of the queue:";
$q->show();
$q->clearQueue();
echo "After clearing the queue, the queue is" . $q->show();