<?php
namespace echolibre\google_wave\Document;

/**
 * StringEnum class
 *
 * StringEnum class.
 *
 * See the link lower for more reference.
 *
 * @see     http://code.google.com/p/wave-robot-python-client/source/browse/trunk/src/waveapi/document.py
 * @author  David Coallier <david@echolibre.com>
 * @package echolibre\google_wave
 * @version 0.1.0
 * @license LGPL
 */
class StringEnum
{
    /**
     * The enums values to keep
     *
     * @var array $values
     */
    private $values;

    /**
     * StringEnum Constructor
     *
     * This method builds a list of enum values
     * by key. It's a key/key pair association.
     *
     * @param array $values   The enum values to create.
     */
    public function __construct(array $values)
    {
        foreach ($values as $value) {
            $this->values[$value] = $value;
        }
    }

    /**
     * Magic getters.
     */
    public function __get($key)
    {
        if (isset($this->values[$key])) {
            return $this->values[$key];
        }

        return false;
    }
}
