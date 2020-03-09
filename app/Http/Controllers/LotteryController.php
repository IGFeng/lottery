<?php
namespace App\Http\Controllers;
use App\Lottery;
use Illuminate\Http\Request;

class LotteryController extends Controller{
    public function lottery(){
        return view('lottery');
    }
    public function go(Request $request){
        $num=$request->input('num');
        $total=Lottery::count();
        $numbers=range(0,$total-1);
        if($num==1){
            $luckydog=array_rand($numbers);
            $answer=Lottery::find($luckydog)->name;
        }
        else{
            $luckydog=array_rand($numbers,$num);
        $answer=array();
        foreach($luckydog as $key=>$value){
            $answer[$key]=Lottery::find($value+1)->name;
        }
     }
        return view('lottery',['answer'=>$answer]);
    }
}
