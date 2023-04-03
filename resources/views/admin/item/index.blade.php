@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col">
        <p class="fs-5 mt-2 text-primary">
            Item Lists
        </p>
    </div>

</div>
<div class="row mx-2">
    <div class="col text-right">
        <a href="{{ route('admin#addItem')}}">
            <button class="btn shadow-sm bg-purple text-white"><i class="fa fa-plus"></i>
                Add Items</button>
          </a>
    </div>
</div>


<div class="col-12 mt-3">
    <div class="card">

      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap text-center">
          <thead class="bg-purple">
            <tr>
              <th>Action</th>
              <th>No</th>
              <th>Item <i class="fa fa-caret-square-down"></i></th>
              <th>Category <i class="fa fa-caret-square-down"></i></th>
              <th>Description <i class="fa fa-caret-square-down"></i></th>
              <th>Price <i class="fa fa-caret-square-down"></i></th>
              <th>owner <i class="fa fa-caret-square-down"></i></th>
              <th>Publish <i class="fa fa-caret-square-down"></i></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($items as $i)
            <tr>
                <td>
                    <button class="btn btn-sm bg-green text-white"><i class="fas fa-edit"></i></button>
                    <a href="{{ route('admin#delete',$i->id)}}">

                        <button class="btn btn-sm bg-danger text-white"><i class="fas fa-trash-alt"></i></button>
                    </a>
                  </td>
              <td>{{ $i['id']}}</td>
              <td>{{ $i['item_name']}}</td>
              <td>{{ $i['category_name']}}</td>
              <td>{{ $i['description']}}</td>
              <td>{{ $i['price']}}</td>
              <td>{{ $i['ownerName']}}</td>

              <td>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1"  @if ($i -> status == 0) checked @endif>
                    <label class="custom-control-label" for="customSwitch1"></label>
                </div>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
        <div class="mt-3">

            {{ $items -> links()}}
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
@endsection
