@extends('admin.main')
@section('main')
    <br>
    <br>
    <br>
    <section class="no-padding-top no-padding-bottom">
        <div class="container-fluid">
            <div class="w-75">
                <ul class="list-group">
                    <li class="bg-dark text-light list-group-item d-flex justify-content-between align-items-center">
                        Cras justo odio
                        <button class="btn btn-info">Add</button>
                    </li>

                </ul>
            </div>
            <div class="pagination">

            </div>
            <br><br>
            <div class="w-50">

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Add Studios
                </button>

                <div class="modal fade text-light" id="exampleModal" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body ">
                                <form class="text-light">
                                    <div class="form-group text-light">
                                        <label class="text-light" for="exampleInputEmail1">Studia name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                               aria-describedby="emailHelp" placeholder="Enter email">
                                    </div>

                                </form>
                                <form class="text-light">
                                    <div class="form-group text-light">
                                        <label class="text-light" for="exampleInputEmail1">Logo</label>
                                        <input type="file" class="form-control" id="exampleInputEmail1"
                                               aria-describedby="emailHelp" placeholder="Enter email">
                                    </div>

                                </form>
                                <form class="text-light">
                                    <div class="form-group text-light">
                                        <label class="text-light" for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                               aria-describedby="emailHelp" placeholder="Enter email">
                                    </div>
                                </form>
                                <form class="text-light">
                                    <div class="form-group text-light">
                                        <label class="text-light" for="exampleInputEmail1">Number</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1"
                                               aria-describedby="emailHelp" placeholder="Enter email">
                                    </div>
                                </form>
                                <form class="text-light">
                                    <div class="form-group text-light">
                                        <label class="text-light" for="exampleInputEmail1">Address</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                               aria-describedby="emailHelp" placeholder="Enter email">
                                    </div>
                                </form>
                                <form class="text-light">
                                    <div class="form-group text-light">
                                        <label class="text-light" for="exampleInputEmail1">Work Desc</label>
                                        <textarea name="desc" id="desc" cols="60" rows="2"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
