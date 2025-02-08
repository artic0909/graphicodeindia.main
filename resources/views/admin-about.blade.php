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
                            @foreach($marquees as $marquee)
                            <tr>
                                <td class="fw-bold">{{ $marquee->marquee_text }}</td>
                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#EditmModal{{ $marquee->id }}">
                                        <i class="fa-solid fa-pen-to-square fa-2x text-primary"></i>
                                    </a>
                                </td>

                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#DeletemModal{{ $marquee->id }}">
                                        <i class="fa-solid fa-trash-can fa-2x text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                    </table>




                    <h3 class="fw-bolder fs-4 mt-4">About Descriptions~</h3>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Description 1</th>
                                <th scope="col">Description 2</th>
                                <th scope="col">Description 3</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($abouts as $about)
                            <tr>
                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#descriptionViewModal1{{ $about->id }}">
                                        <i class="fa-solid fa-message fa-2x text-success"></i>
                                    </a>
                                </td>

                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#descriptionViewModal2{{ $about->id }}">
                                        <i class="fa-solid fa-message fa-2x text-primary"></i>
                                    </a>
                                </td>
                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#descriptionViewModal3{{ $about->id }}">
                                        <i class="fa-solid fa-message fa-2x text-danger"></i>
                                    </a>
                                </td>

                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#EditaModal{{ $about->id }}">
                                        <i class="fa-solid fa-pen-to-square fa-2x text-primary"></i>
                                    </a>
                                </td>

                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#DeleteaModal{{ $about->id }}">
                                        <i class="fa-solid fa-trash-can fa-2x text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
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
                            @foreach($faqs as $faq)
                            <tr>
                                <td class="fw-bold text-dark">{{$loop->iteration}}</td>
                                <td class="fw-bold text-danger">{{$faq->question}}</td>
                                <td class="fw-bold text-success">{{$faq->answer}}</td>
                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#EditfModal{{ $faq->id }}">
                                        <i class="fa-solid fa-pen-to-square fa-2x text-primary"></i>
                                    </a>
                                </td>

                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#DeletefModal{{ $faq->id }}">
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
    <!-- ================= About Descriptions ======================================================================================================================= -->
    <!-- ============================================================================================================================================================ -->

    <!-- Add About Desc Details Modal Start-->
    @if($abouts->count() == 0)
    <button type="button" class="btn btn-danger floating-button" data-bs-toggle="modal" data-bs-target="#AddModal">
        + About Desc
    </button>
    @endif


    <div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="AddModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="AddModalLabel">Add About Descriptions</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin-about.desc.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="desc_one" class="form-label fw-bold mb-2">Description 1<span class="text-danger">*</span></label>
                            <textarea name="desc_one" id="desc_one" class="form-control" rows="6" placeholder="Enter Description" required></textarea>
                        </div>



                        <div class="form-group mb-3">
                            <label for="desc_two" class="form-label fw-bold mb-2">Description 2<span class="text-danger">*</span></label>
                            <textarea name="desc_two" id="desc_two" class="form-control" rows="6" placeholder="Enter Description" required></textarea>
                        </div>



                        <div class="form-group mb-3">
                            <label for="desc_three" class="form-label fw-bold mb-2">Description 3<span class="text-danger">*</span></label>
                            <textarea name="desc_three" id="desc_three" class="form-control" rows="6" placeholder="Enter Description" required></textarea>
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
    @foreach($abouts as $about)
    <div class="modal fade" id="EditaModal{{ $about->id }}" tabindex="-1" aria-labelledby="EditaModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="EditaModal">Edit About Descriptions</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin-about.desc.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="desc_one" class="form-label fw-bold mb-2">Description 1<span class="text-danger">*</span></label>
                            <textarea name="desc_one" id="desc_one" class="form-control" rows="6" required>{{ $about->desc_one }}</textarea>
                        </div>



                        <div class="form-group mb-3">
                            <label for="desc_two" class="form-label fw-bold mb-2">Description 2<span class="text-danger">*</span></label>
                            <textarea name="desc_two" id="desc_two" class="form-control" rows="6" required>{{ $about->desc_two }}</textarea>
                        </div>



                        <div class="form-group mb-3">
                            <label for="desc_three" class="form-label fw-bold mb-2">Description 3<span class="text-danger">*</span></label>
                            <textarea name="desc_three" id="desc_three" class="form-control" rows="6" required>{{ $about->desc_three }}</textarea>
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
    <!-- Edit About Desc Details Modal End-->


    <!-- Descriprtion 0 View Modal Start -->
    @foreach($abouts as $about)
    <div class="modal fade" id="descriptionViewModal1{{ $about->id }}" tabindex="-1" aria-labelledby="descriptionViewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="descriptionViewModalLabel">Description 1</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="fw-bold">{{ $about->desc_one }}</p>
                </div>

            </div>
        </div>
    </div>
    @endforeach
    <!-- Descriprtion 0 View Modal End -->



    <!-- Descriprtion 1 View Modal Start -->
    @foreach($abouts as $about)
    <div class="modal fade" id="descriptionViewModal2{{ $about->id }}" tabindex="-1" aria-labelledby="descriptionViewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="descriptionViewModalLabel">Description 2</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="fw-bold">{{ $about->desc_two }}</p>
                </div>

            </div>
        </div>
    </div>
    @endforeach
    <!-- Descriprtion 1 View Modal End -->




    <!-- Descriprtion 2 View Modal Start -->
    @foreach($abouts as $about)
    <div class="modal fade" id="descriptionViewModal3{{ $about->id }}" tabindex="-1" aria-labelledby="descriptionViewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="descriptionViewModalLabel">Description 3</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="fw-bold">{{ $about->desc_three }}</p>
                </div>

            </div>
        </div>
    </div>
    @endforeach
    <!-- Descriprtion 2 View Modal End -->


    <!-- Delete About Desc Modal Start -->
    @foreach($abouts as $about)
    <div class="modal fade" id="DeleteaModal{{ $about->id }}" tabindex="-1" aria-labelledby="DeleteaModal" aria-hidden="true">
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
                    <form action="{{ route('admin-about.desc.delete', $about->id) }}" method="POST">
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
                    <form action="{{ route('admin-about.faq.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="question" class="form-label fw-bold mb-2">Question<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="question" id="question" placeholder="Enter Question" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="answer" class="form-label fw-bold mb-2">Answer<span class="text-danger">*</span></label>
                            <textarea name="answer" id="answer" class="form-control" rows="6" placeholder="Enter Answer" required></textarea>
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
    @foreach($faqs as $faq)
    <div class="modal fade" id="EditfModal{{ $faq->id }}" tabindex="-1" aria-labelledby="EditfModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="EditfModal">Add FAQ</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin-about.faq.update', $faq->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="question" class="form-label fw-bold mb-2">Question<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="question" id="question" value="{{ $faq->question }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="answer" class="form-label fw-bold mb-2">Answer<span class="text-danger">*</span></label>
                            <textarea name="answer" id="answer" class="form-control" rows="6">{{ $faq->answer }}</textarea>
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
    <!-- Edit FAQ Modal End-->


    <!-- Delete Video Modal Start -->
    @foreach($faqs as $faq)
    <div class="modal fade" id="DeletefModal{{ $faq->id }}" tabindex="-1" aria-labelledby="DeletefModal" aria-hidden="true">
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
                    <form action="{{ route('admin-about.faq.delete', $faq->id) }}" method="POST">
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

    <!-- ============================================================================================================================================================ -->
    <!-- ============================================================================================================================================================ -->
    <!-- ============================================================================================================================================================ -->












    <!-- ============================================================================================================================================================ -->
    <!-- ================Marquee Text================================================================================================================================ -->
    <!-- ============================================================================================================================================================ -->

    <!-- Add Marquee Text Modal Start-->
    @if($marquees->count() == 0)
    <button type="button" class="btn btn-danger2 floating-button5" data-bs-toggle="modal" data-bs-target="#AddPartnerModal">
        Add Marquee Text
    </button>
    @endif


    <div class="modal fade" id="AddPartnerModal" tabindex="-1" aria-labelledby="AddPartnerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="AddPartnerModalLabel">Add Marquee Text</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin-about.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group mb-3">
                            <label for="marquee_text" class="form-label fw-bold mb-2">Text<span class="text-danger">*</span></label>
                            <textarea name="marquee_text" id="marquee_text" class="form-control" placeholder="Enter Text" rows="6" required></textarea>
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
    @foreach($marquees as $marquee)
    <div class="modal fade" id="EditmModal{{$marquee->id}}" tabindex="-1" aria-labelledby="EditmModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="EditmModal">Add Marquee Text</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin-about.update', $marquee->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="" class="form-label fw-bold mb-2">Text<span class="text-danger">*</span></label>
                            <textarea name="marquee_text" id="marquee_text" class="form-control" rows="6" required>{{ $marquee->marquee_text }}</textarea>
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
    <!-- Edit Marquee Text Modal End-->


    <!-- Delete Video Modal Start -->
    @foreach($marquees as $marquee)
    <div class="modal fade" id="DeletemModal{{$marquee->id}}" tabindex="-1" aria-labelledby="DeletemModal" aria-hidden="true">
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
                    <form action="{{ route('admin-about.delete', $marquee->id) }}" method="POST">
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

    <!-- ============================================================================================================================================================ -->
    <!-- ============================================================================================================================================================ -->
    <!-- ============================================================================================================================================================ -->

</x-app-layout>