<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Validator;

class Subscribers extends Component
{
    public $state = [];

    public $subscribers, $name, $email, $subscriber_id;
    // public $isOpen = 0;

    public function render()
    {
        $this->subscribers = Subscriber::all();
        return view('livewire.subscribers');
    }

    public function createSubscriber()
    {

        $this->state = [];
        // $this->showEditWork = false;
        // $this->dispatchBrowserEvent('show-work-form');
        $validatedData = Validator::make(
            $this->state,
            [
                'name' => 'nullable',
                'email' => 'required|email|unique:subscribers,email',
            ],
            [
                'email.required' => 'The email field is a required',
            ]
        )->validate();

        dd($validatedData);

        Subscriber::create($validatedData);
        // $this->dispatchBrowserEvent('hide-work-form', ['message' => 'Work experience added successfully!']);

        $this->resetInputFields();
        // $this->openModal();
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'nullable',
            'email' => 'required|email|unique:subscribers,email',
        ]);

        Subscriber::create($validatedData);

        session()->flash('message', 'Subscriber created successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $subscriber = Subscriber::findOrFail($id);

        $this->subscriber_id = $id;
        $this->name = $subscriber->name;
        $this->email = $subscriber->email;

        $this->openModal();
    }

    public function update()
    {
        $validatedData = $this->validate([
            'name' => 'nullable',
            'email' => 'required|email|unique:subscribers,email,' . $this->subscriber_id,
        ]);

        $subscriber = Subscriber::find($this->subscriber_id);
        $subscriber->update($validatedData);

        session()->flash('message', 'Subscriber updated successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function delete($id)
    {
        Subscriber::find($id)->delete();
        session()->flash('message', 'Subscriber deleted successfully.');
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }


    public function openModal()
    {
        $this->isOpen = true;
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->subscriber_id = '';
    }
}
