<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function Registered(Request $request) {
        $validator = Validator::make($request->all(), [
            'registerUsername' => ['required', Rule::unique('users', 'name')],
            'registerEmail' => ['required', Rule::unique('users', 'email')],
            'registerPassword' => ['required'],
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect('/Register')
                ->withInput()
                ->with('error', $errors->first());
        }

        $incomingFields['registerPassword'] = bcrypt($incomingFields['registerPassword']);

        $user = User::create([
            'name' => $incomingFields['registerUsername'],
            'email' => $incomingFields['registerEmail'],
            'password' => $incomingFields['registerPassword'],
        ]);

        auth()->login($user);

        return redirect('/Allblog');
    }

    public function logout() {
        auth()->logout();
        return redirect('/Allblog');
    }

    public function Logined(Request $request) {
        $incomingFields = $request->validate([
            'loginEmail' => ['required'],
            'loginPassword' => ['required'],
        ]);

        if (auth()->attempt(['email' => $incomingFields['loginEmail'], 'password' => $incomingFields['loginPassword']])) {
            $request->session()->regenerate();
            return redirect('/MyBlog');
        } else {
            return redirect('/Login')->with('error', 'No account with that name');
        }
    }

    public function UpdateProfile(Request $request) {
        $incomingFields = $request->validate([
            'editUsername' => 'required',
            'editEmail' => ['required', Rule::unique('users', 'email')->ignore(Auth::id())],
            'editPassword' => 'nullable',
        ]);

        $user = Auth::user();
        $user->name = strip_tags($incomingFields['editUsername']);
        $user->email = strip_tags($incomingFields['editEmail']);
        if (!empty($incomingFields['editPassword'])) {
            $user->password = bcrypt($incomingFields['editPassword']);
        }
        $user->save();

        return redirect('/MyBlog');
    }
}
