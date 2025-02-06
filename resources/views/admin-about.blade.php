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
                                <td class="fw-bold">Hi...... Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae aliquam architecto dolorum maxime explicabo magnam aliquid quisquam soluta cupiditate impedit?</td>
                                <td><i class="fa-solid fa-pen-to-square fa-2x text-primary"></i></td>
                                <td><i class="fa-solid fa-trash-can fa-2x text-danger"></i></td>
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
                                <td><i class="fa-solid fa-pen-to-square fa-2x text-primary"></i></td>
                                <td><i class="fa-solid fa-trash-can fa-2x text-danger"></i></td>
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
    <!-- Add Video Details Modal End-->








    <!-- Add Numbers Modal Start-->
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
    <!-- Add Numbers Modal End-->











    <!-- Add Partners Modal Start-->
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
    <!-- Add Partners Modal End-->
</x-app-layout>