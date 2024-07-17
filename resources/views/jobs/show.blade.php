<!-- Show view is for displaying a single task -->
<x-layout>
    <x-slot:heading>Job</x-slot:heading>

    <h1 class="font-bold text-lg">{{ $job['title'] }}:</h1>
    
    <br/> 
    <p class="font-bold">Salary: ${{ $job['salary'] }} CAD per year.</p>

    <br/>   

    <h2><strong>Job description:</strong></h2>
    <p>{{ $job['description'] }}</p>
</x-layout>