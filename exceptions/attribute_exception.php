<?php
class AttributeException extends Exception {
    public function __construct(
        $attribute,
        $message = 'Атрибут %s не определен'
    )
    {
        $message = sprintf($message, $attribute);
        parent::__construct($message, 1001);
    }
}
