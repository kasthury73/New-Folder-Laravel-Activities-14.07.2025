<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('employee/employeelist');
// });


// Route::view('employeedetail', 'employee/employeedetail');

// Route::get('employeedetail/{id}/{name}/{age}/{phone_no}',function($id,$name,$age,$phone_no){
//     return view('employee/employeedetail',['id'=>$id,'name'=>$name,'age'=>$age,'phone_no'=>$phone_no]);
// });


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('pages/about');
// });

// Route::get('/photo', function () {
//     return view('pages/photo');
// });

// Route::get('/contact', function () {
//     return view('pages/contact');
// });

// Route::get('/home', function () {
//     return view('/home');
// });

//Route::view('/home', 'home',['name' => 'kasthui']);

// Route::get('/sample', function () {
//     return "kasthu";
// });


// Route::get('/contact', function () {
//     return view('pages/contact',['name' =>"Kasthuri"]);
// });


//  Route::get('/about', function () {
//      return view('pages/about',['phonenumber'=> "077548763"]);
// });

//  Route::get('/photo', function () {
//      return view('pages/photo',['age' => 10]);
//  });




//Route::get('home',function(){
    //return ('Welcome');
//});

// Route::post('home',function(){
//     return ('Welcome');
//  });

// Route::get('my-form',function(){
//     return view ('form/get-form');
// });

// Route::get('/', function () {
//     return view('employee/employeelist');
// });














// Route::post('home',function(){
//     return "Welcome post";
// });


// Route::put('home',function(){
//     return "Welcome put";
// });

// Route::patch('home',function(){
//     return "Welcome patch";
// });





// Route::get('home',function(){
//     return "Welcome get";
// });

// Route::post('home',function(Request $request){
//     dd($request -> input  ("firstname"));
// });

// Route::put('home',function(){
//     return "Welcome put";
// });

// Route::patch('home',function(){
//     return "Welcome patch";
// });

// Route::delete('home',function(){
//     return "Welcome delete";
// });



// Route::get('form',function(){
//     return view ('employee/employee-form');
// });
//Route::view('form','employee/employee-form');
//Route::post('employee-detail',function(Request $request){
//     $id =$request -> input  ("id");
//     $name=$request -> input ("name");
//     $age=$request -> input ("age");
//     $phone=$request -> input ("phone");

    //return view ('employee/employee-detail',['id'=>$id,'name' => $name, 'age'=>$age, 'phone'=>$phone,]);

    // Route::view("employeedetail",'employee/employee-detail');
    // Route::post('employeedetail/{id?}/{name?}/{age?}/{phone_no?}/{image?}',function($id=1,$name='kaj',$age=20,$phone_no=02145,$image='jin.jpg'){
    // return view('employee/employeedetail',['id'=>$id,'name'=>$name,'age'=>$age,'phone_no'=>$phone_no,'image'=>$image]);
    // });


//});


Route::get('input',function(){
    return view('form/input');
});

Route::post('/form',function(Request $request){
     dd($request->all());
 });




Route::post('/form',function(Request $request){
     return view('form/getdetail', $request->all());
});


// Route::get('/master',function(){
//     return view('Layouts/master');
// });

Route::get('home',function(){
    return view('home');
});


Route::get('about',function(){
    return view('pages/about');
});



Route::get('photo',function(){
    return view('pages/photo');
});

Route::get('contact',function(){
    return view('pages/contact');
});











