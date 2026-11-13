<x-layout title="About">
    <div class="max-w-5xl mx-auto px-6 py-12">

        <section class="grid md:grid-cols-3 gap-12 mb-12">
            <div>
                <img src="{{ asset('img/image.jpeg') }}" alt="Photo of Jonathan" class="w-full max-w-xs">
            </div>
            <div class="md:col-span-2">
                <h1 class="text-3xl font-semibold mb-4">About Jonathan</h1>
                <p class="text-slate-700 mb-4">
                    Second-year Informatics student (Full Stack Application Development)
                    at Ciputra University Makassar.
                </p>
                <p class="text-slate-700">
                    I have strong communication skills, especially in English, and early professional
                    experience through an internship. I enjoy learning new things, adapting, and
                    contributing in dynamic work environments.
                </p>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-xl font-semibold mb-4">Education</h2>
            <ul class="border-t border-slate-300">
                @foreach ($abouts->where('category', 'education') as $item)
                    <li class="py-4 border-b border-slate-300">
                        <div class="flex flex-wrap justify-between gap-x-4">
                            <h3 class="font-medium">{{ $item->organization }}</h3>
                            <p class="text-sm text-slate-600">{{ $item->period }}</p>
                        </div>
                        <p class="text-slate-700">{{ $item->title }}</p>
                    </li>
                @endforeach
            </ul>
        </section>

        <section class="mb-12">
            <h2 class="text-xl font-semibold mb-4">Skills</h2>
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h3 class="font-medium mb-2">Hard skills</h3>
                    <ul class="border-t border-slate-300 text-slate-700">
                        @foreach ($abouts->where('category', 'skill_hard') as $item)
                            <li class="py-2 border-b border-slate-300">{{ $item->title }}</li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h3 class="font-medium mb-2">Soft skills</h3>
                    <ul class="border-t border-slate-300 text-slate-700">
                        @foreach ($abouts->where('category', 'skill_soft') as $item)
                            <li class="py-2 border-b border-slate-300">{{ $item->title }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-xl font-semibold mb-4">Organizational experience</h2>
            <div class="border-t border-slate-300">
                @foreach ($abouts->where('category', 'organization') as $item)
                    <article class="py-6 border-b border-slate-300">
                        <div class="flex flex-wrap justify-between gap-x-4">
                            <h3 class="font-medium">{{ $item->title }}, {{ $item->organization }}</h3>
                            <p class="text-sm text-slate-600">{{ $item->period }}</p>
                        </div>
                        <ul class="list-disc pl-5 mt-2 space-y-1 text-slate-700">
                            @foreach (explode("\n", $item->description) as $point)
                                <li>{{ $point }}</li>
                            @endforeach
                        </ul>
                    </article>
                @endforeach
            </div>
        </section>

        <section>
            <h2 class="text-xl font-semibold mb-4">Work experience</h2>
            <div class="border-t border-slate-300">
                @foreach ($abouts->where('category', 'work') as $item)
                    <article class="py-6 border-b border-slate-300">
                        <div class="flex flex-wrap justify-between gap-x-4">
                            <h3 class="font-medium">{{ $item->title }}, {{ $item->organization }}</h3>
                            <p class="text-sm text-slate-600">{{ $item->period }}</p>
                        </div>
                        <ul class="list-disc pl-5 mt-2 space-y-1 text-slate-700">
                            @foreach (explode("\n", $item->description) as $point)
                                <li>{{ $point }}</li>
                            @endforeach
                        </ul>
                    </article>
                @endforeach
            </div>
        </section>

    </div>
</x-layout>