@extends('layouts.app')

@section('content')
<div class="center">
	<div class="row form z-depth-1">
		<h3 style="font-weight: 100">Zaloguj się</h3>
		@if (count($errors) > 0)
		  <ul class="card-panel red lighten-2">
		      @foreach($errors->all() as $error)
		          <li class="white-text text-darken-2">{{ $error }}</li>
		      @endforeach
		  </ul>
		@endif
		<form role="form" method="POST" action="{{ url('/login') }}">
			{{ csrf_field() }}
			<div class="row">
				<div class="input-field col s12">
					<input id="email" name="email" type="text" class="validate">
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
				<div class="input-field col s12 center">
				    <button type="submit" class="btn-large waves-effect waves-light blue darken-4">
				        <i class="fa fa-btn fa-sign-in"></i>Zaloguj się
				    </button>
				</div>
			</div>
			<div class="row">
				<div class="col s12 center">
					<a href="{{ url('/password/reset') }}">Zapomniałeś hasło?</a>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection
