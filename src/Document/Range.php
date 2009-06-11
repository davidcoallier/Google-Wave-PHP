<?php
namespace echolibre\google_wave\Document;

/**
 * Range class
 *
 * Range class.
 *
 * See the link lower for more reference.
 *
 * @see     http://code.google.com/p/wave-robot-python-client/source/browse/trunk/src/waveapi/document.py
 * @author  David Coallier <david@echolibre.com>
 * @package echolibre\google_wave
 * @version 0.1.0
 * @license LGPL 
 * @uses    \echolibre\google_wave\RangeException
 */
class Range
{
    /**
     * The google wave api class
     */
    const JAVA_CLASS = 'com.google.wave.api.Range';
    
    /**
     * The starting value of the range.
     *
     * @var integer $start 
     */
    protected $start;
    
    /**
     * The ending value of the range.
     *
     * @var integer $end
     */
    protected $end;
    
    /**
     * Range Constructor
     *
     * This creates a new Range object with a start and end value.
     *
     * @throws \echolibre\google_wave\RangeException
     *
     * @param integer $start  The start of the range
     * @param integer $end    The end of the range
     */
    public function __construct($start = 0, $end = 1) 
    {
        $this->start = (int)$start;
        $this->end   = (int)$end;
        
        if ($this->end - $this->start < 0) {
            throw new \echolibre\google_wave\RangeException('Range cannot be less than 0');
        }
    }
    
    /**
     * Is Collapsed
     *
     * This method returns whether the end is the same type and
     * save value of the start value. 
     *
     * @return bool Whether $this->end is === to $this->start
     */
    public function isCollapsed()
    {
        return $this->end === $this->start;
    }
    
    /**
     * Magic tostring
     *
     * This method returns the range in a textual format.
     *
     * @return string "Range(x, y)"
     */
    public function __toString()
    {
        return 'Range(' . $this->start . ', ' . $this->end . ')';
    }
}