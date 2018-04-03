<?php

namespace Printi\CimpressBundle\Services;

/**
 * Class CimpressPrepress
 */
class CimpressPrepress extends Cimpress
{

    public function __construct(array $credentials, string $clientId)
    {
        parent::__construct($credentials, $clientId);
    }

    public function filePrep(string $fileUrl, string $parameterUrl, string $callbackUrl)
    {
        echo $this->authorize()->getToken(true);
    }
}
