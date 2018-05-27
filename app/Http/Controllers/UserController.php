<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('nom')->get();
        return view("users.index", ["users"=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$user=new User();
        $user = User::fake();
        return view('users.create', ['user'=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $donnees =$request->all();
        $user = new User();
        $user->fill($donnees);
        $user->name=str_slug($user->prenom.$user->nom, " ");
        $user->permission=1;
        $user->password=bcrypt($request->password);
        $user->save();
        return redirect()->action('UserController@show', $user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view("users.show", ['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', ['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $donnees=$request->except(['password']);
        if($request->get('password')){
            $user->password=bcrypt($request->get('password'));
        }
        $user->fill($donnees);
        $user->name=str_slug($user->prenom.$user->nom, " ");
        $user->save();
        return redirect()
            ->action('UserController@show', $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // \App\Personnage::where('user_id',$user->id)->delete();
        // $user->posts()->delete();
        $user->delete();
        return redirect()
            ->action('UserController@index');
    }
}
