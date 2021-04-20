@extends('layouts.app')
@section('title', 'New Product')
@section('content')
    @if($step==0)
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form action="{{ url('add/service/step_0') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="intro-y box p-5">
                    <div class="mt-3">
                        <label style="text-align: center;margin-left: 200px;">Select Your Service</label>
                        <div class="mt-2">
                            <select  placeholder="Select Product Condition" class="tail-select w-full"  name="service_id">
                                @foreach($parent_service as $serv)
                                <option value="{{ $serv->id }}" >{{ $serv->service_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="text-right mt-5">
                        <button type="submit" class="button w-24 bg-theme-1 text-white">Next</button>
                    </div>
                </div>
            </form>
            <!-- END: Form Layout -->
        </div>
    </div>
    @elseif($step==1)
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 lg:col-span-6">
                <!-- BEGIN: Form Layout -->
                <form action="{{ url('add/service/step_0') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="intro-y box p-5">
                        <h2>{{ $p_service->service_name }}</h2>
                        @if($p_service->type==0)
                        <div class="mt-3">
                            @foreach($services as $service)
                                <div class="mt-2">
                                    <div class="form-check">
                                    <label class="form-check-label" for="exampleCheck1">{{ $service->service_name }}</label>
                                   <input type="radio" name="service_id" value="{{ $service->id }}">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @else
                            <div class="mt-3">
                                @foreach($services as $service)
                                    <div class="mt-2">
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleCheck1">{{ $service->service_name }}</label>
                                            <input type="checkbox" name="service_id[]" value="{{ $service->id }}">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        <div class="text-right mt-5">
                            <button type="submit" class="button w-24 bg-theme-1 text-white">Next</button>
                        </div>
                    </div>
                </form>
                <!-- END: Form Layout -->
            </div>
        </div>

    @elseif($step==2)
        <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form action="{{ url('add/service/step_2') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="intro-y box p-7">
                    <div class="mt-3">
                        <label style="text-align: center;margin-left: 200px;"> Service center Name</label>
                        <div class="mt-2">
{{--                            <label>Product Name</label>--}}
                            <input type="text" class="input w-full border mt-2" name="service_center_name" placeholder="Enter Service Center Name">

                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center">
                        <div class="sm:mt-2">
                            <label> Title</label>
                            <select class="input input--lg border mr-2" name="provider_title">
                                <option value="Mr">Mr</option>
                                <option value="Mrs">Mrs</option>
                            </select>
                        </div>
                        <div class="mt-3">
                            <label style="text-align: center;margin-left: 120px;"> ServiceProvider</label>
                            <div class="mt-2">
                                <input type="text" class="input w-full border mt-2" name="provider_name" placeholder="Enter Service Provider Name">

                            </div>
                        </div>

                        <div style="text-align: center;margin-left: 50px;" class="mt-2">
                            <label> Gender</label>
                            <select class="input input--lg border mr-2" name="provider_gender">
                                <option value="male">Male</option>
                                <option value="male">Female</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div>
                        <h2 style="text-align: center;">Do you have Business Partner ?</h2>
                        <div style="text-align: center;margin-left: 100px;" class="mt-3">
                            <div class="flex flex-col sm:flex-row mt-2">
                                <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2"> <input type="radio" name="is_partner" value="yes" class="input border mr-2" id="horizontal-radio-chris-evans"> <label class="cursor-pointer select-none" for="horizontal-radio-chris-evans">Yes</label> </div>
                                <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2 mt-2 sm:mt-0"> <input type="radio" name="is_partner" value="no" class="input border mr-2" id="horizontal-radio-liam-neeson"> <label class="cursor-pointer select-none" for="horizontal-radio-liam-neeson">No</label> </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="flex flex-col sm:flex-row items-center">

                        <div class="sm:mt-2">
                            <label > Title</label>
                            <select class="input input--sm border mr-2" name="partner_title">
                                <option value="Mr">Mr</option>
                                <option value="Mrs">Mrs</option>
                            </select>
                        </div>

                        <div class="mt-3">
                            <label style="text-align: center;margin-left: 100px;"> PartnerName</label>
                            <div class="mt-2">
                                <input type="text" class="input w-full border mt-2" name="partner_name" placeholder="Enter Partner Name">
                            </div>
                        </div>


                        <div style="text-align: center;margin-left: 50px;" class="mt-2">
                            <label> Gender</label>
                            <select class="input input--lg border mr-2" name="partner_gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>

                    <br>
                    <div>
                        <button style="margin-left: 50px;"> <i class="fa fa-plus-square-o">Add more partner</i></button>
                    </div>

                    <div style="text-align: center;margin-left: 50px;" class="mt-2">
                        <label for="">How many team or worker with you?</label>
                        <br>
                        <button style="font-size:24px"> <i style="font-size:24px" class="fa">&#xf146;</i></button>
                        <select class="input input--lg border mr-2" name="team_qty">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <button style="font-size:24px"> <i style="font-size:24px" class="fa">&#xf0fe;</i></button>
                    </div>
                    <br>

                    <div class="mt-2">
                        <label for="">24 hours open </label>
                        <select class="input input--lg border mr-2" name="is_24_hours_open">
                            < <option value="1" >Yes</option>
                            <option  value="0">No</option>
                        </select>

                    </div>
                    <br>

                    <div class="flex flex-col sm:flex-row items-center">
                        <div class="sm:mt-2">
                            <label for="">opening time</label>
                            <br>
                            <select class="input input--sm border mr-2" name="opening_time">
                                <option value="20">8 pm</option>
                                <option value="21">9 pm</option>
                                <option value="22">10pm</option>
                            </select>
                        </div>
                        <div  style="margin-left: 100px" class="mt-2">
                            <label for="">closing time</label>
                            <br>
                            <select class="input border mr-2" name="closing_time">
                                <option value="20">8 pm</option>
                                <option value="21">9 pm</option>
                                <option value="22">10pm</option>

                            </select>
                        </div>

                    </div>


                    <div class="text-right mt-5">
                        <button type="submit" class="button w-24 bg-theme-1 text-white">Next</button>
                    </div>
                </div>
            </form>
            <!-- END: Form Layout -->
        </div>
    </div>

    @elseif($step==3)
        <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form action="{{ url('add/service/step_3') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="intro-y box p-5">
                    <div class="mt-3">
                        <div style="text-align: center;margin-left: 50px;" class="mt-2">
                            <label for="">Servicing fee minimum price</label>
                            <br>
                            <button style="font-size:24px"> <i style="font-size:24px" class="fa">&#xf146;</i></button>
                            <select class="input input--lg border mr-2" name="minimum_price">
                                <option value="100">100</option>
                                <option value="200">200</option>
                                <option value="300">300</option>
                            </select>
                            <button style="font-size:24px"> <i style="font-size:24px" class="fa">&#xf0fe;</i>
                            </button>

                        </div>
                    </div>


                    <br>
                    <div class="mt-3">
                        <div style="text-align: center;margin-left: 50px;" class="mt-2">
                            <label for="">Servicing fee maximum price</label>
                            <br>
                            <button style="font-size:24px"> <i style="font-size:24px" class="fa">&#xf146;</i></button>
                            <select class="input input--lg border mr-2" name="maximum_price">
                                <option value="0">No Limit</option>
                                <option value="1000">1000</option>
                                <option value="2000">2000</option>
                                <option value="3000">3000</option>
                            </select>
                            <button style="font-size:24px"> <i style="font-size:24px" class="fa">&#xf0fe;</i>
                            </button>
                        </div>
                    </div>



                    <div class="mt-3">
                        <label > Who give the material charge</label>
                        <div class="mt-2">
                            <select  placeholder="Select Product Condition" class="tail-select w-full"  name="material_from">
                                <option value="customer">Customer</option>
                                <option value="vendor">Vendor</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="flex flex-col sm:flex-row items-center">
                        <div>
                            <h2 >Warrenty available</h2>
                            <div class="mt-3">
                                <div class="flex flex-col sm:flex-row mt-2">
                                    <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2"> <input type="radio" class="input border mr-2" id="horizontal-radio-chris-evans" name="is_warrenty" value="1"> <label class="cursor-pointer select-none" for="horizontal-radio-chris-evans">Yes</label> </div>
                                    <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2 mt-2 sm:mt-0"> <input type="radio" class="input border mr-2" id="horizontal-radio-liam-neeson" name="is_warrenty" value="0"> <label class="cursor-pointer select-none" for="horizontal-radio-liam-neeson">No</label> </div>
                                </div>
                            </div>
                        </div>

                        <div style="margin-left: 150px;">
                            <h2 >Guarantee available</h2>
                            <div class="mt-3">
                                <div class="flex flex-col sm:flex-row mt-2">
                                    <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2"> <input type="radio" class="input border mr-2" id="horizontal-radio-chris-evans" name="is_guarantee" value="1"> <label class="cursor-pointer select-none" for="horizontal-radio-chris-evans">Yes</label> </div>
                                    <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2 mt-2 sm:mt-0"> <input type="radio" class="input border mr-2" id="horizontal-radio-liam-neeson" name="is_guarantee" value="0"> <label class="cursor-pointer select-none" for="horizontal-radio-liam-neeson">No</label> </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <br>

                    <div class="flex flex-col sm:flex-row items-center">
                        <div>
                            <h2 >Home delivery Available </h2>
                            <div class="mt-3">
                                <div class="flex flex-col sm:flex-row mt-2">
                                    <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2"> <input type="radio" class="input border mr-2" id="horizontal-radio-chris-evans" name="is_home_delivery" value="1"> <label class="cursor-pointer select-none" for="horizontal-radio-chris-evans">Yes</label> </div>
                                    <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2 mt-2 sm:mt-0"> <input type="radio" class="input border mr-2" id="horizontal-radio-liam-neeson" name="is_home_delivery" value="0"> <label class="cursor-pointer select-none" for="horizontal-radio-liam-neeson">No</label> </div>
                                </div>
                            </div>
                        </div>

                        <div style="margin-left: 150px;">
                            <h2 >Home delivery extra charge</h2>
                            <div class="mt-3">
                                <div class="flex flex-col sm:flex-row mt-2">
                                    <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2"> <input type="radio" class="input border mr-2" id="horizontal-radio-chris-evans" name="is_home_delivery_extra_charge" value="1"> <label class="cursor-pointer select-none" for="horizontal-radio-chris-evans">Yes</label> </div>
                                    <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2 mt-2 sm:mt-0"> <input type="radio" class="input border mr-2" id="horizontal-radio-liam-neeson" name="is_home_delivery_extra_charge" value="0"> <label class="cursor-pointer select-none" for="horizontal-radio-liam-neeson">No</label> </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <br>

                    <div class="mt-3">
                        <div style="text-align: center;margin-left: 50px;" class="mt-2">
                            <label for="">Work experience</label>
                            <br>
                            <button style="font-size:24px"> <i style="font-size:24px" class="fa">&#xf146;</i></button>
                            <select class="input input--lg border mr-2" name="work_experience">
                                <option value="2">2 Years</option>
                                <option value="3">3 Years</option>
                                <option value="4">7 Years</option>
                            </select>
                            <button style="font-size:24px"> <i style="font-size:24px" class="fa">&#xf0fe;</i>

                            </button>

                        </div>
                    </div>


                    <div class="text-right mt-5">
                        <button type="submit" class="button w-24 bg-theme-1 text-white">Next</button>
                    </div>
                </div>
            </form>
            <!-- END: Form Layout -->
        </div>
    </div>
    @elseif($step==4)
        <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form action="{{ url('add/service/step_4') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="intro-y box p-5">


                    <div class="mt-3">
                        <div>
                            <label>Title</label>
                            <input type="text" class="input w-full border mt-2" value="something will be here" placeholder="Input text" name="title">
                        </div>
                    </div>

                    <br>
                    <div class="mt-3">
                        <label>Describe something about your service center</label>
                        <div class="mt-2">
                            <textarea data-simple-toolbar="true" class="editor" name="description">

                            </textarea>
                        </div>
                    </div>

                    <div class="mt-3">
                        <label>Upload some photo of your work or service center</label>
                        <div class="border-2 border-dashed dark:border-dark-5 rounded-md mt-3 pt-4">
                            <div class="flex flex-wrap px-4">
                                <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                    <img class="rounded-md" alt="Midone Tailwind HTML Admin Template" src="{{ url('media/misc/upload-image-placeholder.svg') }}">
                                    <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 right-0 top-0 -mr-2 -mt-2"> <i data-feather="x" class="w-4 h-4"></i> </div>
                                </div>

                            </div>
                            <div class="px-4 pb-4 flex items-center cursor-pointer relative">
                                <i data-feather="image" class="w-4 h-4 mr-2"></i> <span class="text-theme-1 dark:text-theme-10 mr-1">Upload a file</span> or drag and drop
                                <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0" name="media[]" multiple="" type="file">
                                <button style="margin-left: 50px;"> <i class="fa fa-plus-square-o">Add more partner</i></button>
                            </div>

                        </div>
                    </div>

                    <div class="text-right mt-5">
                        <button type="submit" class="button w-24 bg-theme-1 text-white">Next</button>
                    </div>
                </div>
            </form>
            <!-- END: Form Layout -->
        </div>
    </div>

    @elseif($step==5)

        <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">

            <!-- BEGIN: Form Layout -->
            <form action="{{ url('add/service/step_5') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="intro-y box p-5">
                    <div style="text-align: center">
                        <strong>Service Center lacation</strong>

                    </div>
                    <br>
                    <br>
                    <div class="mt-3">
                        <label style="text-align: center;margin-left: 200px;"> Select your region</label>
                        <div class="mt-2">
                            <select  placeholder="Select Product Condition" class="tail-select w-full region"  name="region" id="region">
                                <option value=" " >Select region</option>
                                @foreach($locations as $location)
                                <option value="{{ $location->id }}" >{{ $location->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mt-3">
                        <label style="text-align: center;margin-left: 200px;"> Select District</label>
                        <div class="mt-2">
                            <select  class="w-full district form-control"  name="district" id="district">
                                <option value="" >Select District</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label style="text-align: center;margin-left: 200px;"> Select area</label>
                        <div class="mt-2">
                            <select   class="w-full area"  name="area" id="area">
                                <option value="" >Select Area</option>
                            </select>
                        </div>
                    </div>





                    <div>
                        <div style="text-align: center;margin-left: 100px;" class="mt-3">
                            <div class="flex flex-col sm:flex-row mt-2">
                                <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2"> <input type="radio" class="input border mr-2" id="horizontal-radio-chris-evans" name="horizontal_radio_button" value="horizontal-radio-chris-evans"> <label class="cursor-pointer select-none" for="horizontal-radio-chris-evans">I agree with all term and condition</label> </div>

                            </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="text-right mt-5">
                            <button type="button" class="button w-24 bg-theme-1 text-white">Save</button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- END: Form Layout -->
        </div>
    </div>
    @endif
    <script>
        $('#region').change(function() {
            var id = $(this).val();
            $.getJSON("/select/district/"+id, function(data) {
                    var location = $('.district');
                location.empty();
                $.each(data, function(index, element) {
                    location.append("<option value='"+ element.id +"'>" + element.name + "</option>");
                });

            });
        });
        $('#district').change(function() {
            var id = $(this).val();
            $.getJSON("/select/district/"+id, function(data) {
                var location = $('.area');
                location.empty();
                $.each(data, function(index, element) {
                    location.append("<option value='"+ element.id +"'>" + element.name + "</option>");
                });

            });
        });
    </script>
@endsection