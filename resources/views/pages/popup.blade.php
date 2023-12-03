<!-- Template CSS File -->
<link href="{{ asset('assets/css/popup.css') }}" rel="stylesheet">

<div class="popup_content">
    <div class="popup_title">
        <p>{{ $wisata->nama }}</p>
    </div>
    <div class="popup_desc">
        <ul>
            <li>Harga : Rp {{ number_format($wisata->harga, 0, ',', '.') }}</li>
            <li>{{ $wisata->region->nama_region }}, Jawa Tengah</li>
        </ul>
        @if(request()->is('/') || request()->is('dashboard'))
            <a href="{{ route('wisata.detail', $wisata->id) }}" class="more_info"><i class="bi bi-link"></i> More Info</a>
        @else
            {{-- @if($wisata->sosmed)
                <a href="{{ $wisata->sosmed }}" target="_blank" class="more_info"><i class="bi bi-link"></i> Kunjungi</a>
            @endif --}}
            <a href="#" class="more_info" onclick="navigateToCurrentLocation()"><i class="bi bi-geo-alt"></i> Navigasi</a>
        @endif
    </div>
</div>