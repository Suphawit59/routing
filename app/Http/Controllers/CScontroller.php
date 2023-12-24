<?php

namespace App\Http\Controllers;
use Inertia\Inertia;

class CScontroller extends Controller
{
public function index()
    {
    return Inertia::render('staff/index',[
        'message' => 'show my messager',
        'message2' => 'computer'
    ]);
    }
public function show()
    {

   return 'Show';
    }
}