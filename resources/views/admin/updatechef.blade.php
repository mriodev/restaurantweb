<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('admin.admincss')
</head>


<body>
    <div class="container-scroller">
        @include('admin.navbar')
        <div style="position: relative; top: 20px; right: -50px;">
            <form style="padding-left: 50px" action="{{ url('/update', $data->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4 ml-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form6Example1">Food Name</label>
                                <input type="text" id="form6Example1" name="foodname" value="{{ $data->name }}"
                                    required class="form-control" style="background-color: white; color: black" />

                            </div>


                            <div class="form-outline mb-4">
                                <label class="form-label" for="form6Example2">Price</label>
                                <input type="num" name="price" value="{{ $data->speciality }}" required
                                    id="form6Example2" class="form-control"
                                    style="background-color: white; color: black" />

                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form6Example3">Old Image</label>
                                <img height="200" width="200" src="/foodimage/{{ $data->image }}">
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form6Example3">New Image</label>
                                <input type="file" name="image" class="form-label" id="exampleFormControlFile1">
                            </div>


                        </div>
                    </div>
                </div>
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Update</button>
            </form>
        </div>
    </div>
    @include('admin.adminscript')
</body>

</html>
