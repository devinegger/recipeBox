<x-layout>
    <x-container>

        <?php foreach($recipes as $recipe) : ?>
            <article>
                <h1>
                    <a href="/recipe/<?= $recipe->id ?>"><?= $recipe->title ?></a>
                </h1>
                <?= $recipe->excerpt ?>
            </article>
            <hr/>
        <?php endforeach; ?>

    </x-container>
</x-layout>