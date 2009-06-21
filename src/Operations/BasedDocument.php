<?php

namespace echolibre\google_wave\Operations;

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
     * Create a new BasedWave object. This object generates operations.
     *
     * @param WaveData $data  The wave data
     * @param Context  $context The context instance.
     */
    public function __construct(WaveData $data, Context $context)
    {
        parent::__construct($data);
        $this->_context = $context;
    }
    
    
}