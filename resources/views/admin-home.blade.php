<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Home Page's Content") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">




                    <h3 class="fw-bolder fs-4">Video Content~</h3>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Welcome Text</th>
                                <th scope="col">Contact Number</th>
                                <th scope="col">Email ID</th>
                                <th scope="col">Description</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($datas as $data)
                            <tr>
                                <td class="fw-bold">{{$data->wlcm_txt}}</td>
                                <td class="fw-bold">{{$data->contact}}</td>
                                <td class="fw-bold">{{$data->email}}</td>
                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#descriptionViewModal{{$data->id}}">
                                        <i class="fa-solid fa-message fa-2x text-dark"></i>
                                    </a>
                                </td>

                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#EditModal{{$data->id}}">
                                        <i class="fa-solid fa-pen-to-square fa-2x text-primary"></i>
                                    </a>
                                </td>

                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#Delete111Modal{{$data->id}}">
                                        <i class="fa-solid fa-trash-can fa-2x text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                    </table>




                    <h3 class="fw-bolder fs-4 mt-4">Numbers Data~</h3>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Numbers</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($nums as $num)
                            <tr>
                                <td class="fw-bold">{{$num->n_title}}</td>
                                <td class="fw-bold">{{$num->n_num}}</td>
                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#Edit11ViewModal{{$num->id}}">
                                        <i class="fa-solid fa-pen-to-square fa-2x text-primary"></i>
                                    </a>
                                </td>

                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#Delete11Modal{{$num->id}}">
                                        <i class="fa-solid fa-trash-can fa-2x text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>



                    <h3 class="fw-bolder fs-4 mt-4">Partners Data~</h3>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Logo</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td><img class="rounded-3" width="50" height="50" src="https://assets.transfernow.net/28975412/logos/logo-tnow-icon.png" alt=""></td>

                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#Edit22ViewModal">
                                        <i class="fa-solid fa-pen-to-square fa-2x text-primary"></i>
                                    </a>
                                </td>

                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#Delete22Modal">
                                        <i class="fa-solid fa-trash-can fa-2x text-danger"></i>
                                    </a>
                                </td>
                            </tr>

                    </table>



                </div>
            </div>
        </div>
    </div>








    <!-- ============================================================================================================================================================ -->
    <!-- ===================== Video ================================================================================================================================ -->
    <!-- ============================================================================================================================================================ -->

    <!-- Add Video Details Modal Start-->
    @if($videoCount == 0)
    <button type="button" class="btn btn-danger floating-button" data-bs-toggle="modal" data-bs-target="#AddModal">
        Add Video
    </button>
    @endif

    <div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="AddModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="AddModalLabel">Add Home Data</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin-home.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="wlcm_txt" class="form-label fw-bold mb-2">Welcome Text<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="wlcm_txt" id="wlcm_txt" placeholder="Enter Welcome Text" required>
                        </div>



                        <div class="form-group mb-3">
                            <label for="desc" class="form-label fw-bold mb-2">Description<span class="text-danger">*</span></label>
                            <textarea name="desc" id="desc" class="form-control" rows="6" placeholder="Enter Home Description" required></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="contact" class="form-label fw-bold mb-2">Contact Number<span class="text-danger">*</span></label>
                            <input type="number" class="form-control rounded" name="contact" id="contact" placeholder="Enter Contact Number" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="email" class="form-label fw-bold mb-2">Email ID<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="email" id="email" placeholder="Enter Email ID" required>
                        </div>

                        <div class="modal-footer1 d-flex align-items-center justify-end gap-3">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger2">Save changes</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Add Video Details Modal End-->




    <!-- Edit Video Details Modal Start -->
    @foreach($datas as $data)
    <div class="modal fade" id="EditModal{{$data->id}}" tabindex="-1" aria-labelledby="EditModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="DeleteModal">Edit Home Data</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin-home.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="wlcm_txt" class="form-label fw-bold mb-2">Welcome Text<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="wlcm_txt" id="wlcm_txt" value="{{$data->wlcm_txt}}">
                        </div>



                        <div class="form-group mb-3">
                            <label for="desc" class="form-label fw-bold mb-2">Description<span class="text-danger">*</span></label>
                            <textarea name="desc" id="desc" class="form-control" rows="6">{{$data->desc}}</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="contact" class="form-label fw-bold mb-2">Contact Number<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="contact" id="contact" value="{{$data->contact}}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="email" class="form-label fw-bold mb-2">Email ID<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="email" id="email" value="{{$data->email}}">
                        </div>

                        <div class="modal-footer1 d-flex align-items-center justify-end gap-3">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger2">Save changes</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    @endforeach
    <!-- Edit Video Details Modal End -->



    <!-- Delete Video Modal Start -->
    @foreach($datas as $data)
    <div class="modal fade" id="Delete111Modal{{$data->id}}" tabindex="-1" aria-labelledby="Delete111Modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="Delete111Modal">Confirm Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this information?
                </div>
                <div class="modal-footer">
                    <form action="{{ route('admin-home.delete', $data->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn" style="background-color: red; color: white;">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- Delete Video Modal End -->


    <!-- Descriprtion View Modal Start -->
    @foreach($datas as $data)
    <div class="modal fade" id="descriptionViewModal{{$data->id}}" tabindex="-1" aria-labelledby="descriptionViewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="descriptionViewModalLabel">Video Description</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="fw-bold">{{$data->desc}}</p>
                </div>

            </div>
        </div>
    </div>
    @endforeach
    <!-- Descriprtion View Modal End -->

    <!-- ============================================================================================================================================================ -->
    <!-- ============================================================================================================================================================ -->
    <!-- ============================================================================================================================================================ -->










    <!-- ============================================================================================================================================================ -->
    <!-- ======================== Numbers =========================================================================================================================== -->
    <!-- ============================================================================================================================================================ -->

    <!-- Add Numbers Modal Start-->
    @if($numCount < 3)
        <button type="button" class="btn btn-success floating-button3" data-bs-toggle="modal" data-bs-target="#AddPartner1Modal">
        Add Numbers
        </button>
        @endif

        <div class="modal fade" id="AddPartner1Modal" tabindex="-1" aria-labelledby="AddPartner1ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="AddPartner1ModalLabel">Add Numbers</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin-home.num.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="n_title" class="form-label fw-bold mb-2">Title<span class="text-danger">*</span></label>
                                <input type="text" class="form-control rounded" name="n_title" id="n_title" placeholder="e.g- Project Completion" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="n_num" class="form-label fw-bold mb-2">Numbers<span class="text-danger">*</span></label>
                                <input type="number" class="form-control rounded" name="n_num" id="n_num" placeholder="Enter How many !" required>
                            </div>

                            <div class="modal-footer1 d-flex align-items-center justify-end gap-3">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger2">Save changes</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- Add Numbers Modal End-->




        <!-- Edit Numbers Modal Start -->
        @foreach($nums as $num)
        <div class="modal fade" id="Edit11ViewModal{{$num->id}}" tabindex="-1" aria-labelledby="Edit11ViewModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="Edit11ViewModal">Edit Numbers</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin-home.num.update', $num->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label for="n_title" class="form-label fw-bold mb-2">Title<span class="text-danger">*</span></label>
                                <input type="text" class="form-control rounded" name="n_title" id="n_title" value="{{$num->n_title}}" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="n_num" class="form-label fw-bold mb-2">Numbers<span class="text-danger">*</span></label>
                                <input type="number" class="form-control rounded" name="n_num" id="n_num" value="{{$num->n_num}}" required>
                            </div>

                            <div class="modal-footer1 d-flex align-items-center justify-end gap-3">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger2">Save changes</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
        <!-- Edit Numbers Modal End -->




        <!-- Delete Video Modal Start -->
        @foreach($nums as $num)
        <div class="modal fade" id="Delete11Modal{{$num->id}}" tabindex="-1" aria-labelledby="Delete11Modal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="Delete11Modal">Confirm Delete</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this information?
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('admin-home.num.delete', $num->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn" style="background-color: red; color: white;">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Delete Video Modal End -->
        @endforeach

        <!-- ============================================================================================================================================================ -->
        <!-- ============================================================================================================================================================ -->
        <!-- ============================================================================================================================================================ -->











        <!-- ============================================================================================================================================================ -->
        <!-- ================= Partners ================================================================================================================================= -->
        <!-- ============================================================================================================================================================ -->

        <!-- Add Partners Modal Start-->
        <button type="button" class="btn btn-danger2 floating-button4" data-bs-toggle="modal" data-bs-target="#AddPartnerModal">
            Add Partners
        </button>


        <div class="modal fade" id="AddPartnerModal" tabindex="-1" aria-labelledby="AddPartnerModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="AddPartnerModalLabel">Add Partner</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="">

                            <div class="form-group mb-3">
                                <label for="" class="form-label fw-bold mb-2">Logo<span class="text-danger">*</span></label>
                                <input type="file" class="form-control rounded" name="" id="" required>
                            </div>

                            <div class="modal-footer1 d-flex align-items-center justify-end gap-3">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger2">Save changes</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- Add Partners Modal End-->




        <!-- Edit Partner Modal Start -->
        <div class="modal fade" id="Edit22ViewModal" tabindex="-1" aria-labelledby="Edit22ViewModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="Edit22ViewModal">Add Partner</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="">

                            <div class="form-group mb-3">
                                <label for="" class="form-label fw-bold mb-2">Logo<span class="text-danger">*</span></label>
                                <input type="file" class="form-control rounded" name="" id="" required>
                            </div>

                            <div class="modal-footer1 d-flex align-items-center justify-end gap-3">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger2">Save changes</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- Edit Partner Modal End -->



        <!-- Delete Video Modal Start -->
        <div class="modal fade" id="Delete22Modal" tabindex="-1" aria-labelledby="Delete22Modal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="Delete22Modal">Confirm Delete</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this information?
                    </div>
                    <div class="modal-footer">
                        <form action="" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn" style="background-color: red; color: white;">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Delete Video Modal End -->

        <!-- ============================================================================================================================================================ -->
        <!-- ============================================================================================================================================================ -->
        <!-- ============================================================================================================================================================ -->









</x-app-layout>