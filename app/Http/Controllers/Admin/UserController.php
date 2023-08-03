<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const OBJECT = 'admin.user';
    const DOT = '.';
    public function index()
    {

        $data = User::query()->orderByDesc('id')->get();

        return view(self::OBJECT . self::DOT . __FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::OBJECT . self::DOT . __FUNCTION__);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        User::query()->create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => hash($request->password),
                'role_id' => $request->role_id
            ]
        );
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::query()->findOrFail($id);
        return view(self::OBJECT . self::DOT . __FUNCTION__, compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, string $id)
    {
        User::query()->where('id', $id)->update(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => hash($request->password),
                'role_id' => $request->role_id
            ]
        );
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect()->route('user.index');
    }
}
