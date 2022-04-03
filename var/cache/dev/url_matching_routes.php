<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\DefaultController::index'], null, ['GET' => 0], null, false, false, null]],
        '/locataires' => [[['_route' => 'locataires', '_controller' => 'App\\Controller\\DefaultController::locataires'], null, null, null, false, false, null]],
        '/mandataires' => [[['_route' => 'mandataires', '_controller' => 'App\\Controller\\DefaultController::mandataires'], null, null, null, false, false, null]],
        '/biens' => [[['_route' => 'biens', '_controller' => 'App\\Controller\\DefaultController::biens'], null, null, null, false, false, null]],
        '/locataires/create' => [[['_route' => 'ajoutLocataire', '_controller' => 'App\\Controller\\LocataireController::createUser'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mandataires/create' => [[['_route' => 'ajoutMandataire', '_controller' => 'App\\Controller\\MandataireController::createUser'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/biens/create' => [[['_route' => 'ajoutBien', '_controller' => 'App\\Controller\\BienController::createBien'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/locations' => [[['_route' => 'locations', '_controller' => 'App\\Controller\\DefaultController::locations'], null, null, null, false, false, null]],
        '/locations/create' => [[['_route' => 'ajoutLocation', '_controller' => 'App\\Controller\\LocationController::createLocation'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/series' => [[['_route' => 'series', '_controller' => 'App\\Controller\\DefaultController::series'], null, null, null, false, false, null]],
        '/author' => [[['_route' => 'author', '_controller' => 'App\\Controller\\AuthorController::author'], null, null, null, false, false, null]],
        '/admin/category/create' => [[['_route' => 'admin_category_create', '_controller' => 'App\\Controller\\Admin\\CategoryController::createCategory'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/article/create' => [[['_route' => 'admin_article_create', '_controller' => 'App\\Controller\\Admin\\ArticleController::createArticle'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cryptos' => [[['_route' => 'coin_cap_index', '_controller' => 'App\\Controller\\CoinCapController::index'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:204)'
                .'|/locataires/edit/([^/]++)(*:237)'
                .'|/mandataires/edit/([^/]++)(*:271)'
                .'|/biens/edit/([^/]++)(*:299)'
                .'|/show(?'
                    .'|/(\\d+)(*:321)'
                    .'|Author/(\\d+)(*:341)'
                .')'
                .'|/a(?'
                    .'|rticle/(\\d+)(*:367)'
                    .'|dmin/(?'
                        .'|category/edit/([^/]++)(*:405)'
                        .'|article/edit/([^/]++)(*:434)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        204 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        237 => [[['_route' => 'modificationLocataire', '_controller' => 'App\\Controller\\LocataireController::editUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        271 => [[['_route' => 'modificationMandataire', '_controller' => 'App\\Controller\\MandataireController::editUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        299 => [[['_route' => 'modificationBien', '_controller' => 'App\\Controller\\BienController::editBien'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        321 => [[['_route' => 'show', '_controller' => 'App\\Controller\\DefaultController::show'], ['id'], null, null, false, true, null]],
        341 => [[['_route' => 'showAuthor', '_controller' => 'App\\Controller\\AuthorController::showAuthor'], ['id'], null, null, false, true, null]],
        367 => [[['_route' => 'article', '_controller' => 'App\\Controller\\AuthorController::article'], ['id'], null, null, false, true, null]],
        405 => [[['_route' => 'admin_category_edit', '_controller' => 'App\\Controller\\Admin\\CategoryController::editCategory'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        434 => [
            [['_route' => 'admin_article_edit', '_controller' => 'App\\Controller\\Admin\\ArticleController::editArticle'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
