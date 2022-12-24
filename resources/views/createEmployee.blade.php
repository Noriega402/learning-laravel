@extends('layouts/principal')
@section('title', $title)
@section('content')
    <h1>Vista para crear empleado en la empresa</h1>
    <div class="flex justify-center">
        <form action="{{ route('employee.insert') }}" method="POST" class="flex flex-wrap md:flex-row lg:flex-col">
            @csrf
            <label for="name" class="block">
                <span class="block text-sm font-medium text-slate-700">Name</span>
                <input type="text" placeholder="Daniel" id="name" name="name" value="{{ old('name') }}"
                    class="mt-1 block w-80 rounded-md border border-slate-300 bg-white px-3 py-2 text-sm placeholder-slate-400 shadow-sm invalid:border-pink-500 invalid:text-pink-600 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none" />
                {{-- MENSAJE DE ERROR  --}}
                @error('name')
                    <div class="inline-flex items-center rounded-lg py-1 px-2 text-base text-red-600" role="alert">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle"
                            class="mr-2 h-4 w-4 fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z">
                            </path>
                        </svg>
                        <small>{{ $message }}</small>
                    </div>
                @enderror
            </label>
            <label for="surname" class="block">
                <span class="block text-sm font-medium text-slate-700">Surname</span>
                <input type="text" placeholder="Noriega" id="surname" name="surname" value="{{ old('surname') }}"
                    class="mt-1 block w-80 rounded-md border border-slate-300 bg-white px-3 py-2 text-sm placeholder-slate-400 shadow-sm invalid:border-pink-500 invalid:text-pink-600 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none" />
                {{-- MENSAJE DE ERROR  --}}
                @error('surname')
                    <div class="inline-flex items-center rounded-lg py-1 px-2 text-base text-red-600" role="alert">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle"
                            class="mr-2 h-4 w-4 fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z">
                            </path>
                        </svg>
                        <small>{{ $message }}</small>
                    </div>
                @enderror
            </label>
            <label for="birthday" class="block">
                <span class="block text-sm font-medium text-slate-700">Birthday</span>
                <input type="date" id="birthday" name="birthday" value="{{ old('birthday') }}"
                    class="mt-1 block w-80 rounded-md border border-slate-300 bg-white px-3 py-2 text-sm placeholder-slate-400 shadow-sm invalid:border-pink-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none" />
                {{-- MENSAJE DE ERROR  --}}
                @error('birthday')
                    <div class="inline-flex items-center rounded-lg py-1 px-2 text-base text-red-600" role="alert">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle"
                            class="mr-2 h-4 w-4 fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z">
                            </path>
                        </svg>
                        <small>{{ $message }}</small>
                    </div>
                @enderror
            </label>
            <label for="gender" class="block">
                <span class="block text-sm font-medium text-slate-700">Gender</span>
                <select name="gender" id="gender"
                    class="mt-1 block w-80 rounded-md border border-slate-300 bg-white px-3 py-2 text-sm placeholder-slate-400 shadow-sm invalid:border-pink-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none">
                    <option selected>Select an option</option>
                    <option value="0">Male</option>
                    <option value="1">Female</option>
                    {{-- MENSAJE DE ERROR  --}}
                    @error('gender')
                        <div class="inline-flex items-center rounded-lg py-1 px-2 text-base text-red-600" role="alert">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle"
                                class="mr-2 h-4 w-4 fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z">
                                </path>
                            </svg>
                            <small>{{ $message }}</small>
                        </div>
                    @enderror
                </select>
            </label>
            <label for="salary" class="block">
                <span class="block text-sm font-medium text-slate-700">Salary</span>
                <input type="number" id="salary" placeholder="10000" name="salary" value="{{ old('salary') }}"
                    class="mt-1 block w-80 rounded-md border border-slate-300 bg-white px-3 py-2 text-sm placeholder-slate-400 shadow-sm invalid:border-pink-500 invalid:text-pink-600 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none" />
                @error('salary')
                    <div class="inline-flex items-center rounded-lg py-1 px-2 text-base text-red-600" role="alert">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle"
                            class="mr-2 h-4 w-4 fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z">
                            </path>
                        </svg>
                        <small>{{ $message }}</small>
                    </div>
                @enderror
            </label>
            <label for="position" class="block">
                <span class="block text-sm font-medium text-slate-700">Position</span>
                <input type="text" placeholder="Marketing" id="position" name="position"
                    value="{{ old('position') }}"
                    class="mt-1 block w-80 rounded-md border border-slate-300 bg-white px-3 py-2 text-sm placeholder-slate-400 shadow-sm invalid:border-pink-500 invalid:text-pink-600 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none" />
                {{-- MENSAJE DE ERROR  --}}
                @error('position')
                    <div class="inline-flex items-center rounded-lg py-1 px-2 text-base text-red-600" role="alert">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle"
                            class="mr-2 h-4 w-4 fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z">
                            </path>
                        </svg>
                        <small>{{ $message }}</small>
                    </div>
                @enderror
            </label>
            <label for="departament" class="block">
                <span class="block text-sm font-medium text-slate-700">Departament</span>
                <select name="departament" id="departament"
                    class="mt-1 block w-80 rounded-md border border-slate-300 bg-white px-3 py-2 text-sm placeholder-slate-400 shadow-sm invalid:border-pink-500 invalid:text-pink-600 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none">
                    <option selected>Select an option</option>
                    @foreach ($collection as $item => $d)
                        <option value="{{ $d->id }}">{{ $d->departament_name }}</option>
                    @endforeach
                </select>
                {{-- MENSAJE DE ERROR  --}}
                @error('departament')
                    <div class="inline-flex items-center rounded-lg py-1 px-2 text-base text-red-600" role="alert">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle"
                            class="mr-2 h-4 w-4 fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z">
                            </path>
                        </svg>
                        <small>{{ $message }}</small>
                    </div>
                @enderror
            </label>
            <input type="submit" value="Send"
                class="bold mt-5 max-w-[500px] cursor-pointer rounded bg-green-600 pl-5 pr-5 pt-2 pb-2 font-bold text-white hover:border-slate-300 hover:bg-green-500 hover:ring-green-300">
        </form>
    </div>
@endsection
