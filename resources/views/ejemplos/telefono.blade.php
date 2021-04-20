@extends('layout.app')
@section('content')


<div class="container">
    <h1 class="h3 mb-4 text-gray-800">Input teléfono</h1>

    <div class="row">
        <div class="col-5 mx-auto">
            <input id="phone" class="form-control" name="phone" type="tel" placeholder="9 5555 5555" />
        </div>
    </div>
</div>


@endsection

@push('javascript')

<link rel="stylesheet" href="{{ asset('css/intl-phone-input.css') }}"/>
<script src="{{ asset('js/components/intl-phone-input.js') }}"></script>

@endpush
