@extends('layouts.app')

@section('headJS')
<script src="{{ asset('js/Sortable.min.js') }}"></script>
@stop
@section('footerJS')
<script src="{{ url('js/others.js') }}"></script>
  <script src="{{ url('tinymce/tinymce.min.js') }}"></script>
  <script src="{{ url('tinymce/sr.js') }}"></script>
@stop
@section('title', __('Blogs'))
@section('content')
<div class="nk-block-head mt-8">

  <div class="row justify-content-center text-center">
    <div class="col-lg-5">
      <div class="title_sections_inner margin-b-5">
        <h2>{{ __('Posts') }} <span class="badge badge-dim badge-primary badge-pill">{{ count($blogs) }}</span></h2>
        <a href="#" data-toggle="modal" data-target="#new-blog" class="btn scale btn_primary bg-blue c-white effect-letter rounded-8">{{ __('Add new blog') }}</a>
      </div>
    </div>
  </div>
</div>
@if (count($blogs) < 1)
   <div class="nk-block-head-content text-center">
       <h2 class="nk-block-title fw-normal">{{ __('No blog posts found') }}</h2>
   </div>
@endif
<div class="row sortable-div" data-handle=".item-handle" data-route="{{ route('user-blog-sortable') }}">
   @foreach ($blogs as $blog)
      <div class="col-sm-6 col-md-4 col-lg-3 sortable-item" data-id="{{$blog->id}}">
          <div class="card card-shadow radius-5 border-0 product-card mb-5">
            <div class="card-body">
             <div class="d-flex flex-column align-items-center">
                <div class="product-img w-100">
                   <img class="w-100 radius-5 h-200px ob-cover" src="{{ mediaExists('media/user/blog', $blog->image) ? getStorage('media/user/blog', $blog->image) : $blog->extra->media_url ?? '' }}" alt=" ">
                </div>
                <div class="d-flex flex-column mr-auto mt-3">
                   <div class="d-flex flex-column mr-auto">
                      <span class="text-muted font-weight-bold text-sticker m-0 w-100">{{ nr($blog->track_portfolio) }} {{ __('Views') }}</span>
                      <a class="text-dark text-hover-primary font-size-h4 font-weight-bolder mt-2">{{ $blog->name }}</a>
                   </div>
                </div>
             </div>
              
             <div class="mb-10 mt-2 fs-13px font-weight-bold">{{ Str::limit(clean($blog->note, 'clean_all'), $limit = 100, $end = '...') }}</div>
             
              <div class="pt-3 bdrs-20 bg-white d-flex align-items-center between-center">
               <div class="d-flex">
                  <a href="Javascript::void" data-toggle="modal" data-target="#edit-blog-{{ $blog->id }}" class="text-muted d-flex"><em class="icon ni ni-edit lead mr-1"></em> {{ __('Edit') }}</a>
               </div>
               <div class="d-flex">
                  <a data-confirm="{{ __('Are you sure you want to delete this?') }}" href="{{ url(route('user-blog-delete', $blog->id)) }}" class="text-danger ml-2 d-flex bg-transparent align-items-center border-0">
                    <em class="icon ni ni-edit lead mr-1"></em> {{ __('Delete') }}</a>
               </div>
               <div class="d-flex">
                  <a href="#" class="text-muted item-handle ml-2 d-flex"><em class="icon tio move_page lead mr-1"></em></a>
               </div>
              </div>
            </div>
        </div>
      </div>
   <!-- @ Profile Edit Modal @e -->
   <div class="modal fade" tabindex="-1" role="dialog" id="edit-blog-{{ $blog->id }}">
       <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
           <div class="modal-content">
               <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross"></em></a>
               <div class="modal-body modal-body-lg">
                  <div class="row mt-4">
                    <div class="col-12">
                      <a href="{{ route('user-blog-delete', $blog->id) }}" class="btn btn-block btn-danger mb-5"><em class="icon ni ni-trash"></em> <span>{{ __('Delete') }}</span></a>
                    </div>
                  </div>
                  <h5 class="title mb-5">{{ __('Edit') }} <b class="text-dark">{{ $blog->name ?? '' }}</b></h5>
                  <form action="{{ route('user-blog') }}" method="post" enctype="multipart/form-data">
                     @csrf
                     <input type="hidden" value="{{ $blog->id }}" name="blog_id">
                     <ul class="nav nav-tabs nav-tabs-s2">
                         <li class="nav-item">
                             <a class="nav-link active" data-toggle="tab" href="#main_{{$blog->id}}"><em class="icon ni ni-files"></em> <span>{{ __('Main') }}</span></a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" data-toggle="tab" href="#other_{{$blog->id}}"><em class="icon ni ni-files"></em> <span>{{ __('Others') }}</span></a>
                         </li>
                     </ul>
                     <div class="tab-content">
                         <div class="tab-pane active" id="main_{{ $blog->id }}">
                            <div class="row gy-4">
                               <div class="col-12">
                                  <div class="form-group">
                                     <label class="form-label" for="name">{{ __('Name') }}</label>
                                     <input type="text" name="name" class="form-control form-control-lg" id="name" value="{{ $blog->name }}" placeholder="{{ __('Name') }}">
                                  </div>
                               </div>
                               <div class="col-12">
                                  <div class="form-group">
                                     <label class="form-label">{{ __('Note') }}</label>
                                      <textarea name="note" class="form-control form-control-lg editor" placeholder="{{ __('Note') }}">{{$blog->note}}</textarea>
                                  </div>
                                <h4 class="mt-3">{{ __('Note short code') }}</h4>
                                <code class="shortcode">&#123;&#123;title&#125;&#125;</code>
                                <p>{{ __('Note: use short codes with braces') }} &#123;&#123; &#125;&#125;</p>
                               </div>
                            </div>
                         </div>
                         <div class="tab-pane" id="other_{{$blog->id}}">
                           <div class="gy-4">
                               <div class="col-12">
                                  <div class="form-group">
                                     <label class="form-label" for="media_url">{{ __('Media Url') }}</label>
                                     <input type="text" name="media_url" class="form-control form-control-lg" id="media_url" value="{{ $blog->settings->media_url ?? '' }}" placeholder="{{ __('Media Url') }}">
                                  </div>
                               </div>
                               <div class="text-center">
                                 <h6 class="text-muted">{{ __('Or') }}</h6>
                               </div>
                               <div class="col-12">

                                 <div class="card border-0 shadow-none custom-input-uploader">
                                     <div class="card-body p-0">
                                         <div class="file-upload">
                                             <input class="file-input uploader_input" name="image" type="file">
                                             <img src="{{ url('media/misc/upload-image-placeholder.svg') }}" class="mb-3 h-73px" alt="">
                                             <div class="card-subtitle">{{ __('Drag n Drop your file here') }}</div>     

                                              <div class="list-files w-100 mt-4">
                                                <div class="p-file-upload-preview">
                                                  <main class="p-file-upload-p-main">
                                                    <div class="p-file-upload-image">
                                                      <img alt="{{ $blog->name }}" class="" src="{{ getStorage('media/user/blog', $blog->image) }}">
                                                    </div>
                                                  </main>
                                                </div>
                                              </div>
                                         </div>
                                     </div>
                                 </div>

                               </div>
                                @if(!empty($blog->image) && mediaExists('media/user/blog', $blog->image))
                                <a data-confirm="{{ __('Are you sure you want to delete this image?') }}" href="{{ route('user-blog', ['remove-image' => true, 'id' => $blog->id]) }}" class="btn btn-link">{{ __('Remove image') }}</a>
                               @endif
                           </div>
                         </div>
                      <button type="submit" class="btn btn_sm_primary bg-blue mt-4">{{ __('Post') }}</button>
                     </div>
                  </form>
               </div><!-- .modal-body -->
           </div><!-- .modal-content -->
       </div><!-- .modal-dialog -->
   </div><!-- .modal -->
  @endforeach
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="new-blog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <a href="#" class="close" data-dismiss="modal"></a>
      <div class="modal-body modal-body-lg">
        <h5 class="title mb-5">{{ __('New Blog') }}</h5>
        <form action="{{ route('user-blog') }}" method="post" enctype="multipart/form-data">
          @csrf
          <ul class="nav nav-tabs nav-tabs-s2">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#main"><span>{{ __('Main') }}</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#other"><span>{{ __('Others') }}</span></a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="main">
              <div class="row gy-4">
                <div class="col-12">
                  <div class="form-group">
                    <label class="form-label" for="name">{{ __('Name') }}</label> <input type="text" name="name" class="form-control form-control-lg" id="name" placeholder="{{ __('Name') }}">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label class="form-label">{{ __('Note') }}</label> 
                    <textarea name="note" class="form-control form-control-lg editor" placeholder="{{ __('Note') }}"></textarea>
                  </div>
                  <h4 class="mt-3">{{ __('Note short code') }}</h4>
                  <code>&#123;&#123;title&#125;&#125;</code>
                  <p>Note: use short codes with braces &#123;&#123; &#125;&#125;</p>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="other">
              <div class="gy-4">
                <div class="col-12">
                  <div class="form-group">
                    <label class="form-label" for="media_url">{{ __('Media Url') }}</label> <input type="text" name="media_url" class="form-control form-control-lg" id="media_url" placeholder="{{ __('Media Url') }}">
                  </div>
                </div>
                <div class="text-center">
                  <h6 class="text-muted">{{ __('Or') }}</h6>
                </div>

                                 <div class="card border-0 shadow-none custom-input-uploader">
                                     <div class="card-body p-0">
                                         <div class="file-upload">
                                             <input class="file-input uploader_input" name="image" type="file">
                                             <img src="{{ url('media/misc/upload-image-placeholder.svg') }}" class="mb-3 h-73px" alt="">
                                             <div class="card-subtitle">{{ __('Drag n Drop your file here') }}</div>     

                                              <div class="list-files w-100 mt-4"></div>
                                         </div>
                                     </div>
                                 </div>

              </div>
            </div>
          </div>
          <button type="submit" class="btn btn_sm_primary bg-blue mt-4">{{ __('Post') }}</button>
        </form>
      </div>
    </div><!-- .modal-body -->
  </div><!-- .modal-content -->
</div><!-- .modal-dialog -->
<!-- .modal -->
@endsection
