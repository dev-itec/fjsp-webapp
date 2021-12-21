<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User as Model;


class User extends Component
{
    use WithPagination;

    public $paginate = 10;

    public $name;
    public $last_name;
    public $email;
    public $password;
    public $google_id;


    public $mode = 'create';

    public $showForm = false;

    public $primaryId = null;

    public $search;

    public $showConfirmDeletePopup = false;

    protected $rules = [
        'name' => 'required',
        'last_name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'google_id' => 'required',

    ];


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $model = Model::where('name', 'like', '%' . $this->search . '%')->orWhere('last_name', 'like', '%' . $this->search . '%')->orWhere('email', 'like', '%' . $this->search . '%')->orWhere('password', 'like', '%' . $this->search . '%')->orWhere('google_id', 'like', '%' . $this->search . '%')->latest()->paginate($this->paginate);
        return view('livewire.user', [
            'rows' => $model
        ]);
    }


    public function create()
    {
        $this->mode = 'create';
        $this->resetForm();
        $this->showForm = true;
    }


    public function edit($primaryId)
    {
        $this->mode = 'update';
        $this->primaryId = $primaryId;
        $model = Model::find($primaryId);

        $this->name = $model->name;
        $this->last_name = $model->last_name;
        $this->email = $model->email;
        $this->password = $model->password;
        $this->google_id = $model->google_id;


        $this->showForm = true;
    }

    public function closeForm()
    {
        $this->showForm = false;
    }

    public function store()
    {
        $this->validate();

        $model = new Model();

        $model->name = $this->name;
        $model->last_name = $this->last_name;
        $model->email = $this->email;
        $model->password = $this->password;
        $model->google_id = $this->google_id;
        $model->save();

        $this->resetForm();
        session()->flash('message', 'Record Saved Successfully');
        $this->showForm = false;
    }

    public function resetForm()
    {
        $this->name = "";
        $this->last_name = "";
        $this->email = "";
        $this->password = "";
        $this->google_id = "";

    }


    public function update()
    {
        $this->validate();

        $model = Model::find($this->primaryId);

        $model->name = $this->name;
        $model->last_name = $this->last_name;
        $model->email = $this->email;
        $model->password = $this->password;
        $model->google_id = $this->google_id;
        $model->save();

        $this->resetForm();

        $this->showForm = false;

        session()->flash('message', 'Record Updated Successfully');
    }

    public function confirmDelete($primaryId)
    {
        $this->primaryId = $primaryId;
        $this->showConfirmDeletePopup = true;
    }

    public function destroy()
    {
        Model::find($this->primaryId)->delete();
        $this->showConfirmDeletePopup = false;
        session()->flash('message', 'Record Deleted Successfully');
    }

    public function clearFlash()
    {
        session()->forget('message');
    }

}
