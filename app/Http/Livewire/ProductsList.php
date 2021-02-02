<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductsList extends Component
{
    public $products;
    
    protected $listeners = ['updateList' => 'mount'];

    public function mount()
    {
        $this->products = Product::all();
    }
    public function render()
    {
        return view('livewire.products-list');
    }

    public function delete(Product $product)
    {
        $product->delete();
        $this->mount();
    }
}
