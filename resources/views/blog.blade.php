<x-layout title="Blog">
<section class="mt-6 px-4 md:px-8">
   <div class="max-w-2xl mx-auto">
      <div class="mb-4">
         <h2 class="text-3xl font-bold mb-6 text-slate-900 md:text-4xl">Latest Blog Posts</h2>
         <p class="text-base text-slate-600 leading-relaxed">Notes and documentation from what I am learning,
            including calculus, Laravel, and Flutter.</p>
      </div>

      <div class="grid divide-y divide-slate-300">

         @foreach ($blogs as $blog)
            <article class="overflow-hidden py-8">
               <span class="text-sm block text-slate-500 mb-3">{{ $blog->published_at->format('j F Y') }}</span>
               <h3 class="text-lg font-semibold mb-4 text-slate-900">{{ $blog->title }}</h3>
               <div class="space-y-4 text-base text-slate-600 leading-relaxed">
                  @foreach (explode("\n", $blog->excerpt) as $paragraph)
                     <p>{{ $paragraph }}</p>
                  @endforeach
               </div>
               <div class="flex flex-wrap items-center justify-between gap-4 mt-6">
                  <p class="text-sm text-slate-500">By Jonathan Mathew Pidono</p>
                  @if ($blog->doc_url)
                     <a href="{{ $blog->doc_url }}"
                        class="text-sm font-medium underline underline-offset-4 text-slate-900 hover:text-blue-700">
                        Read more</a>
                  @endif
               </div>
            </article>
         @endforeach


      </div>
   </div>
</section>
</x-layout>