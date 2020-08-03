@extends('layouts.app')
@section('content')
<div class="row">
    @if(Session::has('success'))
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        {{ Session::get('success') }}
    </div>
    @endif
    @if(Session::has('danger'))
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        {{ Session::get('danger') }}
    </div>
    @endif
    <div class="x_panel">
        <div class="x_title">
            <h4>View Products Available</h4>
        </div>
       <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
        @csrf
           <div class="col-sm-6">
               <div class="form-group @error('ProductName') bad @enderror">
                   <label class="label-control" for="ProductName">
                       <i class="fa fa-tags"></i>&nbsp;
                       Product Name
                   </label>
                   <input type="text" name="ProductName" id="" class="form-control">
                   @error('ProductName') 
                <span style="color:red">
                    {{ $message }}
                </span>
              @enderror
               </div>
           </div>
           <div class="col-sm-6">
            <div class="form-group @error('ProductText') bad @enderror">
                <label class="label-control" for="ProductName">
                    <i class="fa fa-text-height"></i>&nbsp;
                    Product Text
                </label>
                <input type="text" name="ProductText" id="" class="form-control">
                @error('ProductText') 
                <span style="color:red">
                    {{ $message }}
                </span>
              @enderror
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group @error('ProductCategory') bad @enderror">
                <label class="label-control" for="ProductName">
                    <i class="fa fa-list"></i>&nbsp;
                    Product Category
                </label>
               <select class="form-control" name="ProductCategory">
                   <option label="Select Category"></option>
                   @foreach($categories as $category)
                   <option value="{{ $category->CategoryName }}">{{ $category->CategoryName }}</option>
                   @endforeach
               </select>
               @error('ProductCategory') 
               <span style="color:red">
                   {{ $message }}
               </span>
             @enderror
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group @error('ProductName') bad @enderror">
                <label class="label-control" for="ProductName">
                    <i class="fa fa-list"></i>&nbsp;
                    Product Brands
                </label>
               <select class="form-control" name="ProductBrand">
                   <option label="Select Brand"></option>
                   @foreach($brands as $brand)
                   <option value="{{ $brand->BrandName }}">{{ $brand->BrandName }}</option>
                   @endforeach
               </select>
               @error('ProductBrand') 
               <span style="color:red">
                   {{ $message }}
               </span>
             @enderror
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group  @error('SellingPrice') bad @enderror">
                <label class="label-control" for="ProductName">
                    <i class="fa fa-money"></i>&nbsp;
                    Selling Price
                </label>
              <input type="number" name="SellingPrice" id="" class="form-control">
              @error('SellingPrice') 
                <span style="color:red">
                    {{ $message }}
                </span>
              @enderror
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group @error('ProductCount') bad @enderror">
                <label class="label-control" for="ProductName">
                    <i class="fa fa-sort-numeric-asc"></i>&nbsp;
                    Product Count
                </label>
              <input type="number" name="ProductCount" id="" class="form-control">
              @error('ProductCount') 
                <span style="color:red">
                    {{ $message }}
                </span>
              @enderror
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group @error('ProductDescription') bad @enderror">
                <label class="label-control" for="ProductName">
                    <i class="fa fa-money"></i>&nbsp;
                    Product Description
                </label>
             <textarea id="summernote" class="form-control" placeholder="Add Broad description about the product Here" name="ProductDescription">
             </textarea>
             @error('ProductDescription') 
             <span style="color:red">
                 {{ $message }}
             </span>
           @enderror
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group @error('ProductImage') bad @enderror">
                <label class="label-control" for="ProductName">
                    <i class="fa fa-image"></i>&nbsp;
                    Product Image
                </label>
              <input type="file" name="ProductImage" id="" class="form-control">
              @error('ProductImage') 
                <span style="color:red">
                    {{ $message }}
                </span>
              @enderror
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group  @error('FrontView') bad @enderror">
                <label class="label-control" for="ProductName">
                    <i class="fa fa-image"></i>&nbsp;
                    Product FrontView
                </label>
              <input type="file" name="FrontView" id="" class="form-control">
              @error('FrontView') 
                <span style="color:red">
                    {{ $message }}
                </span>
              @enderror
            </div>
        </div>
        <div class="col-sm-12">
            <button class="btn fa fa-send btn-md btn-success" type="submit">Add Product</button>
        </div>
       </form>
    </div>
</div>
@endsection