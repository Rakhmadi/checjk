<?php
namespace App\Http\Controllers;
use Validator;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\inimod;
class ini extends Controller
{
    public function init(){
        $f=inimod::all();
        return response()->json([
            $f,
            'time'=>Carbon::now()->format('m d y')
            ]);

    }
    public function post(Request $re){
        $val=Validator::make($re->all(),[
            'name'=>'required|min:10',
            'stock'=>'required'
        ]);
        if ($val->fails()) {
            return response()->json([
                $vall->errors()
            ]);
        }else {
            $r=inimod::Create([
                'name'=>$re->name,
                'stock'=>$re->stock,
            ])->save();
            return response()->json([
                'suuces'=>'yes',
                'time'=>Carbon::now()->format('M D Y')
            ]);  
        }
        
    }
}
