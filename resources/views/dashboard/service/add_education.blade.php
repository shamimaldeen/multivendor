@extends('layouts.app')
@section('title', 'New Product')
@section('content')


     College
     <hr>
     01.
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form action="{{ route('user-post-product', 'new') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="intro-y box p-5">
                    <div class="mt-3">
                        <label style="text-align: center;margin-left: 200px;">Academy Category</label>
                        <div style="text-align: center;margin-left: 20px;" class="mt-2">
                            <select  placeholder="Select Product Condition" class="tail-select"  name="product_condition">
                                <option style="text-align: center;" value="Builder" >University</option>
                                <option style="text-align: center;" value="new">New</option>
                                <option style="text-align: center;" value="used">used</option>
                            </select>
                        </div>
                    </div>

                    <br>



                    <div class="mt-3">
                        <label style="text-align: center;margin-left: 200px;">University Name</label>
                        <input style="text-align: center;" type="text" class="input w-full border mt-2">
                    </div>




                    <br>


                    <div class="flex flex-col sm:flex-row items-center">
                        <div class="sm:mt-2">
                            <label > for</label>
                            <select class="input input--sm border mr-2">
                                <option>boys & girls</option>
                                <option>Liam Neeson</option>
                                <option>Daniel Craig</option>
                            </select>
                        </div>
                        <div style="text-align: center;margin-left: 50px;" class="mt-2">
                            <label for="">Admission age require</label>
                            <br>
                            <button style="font-size:24px"> <i style="font-size:24px" class="fa">&#xf146;</i></button>
                            <input style="text-align:center;" type="text" class="input border" value="2" placeholder="Input text">
                            <button > <i style="font-size:24px" class="fa">&#xf0fe;</i> Years old
                            </button>

                        </div>
                    </div>


                    <br>
                    <div>
                        <h2 style="text-align: center;">Select</h2>
                        <div style="text-align: center;margin-left: 100px;" class="mt-3">
                            <div class="flex flex-col sm:flex-row mt-2">
                                <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2"> <input type="radio" class="input border mr-2" id="horizontal-radio-chris-evans" name="horizontal_radio_button" value="horizontal-radio-chris-evans"> <label class="cursor-pointer select-none" for="horizontal-radio-chris-evans">Public</label> </div>
                                <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2 mt-2 sm:mt-0"> <input type="radio" class="input border mr-2" id="horizontal-radio-liam-neeson" name="horizontal_radio_button" value="horizontal-radio-liam-neeson"> <label class="cursor-pointer select-none" for="horizontal-radio-liam-neeson">Private</label> </div>
                                <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2 mt-2 sm:mt-0"> <input type="radio" class="input border mr-2" id="horizontal-radio-liam-neeson" name="horizontal_radio_button" value="horizontal-radio-liam-neeson"> <label class="cursor-pointer select-none" for="horizontal-radio-liam-neeson">National</label> </div>
                            </div>
                        </div>
                    </div>
                    <br>





                    <div class="flex flex-col sm:flex-row items-center">
                        <div>
                            <h3>Established date  : </h3>
                        </div>

                        <div class="sm:mt-2">
                            <select class="input input--sm border mr-2">
                                <option>Day</option>
                                <option>9pm</option>
                            </select>
                        </div>
                        <div class="sm:mt-2">
                            <select class="input input--sm border mr-2">
                                <option>Month</option>
                                <option>9pm</option>
                            </select>
                        </div>
                        <div class="sm:mt-2">
                            <select class="input input--sm border mr-2">
                                <option>Year</option>
                                <option>9pm</option>
                            </select>
                        </div>
                    </div>
                    <br>


                    <div class="mt-2">
                        <label for="">Total running student : </label>
                        <button style="font-size:24px"> <i style="font-size:24px" class="fa">&#xf146;</i></button>
                        <input style="text-align:center;" type="text" class="input border" value="2" placeholder="Input text">
                        <button > <i style="font-size:24px" class="fa">&#xf0fe;</i>
                        </button>
                    </div>
                    <div class="mt-2">
                        <label for="">Total teacher : </label>
                        <button style="font-size:24px"> <i style="font-size:24px" class="fa">&#xf146;</i></button>
                        <input style="text-align:center;" type="text" class="input border" value="2" placeholder="Input text">
                        <button > <i style="font-size:24px" class="fa">&#xf0fe;</i>
                        </button>
                    </div>
                    <div class="mt-2">
                        <label for="">Total staff & others : </label>
                        <button style="font-size:24px"> <i style="font-size:24px" class="fa">&#xf146;</i></button>
                        <input style="text-align:center;" type="text" class="input border" value="2" placeholder="Input text">
                        <button > <i style="font-size:24px" class="fa">&#xf0fe;</i>
                        </button>
                    </div>


                    <br>

                    <div class="flex flex-col sm:flex-row items-center">
                        <div class="sm:mt-2">
                            <label for="">opening time</label>
                            <select class="input input--sm border mr-2">
                                <option>9 am</option>
                                <option>9pm</option>
                            </select>
                        </div>
                        <div  style="margin-left: 100px" class="mt-2">
                            <label for="">closing time</label>
                            <select class="input border mr-2">
                                <option>9 pm</option>
                                <option>9pm</option>
                            </select>
                        </div>
                    </div>
                    <br>

                    <div>
                        <h2 >Student hostel Available </h2>
                        <div class="mt-3">
                            <div class="flex flex-col sm:flex-row mt-2">
                                <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2"> <input type="radio" class="input border mr-2" id="horizontal-radio-chris-evans" name="horizontal_radio_button" value="horizontal-radio-chris-evans"> <label class="cursor-pointer select-none" for="horizontal-radio-chris-evans">Yes</label> </div>
                                <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2 mt-2 sm:mt-0"> <input type="radio" class="input border mr-2" id="horizontal-radio-liam-neeson" name="horizontal_radio_button" value="horizontal-radio-liam-neeson"> <label class="cursor-pointer select-none" for="horizontal-radio-liam-neeson">No</label> </div>
                            </div>
                        </div>
                    </div>

                    <br>


                    <div class="sm:mt-2">
                        <label > Select available hostel</label>
                        <br>
                        <select class="input input--sm border mr-2">
                            <option>boys & girls</option>
                            <option>Liam Neeson</option>
                            <option>Daniel Craig</option>
                        </select>
                    </div>
                    <div class="text-right mt-5">
                        <button type="submit" class="button w-24 bg-theme-1 text-white">Next</button>
                    </div>
                </div>
            </form>
            <!-- END: Form Layout -->
        </div>
    </div>





    02.

    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form action="{{ route('user-post-product', 'new') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="intro-y box p-5">

                    <div style="text-align: center" class="sm:mt-2">
                        <h2> <strong>Pricing And facilities </strong></h2>
                    </div>

                    <br>


                    <div class="mt-3">
                        <div style="text-align: center;margin-left: 50px;" class="mt-2">
                            <label for="">Admission fee minimum price</label>
                            <br>
                            <button style="font-size:24px"> <i style="font-size:24px" class="fa">&#xf146;</i></button>
                            <input type="text" class="input border" value="100  BDT" placeholder="Input text">
                            <button style="font-size:24px"> <i style="font-size:24px" class="fa">&#xf0fe;</i>
                            </button>
                        </div>
                    </div>
                    <br>
                    <div class="mt-3">
                        <div style="text-align: center;margin-left: 50px;" class="mt-2">
                            <label for="">Admission fee maximum price</label>
                            <br>
                            <button style="font-size:24px"> <i style="font-size:24px" class="fa">&#xf146;</i></button>
                            <input type="text" class="input border" value="NO limit  BDT" placeholder="Input text">
                            <button style="font-size:24px"> <i style="font-size:24px" class="fa">&#xf0fe;</i>
                            </button>
                            </button>
                        </div>
                    </div>

                    <br>

                    <div class="mt-3">
                        <label > Who pay the other charge</label>
                        <div class="mt-2">
                            <select  placeholder="Select Product Condition" class="tail-select"  name="product_condition">
                                <option value="Builder" >Customer</option>
                                <option  value="new">New</option>
                                <option  value="used">used</option>
                            </select>
                        </div>
                    </div>


                    <br>

                    <div class="flex flex-col sm:flex-row items-center">
                        <div>
                            <label >Transporter van/bus available </label>
                            <div class="mt-3">
                                <div class="flex flex-col sm:flex-row mt-2">
                                    <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2"> <input type="radio" class="input border mr-2" id="horizontal-radio-chris-evans" name="horizontal_radio_button" value="horizontal-radio-chris-evans"> <label class="cursor-pointer select-none" for="horizontal-radio-chris-evans">Yes</label> </div>
                                    <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2 mt-2 sm:mt-0"> <input type="radio" class="input border mr-2" id="horizontal-radio-liam-neeson" name="horizontal_radio_button" value="horizontal-radio-liam-neeson"> <label class="cursor-pointer select-none" for="horizontal-radio-liam-neeson">No</label> </div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-left: 150px;">
                            <h2 >Online support available</h2>
                            <div class="mt-3">
                                <div class="flex flex-col sm:flex-row mt-2">
                                    <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2"> <input type="radio" class="input border mr-2" id="horizontal-radio-chris-evans" name="horizontal_radio_button" value="horizontal-radio-chris-evans"> <label class="cursor-pointer select-none" for="horizontal-radio-chris-evans">Yes</label> </div>
                                    <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2 mt-2 sm:mt-0"> <input type="radio" class="input border mr-2" id="horizontal-radio-liam-neeson" name="horizontal_radio_button" value="horizontal-radio-liam-neeson"> <label class="cursor-pointer select-none" for="horizontal-radio-liam-neeson">No</label> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="flex flex-col sm:flex-row items-center">
                        <div>
                            <label >Home teaching available </label>
                            <div class="mt-3">
                                <div class="flex flex-col sm:flex-row mt-2">
                                    <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2"> <input type="radio" class="input border mr-2" id="horizontal-radio-chris-evans" name="horizontal_radio_button" value="horizontal-radio-chris-evans"> <label class="cursor-pointer select-none" for="horizontal-radio-chris-evans">Yes</label> </div>
                                    <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2 mt-2 sm:mt-0"> <input type="radio" class="input border mr-2" id="horizontal-radio-liam-neeson" name="horizontal_radio_button" value="horizontal-radio-liam-neeson"> <label class="cursor-pointer select-none" for="horizontal-radio-liam-neeson">No</label> </div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-left: 200px;">
                            <h2 >AC available</h2>
                            <div class="mt-3">
                                <div class="flex flex-col sm:flex-row mt-2">
                                    <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2"> <input type="radio" class="input border mr-2" id="horizontal-radio-chris-evans" name="horizontal_radio_button" value="horizontal-radio-chris-evans"> <label class="cursor-pointer select-none" for="horizontal-radio-chris-evans">Yes</label> </div>
                                    <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2 mt-2 sm:mt-0"> <input type="radio" class="input border mr-2" id="horizontal-radio-liam-neeson" name="horizontal_radio_button" value="horizontal-radio-liam-neeson"> <label class="cursor-pointer select-none" for="horizontal-radio-liam-neeson">No</label> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="flex flex-col sm:flex-row items-center">
                        <div>
                            <label >Stipend available </label>
                            <div class="mt-3">
                                <div class="flex flex-col sm:flex-row mt-2">
                                    <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2"> <input type="radio" class="input border mr-2" id="horizontal-radio-chris-evans" name="horizontal_radio_button" value="horizontal-radio-chris-evans"> <label class="cursor-pointer select-none" for="horizontal-radio-chris-evans">Yes</label> </div>
                                    <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2 mt-2 sm:mt-0"> <input type="radio" class="input border mr-2" id="horizontal-radio-liam-neeson" name="horizontal_radio_button" value="horizontal-radio-liam-neeson"> <label class="cursor-pointer select-none" for="horizontal-radio-liam-neeson">No</label> </div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-left: 230px;">
                            <h2 >Prayer room available</h2>
                            <div class="mt-3">
                                <div class="flex flex-col sm:flex-row mt-2">
                                    <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2"> <input type="radio" class="input border mr-2" id="horizontal-radio-chris-evans" name="horizontal_radio_button" value="horizontal-radio-chris-evans"> <label class="cursor-pointer select-none" for="horizontal-radio-chris-evans">Yes</label> </div>
                                    <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2 mt-2 sm:mt-0"> <input type="radio" class="input border mr-2" id="horizontal-radio-liam-neeson" name="horizontal_radio_button" value="horizontal-radio-liam-neeson"> <label class="cursor-pointer select-none" for="horizontal-radio-liam-neeson">No</label> </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                    <div>
                        <button style="margin-left: 50px;"> <i class="fa fa-plus-square-o">Add more</i></button>
                    </div>
                    <div class="text-right mt-5">
                        <button type="submit" class="button w-24 bg-theme-1 text-white">Next</button>
                    </div>
                </div>
            </form>
            <!-- END: Form Layout -->
        </div>
    </div>


    03.

    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form action="{{ route('user-post-product', 'new') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="intro-y box p-5">


                    <div class="mt-3">
                        <div>
                            <label>Title</label>
                            <input type="text" class="input w-full border mt-2" value="something will be here" placeholder="Input text">
                        </div>
                    </div>

                    <br>
                    <div class="mt-3">
                        <label>Describe something about your service center</label>
                        <div class="mt-2">
                            <div data-simple-toolbar="true" class="editor" name="editor">
                                <p>Content of the editor.</p>
                            </div>
                        </div>
                    </div>


                    <div class="mt-3">
                        <label>Upload some photo of your academy</label>
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
                                <button style="margin-left: 50px;"> <i class="fa fa-plus-square-o">Add more </i></button>
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





    04


    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">

            <!-- BEGIN: Form Layout -->
            <form action="{{ route('user-post-product', 'new') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="intro-y box p-5">
                    <div style="text-align: center">
                        <strong>Academy lacation</strong>

                    </div>
                    <br>
                    <br>


                    <div class="mt-3">
                        <label style="text-align: center;margin-left: 200px;"> Select your region</label>
                        <div class="mt-2">
                            <select  placeholder="Select Product Condition" class="tail-select w-full"  name="product_condition">
                                <option value="Builder" >Builder</option>
                                <option  value="new">New</option>
                                <option  value="used">used</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-3">
                        <label style="text-align: center;margin-left: 200px;"> Select District</label>
                        <div class="mt-2">
                            <select  placeholder="Select Product Condition" class="tail-select w-full"  name="product_condition">
                                <option value="Builder" >Builder</option>
                                <option  value="new">New</option>
                                <option  value="used">used</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label style="text-align: center;margin-left: 200px;"> Select area</label>
                        <div class="mt-2">
                            <select  placeholder="Select Product Condition" class="tail-select w-full"  name="product_condition">
                                <option value="Builder" >Builder</option>
                                <option  value="new">New</option>
                                <option  value="used">used</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-3">
                        <label>Address</label>
                        <input type="text" class="input border mt-2">
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
                            <button type="button" class="button w-24 bg-theme-1 text-white">Create</button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- END: Form Layout -->
        </div>
    </div>


@endsection
