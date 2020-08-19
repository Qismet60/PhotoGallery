@extends('admin.main')
@section('main')
    <br>
    <br>
    <br>
    <section class="no-padding-top no-padding-bottom">
        <div class="container-fluid">

            <div style="width:100%;border: 2px solid red;border-radius: 20px;padding: 10px;">
                <label for="" class="text-light">Add Studios</label>
                <form id="logo" enctype="multipart/form-data">
                    <div class="w-50 p-1 float-left">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Studio name</label>
                            <input type="text" name="name" class="form-control" placeholder="Studio name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Studio logo</label>
                            <input type="file" name="logo" class="form-control">
                        </div>
                    </div>
                    <div style="20px;"></div>
                    <div class="w-50 p-1 float-left">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Studio number</label>
                            <input type="number" name="number" class="form-control" placeholder="Enter number">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Studio address</label>
                            <input type="text" name="address" class="form-control" placeholder="Enter address">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Desc</label>
                            <textarea style="border-radius: 8px;" name="about" id="about" cols="56" rows="2"></textarea>
                        </div>
                    </div>
                </form>
                <button class="btn btn-info save">Save</button>

            </div>
        </div>
    </section>
    <script>
        $('.save').click(function () {
            let data = new FormData($('#logo')[0]);
            console.log(data);
            data.append("_token", "{{ csrf_token() }}");
            $.ajax({
                type:"post",
                url:"{{ route('add.studio') }}",
                cahce: false,
                contentType: false,
                processData: false,
                data:data,
                success:function (response)
                {
                    $('input[name=name]').val("");
                    $('input[name=email]').val("");
                    $('input[name=number]').val("");
                    $('input[name=address]').val("");
                    $('input[name=logo]').val("");
                    $('textarea[name=about]').val("");
                }
            })
        });
    </script>
@endsection
