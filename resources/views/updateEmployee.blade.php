@extends('layouts/principal')
@section('title', $title)
@section('content')
    <h1 class="font-semibold">Actualizando empleado</h1>
    <h1>Vista para actualizar datos de un empleado</h1>
    {{-- <p>{{$empleado[0]}}</p> --}}
    <div class="flex justify-center">
        <form action="{{ route('employee.update', $empleado[0]) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <div class="form-floating mb-3 xl:w-96">
                    <label for="floatingInput" class="text-gray-700">Name</label>
                    <input type="text" name="employee_name" value="{{ $empleado[0]->employee_name }}"
                        class="form-control m-0 block w-full rounded border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1.5 text-base font-normal text-gray-700 transition ease-in-out focus:border-blue-600 focus:bg-white focus:text-gray-700 focus:outline-none"
                        id="floatingInput" placeholder="Daniel">
                </div>
                <div class="form-floating mb-3 xl:w-96">
                    <label for="floatingInput" class="text-gray-700">Surname</label>
                    <input type="text" name="employee_surname" value="{{ $empleado[0]->employee_surname }}"
                        class="form-control m-0 block w-full rounded border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1.5 text-base font-normal text-gray-700 transition ease-in-out focus:border-blue-600 focus:bg-white focus:text-gray-700 focus:outline-none"
                        id="floatingInput" placeholder="Noriega">
                </div>
                <div class="form-floating mb-3 xl:w-96">
                    <label for="floatingBirthday" class="text-gray-700">Birthday</label>
                    <input type="date" name="employee_birthday" value="{{ $empleado[0]->employee_birthday }}"
                        class="form-control m-0 block w-full rounded border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1.5 text-base font-normal text-gray-700 transition ease-in-out focus:border-blue-600 focus:bg-white focus:text-gray-700 focus:outline-none"
                        id="floatingBirthday">
                </div>
                <div class="flex justify-center">
                    <div class="mb-3 xl:w-96">
                        <label for="departament" class="block">
                            <span class="block text-sm font-medium text-slate-700">Gender</span>
                            <select name="employee_gender" id="gender"
                                class="mt-1 block rounded-md border border-slate-300 bg-white px-3 py-2 text-sm placeholder-slate-400 shadow-sm invalid:border-pink-500 invalid:text-pink-600 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none text-black">
                                <option selected>Select an option</option>
                                <option value="0">Male</option>
                                <option value="1">Female</option>
                            </select>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="mb-3 xl:w-96">
                        <label for="salary" class="form-label mb-2 inline-block text-gray-700">Salary</label>
                        <input type="number" name="employee_salary" value="{{ $empleado[0]->employee_salary }}"
                            class="form-control m-0 block w-full rounded border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1.5 text-base font-normal text-gray-700 transition ease-in-out focus:border-blue-600 focus:bg-white focus:text-gray-700 focus:outline-none"
                            id="salary" placeholder="Employee Salary" />
                    </div>
                </div>
                <div class="form-floating mb-3 xl:w-96">
                    <label for="positionEmployee" class="text-gray-700">Position</label>
                    <input type="text" name="position_name" value="{{ $empleado[0]->position_name }}"
                        class="form-control m-0 block w-full rounded border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1.5 text-base font-normal text-gray-700 transition ease-in-out focus:border-blue-600 focus:bg-white focus:text-gray-700 focus:outline-none"
                        id="positionEmployee" placeholder="Marketing">
                </div>
                <label for="departament" class="block">
                    <span class="block text-sm font-medium text-slate-700">Departament</span>
                    <select name="departament_id" id="departament"
                        class="mt-1 block rounded-md border border-slate-300 bg-white px-3 py-2 text-sm placeholder-slate-400 shadow-sm invalid:border-pink-500 invalid:text-pink-600 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none text-black">
                        <option value="0" selected>Select an option</option>
                        @foreach ($collection as $item => $d)
                            <option value="{{ $d->id }}">{{ $d->departament_name }}</option>
                        @endforeach
                    </select>
                </label>
                <input type="submit" value="Update"
                    class="bold max-w-[200px] cursor-pointer rounded bg-green-600 pl-5 pr-5 pt-2 pb-2 font-bold text-white hover:border-slate-300 hover:bg-green-500 hover:ring-green-300">
            </div>
        </form>
    </div>
@endsection
