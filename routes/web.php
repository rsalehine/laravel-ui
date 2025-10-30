<?php

use App\Livewire\ComponentPage;
use App\Livewire\PageController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;



Volt::route('/','pages.home-page')->name('pages.home-page');

Route::redirect('/docs','/docs/introduction');
Route::redirect('/components','/components/accordion');
Route::get('/docs/{main?}/{children?}', PageController::class)->name('documentation');
Route::get('/components/{main?}/{children?}', ComponentPage::class)->name('components');