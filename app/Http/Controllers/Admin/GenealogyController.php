<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class GenealogyController extends Controller
{
    public function index($id=null){
        if(!$id){
            $genealogies = User::orderBy('position')->where('parent_id', Auth::user()->id)->get();
            $root = User::where('id', Auth::user()->id)->first();

        }else{
            $id = base64_decode($id) / Auth::user()->id;
            $root = User::where('id', $id)->first();
            $genealogies = User::orderBy('position')->where('parent_id', $id)->get();
        }

        $pos = [];
        foreach($genealogies as $genealogy){
            $pos[] = $genealogy->position;
            $data[$genealogy->position] = $genealogy;
        }

        $liHTML ='';
        for($i = 1; $i<=10; $i++){
            if(in_array($i, $pos)){
                $liHTML .= '<li>
                <div class="single-genealogy">
                    <div class="single-genealogy-front">
                        <img src="'.asset('assets/orgchart/img/user-level.png') .'" alt="User">
                        <h4><a href="'.url('admin/genealogy-tree/'.base64_encode($data[$i]->id * Auth::user()->id)).'">'.$data[$i]->name.'</a></h4>  
                    </div>
                    <div class="single-genealogy-hover">
                        <p>Username: '.$data[$i]->username.'</p>
                        <p>Join Date: '.$data[$i]->created_at.'</p>
                        <p>Balance Amount: '.$data[$i]->balance.'</p>
                        <p>Total BV: '.$data[$i]->total_pv.'</p>
                    </div>
                </div>
            </li>';
        }else{
            $liHTML .= '<li>
            <div class="single-genealogy">
                <div class="single-genealogy-front">
                <img src="'.asset('assets/orgchart/img/user-level.png') .'" alt="User">
                    <h4><a href="'.url('admin/users/join?p='.$i).'">  Add new</a></h4>
                </div>
            </div>
        </li>';
        }
    }
        return view('admin/genealogy',compact('root','liHTML'));
    }
}
