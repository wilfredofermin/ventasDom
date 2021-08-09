<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;


class CategoriesComponent extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';


    public $name, $image, $search, $select_id, $componentName, $pageTitle;
    private $pagination = 5;

    public function mount(){
        $this->componentName = 'Categoria';
        $this->pageTitle = 'Lista de categorias';

    }

    public function edit($id){

       $record = Category::find($id);
       $this->name = $record->name;
       $this->image = null;

       $this->emit('show-modal','Mostrar Modal');
    }

    public function destroy($id){

        dd('test' .$id);
    }

    public function resetUI(){
        $this->name = '';
        $this->image = null;
    }
    
    public function render()
    {
      
        if(strlen($this->search) > 0)
            $data = Category::where('name','like', '%' . $this->search .'%')->paginate($this->pagination);
        else
            $data = Category::orderBy('id','desc')->paginate($this->pagination);

        return view('livewire.category.categories-component',['data' => $data])
        ->extends('layouts.theme.app')
        ->section('content');
    }
}
