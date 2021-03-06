<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('site.home');
});
// //Auth::routes();
Route::get('nbb-admin', function (){
  return redirect('nbb-admin/login');
});
Route::group(['prefix' => 'nbb-admin'] , function (){
     Auth::routes();
   Route::group(['middleware' => 'auth' ] ,function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
     Route::match(['get','post'],'upload de fotos','GaleriaController@create')->name('pictures');
     Route::get('contados/recents', 'AgendaController@recents')->name('contados_recentes');
     Route::get('contados/json/{id}','AgendaController@jsonApp');
     Route::match(['post','get'],'/contado', 'AgendaController@deletar')->name('contados');
    Route::get('contados/filtro',"AgendaController@busca")->name('buscar');
     Route::match(['get','post'], 'profile/edit', 'ProfileController@edit')->name('profile_edit');
    Route::match(['get','post'] ,'servicos','ServicoController@form')->name('servico');
     Route::match(['post','get'],'servico','ServicoController@delete')->name('delete_servico');
     Route::match(['get','post'],'list/servicos/{id}','ServicoController@repostaJson')->where('id', '[0-9]');
    //Route::post('profile/edit/verifica', 'ProfileController@verifica');
    //Route::get('profile', 'ProfileController@index')->name('profile');
  });
 });
// //Auth::routes();
Route::get('home', 'HomeController@index')->name('home');
Route::get('servicos', 'ServicoController@index')->name('servicos.index');
Route::get('contato/{servico?}', 'AgendaController@index')->name('indexado');
Route::post('contato/{servico?}', 'AgendaController@create')->name('formulario');
Route::get('about', 'HomeController@about')->name('about');
Route::get('galeria/{galeria}','GaleriaController@index')->name('galeria.index');
