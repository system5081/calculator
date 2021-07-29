<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Equation;
use App\Next;

class CalculatorController extends Controller
{
     public function store(Request $request){
        $user=new User();
        $user->ipAddress=$request->ip();
        //$user->equation=$request->equation;
        $user->save();
        
        $equation=new Equation();
        $equation->ipAddress=$request->ip();
        $equation->$request->equation;
        $equation->save();
        }
    public function retu(Request $request){
        $next=new Next();
        $next->ipAddress=$request->ip();
        $next->$request->equation;
        $next->save();
    }
    public function retu2(Request $request){
        $user = DB::table("users")->orderBy("created_time","desc");
        $ip=$request->ip();
        $data=$user->where("ipAddress",$ip)->value("equation")->first();
        $par_json=json_encode($data);
  
        /*$item=new User;
        $ip=$request->ip();
        $value=$item->where("ipAddress",$ip)->last();
        $array=["1","2","3","4"];
        return view("sample",compact("value","array"));
        */
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