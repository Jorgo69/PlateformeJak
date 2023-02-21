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
					<h2 class="title-head"> Mots de Passe <span> Oublié ?</span></h2>
					<p> Connectez vous avec vos <a href="{{ route('connexion') }}"> Identifiants </a></p>
				</div>	
				<form class="contact-bx">
					<div class="row placeani">
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label> Votre Email </label>
									<input name="dzName" type="email" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12 m-b30">
							<button name="submit" type="submit" value="Submit" class="btn button-md"> Soumettre</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
    
@endsection