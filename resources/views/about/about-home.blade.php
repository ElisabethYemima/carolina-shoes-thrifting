@extends('layouts.app')
@section('content')
    <main class="pt-90">
        <div class="mb-4 pb-4"></div>
        <section class="about-us container">
            <div class="mw-930">
                <h2 class="page-title">ABOUT CAROLINA SHOES THRIFTING</h2>
            </div>

            <div class="about-us__content pb-5 mb-5">
                <!-- Banner Gambar Utama (Opsional: sesuaikan nama file gambar di folder public/assets/images/) -->
                <p class="mb-5">
                    <img loading="lazy" class="w-100 h-auto d-block"
                        src="{{ asset('assets/images/about/about-1.jpg') }}" width="1410" height="550"
                        alt="Carolina Shoes Thrifting"
                        onerror="this.style.display='none'" />
                </p>

                <div class="mw-930">
                    <h3 class="mb-4">OUR STORY</h3>
                    <p class="fs-6 fw-medium mb-4">
                        Carolina Shoes Thrifting hadir sebagai destinasi utama bagi para pecinta sneakers dan sepatu
                        branded second-hand berkualitas tinggi dengan harga yang ramah di kantong.
                    </p>
                    <p class="mb-4">
                        Berawal dari kecintaan terhadap dunia footwear dan semangat sustainable fashion, kami mengkurasi
                        berbagai pilihan sepatu original pilihan dari merek ternama. Setiap pasang sepatu yang masuk ke
                        katalog kami melewati tahap inspeksi kondisi yang ketat serta proses deep cleaning menyeluruh
                        agar bersih, wangi, dan siap langsung kamu gunakan dengan percaya diri.
                    </p>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5 class="mb-3">Our Mission</h5>
                            <p class="mb-3">
                                Menyediakan sepatu thrift 100% original yang terkurasi, higienis, dan terjangkau bagi
                                semua kalangan, sekaligus mengurangi limbah fashion melalui penggunaan kembali sepatu
                                berkualitas.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h5 class="mb-3">Our Vision</h5>
                            <p class="mb-3">
                                Menjadi toko sepatu thrift online paling terpercaya yang mengutamakan kejujuran kondisi
                                barang, kualitas perawatan terbaik, dan kepuasan pelanggan.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Section Keunggulan Toko -->
                <div class="mw-930 d-lg-flex align-items-lg-center mt-4">
                    <div class="image-wrapper col-lg-6">
                        <img class="h-auto w-100" loading="lazy"
                            src="{{ asset('assets/images/about/about-2.jpg') }}" width="450" height="500"
                            alt="Curated Shoes"
                            onerror="this.style.display='none'" />
                    </div>
                    <div class="content-wrapper col-lg-6 px-lg-4">
                        <h5 class="mb-3">Kenapa Memilih Kami?</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><strong>100% Authentic & Curated:</strong> Hanya menjual sepatu original dengan kondisi terbaik.</li>
                            <li class="mb-2"><strong>Deep Cleaned & Ready to Wear:</strong> Sudah dicuci bersih dan disterilkan sebelum dikirim.</li>
                            <li class="mb-2"><strong>Transparan & Detail:</strong> Foto dan deskripsi kondisi sepatu sesuai dengan barang asli.</li>
                        </ul>
                        <a href="{{ route('shop.index') }}" class="btn btn-primary mt-3">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
