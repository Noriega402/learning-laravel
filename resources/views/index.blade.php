@extends('layouts/principal')

@section('title', $title)

@section('content')
    <h2>{{ $subject }}</h2>
    <h4>Mostrando informacion de la DB</h4>
    <div class="mt-8 ml-6 font-bold">
        <a href="{{route('employee.crear')}}" class="bg-sky-600 text-white pr-5 pl-5 pt-3 pb-3 rounded-md ">NEW EMPLOYEE</a>
    </div>
    <div class="flex justify-center flex-col text-center">
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
                            <a href="{{ route('employee.actualizar', $e->employee_id) }}">
                                {{ $e->employee_id }}
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

        <div class="flex flex-col flex-wrap mt-5 mr-6 ml-6">
            {{ $collection->links() }}
        </div>
    </div>
@endsection
