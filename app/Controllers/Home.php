<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('dashboard');
    }

    public function especies()
    {
      $db = \Config\Database::connect('default',true);
      $especies = ['especies' => $db->query("SELECT * FROM especies")->getResultArray()];
    
        return view('especies',$especies);
     
    }
    
    public function aside()
    {
        return view('componentes/aside');
    }
    
}
