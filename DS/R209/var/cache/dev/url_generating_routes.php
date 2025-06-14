<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt_stylesheet' => [[], ['_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], [], [['text', '/_wdt/styles']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_dashboard' => [[], ['_controller' => 'App\\Controller\\DashboardController::index'], [], [['text', '/dashboard']], [], [], []],
    'app_dashboard_note' => [[], ['_controller' => 'App\\Controller\\DashboardController::dashboardAdmin'], [], [['text', '/dashboard/note']], [], [], []],
    'app_etat_index' => [[], ['_controller' => 'App\\Controller\\EtatController::index'], [], [['text', '/etat']], [], [], []],
    'app_etat_new' => [[], ['_controller' => 'App\\Controller\\EtatController::new'], [], [['text', '/etat/new']], [], [], []],
    'app_etat_show' => [['id'], ['_controller' => 'App\\Controller\\EtatController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/etat']], [], [], []],
    'app_etat_edit' => [['id'], ['_controller' => 'App\\Controller\\EtatController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/etat']], [], [], []],
    'app_etat_delete' => [['id'], ['_controller' => 'App\\Controller\\EtatController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/etat']], [], [], []],
    'app_note_index' => [[], ['_controller' => 'App\\Controller\\NoteController::index'], [], [['text', '/note']], [], [], []],
    'app_note_new' => [[], ['_controller' => 'App\\Controller\\NoteController::new'], [], [['text', '/note/new']], [], [], []],
    'app_note_show' => [['id'], ['_controller' => 'App\\Controller\\NoteController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/note']], [], [], []],
    'app_note_edit' => [['id'], ['_controller' => 'App\\Controller\\NoteController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/note']], [], [], []],
    'app_note_delete' => [['id'], ['_controller' => 'App\\Controller\\NoteController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/note']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_tag_index' => [[], ['_controller' => 'App\\Controller\\TagController::index'], [], [['text', '/tag']], [], [], []],
    'app_tag_new' => [[], ['_controller' => 'App\\Controller\\TagController::new'], [], [['text', '/tag/new']], [], [], []],
    'app_tag_show' => [['id'], ['_controller' => 'App\\Controller\\TagController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/tag']], [], [], []],
    'app_tag_edit' => [['id'], ['_controller' => 'App\\Controller\\TagController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/tag']], [], [], []],
    'app_tag_delete' => [['id'], ['_controller' => 'App\\Controller\\TagController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/tag']], [], [], []],
    'app_user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user']], [], [], []],
    'app_user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], [], []],
    'app_user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_vie_note_index' => [[], ['_controller' => 'App\\Controller\\VieNoteController::index'], [], [['text', '/vie/note']], [], [], []],
    'app_vie_note_new' => [[], ['_controller' => 'App\\Controller\\VieNoteController::new'], [], [['text', '/vie/note/new']], [], [], []],
    'app_vie_note_show' => [['id'], ['_controller' => 'App\\Controller\\VieNoteController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/vie/note']], [], [], []],
    'app_vie_note_edit' => [['id'], ['_controller' => 'App\\Controller\\VieNoteController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/vie/note']], [], [], []],
    'app_vie_note_delete' => [['id'], ['_controller' => 'App\\Controller\\VieNoteController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/vie/note']], [], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'logout' => [[], [], [], [['text', '/logout']], [], [], []],
    'App\Controller\DashboardController::index' => [[], ['_controller' => 'App\\Controller\\DashboardController::index'], [], [['text', '/dashboard']], [], [], []],
    'App\Controller\DashboardController::dashboardAdmin' => [[], ['_controller' => 'App\\Controller\\DashboardController::dashboardAdmin'], [], [['text', '/dashboard/note']], [], [], []],
    'App\Controller\EtatController::index' => [[], ['_controller' => 'App\\Controller\\EtatController::index'], [], [['text', '/etat']], [], [], []],
    'App\Controller\EtatController::new' => [[], ['_controller' => 'App\\Controller\\EtatController::new'], [], [['text', '/etat/new']], [], [], []],
    'App\Controller\EtatController::show' => [['id'], ['_controller' => 'App\\Controller\\EtatController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/etat']], [], [], []],
    'App\Controller\EtatController::edit' => [['id'], ['_controller' => 'App\\Controller\\EtatController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/etat']], [], [], []],
    'App\Controller\EtatController::delete' => [['id'], ['_controller' => 'App\\Controller\\EtatController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/etat']], [], [], []],
    'App\Controller\NoteController::index' => [[], ['_controller' => 'App\\Controller\\NoteController::index'], [], [['text', '/note']], [], [], []],
    'App\Controller\NoteController::new' => [[], ['_controller' => 'App\\Controller\\NoteController::new'], [], [['text', '/note/new']], [], [], []],
    'App\Controller\NoteController::show' => [['id'], ['_controller' => 'App\\Controller\\NoteController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/note']], [], [], []],
    'App\Controller\NoteController::edit' => [['id'], ['_controller' => 'App\\Controller\\NoteController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/note']], [], [], []],
    'App\Controller\NoteController::delete' => [['id'], ['_controller' => 'App\\Controller\\NoteController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/note']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\RegistrationController::verifyUserEmail' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\TagController::index' => [[], ['_controller' => 'App\\Controller\\TagController::index'], [], [['text', '/tag']], [], [], []],
    'App\Controller\TagController::new' => [[], ['_controller' => 'App\\Controller\\TagController::new'], [], [['text', '/tag/new']], [], [], []],
    'App\Controller\TagController::show' => [['id'], ['_controller' => 'App\\Controller\\TagController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/tag']], [], [], []],
    'App\Controller\TagController::edit' => [['id'], ['_controller' => 'App\\Controller\\TagController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/tag']], [], [], []],
    'App\Controller\TagController::delete' => [['id'], ['_controller' => 'App\\Controller\\TagController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/tag']], [], [], []],
    'App\Controller\UserController::index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user']], [], [], []],
    'App\Controller\UserController::new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], [], []],
    'App\Controller\UserController::show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'App\Controller\UserController::edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'App\Controller\UserController::delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'App\Controller\VieNoteController::index' => [[], ['_controller' => 'App\\Controller\\VieNoteController::index'], [], [['text', '/vie/note']], [], [], []],
    'App\Controller\VieNoteController::new' => [[], ['_controller' => 'App\\Controller\\VieNoteController::new'], [], [['text', '/vie/note/new']], [], [], []],
    'App\Controller\VieNoteController::show' => [['id'], ['_controller' => 'App\\Controller\\VieNoteController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/vie/note']], [], [], []],
    'App\Controller\VieNoteController::edit' => [['id'], ['_controller' => 'App\\Controller\\VieNoteController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/vie/note']], [], [], []],
    'App\Controller\VieNoteController::delete' => [['id'], ['_controller' => 'App\\Controller\\VieNoteController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/vie/note']], [], [], []],
];
