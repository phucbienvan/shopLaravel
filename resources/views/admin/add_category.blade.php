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
                        <form role="form" action="{{URL::to('save-category')}}" method="post">
                            {{csrf_field()}}
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
                                <select name="category_status" class="form-control m-bot15">
                                    <option value="1">Hien</option>
                                    <option value="0">An</option>
                                </select>
                            </div>
                            <button type="submit" name="add_category" class="btn btn-info">Add Category</button>
                        </form>
                        <?php
                        $message = Session::get('message');
                        if ($message){
                            echo $message;
                            Session::put('message', null);
                        }
                        ?>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
