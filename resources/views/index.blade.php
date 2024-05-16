@extends('layouts.home')
@section('content')

@php
    $page = 'home';
@endphp

<div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('images/bg_5.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate">
                <span class="subheading">Welcome to Hidden Gems of Kuta Selatans</span>
                <h1 class="mb-4">Temukan Tempat Favorit Anda Bersama Kami</h1>
                <p class="caps">Bepergian ke sudut manapun di Kuta Selatan, tanpa ribet</p>
            </div>
            <a href="https://youtu.be/v7o6smEU8AM" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
                <span class="fa fa-play"></span>
            </a>
        </div>
    </div>
</div>



    <section class="ftco-section services-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
                    <div class="w-100">
                        <span class="subheading">Welcome to Pacific</span>
                        <h2 class="mb-4">It's time to start your adventure</h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                        A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <p><a href="#" class="btn btn-primary py-3 px-4">Search Destination</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1 color-1 d-block img" style="background-image: url('{{ asset('images/services-1.jpg') }}');">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-paragliding"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Activities</h3>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1 color-2 d-block img" style="background-image: url('{{ asset('images/services-2.jpg') }}');">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Travel Arrangements</h3>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1 color-3 d-block img" style="background-image: url('{{ asset('images/services-3.jpg') }}');">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-tour-guide"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Private Guide</h3>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1 color-4 d-block img" style="background-image: url('{{ asset('images/services-4.jpg') }}');">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-map"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Location Manager</h3>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" style="margin-bottom: -150px; margin-top: -150px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Peta Semua Destinasi</h2>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-12">
                    <div id="map1" style="width: 100%;height: 500px;border-radius: 10px; z-index:1;"></div>
                    <div id="data1" style="display: none;">
                        @foreach($datas as $item1)
                            <div class="item1" data-lat="{{ $item1->latitude }}" data-lng="{{ $item1->longitude }}" data-nama="{{ $item1->nama }}" data-deskripsi="{{ $item1->deskripsi }}"></div>
                        @endforeach
                    </div>
                </div>

          </div>
        </div>
    </section>

    <section class="ftco-section" style="margin-bottom: -150px; margin-top: -150px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4">3 Destinasi Terdekat Dari Tempat Anda</h2>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-12">
                    <div id="map" style="width: 100%;height: 500px;border-radius: 10px; z-index:1;"></div>
                    <div id="data" style="display: none;">
                        @foreach($datas as $item)
                            <div class="item" data-lat="{{ $item->latitude }}" data-lng="{{ $item->longitude }}" data-nama="{{ $item->nama }}" data-deskripsi="{{ $item->deskripsi }}"></div>
                        @endforeach
                    </div>
                </div>

          </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Destinasi</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($datas3 as $item)

                <div class="col-md-4 ftco-animate">
                    <a href="{{ route('detail',$item->id) }}">
                    <div class="project-wrap">
                        @foreach ($item->images as $image)
                        @endforeach
                        <div class="img" style="background-image: url('{{ asset('images/objekwisata/'.$image->folder.'/'.$image->name) }}');">
                    </div>
                      <div class="text p-4">
                          <span class="days">{{ $item->kategori->nama_kategori }}</span>
                          <h3>{{ ucwords($item->nama) }}</h3>
                     </div>
                 </div>
                </a>
             </div>

                @endforeach



          </div>
        </div>
    </section>

    <section class="ftco-section ftco-about img"style="background-image: url('{{ asset('images/bg_4.jpg') }}');">
        <div class="overlay"></div>
        <div class="container py-md-5">
            <div class="row py-md-5">
                <div class="col-md d-flex align-items-center justify-content-center">
                    <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
                        <span class="fa fa-play"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-about ftco-no-pt img">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 about-intro">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="img d-flex w-100 align-items-center justify-content-center" style="background-image:url(images/about-1.jpg);">
                            </div>
                        </div>
                        <div class="col-md-6 pl-md-5 py-5">
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate">
                                    <span class="subheading">About Us</span>
                                    <h2 class="mb-4">Make Your Tour Memorable and Safe With Us</h2>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                    <p><a href="#" class="btn btn-primary">Book Your Destination</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>

        //near me
        let mapOptions = {
            center: [-8.795349, 115.168552],
            zoom: 10
        };

        let map = new L.map('map', mapOptions);

        let layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
        map.addLayer(layer);

        // L.control.locate().addTo(map);

        let dataItems = document.querySelectorAll('.item');

        // Function to calculate distance using Haversine formula
        function getDistance(lat1, lon1, lat2, lon2) {
            const R = 6371e3; // Radius of the Earth in meters
            const φ1 = lat1 * Math.PI/180; // φ, λ in radians
            const φ2 = lat2 * Math.PI/180;
            const Δφ = (lat2-lat1) * Math.PI/180;
            const Δλ = (lon2-lon1) * Math.PI/180;

            const a = Math.sin(Δφ/2) * Math.sin(Δφ/2) +
                    Math.cos(φ1) * Math.cos(φ2) *
                    Math.sin(Δλ/2) * Math.sin(Δλ/2);
            const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));

            const d = R * c; // in meters
            return d;
        }

        // Get current location
        navigator.geolocation.getCurrentPosition(function(position) {
            const lat = position.coords.latitude;
            const lon = position.coords.longitude;

            // Find the three nearest locations
            const distances = Array.from(dataItems).map(item => {
                const itemLat = parseFloat(item.dataset.lat);
                const itemLng = parseFloat(item.dataset.lng);
                const nama = item.dataset.nama;
                const deskripsi = item.dataset.deskripsi;

                return {
                    lat: itemLat,
                    lng: itemLng,
                    nama: nama,
                    deskripsi: deskripsi,
                    distance: getDistance(lat, lon, itemLat, itemLng)
                };
            });

            distances.sort((a, b) => a.distance - b.distance);

            const nearestLocations = distances.slice(0, 3);

            // Add markers to map for the three nearest locations
            nearestLocations.forEach(location => {
                let distanceInKm = (location.distance / 1000).toFixed(2);
                let marker = L.marker([location.lat, location.lng]);
                marker.addTo(map).bindPopup("<b>" + location.nama + "</b><br><p>" + location.deskripsi + "</p><p>Jarak: " + distanceInKm + " km</p><a target='_BLANK' href='https://www.google.com/maps?q=" + location.lat + "," + location.lng + "'><button class='btn btn-primary btn-sm'>Lihat Pada Maps</button></a>");
            });

            // Center map to location
            map.setView([-8.795349, 115.168552], 12);
        });

    </script>

    <script>
        //peta destinasi
        let mapOptions1 = {
            center:[-8.795349, 115.168552],
            zoom:12
        }

        let map1 = new L.map('map1' , mapOptions1);

        let layer1 = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
        map1.addLayer(layer1);

        let dataItems1 = document.querySelectorAll('.item1');

        console.log(dataItems1);
        dataItems1.forEach(item1 => {
            let lat = item1.dataset.lat;
            let lng = item1.dataset.lng;
            let nama = item1.dataset.nama;
            let deskripsi = item1.dataset.deskripsi;

            var latlong = L.marker([lat, lng]);
            latlong.addTo(map1).bindPopup("<b>" + nama + "</b><br><p>" + deskripsi + "</p><a target='_BLANK' href='https://www.google.com/maps?q=" + lat + "," + lng + "'><button class='btn btn-primary btn-sm'>Lihat Pada Maps</button></a>");
        });
    </script>

@endsection
