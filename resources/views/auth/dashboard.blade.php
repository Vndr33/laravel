<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> Dashbord</title> 

        <link rel="stylesheet" href="{{asset("css/style.css")}}">
    </head>

	<body>
		
		<div class="menu" class="card" >
			<h1 class="page_title"> Articole </h1>
			
			<a class="buton_open_add_page" href="{{route("openAddArticlePage")}}" >Add Article</a>
			
			<form class="form_buton_logout" action="{{ url('logout') }}" method="POST"> @csrf
				<button class="buton_logout"  type="submit"> Logout </button>
			</form>

			
		</div> 

		
		<div class="afiseaza_articole">
			@if ($role === "admin")
				@foreach ($articles as $article)

					@if ($article['validate'] == 1) 

						

					@else 
						<div class="aranjare_articol nevalid" >
							<h2 class="autor">{{$article['author']}}</h2>
							<h2 class="title">{{$article['title']}}</h2>
							<h2 class = "continut">{{$article['description']}}</h2>
							<label class="data"> 
								Creation date: {{$article['creationdate']}}
							</label>
							<form class="form_valideaza" action="{{ url('valideaza') }}" 
								method="POST">@csrf
								<input 
									type="hidden" 
									name="articolId" 
									value="{{$article['id']}}">
								
								<button class= "buton_valideaza" type="submit"> Valideaza </button> 
							</form>
						</div>
					@endif
				@endforeach
			@else

				<div class="div_categorie" > Artistic </div>
					@foreach ($articles as $article)
						@if ($article['validate'] == 1) 
							@if ($article['categorie'] === 'cat1')

								<div class="aranjare_articol">
									
										<h2 class="title">
											{{$article['title']}}  
										</h2>

										<h3 class="autor">
											{{$article['author']}}
										</h3>

										<h4 class = "continut">
											{{$article['description']}}
										</h4>

										<label class="data"> 
											Creation date: {{$article['creationdate']}}
										</label>
									
								</div>
								
							@endif
						@endif
					@endforeach

				<div class="div_categorie">Tehnic </div>
					@foreach ($articles as $article)
						@if ($article['validate'] == 1) 
							@if ($article['categorie'] == 'cat2')

								<div class="aranjare_articol" >
									<h2 class="title">{{$article['title']}}  </h2>
									<h2 class="autor">{{$article['author']}}</h2>
									<h2 class = "continut">{{$article['description']}}</h2>
									<label class="data">Creation date: {{$article['creationdate']}}</label>
								</div>

							@endif
						@endif
					@endforeach

            	<div class="div_categorie">Moda</div>
					@foreach ($articles as $article)
						@if ($article['validate'] == 1) 
							@if ($article['categorie'] == 'cat3')

								<div class="aranjare_articol">
									<h2 class="title">{{$article['title']}}  </h2>
									<h2 class="autor">{{$article['author']}}</h2>
									<h2 class = "continut">{{$article['description']}}</h2>
									<label class="data">Creation date: {{$article['creationdate']}}</label>
								</div>

							@endif
						@endif
					@endforeach

        		<div class="div_categorie">Science</div>
				@foreach ($articles as $article)
					@if ($article['validate'] == 1) 
						@if ($article['categorie'] == 'cat4')

							<div class="aranjare_articol">
								<h2 class="title">{{$article['title']}}  </h2>
								<h2 class="autor">{{$article['author']}}</h2>
								<h2 class = "continut">{{$article['description']}}</h2>
								<h2 label class="data">Creation date: {{$article['creationdate']}}</label>
							</div>

						@endif
					@endif
				@endforeach
        	@endif
		</div>
	</body>

</html>
