@extends('admin_layout')
@section('admin_content')
<div class="form-w3layouts">
    <!-- page start-->
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Add Category
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" placeholder="Name category">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <input type="text" name="category_desc" class="form-control" id="exampleInputEmail1" placeholder="description">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hien thi</label>
                                <select class="form-control m-bot15">
                                    <option>Hien</option>
                                    <option>An</option>
                                </select>
                            </div>

                            <button type="submit" name="add_category" class="btn btn-info">Submit</button>
                        </form>
                    </div>

                </div>
            </section>

        </div>

    </div>
@endsection
