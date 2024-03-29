@extends('admin.layout')
@section('main')

<div class="right_col" role="main">
	<div class="col-md-12 col-sm-12">
		<div class="x_panel">
			<div class="x_title">
				<h2 style="font-size: 25px">Tambah Data Wisata</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<form action="{{ route('wisata.store') }}" method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data">
				@csrf
					<div class="form-group row">
						<div id="map" class="demo-placeholder w-100 mb-3"></div>
						<div class="w-100">
							<div class="col-md-4 col-sm-4">
    							<button type="button" onclick="locateUser()" class="btn btn-info"><i class="fa fa-crosshairs"></i> Lokasi Saya</button>
							</div>
							<div class="col-md-4 col-sm-4">
								<input id="latitude" name="latitude" type="text" class="col-12 form-control" placeholder="Latitude" readonly>
								@error('latitude')
            				    	<div class="text-danger">{{ $message }}</div>
            					@enderror
							</div>
							<div class="col-md-4 col-sm-4">
								<input id="longitude" name="longitude" type="text" class="col-12 form-control" placeholder="Longitude" readonly>
								@error('longitude')
            				    	<div class="text-danger">{{ $message }}</div>
            					@enderror
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label col-md-3 col-sm-3" for="nama">Nama<span class="required">*</span></label>
						<div class="col-md-9 col-sm-9 ">
							<input id="nama" name="nama" type="text" class="form-control" placeholder="Masukkan Nama Tempat Wisata">
							@error('nama')
            				    <div class="text-danger">{{ $message }}</div>
            				@enderror
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label col-md-3 col-sm-3 ">Jenis Wisata<span class="required">*</span></label>
						<div class="col-md-9 col-sm-9">
							@foreach($jenis as $item)
    						    <div>
    						        <input type="checkbox" name="id_jenis[]" value="{{ $item->id }}">
    						        <label>{{ $item->nama_jenis }}</label>
    						    </div>
    						@endforeach
							@error('id_jenis')
            				    <div class="text-danger">{{ $message }}</div>
            				@enderror
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label col-md-3 col-sm-3 ">Harga<span class="required">*</span></label>
						<div class="col-md-9 col-sm-9">
							<input id="harga" name="harga" type="number" class="form-control" placeholder="Masukkan Harga">
							<div id="formattedHarga"></div>
							@error('harga')
            				    <div class="text-danger">{{ $message }}</div>
            				@enderror
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label col-md-3 col-sm-3 ">Region<span class="required">*</span></label>
						<div class="col-md-9 col-sm-9">
							<select id="id_region" name="id_region" class="select2_group form-control">
								<option value="">Pilih Region</option>
								@foreach($region as $item)
									<option value="{{ $item->id }}" data-region-id="{{ $item->id }}">{{ $item->nama_region }}</option>
								@endforeach
							</select>
							@error('id_region')
            				    <div class="text-danger">{{ $message }}</div>
            				@enderror
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label col-md-3 col-sm-3 ">Kecamatan<span class="required">*</span></label>
						<div class="col-md-9 col-sm-9">
							<select id="id_kecamatan" name="id_kecamatan" class="select2_group form-control">
								<option value="">Pilih Kecamatan</option>
								@foreach($kecamatan as $item)
									<option value="{{ $item->id }}" data-region-id="{{ $item->id_region }}">{{ $item->nama_kecamatan }}</option>
								@endforeach
							</select>
							@error('id_kecamatan')
            				    <div class="text-danger">{{ $message }}</div>
            				@enderror
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label col-md-3 col-sm-3 ">Alamat<span class="required">*</span></label>
						<div class="col-md-9 col-sm-9 ">
							<textarea id="alamat" name="alamat" class="resizable_textarea form-control" placeholder="Masukkan Alamat"></textarea>
							@error('alamat')
            				    <div class="text-danger">{{ $message }}</div>
            				@enderror
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label col-md-3 col-sm-3 ">Deskripsi</label>
						<div class="col-md-9 col-sm-9 ">
							<textarea id="deskripsi" name="deskripsi" class="resizable_textarea form-control" placeholder="Masukkan Deskripsi"></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label col-md-3 col-sm-3 ">Fasilitas</label>
						<div class="col-md-9 col-sm-9">
							<textarea id="fasilitas" name="fasilitas" class="resizable_textarea form-control" placeholder="Masukkan Fasilitas"></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label col-md-3 col-sm-3 ">Social Media</label>
						<div class="col-md-9 col-sm-9">
							<input id="sosmed" name="sosmed" type="text" class="form-control" placeholder="Masukkan Sosial Media">
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label col-md-3 col-sm-3 ">Cover<span class="required">*</span></label>
						<div class="col-md-9 col-sm-9 ">
							<input id="cover" name="cover" type="file" accept="image/*">
							@error('cover')
            				    <div class="text-danger">{{ $message }}</div>
            				@enderror
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label col-md-3 col-sm-3 ">Foto Pilihan</label>
						<div class="col-md-9 col-sm-9 ">
							<input id="foto1" name="foto1" type="file" accept="image/*">
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label col-md-3 col-sm-3 ">Foto Pilihan</label>
						<div class="col-md-9 col-sm-9 ">
							<input id="foto2" name="foto2" type="file" accept="image/*">
						</div>
					</div>
					
					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-md-9 col-sm-9 offset-md-3">
							<a href="{{ route('wisata.view') }}" type="button" class="btn btn-primary">Cancel</a>
							<input type="submit" class="btn btn-success">
						</div>
					</div>
				</form>				
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
	var map = L.map('map').setView([-6.98403, 110.40956], 14);
	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '© OpenStreetMap contributors'
	}).addTo(map);

	var marker;

	map.on('click', function(e) {
		if (marker) {
			map.removeLayer(marker);
		}
		
		marker = L.marker(e.latlng).addTo(map);
		marker.bindPopup("Koordinat: " + e.latlng.toString()).openPopup();

		// Update nilai input dengan data latitude dan longitude
		document.getElementById('latitude').value = e.latlng.lat;
		document.getElementById('longitude').value = e.latlng.lng;
	});

	function locateUser() {
		map.locate({setView: true, maxZoom: 16});

		function onLocationFound(e) {
			var radius = e.accuracy / 2;

			// Hapus marker sebelum menambahkan yang baru
			if (marker) {
				map.removeLayer(marker);
			}

			marker = L.marker(e.latlng).addTo(map)
				.bindPopup("Lokasi Saya").openPopup();

			L.circle(e.latlng, radius).addTo(map);

			map.setView(e.latlng, 16);

			// Update nilai input dengan data latitude dan longitude
			document.getElementById('latitude').value = e.latlng.lat;
    		document.getElementById('longitude').value = e.latlng.lng;
		}

		function onLocationError(e) {
			alert(e.message);
		}

		map.on('locationfound', onLocationFound);
		map.on('locationerror', onLocationError);
	}
</script>

<script>
	// Fungsi untuk format angka menjadi format IDR
	function formatIDR(angka) {
        return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(angka);
    }

    $('#harga').on('input', function () {
        var inputValue = $(this).val();

        $('#formattedHarga').text(formatIDR(inputValue));
    });

	// Pilih Kecamatan berdasarkan Id Region
    $(document).ready(function() {
        $('#id_region').on('change', function() {
            var selectedRegionId = $(this).val();

            $('#id_kecamatan option').each(function() {
                var kecamatanRegionId = $(this).data('region-id');

                if (kecamatanRegionId == selectedRegionId || selectedRegionId == '') {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });

            $('#id_kecamatan option[value=""]').remove();

            $('#id_kecamatan').val($('#id_kecamatan option[data-region-id="' + selectedRegionId + '"]:first').val());
        });
    });
</script>
@endpush