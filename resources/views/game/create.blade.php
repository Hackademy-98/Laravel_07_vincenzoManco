<x-layout>
    <div class="img-edit">
        <div class="container">
            <div class="row p-5">
                <div class="col-12 my-4">
                    <h1 class="text-center fw-bold">Game creation</h1>
                </div>
                @if(session()->has('success'))
                <div class="col-12 alert alert-success">
                    <p> {{session('success')}} </p>
                </div>
                @endif
                <div class="col-12">
                    <form method="POST" action="{{route('game.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label fs-2 fw-bold">Titolo</label>
                            <input type="text" class="form-control" id="title" name ="title" value="{{old('title')}} ">
                            @error('title') <p class="text-danger">{{$message}} </p> @enderror
                            
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label fs-2 fw-bold">Description</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{old('title')}}</textarea>
                            @error('description') <p class="text-danger">{{$message}} </p> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label fs-2 fw-bold">Category</label>
                            <select class="form-select" id="category" name="category">
                                <option selected>Select category</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }} </option>
                                @endforeach
                                
                            </select>
                            
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label fs-2 fw-bold">Price</label>
                            <input type="text" class="form-control" id="price" name ="price" value={{old('price')}}>
                            @error('price') <p class="text-danger">{{$message}} </p> @enderror
                            
                        </div>
                        <div class="mb-3">
                            <label for="img" class="form-label fs-2 fw-bold">Image</label>
                            <input type="file" class="form-control" id="img" name ="img">
                            @error('img') <p class="text-danger">{{$message}} </p> @enderror
                            
                        </div>
                        <div class="mt-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>