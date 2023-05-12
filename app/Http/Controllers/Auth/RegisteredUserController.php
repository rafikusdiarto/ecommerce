<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class RegisteredUserController extends Controller
{
    // protected function user(User $user){
    //     $user->assignRole('user');
    // }
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8|same:password_confirmation',
            'password_confirmation' => 'required',
        ],
        [
            'required' => ':attribute harus diisi.',
            'email' => 'format surel tidak benar.',
        ],);

        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->email_verified_at = now();
            $user->password = bcrypt($request->password);
            $user->remember_token = \Str::random(60);
            $user->save();

            event(new Registered($user));
            $user->assignRole('user');

            return redirect()->route('login')
                            ->with('success','User created successfully');

        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }

    }
}
