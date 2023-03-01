<?php
namespace app\controller;

use app\model\Gitmodel;


class GitController
{
    public function iniciar()
    {
        $Gitmodel = new Gitmodel();
     return $Gitmodel -> dados();
    }
    
}