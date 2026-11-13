<header class="border-b border-slate-300">
    <nav class="max-w-5xl mx-auto px-6 py-4 flex flex-wrap items-center justify-between gap-4"
         aria-label="Main navigation">

        <a href="{{ url('/') }}" class="font-semibold">Jona</a>

        <ul class="flex gap-6 text-sm">
            <li><a href="{{ url('/') }}" @if (request()->is('/')) aria-current="page" @endif
                   class="underline-offset-4 {{ request()->is('/') ? 'font-semibold underline' : 'hover:underline' }}">Home</a></li>
            <li><a href="{{ url('/about') }}" @if (request()->is('about')) aria-current="page" @endif
                   class="underline-offset-4 {{ request()->is('about') ? 'font-semibold underline' : 'hover:underline' }}">About</a></li>
            <li><a href="{{ url('/blog') }}" @if (request()->is('blog')) aria-current="page" @endif
                   class="underline-offset-4 {{ request()->is('blog') ? 'font-semibold underline' : 'hover:underline' }}">Blog</a></li>
            <li><a href="{{ url('/contact') }}" @if (request()->is('contact')) aria-current="page" @endif
                   class="underline-offset-4 {{ request()->is('contact') ? 'font-semibold underline' : 'hover:underline' }}">Contact</a></li>
        </ul>
    </nav>
</header>