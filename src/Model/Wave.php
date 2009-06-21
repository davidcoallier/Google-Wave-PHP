<?php
namespace echolibre\google_wave\Model;

use echolibre\google_wave\Model\WaveData as WaveData;

/**
 * Wave class
 *
 *
 * See the link lower for more reference.
 *
 * @see     http://code.google.com/p/wave-robot-python-client/source/browse/trunk/src/waveapi/model.py
 * @author  David Coallier <david@echolibre.com>
 * @package echolibre\google_wave
 * @version 0.1.0
 * @license LGPL 
 * @uses    \echolibre\google_wave\Model\WaveData
 */
class Wave
{
    /**
     * The WaveData object
     *
     * @var \echolibre\google_wave\Model\WaveData $data
     */
    protected $data;
    
    /**
     * Wave Constructor
     *
     * Construct a wave with some wavedata.
     *
     * @param \echolibre\google_wave\Model\WaveData $data The wavedata of that wave.
     */
    public function __construct(WaveData $data)
    {
        $this->data = $data;
    }
    
    /**
     * Get the id of the Wave
     *
     * @return integer  The id of the wave
     */
    public function getId()
    {
        return $this->data->id;
    }
    
    /**
     * Get the ids of the wavelets
     *
     * This method returns the ids of the wavelets.
     *
     * @return array An array of waveletIds
     */
    public function getWaveletIds()
    {
        return $this->data->waveletIds;
    }
}