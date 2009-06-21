<?php

namespace echolibre\google_wave\Operations;

use \echolibre\google_wave\Model\Blip as Blip;
use \echolibre\google_wave\Model\Document as Document;
use \echolibre\google_wave\Operations\Context as Context;

/**
 * BasedWave class
 *
 *
 * See the link lower for more reference.
 *
 * @see     http://code.google.com/p/wave-robot-python-client/source/browse/trunk/src/waveapi/operations.py
 * @author  David Coallier <david@echolibre.com>
 * @package echolibre\google_wave
 * @version 0.1.0
 * @license LGPL 
 * @uses    \echolibre\google_wave\Model\WaveData
 * @uses    \echolibre\google_wave\Model\Wave
 * @uses    \echolibre\google_wave\Operations\Context
 */
class BasedDocument extends Document
{
    private $_context;
    
    /**
     * Constructor
     *
     * Create a new BasedDocument object. This object generates operations.
     *
     * @param Blip $data  The Blip object
     * @param Context  $context The context instance.
     */
    public function __construct(Blip $data, Context $context)
    {
        parent::__construct($data);
        $this->_context = $context;
    }
    
    public function hasAnnotation($name)
    {
        $annotationIterator = $this->annotation->getIterator();
        
        foreach ($annotationIterator->rewind(); $annotationIterator->valid(); $annotationIterator->next()) {
            if ($annotationIterator->current() == $name) {
                return true;
            }
        }
        
        return false;
    }
    
    
}