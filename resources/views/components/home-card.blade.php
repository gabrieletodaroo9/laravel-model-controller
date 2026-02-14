<a href="{{ route('detail', $movie->id) }}">
    <div class="card h-100 p-4 bg-white">
        <h4 class="fw-bold mb-1">{{ $movie->title }}</h4>
        <small class="text-muted d-block mb-4">{{ $movie->original_title }}</small>

        <p class="mb-4">
            <span class="fw-bold">Nationality: </span> {{ $movie->nationality }}
        </p>

        <div class="mt-auto pt-2">
            <div class="text-warning small">
                @for ($i = 1; $i <= 10; $i++)
                    @if($i <= $getStarsFill())
                        <i class="bi bi-star-fill"></i>
                    @else
                        <i class="bi bi-star"></i>
                    @endif
                @endfor
                <span class="text-secondary ms-1">({{ $movie->vote }})</span>
            </div>
        </div>
    </div>
</a>