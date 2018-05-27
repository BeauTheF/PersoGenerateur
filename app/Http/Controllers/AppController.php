<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class AppController extends Controller
{
    public function reset(){
        $db = \DB::connection()->getDatabaseName();
       file_put_contents($db, '');
       \Artisan::call('migrate');
       \Artisan::call('db:seed');
       return "La base de donnée a été réinitialisée";
    }
}
