<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("About Page's Content") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">






                    <h3 class="fw-bolder fs-4">Marquee Text~</h3>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Text</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td class="fw-bold">Hi</td>
                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#EditmModal">
                                        <i class="fa-solid fa-pen-to-square fa-2x text-primary"></i>
                                    </a>
                                </td>

                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#DeletemModal">
                                        <i class="fa-solid fa-trash-can fa-2x text-danger"></i>
                                    </a>
                                </td>
                            </tr>

                    </table>




                    <h3 class="fw-bolder fs-4 mt-4">About Descriptions~</h3>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Descriptions</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td class="fw-bold">Desc</td>
                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#descriptionViewModal">
                                        <i class="fa-solid fa-message fa-2x text-dark"></i>
                                    </a>
                                </td>

                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#EditaModal">
                                        <i class="fa-solid fa-pen-to-square fa-2x text-primary"></i>
                                    </a>
                                </td>

                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#DeleteaModal">
                                        <i class="fa-solid fa-trash-can fa-2x text-danger"></i>
                                    </a>
                                </td>
                            </tr>

                    </table>



                    <h3 class="fw-bolder fs-4 mt-4">FAQ Data~</h3>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Question</th>
                                <th scope="col">Answer</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td class="fw-bold text-dark">1</td>
                                <td class="fw-bold text-danger">Question</td>
                                <td class="fw-bold text-success">Answer</td>
                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#EditfModal">
                                        <i class="fa-solid fa-pen-to-square fa-2x text-primary"></i>
                                    </a>
                                </td>

                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#DeletefModal">
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
    <!-- ================= About Descriptions ======================================================================================================================= -->
    <!-- ============================================================================================================================================================ -->

    <!-- Add About Desc Details Modal Start-->
    <button type="button" class="btn btn-danger floating-button" data-bs-toggle="modal" data-bs-target="#AddModal">
        + About Desc
    </button>


    <div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="AddModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="AddModalLabel">Add About Descriptions</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">



                        <div class="form-group mb-3">
                            <label for="" class="form-label fw-bold mb-2">Description 1<span class="text-danger">*</span></label>
                            <textarea name="" id="" class="form-control" rows="6" placeholder="Enter Home Description" required></textarea>
                        </div>



                        <div class="form-group mb-3">
                            <label for="" class="form-label fw-bold mb-2">Description 2<span class="text-danger">*</span></label>
                            <textarea name="" id="" class="form-control" rows="6" placeholder="Enter Home Description" required></textarea>
                        </div>



                        <div class="form-group mb-3">
                            <label for="" class="form-label fw-bold mb-2">Description 3<span class="text-danger">*</span></label>
                            <textarea name="" id="" class="form-control" rows="6" placeholder="Enter Home Description" required></textarea>
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
    <!-- Add About Desc Details Modal End-->


    <!-- Edit About Desc Details Modal Start-->
    <div class="modal fade" id="EditaModal" tabindex="-1" aria-labelledby="EditaModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="EditaModal">Edit About Descriptions</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">



                        <div class="form-group mb-3">
                            <label for="" class="form-label fw-bold mb-2">Description 1<span class="text-danger">*</span></label>
                            <textarea name="" id="" class="form-control" rows="6" placeholder="Enter Home Description" required></textarea>
                        </div>



                        <div class="form-group mb-3">
                            <label for="" class="form-label fw-bold mb-2">Description 2<span class="text-danger">*</span></label>
                            <textarea name="" id="" class="form-control" rows="6" placeholder="Enter Home Description" required></textarea>
                        </div>



                        <div class="form-group mb-3">
                            <label for="" class="form-label fw-bold mb-2">Description 3<span class="text-danger">*</span></label>
                            <textarea name="" id="" class="form-control" rows="6" placeholder="Enter Home Description" required></textarea>
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
    <!-- Edit About Desc Details Modal End-->


    <!-- Descriprtion View Modal Start -->
    <div class="modal fade" id="descriptionViewModal" tabindex="-1" aria-labelledby="descriptionViewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="descriptionViewModalLabel">Description</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="fw-bold">fgdeghty</p>
                </div>

            </div>
        </div>
    </div>
    <!-- Descriprtion View Modal End -->


    <!-- Delete About Desc Modal Start -->
    <div class="modal fade" id="DeleteaModal" tabindex="-1" aria-labelledby="DeleteaModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DeleteaModal">Confirm Delete</h5>
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
    <!-- Delete About Desc Modal End -->

    <!-- ============================================================================================================================================================ -->
    <!-- ============================================================================================================================================================ -->
    <!-- ============================================================================================================================================================ -->













    <!-- ============================================================================================================================================================ -->
    <!-- ================FAQ========================================================================================================================================= -->
    <!-- ============================================================================================================================================================ -->

    <!-- Add FAQ Modal Start-->
    <button type="button" class="btn btn-success floating-button3" data-bs-toggle="modal" data-bs-target="#AddPartner1Modal">
        Add FAQ
    </button>


    <div class="modal fade" id="AddPartner1Modal" tabindex="-1" aria-labelledby="AddPartner1ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="AddPartner1ModalLabel">Add FAQ</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">

                        <div class="form-group mb-3">
                            <label for="" class="form-label fw-bold mb-2">Question<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="" id="" placeholder="Enter Question" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="" class="form-label fw-bold mb-2">Answer<span class="text-danger">*</span></label>
                            <textarea name="" id="" class="form-control" rows="6" placeholder="Enter Answer" required></textarea>
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
    <!-- Add FAQ Modal End-->



    <!-- Edit FAQ Modal Start-->
    <div class="modal fade" id="EditfModal" tabindex="-1" aria-labelledby="EditfModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="EditfModal">Add FAQ</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">

                        <div class="form-group mb-3">
                            <label for="" class="form-label fw-bold mb-2">Question<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="" id="" placeholder="Enter Question" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="" class="form-label fw-bold mb-2">Answer<span class="text-danger">*</span></label>
                            <textarea name="" id="" class="form-control" rows="6" placeholder="Enter Answer" required></textarea>
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
    <!-- Edit FAQ Modal End-->


    <!-- Delete Video Modal Start -->
    <div class="modal fade" id="DeletefModal" tabindex="-1" aria-labelledby="DeletefModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DeletefModal">Confirm Delete</h5>
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












    <!-- ============================================================================================================================================================ -->
    <!-- ================Marquee Text================================================================================================================================ -->
    <!-- ============================================================================================================================================================ -->

    <!-- Add Marquee Text Modal Start-->
    <button type="button" class="btn btn-danger2 floating-button5" data-bs-toggle="modal" data-bs-target="#AddPartnerModal">
        Add Marquee Text
    </button>


    <div class="modal fade" id="AddPartnerModal" tabindex="-1" aria-labelledby="AddPartnerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="AddPartnerModalLabel">Add Marquee Text</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">

                        <div class="form-group mb-3">
                            <label for="" class="form-label fw-bold mb-2">Text<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="" id="" placeholder="Enter Text" required>
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
    <!-- Add Marquee Text Modal End-->



    <!-- Edit Marquee Text Modal Start-->
    <div class="modal fade" id="EditmModal" tabindex="-1" aria-labelledby="EditmModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="EditmModal">Add Marquee Text</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">

                        <div class="form-group mb-3">
                            <label for="" class="form-label fw-bold mb-2">Text<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="" id="" placeholder="Enter Text" required>
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
    <!-- Edit Marquee Text Modal End-->


    <!-- Delete Video Modal Start -->
    <div class="modal fade" id="DeletemModal" tabindex="-1" aria-labelledby="DeletemModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DeletemModal">Confirm Delete</h5>
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