<x-layout>
    <x-slot:heading>Jobs Listing</x-slot:heading>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="font-bold block px-4 py-6 border border-gray-400 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">
                    {{ $job->employer->name }}
                </div>
                <div>
                    {{ $job['title'] }} : Salary: {{ $job['salary'] }} per year.
                </div>
            </a>
        @endforeach

        <div>
            <!-- Pagination -->
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>