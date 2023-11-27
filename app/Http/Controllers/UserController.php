<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function getRedis()
    {
        //Alter test
        // Redis::set('user', 'pedro');
        Redis::expire('user', 5);
        return Redis::get('user');
    }


    public function form()
    {
        return view('form');
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
    public function store(UserRequest $request)
    {
        dd($request->toArray());
    }

    /**
     * Display the specified resource.
     */
    public function showUsers()
    {
        $user = User::all();

        return response()->json($user);

        // return view('user.show');
    }

    public function findUser(User $id)
    {
        $user = User::find($id);

        return response()->json($user);

        // return view('user.show');
    }

    public function findUserSkill(User $id)
    {


        $user = User::whereHas('getSkill', function ($query) {
            $query->where('skill_id', 4);
        })->get();

        return response()->json($user);

        // return view('user.show');
    }



    /**
     * Display the specified resource.
     */
    public function show()
    {
        $user = User::whereHas('getSkill', function ($query) {
            $query->where('skill_id', 7);
        })->get();

        dd($user->toArray());
        $user->getskill()->attach([1, 2, 3]);
        return response()->json($user);

        // return view('user.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
