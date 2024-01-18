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
			<h1 class="page_title"> Add your own article </h1>
			
			
			
			<form class="form_buton_logout" action="{{ url('logout') }}" method="POST"> @csrf
				<button class="buton_logout"  type="submit"> Logout </button>
			</form>			
		</div> 

        <div class="adauga_articole">

			<form class="form_adauga_articol" action="{{ url('createArticle') }}" method="POST">
				@csrf
				<label class="label_form" for="title">Title:</label>
				<input class="input_form" type="text" name="title" id="title" required>

				<label class="label_form" for="description">Content:</label>
				<textarea class="input_form" name="description" id="description" required></textarea>

				<label class="label_form" for="author">Author:</label>
				<input class="input_form" type="text" name="author" id="author" required>

				<label class="label_form" for="category">Category:</label>
				<input class="input_form" type="text" name="category" id="category" required>

				<button class="submit_buton" type="submit">Add Article</button>
			</form>

			
		</div>

    </body>

</html>