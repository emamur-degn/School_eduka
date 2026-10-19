<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eduka - Student Portal & Home</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- FontAwesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: {
              amber: '#F5A623',
              darkGreen: '#0b3930',
              accentGreen: '#008a60',
              teal: '#0D7A73',
              navyDark: '#072146',
              navyDeep: '#051833',
              grayBg: '#F8F9FA',
              lightBg: '#EEF7F6'
            }
          },
          fontFamily: {
            sans: ['"Plus Jakarta Sans"', 'sans-serif'],
          }
        }
      }
    }
  </script>
  <style>
    .text-outline-num {
      -webkit-text-stroke: 1.5px #008a60;
      color: transparent;
    }
    @keyframes pulse-ring {
      0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(245, 166, 35, 0.7); }
      70% { transform: scale(1.1); box-shadow: 0 0 0 20px rgba(245, 166, 35, 0); }
      100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(245, 166, 35, 0); }
    }
    .pulse-btn { animation: pulse-ring 2s infinite; }
  </style>
</head>
<body class="font-sans antialiased text-gray-800 bg-white">

  <!-- ================= TOP BAR ================= -->
  <header class="w-full">
    <div class="bg-brand-darkGreen border-t-4 border-brand-amber text-white text-xs py-2.5 px-4">
      <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-2">
        <div class="flex items-center space-x-3">
          <span class="text-gray-300 font-medium">Follow Us:</span>
          <a href="#" class="hover:text-brand-amber transition-colors"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="hover:text-brand-amber transition-colors"><i class="fab fa-instagram"></i></a>
          <a href="#" class="hover:text-brand-amber transition-colors"><i class="fab fa-youtube"></i></a>
          <a href="#" class="hover:text-brand-amber transition-colors"><i class="fab fa-whatsapp"></i></a>
        </div>
        <div class="flex flex-wrap items-center justify-center gap-4 text-gray-200">
          <div class="flex items-center space-x-1.5">
            <i class="fas fa-location-dot text-brand-amber"></i>
            <span>25/B Milford Road, New York</span>
          </div>
          <div class="flex items-center space-x-1.5">
            <i class="fas fa-envelope text-brand-amber"></i>
            <a href="mailto:info@example.com" class="hover:underline">info@example.com</a>
          </div>
          <div class="flex items-center space-x-1.5">
            <i class="fas fa-phone text-brand-amber"></i>
            <a href="tel:+21236547890" class="hover:underline">+2 123 654 7890</a>
          </div>
        </div>
      </div>
    </div>

    <!-- ================= MAIN NAVIGATION ================= -->
    <nav class="bg-white shadow-sm relative z-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
          
          <!-- Brand Logo -->
          <a href="{{ url('/') }}" class="flex items-center space-x-2">
            <div class="text-brand-amber text-3xl font-black tracking-tight flex items-center gap-1">
              <i class="fas fa-graduation-cap text-3xl"></i>
              <span class="text-brand-amber">eduka</span>
            </div>
          </a>

          <!-- Desktop Menu -->
          <div class="hidden lg:flex items-center space-x-7 font-semibold text-sm text-gray-800">
            <a href="{{ url('/') }}" class="text-brand-amber flex items-center gap-1">Home</a>
            <a href="{{ url('/dashboard') }}" class="hover:text-brand-amber transition flex items-center gap-1 text-brand-accentGreen font-bold"><i class="fas fa-chart-line"></i> Dashboard</a>
            <a href="#" class="hover:text-brand-amber transition flex items-center gap-1">Courses <i class="fas fa-chevron-down text-[10px]"></i></a>
            <a href="#" class="hover:text-brand-amber transition flex items-center gap-1">Academics <i class="fas fa-chevron-down text-[10px]"></i></a>
            <a href="#" class="hover:text-brand-amber transition flex items-center gap-1">Pages <i class="fas fa-chevron-down text-[10px]"></i></a>
            <a href="#" class="hover:text-brand-amber transition flex items-center gap-1">Admissions <i class="fas fa-chevron-down text-[10px]"></i></a>
            <a href="#" class="hover:text-brand-amber transition">Contact Us</a>
          </div>

          <!-- Right Actions -->
          <div class="hidden lg:flex items-center space-x-5">
            <a href="{{ url('/dashboard') }}" class="bg-brand-amber hover:bg-yellow-500 text-white text-xs font-bold px-6 py-3.5 rounded-full uppercase tracking-wider shadow-md transition flex items-center gap-2">
              <i class="fas fa-user-graduate text-xs"></i> Student Portal
            </a>
          </div>

          <!-- Mobile Hamburger Button -->
          <div class="flex lg:hidden items-center space-x-4">
            <button id="mobile-menu-btn" class="text-gray-800 focus:outline-none p-2 text-2xl">
              <i class="fas fa-bars"></i>
            </button>
          </div>

        </div>
      </div>

      <!-- Mobile Dropdown Menu -->
      <div id="mobile-menu" class="hidden lg:hidden bg-white border-b border-gray-200 px-4 pt-2 pb-6 space-y-3 font-semibold text-gray-800">
        <a href="{{ url('/') }}" class="block py-2 text-brand-amber border-b border-gray-100">Home</a>
        <a href="{{ url('/dashboard') }}" class="block py-2 text-brand-accentGreen border-b border-gray-100">Dashboard Portal</a>
        <a href="#" class="block py-2 hover:text-brand-amber border-b border-gray-100">Courses</a>
        <a href="#" class="block py-2 hover:text-brand-amber border-b border-gray-100">Academics</a>
        <a href="#" class="block py-2 hover:text-brand-amber border-b border-gray-100">Admissions</a>
        <a href="#" class="block py-2 hover:text-brand-amber">Contact Us</a>
      </div>
    </nav>
  </header>

  <!-- ================= HERO SLIDER SECTION ================= -->
  <section class="relative bg-brand-darkGreen min-h-[520px] md:min-h-[620px] flex items-center overflow-hidden">
    <div class="absolute inset-0 z-0">
      <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=1920" 
           alt="Students learning" 
           class="w-full h-full object-cover opacity-25">
      <div class="absolute inset-0 bg-gradient-to-r from-brand-darkGreen/90 via-brand-darkGreen/75 to-brand-darkGreen/60"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full pt-10 pb-28 md:pb-36">
      <div class="max-w-2xl">
        <div class="inline-flex items-center space-x-2 text-brand-amber uppercase tracking-widest text-xs md:text-sm font-bold mb-4">
          <i class="fas fa-graduation-cap"></i>
          <span>Welcome to Eduka Student Portal!</span>
        </div>

        <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold text-white leading-tight md:leading-none mb-6">
          Start Your Beautiful<br class="hidden sm:block" />
          And <span class="text-brand-amber">Bright</span> Future
        </h1>

        <p class="text-gray-300 text-xs sm:text-sm md:text-base leading-relaxed mb-8 max-w-xl">
          Access your student dashboard, track your academic progress, check attendance, monitor fee statuses, and manage your campus activities all in one place.
        </p>

        <div class="flex flex-wrap items-center gap-4">
          <a href="{{ url('/dashboard') }}" class="bg-brand-amber hover:bg-yellow-500 text-white font-bold text-xs sm:text-sm px-7 py-3.5 rounded-full flex items-center gap-2 transition shadow-lg">
            Go To Dashboard <i class="fas fa-arrow-right text-xs"></i>
          </a>
          <a href="#courses" class="bg-white hover:bg-gray-100 text-gray-900 font-bold text-xs sm:text-sm px-7 py-3.5 rounded-full flex items-center gap-2 transition shadow-lg">
            Explore Courses <i class="fas fa-arrow-right text-xs"></i>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= OVERLAPPING FEATURE CARDS ================= -->
  <section class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-16 md:-mt-24 pb-20">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
      <div class="bg-white p-6 md:p-7 rounded-2xl shadow-xl hover:-translate-y-2 transition-all duration-300 border border-gray-100">
        <div class="flex items-center justify-between mb-5">
          <div class="w-14 h-14 rounded-full bg-emerald-50 text-brand-accentGreen flex items-center justify-center text-2xl">
            <i class="fas fa-hand-holding-dollar"></i>
          </div>
          <span class="text-3xl md:text-4xl font-extrabold text-outline-num">01</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Scholarship Facility</h3>
        <p class="text-gray-500 text-xs leading-relaxed">Easy fee structures and scholarship options available for brilliant students.</p>
      </div>

      <div class="bg-white p-6 md:p-7 rounded-2xl shadow-xl hover:-translate-y-2 transition-all duration-300 border border-gray-100">
        <div class="flex items-center justify-between mb-5">
          <div class="w-14 h-14 rounded-full bg-emerald-50 text-brand-accentGreen flex items-center justify-center text-2xl">
            <i class="fas fa-chalkboard-user"></i>
          </div>
          <span class="text-3xl md:text-4xl font-extrabold text-outline-num">02</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Skilled Lecturers</h3>
        <p class="text-gray-500 text-xs leading-relaxed">Learn from industry experts with extensive practical academic experience.</p>
      </div>

      <div class="bg-white p-6 md:p-7 rounded-2xl shadow-xl hover:-translate-y-2 transition-all duration-300 border border-gray-100">
        <div class="flex items-center justify-between mb-5">
          <div class="w-14 h-14 rounded-full bg-emerald-50 text-brand-accentGreen flex items-center justify-center text-2xl">
            <i class="fas fa-book-open-reader"></i>
          </div>
          <span class="text-3xl md:text-4xl font-extrabold text-outline-num">03</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Book Library Facility</h3>
        <p class="text-gray-500 text-xs leading-relaxed">Access physical and digital libraries with thousands of research books and journals.</p>
      </div>

      <div class="bg-white p-6 md:p-7 rounded-2xl shadow-xl hover:-translate-y-2 transition-all duration-300 border border-gray-100">
        <div class="flex items-center justify-between mb-5">
          <div class="w-14 h-14 rounded-full bg-emerald-50 text-brand-accentGreen flex items-center justify-center text-2xl">
            <i class="fas fa-tags"></i>
          </div>
          <span class="text-3xl md:text-4xl font-extrabold text-outline-num">04</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Affordable Price</h3>
        <p class="text-gray-500 text-xs leading-relaxed">Quality education delivered with flexible semester payment installments.</p>
      </div>
    </div>
  </section>

  <!-- ================= COURSES SECTION ================= -->
  <section id="courses" class="bg-gray-50 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-2xl mx-auto mb-14">
        <div class="inline-flex items-center justify-center gap-2 text-brand-amber font-bold uppercase tracking-widest text-xs md:text-sm mb-2">
          <i class="fas fa-graduation-cap"></i>
          <span>Our Courses</span>
        </div>
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-black text-gray-900 tracking-tight">
          Explore Our Academic <span class="text-brand-amber">Programs</span>
        </h2>
        <p class="text-gray-500 text-xs sm:text-sm mt-3 leading-relaxed">
          Choose from a wide variety of accredited professional majors designed for career success.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Course 1 -->
        <div class="bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col group">
          <div class="relative p-3 pb-0">
            <div class="overflow-hidden rounded-2xl h-52 relative">
              <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=600&q=80" alt="Health" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
              <span class="absolute top-3 right-3 bg-brand-amber text-white text-[11px] font-bold px-3 py-1 rounded-md">Health</span>
            </div>
          </div>
          <div class="p-6 flex-1 flex flex-col justify-between">
            <div>
              <div class="flex items-center justify-between text-xs text-gray-500 mb-3">
                <span class="font-medium text-brand-amber"><i class="fas fa-book-open"></i> 70 Lessons</span>
                <div class="flex text-brand-amber text-xs gap-0.5"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
              </div>
              <h3 class="text-lg font-bold text-gray-900 group-hover:text-brand-amber transition-colors mb-2">Humanities And Health</h3>
              <p class="text-gray-500 text-xs leading-relaxed line-clamp-3 mb-6">Comprehensive curriculum exploring public health, medical ethics, and social wellbeing.</p>
            </div>
            <div class="pt-4 border-t border-gray-100 flex items-center justify-between text-xs">
              <span class="font-medium text-gray-500"><i class="fas fa-users text-brand-amber"></i> 80 Seats</span>
              <span class="bg-brand-amber text-white font-extrabold text-xs px-3.5 py-1.5 rounded-md">$750</span>
            </div>
          </div>
        </div>

        <!-- Course 2 -->
        <div class="bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col group">
          <div class="relative p-3 pb-0">
            <div class="overflow-hidden rounded-2xl h-52 relative">
              <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=600&q=80" alt="Finance" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
              <span class="absolute top-3 right-3 bg-brand-amber text-white text-[11px] font-bold px-3 py-1 rounded-md">Finance</span>
            </div>
          </div>
          <div class="p-6 flex-1 flex flex-col justify-between">
            <div>
              <div class="flex items-center justify-between text-xs text-gray-500 mb-3">
                <span class="font-medium text-brand-amber"><i class="fas fa-book-open"></i> 70 Lessons</span>
                <div class="flex text-brand-amber text-xs gap-0.5"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
              </div>
              <h3 class="text-lg font-bold text-gray-900 group-hover:text-brand-amber transition-colors mb-2">Accounting And Finance</h3>
              <p class="text-gray-500 text-xs leading-relaxed line-clamp-3 mb-6">Master corporate finance, auditing, taxation, and modern economic frameworks.</p>
            </div>
            <div class="pt-4 border-t border-gray-100 flex items-center justify-between text-xs">
              <span class="font-medium text-gray-500"><i class="fas fa-users text-brand-amber"></i> 80 Seats</span>
              <span class="bg-brand-amber text-white font-extrabold text-xs px-3.5 py-1.5 rounded-md">$750</span>
            </div>
          </div>
        </div>

        <!-- Course 3 -->
        <div class="bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col group">
          <div class="relative p-3 pb-0">
            <div class="overflow-hidden rounded-2xl h-52 relative">
              <img src="https://images.unsplash.com/photo-1531545514256-b1400bc00f31?auto=format&fit=crop&w=600&q=80" alt="Science" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
              <span class="absolute top-3 right-3 bg-brand-amber text-white text-[11px] font-bold px-3 py-1 rounded-md">Science</span>
            </div>
          </div>
          <div class="p-6 flex-1 flex flex-col justify-between">
            <div>
              <div class="flex items-center justify-between text-xs text-gray-500 mb-3">
                <span class="font-medium text-brand-amber"><i class="fas fa-book-open"></i> 70 Lessons</span>
                <div class="flex text-brand-amber text-xs gap-0.5"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
              </div>
              <h3 class="text-lg font-bold text-gray-900 group-hover:text-brand-amber transition-colors mb-2">Computer Science & IT</h3>
              <p class="text-gray-500 text-xs leading-relaxed line-clamp-3 mb-6">Cutting-edge software development, artificial intelligence, and database management.</p>
            </div>
            <div class="pt-4 border-t border-gray-100 flex items-center justify-between text-xs">
              <span class="font-medium text-gray-500"><i class="fas fa-users text-brand-amber"></i> 80 Seats</span>
              <span class="bg-brand-amber text-white font-extrabold text-xs px-3.5 py-1.5 rounded-md">$750</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= FOOTER SECTION ================= -->
  <footer class="bg-brand-navyDark text-white pt-16 pb-8 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-8 pb-12 border-b border-gray-800">
        <div class="lg:col-span-4 space-y-5">
          <a href="{{ url('/') }}" class="flex items-center space-x-2">
            <div class="text-brand-amber text-3xl font-black tracking-tight flex items-center gap-1">
              <i class="fas fa-graduation-cap text-3xl"></i>
              <span class="text-brand-amber">eduka</span>
            </div>
          </a>
          <p class="text-gray-300 text-xs leading-relaxed max-w-sm">
            Empowering students with smart digital campus tools and exceptional higher education services.
          </p>
        </div>

        <div class="lg:col-span-4 space-y-4">
          <h3 class="text-base font-bold text-white relative inline-block pb-1">Quick Links</h3>
          <ul class="space-y-2.5 text-xs text-gray-300">
            <li><a href="{{ url('/') }}" class="hover:text-brand-amber transition">Home</a></li>
            <li><a href="{{ url('/dashboard') }}" class="hover:text-brand-amber transition">Student Dashboard</a></li>
            <li><a href="#" class="hover:text-brand-amber transition">Academics & Courses</a></li>
            <li><a href="#" class="hover:text-brand-amber transition">Contact Support</a></li>
          </ul>
        </div>

        <div class="lg:col-span-4 space-y-4">
          <h3 class="text-base font-bold text-white relative inline-block pb-1">Portal Access</h3>
          <p class="text-gray-300 text-xs leading-relaxed">Quickly navigate to your dedicated student panel.</p>
          <a href="{{ url('/dashboard') }}" class="inline-block bg-brand-amber hover:bg-yellow-500 text-white font-extrabold text-xs py-3 px-6 rounded-full uppercase tracking-wider shadow-md transition">
            Open Dashboard &rarr;
          </a>
        </div>
      </div>

      <div class="pt-8 flex flex-col sm:flex-row justify-between items-center gap-4 text-xs text-gray-300">
        <p>© Copyright 2026 <span class="text-brand-amber font-bold">Eduka</span> All Rights Reserved.</p>
      </div>
    </div>
  </footer>

  <script>
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
</body>
</html>