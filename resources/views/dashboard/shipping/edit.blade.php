@extends('layouts.app')

@section('title', __('Edit Shipping'))
@section('content')
    <form action="{{ route('user-shipping-post', 'new') }}" method="post">
        @csrf
        <div class="row justify-content-center text-center mt-8">
            <div class="col-lg-5">
                <div class="title_sections_inner margin-b-5">
                    <h2>{{ __('Edit Shipping') }}</h2>
                </div>
            </div>
        </div>
        <div class="mt-4 card card-body border-0 card-shadow radius-5">
            <div class="form-group custom mb-1 mb-lg-4">
                <label class="muted-deep fw-normal form-label fw-normal ml-2 mb-4">
                    <span>{{ __('Select country') }}</span>
                    <small class="d-block mt-2">{{ __('Select a shipping country and add the state(s) or province below') }}</small>
                </label>
                <div class="form-control-wrap">
                    <select class="form-select custom-select" data-search="on" data-ui="lg" name="country">
                        @foreach ($countries as $item => $value)
                            <option value="{{$value}}" {{ $slug == $value ? 'selected' : '' }}>{{$value}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="dy-wrap">
                @foreach ($province as $key => $value)
                    <div class="dy-item p-4 mb-3 card-bordered bdrs-20 append" data-dy-name="shipping">
                        <div class="row align-center">
                            <div class="col-md-4">
                                <div class="form-group custom mb-1">
                                    <label class="muted-deep fw-normal m-2">{{ __('State or Province') }}</label>
                                    <input type="text" class="form-control" placeholder="{{ __('Specify state or province') }}" data-dy-item-name="province" name="" value="{{ $key ?? '' }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group custom mb-1">
                                    <label class="muted-deep fw-normal m-2">{{ __('Type') }}</label>
                                    <div class="form-control-wrap">
                                        <select name="type" class="custom-select" data-dy-item-name="type">
                                            <option value="flat" {{ !empty($value['type']) && $value['type'] == 'flat' ? 'selected' : '' }}>{{ __('Flat rate') }}</option>
                                            <option value="pickup" {{ !empty($value['type']) && $value['type'] == 'pickup' ? 'selected' : '' }}>{{ __('Pickup') }}</option>
                                            <option value="free" {{ !empty($value['type']) && $value['type'] == 'free' ? 'selected' : '' }}>{{ __('Free shipping') }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group custom mb-1">
                                    <label class="muted-deep fw-normal m-2">{{ __('Costs') }}</label>
                                    <input type="text" class="form-control" value=" {{ $value['cost'] ?? '' }}" placeholder="{{ __('Shipping cost') }}" data-dy-item-name="cost" name="">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button class="rouned-pill btn-danger btn remove" type="button">X</button>
                            </div>
                        </div>
                        <hr class="d-block d-lg-none">
                    </div>
                @endforeach
            </div>

            <div>
                <a class="btn btn_sm_primary c-white effect-letter bg-blue dy-add-field-button">{{ __('Add State or Province') }}</a>
            </div>

            <div class="mt-5">

                <button class="btn btn_sm_primary c-white effect-letter bg-blue" type="submit">{{ __('Save') }}</button>
            </div>
        </div>
    </form>







{{--    <form action="{{ route('user-shipping-post', 'new') }}" method="post">--}}
{{--        @csrf--}}

{{--        <div class="row justify-content-center text-center mt-8">--}}
{{--            <div class="col-lg-5">--}}
{{--                <div class="title_sections_inner margin-b-5">--}}
{{--                    <h2 style="font-size: 40px">{{ __(' Edit Shipping ') }}</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


{{--        <div class="mt-4 card card-body border-0 card-shadow radius-5">--}}
{{--            <div class="form-group custom mb-1 mb-lg-4">--}}


{{--                <div class="mt-3">--}}
{{--                    <label> Select Category</label>--}}
{{--                    <div class="mt-2">--}}
{{--                        <select data-placeholder="Select Category" class="tail-select w-full" name="country" >--}}
{{--                            @foreach ($countries as $item => $value)--}}
{{--                                <option value=" {{$value}}" {{ $slug == $value ? 'selected' : '' }}>{{$value}} </option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="dy-wrap"></div>--}}

{{--            @foreach ($province as $key => $value)--}}
{{--            <div class="col-md-3">--}}
{{--                <div class="form-group custom mb-6">--}}
{{--                    <br>--}}
{{--                    <label >{{ __('Type') }}</label>--}}
{{--                    <div class="form-control-wrap">--}}
{{--                        <select name="type"  data-placeholder="Select Category" class="custom-select">--}}
{{--                            select  class="custom-select" data-dy-item-name="type">--}}
{{--                            <option value="free" {{ !empty($value['type']) && $value['type'] == 'flat' ? 'selected' : '' }}>{{ __('Flat rate') }}</option>--}}
{{--                            <option value="free" {{ !empty($value['type']) && $value['type'] == 'pickup' ? 'selected' : '' }}>{{ __('Pickup') }}</option>--}}
{{--                            <option value="free"  {{ !empty($value['type']) && $value['type'] == 'free' ? 'selected' : '' }}>{{ __('Free shipping') }}</option>--}}
{{--                        </select>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="dy-field-add d-none">--}}
{{--                <div class="dy-item p-4 mb-3 card-bordered bdrs-20" data-dy-name="shipping">--}}
{{--                    <div class="row align-center">--}}
{{--                        <div class="col-md-4">--}}
{{--                            <div class="form-group custom mb-1">--}}
{{--                                <label class="muted-deep fw-normal m-2">{{ __('State or Province') }}</label>--}}
{{--                                <input type="text" class="form-control" placeholder="{{ __('Specify state or province') }}" data-dy-item-name="province" name="">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-md-3">--}}
{{--                            <div class="form-group custom mb-1">--}}
{{--                                <label class="muted-deep fw-normal m-2">{{ __('Costs') }}</label>--}}
{{--                                <input type="text" class="form-control" value=" {{ $value['cost'] ?? '' }}" placeholder="{{ __('Shipping cost') }}" data-dy-item-name="cost" name="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-2 d-flex align-center">--}}
{{--                            <button class="rouned-pill btn-danger btn remove" type="button">X</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <hr class="d-block d-lg-none">--}}
{{--                </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}

{{--            <div class="mt-5">--}}

{{--                <button class="btn btn_sm_primary c-white effect-letter bg-blue" type="submit">{{ __('Save') }}</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </form>--}}

@endsection