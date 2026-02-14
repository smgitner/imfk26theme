import './style.css'

document.querySelector('#app').innerHTML = `
  <div class="min-h-screen bg-white">

    <!-- Header -->
    <header class="w-full max-w-[1200px] mx-auto">

      <!-- Banner Bar -->
      <div class="relative h-[75px] overflow-hidden">
        <!-- Background image with dark overlay -->
        <img
          src="/images/banner-bg.jpg"
          alt=""
          class="absolute inset-0 w-full h-full object-cover"
        />
        <div class="absolute inset-0 bg-black/40"></div>

        <!-- Banner content -->
        <div class="relative h-full flex items-center px-[225px]">
          <div class="flex items-center gap-[33px]">
            <span class="font-['Sora'] text-2xl text-white">Taste what supports our mission</span>
            <div class="w-px h-[44px] bg-white"></div>
            <a href="#" class="inline-flex items-center justify-center h-[36px] px-5 border border-white rounded-full font-['Sora'] text-sm text-white hover:bg-white hover:text-black transition-colors">Shop Now</a>
          </div>
        </div>
      </div>

      <!-- Navigation Bar -->
      <nav class="flex items-center h-[119px] w-[1100px] mx-auto gap-[93px] bg-white">
        <!-- Logo -->
        <a href="/" class="shrink-0">
          <img
            src="/images/imfk-logo.svg"
            alt="In My Father's Kitchen"
            class="w-[271px] h-[87px]"
          />
        </a>

        <!-- Nav Links -->
        <div class="flex items-center gap-[15px] font-['Sora'] text-xl text-black">
          <a href="#" class="whitespace-nowrap hover:text-[#B60F1F] transition-colors">About</a>
          <div class="w-px h-[37px] bg-black/20"></div>
          <a href="#" class="whitespace-nowrap hover:text-[#B60F1F] transition-colors">Services</a>
          <div class="w-px h-[37px] bg-black/20"></div>
          <a href="#" class="whitespace-nowrap hover:text-[#B60F1F] transition-colors">What's Cooking</a>
          <div class="w-px h-[37px] bg-black/20"></div>
          <a href="#" class="whitespace-nowrap hover:text-[#B60F1F] transition-colors">Market</a>
          <div class="w-px h-[37px] bg-black/20"></div>
          <a href="#" class="whitespace-nowrap hover:text-[#B60F1F] transition-colors">Donate</a>
          <div class="w-px h-[37px] bg-black/20"></div>
          <a href="#" class="whitespace-nowrap hover:text-[#B60F1F] transition-colors">Connect</a>

          <!-- Search icon -->
          <div class="pl-[25px] shrink-0">
            <a href="#">
              <img
                src="/images/search-icon.png"
                alt="Search"
                class="w-6 h-6 shrink-0"
              />
            </a>
          </div>
        </div>
      </nav>

    </header>

    <!-- Page Content (placeholder) -->
    <main class="w-full max-w-[1200px] mx-auto bg-white min-h-[600px]">
    </main>

    <!-- Footer -->
    <footer class="w-full max-w-[1200px] mx-auto bg-[#333] h-[173px]"></footer>
  </div>
`
