<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class FormSubmit extends Component
{
    public $name;
    public $weight;
    public function render()
    {
        return view('livewire.form-submit');
    }

    public function submit(Product $product)
    {
        $this->validate([
            'name' => 'required',
            'weight' => 'required'
        ]);

        $product->create([
            'name' => $this->name,
            'weight' => $this->weight
        ]);
        $this->reset(['name','weight']);
        $this->emitTo('products-list', 'updateList');
    }
}
