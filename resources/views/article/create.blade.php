<x-layout>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-center mb-4">Crea un articolo</h1>
                <form class="p-4 glass-form" action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if (session('success'))
                    <div class="alert glass-alert alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if ($errors->any())
                    <div class="glass-error mb-3 p-3">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input name="title" type="text" class="form-control" id="title" value="{{ old('title') }}">
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Autore</label>
                        <input name="author" type="text" class="form-control" id="author" value="{{ old('author') }}">
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Testo</label>
                        <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{ old('body') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci un immagine</label>
                        <input name="img" type="file" class="form-control" id="img">
                    </div>
                    <button type="submit" class="btn glass-btn">Crea articolo</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>