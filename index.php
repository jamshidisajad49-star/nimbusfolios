<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nimbus Folios - Expert Document Management & Archiving</title>
  <meta name="description" content="Nimbus Folios offers bespoke archival solutions, secure climate-controlled data management, and specialized meteorological data archiving.">
  <link rel="icon" href="favicon.ico">
  <script src="https://cdn.tailwindcss.com?v=3.2.0"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700&family=Playfair+Display:wght@700&display=swap');
    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      color: rgb(55 65 81); /* primary color for text */
    }
    h1, h2, h3, h4, h5, h6 {
      font-family: 'Playfair Display', serif;
      font-weight: 700;
      color: rgb(31 41 55); /* primaryDark color for headings */
    }
    .btn-gradient {
      background: linear-gradient(135deg, rgb(100 116 139), rgb(71 85 105));
      color: white;
      border-radius: 24px;
      padding: 12px 24px;
      transition: all 0.3s ease;
    }
    .btn-gradient:hover {
      opacity: 0.9;
      transform: translateY(-2px);
    }
    .glassmorphism {
      background-color: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }
    .card-hover-effect {
      transition: background-color 0.3s ease, transform 0.3s ease;
    }
    .card-hover-effect:hover {
      background-color: rgba(255, 255, 255, 0.2);
      transform: translateY(-5px);
    }
    .section-spacing {
      padding-top: 48px;
      padding-bottom: 48px;
    }
    .icon-container {
      width: 48px;
      height: 48px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background-color: rgb(243 244 246);
      border-radius: 0px; /* square */
    }
    .zoom-effect {
      transition: transform 0.3s ease-in-out;
    }
    .zoom-effect:hover {
      transform: scale(1.03);
    }
    /* Simple fade-in for sections on scroll */
    .fade-in-section {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }
    .fade-in-section.is-visible {
      opacity: 1;
      transform: translateY(0);
    }
  </style>
</head>
<body class="bg-white text-gray-700">
  <header class="bg-white shadow-sm sticky top-0 z-50">
    <nav class="container mx-auto px-6 py-4 flex items-center justify-between">
      <div class="flex items-center">
        <a href="/" class="text-2xl font-bold text-gray-900">Nimbus Folios</a>
      </div>
      <div class="hidden md:flex items-center space-x-8">
        <a href="#expertise" class="text-gray-600 hover:text-gray-900 transition-colors duration-200">Expertise</a>
        <a href="#services" class="text-gray-600 hover:text-gray-900 transition-colors duration-200">Services</a>
        <a href="#meteorological" class="text-gray-600 hover:text-gray-900 transition-colors duration-200">Meteorological Archive</a>
        <a href="#facility" class="text-gray-600 hover:text-gray-900 transition-colors duration-200">Facility</a>
        <a href="#contact" class="btn-gradient">Client Portal</a>
      </div>
      <div class="md:hidden flex items-center">
        <button id="mobile-menu-button" class="text-gray-600 hover:text-gray-900 focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </nav>
    <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg py-4">
      <a href="#expertise" class="block px-6 py-2 text-gray-700 hover:bg-gray-100">Expertise</a>
      <a href="#services" class="block px-6 py-2 text-gray-700 hover:bg-gray-100">Services</a>
      <a href="#meteorological" class="block px-6 py-2 text-gray-700 hover:bg-gray-100">Meteorological Archive</a>
      <a href="#facility" class="block px-6 py-2 text-gray-700 hover:bg-gray-100">Facility</a>
      <a href="#contact" class="block px-6 py-2 text-gray-700 hover:bg-gray-100 btn-gradient mx-6 my-2 text-center">Client Portal</a>
    </div>
  </header>
