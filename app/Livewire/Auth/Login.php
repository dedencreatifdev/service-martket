<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

use Illuminate\Support\Facades\Auth;

#[Layout('components.layouts.auth')]
#[Title('Login')]

class Login extends Component
{
    public $email;
    public $password;

    /**
     * login
     *
     * @return void
     */
    public function login()
    {

        $this->validate([
            'email'     => 'required|email',
            'password'  => 'required'
        ],[
            'email.required'=>'Email wajib disini',
            'email.email'=>'Email tidak valid',
            'password.required'=>'Password wajib disini'
        ]);

        // dd($this->validate);

        if(Auth::attempt(['email' => $this->email, 'password'=> $this->password])) {

            return redirect()->route('dashboard.index');

        } else {
            session()->flash('email', 'Alamat Email atau Password Anda salah!.');
            return redirect()->route('login');
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
