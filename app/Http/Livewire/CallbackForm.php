<?php

namespace App\Http\Livewire;

use App\Notifications\Callback;
use Illuminate\Notifications\Notification;
use Livewire\Component;
use Spatie\Honeypot\Http\Livewire\Concerns\HoneypotData;
use Spatie\Honeypot\Http\Livewire\Concerns\UsesSpamProtection;

class CallbackForm extends Component
{
    use UsesSpamProtection;

    public HoneypotData $extraFields;

    public string $name = '';

    public string $phone = '';

    public string $comment = '';

    public bool $agree = true;

    public function mount()
    {
        $this->extraFields = new HoneypotData();
    }

    public function render()
    {
        return view('livewire.callback-form');
    }

    public function submit()
    {
        $this->protectAgainstSpam();

        $this->validate(...$this->rules());

        Notification::send(
            env('MANAGER_MAIL'),
            new Callback([
                'name' => $this->name,
                'phone' => $this->phone,
                'comment' => $this->comment,
            ])
        );
    }

    public function updated($field)
    {
        $this->validateOnly($field, ...$this->rules());
    }

    public function rules(): array
    {
        return [
            [
                'name' => 'required|string|min:3',
                'phone' => 'required|string|regex',
                'comment' => 'nullable|string',
//                'agree' => 'required|accepted',
            ],
            [],
            [
                'name' => 'Імʼя',
                'phone' => 'Телефон',
                'comment' => 'Коментар',
//                'agree' => 'Погоджуюсь на обробку моїх данних',
            ],
        ];
    }
}
