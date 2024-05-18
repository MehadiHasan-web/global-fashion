<?php

namespace App\Livewire\Admin;

use App\Models\Admin\Product;
use Livewire\Component;
use Carbon\Carbon;

class Popular extends Component
{
    public $date ;
    public $popular;


    public function render()
    {
        if($this->date == 'today'){
            $this->popular =  Product::popularToday()->get();
        }else if($this->date == 'lastday'){
            $this->popular =  Product::popularLastDays(50)->get();
        }else if($this->date == 'thisweek'){
            $this->popular =  Product::popularThisWeek()->get();

        }else if($this->date == 'thismonth'){
            $this->popular =  Product::popularThisMonth()->get();

        }else if($this->date == 'lastmonth'){
            $this->popular =  Product::popularLastMonth()->get();

        }else if($this->date == 'thisyear'){
            $this->popular =  Product::popularThisYear()->get();

        }else if($this->date == 'lastyear'){
            $this->popular =  Product::popularLastYear()->get();
        }else{
            $this->popular = Product::popularAllTime()->get();
        }


        return view('livewire.admin.popular');
    }
}
