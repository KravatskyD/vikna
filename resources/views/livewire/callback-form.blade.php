<div>
    @if($this->showSuccess)
        <h4 class="text-success">Дякуємо за звернення! Ми зв'яжемося із вами у найближчий час</h4>
    @endif

    <form wire:submit.prevent="submit">
        @honeypot
        <div>
            <input type="text" placeholder="Імʼя" wire:model.lazy="name"/>
            @error('name')<span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div>
            <input type="text" placeholder="Номер телефону" wire:model.lazy="phone"/>
            @error('phone')<span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div>
            <input type="text" class="message-box" placeholder="Коментар" wire:model.lazy="comment" />
            @error('comment')<span class="text-danger">{{ $message }}</span>@enderror
        </div>
        {{--<div>
            <input type="checkbox" id="agree" wire:model="agree" />
            <label class="form-check-label" for="agree">Даю згоду на обробку данних</label>
        </div>--}}
        <div class="btn_box">
            <button>Передзвоніть мені</button>
        </div>
    </form>
</div>
