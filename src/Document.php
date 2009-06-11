<?php
namespace echolibre\google_wave\Document;

abstract class AbstractDocument
{
    public static $ELEMENTS;
}

AbstractDocument::$ELEMENTS = new StringEnum(
    array(
        'INLINE_BLIP', 'INPUT', 'CHECK', 'LABEL', 'BUTTON',
        'RADIO_BUTTON', 'RADIO_BUTTON_GROUP','PASSWORD', 'GADGET', 'IMAGE'
    )
);