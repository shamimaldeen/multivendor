@extends('layouts.app')
@section('title', __('Dashboard'))
@section('content')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Create New Service
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form action="{{url('dashboard/services/store')}}" method="POST">
                @csrf
            <div class="intro-y box p-5">
                <div>
                    <label>Service Name</label>
                    <input type="text" class="input w-full border mt-2 @error('service_name') is-invalid @enderror" name="service_name" value="{{ old('service_name') }}">
                    @error('service_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-3">
                    <label>Parent service</label>
                    <div class="mt-2">
                        <select data-placeholder="Select your favorite actors" class="tail-select w-full" name="parent_id" >
                            @foreach($services as $service)
                            <option value="{{ $service->id }}">{{ $service->service_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mt-3">
                    <label>Type</label>
                    <div class="mt-2">
                        <select data-placeholder="Select type" class="tail-select w-full" name="type" >
                                <option value="0">{{ 'Service' }}</option>
                                <option value="1">{{ 'Attributes' }}</option>
                        </select>
                    </div>
                </div>
                <div class="mt-3">
                    <label>Active Status</label>
                    <div class="mt-2">
                        <input type="checkbox" class="input input--switch border" name="status">
                    </div>
                </div>
                <div class="text-right mt-5">
                    <button type="button" class="button w-24 border dark:border-dark-5 text-gray-700 dark:text-gray-300 mr-1">Cancel</button>
                    <button type="submit" class="button w-24 bg-theme-1 text-white">Save</button>
                </div>
            </div>
            </form>
            <!-- END: Form Layout -->
        </div>
    </div>
    </div>
@endsection