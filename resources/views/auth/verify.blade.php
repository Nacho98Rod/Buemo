@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verificá tu casilla de email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se te envió un link de verificación a tu email') }}
                        </div>
                    @endif

                    {{ __('Antes de seguir, checkeá tu casilla de email') }}
                    {{ __('Si no recibiste ningún email') }}, <a href="{{ route('verification.resend') }}">{{ __('clickeá acá para recibir otro') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
