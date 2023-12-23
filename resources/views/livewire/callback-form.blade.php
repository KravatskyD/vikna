<div>
    <form wire:submit="submit">
        <div>
            <input type="text" placeholder="Імʼя" wire:model="name"/>
            @error('name')<span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div>
            <input type="text" placeholder="Номер телефону" wire:model="phone"/>
        </div>
        <div>
            <input type="text" class="message-box" placeholder="Коментар" wire:model="comment" />
        </div>
        {{--<div>
            <input type="checkbox" id="agree" wire:model="agree" />
            <label class="form-check-label" for="agree">Даю згоду на обробку данних</label>
        </div>--}}
        <div class="btn_box">
            <button>Передзвоніть мені</button>
        </div>
        @honeypot
{{--        <div class="form-group">--}}
{{--            <label for="exampleInputEmail1">Телефон</label>--}}
{{--            <input class="form-control" wire:model="phone">--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <label for="exampleInputPassword1">Коментар</label>--}}
{{--            <input wire:model="comment">--}}
{{--        </div>--}}
{{--        <div class="form-group form-check">--}}
{{--            <input type="checkbox" class="form-check-input" wire:model="agree">--}}
{{--            <label class="form-check-label" for="exampleCheck1">Даю згоду на обробку данних</label>--}}
{{--        </div>--}}
{{--        <button type="submit" class="btn btn-primary">Передзвоніть мені</button>--}}
    </form>
</div>
