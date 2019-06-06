@extends('layouts.app')

@section('styles')
    <link rel="stylesheet"
          href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Products</div>

                    <div class="card-body">

                        @if (session('message'))
                            <div class="alert alert-info">{{ session('message') }}</div>
                            <br/>
                        @endif

                        @if (session()->has('product'))
                            <div class="alert alert-info">You have {{ session('product')['name'] }} in cart. <a
                                        href="{{ route('checkout') }}">Checkout</a></div>
                            <br/>
                        @endif

                        <table class="table" id="datatable">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-danger"
                                           href="{{ route('products.buy', $product->id) }}">Buy</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">No products found.</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascripts')
    <script>
        $(document).ready(function () {
            $.noConflict()

            window.dtDefaultOptions = {
                columnDefs: [],
                'iDisplayLength': 100,
                'aaSorting': []
            }

            $('#datatable').DataTable(window.dtDefaultOptions)
        })
    </script>
@stop