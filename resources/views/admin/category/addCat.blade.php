@extends('admin.layouts.app')
@section('content')
 <!-- MAIN CONTENT-->
 <div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-12 ">
                 <a href="{{route('admin#category')}}" class="text-dark">
                     Category list
                  </a>
                  <i class="fa fa-arrow-right"></i>
                  <span class="text-primary">Add Categories</span>
                </div>
              </div>

              <div class="row my-2">
                 <div class="col-12">
                     <h3 class="bg-light">Add Categories</h3>
                 </div>
             </div>
            <div class="col-6 ">
                <div class="card">
                    <div class="card-body">

                        <form action="{{ route('admin#create')}}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="" class="">Category</label>
                                <input type="text" value="{{ old('item_name')}}" class="form-control
                               " name="category" placeholder="Input Name">

                               </div>

                               <div class="form-group">
                                <label for="" class="">Category Photo</label>
                                <input type="file" name="photo" class="form-control">

                               </div>


                                <div class="form-group">
                                    <label for="" class="">Status</label>
                                    <select name="status"  class="form-control statusChange">
                                        <option value="0" @if (request('status') =='0') selected @endif>Publish</option>
                                        <option value="1"  @if (request('status') =='1') selected @endif>Unpublish</option>

                                    </select>
                                </div>

                                <div class="float-right">

                                <a href="{{route('admin#category')}}" class="btn btn-light shadow-sm text-purple">
                                    Cancel
                                 </a>
                                 <button id="payment-button" type="submit" class="btn bg-purple ">
                                     <span id="payment-button-amount">Save</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->
@endsection
{{-- @section('scriptSource')
<script>
     $(document).ready(function(){

// change status
$('.statusChange').change(function(){

$currentStatus = $(this).val();
$parentNode = $(this).parents("tr");
$orderId = $parentNode.find('.orderId').val();
$data = {
    'status' : $currentStatus ,
    'orderId' : $orderId ,

};
console.log($data);
$.ajax({
            type : 'get' ,
            url : '/order/ajax/change/status' ,
            data : $data ,
            dataType : 'json' ,

        })
        location.reload();
            // window.location.href = "/order/list";
})
})
</script>
@endsection --}}
