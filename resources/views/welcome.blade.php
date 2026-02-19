{{-- <x-layout>
    <div>

    <section>
        <h1>Let's Find Your Next Job</h1>

        <form action="">
            <input type="text" placeholder="Web developer...">
        </form>
    </section>

    <section>
       <x-section-heading>Featute Jobs</x-section-heading>

      <div>
        <x-job-card/>
        <x-job-card/>
        <x-job-card/>
      </div>
    </section>

    <section>
        <x-section-heading>Tags</x-section-heading>

         <div>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
        </div>
    </section>

    <section>
        <x-section-heading>Recent Jobs</x-section-heading>

        <div>
            <x-job-card-wide/>
            <x-job-card-wide/>
            <x-job-card-wide/>
        </div>

    </section>
    </div>
</x-layout> --}}


<x-layout>
    <div class="space-y-16 pb-16">

        <!-- Hero Section -->
        <section class="relative overflow-hidden bg-gradient-to-b from-indigo-500/10 via-transparent to-transparent py-16 -mt-8">
            <div class="absolute inset-0 bg-grid-white/5 [mask-image:radial-gradient(ellipse_at_center,transparent_20%,black)]"></div>
            <div class="relative max-w-3xl mx-auto text-center px-4">
                <h1 class="text-5xl md:text-6xl font-bold bg-gradient-to-r from-white via-indigo-200 to-indigo-400 bg-clip-text text-transparent mb-6">
                    Let's Find Your <br>Next Job
                </h1>
                <p class="text-slate-400 text-lg mb-8">Discover thousands of opportunities tailored to your skills</p>

                <form action="" class="max-w-xl mx-auto">
                    <div class="flex gap-3">
                        <input type="text" placeholder="Web developer..."
                               class="flex-1 px-6 py-4 bg-[#0F172A] border border-slate-800 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500/50 transition-all">
                        <button type="submit"
                                class="px-8 py-4 bg-indigo-600 text-white font-semibold rounded-xl hover:bg-indigo-500 transition-colors duration-200 shadow-lg shadow-indigo-500/25">
                            Search
                        </button>
                    </div>
                </form>
            </div>
        </section>

        <!-- Featured Jobs Section -->
        <section class="max-w-7xl mx-auto px-4">
            <x-section-heading>Featured Jobs</x-section-heading>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                <x-job-card/>
                <x-job-card/>
                <x-job-card/>
            </div>
        </section>

        <!-- Tags Section -->
        <section class="max-w-7xl mx-auto px-4">
            <x-section-heading>Popular Tags</x-section-heading>

            <div class="flex flex-wrap gap-3 mt-8">
                <x-tag>Frontend</x-tag>
                <x-tag>Backend</x-tag>
                <x-tag>DevOps</x-tag>
                <x-tag>Full Stack</x-tag>
                <x-tag>Mobile</x-tag>
                <x-tag>React</x-tag>
                <x-tag>Vue</x-tag>
                <x-tag>Laravel</x-tag>
                <x-tag>Python</x-tag>
                <x-tag>UI/UX</x-tag>
                <x-tag>Product</x-tag>
                <x-tag>Marketing</x-tag>
            </div>
        </section>

        <!-- Recent Jobs Section -->
        <section class="max-w-7xl mx-auto px-4">
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="space-y-4 mt-8">
                <x-job-card-wide/>
                <x-job-card-wide/>
                <x-job-card-wide/>
            </div>
        </section>

    </div>
</x-layout>

