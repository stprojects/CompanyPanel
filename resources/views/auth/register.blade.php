@extends('layouts.app')

@section('content')
<div class="center">
  <div class="row form z-depth-1">
    <h3 style="font-weight: 100">Zarejestruj się</h3>
    @if (count($errors) > 0)
		<ul class="card-panel red lighten-2">
			@foreach($errors->all() as $error)
				<li class="white-text text-darken-2">{{ $error }}</li>
			@endforeach
		</ul>
    @endif
     <form role="form" method="POST" action="{{ url('/register') }}">
        {!! csrf_field() !!}
        <div class="row">
          <div class="input-field col s12">
            <input id="name" type="text" name="name">
            <label for="name">Imię</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" name="email">
            <label for="email">Adres e-mail</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="password" type="password" name="password">
            <label for="password">Hasło</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="password_confirmation" type="password" name="password_confirmation">
            <label for="password_confirmation">Potwierdź hasło</label>
          </div>
        </div>
        <div class="row">
            <div class="input-field col s12 center">
                <button type="submit" class="btn-large waves-effect waves-light blue darken-4">
                    <i class="fa fa-btn fa-user"></i>Zarejestruj się
                </button>
            </div>
          </div>
     </form>
  </div>
</div>
@endsection
