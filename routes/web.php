<?php

/* BASIC CORE STATIC PAGES */
Route::get('/about', 'PageController@about')->name('about');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/expansion', 'PageController@expansion')->name('expansion');
Route::get('/json', 'PageController@json')->name('json');
Route::get('/marketing', 'PageController@marketing')->name('marketing');
Route::get('/overview', 'PageController@overview')->name('overview');
Route::get('/search', 'PageController@search')->name('search');
Route::get('/site-map', 'PageController@site-map')->name('sitemap');
Route::get('/support', 'PageController@support')->name('support');
Route::get('/', 'PageController@index')->name('home');

/* ===== ===== ===== ===== ===== */

/* AUTH PAGES */
Route::get('/login', 'SessionController@login')->name('login');

//Route::get('/register', 'AuthController@register')->name('register');
//Route::get('/auth/register', 'AuthController@register')->name('register');
//Route::get('/login', 'AuthController@login')->name('login');
//Route::get('/auth/login', 'AuthController@login')->name('login');
//Route::get('/logout', 'AuthController@logout')->name('logout');
//Route::get('/auth/logout', 'AuthController@logout')->name('logout');

/* ACCOUNTING */
Route::get('/accounting/ap', 'AccountingController@ap')->name('ap');
Route::get('/accounting/ap-create', 'AccountingController@apCreate')->name('apcreate');
Route::get('/accounting/ar', 'AccountingController@ar')->name('ar');
Route::get('/accounting/ar-create', 'AccountingController@arCreate')->name('arcreate');
Route::get('/accounting/coa', 'AccountingController@coa')->name('coa');
Route::get('/accounting/coa-create', 'AccountingController@coaCreate')->name('coacreate');
Route::get('/accounting/financials', 'AccountingController@financials')->name('financials');
Route::get('/accounting/financial-create', 'AccountingController@financialCreate')->name('financialcreate');
Route::get('/accounting/journal-entries', 'AccountingController@journalEntries')->name('journalentries');
Route::get('/accounting/journal-entry-create', 'AccountingController@journalEntryCreate')->name('journalentrycreate');

/* SETTINGS */
Route::get('/system/application-settings', 'SystemController@appSettings')->name('settings');
Route::get('/system/application-setting-create', 'SystemController@appSettingCreate')->name('settingcreate');
Route::get('/system/documentation', 'SystemController@documentation')->name('settingcreate');
Route::get('/system/users', 'SystemController@users')->name('settingcreate');
Route::get('/system/role', 'SystemController@appSettingCreate')->name('settingcreate');
Route::get('/system/acl', 'SystemController@appSettingCreate')->name('settingcreate');
Route::get('/system/site-map', 'SystemController@appSettingCreate')->name('settingcreate');

/* TASKS */
Route::get('/tasks', 'TaskController@index')->name('tasks');
Route::get('/tasks/create', 'TaskController@create')->name('tasks-create');
Route::post('/tasks', 'TaskController@store')->name('tasks-store');
Route::get('/tasks/{id}/edit', 'TaskController@show')->name('tasks-show');
Route::post('/tasks/{id}/update', 'TaskController@update')->name('tasks-update');
Route::post('/tasks/{id}/delete', 'TaskController@destroy')->name('tasks-delete');
