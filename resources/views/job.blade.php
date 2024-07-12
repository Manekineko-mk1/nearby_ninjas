<x-layout>
    <x-slot:heading>Job</x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job['title'] }}:</h2>
    
    <p class="font-bold">Salary: {{ $job['salary'] }} per year.</p>

    <h2><strong>Job description:</strong></h2>
    <p>{{ $job['description'] }}</p>
</x-layout>