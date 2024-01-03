<?php

namespace App\Http\Livewire;

use App\Mail\Callback;
use Illuminate\Support\Facades\Mail;
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

    public bool $showSuccess = true;

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
        $this->validate(...$this->rules());

        $this->protectAgainstSpam();

        Mail::to(env('MAIL_FROM_ADDRESS'))
            ->send(
                new Callback([
                    'name' => $this->name,
                    'phone' => $this->phone,
                    'comment' => $this->comment,
                ])
            );

        $this->showSuccess = true;

        $this->reset(['phone', 'name', 'comment']);
    }

    public function updated($field)
    {
        $this->showSuccess = false;
        $this->validateOnly($field, ...$this->rules());
    }

    public function rules(): array
    {
        return [
            [
                'name' => 'required|string|min:3',
                'phone' => 'required|string|regex:/^\+380\d{9}$/',
                'comment' => 'nullable|string',
//                'agree' => 'required|accepted',
            ],
            [
                'phone.regex' => 'Телефон має бути у форматі +380XXXXXXXXX',
            ],
            [
                'name' => 'Імʼя',
                'phone' => 'Телефон',
                'comment' => 'Коментар',
//                'agree' => 'Погоджуюсь на обробку моїх данних',
            ],
        ];
    }
}
