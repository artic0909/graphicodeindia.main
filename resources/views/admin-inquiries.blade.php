<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Inquiries Page's Content") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Service</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email ID</th>
                                <th scope="col">Inqury</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td class="fw-bold">Saklin Mustak</td>
                                <td class="text-success fw-bold">Website Development</td>
                                <td class="fw-bold">1234567890</td>
                                <td><a style="text-decoration: underline;" class="text-primary" href="mailto:">R5lTt@example.com</a></td>
                                <td><i class="fa-solid fa-message fa-2x text-success"></i></td>
                                <td><i class="fa-solid fa-trash-can fa-2x text-danger"></i></td>
                            </tr>
                           
                    </table>
                </div>
            </div>
        </div>
    </div>




</x-app-layout>
