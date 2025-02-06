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
                                <th scope="col">Video</th>
                                <th scope="col">Welcome Text</th>
                                <th scope="col">Contact Number</th>
                                <th scope="col">Email ID</th>
                                <th scope="col">Description</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td><img class="rounded-3" width="50" height="50" src="https://assets.transfernow.net/28975412/logos/logo-tnow-icon.png" alt=""></td>
                                <td class="fw-bold">Hi......</td>
                                <td class="fw-bold">123456789</td>
                                <td class="fw-bold">alala@gmail.com</td>
                                <td class="fw-bold"><i class="fa-solid fa-message fa-2x text-dark"></i></td>
                                <td><i class="fa-solid fa-pen-to-square fa-2x text-primary"></i></td>
                                <td><i class="fa-solid fa-trash-can fa-2x text-danger"></i></td>
                            </tr>

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

                            <tr>
                                <td class="fw-bold">Project Completion</td>
                                <td class="fw-bold">23+</td>
                                <td><i class="fa-solid fa-pen-to-square fa-2x text-primary"></i></td>
                                <td><i class="fa-solid fa-trash-can fa-2x text-danger"></i></td>
                            </tr>

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
                                <td><i class="fa-solid fa-pen-to-square fa-2x text-primary"></i></td>
                                <td><i class="fa-solid fa-trash-can fa-2x text-danger"></i></td>
                            </tr>

                    </table>



                </div>
            </div>
        </div>
    </div>






    <!-- Add Video Details Modal Start-->
    <button type="button" class="btn btn-danger floating-button" data-bs-toggle="modal" data-bs-target="#AddModal">
        Add Video
    </button>


    <div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="AddModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="AddModalLabel">Add Home Data</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group mb-3">
                            <label for="" class="form-label fw-bold mb-2">Video<span class="text-danger">*</span></label>
                            <input type="file" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="" class="form-label fw-bold mb-2">Welcome Text<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="" id="" placeholder="Enter Welcome Text" required>
                        </div>



                        <div class="form-group mb-3">
                            <label for="" class="form-label fw-bold mb-2">Description<span class="text-danger">*</span></label>
                            <textarea name="" id="" class="form-control" rows="6" placeholder="Enter Home Description" required></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="" class="form-label fw-bold mb-2">Contact Number<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="" id="" placeholder="Enter Contact Number" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="" class="form-label fw-bold mb-2">Email ID<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="" id="" placeholder="Enter Email ID" required>
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








    <!-- Add Numbers Modal Start-->
    <button type="button" class="btn btn-success floating-button3" data-bs-toggle="modal" data-bs-target="#AddPartner1Modal">
        Add Numbers
    </button>


    <div class="modal fade" id="AddPartner1Modal" tabindex="-1" aria-labelledby="AddPartner1ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="AddPartner1ModalLabel">Add Numbers</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">

                        <div class="form-group mb-3">
                            <label for="" class="form-label fw-bold mb-2">Title<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="" id="" placeholder="e.g- Project Completion" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="" class="form-label fw-bold mb-2">Numbers<span class="text-danger">*</span></label>
                            <input type="number" class="form-control rounded" name="" id="" placeholder="Enter How many !" required>
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



</x-app-layout>