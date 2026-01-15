@props(['items' => []])

<nav class="breadcrumb" aria-label="Breadcrumb">
    <div class="breadcrumb-item breadcrumb-home">
        <a href="{{ route('dashboard') }}" title="Dashboard">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
            </svg>
        </a>
    </div>
    
    @foreach($items as $item)
    <span class="breadcrumb-separator">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
    </span>
    
    @if($loop->last)
    <span class="breadcrumb-item active">{{ $item['label'] }}</span>
    @else
    <div class="breadcrumb-item">
        <a href="{{ $item['url'] }}">{{ $item['label'] }}</a>
    </div>
    @endif
    @endforeach
</nav>
