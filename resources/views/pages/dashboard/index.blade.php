<x-layouts.app>
    <x-slot:title>
        Dashboard | Inventiro
    </x-slot:title>

    <x-slot:header>
        Header
    </x-slot:header>


    Dashboard

    <x-slot:footer>
        Footer
    </x-slot:footer>

    @push('scripts')
        This will be second...
    @endpush
</x-layouts.app>