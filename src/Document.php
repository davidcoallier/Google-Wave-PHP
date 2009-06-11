<?php
namespace echolibre\google_wave\Document;

use echolibre\google_wave\Document\StringEnum as StringEnum;
/**
 * Abstract Document class
 *
 * Abstract Document
 *
 * See the link lower for more reference.
 *
 * @see     http://code.google.com/p/wave-robot-python-client/source/browse/trunk/src/waveapi/document.py
 * @author  David Coallier <david@echolibre.com>
 * @package echolibre\google_wave
 * @version 0.1.0
 * @license LGPL 
 * @uses    \echolibre\google_wave\Document\StringEnum
 */
abstract class AbstractDocument
{
    /**
     * A StringEnum Object with enums...
     *
     * @var echolibre\google_wave\Document\StringEnum $ELEMENTS
     */
    public static $ELEMENTS;
}

AbstractDocument::$ELEMENTS = new StringEnum(
    array(
        'INLINE_BLIP', 'INPUT', 'CHECK', 'LABEL', 'BUTTON',
        'RADIO_BUTTON', 'RADIO_BUTTON_GROUP','PASSWORD', 'GADGET', 'IMAGE'
    )
);