<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller AS AppController;

class HomeController extends AppController
{
    public function index()
    {
        echo 'Page Index of Home';
    }

    public function create()
    {
        echo 'Page create of Home';
    }

    public function edit()
    {
        echo 'Page edit of Home';
    }
}
