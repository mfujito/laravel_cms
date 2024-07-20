<?php

namespace App\Http\Controllers;

use App\Models\Senior;
use Illuminate\Http\Request;
use Validator;  //この2行を追加！

class SeniorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $seniors = Senior::orderBy('created_at', 'asc')->get();
            return view('seniors', [
             'seniors' => $seniors
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {          //バリデーション
        $validator = Validator::make($request->all(), [
            'senior_name' => 'required|max:255', 
             'senior_age' => 'required | min:1 | max:3',
             'senior_email' => 'required | max:255',
             'self_introduction' => 'required | max:500',
             'published'   => 'required',
        ]);
    
        //バリデーション:エラー 
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        //以下に登録処理を記述（Eloquentモデル）
    
      // Eloquentモデル
      $seniors = new Senior;
      $seniors->senior_name   = $request->senior_name;
      $seniors->senior_age = $request->senior_age;
      $seniors->senior_email = $request->senior_email;
      $seniors->self_introduction = $request->self_introduction;
      $seniors->published   = $request->published;
      $seniors->save(); 
      return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Senior $senior)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Senior $senior)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Senior $senior)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Senior $senior)
    {
        //
    }
}
