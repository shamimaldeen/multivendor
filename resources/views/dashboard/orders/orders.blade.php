@extends('layouts.app')
@section('title', __('Orders'))
@section('content')
{{--@section('footerJS')--}}
{{--<script src="{{ url('js/others.js') }}"></script>--}}
{{--@stop--}}
{{--  <div class="row justify-content-center text-center mt-8">--}}
{{--    <div class="col-lg-5">--}}
{{--      <div class="title_sections_inner margin-b-5">--}}
{{--        <h2>{{ __('Orders') }}</h2>--}}

{{--        <a href="{{ route('user-export-orders') }}">{{ __('Export') }}</a>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </div>--}}
{{--<div class="container-fluid">--}}
{{--  <div class="flex-table">--}}
{{--    <!--Table header-->--}}
{{--    <div class="flex-table-header">--}}
{{--        <span>--}}
{{--          <div class="nk-tb-col nk-tb-col-check">--}}
{{--             <div class="custom-control custom-control-sm custom-checkbox notext select_all">--}}
{{--              <input type="checkbox" class="custom-control-input" id="select_all">--}}
{{--              <label class="custom-control-label" for="select_all"></label>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </span>--}}
{{--        <span>{{ __('Ref') }}</span>--}}
{{--        <span>{{ __('Gateway') }}</span>--}}
{{--        <span>{{ __('Date') }}</span>--}}
{{--        <span>{{ __('Status') }}</span>--}}
{{--        <span>{{ __('Name') }}</span>--}}
{{--        <span>{{ __('Purchased') }}</span>--}}
{{--        <span class="cell-end">--}}
{{--         <div class="dropdown">--}}
{{--            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger mr-n1" data-toggle="dropdown"><em class="icon tio more_vertical"></em></a>--}}
{{--            <div class="dropdown-menu dropdown-menu-right">--}}
{{--               <ul class="link-list-opt no-bdr m-0">--}}
{{--                  <li>--}}
{{--                    <a class="update_all d-flex text-muted" data-route="{{ route('user-order-status') }}" data-type="mark_as_delivered"><em class="icon tio truck"></em><span class="mb-3 ml-2">{{ __('Mark as Delivered') }}</span></a>--}}
{{--                  </li>--}}

{{--                  <li><a class="update_all text-muted d-flex" data-route="{{ route('user-order-status') }}" data-type="remove"><em class="icon tio add_to_trash"></em><span class="mb-0 ml-2">{{ __('Remove Orders') }}</span></a></li>--}}
{{--               </ul>--}}
{{--            </div>--}}
{{--         </div>--}}
{{--        </span>--}}
{{--    </div>--}}

{{--    @foreach($orders as $order)--}}
{{--    <!--Table item-->--}}
{{--    <div class="flex-table-item">--}}
{{--        <div class="flex-table-cell">--}}
{{--           <div class="custom-control custom-control-sm custom-checkbox notext">--}}
{{--            <input type="checkbox" name="action_select[]" value="{{ $order->id }}" class="custom-control-input" id="{{ 'select_'.$order->id }}">--}}
{{--            <label class="custom-control-label" for="{{ 'select_'.$order->id }}"></label>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--        <div class="flex-table-cell" data-th="{{ __('Reference') }}">--}}
{{--            <span class="light-text">{{ $order->ref }}</span>--}}
{{--        </div>--}}
{{--        <div class="flex-table-cell" data-th="{{ __('Gateway') }}">--}}
{{--            <span class="light-text">{{ $order->gateway }}</span>--}}
{{--        </div>--}}
{{--        <div class="flex-table-cell" data-th="{{ __('Date') }}">--}}
{{--            <span class="dark-inverted is-weight-600">{{ \Carbon\Carbon::parse($order->created_at)->toFormattedDateString() }}</span>--}}
{{--        </div>--}}
{{--        <div class="flex-table-cell" data-th="{{ __('Status') }}">--}}
{{--            <span class="tag is-green is-rounded">{{ $order->order_status == 1 ? __('Delivered') : '' }} {{ $order->order_status == 2 ? __('Pending') : '' }} {{ $order->order_status == 3 ? __('Canceled') : '' }}</span>--}}
{{--        </div>--}}
{{--        <div class="flex-table-cell" data-th="{{ __('Name') }}">--}}
{{--            <a class="action-link is-pushed-mobile">{{ $order->details->first_name . ' ' . $order->details->last_name ?? ''  }}</a>--}}
{{--        </div>--}}
{{--        <div class="flex-table-cell" data-th="{{ __('Purchased') }}">--}}
{{--            <a class="action-link is-pushed-mobile">{{ count($order->products) .' @ '. clean(Currency::symbol(user('gateway.currency')), 'titles') .' '. number_format($order->price) }}</a>--}}
{{--        </div>--}}
{{--        <div class="flex-table-cell cell-end" data-th="Actions">--}}

{{--            <a href="{{ route('user-single-order', $order->id) }}" class="text-sticker">{{ __('Order Details') }}</a>--}}
{{--                 <div class="dropdown mr-n1">--}}
{{--                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon tio more_vertical"></em></a>--}}
{{--                    <div class="dropdown-menu dropdown-menu-right">--}}
{{--                       <ul class="link-list-opt no-bdr p-0 m-0">--}}
{{--                          <li>--}}
{{--                            <form action="{{ route('user-order-status') }}" method="post">--}}
{{--                              @csrf--}}
{{--                              <input type="hidden" name="id" value="{{ $order->id }}">--}}
{{--                              <input type="hidden" name="action" value="mark_as_delivered">--}}
{{--                              <button class="btn" title="{{ __('Remove Order') }}" data-confirm="{{ __('Are you sure?') }}">--}}
{{--                                <em class="icon tio truck"></em>--}}
{{--                                <span>{{ __('Mark as Delivered') }}</span>--}}
{{--                              </button>--}}
{{--                            </form>--}}
{{--                          </li>--}}
{{--                          <li>--}}
{{--                            <form action="{{ route('user-order-status') }}" method="post">--}}
{{--                              @csrf--}}
{{--                              <input type="hidden" name="id" value="{{ $order->id }}">--}}
{{--                              <input type="hidden" name="action" value="remove">--}}
{{--                              <button class="btn" title="{{ __('Remove Order') }}" data-confirm="{{ __('Are you sure you want to remove this order?') }}">--}}
{{--                                <em class="icon tio add_to_trash"></em>--}}
{{--                                <span class="ml-1">{{ __('Remove Order') }}</span>--}}
{{--                              </button>--}}
{{--                            </form>--}}
{{--                          </li>--}}
{{--                       </ul>--}}
{{--                    </div>--}}
{{--                 </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    @endforeach--}}
{{--</div>--}}
{{--</div>--}}
{{--  <div class="card">--}}
{{--    <div class="card-inner">--}}
{{--      <div class="nk-block-between-md g-3">--}}
{{--        <div class="g">--}}
{{--          {{ $orders->links() }}--}}
{{--        </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--  </div>--}}
{{--@stop--}}
<h2 style="text-align: center" class="intro-y text-lg font-medium mt-10">
   Orders
</h2>
<div style="text-align: center">
    <a href="{{ route('user-export-orders') }}">{{ __('Export') }}</a>
</div>

<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">




        <div class="hidden md:block mx-auto text-gray-600"></div>
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
             <span>
                <div class="nk-tb-col nk-tb-col-check">
                       <div class="custom-control custom-control-sm custom-checkbox notext select_all">
                        <input type="checkbox" class="custom-control-input" id="select_all">
                        <label class="custom-control-label" for="select_all"></label>
                      </div>
                    </div>
                  </span>
                <th class="whitespace-no-wrap">Ref</th>
                <th class="whitespace-no-wrap">Gateway</th>
                <th class="text-center whitespace-no-wrap">Date</th>
                <th class="text-center whitespace-no-wrap">STATUS</th>
                <th class="text-center whitespace-no-wrap">Name</th>
                <th class="text-center whitespace-no-wrap">Purchased</th>
                <th class="text-center whitespace-no-wrap">Action</th>


            </tr>
            </thead>
            <tbody>

{{--            @foreach ()--}}
                <tr class="intro-x">
                   <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>



                </tr>
{{--            @endforeach--}}

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