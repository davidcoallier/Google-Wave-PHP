<?php
namespace echolibre\google_wave\Document;

class Gadget extends \echolibre\google_wave\Document\Element
{
    const JAVA_CLASS = 'com.google.wave.api.Gadget';
    
    public function __construct($url = '')
    {
        parent::__construct(Common::$ELEMENTS->GADGET, array('url' => $url));
    }
}