@extends('components.layouts.app')
@section('pages')
<div class="d-flex flex-column h-100 p-0 m-0">
    <div class="h-100 p-0 m-0">
        @livewire('partials.components.system-description')
    </div>
    <div>
        @livewire('partials.footer')
    </div>
</div>
@endsection