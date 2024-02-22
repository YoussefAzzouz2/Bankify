<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\ChequeController::homepage'], null, null, null, false, false, null]],
        '/cheques' => [[['_route' => 'cheque_list', '_controller' => 'App\\Controller\\ChequeController::list'], null, null, null, false, false, null]],
        '/ajoutercheque' => [[['_route' => 'ajoutercheque', '_controller' => 'App\\Controller\\ChequeController::ajoutercheque'], null, null, null, false, false, null]],
        '/a1' => [[['_route' => 'a2', '_controller' => 'App\\Controller\\ChequeController::emptyRECTraitée1f'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/cheques/([^/]++)(*:24)'
                .'|/a(?'
                    .'|dd(?'
                        .'|Rec/([^/]++)(*:53)'
                        .'|enc1/([^/]++)(*:73)'
                    .')'
                    .'|joutercheque1/([^/]++)(*:103)'
                    .'|2/([^/]++)(*:121)'
                    .'|/([^/]++)(*:138)'
                .')'
                .'|/re(?'
                    .'|c/([^/]++)(*:163)'
                    .'|move(?'
                        .'|Enc(?'
                            .'|/([^/]++)(*:193)'
                            .'|1/([^/]++)(*:211)'
                        .')'
                        .'|Cheque(?'
                            .'|/([^/]++)(*:238)'
                            .'|1/([^/]++)(*:256)'
                        .')'
                    .')'
                .')'
                .'|/e(?'
                    .'|ditchequee(?'
                        .'|/([^/]++)(*:294)'
                        .'|e/([^/]++)(*:312)'
                    .')'
                    .'|nc1/([^/]++)(*:333)'
                .')'
                .'|/pdf/([^/]++)(*:355)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:394)'
                    .'|wdt/([^/]++)(*:414)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:460)'
                            .'|router(*:474)'
                            .'|exception(?'
                                .'|(*:494)'
                                .'|\\.css(*:507)'
                            .')'
                        .')'
                        .'|(*:517)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => 'cheque_list1', '_controller' => 'App\\Controller\\ChequeController::list1'], ['ref'], null, null, false, true, null]],
        53 => [[['_route' => 'ajouterreclamtion1', '_controller' => 'App\\Controller\\ChequeController::ajouterreclamtion1'], ['ref'], null, null, false, true, null]],
        73 => [[['_route' => 'ajouterreclamtion2', '_controller' => 'App\\Controller\\ChequeController::ajouterreclamtion11'], ['ref'], null, null, false, true, null]],
        103 => [[['_route' => 'ajoutercheque1', '_controller' => 'App\\Controller\\ChequeController::ajoutercheque1'], ['ref'], null, null, false, true, null]],
        121 => [[['_route' => 'a1', '_controller' => 'App\\Controller\\ChequeController::emptyRECTraitée1'], ['ref'], null, null, false, true, null]],
        138 => [[['_route' => 'a11', '_controller' => 'App\\Controller\\ChequeController::emptyRECTraitée'], ['ref'], null, null, false, true, null]],
        163 => [[['_route' => 'rec_edit', '_controller' => 'App\\Controller\\ChequeController::edit'], ['ref'], null, null, false, true, null]],
        193 => [[['_route' => 'reclamtion_remove', '_controller' => 'App\\Controller\\ChequeController::deleteReclamtion'], ['id'], null, null, false, true, null]],
        211 => [[['_route' => 'Reclamtion_remove1', '_controller' => 'App\\Controller\\ChequeController::deleteReclamtion1'], ['id'], null, null, false, true, null]],
        238 => [[['_route' => 'cheque_remove', '_controller' => 'App\\Controller\\ChequeController::deleteCheque'], ['id'], null, null, false, true, null]],
        256 => [[['_route' => 'cheque_remove1', '_controller' => 'App\\Controller\\ChequeController::deleteCheque1'], ['id'], null, null, false, true, null]],
        294 => [[['_route' => 'ch_edit', '_controller' => 'App\\Controller\\ChequeController::edit1'], ['ref'], null, null, false, true, null]],
        312 => [[['_route' => 'ch1_edit', '_controller' => 'App\\Controller\\ChequeController::edit11'], ['ref'], null, null, false, true, null]],
        333 => [[['_route' => 'rec_edit1', '_controller' => 'App\\Controller\\ChequeController::edit111'], ['ref'], null, null, false, true, null]],
        355 => [[['_route' => 'generate_pdf', '_controller' => 'App\\Controller\\ChequeController::generatePdf'], ['ref'], null, null, false, true, null]],
        394 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        414 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        460 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        474 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        494 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        507 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        517 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
