<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/dashboard/note' => [[['_route' => 'app_dashboard_note', '_controller' => 'App\\Controller\\DashboardController::dashboardAdmin'], null, null, null, false, false, null]],
        '/etat' => [[['_route' => 'app_etat_index', '_controller' => 'App\\Controller\\EtatController::index'], null, ['GET' => 0], null, false, false, null]],
        '/etat/new' => [[['_route' => 'app_etat_new', '_controller' => 'App\\Controller\\EtatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/note' => [[['_route' => 'app_note_index', '_controller' => 'App\\Controller\\NoteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/note/new' => [[['_route' => 'app_note_new', '_controller' => 'App\\Controller\\NoteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
            [['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
        ],
        '/logout' => [
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null],
            [['_route' => 'logout'], null, null, null, false, false, null],
        ],
        '/tag' => [[['_route' => 'app_tag_index', '_controller' => 'App\\Controller\\TagController::index'], null, ['GET' => 0], null, false, false, null]],
        '/tag/new' => [[['_route' => 'app_tag_new', '_controller' => 'App\\Controller\\TagController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/vie/note' => [[['_route' => 'app_vie_note_index', '_controller' => 'App\\Controller\\VieNoteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/vie/note/new' => [[['_route' => 'app_vie_note_new', '_controller' => 'App\\Controller\\VieNoteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/etat/([^/]++)(?'
                    .'|(*:219)'
                    .'|/edit(*:232)'
                    .'|(*:240)'
                .')'
                .'|/note/([^/]++)(?'
                    .'|(*:266)'
                    .'|/edit(*:279)'
                    .'|(*:287)'
                .')'
                .'|/tag/([^/]++)(?'
                    .'|(*:312)'
                    .'|/edit(*:325)'
                    .'|(*:333)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:359)'
                    .'|/edit(*:372)'
                    .'|(*:380)'
                .')'
                .'|/vie/note/([^/]++)(?'
                    .'|(*:410)'
                    .'|/edit(*:423)'
                    .'|(*:431)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        219 => [[['_route' => 'app_etat_show', '_controller' => 'App\\Controller\\EtatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        232 => [[['_route' => 'app_etat_edit', '_controller' => 'App\\Controller\\EtatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        240 => [[['_route' => 'app_etat_delete', '_controller' => 'App\\Controller\\EtatController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        266 => [[['_route' => 'app_note_show', '_controller' => 'App\\Controller\\NoteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        279 => [[['_route' => 'app_note_edit', '_controller' => 'App\\Controller\\NoteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        287 => [[['_route' => 'app_note_delete', '_controller' => 'App\\Controller\\NoteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        312 => [[['_route' => 'app_tag_show', '_controller' => 'App\\Controller\\TagController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        325 => [[['_route' => 'app_tag_edit', '_controller' => 'App\\Controller\\TagController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        333 => [[['_route' => 'app_tag_delete', '_controller' => 'App\\Controller\\TagController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        359 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        372 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        380 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        410 => [[['_route' => 'app_vie_note_show', '_controller' => 'App\\Controller\\VieNoteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        423 => [[['_route' => 'app_vie_note_edit', '_controller' => 'App\\Controller\\VieNoteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        431 => [
            [['_route' => 'app_vie_note_delete', '_controller' => 'App\\Controller\\VieNoteController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
