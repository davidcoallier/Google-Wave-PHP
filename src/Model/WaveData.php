<?php
namespace echolibre\google_wave\Model;

/**
 * WaveData class container
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
class WaveData
{
    /**
     * The id of a wave
     *
     * @var integer $id  Default null
     */
    public $id         = null;

    /**
     * Wavelets ids
     *
     * @var array $waveletIds A list of wavelet ids
     */
    public $waveletIds = array();
}
