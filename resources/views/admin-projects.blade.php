<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Projects Page's Content") }}
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
                                <th scope="col">Category</th>
                                <th scope="col">View</th>
                                <th scope="col">Description</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projects as $project)
                            <tr>
                                <td><img class="rounded-3" width="50" height="50" src="{{ asset('storage/' . $project->image) }}" alt=""></td>
                                <td class="text-success fw-bold">{{ $project->title }}</td>
                                <td class="fw-bold">{{ $project->category }}</td>
                                <td><a href="{{ $project->link }}" target="_blank" style="text-decoration: underline;" class="text-primary fw-bold">Visit</a></td>
                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#descriptionViewModal{{$project->id}}">
                                        <i class="fa-solid fa-message fa-2x text-dark"></i>
                                    </a>
                                </td>

                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#EditModal{{$project->id}}">
                                        <i class="fa-solid fa-pen-to-square fa-2x text-primary"></i>
                                    </a>
                                </td>

                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#DeleteModal{{$project->id}}">
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
        Add Projects
    </button>


    <div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="AddModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="AddModalLabel">Add Project Data</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin-projects.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="image" class="form-label fw-bold mb-2">Project Image<span class="text-danger">*</span></label>
                            <input type="file" name="image" id="image" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="title" class="form-label fw-bold mb-2">Project Title<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="title" id="title" placeholder="Enter Project Title" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="category" class="form-label fw-bold mb-2">Project Category<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="category" id="category" placeholder="Enter Project Category" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="desc" class="form-label fw-bold mb-2">Project Description<span class="text-danger">*</span></label>
                            <textarea name="desc" id="desc" class="form-control" rows="6" placeholder="Enter Project Description" required></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="link" class="form-label fw-bold mb-2">Project Link/URL<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="link" id="link" placeholder="Enter Project Link/URL" required>
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
    @foreach($projects as $project)
    <div class="modal fade" id="EditModal{{$project->id}}" tabindex="-1" aria-labelledby="EditModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="EditModal">Edit Project Data</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin-projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="image" class="form-label fw-bold mb-2">Project Image<span class="text-danger">*</span></label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="title" class="form-label fw-bold mb-2">Project Title<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="title" id="title" value="{{ $project->title }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="category" class="form-label fw-bold mb-2">Project Category<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="category" id="category" value="{{ $project->category }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="desc" class="form-label fw-bold mb-2">Project Description<span class="text-danger">*</span></label>
                            <textarea name="desc" id="desc" class="form-control" rows="6">{{ $project->desc }}</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="link" class="form-label fw-bold mb-2">Project Link/URL<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="link" id="link" value="{{ $project->link }}">
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
    @foreach($projects as $project)
    <div class="modal fade" id="descriptionViewModal{{$project->id}}" tabindex="-1" aria-labelledby="descriptionViewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="descriptionViewModalLabel">{{ $project->title }}</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="fw-bold">{{ $project->desc }}</p>
                </div>

            </div>
        </div>
    </div>
    @endforeach
    <!-- Descriprtion View Modal End -->




    <!-- Delete Modal Start -->
    @foreach($projects as $project)
    <div class="modal fade" id="DeleteModal{{$project->id}}" tabindex="-1" aria-labelledby="DeleteModal" aria-hidden="true">
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
                    <form action="{{ route('admin-projects.delete', $project->id) }}" method="POST">
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