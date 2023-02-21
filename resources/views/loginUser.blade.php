@extends('Layouts.headerC')
@section('connexion')

<div class="page-wraper">
	<div id="loading-icon-bx"></div>
	<div class="account-form">
		<div class="account-head" style="background-image:url(assets/images//perso/Vegeta.jpg);">
			<a href="index.html"><img src="assets/images/perso/logoJakS.png" width="90" alt=""></a>
		</div>
		<div class="account-form-inner">
			<div class="account-container">
				<div class="heading-bx left">
					<h2 class="title-head"> Connectez vous <span> à votre Compte</span></h2>
					<p> Vous n'avez pas de Compte ? <a href="{{ route('inscription')}}"> Créez en un Ici </a></p>
				</div>	
				<form method="POST" action="{{ route('login') }}">
					@csrf

					<div class="row mb-3">
						<label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

						<div class="col-md-6">
							<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

							@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>

					<div class="row mb-3">
						<label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

						<div class="col-md-6">
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

							@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>

					<div class="row mb-3">
						<div class="col-md-6 offset-md-4">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

								<label class="form-check-label" for="remember">
									{{ __('Remember Me') }}
								</label>
							</div>
						</div>
					</div>

					<div class="row mb-0">
						<div class="col-md-8 offset-md-4">
							<button type="submit" class="btn btn-primary">
								{{ __('Login') }}
							</button> <br> <br>

							@if (Route::has('password'))
								<a class="link" href="{{ route('password') }}">
									{{ __(' Mots de Passe Oublié ?') }}
								</a>
							@endif
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection
