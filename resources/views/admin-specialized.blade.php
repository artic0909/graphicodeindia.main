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
                            @foreach ($categories as $item)
                            <tr>
                                <td class="fw-bold text-success">{{$item->category}}</td>
                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#EditcModal{{$item->id}}">
                                        <i class="fa-solid fa-pen-to-square fa-2x text-primary"></i>
                                    </a>
                                </td>

                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#DeletecModal{{$item->id}}">
                                        <i class="fa-solid fa-trash-can fa-2x text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
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
                            @foreach($spinfo as $info)
                            <tr>
                                <td><img class="rounded-3" width="50" height="50" src="{{ asset('storage/' . $info->logo) }}" alt=""></td>
                                <td class="fw-bold">{{$info->title}}</td>
                                <td class="text-success fw-bold">{{ $info->category->category ?? 'N/A' }}</td>
                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#EditsModal{{$info->id}}">
                                        <i class="fa-solid fa-pen-to-square fa-2x text-primary"></i>
                                    </a>
                                </td>

                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#DeletesModal{{$info->id}}">
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







    <!-- ============================================================================================================================================================ -->
    <!-- ============= Specialized ===================================================================================================================================== -->
    <!-- ============================================================================================================================================================ -->

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
                    <form action="{{ route('admin-specialized.info.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="logo" class="form-label fw-bold mb-2">Logo<span class="text-danger">*</span></label>
                            <input type="file" id="logo" name="logo" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="specialized_category" class="form-label fw-bold mb-2">Category<span class="text-danger">*</span></label>
                            <select name="specialized_category" id="specialized_category" class="form-control rounded">
                                <option value="" selected>Select Category</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="title" class="form-label fw-bold mb-2">Title<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="title" id="title" placeholder="Enter Title" required>
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
    @foreach ($spinfo as $info)
    <div class="modal fade" id="EditsModal{{$info->id}}" tabindex="-1" aria-labelledby="EditsModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="EditsModal">Edit Specialized Data</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin-specialized.info.update', $info->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="logo" class="form-label fw-bold mb-2">Logo<span class="text-danger">*</span></label>
                            <input type="file" class="form-control" id="logo" name="logo">
                        </div>

                        <div class="form-group mb-3">
                            <label for="specialized_category" class="form-label fw-bold mb-2">Category<span class="text-danger">*</span></label>
                            <select name="specialized_category" id="specialized_category" class="form-control rounded">
                                <option value="{{ $info->category_id }}" selected>{{ $info->category->category }}</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="title" class="form-label fw-bold mb-2">Title<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="title" id="title" value="{{$info->title}}">
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

    <!-- Delete Modal Start -->
    @foreach ($spinfo as $info)
    <div class="modal fade" id="DeletesModal{{$info->id}}" tabindex="-1" aria-labelledby="DeletesModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DeletesModal">Confirm Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this information?
                </div>
                <div class="modal-footer">
                    <form action="{{ route('admin-specialized.info.delete', $info->id) }}" method="POST">
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

    <!-- ============================================================================================================================================================ -->
    <!-- ============================================================================================================================================================ -->
    <!-- ============================================================================================================================================================ -->












    <!-- ============================================================================================================================================================ -->
    <!-- ============= Category ===================================================================================================================================== -->
    <!-- ============================================================================================================================================================ -->

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
                    <form action="{{ route('admin-specialized.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="category" class="form-label fw-bold mb-2">Category<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="category" id="category" placeholder="Enter Category" required>
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


    <!-- Edit Category Modal Start-->
    @foreach ($categories as $item)
    <div class="modal fade" id="EditcModal{{$item->id}}" tabindex="-1" aria-labelledby="EditcModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="EditcModal">Edit Category</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin-specialized.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="category" class="form-label fw-bold mb-2">Category<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="category" id="category" value="{{ $item->category }}" required>
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
    <!-- Edit Category Modal End-->



    <!-- Delete Modal Start -->
    @foreach ($categories as $item)
    <div class="modal fade" id="DeletecModal{{$item->id}}" tabindex="-1" aria-labelledby="DeletecModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DeletecModal">Confirm Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this information?
                </div>
                <div class="modal-footer">
                    <form action="{{ route('admin-specialized.delete', $item->id) }}" method="POST">
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

    <!-- ============================================================================================================================================================ -->
    <!-- ============================================================================================================================================================ -->
    <!-- ============================================================================================================================================================ -->











</x-app-layout>