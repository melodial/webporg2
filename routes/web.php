<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\coba;
use App\Models\artikel_ips;

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
    return view('welcome');
});
Route::get('/welcomePage', function () {
    return view('registrationPage');
});
Route::get('/aboutus', function () {
    return view('AboutUs');
});
Route::get('/homepage', function () {
    return view('HomePage');
});
Route::get('/artikel', function () {
    return view('artikel');
});
	


Route::get('/main_ips', function () {
    $artikel_ips = [
        [
            "judul" => "ekonomi1",
            "body" => " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolorem magnam qui nulla 
            voluptatibus iure facilis tempore praesentium consectetur hic."  
        ]
        ];
    return view('./artikel_IPS/main_ips', [
        "title" => "isi",
        "isi" => $artikel_ips //ini method
    ]


);
});



Route::get('/ekonomi1', function () {
    $artikel_ekonomi1 = [
    [ "judul" => "Ekonomi1",
      "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis consequuntur, at alias asperiores veniam qui nostrum ea! Atque quas perferendis
       odio ducimus quisquam, provident, necessitatibus libero esse blanditiis nobis consequuntur!"
    ]];

    return view('./artikel_IPS/ekonomi/ekonomi1',
[
"title"=> "isi",
"isi" => $artikel_ekonomi1
]);

});
Route::get('/ekonomi2', function () {

    $artikel_ekonomi2 = [
        [ "judul" => "Ekonomi2",
          "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis consequuntur, at alias asperiores veniam qui nostrum ea! Atque quas perferendis
           odio ducimus quisquam, provident, necessitatibus libero esse blanditiis nobis consequuntur!"
        ]];
    
        return view('./artikel_IPS/ekonomi/ekonomi2',
    [
    "title"=> "isi",
    "isi" => $artikel_ekonomi2
    ]);

});

Route::get('/ekonomi3', function () {

    $artikel_ekonomi3 = [
        [ "judul" => "Ekonomi3",
          "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis consequuntur, at alias asperiores veniam qui nostrum ea! Atque quas perferendis
           odio ducimus quisquam, provident, necessitatibus libero esse blanditiis nobis consequuntur!"
        ]];
    
        return view('./artikel_IPS/ekonomi/ekonomi3',
    [
    "title"=> "isi",
    "isi" => $artikel_ekonomi3
    ]);

});

Route::get('/main_mipa', function () {
    $artikel_ipa = [
        [
            "judul" => "ekonomi1",
            "body" => " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolorem magnam qui nulla 
            voluptatibus iure facilis tempore praesentium consectetur hic."  
        ]
        ];
    return view('./artikel_Mipa/main_mipa', [
        "title" => "isi",
        "isi" => $artikel_ipa //ini method
    ]


);
});

Route::get('/fisika1', function () {
    return view('./artikel_Mipa/fisika/fisika1',[
        "judul" => "fisika 1",
        "isi" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui ut doloribus laborum culpa ipsam deleniti? 
        Iusto delectus asperiores quas a rerum necessitatibus vitae laudantium doloribus voluptates nostrum, nobis 
        aperiam totam. Tempora necessitatibus nisi fugit! Esse inventore repellat ad itaque repudiandae officiis fugit unde 
        asperiores odio. Voluptate, quidem aliquam provident vel nihil rem ullam nisi dolores porro a saepe quaerat veniam minima 
        voluptatum fuga non libero 
        ipsam exercitationem impedit velit nesciunt omnis itaque adipisci. Ullam unde, in consequuntur fugiat temporibus aspernatur."
    ]);
});

Route::get('/kimia1', function () {
    return view('./artikel_Mipa/kimia/kimia1',[
        "judul" => "kimia 1",
        "isi" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui ut doloribus laborum culpa ipsam deleniti? 
        Iusto delectus asperiores quas a rerum necessitatibus vitae laudantium doloribus voluptates nostrum, nobis 
        aperiam totam. Tempora necessitatibus nisi fugit! Esse inventore repellat ad itaque repudiandae officiis fugit unde 
        asperiores odio. Voluptate, quidem aliquam provident vel nihil rem ullam nisi dolores porro a saepe quaerat veniam minima 
        voluptatum fuga non libero 
        ipsam exercitationem impedit velit nesciunt omnis itaque adipisci. Ullam unde, in consequuntur fugiat temporibus aspernatur."
    ]);
});
Route::get('/biologi1', function () {
    return view('./artikel_Mipa/biologi/biologi1',[
        "judul" => "biologi 1",
        "isi" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui ut doloribus laborum culpa ipsam deleniti? 
        Iusto delectus asperiores quas a rerum necessitatibus vitae laudantium doloribus voluptates nostrum, nobis 
        aperiam totam. Tempora necessitatibus nisi fugit! Esse inventore repellat ad itaque repudiandae officiis fugit unde 
        asperiores odio. Voluptate, quidem aliquam provident vel nihil rem ullam nisi dolores porro a saepe quaerat veniam minima 
        voluptatum fuga non libero 
        ipsam exercitationem impedit velit nesciunt omnis itaque adipisci. Ullam unde, in consequuntur fugiat temporibus aspernatur."
    ]);
});

Route::get('/mipa', function () {
    return view('./artikel_Mipa/main');
});




// Route::get('/registrasi/id', [
//     registrasi::class, 'regisInIdn'
// ]);
// Route::get('/registrasi/en',[
//     registrasi::class, 'regisInEn'
// ]);

// Route::get('/about',[Collection::class, 'collection']);
