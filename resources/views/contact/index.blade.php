<x-app-layout>
  <section class="text-gray-600 h-[100vh] z-30 body-font relative">


      <div id="map" class="absolute inset-0">
        <script class="">

          /* Muestra el mapa */
          var map = L.map('map').setView([-27.467269, -58.838825], 13);
          L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
              maxZoom: 19,
              attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
          }).addTo(map);

          var popup = L.popup();

          /* Punto marcado con PopUp de detalleal clickear */
          var marker = L.marker([-27.467269, -58.838825],
          {alt: 'Kyiv'}).addTo(map) // "Kyiv" is the accessible name of this marker
          .bindPopup('Corriente pora co mi gente');


          /* PopUp con la coordenada clickeada */
          function onMapClick(e) {
              popup
                  .setLatLng(e.latlng)
                  .setContent("You clicked the map at " + e.latlng.toString())
                  .openOn(map);
          }

          map.on('click', onMapClick);

        </script>

      </div>
      <div class="container px-5 py-24 mx-auto flex">
        <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative shadow-md">
          <h2 class="text-gray-900 text-lg font-medium title-font">Contactanos</h2>
          <p class="leading-relaxed mb-2 text-gray-600">Contactate con nosotros para aplicar mejoras en este proyecto</p>
          <div class="drawer">
            <input id="my-drawer" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content">
              <!-- Page content here -->
              <label for="my-drawer" class="btn btn-primary drawer-button">Open drawer</label>
            </div> 
            <div class="drawer-side">
              <label for="my-drawer" class="drawer-overlay"></label>
              <ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content">
                <!-- Sidebar content here -->
                <li><a>Veterinaria 1</a></li>
                <li><a>Veterinaria 2</a></li>
                
              </ul>
            </div>
          </div>
          <div class="flex justify-center justify-items-center gap-6">
            <div class="relative mb-4">
              <a href="" class="leading-7 text-sm text-gray-600">Email
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                  <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                  <circle cx="4" cy="4" r="2" stroke="none"></circle>
                </svg>
              </a>
              
            </div>
            <div class="relative mb-4">
              <a href="" class="leading-7 text-sm text-gray-600">Whatsapp</a>
             
            </div>
            <div class="relative mb-4">
              <a href="" class="leading-7 text-sm text-gray-600">Twitter
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </a>
              
              </svg>
            </div>
            <div class="justify-center mb-4">
              <a href="" class="leading-7 text-sm text-gray-600">Instagram
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                  <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                </svg>
              </a>
            </div>
            <div class="justify-center mb-4">
              <a href="" class="leading-7 text-sm text-gray-600">Linkedin
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                  <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                  <circle cx="4" cy="4" r="2" stroke="none"></circle>
                </svg>
              </a>
            </div>
          </div>
          
        </div>
      </div>
    </section>    
</x-app-layout>