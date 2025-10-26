@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto bg-white shadow rounded-lg p-6">
        <h2 class="text-xl font-bold mb-6">Add Section</h2>

        <form action="{{ route('sections.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Section Name</label>
                <input type="text" name="name" id="name"
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                       required>
            </div>

            <div class="flex justify-end">
                <button type="submit"
                        class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                    Save
                </button>
            </div>
        </form>
    </div>
@endsection
