@extends('admin.main')
@section('main')
    <br>
    <br>
    <br>
    <section class="no-padding-top no-padding-bottom">
        <div class="container-fluid">
            <div class="w-75 float-left">
                <ul class="list-group" id="work">
                    @foreach($studios as $studio)
                        <li id="{{ $studio->id }}"
                            class="bg-dark text-light list-group-item d-flex justify-content-between align-items-center">
                            {{ $studio->name }}
                            <form enctype="multipart/form-data" id="works" >
                                <input type='file' name="works">
                            </form>
                            <button style="display:block;" class="btn btn-info">
                                Add
                            </button>
                        </li>

                    @endforeach

                </ul>
            </div>
        </div>
    </section>
    <script>
        $('.btn-info').click(function () {
            // let li = $('#work').find('li');
            let data = new FormData($('#works')[0]);
            data.append("_token", "{{ csrf_token() }}");
            $.ajax({
                type: "POST",
                url:'{{ route('studio.work',['studio_id' => $studio->id]) }}',
                data: data,
                cahce: false,
                contentType: false,
                processData: false,
                success:function (response){
                    $('input[type=file]').val("")
                }
            })
        })
    </script>
@endsection
