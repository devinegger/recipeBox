<x-layout>
    <x-container> 
        
        <article>
            <h1>{{$recipe->title}}</h1>
            {!!$recipe->body!!}
        </article>
        <a class="mt-4 ml-2 block" href="/">Back to Main</a>
            
    </x-container>
</x-layout>