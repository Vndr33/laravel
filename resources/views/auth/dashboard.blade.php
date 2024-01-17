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
			
			<form class="form_buton_logout" action="{{ url('logout') }}" method="POST"> @csrf
				<button class="buton_logout"  type="submit"> Logout </button>
			</form>
		</div> 

		<div class="adauga_articole">

			<form class="form_adauga_articol" action="{{ url('createArticle') }}" method="POST">
				@csrf
				<label class="label_form" for="title">Title:</label>
				<input class="input_form" type="text" name="title" id="title" required>

				<label class="label_form" for="description">Description:</label>
				<textarea class="input_form" name="description" id="description" required></textarea>

				<label class="label_form" for="author">Author:</label>
				<input class="input_form" type="text" name="author" id="author" required>

				<label class="label_form" for="category">Category:</label>
				<input class="input_form" type="text" name="category" id="category" required>

				<button class="submit_buton" type="submit">Submit</button>
			</form>

			
		</div>

		<div class="afiseaza_articole">
			@if ($role === "admin")
				@foreach ($articles as $article)

					@if ($article['validate'] == 1) 
						<div style="border: thin solid green">
							<h2>{{$article['author']}}</h2>
							<h2>{{$article['title']}}</h2>
							<h2>{{$article['description']}}</h2>
						</div>
					@else 
						<div style="border: thin solid red">
						<h2>{{$article['author']}}</h2>
						<h2>{{$article['title']}}</h2>
						<h2>{{$article['description']}}</h2>
						<form action="{{ url('valideaza') }}" method="POST">@csrf<input type="hidden" name="articolId" value="{{$article['id']}}"><button style="display: block; margin-left: auto; margin-right: 5%;" type="submit"> Valideaza </button> </form>
						</div>
					@endif
				@endforeach
			@else
				<div style="font-size:300%;">Artistic </div>
					@foreach ($articles as $article)
						@if ($article['validate'] == 1) 
							@if ($article['categorie'] === 'cat1')
							<div style="border: thin solid black">
							<h2 style="font-size:300%;">{{$article['title']}}  </h2>
							<h2 style="font-size:130%; color:grey;">{{$article['author']}}</h2>
							<h2>{{$article['description']}}</h2>
							<h2 style="font-size:30%; color:grey;">Creation date: {{$article['creationdate']}}</h2>
								</div>
							@endif
						@endif
					@endforeach
				<div style="font-size:300%;">Tehnic </div>
					@foreach ($articles as $article)
						@if ($article['validate'] == 1) 
							@if ($article['categorie'] == 'cat2')
							<div style="border: thin solid black">
							<h2 style="font-size:300%;">{{$article['title']}}  </h2>
							<h2 style="font-size:130%; color:grey;">{{$article['author']}}</h2>
							<h2>{{$article['description']}}</h2>
							<h2 style="font-size:30%; color:grey;">Creation date: {{$article['creationdate']}}</h2>
								</div>
							@endif
						@endif
					@endforeach
            	<div style="font-size:300%;">Moda</div>
					@foreach ($articles as $article)
						@if ($article['validate'] == 1) 
							@if ($article['categorie'] == 'cat3')
							<div style="border: thin solid black">
							<h2 style="font-size:300%;">{{$article['title']}}  </h2>
							<h2 style="font-size:130%; color:grey;">{{$article['author']}}</h2>
							<h2>{{$article['description']}}</h2>
							<h2 style="font-size:30%; color:grey;">Creation date: {{$article['creationdate']}}</h2>
								</div>
							@endif
						@endif
					@endforeach
        		<div style="font-size:300%;">Science</div>
				@foreach ($articles as $article)
					@if ($article['validate'] == 1) 
						@if ($article['categorie'] == 'cat4')
						<div style="border: thin solid black">
						<h2 style="font-size:300%;">{{$article['title']}}  </h2>
						<h2 style="font-size:130%; color:grey;">{{$article['author']}}</h2>
						<h2>{{$article['description']}}</h2>
						<h2 style="font-size:30%; color:grey;">Creation date: {{$article['creationdate']}}</h2>
							</div>
						@endif
					@endif
				@endforeach
        	@endif
		</div>
	</body>

</html>
