@extends('layouts.app')

@section('main')
    <div class="container">
        {{-- <h1>New Products</h1> --}}
        <div class="row justify-content-center">
            <div class="col-sm-8 ">
                <div class="card mt-3 p-3">
                    <h1 class="text-muted mb-2">Product Edit #{{ $product->name }}</h1>
                    <form action="update" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control"
                                value="{{ old('name', $product->name) }}">
                        </div>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <br>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" cols="15" rows="5"> {{ old('description', $product->description) }}</textarea>
                        </div>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <br>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control" value="{{ old('image') }}">
                        </div>
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <br>
                        <button type="submit" class="btn btn-dark mt-3"> Submit </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </main>
@endsection
