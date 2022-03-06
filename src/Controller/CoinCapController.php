<?php

namespace App\Controller;

use App\Api\CoinCap;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

final class CoinCapController extends AbstractController
{
    private CoinCap $coinCapApi;

    public function __construct(CoinCap $coinCapApi)
    {
        $this->coinCapApi = $coinCapApi;
    }

    public function index(): Response
    {
        $cryptos = $this->coinCapApi->getAssets();

        return $this->render('coin_cap/index.html.twig', [
            'cryptos' => $cryptos,
        ]);

    }
}