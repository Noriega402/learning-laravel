<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Empleados') }}
        </h2>
    </x-slot>
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
    @if ($message = Session::get('deleted'))
        <div class="alert alert-dismissible fade show mb-3 inline-flex w-2/5 items-center rounded-lg bg-yellow-100 py-5 px-6 text-base text-yellow-700"
            role="alert">
            <strong class="mr-1">{{ $message }}</strong>
            <button type="button"
                class="btn-close ml-auto box-content h-4 w-4 rounded-none border-none p-1 text-yellow-900 opacity-50 hover:text-yellow-900 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                data-bs-dismiss="alert" aria-label="Close">X</button>
        </div>
    @endif
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="my-5 mx-3 font-bold">
                        <a href="{{ route('employee.crear') }}"
                            class="rounded-md bg-sky-600 pr-5 pl-5 pt-3 pb-3 text-white">NEW
                            EMPLOYEE</a>
                    </div>
                    <div class="flex flex-col justify-center text-center">
                        <table class="table-collapse border-sapacing-3 m-6 table-auto md:table-fixed">
                            <thead class="bg-slate-900 font-semibold text-white">
                                <tr>
                                    <td>ID</td>
                                    <td>NAME</td>
                                    <td>SURNAME</td>
                                    <td>ACTIONS</td>
                                </tr>
                            </thead>
                            <tbody class="bg-slate-700 text-white">
                                @foreach ($collection as $item => $e)
                                    <tr class="hover:bg-slate-500">
                                        <td class="text-blue-600">
                                            <a href="{{ route('employee.actualizar', $e) }}"
                                                class="font-bold text-white">
                                                {{ $e->id }}
                                            </a>
                                        </td>
                                        <td>
                                            {{ $e->employee_name }}
                                        </td>
                                        <td>
                                            {{ $e->employee_surname }}
                                        </td>
                                        <td>
                                            <form action="{{ route('employee.delete', $e->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" value="DELETE"
                                                    class="inline-block rounded bg-red-600 px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-5 mr-6 ml-6 flex flex-col flex-wrap">
                            {{ $collection->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
