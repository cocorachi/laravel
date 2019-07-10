<?php
use GuzzleHttp\Client;
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
    $client = new Client();
    $res = $client->request('GET', 'http://172.16.110.214:8080/?rest_route=/wp/v2/posts');

    return $res->getBody();
});
//Route::get('/', function() {
  // return response()->json([
   // 'stuff' => phpinfo()
  // ]);
//});