<main>
    <section id="hero" class="bg-white-clean section-spacing flex items-center justify-center min-h-[600px] py-16">
      <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
        <div class="text-center md:text-left fade-in-section">
          <h1 class="text-5xl font-playfair-display leading-tight mb-4 text-gray-900">Preserving the Past. Safeguarding the Future.</h1>
          <p class="text-xl text-gray-600 mb-8 max-w-lg mx-auto md:mx-0 leading-relaxed">Bespoke archival solutions and secure, climate-controlled data management for institutional, corporate, and specialized meteorological records.</p>
          <a href="#services" class="btn-gradient inline-block zoom-effect">Explore Our Vault</a>
        </div>
        <div class="flex justify-center md:justify-end fade-in-section">
          <img src="images/hero-archiving-facility.jpeg" alt="Climate-controlled storage vault at Nimbus Folios" width="640" height="704" class="max-w-full h-auto rounded-3xl shadow-xl zoom-effect">
        </div>
      </div>
    </section>

    <section id="services" class="section-spacing bg-gray-50 py-16">
      <div class="container mx-auto px-6">
        <div class="text-center mb-12 fade-in-section">
          <h2 class="text-4xl font-playfair-display text-gray-900 mb-4">Comprehensive Management & Archiving</h2>
          <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">From physical preservation to digital indexing, we provide end-to-end security for your most critical assets. Our meticulous processes ensure integrity and accessibility for generations.</p>
        </div>
        <div class="grid md:grid-rows-[minmax(0,auto)_minmax(0,auto)] md:grid-cols-3 gap-8 justify-center items-stretch">
          <div class="glassmorphism p-8 rounded-3xl shadow-lg card-hover-effect col-span-full md:col-span-2 md:row-span-2 flex flex-col md:flex-row items-center gap-6 fade-in-section">
            <div class="md:w-1/2">
              <div class="icon-container mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cloud text-gray-700">
                  <path d="M18 10h-1.26A8 8 0 0 0 7 9c-6.83 0-6 4-6 4"></path>
                  <path d="M10 20.27c2.25.92 4.75.92 7 0"></path>
                  <path d="M14 6h.01"></path>
                  <path d="M10 12z"></path>
                  <path d="M10 16h-.01"></path>
                  <path d="M18 16h.01"></path>
                  <path d="M14 20h.01"></path>
                  <circle cx="12" cy="12" r="10"></circle>
                </svg>
              </div>
              <h3 class="text-2xl font-playfair-display text-gray-900 mb-4">Specialized Meteorological Consulting</h3>
              <p class="text-gray-700 leading-relaxed">Our flagship service. We evaluate, index, and climate-seal historical weather logs, barographs, and climate datasets ensuring zero degradation. This often includes fragile parchment, delicate photographic plates, and early magnetic tape recordings, all handled with utmost precision.</p>
            </div>
            <div class="md:w-1/2">
              <img src="images/meteorological-data-indexing.jpeg" alt="Indexing meteorological records" width="768" height="512" class="rounded-2xl shadow-md zoom-effect">
            </div>
          </div>

          <div class="glassmorphism p-8 rounded-3xl shadow-lg card-hover-effect flex flex-col justify-between fade-in-section">
            <div>
              <div class="icon-container mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-camera text-gray-700">
                  <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
                  <circle cx="12" cy="13" r="4"></circle>
                </svg>
              </div>
              <h3 class="text-2xl font-playfair-display text-gray-900 mb-4">Digital Scanning & OCR</h3>
              <p class="text-gray-700 leading-relaxed">High-fidelity document scanning, ensuring every detail is captured. Coupled with advanced optical character recognition (OCR) for secure, searchable, and accessible digital indexing of all paper-based archives.</p>
            </div>
          </div>

          <div class="glassmorphism p-8 rounded-3xl shadow-lg card-hover-effect flex flex-col justify-between fade-in-section">
            <div>
              <div class="icon-container mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock text-gray-700">
                  <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                  <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                </svg>
              </div>
              <h3 class="text-2xl font-playfair-display text-gray-900 mb-4">Secure Physical Storage</h3>
              <p class="text-gray-700 leading-relaxed">Our secured New York facility employs strict chain-of-custody tracking. Every box, every document, is accounted for from arrival to retrieval, ensuring maximum security and compliance for sensitive documents and data.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="facility" class="section-spacing py-16 bg-white">
      <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
        <div class="fade-in-section">
          <img src="images/climate-bunker-sensors.jpeg" alt="Advanced environmental sensors inside archiving facility" width="576" height="576" class="max-w-full h-auto rounded-3xl shadow-xl zoom-effect">
        </div>
        <div class="text-center md:text-left fade-in-section">
          <p class="text-sm font-semibold uppercase text-gray-500 mb-2">Our World-Class Facility</p>
          <h2 class="text-4xl font-playfair-display text-gray-900 mb-6 leading-tight">Engineered for Sensitive Materials</h2>
          <p class="text-lg text-gray-700 mb-8 leading-relaxed">Located at 1088 Bushwick Avenue, New York, our state-of-the-art facility features strict temperature baselines, hospital-grade HEPA filtration, and advanced humidity control systems designed explicitly for the preservation of delicate historical and meteorological parchment, microfiche, and magnetic tape. We safeguard your invaluable records against all environmental threats.</p>
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <div class="p-6 bg-gray-50 rounded-2xl shadow-sm text-center">
              <p class="text-4xl font-bold text-gray-900">&lt; ±1°C</p>
              <p class="text-gray-600">Temperature Variance</p>
            </div>
            <div class="p-6 bg-gray-50 rounded-2xl shadow-sm text-center">
              <p class="text-4xl font-bold text-gray-900">45%</p>
              <p class="text-gray-600">Relative Humidity</p>
            </div>
            <div class="p-6 bg-gray-50 rounded-2xl shadow-sm text-center">
              <p class="text-4xl font-bold text-gray-900">24/7/365</p>
              <p class="text-gray-600">Security Monitoring</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="testimonials" class="section-spacing bg-gray-100 py-16">
      <div class="container mx-auto px-6 text-center fade-in-section">
        <h2 class="text-4xl font-playfair-display text-gray-900 mb-8">Institutional Trust</h2>
        <div class="max-w-3xl mx-auto bg-white p-8 md:p-12 rounded-3xl shadow-xl relative zoom-effect">
          <svg class="w-16 h-16 text-gray-300 absolute top-4 left-4 transform -translate-x-1/2 -translate-y-1/2 md:top-8 md:left-8" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M13.627 0L10.375 10.375L20.75 10.375L17.5 0L13.627 0ZM0 0L3.875 10.375L14.25 10.375L10.375 0L0 0Z"></path>
          </svg>
          <p class="text-2xl md:text-3xl font-playfair-display italic text-gray-800 leading-snug mb-8">"Nimbus Folios engineered a bespoke archival pipeline for our century-old climate observation logs. Their attention to humidity tolerances and metadata indexing is fundamentally unmatched in the archiving sector."</p>
          <p class="text-xl font-semibold text-gray-900">- Dr. Aris Thorne</p>
          <p class="text-md text-gray-600">Director of Historical Climatology, Institute for Paleoclimatic Research</p>
        </div>
      </div>
    </section>
  </main>
