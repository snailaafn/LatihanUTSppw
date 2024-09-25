@extends('partial.layout')

@section('content')
    <div class="tenor-gif-embed" data-postid="6805644913242328211" data-share-method="host" data-aspect-ratio="1"
        data-width="100%"><a
            href="https://tenor.com/view/alumae-alumaeyy-gubby-gubby-mewing-meme-gif-6805644913242328211">Alumae Alumaeyy
            GIF</a>from <a href="https://tenor.com/search/alumae-gifs">Alumae GIFs</a></div>
    <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
@endsection

<style>
    .search-bar {
        display: flex;
        border: 1px solid #ccc;
        border-radius: 4px;
        overflow: hidden;
    }

    .search-bar input {
        padding: 10px;
        border: none;
        outline: none;
        width: 100%;
    }

    .search-bar button {
        padding: 10px;
        padding-left: 50px;
        padding-right: 50px;
        border: none;
        background-color: #333;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .search-bar button:hover {
        background-color: #555;
    }
</style>
