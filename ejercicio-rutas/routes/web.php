<?php
 
 use Illuminate\Support\Facades\Route;
 
 use App\Http\Controllers\PrPruebaController;
 
//  Route::get('/', function () {
//      return ('HOME');
//  })->name('home.indez');
//  
 Route::get('contacto', function () {
     return ('CONTACTO');
 })->name('home.contacto');

 Route::get('home', function () {
    

        return view('home');
 })->name('home.vista');

// 
// // Route::get('post-recientes/{hace_dias?}', function ($hace_dias=0) {
// //     return "Este post es de hace ".$hace_dias." dias";
// // })->where(['hace_dias'=>'[0-9]+'])->name('posts.recientes.index');
// // 
// // Route::get('posts-id/{id}', function ($id) {
// //     return "".$id;
// // })->where(['id'=>'[a-zA-Z]'])-> name('posts.enseñar');
// 
// 
// 
// // Route::name('posts')->prefix('posts')->group(function() {
// //      Route::get('recientes/{hace_dias?}', function($hace_dias=0){
// //          return "Este post es de hace ".$hace_dias." dias";
// //      })->where(['hace_dias'=>'[0-9]+'])->name('.recientes.index');
// //  
// //      Route::get('/{id}', function ($id) {
// //          return "".$id;
// //      })->where(['id'=>'[a-zA-Z]'])-> name('.enseñar');
// //  });
// 
// //Route::get('/{id}', [PrPruebaController::class, 'show'],
// //   ['id'=>'idc'])->where(['id'=>'[A-Za-z'])->name('.enseñar');
// // 
// Route::get('vista1/{var}', function($var){
//      return view('<h1>Elemento:'.$var.'</h1>');
//  })->name('home.vista1');
// 
// // Route::get('/array', function(){
// //     $a=[4, 5, 3];
//  //     return view('array', ["numeros" => $a]);
// // });
// 
// Route::get('array2/{elemen}', function($elemen){
//     $a=[9,8,7,6,5,4,3,2];
//     foreach ($a as $c => $v){
//         if ($c == $elemen){
//             return $v;
//         }
//     };
// });
// 
// Route::get('array3', function(){
//     $a=[1,2,3,4,5,6,7,8,9,10];
//     return view('array3', ["numeros" => $a]);
// });