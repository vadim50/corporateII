<?php

namespace Corp\Http\Controllers;

use Illuminate\Http\Request;
use Corp\Repositories\MenusRepository;
use Menu;

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
        //dd($menu);

        $navigation = view(env('THEME').'.navigation')->with('menu',$menu)->render();
        $this->vars = array_add($this->vars,'navigation',$navigation);

    	return view($this->template)->with($this->vars);
    }
    public function getMenu(){
        $menu = $this->m_rep->get();

        $mBuilder = Menu::make('MyNav',function($m) use($menu) {
          foreach($menu as $item){

               /*
             * Для родительского пункта меню формируем элемент меню в корне
             * и с помощью метода id присваиваем каждому пункту идентификатор
             */
            if($item->parent == 0){
                $m->add($item->title, $item->path)->id($item->id);
            }
            //иначе формируем дочерний пункт меню
            else {
                //ищем для текущего дочернего пункта меню в объекте меню ($m)
                //id родительского пункта (из БД)
                if($m->find($item->parent)){
                    $m->find($item->parent)->add($item->title, $item->path)->id($item->id);
               }
            }
         
          }
        });
        //dd($mBuilder);
        return $mBuilder;
    }
}
