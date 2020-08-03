@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col">
        <div class="x_panel">
            <div class="x_title">
                <h5 class="text-center">Available Products in {{ config('app.name') }} Store</h5>
            </div>
            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action table-condensed table-bordered">
                    <thead>
                      <tr class="headings">
                        <th class="column-title"> Image</th>
                        <th class="column-title">Product Id</th>
                        <th class="column-title">Product Name </th>
                        <th class="column-title">Product Brand </th>
                        <th class="column-title">Product Price </th>
                        <th class="column-title">Actions </th>
                        <th class="bulk-actions" colspan="7">
                          <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td class="text-center">
                                <img src="{{ asset($product->ProductImage) }}" width="30px" height="30px" style="border-radius:30px">
                            </td>
                            <td>
                                {{ $product->ProductId }}
                            </td>
                            <td>
                                {{ $product->ProductName }}
                            </td>
                            <td>
                                {{ $product->ProductBrand }}
                            </td>
                            <td>
                             Ksh.   {{ $product->SellingPrice}}
                            </td>
                            <td>
                                <a href="{{ route('products.edit',[$product->id]) }}" class="fa fa-edit" style="color:blue"></a>&nbsp;
                                <a href="{{ route('products.show',[$product->id]) }}" class="fa fa-eye" style="color:green"></a>
                                <button class="btn btn-sm fa fa-trash" style="color:red;background-color:#f9f9f9 !important"></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop