<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="{{ $company->company_name ?? 'Techira Indonesia' }} - {{ $company->tagline ?? '' }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $company->company_name ?? 'Techira Indonesia' }}</title>

    <link rel="icon" href="{{ asset('frontend/img/core-img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom-override.css') }}">
</head>

<body>

    <!-- ===== PRELOADER ===== -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    </div>

    <!-- ===== NAVBAR ===== -->
    <header class="ve-header" id="ve-sticky">
        <div class="container-fluid ve-nav-wrap">
            <div class="ve-logo">
                <a href="{{ route('home') }}">
                    <span class="ve-logo-icon">T</span>
                    <span class="ve-logo-text">{{ $company->company_name ?? 'Techira' }}</span>
                </a>
            </div>

            <nav class="ve-nav">
                <ul>
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>

            <div class="ve-nav-cta">
                <a href="#contact" class="ve-cta-btn">Hubungi Kami <i class="fa fa-arrow-right"></i></a>
            </div>

            <button class="ve-toggler" id="ve-toggle">
                <span></span><span></span><span></span>
            </button>
        </div>

        <div class="ve-mobile-menu" id="ve-mobile-menu">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </header>

    <!-- ===== SECTION 1: HERO ===== -->
    <section class="ve-hero" id="home">
        <div class="ve-hero-left">
            <span class="ve-hero-badge">Selamat Datang di {{ $company->company_name ?? 'Techira Indonesia' }}</span>
            <h1>{{ $company->tagline ?? 'Solusi Digital Terbaik Untuk Bisnis Anda' }}</h1>
            <p>{{ $company->description ?? 'Kami hadir untuk membantu bisnis Anda berkembang dengan solusi teknologi yang inovatif dan terpercaya.' }}</p>
            <div class="ve-hero-btns">
                <a href="#services" class="ve-btn-primary">Lihat Layanan</a>
                <a href="#about" class="ve-btn-ghost">Tentang Kami</a>
            </div>
            <div class="ve-hero-stats">
                <div class="ve-stat">
                    <strong>{{ $services->count() }}+</strong>
                    <span>Layanan</span>
                </div>
                <div class="ve-stat-divider"></div>
                <div class="ve-stat">
                    <strong>{{ $portfolios->count() }}+</strong>
                    <span>Portfolio</span>
                </div>
                <div class="ve-stat-divider"></div>
                <div class="ve-stat">
                    <strong>{{ $teams->count() }}+</strong>
                    <span>Tim Profesional</span>
                </div>
            </div>
        </div>
        <div class="ve-hero-right">
            <div class="ve-hero-img-main bg-img" style="background-image:url({{ asset('fronten/img/bg-img/1.jpg') }});"></div>
            <div class="ve-hero-img-accent bg-img" style="background-image:url({{ asset('fronten/img/bg-img/3.jpg') }});"></div>
            <div class="ve-float-card">
                <i class="fa fa-rocket"></i>
                <div>
                    <strong>100%</strong>
                    <span>Kepuasan Klien</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== MARQUEE TRUST BAR ===== -->
    <div class="ve-trust-bar">
        <div class="ve-trust-inner">
            <span><i class="fa fa-shield"></i> Terpercaya</span>
            <span><i class="fa fa-check-circle"></i> Profesional</span>
            <span><i class="fa fa-users"></i> Tim Berpengalaman</span>
            <span><i class="fa fa-lock"></i> Keamanan Data</span>
            <span><i class="fa fa-trophy"></i> Solusi Inovatif</span>
            <span><i class="fa fa-globe"></i> Jangkauan Nasional</span>
            <span><i class="fa fa-shield"></i> Terpercaya</span>
            <span><i class="fa fa-check-circle"></i> Profesional</span>
            <span><i class="fa fa-users"></i> Tim Berpengalaman</span>
            <span><i class="fa fa-lock"></i> Keamanan Data</span>
        </div>
    </div>

    <!-- ===== SECTION 2: ABOUT ===== -->
    <section class="ve-section ve-whyus-section" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-5">
                    <div class="ve-whyus-img-wrap wow fadeInLeft" data-wow-delay="100ms">
                        <div class="ve-whyus-img-main bg-img" style="background-image:url({{ asset('fronten/img/bg-img/5.jpg') }});"></div>
                        <div class="ve-whyus-badge">
                            <strong>{{ $company->company_name ?? 'Techira' }}</strong>
                            <span>Indonesia</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7 wow fadeInRight" data-wow-delay="200ms">
                    <div class="ve-whyus-content">
                        <span class="ve-section-tag">Tentang Kami</span>
                        <h2>Profil <span>Perusahaan</span></h2>
                        <p>{{ $company->description ?? 'Kami adalah perusahaan teknologi yang berdedikasi untuk memberikan solusi terbaik bagi bisnis Anda.' }}</p>

                        <div class="ve-checklist">
                            <div class="ve-check-item">
                                <i class="fa fa-eye"></i>
                                <div>
                                    <strong>Visi</strong>
                                    <p>{{ $company->vision ?? 'Menjadi perusahaan teknologi terdepan dan terpercaya di Indonesia.' }}</p>
                                </div>
                            </div>
                            <div class="ve-check-item">
                                <i class="fa fa-flag"></i>
                                <div>
                                    <strong>Misi</strong>
                                    <p>{{ $company->mission ?? 'Menghadirkan solusi digital inovatif yang memberikan nilai nyata bagi setiap klien.' }}</p>
                                </div>
                            </div>
                        </div>

                        <a href="#contact" class="ve-btn-primary mt-30">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== SECTION 3: SERVICES ===== -->
    <section class="ve-section ve-services-section" id="services">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Apa Yang Kami Tawarkan</span>
                <h2>Layanan <span>Kami</span></h2>
                <p>Kami menyediakan berbagai layanan profesional untuk mendukung pertumbuhan bisnis Anda.</p>
            </div>

            @if($services->count() > 0)
            <div class="ve-services-grid">
                @foreach($services as $index => $service)
                <div class="ve-service-card wow fadeInUp" data-wow-delay="{{ ($index + 1) * 100 }}ms">
                    <div class="ve-service-icon">
                        @if($service->icon)
                            {{-- Jika icon berupa class (misal: fa fa-cog) --}}
                            @if(str_starts_with($service->icon, 'fa') || str_starts_with($service->icon, 'icon'))
                                <i class="{{ $service->icon }}"></i>
                            @else
                                {{-- Jika icon berupa file gambar --}}
                                <img src="{{ asset('fronten/storage/' . $service->icon) }}" alt="{{ $service->name }}" style="width:40px;height:40px;object-fit:contain;">
                            @endif
                        @else
                            <i class="fa fa-cogs"></i>
                        @endif
                    </div>
                    <h4>{{ $service->name }}</h4>
                    <p>{{ $service->description }}</p>
                    <a href="#contact" class="ve-card-link">Pelajari lebih <i class="fa fa-long-arrow-right"></i></a>
                </div>
                @endforeach
            </div>
            @else
            <div class="text-center py-5">
                <p class="text-muted">Layanan sedang diperbarui. Silakan kembali lagi nanti.</p>
            </div>
            @endif
        </div>
    </section>

    <!-- ===== SECTION 4: PORTFOLIO ===== -->
    <section class="ve-section ve-insights-section" id="portfolio">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Hasil Kerja Kami</span>
                <h2>Portfolio & <span>Produk</span></h2>
                <p>Berikut adalah beberapa proyek dan produk yang telah kami kerjakan dengan penuh dedikasi.</p>
            </div>

            @if($portfolios->count() > 0)
            <div class="row">
                @foreach($portfolios as $index => $portfolio)
                <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="{{ ($index + 1) * 100 }}ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url(
                                {{ $portfolio->image
                                    ? asset('fronten/storage/' . $portfolio->image)
                                    : asset('fronten/img/bg-img/10.jpg') }}
                            );">
                        </div>
                        <div class="ve-insight-body">
                            <span class="ve-insight-cat">Portfolio</span>
                            <h5>{{ $portfolio->title }}</h5>
                            <p>{{ Str::limit($portfolio->description, 100) }}</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-calendar"></i> {{ $portfolio->created_at->format('d M Y') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <div class="text-center py-5">
                <p class="text-muted">Portfolio sedang diperbarui. Silakan kembali lagi nanti.</p>
            </div>
            @endif
        </div>
    </section>

    <!-- ===== SECTION 5: TEAM ===== -->
    <section class="ve-section ve-testimonials-section" id="team">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Orang-Orang Hebat Kami</span>
                <h2>Tim <span>Profesional</span></h2>
                <p>Kenali para profesional berdedikasi yang bekerja keras untuk kesuksesan Anda.</p>
            </div>

            @if($teams->count() > 0)
            <div class="ve-testi-grid">
                @foreach($teams as $index => $member)
                <div class="ve-testi-card wow fadeInUp" data-wow-delay="{{ ($index + 1) * 150 }}ms"
                     style="text-align:center;">
                    <div class="ve-testi-author" style="flex-direction:column; align-items:center; margin-bottom:12px;">
                        <div class="ve-testi-avatar bg-img"
                             style="background-image:url(
                                {{ $member->photo
                                    ? asset('fronten/storage/' . $member->photo)
                                    : asset('fronten/img/bg-img/14.jpg') }}
                             ); width:80px; height:80px; border-radius:50%; margin-bottom:12px;">
                        </div>
                        <div>
                            <strong style="display:block; font-size:1.1rem;">{{ $member->name }}</strong>
                            <span style="color:#888; font-size:0.9rem;">{{ $member->position }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <div class="text-center py-5">
                <p class="text-muted">Informasi tim sedang diperbarui.</p>
            </div>
            @endif
        </div>
    </section>

    <!-- ===== CTA BANNER ===== -->
    <section class="ve-cta-banner bg-img" style="background-image:url({{ asset('fronten/img/bg-img/6.jpg') }});">
        <div class="ve-cta-overlay"></div>
        <div class="container ve-cta-content">
            <div class="row align-items-center">
                <div class="col-12 col-lg-8">
                    <h2>Siap Membawa Bisnis Anda ke <span>Level Berikutnya?</span></h2>
                    <p>Hubungi tim kami sekarang dan dapatkan konsultasi gratis untuk kebutuhan digital Anda.</p>
                </div>
                <div class="col-12 col-lg-4 text-lg-right">
                    <a href="#contact" class="ve-btn-white">Mulai Sekarang</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== SECTION 6: CONTACT ===== -->
    <section class="ve-section ve-newsletter-section" id="contact" style="padding: 80px 0;">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Hubungi Kami</span>
                <h2>Kirimkan <span>Pesan</span></h2>
                <p>Ada pertanyaan atau ingin bekerja sama? Kami siap mendengar Anda.</p>
            </div>

            {{-- Alert sukses setelah kirim pesan --}}
            @if(session('success'))
            <div class="alert alert-success text-center mb-4"
                 style="background:#d4edda; color:#155724; padding:15px; border-radius:8px; max-width:600px; margin:0 auto 20px;">
                <i class="fa fa-check-circle"></i> {{ session('success') }}
            </div>
            @endif

            {{-- Tampilkan error validasi --}}
            @if($errors->any())
            <div class="alert alert-danger text-center mb-4"
                 style="background:#f8d7da; color:#721c24; padding:15px; border-radius:8px; max-width:600px; margin:0 auto 20px;">
                @foreach($errors->all() as $error)
                    <div><i class="fa fa-exclamation-circle"></i> {{ $error }}</div>
                @endforeach
            </div>
            @endif

            <div class="row">
                {{-- Form Kontak --}}
                <div class="col-12 col-lg-7">
                    <div class="ve-newsletter-wrap" style="flex-direction:column; padding:40px;">
                        <h4 style="margin-bottom:24px;">Form Kontak</h4>
                        <form action="{{ route('contact.send') }}" method="POST">
                            @csrf
                            <div style="margin-bottom:16px;">
                                <label style="display:block; margin-bottom:6px; font-weight:600;">Nama Lengkap</label>
                                <input type="text" name="name" value="{{ old('name') }}"
                                       placeholder="Masukkan nama Anda"
                                       style="width:100%; padding:12px 16px; border:1px solid #ddd; border-radius:6px; font-size:0.95rem;"
                                       required>
                            </div>
                            <div style="margin-bottom:16px;">
                                <label style="display:block; margin-bottom:6px; font-weight:600;">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}"
                                       placeholder="Masukkan email Anda"
                                       style="width:100%; padding:12px 16px; border:1px solid #ddd; border-radius:6px; font-size:0.95rem;"
                                       required>
                            </div>
                            <div style="margin-bottom:20px;">
                                <label style="display:block; margin-bottom:6px; font-weight:600;">Pesan</label>
                                <textarea name="message" rows="5"
                                          placeholder="Tuliskan pesan Anda di sini..."
                                          style="width:100%; padding:12px 16px; border:1px solid #ddd; border-radius:6px; font-size:0.95rem; resize:vertical;"
                                          required>{{ old('message') }}</textarea>
                            </div>
                            <button type="submit" class="ve-btn-primary" style="width:100%; padding:14px; font-size:1rem;">
                                <i class="fa fa-paper-plane"></i> Kirim Pesan
                            </button>
                        </form>
                    </div>
                </div>

                {{-- Informasi Kontak --}}
                <div class="col-12 col-lg-5">
                    <div style="padding:40px;">
                        <h4 style="margin-bottom:24px;">Informasi Kontak</h4>
                        <ul class="ve-footer-contact" style="list-style:none; padding:0;">
                            <li style="margin-bottom:16px; display:flex; align-items:center; gap:12px;">
                                <i class="fa fa-map-marker" style="font-size:1.2rem; color:var(--ve-primary, #1a56db); width:20px;"></i>
                                <span>Indonesia</span>
                            </li>
                            <li style="margin-bottom:16px; display:flex; align-items:center; gap:12px;">
                                <i class="fa fa-envelope" style="font-size:1.2rem; color:var(--ve-primary, #1a56db); width:20px;"></i>
                                <span>info@techira.id</span>
                            </li>
                            <li style="margin-bottom:16px; display:flex; align-items:center; gap:12px;">
                                <i class="fa fa-clock-o" style="font-size:1.2rem; color:var(--ve-primary, #1a56db); width:20px;"></i>
                                <span>Senin–Jumat, 09.00 – 17.00 WIB</span>
                            </li>
                        </ul>

                        <div style="margin-top:32px;">
                            <h5 style="margin-bottom:12px;">Ikuti Kami</h5>
                            <div class="ve-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FOOTER ===== -->
    <footer class="ve-footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4 mb-50">
                    <div class="ve-footer-brand">
                        <a href="{{ route('home') }}" class="ve-footer-logo">
                            <span class="ve-logo-icon">T</span>
                            <span class="ve-logo-text">{{ $company->company_name ?? 'Techira Indonesia' }}</span>
                        </a>
                        <p>{{ $company->description ? Str::limit($company->description, 120) : 'Solusi digital terpercaya untuk bisnis Anda.' }}</p>
                        <div class="ve-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-2 mb-50">
                    <h5 class="ve-footer-title">Navigasi</h5>
                    <ul class="ve-footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 mb-50">
                    <h5 class="ve-footer-title">Layanan Kami</h5>
                    <ul class="ve-footer-links">
                        @forelse($services->take(5) as $service)
                        <li><a href="#services">{{ $service->name }}</a></li>
                        @empty
                        <li><a href="#services">Lihat Semua Layanan</a></li>
                        @endforelse
                    </ul>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 mb-50">
                    <h5 class="ve-footer-title">Hubungi Kami</h5>
                    <ul class="ve-footer-contact">
                        <li><i class="fa fa-map-marker"></i> Indonesia</li>
                        <li><i class="fa fa-envelope"></i> info@techira.id</li>
                        <li><i class="fa fa-clock-o"></i> Sen–Jum, 09.00 – 17.00</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="ve-footer-bottom">
            <div class="container">
                <div class="ve-footer-bottom-inner">
                    <p>Copyright &copy; {{ date('Y') }} {{ $company->company_name ?? 'Techira Indonesia' }}. All Rights Reserved.</p>
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('frontend/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/plugins.js') }}"></script>
    <script src="{{ asset('frontend/js/active.js') }}"></script>
    <script src="{{ asset('frontend/js/vaultedge.js') }}"></script>

</body>
</html>