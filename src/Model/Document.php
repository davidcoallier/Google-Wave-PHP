<?php
namespace echolibre\google_wave\Model;

use echolibre\google_wave\Model\BlipData as BlipData;
/**
 * Document class
 *
 *
 * See the link lower for more reference.
 *
 * @see     http://code.google.com/p/wave-robot-python-client/source/browse/trunk/src/waveapi/model.py
 * @author  David Coallier <david@echolibre.com>
 * @package echolibre\google_wave
 * @version 0.1.0
 * @license LGPL
 * @uses    \echolibre\google_wave\Model\BlipData
 */
class Document
{
    /**
     * The BlipData object
     *
     * @var \echolibre\google_wave\Model\BlipData $data
     */
    private $data;

    /**
     * Document Constructor
     *
     * This creates the Document object.
     *
     * @param \echolibre\google_wave\Model\BlipData $data The blipdata object
     */
    public function __construct(BlipData $data)
    {
        $this->data = $data;
    }

    /**
     * Get the text content
     *
     * This method returns the value of the text content of the BlipData
     * object that was created in the constructor.
     *
     * @return string BlipData::$content
     */
    public function getText()
    {
        return $this->data->content;
    }
}