<x-layout>
    <x-container>

        <?php foreach($recipes as $recipe) : ?>
            <article>
                <?= $recipe ?>
            </article>
        <?php endforeach; ?>

        <ul>
            <li><a href="/recipe/1">First Recipe</a></li>
            <li><a href="/recipe/2">Second Recipe</a></li>
            <li><a href="/recipe/3">Third Recipe</a></li>
        </ul>
        
    </x-container>
</x-layout>