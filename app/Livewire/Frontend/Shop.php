<?php

namespace App\Livewire\Frontend;

use App\Models\Admin\Product;
use App\Models\Admin\Social;
use Livewire\Component;

class Shop extends Component
{

    public $search = '';

    public function render()
    {
        $product = $this->search
            ? Product::where('name', 'like', '%' . $this->search . '%')->latest()->paginate(9)
            : Product::latest()->paginate(9);

        $social = Social::first();
        return view('livewire.frontend.shop', compact('product', 'social'));
    }
}
