<?php
namespace echolibre\google_wave\Document;

class Annotation 
{
    const JAVA_CLASS = 'com.google.wave.api.Annotation';
    
    protected $name;
    protected $value;
    protected $range;
    
    public function __construct(string $name, $value, \echolibre\google_wave\Document\Range $range)
    {
        $this->name = $name;
        $this->value = $value;
        $this->range = $range;
    }
}