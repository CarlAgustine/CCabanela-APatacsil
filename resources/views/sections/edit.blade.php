@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto bg-white shadow rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-6 text-gray-800">Edit Section</h1>

        <form action="{{ route('sections.update', $section) }}" method="POST" class="space-y-5">
            @csrf 
            @method('PUT')

            <!-- Section Name -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Section Name</label>
                <input type="text" name="name" value="{{ $section->name }}" 
                       class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <!-- Submit -->
            <div class="flex justify-end">
                <button type="submit" 
                        class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition">
                    Update
                </button>
            </div>
        </form>
    </div>
@endsection

