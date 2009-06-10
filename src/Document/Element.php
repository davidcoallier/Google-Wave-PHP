<?php
namespace echolibre\google_wave\Document;

class Element 
{
    const JAVA_CLASS = 'com.google.wave.api.Element';
    
    protected $type;
    private $variables = array();
    
    public function __construct($elementType, $properties)
    {
        $this->type = $elementType;
        foreach ($properties as $key => $value) {
            $this->$key = $value;
        }
    }
    
    public function __set($key, $value)
    {
        $this->variables[$key] = $value;
    }
    
    public function __get($key)
    {
        if (isset($this->variables[$key])) {
            return $this->variables[$key];
        }
        
        return false;
    }
}
