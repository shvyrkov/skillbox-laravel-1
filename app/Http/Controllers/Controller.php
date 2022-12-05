<?php

namespace App\Http\Controllers;

use App\Myhelpers\Menu;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $menu;
    private $title;

    public function __construct()
    {
        $this->menu = Menu::getUserMenu();
        $this->title = Menu::showTitle($this->menu);
    }

    protected function getMenu()
    {
        return $this->menu;
    }

    protected function getTitle()
    {
        return $this->title;
    }
}
