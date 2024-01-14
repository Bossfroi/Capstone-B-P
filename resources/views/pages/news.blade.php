
@include('include/navigation')

<div class="bg-gray-100 min-h-screen py-8 m-28">
    <div class="container mx-auto p-4 m-28">
        <h1 class="text-3xl font-bold mb-6 text-center">News Headlines</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 m-28">
            @foreach($news as $index => $article)
                <div class="bg-white p-4 m-28 rounded shadow transition transform hover:scale-105 hover:shadow-lg ">
                    @if($article['urlToImage'])
                        <img src="{{ $article['urlToImage'] }}" alt="{{ $article['title'] }}" class="mb-4 " style="width: 750px; height:450px; margin-left:120px;">
                    @endif
                    <h2 class="text-lg font-semibold mb-2">{{ $article['title'] }}</h2>
                    <p class="text-gray-700">{{ $article['description'] }}</p>
                    <a href="{{ $article['url'] }}" target="_blank" rel="noopener noreferrer" class="text-blue-500 mt-4 inline-block hover:underline">
                        Read more
                    </a>
                </div>
                <hr>
            @endforeach
    
        </div>
    </div>
    @include('include/footer')
</div>
