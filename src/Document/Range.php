<?php
namespace echolibre\google_wave\Document;

class Range
{
    const JAVA_CLASS = 'com.google.wave.api.Range';
    
    protected $start;
    protected $end;
    
    public function __construct($start = 0, $end = 1) 
    {
        $this->start = (int)$start;
        $this->end   = (int)$end;
        
        if ($this->end - $this->start < 0) {
            throw new \echolibre\google_wave\RangeException('Range cannot be less than 0');
        }
    }
    
    public function isCollapsed()
    {
        return $this->end === $this->start;
    }
    
    public function __toString()
    {
        return 'Range(' . $this->start . ', ' . $this->end . ')';
    }
}