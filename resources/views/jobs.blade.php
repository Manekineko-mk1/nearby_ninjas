<x-layout>
    <x-slot:heading>Jobs Listing</x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="font-bold text-blue-500 hover:underline">
                    {{ $job['title'] }}
                </a>:
                Salary: {{ $job['salary'] }} per year.
            </li>
        @endforeach
    </ul>
</x-layout>