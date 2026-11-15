<x-layout>
    <div class="container">


        <h1 class="text-center my-5">Tutti gli articoli</h1>
        <div class="row">
            @foreach ($articles as $article)
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <x-card :article="$article"></x-card>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>