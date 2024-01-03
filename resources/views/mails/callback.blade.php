@php
    /**
     * @var $callbackData [string]
     */
@endphp
<div>
    Нове заявка з форми. Від {{ $callbackData['name'] }}. Номер телефону <a href="tel:{{ $callbackData['phone'] }}">{{ $callbackData['phone'] }}</a>

    @if($callbackData['comment'])
        Коммент: {{ $callbackData['comment'] }}
    @endif
</div>
