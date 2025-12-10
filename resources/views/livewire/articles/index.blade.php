<?php

use function Livewire\Volt\state;
use App\Models\Article;

state(['articles' => fn() => Article::all()]);

?>

<div>
    <h1>論文一覧</h1>
    @foreach ($articles as $article)
        <li>
            <a href="{{ route('articles.show', $article) }}">
                {{ $article->title }}
            </a>
            <br><br>
        </li>
    @endforeach
    <button onclick="location.href='{{ route('articles.create') }}'">
        新規論文投稿
    </button>
</div>
