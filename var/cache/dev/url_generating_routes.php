<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_accueil' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    '_parameters' => [[], ['_controller' => 'App\\Controller\\ParameterController::index'], [], [['text', '/parametres']], [], []],
    '_projects' => [[], ['_controller' => 'App\\Controller\\ProjectController::index'], [], [['text', '/projets']], [], []],
    '_project_edit' => [['idProject'], ['_controller' => 'App\\Controller\\ProjectController::edit'], ['idProject' => '\\d+'], [['text', '/edition'], ['variable', '/', '\\d+', 'idProject', true], ['text', '/projet']], [], []],
    '_project_remove' => [['idProject'], ['_controller' => 'App\\Controller\\ProjectController::remove'], ['idProject' => '\\d+'], [['text', '/suppression'], ['variable', '/', '\\d+', 'idProject', true], ['text', '/projet']], [], []],
    'remove' => [['id'], ['_controller' => 'App\\Controller\\ProjectController::removeProjectStains'], [], [['text', '/suppression'], ['variable', '/', '[^/]++', 'id', true], ['text', '/projet']], [], []],
    '_statement' => [[], ['_controller' => 'App\\Controller\\StatementController::index'], [], [['text', '/enonce']], [], []],
    '_taches' => [[], ['_controller' => 'App\\Controller\\TachesController::index'], [], [['text', '/tâches']], [], []],
    '_stains_edit' => [['idStains'], ['_controller' => 'App\\Controller\\TachesController::edit'], ['idStains' => '\\d+'], [['text', '/edition'], ['variable', '/', '\\d+', 'idStains', true], ['text', '/taches']], [], []],
    '_taches_remove' => [['id'], ['_controller' => 'App\\Controller\\TachesController::remove'], [], [['text', '/suppression'], ['variable', '/', '[^/]++', 'id', true], ['text', '/taches']], [], []],
];
