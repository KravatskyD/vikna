@php
    /**
     * @var $types array
     * @var $images array
     * @var $maxWidth int
     * @var $minWidth int
     * @var $maxHeight int
     * @var $minHeight int
     * @var $price int
     */
@endphp
<div class="row">
    <div class="col-md-7">
        <div class="form-group">
            <select wire:model="selectedType">
                @foreach($types as $value => $label)
                    <option value="{{ $value }}">{{ $label }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="width">Ширина (від {{ $minWidth }} до {{ $maxWidth }})мм</label>
            <input type="number" class="form-control" wire:model.debounce.300ms="width" min="{{ $minWidth }}" max="{{ $maxWidth }}">
        </div>
        <div class="form-group">
            <label for="height">Висота (від {{ $minHeight }} до {{ $maxHeight }})мм</label>
            <input type="number" class="form-control" wire:model.debounce.300ms="height" min="{{ $minHeight }}" max="{{ $maxHeight }}">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" wire:model="glazingFactor" value="{{ App\Http\Livewire\Calculator::FIRST_GLAZING_FACTOR }}">
            <label class="form-check-label" for="glazingFactor">
                СП 4-16-4
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" wire:model="glazingFactor" value="{{ App\Http\Livewire\Calculator::SECOND_GLAZING_FACTOR }}">
            <label class="form-check-label" for="glazingFactor">
                СП 4-16Ар-4і
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" wire:model="glazingFactor" value="{{ App\Http\Livewire\Calculator::THIRD_GLAZING_FACTOR }}">
            <label class="form-check-label" for="glazingFactor">
                СП 4-10Ар-4-10Ар-4і
            </label>
        </div>
        Вартість: {{ $price ? sprintf('%s %s', $price, 'грн') : null }}
    </div>
    <div class="col-md-5">
        <div class="img-box">
            <img src="{{ $images[$this->selectedType] }}" alt="{{ $selectedType }}">
        </div>
    </div>
</div>
