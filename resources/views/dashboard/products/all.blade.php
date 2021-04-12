@extends('layouts.app')
{{--@section('headJS')--}}
{{--<script src="{{ asset('js/Sortable.min.js') }}"></script>--}}
{{--@stop--}}
@section('title', 'All Product')
@section('content')
{{--<div class="nk-block-head mt-8">--}}

{{--  <div class="row justify-content-center text-center">--}}
{{--    <div class="col-lg-5">--}}
{{--      <div class="title_sections_inner margin-b-5">--}}
{{--        <h2>{{ __('All Products') }} <span class="badge badge-dim badge-primary badge-pill">{{ count($products) }}</span></h2>--}}
{{--        <a href="{{ route('user-add-product') }}" class="btn scale btn_primary bg-blue c-white effect-letter rounded-8">{{ __('Add new product') }}</a>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </div>--}}
{{--</div>--}}
{{--<div class="mt-3">--}}
{{--  <div class="row sortable-div" data-handle=".item-handle" data-route="{{ route('user-products-sortable') }}">--}}
{{--    @foreach ($products as $item)--}}
{{--    <div class="col-md-4 col-lg-3 sortable-item" data-id="{{$item->id}}">--}}
{{--       <div class="card card-shadow radius-5 border-0 product-card mb-5">--}}
{{--          <div class="card-body">--}}
{{--             <div class="d-flex flex-column align-items-center">--}}
{{--                <div class="product-img w-100">--}}
{{--                   <img class="w-100 radius-5 h-200px ob-cover" src="{{ getfirstproductimg($item->id) }}" alt=" ">--}}
{{--                </div>--}}
{{--                <div class="d-flex flex-column mr-auto mt-3">--}}
{{--                   <div class="d-flex flex-column mr-auto">--}}
{{--                      <span class="text-muted font-weight-bold text-sticker m-0 w-100">{{ __('Price - ') }} {{ number_format(!empty($item->salePrice) ? $item->salePrice : $item->price) }} {{ __('Stock') }} - {{ number_format($item->stock) }}</span>--}}
{{--                      <a href="#" class="text-dark text-hover-primary font-size-h4 font-weight-bolder mt-2">{{ $item->title }}</a>--}}
{{--                   </div>--}}
{{--                </div>--}}
{{--             </div>--}}
{{--             <div class="mb-10 mt-2 fs-13px font-weight-bold">{{ Str::limit(clean($item->description, 'clean_all'), $limit = 100, $end = '...') }}</div>--}}
{{--          </div>--}}
{{--          <div class="p-3 bdrs-20 bg-white d-flex align-items-center between-center">--}}
{{--           <div class="d-flex">--}}
{{--              <a href="{{ route('user-edit-product', $item->id) }}" class="text-muted d-flex ml-2"><em class="icon ni ni-edit lead mr-1"></em> {{ __('Edit') }}</a>--}}
{{--           </div>--}}
{{--           <div class="d-flex">--}}
{{--            <form action="{{ route('user-post-product', 'delete') }}" method="post">--}}
{{--                @csrf--}}
{{--                <input type="hidden" name="id" value="{{ $item->id }}">--}}
{{--                <button data-confirm="{{ __('Are you sure you want to delete this?') }}" class="text-danger ml-2 d-flex bg-transparent align-items-center border-0"><em class="icon ni ni-edit lead mr-1"></em>{{ __('Delete') }}</button>--}}
{{--            </form>--}}
{{--           </div>--}}
{{--           <div class="d-flex">--}}
{{--              <a href="#" class="text-muted item-handle ml-2 d-flex"><em class="icon tio move_page lead mr-1"></em></a>--}}
{{--           </div>--}}
{{--          </div>--}}
{{--       </div>--}}
{{--    </div>--}}
{{--    @endforeach--}}
{{--  </div>--}}
{{--</div>--}}
{{--@stop--}}


<h2 class="intro-y text-lg font-medium mt-10">
   Product List
