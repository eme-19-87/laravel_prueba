<x-app-layout>
    
  <section class="text-gray-600 body-font overflow-hidden">
    <div class="absolute overflow-hidden  blur-2xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="container px-5 py-24 mx-auto">
      <div class="text-center mb-20">
        <h2 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">Posts y Anuncios</h2>
        <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">Estamos constantemente subiendo posts acerca de tecnicas para mejorar el cuidado de tu mejor amigo mascota</p>
        <div class="flex mt-6 justify-center">
          <div class="w-16 h-1 rounded-full bg-purple-500 inline-flex"></div>
        </div>
      </div>
     
    <div class="container px-5 py-24 mx-auto">
      <div class="-my-8 divide-y-2 divide-gray-100">
      
  
        @foreach ($posts as $post)
        <article class="w-full bg-cover bg-center" style="background-image: url({{Storage::url($post->image->url)}})">
          <div class="py-8 flex flex-wrap md:flex-nowrap">

            <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
              <span class="font-semibold title-font text-gray-700">CATEGORY</span>
              <span class="text-sm text-gray-500">12 Jun 2019</span>
            </div>

            <div class="md:flex-grow">
              <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">
                <a href="{{route('posts.show', $post)}}">
                  {{$post->title}}
                </a>
              </h2>
              <p class="leading-relaxed"></p>
              <a class="text-purple-500 inline-flex items-center mt-4">Learn More
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>

          //Etiquetas
          <div class="">
            @foreach ($post->tags as $tag)

            {{-- {{route('posts.tag', $tag)}}  Va en el href de tag--}}
                <a href="" class="inline-block px-3 h-6 bg-{{$tag->color}}-600 text-black rounded-full">{{$tag->name}}</a>
            @endforeach
          </div>
        </article>
        @endforeach
        
      </div>
    </div>

    //Pagination
    <div>
      {{$posts->links()}}
    </div>
  </section>

    
</x-app-layout>