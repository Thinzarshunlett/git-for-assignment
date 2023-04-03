@extends('admin.layouts.app')
@section('content')
 <!-- MAIN CONTENT-->
 <div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-12 ">
                 <a href="{{route('admin#item')}}" class="text-dark">
                     Item list
                  </a>
                  <i class="fa fa-arrow-right"></i>
                  <span class="text-primary">Add items</span>
                </div>
              </div>
              <div class="row my-3">
                 <div class="col-12">
                     <h3 class="bg-light">Add Items</h3>
                 </div>
             </div>
             <form action="{{ route('admin#add')}}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <div class="row">

                        <div class="col-6">
                            <div class="form-group">
                                <label for="" class="">Item Name</label>
                                <input type="text" value="{{ old('item_name')}}" class="form-control" name="itemName" placeholder="Input Name">

                            </div>

                            <div class="form-group">
                                <label for="" class="">Select category</label>
                               <select name="catName"  class="form-control statusChange" >
                                <option value="">Select category</option>
                                    @foreach ($categories as $c )
                                    <option value="{{ $c->id}}">{{ $c->category}}</option>

                                    @endforeach

                            </select>


                            </div>

                               <div class="form-group">
                                <label for="" class="">Enter Price</label>
                                <input type="text" value="{{ old('price')}}" class="form-control" name="price" placeholder="Enter Price">

                               </div>

                               <div class="form-group">
                                <label for="" class="">Description</label>
                                <input type="text" value="{{ old('description')}}" class="form-control " name="description" placeholder="Enter Description">

                               </div>

                               <div class="form-group">
                                <label for="" class="">Item Condition</label>
                                <select name="itemCon"  class="form-control ">
                                    <option value="">Select Item Condition</option>
                                    <option value="0" @if (request('itemCon') =='0') selected @endif>New with Tag</option>
                                    <option value="1"  @if (request('itemCon') =='1') selected @endif>Excellent Uesd Condition</option>
                                    <option value="2"  @if (request('itemCon') =='2') selected @endif>Good Used Condition</option>
                                    <option value="2"  @if (request('itemCon') =='3') selected @endif>Very Used Condition</option>
                                </select>
                            </div>

                               <div class="form-group">
                                <label for="" class="">Item Type</label>
                                <select name="itemType"  class="form-control ">
                                    <option value="">Select Item Type</option>
                                    <option value="0" @if (request('itemType') =='0') selected @endif>For Sell</option>
                                    <option value="1"  @if (request('itemType') =='1') selected @endif>For Buy</option>
                                    <option value="2"  @if (request('itemType') =='2') selected @endif>For Exchange</option>

                                </select>
                            </div>


                               <div class="form-group">
                                <label for="" class="">Status</label>
                                <select name="status"  class="form-control statusChange">
                                    <option value="0" @if (request('status') =='0') selected @endif>Publish</option>
                                    <option value="1"  @if (request('status') =='1') selected @endif>Unpublish</option>

                                </select>
                               </div>
                               <div class="form-group">
                                <label for="" class="">Item Photo</label>
                                <input type="file" name="itemPhoto" class="form-control">

                               </div>
                        </div>



                      <div class="col-6">
                        <h4> Owner Information</h4>

                        <div class="form-group">
                         <label for="" class="">Owner Name</label>
                         <input type="text" value="{{ old('ownerName')}}" class="form-control" name="ownerName" placeholder="Input Owner Name">

                        </div>
                        <div class="form-group">
                         <label for="" class="">Contact Number</label>
                         <input type="text" value="{{ old('contNo')}}" class="form-control" name="contNo" placeholder="Add Number">

                        </div>


                        <div class="form-group">
                         <label for="" class="">Address</label>
                         <input type="text" value="{{ old('address')}}" class="form-control  " name="address" placeholder="Enter Address">

                        </div>

                         <div class="float-right">
                            <a href="{{route('admin#item')}}" class="btn btn-light shadow-sm text-purple">
                                Cancel
                             </a>
                             <button id="payment-button" type="submit" class="btn bg-purple ">
                                 <span id="payment-button-amount">Save</span>
                                

                             </button>
                         </div>
                      </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->
@endsection

