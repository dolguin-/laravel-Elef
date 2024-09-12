<?php

use Illuminate\Support\Facades\Route;
use App\Models\Message;

Route::get('/', function () {
    $message = Message::first();
    return view('hello', ['message' => $message->message]);
});
