@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-bold">Sections</h2>
        <a href="{{ route('sections.create') }}" 
           class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Add Section
        </a>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="min-w-full border border-gray-200">
            <thead class="bg-gray-200">
                <tr>
                    <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700">Name</th>
                    <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700">Students Count</th>
                    <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($sections as $section)
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-6 text-sm">{{ $section->name }}</td>
                        
                        {{--  Use withCount result --}}
                        <td class="py-3 px-6 text-sm">
                            {{ $section->students_count }}
                        </td>

                        <td class="py-3 px-6 text-sm space-x-3">
                            <a href="{{ route('sections.edit', $section->id) }}" class="text-blue-600 hover:underline">Edit</a>
                            <form action="{{ route('sections.destroy', $section->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
