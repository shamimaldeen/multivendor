@extends('layouts.app')
@section('title', 'Categories')
@section('footerJS')
<script src="{{ url('js/others.js') }}"></script>
<script>
  (function($){
  "use strict";
    $('#update_category').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget);
      var title         = button.data('title');
      var id            = button.data('id');
      var description   = button.data('description');
      var image         = button.data('image');
      var status        = button.data('status');
      var modal = $(this);
      if(status === 1){
        modal.find('.modal-body #select-111').attr('selected', '');
        modal.find('.modal-body #select-222').removeAttr('selected');
      }
      if(status === 0){
        modal.find('.modal-body #select-111').removeAttr('selected');
        modal.find('.modal-body #select-222').attr('selected', '');
      }
      modal.find('.modal-body input[name="title"]').val(title);
      modal.find('.modal-body input[name="id"]').val(id);
      modal.find('.modal-body textarea[name="description"]').html(description);
      modal.find('.modal-body .p-file-upload-image').find('img').attr('src', image);
      modal.find('.modal-body .p-file-upload-image').find('img').show();
    });
  })(jQuery);
</script>
@stop
@section('content')
{{--      <div class="row mt-9">--}}
{{--          <div class="col-12 col-md-5">--}}
{{--           <div class="container-fluid m-auto">--}}
{{--             <div class="card-shadow border-0 p-4 card card-inner radius-10">--}}
{{--                 <form method="post" action="{{ route('user-product-post-category', 'new') }}" enctype="multipart/form-data" class="mb-3">--}}
{{--                   @csrf--}}
{{--                    <h5 class="text-muted">{{ __('Post a category') }}</h5>--}}
{{--                    <div class="row mt-3">--}}
{{--                      <div class="col-md-6">--}}
{{--                        <div class="form-group custom">--}}
{{--                         <input class="form-control" type="text" placeholder="{{ __('Category name') }}" name="title" />--}}
{{--                        </div>--}}


{{--                      </div>--}}
{{--                      <div class="col-md-6">--}}
{{--                      <div class="form-group mt-4 mt-md-0">--}}
{{--                         <div class="form-control-wrap">--}}
{{--                            <select class="form-control custom-select" data-search="off" data-ui="lg" name="status">--}}
{{--                               <option value="1"> {{ __('Active') }} </option>--}}
{{--                               <option value="0"> {{ __('Hidden') }}</option>--}}
{{--                           </select>--}}
{{--                         </div>--}}
{{--                      </div>--}}
{{--                      </div>--}}
{{--                      <div class="col-12">--}}
{{--                           <div class="card border-0 shadow-none custom-input-uploader">--}}
{{--                               <div class="card-body p-0">--}}
{{--                                   <div class="file-upload">--}}
{{--                                       <input class="file-input uploader_input" name="media" type="file">--}}
{{--                                       <img src="{{ url('media/misc/upload-image-placeholder.svg') }}" class="mb-3 h-73px" alt="">--}}
{{--                                       <div class="card-subtitle">{{ __('Drag n Drop your file here') }}</div>--}}

{{--                                        <div class="list-files w-100 mt-4">--}}
{{--                                        </div>--}}
{{--                                   </div>--}}
{{--                               </div>--}}
{{--                           </div>--}}
{{--                      </div>--}}
{{--                      <div class="col-12 mt-3">--}}
{{--                        <div class="form-group custom">--}}
{{--                          <textarea class="form-control" name="description" placeholder="{{ __('Short description *optional') }}"></textarea>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                    </div>--}}
{{--                   <button class="btn scale btn_sm_primary bg-blue c-white rounded-8 btn-block mt-3">{{ __('Post') }}</button>--}}
{{--                 </form>--}}
{{--               </p>--}}
{{--             </div>--}}
{{--           </div>--}}
{{--          </div>--}}

{{--          <div class="col-12 col-md-7 mt-5">--}}
{{--            <div class="nk-block">--}}

{{--         <div class="flex-table mt-4">--}}

{{--             <!--Table header-->--}}
{{--             <div class="flex-table-header">--}}
{{--                 <span>{{ __('Customer') }}</span>--}}
{{--                 <span>{{ __('Date') }}</span>--}}
{{--                 <span>{{ __('Status') }}</span>--}}
{{--                 <span class="cell-end">{{ __('Actions') }}</span>--}}
{{--             </div>--}}
{{--              @foreach ($categories as $category)--}}
{{--                 <div class="flex-table-item">--}}
{{--                     <div class="flex-table-cell is-media" data-th="">--}}
{{--                         <div class="h-avatar is-medium">--}}
{{--                             <img class="avatar is-squared h-40px object-cover" src="{{ getStorage('media/user/categories', $category->media) }}" alt=" ">--}}
{{--                         </div>--}}
{{--                         <div>--}}
{{--                             <span class="item-name dark-inverted fs-11px">{{ $category->title }}</span>--}}
{{--                         </div>--}}
{{--                     </div>--}}
{{--                     <div class="flex-table-cell" data-th="{{ __('Date') }}">--}}
{{--                         <span class="light-text fs-11px">{{ Carbon\Carbon::parse($category->created_at)->toFormattedDateString() }}</span>--}}
{{--                     </div>--}}
{{--                     <div class="flex-table-cell" data-th="{{ __('Status') }}">--}}
{{--                         <span class="tag fs-11px">{{ $category->status == 1 ? __('Active') : 'Hidden' }}</span>--}}
{{--                     </div>--}}
{{--                     <div class="flex-table-cell cell-end" data-th="">--}}
{{--                      <div class="d-flex">--}}
{{--                        <a class="text-sticker" href="#" data-toggle="modal" data-id="{{ $category->id }}" data-title="{{ $category->title }}" data-description="{{ $category->description }}" data-image="{{ getStorage('media/user/categories', $category->media) }}" data-status="{{ $category->status }}" data-target="#update_category">{{ __('Edit') }} <i class="tio edit"></i></a>--}}

