<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;

class ChatUser extends Component
{
    public $users;
    public $message;

    public function render()
    {
        return view('livewire.chat-user');
    }

    public function mount(){
        $this->users = (new UserService())->getOtherUsers(Auth::user());
    }

    public function sendMessage(){
        dd($this->message);
    }
}
