@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vérification de votre adresse email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un lieu de vérification a été envoyé sur votre email.') }}
                        </div>
                    @endif

                    {{ __('Avant de continuer vérifiez que vous avez bien reçu le lien.') }}
                    {{ __('Si vous n'avez pas reçu le lien) }}, <a href="{{ route('verification.resend') }}">{{ __('Cliquez ici pour en générer un nouveau') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
