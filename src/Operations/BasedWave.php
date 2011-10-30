<?php

namespace echolibre\google_wave\Operations;

use \echolibre\google_wave\Model\Wave as Wave;
use \echolibre\google_wave\Model\WaveData as WaveData;
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
class BasedWave extends Wave
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

    /**
     * Create a wavelet
     *
     * This method will use the builder and create
     * a wavelet on this wave.
     *
     * @uses   $this->_context
     * @return void
     */
    public function createWavelet()
    {
        $this->_context->builder->waveletCreate($this->getId());
    }
}