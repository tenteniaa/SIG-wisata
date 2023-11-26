@extends('admin.layout')
 
@section('main')
    <div class="right_col" role="main">
        
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
				<div class="col-md-12 col-sm-12 ">
					<div class="x_panel">
						<div class="x_title">
							<h2>Edit Data Wisata</h2>
							<ul class="nav navbar-right panel_toolbox">
								<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
								</li>
								<li><a class="close-link"><i class="fa fa-close"></i></a>
								</li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
							<br />

							<form action="{{ route('wisata.update', $wisata->id) }}" method="POST">
							@csrf
                            @method('PUT')
							<form class="form-horizontal form-label-left">
								<div class="form-group row ">
									<label class="control-label col-md-3 col-sm-3 ">Nama<span class="required">*</span></label>
									<div class="col-md-9 col-sm-9 ">
										<input type="varchar" class="form-control" placeholder="Masukkan Nama Tempat Wisata">
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3 col-sm-3 ">Jenis Wisata<span class="required">*</span></label>
									<div class="col-md-9 col-sm-9 ">
									<div class="radio">
										<label>
											<input type="checkbox" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> Alam
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="checkbox" value="option2" id="optionsRadios2" name="optionsRadios"> Sejarah/Budaya
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="checkbox" value="option2" id="optionsRadios2" name="optionsRadios"> Hiburan
										</label>
									</div>
								</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3 col-sm-3 ">Harga<span class="required">*</span></label>
									<div class="col-md-9 col-sm-9 ">
										<input type="biginteger" class="form-control" placeholder="Masukkan Harga">
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3 col-sm-3 ">Region<span class="required">*</span></label></label>
									<div class="col-md-9 col-sm-9 ">
										<select class="select2_single form-control" tabindex="-1">
											
											<option value="Kota">Kota Semarang</option>
											<option value="Kab">Kabupaten Semarang</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3 col-sm-3 ">Kecamatan<span class="required">*</span></label></label>
									<div class="col-md-9 col-sm-9 ">
										<select class="select2_group form-control">
											<optgroup label="Kecamatan di Kota Semarang">
												<option value="ST">Semarang Tengah</option>
												<option value="SU">Semarang Utara</option>
												<option value="SS">Semarang Selatan</option>
												<option value="SB">Semarang Barat</option>
												<option value="SR">Semarang Timur</option>
											</optgroup>
											<optgroup label="Kecamatan di Kabupaten Semarang">
												<option value="GT">Getasan</option>
												<option value="TG">Tengaran</option>
												<option value="SS">Susukan</option>
												<option value="SR">Suruh</option>
												<option value="PB">Pabelan</option>
												<option value="TT">Tuntang</option>
												<option value="BB">Banyubiru</option>
												<option value="JB">Jambu</option>
												<option value="SW">Sumowono</option>
												<option value="AA">Ambarawa</option>
												<option value="BC">Bancak</option>
												<option value="KL">Kaliwungu</option>
												<option value="UB">Ungaran Barat</option>
												<option value="UT">Ungaran Timur</option>
											</optgroup>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3 col-sm-3 ">Alamat<span class="required">*</span></label>
									<div class="col-md-9 col-sm-9 ">
										<textarea class="resizable_textarea form-control" placeholder="Masukkan Alamat"></textarea>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3 col-sm-3 ">Deskripsi</label>
									<div class="col-md-9 col-sm-9 ">
										<textarea class="resizable_textarea form-control" placeholder="Masukkan Deskripsi"></textarea>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3 col-sm-3 ">Fasilitas</label>
									<div class="col-md-9 col-sm-9 ">
										<input type="varchar" textarea class="form-control" rows="3" placeholder="Masukkan Fasilitas"></textarea>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3 col-sm-3 ">Social Media</label>
									<div class="col-md-9 col-sm-9 ">
										<input type="text" textarea class="form-control" rows="3" placeholder="Masukkan Sosial Media"></textarea>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3 col-sm-3 ">Cover</label>
									<form method="post" enctype="multipart/form-data" action="uploadproses.php">
									<div class="col-md-9 col-sm-9 ">
									<Input type="file" name="gambar">
									<input type="submit" value="upload">
									</div>
								</form>
								</div>
								<div class="ln_solid"></div>
								<div class="form-group">
									<div class="col-md-9 col-sm-9  offset-md-3">
										<button type="button" class="btn btn-primary">Cancel</button>
										<button type="reset" class="btn btn-primary">Reset</button>
										<input type="submit" class="btn btn-success"></button>
									</div>
								</div>

							</form>
							</form>
						</div>
					</div>
				</div>


			</div>

	
		</div>
	</form>
	<!-- /page content -->

@endsection