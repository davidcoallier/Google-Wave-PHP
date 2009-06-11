<?php
namespace echolibre\google_wave\Model;

/**
 * BlipData class
 *
 *
 * See the link lower for more reference.
 *
 * @see     http://code.google.com/p/wave-robot-python-client/source/browse/trunk/src/waveapi/model.py
 * @author  David Coallier <david@echolibre.com>
 * @package echolibre\google_wave
 * @version 0.1.0
 * @license LGPL 
 */
class BlipData
{
    /**
     * The google wave api class
     */
    const JAVA_CLASS = 'com.google.wave.api.impl.BlipData';
    
    /**
     * A private collection of variables used in the magic setters and getters.
     *
     * @var array $variables  The class properties really.
     */
    private $variables = array();
    
    /** 
     * BlipData Constructor
     *
     * This constructor initializes the variables needed by the object.
     */
    public function __construct()
    {
        $this->annotations      = new \ArrayObject();
        $this->blipId           = null;
        $this->childBlipIds     = new \ArrayObject();
        $this->content          = '';
        $this->contributors     = new \ArrayObject();
        $this->creator          = null;
        $this->elements         = new \stdClass();
        $this->lastModifiedTime = 0;
        $this->parentBlipId     = null;
        $this->version          = -1;
        $this->waveId           = null;
        $this->waveletId        = null;
    }
    
    /**
     * Magic Setter
     */
    public function __set($key, $value)
    {
        $this->variables[$key] = $value;
    }
    
    /**
     * Magic Getter
     */
    public function __get($key)
    {
        if (isset($this->variables[$key])) {
            return $this->variables[$key];
        }
        
        return false;
    }
}