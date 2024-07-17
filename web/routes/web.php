<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController;

Route::get('/', [PageController::class, 'index']);
Route::get('/about-us', [PageController::class, 'aboutUs']);
Route::get('/our-services', [PageController::class, 'ourServices']);
Route::get('/our-tours', [PageController::class, 'ourTours']);
Route::get('/hotels', [PageController::class, 'hotels']);
Route::get('/contact-us', [PageController::class, 'contactUs']);
Route::get('/gorilla-express', [PageController::class, 'gorillaExpress']);
Route::get('/nyungwe-national-park', [PageController::class, 'nyungweNationalPark']);
Route::get('/akagera-national-park', [PageController::class, 'AkageraNationalPark']);
Route::get('/one-and-only', [PageController::class, 'oneAndOnly']);
Route::get('/serena-hotel', [PageController::class, 'serenaHotel']);
Route::get('/niyo-art-garelly', [PageController::class, 'niyoArtGallery']);
Route::get('/le-bambou-gorilla-lodge', [PageController::class, 'leBambouGorillaLodge']);
Route::get('/5-volcanoes-boutique-hotel', [PageController::class, 'VolcanoesBoutiqueHotel']);
Route::get('/singita-hotel', [PageController::class, 'singitaHotel']);
Route::get('/ingagi-park-view-lodge', [PageController::class, 'ingagiParkViewLodge']);
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

