@extends('layouts/principal')

@section('title', $title)

@section('content')
    <h1>{{ $subject }}</h1>
    <h2>Mostrando informacion de la DB</h2>
    @if ($message = Session::get('success'))
        <div class="alert alert-dismissible fade show mb-3 inline-flex w-2/5 items-center rounded-lg bg-green-100 py-5 px-6 text-base text-green-700"
            role="alert">
            <strong class="mr-1">{{ $message }}</strong>
            <button type="button"
                class="btn-close ml-auto box-content h-4 w-4 rounded-none border-none p-1 text-green-900 opacity-50 hover:text-green-900 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                data-bs-dismiss="alert" aria-label="Close">X</button>
        </div>
    @endif
    @if ($message = Session::get('updated'))
    <div class="alert alert-dismissible fade show mb-3 inline-flex w-2/5 items-center rounded-lg bg-blue-100 py-5 px-6 text-base text-blue-700"
    role="alert">
    <strong class="mr-1">{{ $message }}</strong>
    <button type="button"
        class="btn-close ml-auto box-content h-4 w-4 rounded-none border-none p-1 text-blue-900 opacity-50 hover:text-blue-900 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
        data-bs-dismiss="alert" aria-label="Close">X</button>
</div>
    @endif
    <div class="mt-8 ml-6 font-bold">
        <a href="{{ route('employee.crear') }}" class="rounded-md bg-sky-600 pr-5 pl-5 pt-3 pb-3 text-white">NEW
            EMPLOYEE</a>
    </div>
    <div class="flex flex-col justify-center text-center">
        <table class="m-6 table-auto md:table-fixed">
            <thead class="bg-blue-900 font-semibold text-white">
                <tr>
                    <td>ID</td>
                    <td>NAME</td>
                    <td>SURNAME</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($collection as $item => $e)
                    <tr class="hover:bg-neutral-100">
                        <td class="text-blue-600">
                            <a href="{{ route('employee.actualizar', $e->id) }}">
                                {{ $e->id }}
                            </a>
                        </td>
                        <td>
                            {{ $e->employee_name }}
                        </td>
                        <td>
                            {{ $e->employee_surname }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-5 mr-6 ml-6 flex flex-col flex-wrap">
            {{ $collection->links() }}
        </div>
    </div>
@endsection
