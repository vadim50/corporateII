<?php

namespace Corp\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactsController extends SiteController
{
    //
    public function __construct(){

        parent::__construct(new \Corp\Repositories\MenusRepository(new \Corp\Menu));


        $this->bar = 'left';

        $this->template = env('THEME').'.contacts';
    }

    public function index(Request $request){


    	//MAIL=====================

    	    	if($request->isMethod('post')){

    		$messages = [

    			'required'=>'Поле :attribute обязательно к заполнению!',
    			'email'=>'Поле :attribute должно соответсвовать email адресу!',
    			'max'=>'Поле :attribute не должно превышать 255 символов!'

    		];

    		$this->validate($request,[

    			'name'=>'required|max:255',
    			'email'=>'required|email',
    			'text'=>'required'

    		],$messages);

    		$data = $request->all();
    		//email
    		$result = Mail::send(env('THEME').'.email',['data'=>$data],function($message) use ($data){
    			//$mail_admin = env('MAIL_ADMIN');

    			$message->from($data['email'],$data['name']);

    			$message->to('mastertoy50@gmail.com')->subject('Question');

    		});

    		if(count(Mail::failures()) == 0){
    			
    			//session(['status'=>'Email is send!!!']);
    			return redirect()->route('contacts')->with('status','Email is send!');
    		}




    	}

    	//MAIL+++++++++++++++++++++++++++


    	$this->title = 'Контаkты';

    	$content = view(env('THEME').'.contact_content')->render();
    	$this->vars = array_add($this->vars,'content',$content);

    	$this->contentLeftBar = view(env('THEME').'.contact_bar')->render();

    	return $this->renderOutput();

    }

}
