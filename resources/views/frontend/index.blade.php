@php
    $company = $company ?? new \App\Models\CompanyProfile([
        'company_name' => 'Techira Indonesia',
        'tagline'      => 'Mitra Solusi Digital untuk Bisnis Anda',
        'description'  => 'Techira Indonesia adalah perusahaan teknologi yang berfokus pada penyediaan solusi digital.',
        'vision'       => 'Menjadi perusahaan teknologi terdepan dan terpercaya di Indonesia yang mampu memberikan dampak nyata bagi perkembangan bisnis.',
        'mission'      => 'Menghadirkan solusi digital yang inovatif dan berkualitas.',
    ]);
    $services   = $services ?? collect();
    $portfolios = $portfolios ?? collect();
    $teams      = $teams ?? collect();
@endphp



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
    <section id="home" style="
        position: relative;
        min-height: 100vh;
        background-image: url({{ asset('frontend/img/bg-img/awal.png') }});
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        overflow: hidden;
    ">
        <div style="
            position: absolute;
            inset: 0;
            background: linear-gradient(to right, rgba(8,15,35,0.93) 45%, rgba(8,15,35,0.45) 100%);
            z-index: 0;
        "></div>

        <div style="position: relative; z-index: 1; padding: 0 0 0 80px; width: 100%;">
            <div style="max-width: 560px;">

                {{-- Badge --}}
                <div style="
                    display: inline-block;
                    border: 1px solid rgba(255,255,255,0.28);
                    color: rgba(255,255,255,0.80);
                    font-size: 0.82rem;
                    padding: 6px 18px;
                    border-radius: 50px;
                    margin-bottom: 22px;
                    letter-spacing: 0.4px;
                ">
                    Selamat Datang di {{ $company->company_name ?? 'Techira Indonesia' }}
                </div>

                {{-- Heading --}}
                <h1 style="
                    color: #ffffff;
                    font-size: clamp(2rem, 3.2vw, 2.8rem);
                    font-weight: 700;
                    line-height: 1.25;
                    margin: 0 0 18px;
                ">
                    {{ $company->tagline ?? 'Mitra Solusi Digital untuk Bisnis Anda' }}
                </h1>

                {{-- Description --}}
                <p style="
                    color: rgba(255,255,255,0.68);
                    font-size: 1rem;
                    line-height: 1.75;
                    margin: 0 0 34px;
                ">
                    {{ $company->description ?? 'Kami berkomitmen menyediakan layanan teknologi yang inovatif dan terpercaya guna mendukung pertumbuhan dan transformasi bisnis Anda.' }}
                </p>

                {{-- Buttons --}}
                <div style="display: flex; gap: 14px; flex-wrap: wrap; margin-bottom: 48px;">
                    <a href="#services" style="
                        background: #F5C41A;
                        color: #111111;
                        padding: 13px 30px;
                        border-radius: 6px;
                        font-weight: 600;
                        font-size: 0.95rem;
                        text-decoration: none;
                        display: inline-block;
                    ">Lihat Layanan</a>
                    <a href="#about" style="
                        background: transparent;
                        color: #ffffff;
                        padding: 12px 30px;
                        border-radius: 6px;
                        border: 2px solid rgba(255,255,255,0.45);
                        font-weight: 600;
                        font-size: 0.95rem;
                        text-decoration: none;
                        display: inline-block;
                    ">Tentang Kami</a>
                </div>

                {{-- Stats --}}
                <div style="
                    display: flex;
                    align-items: center;
                    border-top: 1px solid rgba(255,255,255,0.13);
                    padding-top: 28px;
                    gap: 0;
                ">
                    <div style="padding-right: 28px;">
                        <strong style="display:block; font-size:1.9rem; font-weight:700; color:#F5C41A; line-height:1;">
                            {{ $services->count() }}+
                        </strong>
                        <span style="font-size:0.72rem; color:rgba(255,255,255,0.50); letter-spacing:1.8px; text-transform:uppercase; display:block; margin-top:6px;">
                            Layanan
                        </span>
                    </div>

                    <div style="width:1px; height:44px; background:rgba(255,255,255,0.18);"></div>

                    <div style="padding: 0 28px;">
                        <strong style="display:block; font-size:1.9rem; font-weight:700; color:#F5C41A; line-height:1;">
                            {{ $portfolios->count() }}+
                        </strong>
                        <span style="font-size:0.72rem; color:rgba(255,255,255,0.50); letter-spacing:1.8px; text-transform:uppercase; display:block; margin-top:6px;">
                            Portfolio
                        </span>
                    </div>

                    <div style="width:1px; height:44px; background:rgba(255,255,255,0.18);"></div>

                    <div style="padding-left: 28px;">
                        <strong style="display:block; font-size:1.9rem; font-weight:700; color:#F5C41A; line-height:1;">
                            {{ $teams->count() }}+
                        </strong>
                        <span style="font-size:0.72rem; color:rgba(255,255,255,0.50); letter-spacing:1.8px; text-transform:uppercase; display:block; margin-top:6px;">
                            Tim Profesional
                        </span>
                    </div>
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
                        <div class="ve-whyus-img-main bg-img" style="background-image:url({{ asset('frontend/img/bg-img/profilo.png') }});"></div>
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
                        <p>{{ $company->description ?? 'Techira Indonesia adalah perusahaan teknologi yang berfokus pada penyediaan solusi digital untuk membantu bisnis berkembang secara efisien dan modern. Kami menghadirkan layanan yang inovatif, terpercaya, dan dirancang untuk menjawab kebutuhan bisnis di era digital.' }}</p>

                        <div class="ve-checklist">
                            <div class="ve-check-item">
                                <i class="fa fa-eye"></i>
                                <div>
                                    <strong>Visi</strong>
                                    <p>{{ $company->vision ?? 'Menjadi perusahaan teknologi terdepan dan terpercaya di Indonesia yang mampu memberikan dampak nyata bagi perkembangan bisnis.' }}</p>
                                </div>
                            </div>
                            <div class="ve-check-item">
                                <i class="fa fa-flag"></i>
                                <div>
                                    <strong>Misi</strong>
                                    <p>{{ $company->mission ?? 'Menghadirkan solusi digital yang inovatif dan relevan dengan kebutuhan bisnis modern
Memberikan layanan yang profesional, berkualitas, dan berorientasi pada kepuasan klien
Membantu bisnis meningkatkan efisiensi dan produktivitas melalui teknologi' }}</p>
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
                            @if(str_starts_with($service->icon, 'fa') || str_starts_with($service->icon, 'icon'))
                                <i class="{{ $service->icon }}"></i>
                            @else
                                <img src="{{ asset('frontend/storage/' . $service->icon) }}" alt="{{ $service->name }}" style="width:40px;height:40px;object-fit:contain;">
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
                                    ? asset('storage/' . $portfolio->image)
                                    : asset('frontend/img/bg-img/10.jpg') }}
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
                                    ? asset('frontend/img/tim-img/' . $member->photo)
                                    : asset('frontend/img/bg-img/14.jpg') }}
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
    <section class="ve-cta-banner bg-img" style="background-image:url({{ asset('frontend/img/bg-img/awal.png') }});">
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
    <section id="contact" style="padding: 90px 0; background: #f4f6f9;">
        <div class="container">

            {{-- Section Header --}}
            <div style="text-align: center; margin-bottom: 56px;">
                <span style="
                    display: inline-block;
                    font-size: 0.75rem;
                    font-weight: 600;
                    letter-spacing: 2.5px;
                    text-transform: uppercase;
                    color: #F5C41A;
                    background: rgba(245,196,26,0.12);
                    padding: 6px 18px;
                    border-radius: 50px;
                    margin-bottom: 14px;
                ">Hubungi Kami</span>
                <h2 style="font-size: 2rem; font-weight: 700; color: #0f172a; margin: 0 0 12px;">
                    Kirimkan <span style="color: #F5C41A;">Pesan</span>
                </h2>
                <p style="font-size: 1rem; color: #64748b; max-width: 480px; margin: 0 auto; line-height: 1.7;">
                    Ada pertanyaan atau ingin bekerja sama? Kami siap mendengar Anda.
                </p>
            </div>

            {{-- Alert sukses --}}
            @if(session('success'))
            <div style="
                background: #d1fae5;
                color: #065f46;
                padding: 14px 20px;
                border-radius: 8px;
                max-width: 760px;
                margin: 0 auto 28px;
                font-size: 0.95rem;
                border-left: 4px solid #10b981;
            ">
                <i class="fa fa-check-circle"></i> {{ session('success') }}
            </div>
            @endif

            {{-- Alert error --}}
            @if($errors->any())
            <div style="
                background: #fee2e2;
                color: #991b1b;
                padding: 14px 20px;
                border-radius: 8px;
                max-width: 760px;
                margin: 0 auto 28px;
                font-size: 0.95rem;
                border-left: 4px solid #ef4444;
            ">
                @foreach($errors->all() as $error)
                    <div><i class="fa fa-exclamation-circle"></i> {{ $error }}</div>
                @endforeach
            </div>
            @endif

            {{-- Grid: Form + Info --}}
            <div style="
                display: grid;
                grid-template-columns: 1fr 420px;
                gap: 28px;
                max-width: 1000px;
                margin: 0 auto;
                align-items: start;
            ">

                {{-- Kolom Kiri: Form --}}
                <div style="
                    background: #ffffff;
                    border-radius: 16px;
                    border: 1px solid #e2e8f0;
                    padding: 40px;
                    box-shadow: 0 1px 3px rgba(0,0,0,0.06);
                ">
                    <h4 style="font-size: 1.2rem; font-weight: 700; color: #0f172a; margin: 0 0 28px;">
                        Form Kontak
                    </h4>

                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf

                        {{-- Nama --}}
                        <div style="margin-bottom: 20px;">
                            <label style="
                                display: block;
                                font-size: 0.85rem;
                                font-weight: 600;
                                color: #374151;
                                margin-bottom: 7px;
                                letter-spacing: 0.2px;
                            ">Nama Lengkap</label>
                            <input
                                type="text"
                                name="name"
                                value="{{ old('name') }}"
                                placeholder="Masukkan nama Anda"
                                required
                                style="
                                    width: 100%;
                                    padding: 12px 16px;
                                    border: 1.5px solid #e2e8f0;
                                    border-radius: 8px;
                                    font-size: 0.95rem;
                                    color: #0f172a;
                                    background: #f8fafc;
                                    outline: none;
                                    transition: border-color 0.2s;
                                    box-sizing: border-box;
                                "
                                onfocus="this.style.borderColor='#F5C41A'; this.style.background='#fff';"
                                onblur="this.style.borderColor='#e2e8f0'; this.style.background='#f8fafc';"
                            >
                        </div>

                        {{-- Email --}}
                        <div style="margin-bottom: 20px;">
                            <label style="
                                display: block;
                                font-size: 0.85rem;
                                font-weight: 600;
                                color: #374151;
                                margin-bottom: 7px;
                                letter-spacing: 0.2px;
                            ">Email</label>
                            <input
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="Masukkan email Anda"
                                required
                                style="
                                    width: 100%;
                                    padding: 12px 16px;
                                    border: 1.5px solid #e2e8f0;
                                    border-radius: 8px;
                                    font-size: 0.95rem;
                                    color: #0f172a;
                                    background: #f8fafc;
                                    outline: none;
                                    transition: border-color 0.2s;
                                    box-sizing: border-box;
                                "
                                onfocus="this.style.borderColor='#F5C41A'; this.style.background='#fff';"
                                onblur="this.style.borderColor='#e2e8f0'; this.style.background='#f8fafc';"
                            >
                        </div>

                        {{-- Pesan --}}
                        <div style="margin-bottom: 28px;">
                            <label style="
                                display: block;
                                font-size: 0.85rem;
                                font-weight: 600;
                                color: #374151;
                                margin-bottom: 7px;
                                letter-spacing: 0.2px;
                            ">Pesan</label>
                            <textarea
                                name="message"
                                rows="5"
                                placeholder="Tuliskan pesan Anda di sini..."
                                required
                                style="
                                    width: 100%;
                                    padding: 12px 16px;
                                    border: 1.5px solid #e2e8f0;
                                    border-radius: 8px;
                                    font-size: 0.95rem;
                                    color: #0f172a;
                                    background: #f8fafc;
                                    outline: none;
                                    resize: vertical;
                                    transition: border-color 0.2s;
                                    box-sizing: border-box;
                                    font-family: inherit;
                                "
                                onfocus="this.style.borderColor='#F5C41A'; this.style.background='#fff';"
                                onblur="this.style.borderColor='#e2e8f0'; this.style.background='#f8fafc';"
                            >{{ old('message') }}</textarea>
                        </div>

                        {{-- Submit --}}
                        <button type="submit" style="
                            width: 100%;
                            padding: 14px;
                            background: #F5C41A;
                            color: #111111;
                            border: none;
                            border-radius: 8px;
                            font-size: 1rem;
                            font-weight: 700;
                            cursor: pointer;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            gap: 8px;
                            letter-spacing: 0.2px;
                            transition: background 0.2s, transform 0.1s;
                        "
                        onmouseover="this.style.background='#e0b015';"
                        onmouseout="this.style.background='#F5C41A';"
                        onmousedown="this.style.transform='scale(0.98)';"
                        onmouseup="this.style.transform='scale(1)';"
                        >
                            <i class="fa fa-paper-plane"></i> Kirim Pesan
                        </button>
                    </form>
                </div>

                {{-- Kolom Kanan: Info Kontak --}}
                <div style="display: flex; flex-direction: column; gap: 20px;">

                    {{-- Card Info --}}
                    <div style="
                        background: #ffffff;
                        border-radius: 16px;
                        border: 1px solid #e2e8f0;
                        padding: 32px;
                        box-shadow: 0 1px 3px rgba(0,0,0,0.06);
                    ">
                        <h4 style="font-size: 1.1rem; font-weight: 700; color: #0f172a; margin: 0 0 24px;">
                            Informasi Kontak
                        </h4>

                        {{-- Lokasi --}}
                        <div style="display: flex; align-items: flex-start; gap: 14px; margin-bottom: 20px;">
                            <div style="
                                width: 42px; height: 42px; flex-shrink: 0;
                                background: rgba(245,196,26,0.12);
                                border-radius: 10px;
                                display: flex; align-items: center; justify-content: center;
                            ">
                                <i class="fa fa-map-marker" style="color: #F5C41A; font-size: 1.1rem;"></i>
                            </div>
                            <div>
                                <div style="font-size: 0.75rem; color: #94a3b8; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 3px;">Lokasi</div>
                                <div style="font-size: 0.95rem; color: #0f172a; font-weight: 500;">Indonesia</div>
                            </div>
                        </div>

                        {{-- Email --}}
                        <div style="display: flex; align-items: flex-start; gap: 14px; margin-bottom: 20px;">
                            <div style="
                                width: 42px; height: 42px; flex-shrink: 0;
                                background: rgba(245,196,26,0.12);
                                border-radius: 10px;
                                display: flex; align-items: center; justify-content: center;
                            ">
                                <i class="fa fa-envelope" style="color: #F5C41A; font-size: 1rem;"></i>
                            </div>
                            <div>
                                <div style="font-size: 0.75rem; color: #94a3b8; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 3px;">Email</div>
                                <div style="font-size: 0.95rem; color: #0f172a; font-weight: 500;">info@techira.id</div>
                            </div>
                        </div>

                        {{-- Jam --}}
                        <div style="display: flex; align-items: flex-start; gap: 14px;">
                            <div style="
                                width: 42px; height: 42px; flex-shrink: 0;
                                background: rgba(245,196,26,0.12);
                                border-radius: 10px;
                                display: flex; align-items: center; justify-content: center;
                            ">
                                <i class="fa fa-clock-o" style="color: #F5C41A; font-size: 1rem;"></i>
                            </div>
                            <div>
                                <div style="font-size: 0.75rem; color: #94a3b8; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 3px;">Jam Operasional</div>
                                <div style="font-size: 0.95rem; color: #0f172a; font-weight: 500;">Senin–Jumat, 09.00 – 17.00 WIB</div>
                            </div>
                        </div>
                    </div>

                    {{-- Card Sosial --}}
                    <div style="
                        background: #ffffff;
                        border-radius: 16px;
                        border: 1px solid #e2e8f0;
                        padding: 28px 32px;
                        box-shadow: 0 1px 3px rgba(0,0,0,0.06);
                    ">
                        <h5 style="font-size: 1rem; font-weight: 700; color: #0f172a; margin: 0 0 16px;">
                            Ikuti Kami
                        </h5>
                        <div style="display: flex; gap: 10px;">
                            <a href="https://facebook.com/aldisaefulnizar" target="_blank" style="
                                width: 40px; height: 40px;
                                border-radius: 10px;
                                border: 1.5px solid #e2e8f0;
                                background: #f8fafc;
                                display: flex; align-items: center; justify-content: center;
                                color: #64748b;
                                text-decoration: none;
                                font-size: 0.9rem;
                                transition: background 0.2s;
                            " onmouseover="this.style.background='#F5C41A'; this.style.color='#111';"
                               onmouseout="this.style.background='#f8fafc'; this.style.color='#64748b';">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="https://youtube.com/@jamet1572" target="_blank" style="
                                width: 40px; height: 40px;
                                border-radius: 10px;
                                border: 1.5px solid #e2e8f0;
                                background: #f8fafc;
                                display: flex; align-items: center; justify-content: center;
                                color: #64748b;
                                text-decoration: none;
                                font-size: 0.9rem;
                            " onmouseover="this.style.background='#F5C41A'; this.style.color='#111';"
                               onmouseout="this.style.background='#f8fafc'; this.style.color='#64748b';">
                                <i class="fa fa-youtube"></i>
                            </a>
                            <a href="https://instagram.com/aldsplnzr" target="_blank" style="
                                width: 40px; height: 40px;
                                border-radius: 10px;
                                border: 1.5px solid #e2e8f0;
                                background: #f8fafc;
                                display: flex; align-items: center; justify-content: center;
                                color: #64748b;
                                text-decoration: none;
                                font-size: 0.9rem;
                            " onmouseover="this.style.background='#F5C41A'; this.style.color='#111';"
                               onmouseout="this.style.background='#f8fafc'; this.style.color='#64748b';">
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a href="https://tiktok.com/@aldyysn3" target="_blank" style="
                                width: 40px; height: 40px;
                                border-radius: 10px;
                                border: 1.5px solid #e2e8f0;
                                background: #f8fafc;
                                display: flex; align-items: center; justify-content: center;
                                color: #64748b;
                                text-decoration: none;
                                font-size: 0.9rem;
                            " onmouseover="this.style.background='#F5C41A'; this.style.color='#111';"
                               onmouseout="this.style.background='#f8fafc'; this.style.color='#64748b';">
                                <i class="fa fa-tiktok"></i>
                            </a>
                        </div>
                    </div>

                </div>{{-- End kolom kanan --}}
            </div>{{-- End grid --}}

            {{-- Responsive CSS untuk mobile --}}
            <style>
                @media (max-width: 768px) {
                    #contact > .container > div[style*="grid-template-columns"] {
                        grid-template-columns: 1fr !important;
                    }
                }
            </style>

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
                            <a href="https://facebook.com/aldisaefulnizar" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://tiktok.com/@aldyysn3" target="_blank"><i class="fa fa-tiktok"></i></a>
                            <a href="https://youtube.com/@jamet1572" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="https://instagram.com/aldsplnzr" target="_blank"><i class="fa fa-instagram"></i></a>
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