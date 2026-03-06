<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route thường
Route::get('/contact', function () {
    return "Contact Us";
})->name('contact');

// Route trả về view
Route::get('/about', function () {
    return view('about');
})->name('about');

// Route có tham số, tham số phải là số nguyên
Route::get('/users/{id}', function (int $id) {
    return "User ID: {$id}";
});

// Route có tham số tùy chọn, nếu không có sẽ lấy giá trị mặc định
Route::get('/students/{name?}', function (?string $name = 'TrongNghia') {
    return "Student Name: {$name}";
});

// Route nhóm
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return "Admin Dashboard";
    });

    Route::get('/settings', function () {
        return "Admin Settings";
    });
});

// Route fallback
Route::fallback(function () {
    return "Không tìm thấy trang";
});