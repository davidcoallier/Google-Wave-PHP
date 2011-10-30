<?php
namespace echolibre\google_wave\Document;

use echolibre\google_wave\Document\Range as Range;

/**
 * Annotation class
 *
 * Annotations are used to store data representative in a document. They
 * can also be used when interpreting the data to be displayed to a client/user.
 *
 * See the link lower for more reference.
 *
 * @see     http://code.google.com/p/wave-robot-python-client/source/browse/trunk/src/waveapi/document.py
 * @author  David Coallier <david@echolibre.com>
 * @package echolibre\google_wave
 * @version 0.1.0
 * @license LGPL
 * @uses    \echolibre\google_wave\Document\Range
 */
class Annotation
{
    /**
     * The google wave api class
     */
    const JAVA_CLASS = 'com.google.wave.api.Annotation';

    /**
     * The name of the annotation
     *
     * @var string $name
     */
    protected $name;

    /**
     * The value of the annotation
     *
     * @var mixed $value Any value really.
     */
    protected $value;

    /**
     * The range object for the annotation's validity.
     *
     * @var \echolibre\google_wave\Document\Range $range  The range of the annotation
     */
    protected $range;

    /**
     * Annotation Constructor
     *
     * This method will set the values required for an annotation to be real.
     *
     * @param string $name  The name of the annotation
     * @param mixed $value  The value of the Annotation
     * @param \echolibre\google_wave\Document\Range $range  The range of the annotation
     */
    public function __construct(string $name, $value, Range $range)
    {
        $this->name = $name;
        $this->value = $value;
        $this->range = $range;
    }
}