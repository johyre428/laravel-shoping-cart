@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="https://hpmedia.bloomsbury.com/rep/s/9781408855904_309575.jpeg" alt="..." class="img-responsive">
                <div class="caption">
                    <h3>Product Title</h3>
                    <p class="descriptions">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis animi perferendis blanditiis dicta praesentium, quis consectetur amet sequi. Animi eos illo nam alias tenetur doloribus dolore quo provident autem dolorem.</p>
                    <div class="clearfix">
                        <div class="pull-left price">$12</div>
                        <a href="#" class="btn btn-default btn-success pull-right" role="button">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection