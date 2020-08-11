<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;
use Exception;

class UserController extends Controller {

    /**
     * Removendo valores que não devem serem
     * devolvidos para o usuário
    */
    public function clearUsers($users) {
        foreach($users as $user) {
            $user->password = null;
            $user->created_at = null;
            $user->updated_at = null;
        }
    }

    /**
     * Pegando usuário do banco de dados
    */
    public function getUser(int $id) {
        $user = User::where("id", '=', $id)->first();
        $this->clearUsers([$user]);
        return view(
            'usuario',
            [
                'userView' =>$user
            ]
        );
    }

    /**
     * Listando todos os usuários do banco
     * de dados
    */
    public function listUsers() {
        /**
         * Buscando todos os usuários
         */
        $users = User::all();
        if (!empty($user)) {
            $this->clearUsers($users);
        }
        return view(
            'usuarios',
            [
                'usersView' => $users
            ]
        );
    }

    public function createUser(Request $request) {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route("list.users");
    }

    public function updateUser(int $id, Request $request) {
        $user = User::where("id", '=', $id)->first();
        if (!empty($request->password)) { $user->password = Hash::make($request->password); }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->update();

        return redirect()->route('list.users');
    }

    public function deleteUser(int $id) {
        try {
            $user = User::where("id", '=', $id)->first();
            $user->delete();
            return redirect()->route('list.users');
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }

    }
}
