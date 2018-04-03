<?php

namespace Printi\CimpressBundle\Services;

/**
 * Class CimpressPdfProcessing
 */
class CimpressPdfProcessing extends Cimpress
{

    /**
     * CimpressPdfProcessing constructor.
     *
     * @param array  $credentials Cimpress designer credentials
     * @param string $clientId    Cimpress api client id
     */
    public function __construct(array $credentials, string $clientId)
    {
        parent::__construct($credentials, $clientId);
    }

    /**
     * Merge multiple PDFs into a single PDF
     *
     * @param array  $pdfUrls     The list of pdf file urls to be merge
     * @param string $callbackUrl The API will return the information we want
     */
    public function mergePages(array $pdfUrls, string $callbackUrl)
    {
        // add code for /mergePages api
    }
}
