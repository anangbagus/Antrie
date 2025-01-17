@extends('layouts/landingPageLayout')


@section('container')
    @include('components/generalNavbar')
    <button class="position-fixed bottom-0 end-0 scroll-top d-flex justify-content-center align-items-center"><i
            class="fas fa-chevron-up"></i></i></button>
    <div class="container-md">
        <div class="searchBar-wrapper-landingPage d-flex justify-content-center align-items-center mt-4 p-0 mb-5">
            <form action="{{ route('search') }}" method="GET"
                class="first-row-search shadow-lg d-flex justify-content-center align-items-center flex-md-fill mb-md-3 align-self-center">
                <input type="text" id="search-tempat-antrean" placeholder="Cari antrean..." name="query">
                <select class="form-select border-end border-start" id="filter-provinsi" name="provinsi"
                    aria-label="Default select example">
                    <option selected value="">Provinsi</option>
                    <option value="DKI JAKARTA">DKI Jakarta</option>
                    <option value="JAWA BARAT">Jawa Barat</option>
                    <option value="JAWA TENGAH">Jawa Tengah</option>
                    <option value="JAWA TIMUR">Jawa Timur</option>
                    <option value="KALIMANTAN TIMUR">Kalimantan Timur</option>
                    <option value="DAERAH ISTIMEWA YOGYAKARTA">Daerah Istimewa Yogyakarta</option>
                    <option value="BANTEN">Banten</option>
                    <option value="RIAU">Riau</option>
                    <option value="SULAWESI SELATAN">Sulawesi Selatan</option>
                    <option value="BALI">Bali</option>
                    <option value="SUMATERA BARAT">Sumatera Barat</option>
                    <option value="SUMATERA UTARA">Sumatera Utara</option>
                    <option value="KALIMANTAN SELATAN">Kalimantan Selatan</option>
                    <option value="SUMATERA SELATAN">Sumatera Selatan</option>
                    <option value="NUSA TENGGARA TIMUR">Nusa Tenggara Timur</option>
                    <option value="KEPULAUAN RIAU">Kepulauan Riau</option>
                    <option value="LAMPUNG">Lampung</option>
                    <option value="KEPULAUAN BANGKA BELITUNG">Kepulauan Bangka Belitung</option>
                    <option value="KALIMANTAN TENGAH">Kalimantan Tengah</option>
                    <option value="SULAWESI TENGAH">Sulawesi Tengah</option>
                    <option value="KALIMANTAN BARAT">Kalimantan Barat</option>
                    <option value="PAPUA">Papua</option>
                    <option value="SULAWESI UTARA">Sulawesi Utara</option>
                    <option value="KALIMANTAN UTARA">Kalimantan Utara</option>
                    <option value="PAPUA">Papua</option>
                    <option value="JAMBI">Jambi</option>
                    <option value="NUSA TENGGARA BARAT">Nusa Tenggara Barat</option>
                    <option value="PAPUA BARAT">Papua Barat</option>
                    <option value="BENGKULU">Bengkulu</option>
                    <option value="SULAWESI TENGGARA">Sulawesi Tenggara</option>
                    <option value="MALUKU">Maluku</option>
                    <option value="MALUKU UTARA">Maluku Utara</option>
                    <option value="SULAWESI BARAT">Sulawesi Barat</option>
                    <option value="GORONTALO">Gorontalo</option>
                </select>
                <select class="form-select border-start" id="filter-provinsi" aria-label="Default select example"
                    name="kategori">
                    <option selected value="">Kategori</option>
                    @foreach ($kategori as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                    @endforeach
                </select>
                <button type="submit" id="search-button" class="d-flex align-items-center justify-content-center"><i
                        class="bi bi-search"></i></button>
            </form>
        </div>
        <div class="section s1" data-background="#ffff">
            <div class="home-first">
                <div class="display">
                    <div class="slogan">
                        <h1><span>Antrie</span><br>Aplikasi Antrean Online</h1>
                        <p>“Antrie” menyediakan solusi yang berupa platform antrean online berbasis web yang
                            memungkinkan setiap penggunanya untuk mengantre dan membuat antrean
                            dengan mudah</p>
                        <a type="button" class="btn" id="btn-tryitnow" href="{{ route('beranda') }}">Coba
                            sekarang!</a>
                    </div>
                    <div class="image">
                        <div class="imageSlogan d-flex justify-content-end">
                            <img src="img/homepageAntrie.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section s2" data-background="#4DB0FF">
            <div class="home-second">
                <div class="slogan-second">
                    <h1>Apa itu Antrie ?</h1>
                    <p>Antrie merupakan platform berbasis website yang menyediakan antre online atau online queueing
                        yang dapat digunakan secara universal oleh berbagai instansi ataupun kegiatan serta dapat
                        dikonfigurasi sesuai dengan kebutuhan antrean dari suatu instansi ataupun kegiatan.</p>
                </div>
                <div class="image-second">
                    <img src="img/komputerHompage.png" alt="">
                </div>
            </div>
        </div>
        <div class="section s3" data-background="#ffff">
            <div class="home-third">
                <div class="slogan-third">
                    <h1>Temukan peranmu</h1>
                    <h1>dalam website kami</h1>
                </div>
                <div class="slogan-pembuat-antrean">
                    <div class="word-pembuat-antrean">
                        <h1>Pembuat Antrean</h1>
                        <p>Sebagai pembuat anteran anda dapat membuat antrean dari manapun dan kapanpun</p>
                        <button type="button" id="kelebihan-pembuat-antrean" class="mt-2">Kelebihan<i
                                class="fas fa-plus" id="tambah-pembuat-antrean"></i></button>
                        <ul class="mt-3">
                            <li>Membuat antrean</li>
                            <li>Membuat loket pada suatu antrean</li>
                            <li>Menambahkan individu yang tidak mengantre secara online
                                pada antrean</li>
                        </ul>
                    </div>
                    <div class="img-pembuat-antrean">
                        <img src="img/pembuatAntrean.png" alt="pembuatanteran">
                    </div>
                </div>

                <div class="slogan-pengantre">
                    <div class="img-pengantre">
                        <img src="img/pengantre.png" alt="">
                    </div>
                    <div class="word-pengantre">
                        <h1>Pengantre</h1>
                        <p>Sebagai pengantre anda dapat mengambil nomor antrean tanpa perlu pergi ke lokasinya
                            secara langsung
                        </p>
                        <button type="button" id="kelebihan-pengantre">Kelebihan<i class="fas fa-plus"
                                id="tambah-pengantre"></i></button>
                        <ul class="mt-3">
                            <li>Mengambil nomor antrean</li>
                            <li>Melihat jalannya antrean secara real-time</li>
                            <li>Membatalkan antrean</li>
                            <li>Melihat kasus harian COVID-19 pada lokasi antrean</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="section s4" data-background="#2F2D65">
            <div class="home-forth">
                <div class="word-kenapa-pilih">
                    <h1>Kenapa harus pilih kami ?</h1>
                    <p>Kami berusaha untuk memberikan solusi yang berupa platform antrean online berbasis web yang
                        memungkinkan setiap penggunanya untuk mengantri dan membuat antrean dengan mudah. </p>
                </div>
                <div class="card-kenapa-pilih">
                    <div class="kemudahan-kenapa-pilih">
                        <div class="front">
                            <div class="up-icon">
                                <svg width="46" height="46" viewBox="0 0 46 46" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M38.3333 38.3333L23 23M17.25 9.58333V5.75M17.25 28.75V24.9167M9.58333 17.25H5.75M28.75 17.25H24.9167M12.4584 12.4584L8.3925 8.3925M12.4584 22.0417L8.39254 26.1076M26.1076 8.39244L22.0417 12.4583"
                                        stroke="#FFE77A" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="kemudahan-word">
                                <p>Kemudahan</p>
                            </div>
                        </div>
                        <div class="back text-center p-2">
                            Dibandingkan dengan perangkat lunak lain yang serupa, pengguna
                            perangkat lunak “Antrie” tidak membutuhkan proses pengajuan
                            pembuatan antrean.
                        </div>
                    </div>
                    <div class="kecepatan-kenapa-pilih">
                        <div class="front">
                            <div class="up-icon">
                                <svg width="43" height="50" viewBox="0 0 43 50" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M30.1538 5H11.8462L4 28.2941H14.4615L9.23077 49L38 20.5294H23.8769L30.1538 5Z"
                                        stroke="#FFE77A" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="kemudahan-word">
                                <p>Kecepatan</p>
                            </div>
                        </div>
                        <div class="back text-center p-2">
                            Perangkat lunak “Antrie” menawarkan kecepatan dalam
                            proses pembuatan antrean karena proses pembuatan antrean tidak
                            melalui proses verifikasi.
                        </div>
                    </div>
                    <div class="fleksibilitas-kenapa-pilih">
                        <div class="front">
                            <div class="up-icon">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 40L9.2602 40.1233C9.32048 40.4849 9.63337 40.75 10 40.75V40ZM38 40V40.75C38.3666 40.75 38.6795 40.4849 38.7398 40.1233L38 40ZM31 25L30.3673 25.4027C30.4824 25.5836 30.6694 25.7065 30.8811 25.7405C31.0928 25.7745 31.309 25.7162 31.4749 25.5805L31 25ZM17 25L16.5251 25.5805C16.691 25.7162 16.9072 25.7745 17.1189 25.7405C17.3306 25.7065 17.5176 25.5836 17.6327 25.4027L17 25ZM5.2602 16.1233L9.2602 40.1233L10.7398 39.8767L6.7398 15.8767L5.2602 16.1233ZM10 40.75H38V39.25H10V40.75ZM38.7398 40.1233L42.7398 16.1233L41.2602 15.8767L37.2602 39.8767L38.7398 40.1233ZM41.5251 15.4195L30.5251 24.4195L31.4749 25.5805L42.4749 16.5805L41.5251 15.4195ZM5.52507 16.5805L16.5251 25.5805L17.4749 24.4195L6.47493 15.4195L5.52507 16.5805ZM17.6327 25.4027L24.6327 14.4027L23.3673 13.5973L16.3673 24.5973L17.6327 25.4027ZM23.3673 14.4027L30.3673 25.4027L31.6327 24.5973L24.6327 13.5973L23.3673 14.4027ZM26.25 11C26.25 12.2426 25.2426 13.25 24 13.25V14.75C26.0711 14.75 27.75 13.0711 27.75 11H26.25ZM24 13.25C22.7574 13.25 21.75 12.2426 21.75 11H20.25C20.25 13.0711 21.9289 14.75 24 14.75V13.25ZM21.75 11C21.75 9.75736 22.7574 8.75 24 8.75V7.25C21.9289 7.25 20.25 8.92893 20.25 11H21.75ZM24 8.75C25.2426 8.75 26.25 9.75736 26.25 11H27.75C27.75 8.92893 26.0711 7.25 24 7.25V8.75ZM8.25 13C8.25 14.2426 7.24264 15.25 6 15.25V16.75C8.07107 16.75 9.75 15.0711 9.75 13H8.25ZM6 15.25C4.75736 15.25 3.75 14.2426 3.75 13H2.25C2.25 15.0711 3.92893 16.75 6 16.75V15.25ZM3.75 13C3.75 11.7574 4.75736 10.75 6 10.75V9.25C3.92893 9.25 2.25 10.9289 2.25 13H3.75ZM6 10.75C7.24264 10.75 8.25 11.7574 8.25 13H9.75C9.75 10.9289 8.07107 9.25 6 9.25V10.75ZM44.25 13C44.25 14.2426 43.2426 15.25 42 15.25V16.75C44.0711 16.75 45.75 15.0711 45.75 13H44.25ZM42 15.25C40.7574 15.25 39.75 14.2426 39.75 13H38.25C38.25 15.0711 39.9289 16.75 42 16.75V15.25ZM39.75 13C39.75 11.7574 40.7574 10.75 42 10.75V9.25C39.9289 9.25 38.25 10.9289 38.25 13H39.75ZM42 10.75C43.2426 10.75 44.25 11.7574 44.25 13H45.75C45.75 10.9289 44.0711 9.25 42 9.25V10.75Z"
                                        fill="#FFE77A" />
                                </svg>
                            </div>
                            <div class="kemudahan-word">
                                <p>Fleksibilitas</p>
                            </div>
                        </div>
                        <div class="back text-center p-2">
                            Berbagai konfigurasi dapat ditentukan oleh
                            pembuat antrean untuk memenuhi kebutuhan spesifik suatu instansi
                            ataupun acara.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section s5" data-background="#ffff">
            <div class="home-fifth">
                <div class="share-love-img-left">
                    <img src="img/shareThelove1.png" alt="">
                </div>
                <div class="share-love-word">
                    <h1>Share The Love</h1>
                    <p>Fakta dasar tentang eksistensi manusia bukanlah sebuah tragedi, tapi membosankan. Tidak ada hal yang
                        lebih membosankan dari berdiri di antrean yang panjang.</p>
                </div>
                <div class="share-love-img-right">
                    <img src="img/shareThelove2.png" alt="">
                </div>
            </div>
        </div>
    </div>
    @include('components/footer')
@endsection
