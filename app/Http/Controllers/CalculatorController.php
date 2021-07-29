<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Equation;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class CalculatorController extends Controller
{   
    public function view() {
        Cookie::queue('count',0, 1440);
        return view("calculator");
    }
    
    
     public function store_users(Request $request){
        $user=new User();
        $user->ipAddress=$request->ip();
        //$user->equation=$request->equation;
        $user->save();
         
        /*ipアドレスの重複を避けたい
        $ip=$request->ip();
        $user = User::whereIn('ipAddress',$ip)->get();
        if($user->isEmpty()){
            $user=new User();
        $user->ipAddress=$request->ip();
        //$user->equation=$request->equation;
        $user->save();
        }
        /*
        
        /*
        $equation=new Equation();
        //dd($equation);
        $equation->user_id=$user->id;
        $equation->equation=$request->equ;
        $equation->save();
        */
        
    }
    public function store_equations(Request $request){
        
        $ip=$request->ip();
        
        $equation=new Equation();
        //dd($equation);
        $equation->user_id=1;
        $equation->equation=$request->equ;
        $equation->save();
    }
    public function retur(Request $request){
        /*$equation=new Equation();
        
        //dd($equation);
        $equation->user_id=1;
        $equation->equation=$request->equ;
        $equation->save();
        */
        
        $count= Cookie::get('count');
        $count+=1;
        Cookie::queue('count',$count, 10);
        
        
        
        
    }
    public function nex(Request $request){
        /*$equation=new Equation();
        
        //dd($equation);
        $equation->user_id=1;
        $equation->equation=$request->equ;
        $equation->save();
        */
        
        $count= Cookie::get('count');
        $count-=1;
        Cookie::queue('count',$count, 10);
        

    }
}