<x-layout>
    <x-container> 
        <article class="max-w-2xl m-auto">
            <h1><?= $recipe->title ?></h1>
            <?= $recipe->body ?>
        </article>
        <a href="/">Back to Main</a>
    </x-container>
</x-layout>