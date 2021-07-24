<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Equation;

class CalculatorController extends Controller
{
     public function store(Request $request){
        //dd($request);
        $user=new User();
        $user->ipAddress=$request->ip();
        //$user->equation=$request->equation;
        $user->save();
        
        $equation=new Equation();
        //dd($equation);
        $equation->user_id=$user->id;
        $equation->equation=$request->equ;
        $equation->save();
        }
     //public function retu(Request $request){
       // return "test";
        /*$user=\App\User::whereIn($ip)->get();
        
        if(!($use->isEnpty)){
            //ipが同じで1番新しいデータを取得
            $equ=\App\User::where("ip",$ip)
                ->max("created_at")
                ->select("equation")
                ->get();
            //そのデータをテーブルから削除
            \App\User::where("ip",$ip)
                ->max("created_at")
                ->delete();
            //そのデータをネクストテーブルに入れる
            $equation=new Equation();
            $equation->ipAddress=$ip;
            $equation->equation=$equ;
            $equation->save();
            
        }
    }*/
}
//ipが同じで1番古いデータを取得
//そのデータをネクストテーブルから削除
//そのデータをテーブルに入れる