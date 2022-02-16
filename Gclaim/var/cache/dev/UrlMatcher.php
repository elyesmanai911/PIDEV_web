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
        '/coach' => [[['_route' => 'coach', '_controller' => 'App\\Controller\\CoachController::index'], null, null, null, false, false, null]],
        '/affichecoach' => [[['_route' => 'affichecoach', '_controller' => 'App\\Controller\\CoachController::readcoach'], null, null, null, false, false, null]],
        '/addcoach' => [[['_route' => 'addcoach', '_controller' => 'App\\Controller\\CoachController::addcoach'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'profil_index', '_controller' => 'App\\Controller\\ProfilController::index'], null, ['GET' => 0], null, true, false, null]],
        '/profil/new' => [[['_route' => 'profil_new', '_controller' => 'App\\Controller\\ProfilController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/simpleutilisateur' => [[['_route' => 'simpleutilisateur', '_controller' => 'App\\Controller\\SimpleutilisateurController::index'], null, null, null, false, false, null]],
        '/affichesimpleutilisateur' => [[['_route' => 'affichesimpleutilisateur', '_controller' => 'App\\Controller\\SimpleutilisateurController::readsimpleutilisateur'], null, null, null, false, false, null]],
        '/addUtilisateur' => [[['_route' => 'addUtilisateur', '_controller' => 'App\\Controller\\SimpleutilisateurController::addUtilisateur'], null, null, null, false, false, null]],
        '/tournoi' => [[['_route' => 'tournoi', '_controller' => 'App\\Controller\\TournoiController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/delete(?'
                    .'|coach/([^/]++)(*:193)'
                    .'|simpleutilisateur/([^/]++)(*:227)'
                .')'
                .'|/update(?'
                    .'|coach/([^/]++)(*:260)'
                    .'|Utilisateur/([^/]++)(*:288)'
                .')'
                .'|/profil/([^/]++)(?'
                    .'|(*:316)'
                    .'|/edit(*:329)'
                    .'|(*:337)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        193 => [[['_route' => 'deletecoach', '_controller' => 'App\\Controller\\CoachController::deletecoach'], ['id'], null, null, false, true, null]],
        227 => [[['_route' => 'deletesimpleutilisateur', '_controller' => 'App\\Controller\\SimpleutilisateurController::deletesimpleutilisateur'], ['id'], null, null, false, true, null]],
        260 => [[['_route' => 'updatecoach', '_controller' => 'App\\Controller\\CoachController::updatecoach'], ['id'], null, null, false, true, null]],
        288 => [[['_route' => 'updateUtilisateur', '_controller' => 'App\\Controller\\SimpleutilisateurController::updateUtilisateur'], ['id'], null, null, false, true, null]],
        316 => [[['_route' => 'profil_show', '_controller' => 'App\\Controller\\ProfilController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        329 => [[['_route' => 'profil_edit', '_controller' => 'App\\Controller\\ProfilController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        337 => [
            [['_route' => 'profil_delete', '_controller' => 'App\\Controller\\ProfilController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
