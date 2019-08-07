<?php

namespace Corp\Http\Controllers;

use Illuminate\Http\Request;
use Corp\Repositories\MenusRepository;

class SiteController extends Controller
{
    //
    protected $p_rep;
    protected $s_rep;
    protected $a_rep;
    protected $m_rep;

    protected $template;
    protected $vars = [];

    protected $contentRightBar = false;
    protected $contentLeftBar = false;

    protected $bar = false;

    public function __construct(MenusRepository $m_rep){

        $this->m_rep = $m_rep;

    }

    protected function renderOutput(){


        $menu = $this->getMenu();
        dd($menu);

        $navigation = view(env('THEME').'.navigation')->render();
        $this->vars = array_add($this->vars,'navigation',$navigation);

    	return view($this->template)->with($this->vars);
    }
    public function getMenu(){
        $menu = $this->m_rep->get();

        return $menu;
    }
}
