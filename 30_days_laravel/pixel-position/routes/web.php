<?php

    use App\Http\Controllers\JobController;
    use App\Http\Controllers\RegisteredController;
    use App\Http\Controllers\SearchController;
    use App\Http\Controllers\SessionController;
    use App\Http\Controllers\TagController;
    use Illuminate\Support\Facades\Route;

    Route::get('/', [JobController::class, 'index'])->middleware('auth');
    Route::get('/search', SearchController::class);
    Route::get('/tags/{tag:name}', TagController::class);
    Route::middleware('guest')->group(function () {
        Route::get('/register', [RegisteredController::class, 'create']);
        Route::post('/register', [RegisteredController::class, 'store']);
        Route::get('/login', [SessionController::class, 'create'])->name('login');
        Route::post('/login', [SessionController::class, 'store']);
    });
    Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');

    // Create Job
    Route::middleware('auth')->group(function () {
        Route::get('/jobs/create', [JobController::class, 'create']);
        Route::post('/jobs', [JobController::class, 'store']);
        Route::get('/jobs/{job:name}/edit', [JobController::class, 'edit'])->can('edit', 'job');
        Route::patch('/jobs', [JobController::class, 'update']);
        Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->can('delete', 'job');
    });