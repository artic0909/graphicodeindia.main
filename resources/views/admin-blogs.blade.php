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
                            @foreach($blogs as $blog)
                            <tr>
                                <td><img class="rounded-3" width="50" height="50" src="{{ asset('storage/' . $blog->image) }}" alt=""></td>
                                <td class="text-success fw-bold">{{ $blog->title }}</td>
                                <td class="fw-bold">{{ $blog->date }}</td>
                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#descriptionViewModal{{$blog->id}}">
                                        <i class="fa-solid fa-message fa-2x text-success"></i>
                                    </a>
                                </td>

                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#EditModal{{$blog->id}}">
                                        <i class="fa-solid fa-pen-to-square fa-2x text-primary"></i>
                                    </a>
                                </td>

                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#DeleteModal{{$blog->id}}">
                                        <i class="fa-solid fa-trash-can fa-2x text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
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
                    <form action="{{ route('admin-blogs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="image" class="form-label fw-bold mb-2">Blog Image<span class="text-danger">*</span></label>
                            <input type="file" name="image" class="form-control" id="image" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="title" class="form-label fw-bold mb-2">Blog Title<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="title" id="title" placeholder="Enter Blog Title" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="date" class="form-label fw-bold mb-2">Posting Date<span class="text-danger">*</span></label>
                            <input type="date" class="form-control rounded" name="date" id="date" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="desc" class="form-label fw-bold mb-2">Blog Description<span class="text-danger">*</span></label>
                            <textarea name="desc" id="desc" class="form-control" rows="6" placeholder="Enter Blog Description" required></textarea>
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



    <!-- Edit Modal Start-->
    @foreach($blogs as $blog)
    <div class="modal fade" id="EditModal{{$blog->id}}" tabindex="-1" aria-labelledby="EditModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="EditModal">Edit Blog Data</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin-blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="image" class="form-label fw-bold mb-2">Blog Image<span class="text-danger">*</span></label>
                            <input type="file" name="image" class="form-control" id="image">
                        </div>

                        <div class="form-group mb-3">
                            <label for="title" class="form-label fw-bold mb-2">Blog Title<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="title" id="title" value="{{ $blog->title }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="date" class="form-label fw-bold mb-2">Posting Date<span class="text-danger">*</span></label>
                            <input type="date" class="form-control rounded" name="date" id="date" value="{{ $blog->date }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="desc" class="form-label fw-bold mb-2">Blog Description<span class="text-danger">*</span></label>
                            <textarea name="desc" id="desc" class="form-control" rows="6">{{ $blog->desc }}</textarea>
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
    <!-- Edit Modal End-->



    <!-- Descriprtion View Modal Start -->
    @foreach($blogs as $blog)
    <div class="modal fade" id="descriptionViewModal{{$blog->id}}" tabindex="-1" aria-labelledby="descriptionViewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="descriptionViewModalLabel">{{ $blog->title }}</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="fw-bold">{{ $blog->desc }}</p>
                </div>

            </div>
        </div>
    </div>
    @endforeach
    <!-- Descriprtion View Modal End -->



    <!-- Delete Modal Start -->
    @foreach($blogs as $blog)
    <div class="modal fade" id="DeleteModal{{$blog->id}}" tabindex="-1" aria-labelledby="DeleteModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DeleteModal">Confirm Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this information?
                </div>
                <div class="modal-footer">
                    <form action="{{ route('admin-blogs.delete', $blog->id) }}" method="POST">
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
    <!-- Delete Modal End -->




</x-app-layout>