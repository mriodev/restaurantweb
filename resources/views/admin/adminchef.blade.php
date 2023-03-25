<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.admincss')
    @include('admin.foodmenutable')
</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')
        <div style="position: relative; top: 20px; right: -50px; width: 60%">
            <form style="padding-left: 50px" action="{{ url('/insertchef') }}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4 ml-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form6Example1">Chef Name</label>
                                <input type="text" id="form6Example1" name="name" placeholder="Chef Name" required
                                    class="form-control" style="background-color: white; color: black" />

                            </div>


                            <div class="form-outline mb-4">
                                <label class="form-label" for="form6Example2">speciality</label>
                                <input type="num" name="speciality" placeholder="speciality" required
                                    id="form6Example2" class="form-control"
                                    style="background-color: white; color: black" />

                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form6Example3">Image</label>
                                <input type="file" name="image" class="form-label" id="exampleFormControlFile1">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Insert</button>
            </form>

            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Domains</b></h2>
                        </div>

                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>

                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Speciality</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($data as $data)
                            <tr data-status="active">
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->name }}</td>

                                <td>{{ $data->speciality }}</td>
                                <td><img src="/chefimage/{{ $data->image }}"></td>
                                <td>
                                    <a href="{{ url('/updatechef', $data->id) }}" style="color:#FFC107 " class="edit"
                                        data-toggle="modal"><i class="material-icons" data-toggle="tooltip"
                                            title="Edit">&#xE254;</i></a>
                                    <a href="{{ url('/deletechef', $data->id) }}" style="color:#E34724 " class="delete"
                                        data-toggle="modal"><i class="material-icons" data-toggle="tooltip"
                                            title="Delete">&#xE872;</i></a>
                                </td>


                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        @include('admin.adminscript')
</body>

</html>
