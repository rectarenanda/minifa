<?php
 
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use App\Models;

class AccountController extends BaseController 
{
    // layout dengan menggunakan blade
    // public $layout  = 'layout';
    // public $title   = 'Account';
    // public $account = Account::all();
    // public $count = Account::all()->count();

    public function index() {
        // $this->layout->title = $this->title;
        /* 
        * menggunakan view yang ada 
        * pada direktori views/article/index
        */
        $account = Account::all();
        $count = Account::all()->count();
        return view('account.index',[$account,$count]);
        
        // // query ini digunakan untuk mengambil semua data dari table article        
        // $view->account = Account::all();
 
        // // query ini digunakan untuk menghitung total data dari table article
        // $view->count = Account::all()->count();
 
        // // render semua konten view kedalam layout
        // $this->layout->content = $view;
    }
}