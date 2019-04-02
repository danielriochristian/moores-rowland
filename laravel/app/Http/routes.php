<?php
//route login
Route::get('login_admin', ['as' => 'login', 'uses' => 'LoginController@index']);
Route::get('dashboard','AuthController@getRoot');
Route::get('/','LoginController@index');
Route::get('/memberarea','LoginController@index');
Route::post('postLogin','LoginController@postLogin');
Route::get('logout','LogoutController@Logout');

//route super admin
Route::get('home','SuperController@index');
Route::get('workinggroup','TaxController@working');
Route::get('users','ManageAdminController@index');
Route::POST('addPost','ManageAdminController@addPost');
Route::POST('editPost','ManageAdminController@editPost');
Route::POST('deletePost','ManageAdminController@deletePost');
Route::get('user/json', 'ManageAdminController@userdatatb')->name('user/json');
Route::get('role/json', 'RolesController@manageroletb')->name('role/json');
Route::get('roles','RolesController@index');
Route::POST('editPostRoles','RolesController@editPost');
Route::get('resources','ManageResourcesController@index');
Route::post('uploadresources','ManageResourcesController@upload');
Route::get('resource/json', 'ManageResourcesController@resourcetb')->name('resource/json');
Route::POST('deleteresource','ManageResourcesController@deleteresource');
// Route::POST('editreource','ManageAdminController@editPost')
Route::get('setting','SettingController@index');
Route::get('site/json', 'SettingController@sitetb')->name('site/json');
Route::POST('editsetting','SettingController@editsetting');

//route admin
Route::get('workinggroup/tax','TaxController@index');
Route::post('/uploadtax','TaxController@upload');
Route::get('workinggroup/payroll','PayrollController@index');
Route::post('/uploadpayroll','PayrollController@upload');
Route::get('workinggroup/finance','FinanceController@index');
Route::post('/uploadfinance','FinanceController@upload');
Route::get('workinggroup/audit','AuditController@index');
Route::post('/uploadaudit','AuditController@upload');
Route::get('homeadmin','HomeController@index');
Route::get('resource','ResourceController@index');

// Route::get('/store','TaxController@store');
// Route::get('/getdownload','TaxController@getDownload');

//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});
?>
