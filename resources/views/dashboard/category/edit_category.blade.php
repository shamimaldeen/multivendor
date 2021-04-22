@extends('layouts.app')
@section('title', 'Categories')
@section('content')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Add Category
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->

            <div class="intro-y box p-5">
                <form method="post" action="{{ route('user-product-post-category', 'new') }}" enctype="multipart/form-data" class="mb-3">
                    @csrf
                    <div>
                        <label>Category Name</label>
                        <input type="text" class="input w-full border mt-2"  name="title" placeholder="Input text">
                    </div>
                    <div class="mt-3">
                        <label>Status</label>
                        <div class="mt-2">
                            <select data-placeholder="Select Category" class="tail-select w-full" name="status">
                                <option value="1"> {{ __('Active') }} </option>
                                <option value="0"> {{ __('Hidden') }}</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-3">
                        <label>Description</label>
                        <div class="mt-2">
                        <textarea data-simple-toolbar="true" class="editor" name="description">
                            <p>Content of the editor.</p>
                        </textarea>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label>Upload Image</label>
                        <div class="border-2 border-dashed dark:border-dark-5 rounded-md mt-3 pt-4">
                            <div class="flex flex-wrap px-4">
                                <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                    {{--                                <input type="file" >--}}
                                    <img class="rounded-md" alt="Midone Tailwind HTML Admin Template" src="{{ url ('backend/dist/images/preview-15.jpg')}}">
                                    <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 right-0 top-0 -mr-2 -mt-2"> <i data-feather="x" class="w-4 h-4"></i> </div>
                                </div>
                            </div>
                            <div class="px-4 pb-4 flex items-center cursor-pointer relative">
                                <i data-feather="image" class="w-4 h-4 mr-2"></i> <span class="text-theme-1 dark:text-theme-10 mr-1">Upload a file</span> or drag and drop
                                <input type="file"  name="media"class="w-full h-full top-0 left-0 absolute opacity-0">
                            </div>
                        </div>
                    </div>
                    <div class="text-right mt-5">
                        <button type="button" class="button w-24 border dark:border-dark-5 text-gray-700 dark:text-gray-300 mr-1">Cancel</button>
                        <button type="submit" class="button w-24 bg-theme-1 text-white">Save</button>
                    </div>
                </form>
            </div>

            <!-- END: Form Layout -->
        </div>
    </div>
@endsection
