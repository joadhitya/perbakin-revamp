<?php

use App\Http\Controllers\Admin\MasterData\ShootingFieldController;
use App\Http\Controllers\Admin\Member\MemberController;
use App\Http\Controllers\Admin\Member\OrganizationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::group(['prefix' => 'master-data'], function () {
            Route::resource('md-shooting-field', ShootingFieldController::class);
            Route::resource('md-homebase', ShootingFieldController::class);
            Route::resource('md-club', ShootingFieldController::class);
            Route::resource('md-position', ShootingFieldController::class);
            Route::resource('md-item-category', ShootingFieldController::class);
            Route::resource('md-item-unit', ShootingFieldController::class);
            Route::resource('md-item', ShootingFieldController::class);
            Route::resource('md-weapon-caliber', ShootingFieldController::class);
            Route::resource('md-weapon-category', ShootingFieldController::class);
            Route::resource('md-weapon-model', ShootingFieldController::class);
            Route::resource('md-weapon-brand', ShootingFieldController::class);
        });
        Route::group(['prefix' => 'member'], function () {
            Route::resource('mb-member', MemberController::class);
            Route::post('mb-member/activity-detail', [MemberController::class, 'activityDetail'])->name('member.activityDetail');
            Route::resource('mb-organization', OrganizationController::class);
        });
    });
});

require __DIR__ . '/auth.php';
