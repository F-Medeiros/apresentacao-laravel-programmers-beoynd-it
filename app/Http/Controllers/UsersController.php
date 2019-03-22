<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }



    public function index(UserRequest $request)
    {
        $user = $this->user;
        $users = $user->paginate(15);
        return $users;
    }



    public function store(UserRequest $request)
    {
        $input = $request->all();
        $input['password'] = bcrypt($request->password);

        $user = $this->user;

        $user->fill($input)->save();

        return $user;
    }


    public function show(User $user)
    {
        return $user;
    }



    public function update(UserRequest $request, User $user)
    {
        $input = $request->all();

        if ($request->password)
            $input['password'] = bcrypt($request->password);

        $user->fill($input)->save();

        return $user;
    }


    public function destroy(User $user)
    {
        $user->delete();

        return response()->json(['message' => 'success'], 200);
    }
}
