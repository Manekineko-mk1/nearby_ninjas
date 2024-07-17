<!-- Show view is for displaying a single task -->
<x-layout>
    <x-slot:heading>Job</x-slot:heading>

    <h1 class="font-bold text-lg">{{ $job->title }}:</h1>
    
    <br/> 
    <p class="font-bold">Salary: ${{ $job->salary }} CAD per year.</p>

    <br/>   

    <h2><strong>Job description:</strong></h2>
    <p>{{ $job['description'] }}</p>

    <p class="mt-6">
        <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
    </p>

</x-layout>