</h2>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">
        <a href="{{ route('user-add-product') }}" class="button text-white bg-theme-1 shadow-md mr-2">Add New Product</a>
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
        <div class="hidden md:block mx-auto text-gray-600">Showing 1 to 10 of 150 entries</div>
        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
            <div class="w-56 relative text-gray-700 dark:text-gray-300">
                <input type="text" class="input w-56 box pr-10 placeholder-theme-13" placeholder="Search...">
                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
            </div>
        </div>
    </div>
    <!-- BEGIN: Data List -->
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <table class="table table-report -mt-2">
            <thead>
            <tr>
                <th class="whitespace-no-wrap">IMAGES</th>
                <th class="whitespace-no-wrap">PRODUCT NAME</th>
                <th class="text-center whitespace-no-wrap">STOCK</th>
                <th class="text-center whitespace-no-wrap">STATUS</th>
                <th class="text-center whitespace-no-wrap">ACTIONS</th>
            </tr>
            </thead>
            <tbody>
            <tr class="intro-x">
                <td class="w-40">
                    <div class="flex">
                        <div class="w-10 h-10 image-fit zoom-in">
                            <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="{{ url ('backend/dist/images/preview-13.jpg')}}" title="Uploaded at 3 December 2020">
                        </div>
                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                            <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="{{ url ('backend/dist/images/preview-13.jpg')}}" title="Uploaded at 3 December 2020">
                        </div>
                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                            <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="{{ url ('backend/dist/images/preview-13.jpg')}}" title="Uploaded at 3 December 2020">
                        </div>
                    </div>
                </td>
                <td>
                    <a href="" class="font-medium whitespace-no-wrap">Samsung Q90 QLED TV</a>
                    <div class="text-gray-600 text-xs whitespace-no-wrap">Electronic</div>
                </td>
                <td class="text-center">82</td>
                <td class="w-40">
                    <div class="flex items-center justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                </td>
                <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                        <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                        <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                    </div>
                </td>
            </tr>

            <tr class="intro-x">
                <td class="w-40">
                    <div class="flex">
                        <div class="w-10 h-10 image-fit zoom-in">
                            <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="{{ url ('backend/dist/images/preview-13.jpg')}}" title="Uploaded at 3 December 2020">
                        </div>
                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                            <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="{{ url ('backend/dist/images/preview-13.jpg')}}" title="Uploaded at 3 December 2020">
                        </div>
                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                            <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="{{ url ('backend/dist/images/preview-13.jpg')}}" title="Uploaded at 3 December 2020">
                        </div>
                    </div>
                </td>
                <td>
                    <a href="" class="font-medium whitespace-no-wrap">Samsung Q90 QLED TV</a>
                    <div class="text-gray-600 text-xs whitespace-no-wrap">Electronic</div>
                </td>
                <td class="text-center">82</td>
                <td class="w-40">
                    <div class="flex items-center justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                </td>
                <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
{{--                        {{ route('user-edit-product', $item->id) }}--}}
                        <a class="flex items-center mr-3" href="#"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                        <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                    </div>
                </td>
            </tr>








            </tbody>
        </table>
    </div>
    <!-- END: Data List -->
    <!-- BEGIN: Pagination -->
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-no-wrap items-center">
        <ul class="pagination">
            <li>
                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
            </li>
            <li>
                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
            </li>
            <li> <a class="pagination__link" href="">...</a> </li>
            <li> <a class="pagination__link" href="">1</a> </li>
            <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
            <li> <a class="pagination__link" href="">3</a> </li>
            <li> <a class="pagination__link" href="">...</a> </li>
            <li>
                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
            </li>
            <li>
                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
            </li>
        </ul>
        <select class="w-20 input box mt-3 sm:mt-0">
            <option>10</option>
            <option>25</option>
            <option>35</option>
            <option>50</option>
        </select>
    </div>
    <!-- END: Pagination -->
</div>
<!-- BEGIN: Delete Confirmation Modal -->
<div class="modal" id="delete-confirmation-modal">
    <div class="modal__content">
        <div class="p-5 text-center">
            <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
            <div class="text-3xl mt-5">Are you sure?</div>
            <div class="text-gray-600 mt-2">Do you really want to delete these records? This process cannot be undone.</div>
        </div>
        <div class="px-5 pb-8 text-center">
            <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 mr-1">Cancel</button>
            <button type="button" class="button w-24 bg-theme-6 text-white">Delete</button>
        </div>
    </div>
</div>
@endsection

