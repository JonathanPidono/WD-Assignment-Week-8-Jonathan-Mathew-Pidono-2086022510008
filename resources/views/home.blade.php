<x-layout title="Home">
    <div class="max-w-5xl mx-auto px-6 py-12">
        <section class="mb-12">
            <h1 class="text-4xl font-semibold mb-4">Hi, I'm Jona.</h1>
            <p class="text-lg text-slate-700 max-w-2xl mb-6">
                Informatics student at Ciputra University Makassar. I build mobile apps with Flutter
                and websites with Laravel.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="/about"
                   class="px-4 py-2.5 text-sm font-medium bg-slate-900 text-white hover:bg-slate-700">
                    About me
                </a>
                <a href="/contact"
                   class="px-4 py-2.5 text-sm font-medium border border-slate-900 text-slate-900 hover:bg-slate-100">
                    Contact me
                </a>
            </div>
        </section>

        <section>
            <h2 class="text-xl font-semibold mb-4">Latest projects</h2>
            <ul class="border-t border-slate-300">
                @foreach ($homes as $home)
                    <li class="py-4 border-b border-slate-300">
                        <h3 class="font-medium">{{ $home->title }}</h3>
                        <p class="text-slate-700">
                            {{ $home->description }}
                        </p>
                    </li>
                @endforeach
            </ul>
        </section>

        <section class="mt-12">
            <div class="flex flex-wrap items-baseline justify-between gap-4 mb-4">
                <h2 class="text-xl font-semibold">Latest posts</h2>
                <a href="/blog" class="text-sm underline underline-offset-4 text-slate-700 hover:text-slate-900">View all posts</a>
            </div>
            <ul class="border-t border-slate-300">
                @foreach ($blogs as $blog)
                    <li class="border-b border-slate-300">
                        <a href="{{ $blog->doc_url ?? '/blog' }}" class="block py-4 group">
                            <h3 class="font-medium group-hover:underline underline-offset-4">{{ $blog->title }}</h3>
                            <p class="text-slate-700">{{ Str::of($blog->excerpt)->before("\n")->limit(120) }}</p>
                        </a>
                    </li>
                @endforeach
            </ul>
        </section>
    </div>
</x-layout>