@extends('layouts.app')

@section('content')

   <!-- component -->
<div class="text-gray-900 bg-gray-200">
    <div class="p-4 flex">
        <h1 class="text-3xl">
            Users
        </h1>
    </div>
    <div class="px-3 py-4 flex justify-center">
        <x-user.user-List/>
    </div>
</div>

@endsection
