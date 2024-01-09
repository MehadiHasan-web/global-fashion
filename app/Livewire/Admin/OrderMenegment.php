<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class OrderMenegment extends Component
{
    public $orders;
    public function render()
    {
        $this->orders = DB::table('orders')->where('status', 0)->get();

        return view('livewire.admin.order-menegment');
    }
    public function orderResived($id){
        DB::table('orders')->where('id', $id)->update(['status' => 1]);
        noty()->addSuccess('Order received successfully');
    }
    public function cenacleOrder($id){
        DB::table('orders')->where('id', $id)->update(['status' => 5]);
        noty()->addSuccess('Order cenacle');
    }
}
