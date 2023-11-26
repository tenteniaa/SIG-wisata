@extends('admin.layout')
 
@section('main')
    <div class="right_col" role="main">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Daftar Tempat Wisata</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('wisata.create') }}"> Buat Data Baru</a>
            </div>
        </div>
    
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <div class="row content">
        <div class="col-md-12 col-sm-12">
            <div class="x_panel" data-aos="fade-up">
                <div class="x_title">
                  <h2>Daftar Tempat Wisata</h2>
                  <div class="nav navbar-right panel_toolbox">
                    <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="table-responsive">
                        <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                            <thead>
                                <tr>
                                    <th class="popover-icon">Nama</th>
                                    <th class="popover-icon">Jenis</th>
                                    <th class="popover-icon">Harga</th>
                                    <th class="popover-icon">Region</th>
                                    <th class="popover-icon">Kecamatan</th>
                                    <th class="popover-icon">Alamat</th>
                                    <th class="popover-icon">Deskripsi</th>
                                    <th class="popover-icon">Fasilitas</th>
                                    <th class="popover-icon">Sosmed</th>
                                    <th class="popover-icon">Kontak</th>
                                    <th class="popover-icon">Latitude</th>
                                    <th class="popover-icon">Longtitude</th>
                                    <th class="popover-icon">Cover</th>
                                    <th class="popover-icon">Foto </th>
                                    <th class="popover-icon">Foto 2</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($wisata as $item)
                                <tr>
                                    <td class="table-name">{{ $item->nama }}</td>
                                    <td class="table-col popover-icon">
                                      @foreach($item->jenis_wisata as $me)
                                      {{ $me->jenis->nama_jenis }}@if (!$loop->last), @endif
                                      @endforeach
                                    </td>
                                    <td class="table-act popover-icon">Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                                    <td class="table-address popover-icon">{{ $item->id_region }}</td>
                                    <td class="table-address popover-icon">{{ $item->id_kecamatan }}</td>
                                    <td class="table-address popover-icon">{{ $item->alamat }}</td>
                                    <td class="table-address popover-icon">{{ $item->deskripsi }}</td>
                                    <td class="table-address popover-icon">{{ $item->fasilitas }}</td>
                                    <td class="table-address popover-icon">{{ $item->sosmed }}</td>
                                    <td class="table-address popover-icon">{{ $item->contact }}</td>
                                    <td class="table-address popover-icon">{{ $item->latitude }}</td>
                                    <td class="table-address popover-icon">{{ $item->longtitude }}</td>
                                    <td class="table-address popover-icon">{{ $item->cover }}</td>
                                    <td class="table-address popover-icon">{{ $item->foto1 }}</td>
                                    <td class="table-address popover-icon">{{ $item->foto2 }}</td>
                                    
                                    <td class="table-act">
                                      <a href="{{route('wisata.detail', $item->id)}}" class="btn btn-rounded btn-primary">Detail</a>
                                      <a href="{{route('wisata.edit', $item->id)}}" class="btn btn-rounded btn-primary">Edit</a>
                                      <a href="{{route('wisata.destroy', $item->id)}}" class="btn btn-rounded btn-primary">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    {{-- <div class="row text-center">
        {!! $wisata->links() !!}
    </div> --}}
      
@endsection