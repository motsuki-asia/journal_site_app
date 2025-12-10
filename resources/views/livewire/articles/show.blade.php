<?php

use function Livewire\Volt\state;
use App\Models\Article;

state([
    'article' => fn(Article $article) => $article,
]);

?>

<div>
    <h1>論文詳細</h1>
    <p>タイトル: {{ $article->title }}</p>
    <p>{{ $article->body }}</p>

    <button onclick="location.href='{{ route('articles.index') }}'">一覧へ戻る</button>

</div>
