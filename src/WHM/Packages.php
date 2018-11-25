<?php

namespace PreviewTechs\cPanelWHM\WHM;

use DateTime;
use Http\Client\Exception;
use PreviewTechs\cPanelWHM\Entity\Package;
use PreviewTechs\cPanelWHM\Exceptions\ClientExceptions;
use PreviewTechs\cPanelWHM\WHMClient;

/**
 * Class Package
 *
 * @package PreviewTechs\cPanelWHM\WHM
 */
class Packages
{
    /**
     *
     * @var WHMClient
     */
    protected $client;

    /**
     * Accounts constructor.
     *
     * @param WHMClient $client
     */
    public function __construct(WHMClient $client)
    {
        $this->client = $client;
    }

     /**
     * Get an account details
     *
     * WHM API function: Packages -> listpkgs
     *
     * @link https://documentation.cpanel.net/display/DD/WHM+API+1+Functions+-+listpkgs
     *
     *
     * @return null|Packages
     */
    public function getPackages()
    {
        $result = $this->client->sendRequest("/json-api/listpkgs", "GET", []);
        if ( ! empty($result['metadata']) && $result['metadata']['result'] === 1) {
            return $result['data']['pkg'];
        }

        return [];
    }
}