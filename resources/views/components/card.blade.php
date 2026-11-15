<div class="card h-100 glass overflow-hidden">
    @if ($article->img)
    <img src="{{ Storage::disk('public')->url($article->img) }}" class="card-img-top card-cover" alt="{{ $article->title }}">
    @else
    <div class="card-cover card-placeholder d-flex align-items-center justify-content-center">
        <span>Nessuna immagine</span>
    </div>
    @endif
    
    <div class="card-body">
        <h5 class="card-title">{{ $article->title }}</h5>
        <h6 class="card-subtitle mb-2 text-white-50">di {{ $article->author }}</h6>
        <p class="card-text">{{ $article->body }}</p>
    </div>
</div>