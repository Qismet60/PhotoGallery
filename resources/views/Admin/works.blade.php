@extends('admin.main')
@section('main')
    <br>
    <br>
    <br>
    <section class="no-padding-top no-padding-bottom">
        <div class="container-fluid">

            <div style="width:100%;border: 2px solid red;border-radius: 20px;padding: 10px;">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Add</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($studios as $studio)
                        <tr id="{{ $studio->id }}">
                            <td>{{ $studio->name }}</td>
                            <td>
                                <button class="btn btn-info" style="display:block" onclick="document.getElementById('getFile').click()">Works</button>
                                <input type='file' id="getFile" name="image" style="display:none">
                            </td>
                            <td>
                                <button class="btn btn-outline-success">Add</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <script>
        $('tbody').on('click','.btn-outline-success',function (){
            var studios_id = $(this).parents('tr').attr('id');
            var image = $("#getFile").prop("files")[0];
            var formdata = new FormData();
            formdata.append('image',image)
            formdata.append('studios_id',studios_id)
            formdata.append('_token'," {{ csrf_token() }}")
            $.ajax({
                url:"/add",
                type:"POST",
                cache: false,
                contentType: false,
                processData: false,
                data:formdata,
                success:function (response){
                    $('input[name=image]').val("");
                }
            })
        })
    </script>
@endsection
