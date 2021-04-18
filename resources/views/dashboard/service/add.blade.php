@extends('layouts.app')
@section('title', 'New Product')
@section('content')


    01
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form action="{{ route('user-post-product', 'new') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="intro-y box p-5">
                     <div class="mt-3">
                        <label style="text-align: center;margin-left: 200px;">Select Your Service</label>
                        <div class="mt-2">
                            <select  placeholder="Select Product Condition" class="tail-select w-full"  name="product_condition">
                                <option value="Builder" >Builder</option>
                                <option  value="new">New</option>
                                <option  value="used">used</option>
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





    02.

    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form action="{{ route('user-post-product', 'new') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="intro-y box p-5">
                    <div class="mt-3">
                        <label style="text-align: center;margin-left: 200px;"> Service center Name</label>
                        <div class="mt-2">
                            <select  placeholder="Select Product Condition" class="tail-select w-full"  name="product_condition">
                                <option value="Builder" >Builder</option>
                                <option  value="new">New</option>
                                <option  value="used">used</option>
                            </select>
                        </div>
                    </div>



                    <div class="flex flex-col sm:flex-row items-center">

                        <div class="sm:mt-2">
                            <label > Title</label>
                            <select class="input input--sm border mr-2">
                                <option>mr</option>
                                <option>Liam Neeson</option>
                                <option>Daniel Craig</option>
                            </select> </div>
                        <div class="mt-3">
                            <label style="text-align: center;margin-left: 120px;"> ServiceProvider</label>
                            <div class="mt-2">
                                <select  placeholder="Select Product Condition" class="tail-select w-full"  name="product_condition">
                                    <option value="Builder" >Builder</option>
                                    <option  value="new">New</option>
                                    <option  value="used">used</option>
                                </select>
                            </div>
                        </div>


                        <div style="text-align: center;margin-left: 50px;" class="mt-2">
                            <label> Gender</label>
                            <select class="input input--lg border mr-2">
                                <option>male</option>
                                <option>female</option>
                            </select> </div>
                    </div>
                    <br>
                    <div>
                        <h2 style="text-align: center;">Do you have Business Partner ?</h2>
                        <div style="text-align: center;margin-left: 100px;" class="mt-3">
                            <div class="flex flex-col sm:flex-row mt-2">
                                <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2"> <input type="radio" class="input border mr-2" id="horizontal-radio-chris-evans" name="horizontal_radio_button" value="horizontal-radio-chris-evans"> <label class="cursor-pointer select-none" for="horizontal-radio-chris-evans">Chris Evans</label> </div>
                                <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2 mt-2 sm:mt-0"> <input type="radio" class="input border mr-2" id="horizontal-radio-liam-neeson" name="horizontal_radio_button" value="horizontal-radio-liam-neeson"> <label class="cursor-pointer select-none" for="horizontal-radio-liam-neeson">Liam Neeson</label> </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="flex flex-col sm:flex-row items-center">

                        <div class="sm:mt-2">
                            <label > Title</label>
                            <select class="input input--sm border mr-2">
                                <option>mr</option>
                                <option>Liam Neeson</option>
                                <option>Daniel Craig</option>
                            </select> </div>

                        <div class="mt-3">
                            <label style="text-align: center;margin-left: 100px;"> partnerName</label>
                            <div class="mt-2">
                                <select  placeholder="Select Product Condition" class="tail-select w-full"  name="product_condition">
                                    <option value="Builder" >Builder</option>
                                    <option  value="new">New</option>
                                    <option  value="used">used</option>
                                </select>
                            </div>
                        </div>


                        <div style="text-align: center;margin-left: 50px;" class="mt-2">
                            <label> Gender</label>
                            <select class="input input--lg border mr-2">
                                <option>male</option>
                                <option>female</option>
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
                        <select class="input input--lg border mr-2">
                            <option>2</option>
                            <option>3</option>
                            <option>7</option>
                        </select>
                        <button style="font-size:24px"> <i style="font-size:24px" class="fa">&#xf0fe;</i></button>
                    </div>
                    <br>

                    <div class="mt-2">
                        <label for="">24 hours open </label>


                        <select class="input input--lg border mr-2">
                            < <option value="Yes" >Yes</option>
                            <option  value="No">No</option>
                        </select>

                    </div>
                    <br>

                    <div class="flex flex-col sm:flex-row items-center">
                        <div class="sm:mt-2">
                            <label for="">opening time</label>
                            <br>
                            <select class="input input--sm border mr-2">
                                <option>9 am</option>
                                <option>9pm</option>
                            </select> </div>
                        <div  style="margin-left: 100px" class="mt-2">
                            <label for="">closing time</label>
                            <br>
                            <select class="input border mr-2">
                                <option>9 pm</option>
                                <option>9pm</option>

                            </select> </div>

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
                    <div style="text-align: center;margin-left: 50px;" class="mt-2">
                        <label for="">Servicing fee minimum price</label>
                        <br>
                        <button style="font-size:24px"> <i style="font-size:24px" class="fa">&#xf146;</i></button>
                        <select class="input input--lg border mr-2">
                            <option>2</option>
                            <option>3</option>
                            <option>7</option>
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
                        <select class="input input--lg border mr-2">
                            <option>2</option>
                            <option>3</option>
                            <option>7</option>
                        </select>
                        <button style="font-size:24px"> <i style="font-size:24px" class="fa">&#xf0fe;</i>
                        </button>
                    </div>
                    </div>



                    <div class="mt-3">
                        <label > Who give the material charge</label>
                        <div class="mt-2">
                            <select  placeholder="Select Product Condition" class="tail-select w-full"  name="product_condition">
                                <option value="Builder" >Customer</option>
                                <option  value="new">New</option>
                                <option  value="used">used</option>
                            </select>
                        </div>
                    </div>
                    <br>


                    <div class="flex flex-col sm:flex-row items-center">
                        <div>
                            <h2 >Warrenty available</h2>
                            <div class="mt-3">
                                <div class="flex flex-col sm:flex-row mt-2">
                                    <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2"> <input type="radio" class="input border mr-2" id="horizontal-radio-chris-evans" name="horizontal_radio_button" value="horizontal-radio-chris-evans"> <label class="cursor-pointer select-none" for="horizontal-radio-chris-evans">Yes</label> </div>
                                    <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2 mt-2 sm:mt-0"> <input type="radio" class="input border mr-2" id="horizontal-radio-liam-neeson" name="horizontal_radio_button" value="horizontal-radio-liam-neeson"> <label class="cursor-pointer select-none" for="horizontal-radio-liam-neeson">No</label> </div>
                                </div>
                            </div>
                        </div>

                        <div style="margin-left: 150px;">
                            <h2 >Guarantee available</h2>
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
                            <h2 >Home delivery Available </h2>
                            <div class="mt-3">
                                <div class="flex flex-col sm:flex-row mt-2">
                                    <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2"> <input type="radio" class="input border mr-2" id="horizontal-radio-chris-evans" name="horizontal_radio_button" value="horizontal-radio-chris-evans"> <label class="cursor-pointer select-none" for="horizontal-radio-chris-evans">Yes</label> </div>
                                    <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2 mt-2 sm:mt-0"> <input type="radio" class="input border mr-2" id="horizontal-radio-liam-neeson" name="horizontal_radio_button" value="horizontal-radio-liam-neeson"> <label class="cursor-pointer select-none" for="horizontal-radio-liam-neeson">No</label> </div>
                                </div>
                            </div>
                        </div>

                        <div style="margin-left: 150px;">
                            <h2 >Home delivery extra charge</h2>
                            <div class="mt-3">
                                <div class="flex flex-col sm:flex-row mt-2">
                                    <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2"> <input type="radio" class="input border mr-2" id="horizontal-radio-chris-evans" name="horizontal_radio_button" value="horizontal-radio-chris-evans"> <label class="cursor-pointer select-none" for="horizontal-radio-chris-evans">Yes</label> </div>
                                    <div class="flex items-center text-gray-700 dark:text-gray-500 mr-2 mt-2 sm:mt-0"> <input type="radio" class="input border mr-2" id="horizontal-radio-liam-neeson" name="horizontal_radio_button" value="horizontal-radio-liam-neeson"> <label class="cursor-pointer select-none" for="horizontal-radio-liam-neeson">No</label> </div>
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
                            <select class="input input--lg border mr-2">
                                <option>2 Years</option>
                                <option>3 Years</option>
                                <option>7 Years</option>
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



    04.






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





    05


    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">

            <!-- BEGIN: Form Layout -->
            <form action="{{ route('user-post-product', 'new') }}" method="POST" enctype="multipart/form-data">
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












@endsection
