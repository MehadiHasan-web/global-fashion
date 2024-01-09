<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class OrderReceived extends Component
{
    public $orders;
    public function render()
    {
        $this->orders = DB::table('orders')->where('status', 1)->get();
        return view('livewire.admin.order-received');
    }
    public function orderComplete($id){
        DB::table('orders')->where('id', $id)->update(['status' => 3]);
        noty()->addSuccess('Order complete successfully');
    }
}
