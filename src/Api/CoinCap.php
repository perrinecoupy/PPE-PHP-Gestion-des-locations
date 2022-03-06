<?php

namespace App\Api;

use Doctrine\DBAL\Driver\Exception;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class CoinCap
{
    private const BASE_API = 'https://api.coincap.io/v2';

    private HttpClientInterface $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function getAssets(): array
    {
        try {
            $response = $this->client->request('GET', self::BASE_API . '/assets');

            // 1 seul tableau
            // "nomcrypto" => "valeur"
            // array_keys
            // array_values

            // 1 tableau avec les clés
            // 1 tableau avec les valeurs

            $data = $response->toArray()['data'];


            $labels = [];
            $values = [];

            foreach ($data as $item) {
                $labels[] = $item['id'];
                $values[] = $item['priceUsd'];
            }

            return [
                'labels' => $labels,
                'values' => $values,
            ];
        }
        catch (\Exception)
        {
            print 'erreur';
        }
    }
}