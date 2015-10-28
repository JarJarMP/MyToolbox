<?php

require_once('SampleIterator.php');

class PancakeHouseMenuIterator implements SampleIterator
{
    private $items; // ArrayList<String> items;
    private $position = 0;
 
    public function __construct($items)
    {
        $this->items = $items;
    }
 
    public function next()
    {
        return $this->items[$this->position++];
    }
 
    public function hasNext()
    {
        return ($this->position < count($this->items));
    }
}
