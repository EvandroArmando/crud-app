<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $req)
    {
        $rules = array(
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|min:6",

        );

        $validator = Validator::make($req->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 200);
        } else {
            $user = new User();
            $user->email = $req->email;
            $user->name = $req->name;
            $user->password = Hash::make($req->password);
            $user->save();
            $token = $user->createToken('my-app-token')->plainTextToken;

           $usuario= User::find($user->id);

            return response()->json(['usuario' => $usuario, 'token' => $token], 200);
        }
    }
    
    public function login(Request $request)
    {
        $user = User::where("email", $request->email)->first();

        if ($user == null) {
            return response([
                'message' => 'Utilizador não encontrado',
                'errors' => ['email' => 'Não encontrado'],
            ], 200);
        } else
        if (!Hash::check($request->password, $user->password)) {
            return response([
                'message' => 'password incorrecta',
                'errors' => ['password' => 'Inválida'],
            ], 200);
        } else {

            $token = $user->createToken('my-app-token')->plainTextToken;
            $response = [
                'usuario' => $user,
                'token' => $token,
                'message' => 'Usuario Logado',
            ];

            
            return response($response, 200);
        }

       
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
