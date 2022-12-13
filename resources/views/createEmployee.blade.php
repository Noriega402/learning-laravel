@extends('layouts/principal')
@section('title', $title)
@section('content')
    <h1>Vista para crear empleado en la empresa</h1>
    <form action="{{ route('employee.insert') }}" method="POST" class="flex flex-wrap md:flex-row lg:flex-col">
        @csrf
        <label for="name" class="block">
            <span class="block text-sm font-medium text-slate-700">Name</span>
            <input type="text" placeholder="Daniel" id="name" name="name"
                class="mt-1 block rounded-md border border-slate-300 bg-white px-3 py-2 text-sm placeholder-slate-400 shadow-sm invalid:border-pink-500 invalid:text-pink-600 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none" />
        </label>
        <label for="surname" class="block">
            <span class="block text-sm font-medium text-slate-700">Surname</span>
            <input type="text" placeholder="Noriega" id="surname" name="surname"
                class="mt-1 block rounded-md border border-slate-300 bg-white px-3 py-2 text-sm placeholder-slate-400 shadow-sm invalid:border-pink-500 invalid:text-pink-600 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none" />
        </label>
        <label for="birthday" class="block">
            <span class="block text-sm font-medium text-slate-700">Birthday</span>
            <input type="date" id="birthday" name="birthday"
                class="mt-1 block rounded-md border border-slate-300 bg-white px-3 py-2 text-sm placeholder-slate-400 shadow-sm invalid:border-pink-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none" />
        </label>
        <span class="block text-sm font-medium text-slate-700">Gender</span>
        <select name="gender" id="gender"
            class="mt-1 block rounded-md border border-slate-300 bg-white px-3 py-2 text-sm placeholder-slate-400 shadow-sm invalid:border-pink-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none max-w-[190px]">
            <option value="" selected>Select an option</option>
            <option value="0">Male</option>
            <option value="1">Female</option>
        </select>
        </label>
        <label for="salary" class="block">
            <span class="block text-sm font-medium text-slate-700">Salary</span>
            <input type="number" id="salary" placeholder="10000" name="salary"
                class="mt-1 block rounded-md border border-slate-300 bg-white px-3 py-2 text-sm placeholder-slate-400 shadow-sm invalid:border-pink-500 invalid:text-pink-600 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none" />
        </label>
        <label for="position" class="block">
            <span class="block text-sm font-medium text-slate-700">Position</span>
            <input type="text" placeholder="Marketing" id="position" name="position"
                class="mt-1 block rounded-md border border-slate-300 bg-white px-3 py-2 text-sm placeholder-slate-400 shadow-sm invalid:border-pink-500 invalid:text-pink-600 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none" />
        </label>
        <label for="departament" class="block">
            <span class="block text-sm font-medium text-slate-700">Departament</span>
            <select name="departament" id="departament"
                class="mt-1 block rounded-md border border-slate-300 bg-white px-3 py-2 text-sm placeholder-slate-400 shadow-sm invalid:border-pink-500 invalid:text-pink-600 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none">
                <option value="0" selected>Select an option</option>
                @foreach ($collection as $item => $d)
                    <option value="{{ $d->id }}">{{ $d->departament_name }}</option>
                @endforeach
            </select>
        </label>
        <input type="submit" value="Send" class="bg-green-600 text-white bold cursor-pointer rounded pl-5 pr-5 pt-2 pb-2 max-w-[200px] hover:bg-green-500 hover:border-slate-300 hover:ring-green-300 font-bold">
    </form>
@endsection
