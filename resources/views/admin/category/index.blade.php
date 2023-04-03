@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col">
        <p class="fs-5 mt-2 text-primary">
            Categories
        </p>
    </div>

</div>
<div class="row mx-2">
    <div class="col text-right">
        <a href="{{ route('admin#addCat')}}">
            <button class="btn shadow-sm bg-primary text-white"><i class="fa fa-plus"></i>
                Add Categories</button>
          </a>
    </div>
</div>
<div class="col-12 mt-3">
    <div class="card">


      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap text-center">
          <thead>
            <tr>
              <th>Action</th>
              <th>No</th>
              <th>Categories</th>
              <th>Publish</th>

              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($category as $c)
            <tr>
                <td>
                    <button class="btn btn-sm bg-dark text-white"><i class="fas fa-edit"></i></button>
                    <a href="{{ route('admin#delete' , $c->id)}}">

                    <button class="btn btn-sm bg-danger text-white"><i class="fas fa-trash-alt"></i></button>
                    </a>
                  </td>
                <td>{{ $c['id']}}</td>
                <td>{{ $c['category']}}</td>
                <td>
                    <!-- Default checked -->
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" @if ($c -> status == 0) checked @endif>
                        <label class="custom-control-label" for="customSwitch1"></label>
                    </div>
                </td>

            </tr>
            @endforeach

          </tbody>
        </table>
        <div class="mt-3">

            {{ $category -> links()}}
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
@endsection
