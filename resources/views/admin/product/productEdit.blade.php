@extends('layouts.app',['headerTitle'=>'Add Product','contentTitle'=>'Product'])

@section('main-content')
    <div class="container">
        <div class="col-md-5 col-md-offset-1">
            <h2>Update Product</h2>
            <form class="form-horizontal" role="form" method="post" action="{{ URL::to('product',$product['id'])}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('put') }}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-2" for="name">Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="{{ $product['name'] }}" required>
                        @if ($errors->has('name'))
                            <span class="help-block">
								                <strong>{{ $errors->first('name') }}</strong>
							              </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-2" for="description">Description:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="description" name="description" value="{{ $product['description'] }}" required>
                        @if ($errors->has('description'))
                            <span class="help-block">
								                  <strong>{{ $errors->first('description') }}</strong>
							              </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('price')? ' has-error' : '' }}">
                    <label class="control-label col-sm-2" for="price">Price:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="price" name="price" value="{{ $product['price'] }}" required>
                        @if ($errors->has('price'))
                            <span class="help-block">
								                <strong>{{ $errors->first('price') }}</strong>
							              </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-2" for="image">Upload:</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="file" name="image" value="{{ $product['image'] }}">
                        @if ($errors->has('image'))
                            <span class="help-block">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
