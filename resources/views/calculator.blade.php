@extends('layouts.main', ['subPage' => true])
@section('content')
    <section class="contact_section long_section">
        <livewire:calculator/>
    </section>

    <!-- contact section -->
    <section class="contact_section long_section">
        @include('callback-form')
    </section>
    <!-- end contact section -->
@endsection

