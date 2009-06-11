<?php
namespace echolibre\google_wave\Model;
/**
 * Event class
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
class Event
{
    /**
     * The type of event
     *
     * @var string $type
     */
    public $type       = '';
    
    /**
     * The timestamp of that event
     *
     * @var integer $timestamp
     */
    public $timestamp  = 0;
    
    /**
     * This event was modified by...
     *
     * @var string $modifiedBy
     */
    public $modifiedBy = '';
    
    /**
     * Properties of that event.
     *
     * @var array $properties
     */
    public $properties = array();
}