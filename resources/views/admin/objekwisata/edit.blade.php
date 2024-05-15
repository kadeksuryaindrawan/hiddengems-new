@extends('layouts.dashboard')

@section('content')

@php
    $page = 'objekwisata';
    $title = 'Objek Wisata';
@endphp

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-12 order-md-1 order-last mb-3">
                @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{$error}}
                        </div>
                        @endforeach
                <h3>Edit Objek Wisata</h3>
            </div>
        </div>
    </div>


    <!-- Basic Vertical form layout section start -->
    <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form Edit Objek Wisata</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{route('objekwisata.update',$data->id)}}" method="POST" class="form form-vertical" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="email-id-vertical">Pilih Jenis Wisata</label>
                                                <select name="kategori_id" id="" class="form-control">
                                                    <option value="">Pilih Jenis Wisata</option>
                                                    @foreach ($kategoris as $items)
                                                        <option value="{{ $items->id }}" {{ ( $items->id == $data->kategori_id) ? 'selected' : '' }}>{{ $items->nama_kategori }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="email-id-vertical">Nama Objek Wisata</label>
                                                <input type="text" id="email-id-vertical" class="form-control"
                                                    name="nama" placeholder="Nama Objek Wisata" value="{{ $data->nama }}" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="harga_tiket">Harga Tiket</label>
                                                <input type="number" id="harga_tiket" class="form-control"
                                                    name="harga_tiket" value="{{ $data->harga_tiket }}" placeholder="Harga Tiket" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="alamat" class="form-label">Alamat</label>
                                                <textarea class="form-control" id="alamat" rows="3" name="alamat" required>{{ $data->alamat }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="longitude">Longitude</label>
                                                <input type="text" id="longitude" class="form-control"
                                                    name="longitude" placeholder="Longitude" value="{{ $data->longitude }}" readonly required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="latitude">Latitude</label>
                                                <input type="text" id="latitude" class="form-control"
                                                    name="latitude" placeholder="Latitude" value="{{ $data->latitude }}" readonly required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-5">
                                            <div id="map" style="width: 100%;height: 500px;border-radius: 10px;"></div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                                <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi" required>{{ $data->deskripsi }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="fasilitas" class="form-label">Fasilitas</label>
                                                <textarea class="form-control" id="fasilitas" rows="3" name="fasilitas" required>{{ $data->fasilitas }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="sosial_media" class="form-label">Sosial Media</label>
                                                <textarea class="form-control" id="sosial_media" rows="3" name="sosial_media" required>{{ $data->sosial_media }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="kontak">Kontak</label>
                                                <input type="text" id="kontak" class="form-control"
                                                    name="kontak" placeholder="Kontak" value="{{ $data->kontak }}" required>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <button type="submit" class="btn btn-primary me-1 my-2 w-100">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <a href="{{ route('objekwisata.index') }}" class="d-flex justify-content-center w-full">
                                    <button class="btn btn-secondary w-100 my-1">Kembali</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic Vertical form layout section end -->
</div>

    <script>

        let mapOptions = {
            center:[{{ $data->latitude }}, {{ $data->longitude }}],
            zoom:13
        }

        let map = new L.map('map' , mapOptions);

        let layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
        map.addLayer(layer);
        // let geocoder = L.Control.geocoder().addTo(map);

        var latlong = L.marker([{{ $data->latitude }}, {{ $data->longitude }}]).addTo(map);

        let marker = null;

        function setMarker(lat, lng) {
            if (marker !== null) {
                map.removeLayer(marker);
            }
            marker = L.marker([lat, lng]).addTo(map);
            document.getElementById('latitude').value = lat;
            document.getElementById('longitude').value = lng;
        }

        map.on('click', (event) => {
            map.removeLayer(latlong);
            // document.querySelector('.leaflet-control-geocoder-form input').value = '';
            setMarker(event.latlng.lat, event.latlng.lng);
        });

        L.Control.geocoder({
        defaultMarkGeocode: false
        }).on('markgeocode', function (event) {
            let latlng = event.geocode.center;
            map.removeLayer(latlong);
            setMarker(latlng.lat, latlng.lng);
        }).addTo(map);
    </script>

@endsection
