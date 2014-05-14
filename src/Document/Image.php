<?php
namespace echolibre\google_wave\Document;

use echolibre\google_wave\Document\AbstractDocument as AbstractDocument;

/**
 * Image class
 *
 * Image
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
class Image extends \echolibre\google_wave\Document\Element
{
    /**
     * The google wave api class
     */
    const JAVA_CLASS = 'com.google.wave.api.Image';

    /**
     * Image Element Constructor
     *
     * This is the image element constructor.
     *
     * @uses  parent::__construct()
     *
     * @param string $url  The url of the image
     * @param string $width The width of the image
     * @param string $height The height of the image
     * @param string $attachmentid The attachment id of the image
     * @param string $caption Any caption that could be on the image.
     */
    public function __construct($url = '', $width = null, $height = null,
                                $attachmentId = null, $caption = null)
    {
        parent::__construct(AbstractDocument::$ELEMENTS->IMAGE, array(
            'url'           => $url,
            'width'         => $width,
            'height'        => $height,
            'attachmentId'  => $attachmentId,
            'caption'       => $caption,
        ));
    }
}