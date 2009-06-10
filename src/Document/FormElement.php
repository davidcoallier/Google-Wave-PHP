<?php
namespace echolibre\google_wave\Document;

class FormElement extends \echolibre\google_wave\Document\Element
{
    const JAVA_CLASS = 'com.google.wave.api.FormElement';
    
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