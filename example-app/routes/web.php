<?php
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;


// -----------------------------------------------------------------


// Route::get('/', function () {
//     return view('employee/employeelist');
// });

// Route::view('employeedetail', 'employee/employeedetail');
// -----------------------------------------------------------------

// -----------------------------------------------------------------
//value assign in employeedetail form route

// Route::get('employeedetail/{id}/{name}/{age}/{phone_no}',function($id,$name,$age,$phone_no){
//     return view('employee/employeedetail',['id'=>$id,'name'=>$name,'age'=>$age,'phone_no'=>$phone_no]);
// });

//--------------------------------------------------------------------

//laravel welcome page open route

// Route::get('/', function () {
//     return view('welcome');
// });
//--------------------------------------------------------------------


//--------------------------------------------------------------------
//about page route
// Route::get('/about', function () {
//     return view('pages/about');
// });
//--------------------------------------------------------------------


//--------------------------------------------------------------------
//photo page route
// Route::get('/photo', function () {
//     return view('pages/photo');
// });
//--------------------------------------------------------------------


//--------------------------------------------------------------------
//contact page route
// Route::get('/contact', function () {
//     return view('pages/contact');
// });
//--------------------------------------------------------------------


//--------------------------------------------------------------------
//home page route
// Route::get('/home', function () {
//     return view('/home');
// });
//--------------------------------------------------------------------


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





// Route::get('get',function(){
//     return view ("form/get-form");
// });

// Route::get('get',function(){
//     return ();
// });


// -------------------------------------------------------------------------

Route::get('my-form-post',function(){
    return view('form/post-form');
});

// Route::post('post',function(){
//     return ("post method");
// });

// ----------------------------------------

Route::get('my-form-get',function(){
    return view('form/get-form');
});

// Route::get('get',function(){
//     return ("get method");
// });

// -------------------------------------------

Route::get('my-form-patch',function(){
    return view('form/patch-form');
});

// Route::patch('patch',function(){
//     return('patch method');
// });

// ----------------------------------------------

Route::get('my-form-put',function(){
    return view('form/put-form');
});

Route::put('put',function(){
    return('put method');
});

// --------------------------------------------------

Route::get('my-form-delete',function(){
    return view('form/delete-form');
});

// Route::delete('delete',function(){
//     return ('delete method');
// });

// ----------------------------------------------------

// -------------------------------------------------------------------------

// Route::get('my-form-put',function(){
//     return view("form/put-form");
// });

Route::put('put',function(Request $request){
    dd($request -> input ('fname'));
});

// ----------------------------------------------------

Route::post('post',function(Request $request){
    dd($request -> input ('fname'));
});

// -----------------------------------------------------

Route::patch('patch', function(Request  $request){
    dd($request -> input ('fname'));
});

// -----------------------------------------------------

Route::get('get', function(Request $request){
    dd($request -> input ('fname'));
});

// -----------------------------------------------------

Route::delete('delete', function(Request $request){
    dd($request -> input ('fname'));
});

// -----------------------------------------------------------------------------

// Route::patch('patch',function(){
//     return view("form/patch-form");
// });

// Route::delete('delete',function(){
//     return view("form/delete-form");
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


// -----------------------------------------------------------------------------
//employee-form route

// Route::get('form',function(){
//     return view ('employee/employee-form');
// });

//Route::view('form','employee/employee-form');
//
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


// -------------------------------------------------------------

//Routes for input -> getdetail

Route::get('input',function(){
    return view('form/input');
});

// Route::post('/form',function(Request $request){
//      dd($request->all());
//  });


Route::post('/form',function(Request $request){
     return view('form/getdetail', $request->all());
});

// ------------------------------------------------------------
// Layouts/master.blade.php route
Route::get('/master',function(){
    return view('Layouts/master');
});

// Route::get('/master',function(){
//     return view('employee/employeelist');
// });
// ------------------------------------------------------------

//-------------------------------------------------------------
//Layouts/main.blade,php Route
Route::get('/main',function(){
    return view('Layouts/main');
});

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

Route::get('employeelist',function(){
    return view('employee/employeelist');
});
//-------------------------------------------------------------



// Route::get('employee',function(){
//     return view('employee/employeelist');
// });


// Route::get('input',function(){
//     return view('form/input');
// });




// Route::get('/employeelist',function(){
//     return view('employee/employeelist');
// });


Route::get('employee-form', function(){
    return view('employee/employee-form');
});


Route::post('/employee-detail',function(Request $request){
    $data= $request -> all();
    return view('employee/employee-detail',[
        'ID' => $data ['id'],
        'Name' => $data ['name'],
        'Age' => $data ['age'],
        'Number' => $data ['phone'],
        'NICNo' => $data ['nic-no']
    ]);
});







?>
