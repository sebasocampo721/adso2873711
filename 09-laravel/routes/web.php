<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('sayHello/{name}', function(){
    return "<h1>hello".request()->name."❤️</h1>";
});


Route::get('pets/all', function(){
    $pets = App\models\Pet::all();
    //return var_dump($pets->toArray());
    dd($pets->toArray()); // dump & dile
});

Route::get('pets/{id}', function(){
    $pet = App\models\Pet::find(request()->id);
    dd($pet->toArray());

});

Route::get('pets/{id}', function(){
    $pet = App\models\Pet::find(request()->id);
    dd($pet->toArray());

});


Route::get('users/all', function () {
    $users = App\models\User::all();

    $code = "<table style = 'border-collapse: margin: 2rem auto: font-family: Arial'";
        "<tr>
            <th stuyle='background: gray: color: white: padding: 0.4rem'>id</th>
            <th stuyle='background: gray: color: white: padding: 0.4rem'>photo</th>
            <th stuyle='background: gray: color: white: padding: 0.4rem'>fullname</th>
            <th stuyle='background: gray: color: white: padding: 0.4rem'>age</th>
            <th stuyle='background: gray: color: white: padding: 0.4rem'>Created</th>
        </tr>";
    foreach($users as $user){
        $code .= ($user->id%2 == 0) ? "<tr style='background: #ddd'>" : "<tr>";
        $code .= "<td style='border: 1px solid gray; padding: 0.4rem'>".$user->id."</td>";
        $code .= "<td style='border: 1px solid gray; padding: 0.4rem'><img src='".asset("images/".$user->photo)."' width='40px'></td>";
        $code .= "<td style='border: 1px solid gray; padding: 0.4rem'>".$user->fullName."</td>";
        $code .= "<td style='border: 1px solid gray; padding: 0.4rem'>".Carbon\carbon::parse($user->birthdate)->age." years old</td>";
        $code .= "<td style='border: 1px solid gray; padding: 0.4rem'>".$user->created_at->diffForHumans()."</td>";
    }
    return $code."</table>";
});

Route::get('petsViews', function(){
    $pets = App\models\Pet::all();
    return view('pets-view')->with('pets', $pets);
});

Route::get('petsView/{id}', function(){
    $pet = App\models\Pet::find(request()->id);
    return view('pet-view')->with('pet', $pet);
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
