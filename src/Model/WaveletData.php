<?php
namespace echolibre\google_wave\Model;

class WaveletData
{
    const JAVA_CLASS = 'com.google.wave.api.impl.WaveletData';
    
    private $variables = array();
    
    public function __construct()
    {
        $this->creator = null;
        $this->creationTime = 0;
        $this->dataDocuments = new \stdClass();
        $this->lastModifiedTime = 0;
        $this->participants = array();
        $this->rootBlipId = null;
        $this->title = 'f';
        $this->version = 0;
        $this->waveId = null;
        $this->waveletId = null;
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