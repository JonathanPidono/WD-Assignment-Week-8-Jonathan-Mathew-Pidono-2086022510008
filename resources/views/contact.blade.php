<x-layout title="Contact">
    <div class="max-w-5xl mx-auto px-6 py-12">
        <section class="grid md:grid-cols-2 gap-12">
            <div>
                <h1 class="text-3xl font-semibold mb-4">Contact me</h1>
                <p class="text-slate-700 mb-8">
                    Have a question, a project offer, or just want to chat? Send a message through the
                    form, or reach me directly by email.
                </p>

                <h2 class="font-medium mb-2">Email</h2>
                <p class="mb-8">
                    <a href="mailto:jmathewpidono@student.ciputra.ac.id" class="underline underline-offset-4">jmathewpidono@student.ciputra.ac.id</a>
                </p>

                <h2 class="font-medium mb-2">Profiles</h2>
                <ul class="space-y-1">
                    <li><a href="https://github.com/JonathanPidono" class="underline underline-offset-4">GitHub</a></li>
                    <li><a href="https://www.linkedin.com/in/jonathan-undefined-282902328?utm_source=share_via&utm_content=profile&utm_medium=member_android" class="underline underline-offset-4">LinkedIn</a></li>
                </ul>
            </div>

      <form method="POST" action="/contact" class="space-y-4">
         @csrf
         <div>
            <label for="name"
               class="mb-2 text-slate-900 font-medium text-sm inline-block">Name</label>
            <input type="text" id="name" name="name" placeholder="Jonathan" required
               class="px-3 py-2.5 text-sm text-slate-900 w-full rounded-md bg-white outline-1 -outline-offset-1 outline-slate-300 focus:outline-2 focus:-outline-offset-2 focus:outline-slate-900" >
         </div>
         <div>
            <label for="email"
               class="mb-2 text-slate-900 font-medium text-sm inline-block">Email</label>
            <input type="email" id="email" name="email" placeholder="jonathan@gmail.com" required
               class="px-3 py-2.5 text-sm text-slate-900 w-full rounded-md bg-white outline-1 -outline-offset-1 outline-slate-300 focus:outline-2 focus:-outline-offset-2 focus:outline-slate-900" />
         </div>
         <div>
            <label for="message"
               class="mb-2 text-slate-900 font-medium text-sm inline-block">Message</label>
            <textarea placeholder="Write message" rows="6" type="text" id="message" name="message" required
               class="px-3 py-2.5 text-sm text-slate-900 w-full rounded-md bg-white outline-1 -outline-offset-1 outline-slate-300 focus:outline-2 focus:-outline-offset-2 focus:outline-slate-900"></textarea>
         </div>

        <button type="submit"
                class="px-4 py-2.5 text-sm font-medium bg-slate-900 text-white hover:bg-slate-700">
            Send message
        </button>
      </form>
        </section>
    </div>

    @push('scripts')
        @if (session('sukses'))
            <script>
                alert('Message sent');
            </script>
        @endif
    @endpush
</x-layout>