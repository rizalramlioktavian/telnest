@extends('layouts.appBackend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {{-- Menampilkan Alert --}}
                    @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">{{ session()->get('success') }}</div>
                @elseif (session()->has('error'))
                    <div class="alert alert-danger" role="alert">{{ session()->get('error') }}</div>
                @endif

                    <p>You are logged in! Admin</p>{{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js-adminhome')
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
            $(this).remove();
        });
    }, 5000);
</script>
@endpush
