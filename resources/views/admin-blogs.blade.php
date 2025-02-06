<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Blogs Page's Content") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Date</th>
                                <th scope="col">Description</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td><img class="rounded-3" width="50" height="50" src="https://assets.transfernow.net/28975412/logos/logo-tnow-icon.png" alt=""></td>
                                <td class="text-success fw-bold">Website Development</td>
                                <td class="fw-bold">14-10-2022</td>
                                <td><i class="fa-solid fa-message fa-2x text-success"></i></td>
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
        Add Blogs
    </button>


    <div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="AddModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="AddModalLabel">Add Blog Data</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group mb-3">
                            <label for="" class="form-label fw-bold mb-2">Blog Image<span class="text-danger">*</span></label>
                            <input type="file" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="" class="form-label fw-bold mb-2">Blog Title<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="" id="" placeholder="Enter Blog Title" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="" class="form-label fw-bold mb-2">Posting Date<span class="text-danger">*</span></label>
                            <input type="date" class="form-control rounded" name="" id="" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="" class="form-label fw-bold mb-2">Blog Description<span class="text-danger">*</span></label>
                            <textarea name="" id="" class="form-control" rows="6" placeholder="Enter Blog Description" required></textarea>
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
</x-app-layout>