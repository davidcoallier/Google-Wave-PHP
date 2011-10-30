<?php
namespace echolibre\google_wave\Document;

use echolibre\google_wave\Document\AbstractDocument as AbstractDocument;

/**
 * Gadget class
 *
 * Gadget
 *
 * See the link lower for more reference.
 *
 * @see     http://code.google.com/p/wave-robot-python-client/source/browse/trunk/src/waveapi/document.py
 * @author  David Coallier <david@echolibre.com>
 * @package echolibre\google_wave
 * @version 0.1.0
 * @license LGPL
 * @uses    \echolibre\google_wave\Document\Element
 * @uses    \echolibre\google_wave\Document\AbstractDocument
 */
class Gadget extends \echolibre\google_wave\Document\Element
{
    /**
     * The google wave api class
     */
    const JAVA_CLASS = 'com.google.wave.api.Gadget';

    /**
     * Gadget Element Constructor
     *
     * This is the gadget constructor.
     *
     * @uses  parent::__construct
     * @uses  AbstractDocument
     * @param string $url  The url of the gadget (It's XML content). Default ''
     */
    public function __construct($url = '')
    {
        parent::__construct(AbstractDocument::$ELEMENTS->GADGET, array('url' => $url));
    }
}