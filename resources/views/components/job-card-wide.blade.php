    {{-- <x-panel>
        <div>
              <x-employer-logo/>
        </div>

        <div>
            <a href="">Laracasts</a>
            <h3>Video Producer</h3>
            <p>Full Time - From $60,000</p>
        </div>

        <div>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>                <x-tag>Tag</x-tag>
        </div>
    </x-panel> --}}


    <!-- job-card-wide.blade.php -->
<x-panel>
    <div class="flex items-start gap-6">
        <x-employer-logo/>

        <div class="flex-1">
            <a href="" class="text-sm font-medium text-indigo-400 hover:text-indigo-300 transition-colors">Laracasts</a>
            <h3 class="text-xl font-bold text-white mt-1">Video Producer</h3>
            <p class="text-sm text-slate-400 mt-1">Full Time - From $60,000</p>
        </div>

        <div class="flex gap-2">
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
        </div>
    </div>
</x-panel>
