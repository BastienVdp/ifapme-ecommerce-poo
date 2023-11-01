<?php 

namespace App\Controllers;

use App\Core\View;
use App\Core\Controller;

class ProfileController extends Controller
{
    public string $layout = 'profile';
    
    public function index()
    {
        return View::make('profile/index');
    }
}
