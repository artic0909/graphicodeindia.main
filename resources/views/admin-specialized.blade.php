<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Specialized Page's Content") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                    <h3 class="fw-bolder fs-5">Category Data ~</h3>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Category</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td class="fw-bold">Website Development</td>
                                <td><i class="fa-solid fa-pen-to-square fa-2x text-primary"></i></td>
                                <td><i class="fa-solid fa-trash-can fa-2x text-danger"></i></td>
                            </tr>

                    </table>





                    <h3 class="fw-bolder fs-5 mt-4">Specialized Data ~</h3>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Logo</th>
                                <th scope="col">Title</th>
                                <th scope="col">Category</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td><img class="rounded-3" width="50" height="50" src="https://assets.transfernow.net/28975412/logos/logo-tnow-icon.png" alt=""></td>
                                <td class="fw-bold">Duracoat</td>
                                <td class="text-success fw-bold">Website Development</td>
                                <td><i class="fa-solid fa-pen-to-square fa-2x text-primary"></i></td>
                                <td><i class="fa-solid fa-trash-can fa-2x text-danger"></i></td>
                            </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- Add Modal Start-->
    <button type="button" class="btn btn-danger floating-button" data-bs-toggle="modal" data-bs-target="#AddModal">
        Add Specialized Data
    </button>


    <div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="AddModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="AddModalLabel">Add Specialized Data</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group mb-3">
                            <label for="" class="form-label fw-bold mb-2">Logo<span class="text-danger">*</span></label>
                            <input type="file" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="" class="form-label fw-bold mb-2">Category<span class="text-danger">*</span></label>
                            <select name="" id="" class="form-control rounded">
                                <option value="" selected>Select Category</option>
                                <option value="Website Development">Website Development</option>
                                <option value="Mobile Development">Mobile Development</option>
                                <option value="Desktop Development">Desktop Development</option>
                                <option value="Software Development">Software Development</option>
                                <option value="Game Development">Game Development</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="" class="form-label fw-bold mb-2">Title<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="" id="" placeholder="Enter Title" required>
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
    <!-- Add Modal End-->







    <!-- Add Category Modal Start-->
    <button type="button" class="btn btn-danger2 floating-button2" data-bs-toggle="modal" data-bs-target="#AddCategoryModal">
        Add Category
    </button>


    <div class="modal fade" id="AddCategoryModal" tabindex="-1" aria-labelledby="AddCategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="AddCategoryModalLabel">Add Category</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">

                        <div class="form-group mb-3">
                            <label for="" class="form-label fw-bold mb-2">Category<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="" id="" placeholder="Enter Category" required>
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
    <!-- Add Category Modal End-->



</x-app-layout>