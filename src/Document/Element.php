<?php
namespace echolibre\google_wave\Document;

/**
 * Element class
 *
 * Elements
 *
 * See the link lower for more reference.
 *
 * @see     http://code.google.com/p/wave-robot-python-client/source/browse/trunk/src/waveapi/document.py
 * @author  David Coallier <david@echolibre.com>
 * @package echolibre\google_wave
 * @version 0.1.0
 * @license LGPL
 */
class Element
{
    /**
     * The google wave api class
     */
    const JAVA_CLASS = 'com.google.wave.api.Element';

    /**
     * The type of element we are creating.
     *
     * @var string $type The element type
     */
    public $type;

    /**
     * A private collection of variables used in the magic setters and getters.
     *
     * @var array $variables  The class properties really.
     */
    private $variables = array();

    /**
     * Element Constructor
     *
     * This method will create a new Element object by type and properties.
     *
     * @see \echolibre\google_wave\Document\AbstractDocument::$ELEMENTS
     * @param string $elementType The type of element to create.
     * @param array  $properties  The properties of that element.
     */
    public function __construct($elementType, $properties)
    {
        $this->type = $elementType;
        foreach ($properties as $key => $value) {
            $this->$key = $value;
        }
    }

    /**
     * Magic setter
     */
    public function __set($key, $value)
    {
        $this->variables[$key] = $value;
    }

    /**
     * Magic getter
     */
    public function __get($key)
    {
        if (isset($this->variables[$key])) {
            return $this->variables[$key];
        }

        return false;
    }
}
