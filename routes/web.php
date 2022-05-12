<?php
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('urun-gelistirme', 'pages.about')->name('about');
Route::view('ekibimiz', 'pages.team')->name('team');
Route::view('kariyer', 'pages.career')->name('career');
Route::view('is-ortaklarimiz', 'pages.partners')->name('partners');
Route::view('burs-programi', 'pages.scholarship')->name('scholarship');
Route::view('canli-yayinlar', 'pages.broadcasts')->name('broadcasts');
Route::view('creators-networking', 'pages.networking')->name('networking');
Route::view('topluluk', 'pages.community')->name('community');
Route::view('masterclass', 'pages.masterclass')->name('masterclass');
Route::view('egitimler', 'pages.courses')->name('courses');
Route::view('katma-deger-fonu', 'pages.fund')->name('fund');
Route::view('yatirimlarimiz', 'pages.funded')->name('funded');
Route::view('venture-building', 'pages.venture-building')->name('venture-building');
Route::view('service-for-equity', 'pages.service-for-equity')->name('service-for-equity');
Route::view('iletisim', 'pages.contact')->name('contact');
Route::view('gizlilik-sozlesmesi', 'pages.privacy-policy')->name('privacy-policy');
Route::view('sss', 'pages.faq')->name('faq');
Route::view('hackathonlar', 'pages.hackathon')->name('hackathon');
Route::view('kullanici-sozlesmesi', 'pages.terms-of-use')->name('terms-of-use');
Route::view('komunite-social-media-manager', 'pages.komunite-social-media-manager')->name('komunite-social-media-manager');
Route::view('komunite-growth-product-manager', 'pages.komunite-growth-product-manager')->name('komunite-growth-product-manager');
Route::view('the-bulten-editor-at-large', 'pages.the-bulten-editor-at-large')->name('the-bulten-editor-at-large');