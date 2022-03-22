@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="mb-5 mt-5 text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}     <!--__serve per la lingua-->
                    {{ Auth::user()->name }}          <!--prendere un dato dall'user-->
                </div>
                <a class="text-center" href="{{route("admin.posts.index")}}"><button type="button" >Esplora!</button></a>
            </div>
        </div>
    </div>
</div>
@endsection
