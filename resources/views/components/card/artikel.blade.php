@props([
    'title' => 'Title',
    'desc' => 'Description',
    'img' => 'assets/img/legal-article.png',
])

<div class="">
    <a href="#">
        <img class="rounded-lg" src="{{ asset($img) }}" alt="" />
    </a>
</div>
<div class="px-6 pb-6 pt-3">
    <a href="#">
        <h5
            class="mb-1 text-xl font-bold line-clamp-1 overflow-hidden overflow-ellipsis text-primary dark:text-white">
            {{ $title }}</h5>
    </a>
    <p class="mb-3 font-normal text-secondary line-clamp-2 overflow-hidden overflow-ellipsis dark:text-gray-400">
        {{ $desc }}</p>
</div>
