<?php
namespace echolibre\google_wave\Model;

use echolibre\google_wave\Model\WaveletData as WaveletData;

/**
 * Wavelet class
 *
 *
 * See the link lower for more reference.
 *
 * @see     http://code.google.com/p/wave-robot-python-client/source/browse/trunk/src/waveapi/model.py
 * @author  David Coallier <david@echolibre.com>
 * @package echolibre\google_wave
 * @version 0.1.0
 * @license LGPL
 * @uses    \echolibre\google_wave\Model\WaveletData
 */
class Wavelet
{
    /**
     * The WaveletData object
     *
     * @var \echolibre\google_wave\Model\WaveletData $data
     */
    protected $data;

    /**
     * Wavelet constructor
     *
     * Constructors a new Wavelet object with some waveletdata
     *
     * @param \echolibre\google_wave\Model\WaveletData $data The data of that wavelet
     */
    public function __construct(WaveletData $data)
    {
        $this->data = $data;
    }

    /**
     * Magic Getter
     */
    public function __get($key)
    {
        if ($this->data->{$key} !== false) {
            return $this->data->{$key};
        }

        return false;
    }
}