<?php
namespace echolibre\google_wave\Document;

class StringEnum
{
    private $values;
    
    public function __construct(array $values)
    {
        foreach ($values as $value) {
            $this->values[$value] = $value;
        }
    }
    
    public function __get($key)
    {
        if (isset($this->values[$key])) {
            return $this->values[$key];
        }
        
        return false;
    }
}