<footer id="contact" class="bg-gray-800 text-white section-spacing pt-16 pb-8">
    <div class="container mx-auto px-6 grid md:grid-cols-3 gap-12">
      <div class="col-span-full md:col-span-1 fade-in-section">
        <h3 class="text-3xl font-playfair-display text-white mb-4">Nimbus Folios</h3>
        <p class="text-gray-300 mb-6 leading-relaxed">The premiere destination for sophisticated document management and specialized meteorological data archiving. We secure history for the future.</p>
        <p class="text-gray-300 mb-2">1088 Bushwick Avenue, New York, NY 11221, USA</p>
        <p class="text-gray-300 mb-2">Phone: <a href="tel:+14724617687" class="hover:text-white transition-colors duration-200">+1 (472) 461-7687</a></p>
        <p class="text-gray-300">Email: <a href="mailto:info@<?php echo $_SERVER['HTTP_HOST']; ?>" class="hover:text-white transition-colors duration-200">info@<?php echo $_SERVER['HTTP_HOST']; ?></a></p>
      </div>

      <div class="col-span-full md:col-span-2 fade-in-section">
        <h3 class="text-3xl font-playfair-display text-white mb-6">Request a Consultation</h3>
        <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div>
            <label for="name" class="block text-gray-300 text-sm font-bold mb-2">Name</label>
            <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-gray-100" placeholder="Your Name" required>
          </div>
          <div>
            <label for="company" class="block text-gray-300 text-sm font-bold mb-2">Institution/Company</label>
            <input type="text" id="company" name="company" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-gray-100" placeholder="Institution or Company Name" required>
          </div>
          <div class="md:col-span-2">
            <label for="email" class="block text-gray-300 text-sm font-bold mb-2">Email</label>
            <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-gray-100" placeholder="Your Email Address" required>
          </div>
          <div class="md:col-span-2">
            <label for="needs" class="block text-gray-300 text-sm font-bold mb-2">Archival Needs</label>
            <textarea id="needs" name="needs" rows="5" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-gray-100" placeholder="Describe your archival requirements here"></textarea>
          </div>
          <div class="md:col-span-2 flex justify-start">
            <button type="submit" class="btn-gradient zoom-effect">Initiate Secure Request</button>
          </div>
        </form>
      </div>
    </div>
    <div class="container mx-auto px-6 mt-12 pt-8 border-t border-gray-700 text-sm text-gray-400 flex flex-col md:flex-row justify-between items-center text-center md:text-left">
      <p class="mb-4 md:mb-0">© 2024 Nimbus Folios. All rights reserved.</p>
      <div class="space-x-4">
        <a href="./privacy.html" class="hover:text-white transition-colors duration-200">Privacy Policy</a>
        <a href="./tos.html" class="hover:text-white transition-colors duration-200">Terms of Service</a>
      </div>
    </div>
  </footer>

  <div id="cookie-banner" class="fixed bottom-0 left-0 right-0 bg-gray-900 text-white p-4 flex items-center justify-between text-sm z-[100] hidden">
    <p>We use cookies to ensure you get the best experience on our website. By continuing, you agree to our use of cookies.</p>
    <button id="accept-cookies" class="bg-gray-700 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-full transition-colors duration-200">Accept</button>
  </div>

  <script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
      document.getElementById('mobile-menu').classList.toggle('hidden');
    });

    // Fade-in sections on scroll
    const fadeInSections = document.querySelectorAll('.fade-in-section');
    const observerOptions = {
      root: null,
      rootMargin: '0px',
      threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    fadeInSections.forEach(section => {
      observer.observe(section);
    });

    // Cookie consent
    const cookieBanner = document.getElementById('cookie-banner');
    const acceptCookiesButton = document.getElementById('accept-cookies');
    const cookieName = 'consent_Nimbus Folios_cookies'; // Unique cookie name prefix

    function setCookie(name, value, days) {
      let expires = "";
      if (days) {
        let date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
      }
      document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    function getCookie(name) {
      let nameEQ = name + "=";
      let ca = document.cookie.split(';');
      for(let i=0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
      }
      return null;
    }

    if (!getCookie(cookieName)) {
      cookieBanner.classList.remove('hidden');
    }

    acceptCookiesButton.addEventListener('click', () => {
      setCookie(cookieName, 'accepted', 365);
      cookieBanner.classList.add('hidden');
    });
  </script>
</body>
</html>