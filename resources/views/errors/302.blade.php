<!DOCTYPE html>
<html >
<head>
	<meta charset="utf-8">
	<meta http-equiv="content-type" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>302 - Pagina Temporariamente Movida</title>
	<link rel="stylesheet" href="{{asset('css/error.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/vendor.min.css')}}"/>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'/>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type='text/javascript'>
			window.onload = function (){
				var historico = document.getElementsByTagName('a');
				for(var index=0;index < historico.length;index++){
						historico[index].addEventListener('click',retornaPage,false);
				 }
				function retornaPage(){
					return history.back();
				}
			};
		</script>
		{{-- script --}}
		<script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};</script>

		<style type="text/css">
			body{
				background-color: rgb(246, 246, 246);
			}
			.layout-simple-page__container {
    			display: block;
    			max-width: 420px;
    			margin: auto;
    			padding: 10% 10px 0px;
			}
		</style>

</head>
<body>
	<div class="layout-simple-page__container">
	<div class="aw-error-panel">
			<h1 class="aw-error-panel__code"> <i class="fa fa-location-arrow"></i> 403</h1>
			<h2 class="aw-error-panel__title">Página Movida Temporariamente</h2>
			<div class="aw-error-panel__description">
					Desculpe, a página que você tentou acessar não foi encontrada ou não existe mais.
					Verifique se a URL está correta ou entre em contato com a gente se precisar de ajuda.
					<br/><br/>
					<a href="#" class="btn  btn-primary">Voltar para a página inicial</a>
			</div>
		</div>
	</div>
		<script src="{{asset('css/javascripts/vendor.min.js')}}"></script>
		<script src="{{asset('css/javascripts/error.min.js')}}"></script>
</body>
</html>
