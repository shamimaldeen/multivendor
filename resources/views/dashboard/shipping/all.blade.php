@extends('layouts.app')

@section('title', __('Shipping'))
@section('content')
{{--  <div class="row justify-content-center text-center mt-8">--}}
{{--    <div class="col-lg-5">--}}
{{--      <div class="title_sections_inner margin-b-5">--}}
{{--        <h2>{{ __('Shipping') }}</h2>--}}
{{--            <a href="{{ route('user-add-shipping') }}" class="btn btn_sm_primary c-white effect-letter bg-blue"><em class="icon ni ni-plus"></em> {{ __('Add new location') }}</a>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </div>--}}

{{--@if (!empty($user->shipping))--}}
{{--         <div class="flex-table mt-4">--}}
{{--             <div class="flex-table-header">--}}
{{--                 <span>{{ __('Country') }}</span>--}}
{{--                 <span>{{ __('State') }}</span>--}}
{{--                 <span class="cell-end">{{ __('Actions') }}</span>--}}
{{--             </div>--}}
{{--              @foreach ($user->shipping as $key => $value)--}}
{{--                 <div class="flex-table-item">--}}
{{--                     <div class="flex-table-cell" data-th="{{ __('Country') }}">--}}
{{--                         <span class="light-text fs-11px">{{ $key }}</span>--}}
{{--                     </div>--}}
{{--                     <div class="flex-table-cell" data-th="{{ __('States') }}">--}}
{{--                         <span class="light-text fs-11px">{{ count(user('shipping.'.$key)) }}</span>--}}
{{--                     </div>--}}
{{--                     <div class="flex-table-cell cell-end" data-th="">--}}
{{--                      <div class="d-flex">--}}
{{--                        <a class="text-sticker" href="{{ route('user-edit-shipping', $key) }}">{{ __('Edit') }} <i class="tio edit"></i></a>--}}
{{--                        <a class="text-sticker bg-danger c-white" data-confirm="{{ __('Are you sure you want to delete this?') }}" href="{{ route('user-delete-shipping', $key) }}">{{ __('Delete') }} <i class="tio edit"></i></a>--}}
{{--                      </div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--                  @endforeach--}}
{{--               </div>--}}
{{--@else--}}
{{--<div class="nk-block-head">--}}
{{--   <div class="nk-block-head-content text-center">--}}
{{--       <h5 class="nk-block-title fw-normal">{{ __('Nothing found') }}</h5>--}}
{{--   </div>--}}
{{--</div>--}}
{{--@endif--}}


  <div class="content-center text-center mt-8">
    <div class="col-lg-5">
      <div class="title_sections_inner margin-b-5">
        <h1 style="font-size: 40px;">{{ __('Shipping') }}</h1>

            <a style="font-size: 20px;" href="{{ route('user-add-shipping') }}" class="btn btn_sm_primary c-white effect-letter bg-blue"><em class="icon ni ni-plus"></em> {{ __('Add new location') }}</a>
      </div>
    </div>
  </div>
<div class="grid grid-cols-12 gap-6 mt-5">

    <!-- BEGIN: Data List -->
    <div class="intro-y col-span-8 overflow-auto lg:overflow-visible">
        <table class="table table-report -mt-2">
            <thead>
            <tr>
                <th class="whitespace-no-wrap">Country</th>
                <th class="whitespace-no-wrap">State</th>
                <th class="text-center whitespace-no-wrap">ACTIONS</th>
            </tr>
            </thead>
            <tbody>
         @if (!empty($user->shipping))
            @foreach ($user->shipping as $key => $value)
                <tr class="intro-x">

                    <td>
                        <span class="font-medium whitespace-no-wrap">{{ $key }}  </span>

                    </td>
                    <td class="text-center">{{ count(user('shipping.'.$key)) }}</td>
                    <td class="w-40">
                        <div class="flex items-center justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                    </td>
                   <td>
                    <a class="text-sticker" href="{{ route('user-edit-shipping', $key) }}">{{ __('Edit') }} <i class="tio edit"></i></a>
                     <a class="text-sticker bg-danger c-white" data-confirm="{{ __('Are you sure you want to delete this?') }}" href="{{ route('user-delete-shipping', $key) }}">{{ __('Delete') }} <i class="tio edit"></i></a>
                   </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@else
<div class="nk-block-head">
   <div class="nk-block-head-content text-center">
       <h5 class="nk-block-title fw-normal">{{ __('Nothing found') }}</h5>
   </div>
</div>
@endif
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