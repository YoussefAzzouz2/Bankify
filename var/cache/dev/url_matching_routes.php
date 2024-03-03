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
                .'|/cheques(?'
                    .'|/([^/]++)(*:27)'
                    .'|1/([^/]++)(*:44)'
                .')'
                .'|/a(?'
                    .'|dd(?'
                        .'|Rec/([^/]++)(*:74)'
                        .'|enc1/([^/]++)(*:94)'
                    .')'
                    .'|joutercheque1/([^/]++)(*:124)'
                    .'|2/([^/]++)(*:142)'
                    .'|/([^/]++)(*:159)'
                .')'
                .'|/re(?'
                    .'|c/([^/]++)(*:184)'
                    .'|move(?'
                        .'|Enc(?'
                            .'|/([^/]++)(*:214)'
                            .'|1/([^/]++)(*:232)'
                        .')'
                        .'|Cheque(?'
                            .'|/([^/]++)(*:259)'
                            .'|1/([^/]++)(*:277)'
                        .')'
                    .')'
                .')'
                .'|/e(?'
                    .'|ditchequee(?'
                        .'|/([^/]++)(*:315)'
                        .'|e/([^/]++)(*:333)'
                    .')'
                    .'|nc1/([^/]++)(*:354)'
                .')'
                .'|/pdf/([^/]++)(*:376)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:415)'
                    .'|wdt/([^/]++)(*:435)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:481)'
                            .'|router(*:495)'
                            .'|exception(?'
                                .'|(*:515)'
                                .'|\\.css(*:528)'
                            .')'
                        .')'
                        .'|(*:538)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'cheque_list1', '_controller' => 'App\\Controller\\ChequeController::list1'], ['ref'], null, null, false, true, null]],
        44 => [[['_route' => 'cheque_list11', '_controller' => 'App\\Controller\\ChequeController::list1111'], ['ref'], null, null, false, true, null]],
        74 => [[['_route' => 'ajouterreclamtion1', '_controller' => 'App\\Controller\\ChequeController::ajouterreclamtion1'], ['ref'], null, null, false, true, null]],
        94 => [[['_route' => 'ajouterreclamtion2', '_controller' => 'App\\Controller\\ChequeController::ajouterreclamtion11'], ['ref'], null, null, false, true, null]],
        124 => [[['_route' => 'ajoutercheque1', '_controller' => 'App\\Controller\\ChequeController::ajoutercheque1'], ['ref'], null, null, false, true, null]],
        142 => [[['_route' => 'a1', '_controller' => 'App\\Controller\\ChequeController::emptyRECTraitée1'], ['ref'], null, null, false, true, null]],
        159 => [[['_route' => 'a11', '_controller' => 'App\\Controller\\ChequeController::emptyRECTraitée'], ['ref'], null, null, false, true, null]],
        184 => [[['_route' => 'rec_edit', '_controller' => 'App\\Controller\\ChequeController::edit'], ['ref'], null, null, false, true, null]],
        214 => [[['_route' => 'reclamtion_remove', '_controller' => 'App\\Controller\\ChequeController::deleteReclamtion'], ['id'], null, null, false, true, null]],
        232 => [[['_route' => 'Reclamtion_remove1', '_controller' => 'App\\Controller\\ChequeController::deleteReclamtion1'], ['id'], null, null, false, true, null]],
        259 => [[['_route' => 'cheque_remove', '_controller' => 'App\\Controller\\ChequeController::deleteCheque'], ['id'], null, null, false, true, null]],
        277 => [[['_route' => 'cheque_remove1', '_controller' => 'App\\Controller\\ChequeController::deleteCheque1'], ['id'], null, null, false, true, null]],
        315 => [[['_route' => 'ch_edit', '_controller' => 'App\\Controller\\ChequeController::edit1'], ['ref'], null, null, false, true, null]],
        333 => [[['_route' => 'ch1_edit', '_controller' => 'App\\Controller\\ChequeController::edit11'], ['ref'], null, null, false, true, null]],
        354 => [[['_route' => 'rec_edit1', '_controller' => 'App\\Controller\\ChequeController::edit111'], ['ref'], null, null, false, true, null]],
        376 => [[['_route' => 'generate_pdf', '_controller' => 'App\\Controller\\ChequeController::generatePdf'], ['ref'], null, null, false, true, null]],
        415 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        435 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        481 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        495 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        515 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        528 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        538 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
