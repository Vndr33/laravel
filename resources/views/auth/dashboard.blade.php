<div class="card">
    <form action="{{ url('logout') }}" method="POST"> @csrf
        <button style="display: block; margin-left: auto; margin-right: 5%;" type="submit"> Logout </button>
    </form>
    <h1 style="text-align:center">Articles Webpage</h1>
    <h1>Create Article</h1>

</div>
    <form action="{{ url('createArticle') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>

        <label for="description">Description:</label>
        <textarea name="description" id="description" required></textarea>

        <label for="author">Author:</label>
        <input type="text" name="author" id="author" required>

        <label for="category">Category:</label>
        <input type="text" name="category" id="category" required>

        <button type="submit">Submit</button>
    </form>

        @if ($role === "admin")
            @foreach ($articles as $article)

                @if ($article['validate'] === 1) 
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
                @if ($article['validate'] === 1) 
                    @if ($article['category'] === 'cat1')
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
                @if ($article['validate'] === 1) 
                    @if ($article['category'] === 'cat2')
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
                @if ($article['validate'] === 1) 
                    @if ($article['category'] === 'cat3')
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
                @if ($article['validate'] === 1) 
                    @if ($article['category'] === 'cat4')
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