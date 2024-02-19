<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Businesses\BusinessController;
use App\Http\Controllers\Employees\ClientController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Employers\EmployerController;
use App\Http\Controllers\Calculator\CalculatorController;
use App\Http\Controllers\Asset\AssetController;
use App\Http\Controllers\Dealers\DealerController;
use App\Http\Controllers\Agents\AgentController;
use App\Http\Controllers\Uploads\ImageUploadController;
use App\Http\Controllers\Files\FileController;

use App\Models\Business;
use App\Models\Dealer;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'role:business', 'prefix' => 'business', 'as' => 'business.'], function () {
        Route::resource('/business/businesses', BusinessController::class);

    });
    Route::group(['middleware' => 'role:employee', 'prefix' => 'employee', 'as' => 'employee.'], function () {
        Route::resource('/employee/clients', ClientController::class);
        Route::view('/uploads/upload', 'upload');
        Route::resource('asset', AssetController::class);

    });
    Route::group(['middleware' => 'role:employer', 'prefix' => 'employer', 'as' => 'employer.'], function () {
        Route::resource('employers/profiles', EmployerController::class);
        Route::view('/uploads/upload', 'upload');
        Route::resource('asset', AssetController::class);

    });
    Route::group(['middleware' => 'role:dealer', 'prefix' => 'dealer', 'as' => 'dealer.'], function () {
        Route::resource('dealers/dealers', DealerController::class);
    });
    Route::group(['middleware' => 'role:agent', 'prefix' => 'agent', 'as' => 'agent.'], function () {
        Route::resource('agents/agent', AgentController::class);
    });

    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::resource('users', UserController::class);
    });
});

Route::prefix('assets')->group(function () {
    Route::get('/', [AssetController::class, 'index'])->name('asset.index');
    Route::get('/create', [AssetController::class, 'create'])->name('asset.create');
    Route::post('/', [AssetController::class, 'store'])->name('asset.store');
    Route::get('/{asset}', [AssetController::class, 'show'])->name('asset.show');
    Route::get('/{asset}/edit', [AssetController::class, 'edit'])->name('asset.edit');
    Route::put('/{asset}', [AssetController::class, 'update'])->name('asset.update');
    Route::delete('/{asset}', [AssetController::class, 'destroy'])->name('asset.destroy');
});
Route::post('calculate', [CalculatorController::class, 'calculate'])->name('calculate');

Route::prefix('uploads')->group(function () {
    Route::get('upload/', [ImageUploadController::class, 'showUploadForm'])->name('showUploadForm');
    Route::post('/upload', [ImageUploadController::class, 'upload'])->name('upload');
});


// Route::controller(FileController::class)->group(function(){
//     Route::get('file-upload', 'index');
//     Route::post('file-upload', 'store')->name('file.store');

// });

Route::group(['prefix' => 'fileuploads'], function () {
    Route::get('/', 'FileController@index')->name('fileuploads.index'); // Define the index route
    Route::get('file-upload', 'FileController@index'); // You may not need this line if you're only using POST for file upload
    Route::post('file-upload', 'FileController@store')->name('fileuploads.store');
});



