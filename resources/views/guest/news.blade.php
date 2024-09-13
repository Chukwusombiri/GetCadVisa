<x-app-layout>
    {{-- breadcrumb --}}
    <x-breadcrumb>
        <x-slot:topic>Resources</x-slot>
        <x-slot:subtopic>immigration news</x-slot>
    </x-breadcrumb>
    {{-- header --}}
    <x-header>
        <x-slot:maintitle>Canada immigration news</x-slot>
        <x-slot:subtitle>Stay up-to-date with the latest developments and updates in Canadian immigration policy and programs</x-slot>
    </x-header>
    @livewire('news')
</x-app-layout>
