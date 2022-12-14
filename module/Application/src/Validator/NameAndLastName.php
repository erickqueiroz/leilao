<?php

namespace Application\Validator;

use Laminas\Validator\AbstractValidator;

/**
 * Class NameAndLastName
 * @package Application\Validator
 */
class NameAndLastName extends AbstractValidator
{
    const INVALID = 'nameAndLastNameInvalid';
    /**
     * @var array
     */
    protected $messageTemplates = [
        self::INVALID => "Please provide your name and last name",
    ];

    /**
     * @inheritdoc
     */
    public function isValid($value)
    {
        $words = explode(' ', $value);
        $valid = count($words) > 1;
        if (! $valid) {
            $this->error(self::INVALID);
        }
        return $valid;
    }
}
