<x-app-layout>
  <section class="bg-white">
    <div class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0">
      <div class="absolute inset-0 -z-10 overflow-hidden">
        <svg class="absolute left-[max(50%,25rem)] top-0 h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]" aria-hidden="true">
          <defs>
            <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
              <path d="M100 200V.5M.5 .5H200" fill="none" />
            </pattern>
          </defs>
          <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
            <path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z" stroke-width="0" />
        </svg>
        <rect width="100%" height="100%" stroke-width="0" fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
    </svg>
</div>
<div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
    <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
        <div class="lg:pr-4">
            <div class="lg:max-w-lg">
                <div class="flex items-center mt-6">
                  <img class="object-cover object-center w-10 h-10 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="">

                  <div class="mx-4">
                      <h1 class="text-sm text-gray-700 dark:text-gray-200">User: {{$post->user->name}}</h1>
                      <p class="text-sm text-gray-500 dark:text-gray-400">rol</p>
                  </div>
                </div>
                <p class="text-base font-semibold leading-7 text-indigo-600">{{$post->category->name}}</p>
              <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{$post->title}}</h1>
              <p class="mt-6 text-md leading-8 text-gray-500">{{$post->extract}}</p>
              <p class="mt-4 text-xl text-black">{{$post->body}}</p>
            </div>
          </div>
        </div>



    </div>


    </div>
</section>

{{-- Contenido relacionado --}}
{{-- <div>
  <aside>
    <h2>
      Mas en: {{$post->category->name}}
    </h2>
    <li>
      @foreach ($similares as $similar)
          <a class="flex" href="{{route('posts.show', $similar)}}">
            <img class="img-fluid" src="{{Storage::url($similar->image->url)}}" alt="">
            <span>{{$similar->name}}</span>
          </a>
      @endforeach
    </li>
  </aside>
</div> --}}
</x-app-layout>


