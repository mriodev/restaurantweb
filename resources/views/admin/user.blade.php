<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.admincss')
</head>

<body>
    <div class="container-scroller">

        @include('admin.navbar')

        <div style="position: relative; top: 60px; right: -10px;">

            <table bgcolor="white" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="selectAll">
                                <label for="selectAll"></label>
                            </span>
                        </th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data)
                        <tr>
                            <td>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                    <label for="checkbox1"></label>
                                </span>
                            </td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>

                            @if ($data->usertype == '0')
                                <td>
                                    <a href="#editEmployeeModal" style="color:#FFC107 " class="edit"
                                        data-toggle="modal"><i class="material-icons" data-toggle="tooltip"
                                            title="Edit">&#xE254;</i></a>
                                    <a href="{{ url('/deleteuser,$data->id') }}" style="color:#E34724 " class="delete"
                                        data-toggle="modal"><i class="material-icons" data-toggle="tooltip"
                                            title="Delete">&#xE872;</i></a>
                                </td>
                            @else
                                <td><a>Not Allowed</a></td>
                            @endif

                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>






    <!-- container-scroller -->
    @include('admin.adminscript')

</body>

</html>
</body>

</html>
