@extends('layouts.app')
@section('title', __('Dashboard'))
@section('content')
    <h2 class="intro-y text-lg font-medium mt-10">
        Service
    </h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">
            <a class="button text-white bg-theme-1 shadow-md mr-2" href="{{ url('dashboard/services/create') }}">Add New Service</a>
            <div class="dropdown">
                <button class="dropdown-toggle button px-2 box text-gray-700 dark:text-gray-300">
                    <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i> </span>
                </button>
                <div class="dropdown-box w-40">
                    <div class="dropdown-box__content box dark:bg-dark-1 p-2">
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print </a>
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to Excel </a>
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                <tr>
                    <th class="whitespace-no-wrap">Service Name</th>
                    <th class="text-center whitespace-no-wrap">Parent Name</th>
                    <th class="text-center whitespace-no-wrap">Type</th>
                    <th class="text-center whitespace-no-wrap">STATUS</th>
                    <th class="text-center whitespace-no-wrap">ACTIONS</th>
                </tr>
                </thead>
                <tbody>
                @foreach($services as $service)
                    @if($service->id!=1)
                <tr class="intro-x">
                    <td>
                        <div class="text-gray-600 text-xs whitespace-no-wrap">{{ $service->service_name }}</div>
                    </td>
                    <td class="text-gray-600 text-xs whitespace-no-wrap">{{ $service->parent->service_name }}</td>
                    <td class="text-gray-600 text-xs whitespace-no-wrap">{{ ($service->type==0) ? 'Service' : 'Attributes' }}</td>
                    <td class="w-40">
                        <div class="flex items-center justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i>@if($service->status) Active @else Inactive @endif </div>
                    </td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3" href="{{ url('dashboard/services/edit/'.$service->id) }}"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
{{--                            <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>--}}
                        </div>
                    </td>
                </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
@endsection