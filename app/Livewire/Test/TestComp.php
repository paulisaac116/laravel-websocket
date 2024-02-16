<?php

namespace App\Livewire\Test;

use App\Models\User;
use Livewire\Component;

class TestComp extends Component
{
    protected $listeners = ['echo:test,Test' => 'eventProfile'];

    // public function getListeners()
    // {
    //     return [
    //         "echo-private:chat-detail.{$this->companyId},ChatDetailEvent" => 'eventoChatDetail',
    //         "echo-private:chat-header.{$this->companyId},ChatHeaderEvent" => 'eventoChatDetail',
    //         "getCustomerChats", "updateDefaultMessage", "setInputMessage",
    //     ];
    // }

    public function eventProfile()
    {
        User::create(['name' => 'websockets works']);
    }


    public function render()
    {
        return view('livewire.test.test-comp');
    }
}
