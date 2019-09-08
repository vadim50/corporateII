<?php

namespace Corp\Http\Controllers;

use Illuminate\Http\Request;
use Corp\Repositories\PortfoliosRepository;

class PortfolioController extends SiteController
{
    //

	 public function __construct(
        PortfoliosRepository $p_rep
                                ){

        parent::__construct(new \Corp\Repositories\MenusRepository(new \Corp\Menu));

        //$this->s_rep = $s_rep;
        $this->p_rep = $p_rep;

        $this->template = env('THEME').'.portfolios';
    }

     public function index()
    {
        //
         $this->title = 'Портфолио';
        $this->keywords = 'Портфолио';
        $this->meta_desc = 'Портфолио';

        $portfolios = $this->getPortfolios();
       // dd($portfolios);
      
        $content = view(env('THEME').'.portfolios_content')
        ->with('portfolios',$portfolios)->render();
        $this->vars = array_add($this->vars,'content',$content);

        return $this->renderOutput();
    }

    public function getPortfolios($take=false,$paginate=true){
    	$portfolios = $this->p_rep->get('*',$take,$paginate);

    	//dd($portfolios);
    	if($portfolios){
    		$portfolios->load('filter');
    	}

    	return $portfolios;
    }

        public function show($alias)
    {
       
    	$portfolio = $this->p_rep->one($alias);
    	//dd($portfolio);

    	if($portfolio && $portfolio->img){
    		$portfolio->img = json_decode($portfolio->img);
    	}


        $this->title = $portfolio->title;
        $this->keywords = $portfolio->keywords;
        $this->meta_desc = $portfolio->meta_desc;
        $portfolios = $this->getPortfolios(config('settings.other_portfolios'),false);

        $content = view(env('THEME').'.portfolio_one_pidar')
        ->with(['portfolio'=>$portfolio,'portfolios'=>$portfolios])
        ->render();

        $this->vars = array_add($this->vars,'content',$content);
        
        //dd($portfolios);

        return $this->renderOutput();
    }

}