{{--                        <form action="{{ route('user-product-post-category', 'delete') }}" method="post">--}}
{{--                          @csrf--}}
{{--                          <input type="hidden" name="id" value="{{ $category->id }}">--}}
{{--                          <button class="text-sticker border-0 bg-danger c-white fs-15px" title="" data-confirm="{{ __('Are you sure you want to delete this category?') }}"><em class="icon tio add_to_trash"></em></button>--}}
{{--                        </form>--}}
{{--                      </div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--                  @endforeach--}}
{{--               </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--      </div>--}}

{{--  <div class="modal fade" tabindex="-1" role="dialog" id="update_category" aria-hidden="true">--}}
{{--      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">--}}
{{--          <div class="modal-content">--}}
{{--              <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>--}}
{{--              <div class="modal-body modal-body-lg">--}}
{{--                  <form action="{{ route('user-product-post-category', 'edit') }}" method="post" enctype="multipart/form-data">--}}
{{--                      @csrf--}}
{{--                      <input type="hidden" name="id">--}}
{{--                      <h5 class="text-muted">{{ __('Edit category') }}</h5>--}}
{{--                      <div class="row mt-3">--}}
{{--                        <div class="col-md-6">--}}
{{--                          <div class="form-group custom">--}}
{{--                           <input type="text" class="form-control" placeholder="{{ __('Category name') }}" name="title" />--}}
{{--                          </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6">--}}
{{--                        <div class="form-group mt-4 mt-md-0">--}}
{{--                           <div class="form-control-wrap">--}}
{{--                              <select class="form-control custom-select" data-search="off" data-ui="lg" name="status">--}}
{{--                                 <option value="1" id="select-111"> {{ __('Active') }} </option>--}}
{{--                                 <option value="0" id="select-222"> {{ __('Hidden') }}</option>--}}
{{--                             </select>--}}
{{--                           </div>--}}
{{--                        </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-12 mt-4">--}}
{{--                           <div class="card border-0 shadow-none custom-input-uploader">--}}
{{--                               <div class="card-body p-0">--}}
{{--                                   <div class="file-upload">--}}
{{--                                       <input class="file-input uploader_input" name="media" type="file">--}}
{{--                                       <img src="{{ url('media/misc/upload-image-placeholder.svg') }}" class="mb-3 h-73px" alt="">--}}
{{--                                       <div class="card-subtitle">{{ __('Drag n Drop your file here') }}</div>--}}

{{--                                        <div class="list-files w-100 mt-4">--}}
{{--                                          <div class="p-file-upload-preview">--}}
{{--                                            <main class="p-file-upload-p-main">--}}
{{--                                              <div class="p-file-upload-image">--}}
{{--                                                <img alt="agency-minimal-2-about-desktop.jpg" class="" src="">--}}
{{--                                              </div>--}}
{{--                                            </main>--}}
{{--                                          </div>--}}
{{--                                        </div>--}}
{{--                                   </div>--}}
{{--                               </div>--}}
{{--                           </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-12 mt-3">--}}
{{--                          <div class="form-group custom">--}}
{{--                            <textarea name="description" class="form-control" placeholder="{{ __('Short description *optional') }}"></textarea>--}}
{{--                          </div>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      <div class="form-group mt-5">--}}
{{--                       <button type="submit" class="btn btn-block bg-blue btn_sm_primary text-white">{{ __('Submit') }}</button>--}}
{{--                      </div>--}}
{{--                  </form>--}}
{{--              </div><!-- .modal-body -->--}}
{{--          </div><!-- .modal-content -->--}}
{{--      </div><!-- .modal-dialog -->--}}
{{--  </div>--}}
{{--  @stop--}}

<h2 class="intro-y text-lg font-medium mt-10">
    Product List
</h2>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">
        <a href="{{ route('user-add-category') }}" class="button text-white bg-theme-1 shadow-md mr-2">Add New Category</a>
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
                <th class="whitespace-no-wrap">CATEGORY NAME</th>
                <th class="text-center whitespace-no-wrap">ACTIONS</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($categories as $category)
            <tr class="intro-x">
                <td class="w-40">
                    <div class="flex">
                        <div class="w-10 h-10 image-fit zoom-in">
                            <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="{{ getStorage('media/user/categories', $category->media) }}" title="Uploaded at 3 December 2020">
                        </div>
                    </div>
                </td>
                <td>
{{--                    <a href="" class="font-medium whitespace-no-wrap">msung Q90 QLED TV</a>--}}
                    <div class="font-medium whitespace-no-wrap">{{ $category->title }}</div>
                </td>
                <td class="table-report__action w-56">
                    <form action="{{ route('user-product-post-category', 'delete') }}" method="post">
                      @csrf
                        <input type="hidden" name="id" value="{{ $category->id }}">
                    <div class="flex justify-center items-center">
                        <a class="flex items-center mr-3" href=""> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                        <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                    </div>
                </form>
                </td>
            </tr>
            @endforeach
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