<?php
namespace echolibre\google_wave\Document;

/**
 * FormElement class
 *
 * FormElement
 *
 * See the link lower for more reference.
 *
 * @see     http://code.google.com/p/wave-robot-python-client/source/browse/trunk/src/waveapi/document.py
 * @author  David Coallier <david@echolibre.com>
 * @package echolibre\google_wave
 * @version 0.1.0
 * @license LGPL
 * @uses    \echolibre\google_wave\Document\Element
 */
class FormElement extends \echolibre\google_wave\Document\Element
{
    /**
     * The google wave api class
     */
    const JAVA_CLASS = 'com.google.wave.api.FormElement';

    /**
     * FormElement Constructor
     *
     * This method creates a new object FormElement
     *
     * @uses  parent::__construct()
     *
     * @param string $elementType  The new form element type
     * @param string $name         The name of the new element
     * @param string $value        The value of that new element
     * @param string $defaultValue The default value of that new element
     * @param string $label        The label of that new element
     */
    public function __construct($elementType, $name,
                                $value = '', $defaultValue = '', $label = '')
    {
        parent::__construct($elementType, array(
            'value'        => $value,
            'defaultValue' => $defaultValue,
            'label'        => $label,
        ));
    }
}