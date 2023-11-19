<x-layout>
    <div class="img-edit">
        <div class="container">
            <div class="row p-5">
                <div class="col-12 my-4">
                    <h1 class="text-center">Game Update</h1>
                </div>
                @if(session()->has('success'))
                <div class="col-12 alert alert-success">
                    <p> {{session('success')}} </p>
                </div>
                @endif
                <div class="col-12">
                    <form method="POST" action="{{route('game.update',compact('game'))}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo</label>
                            <input type="text" class="form-control border-5 border-black" id="title" name ="title" value="{{$game->title}} ">
                            @error('title') <p class="text-danger">{{$message}} </p> @enderror
                            
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control border-5 border-black ">{{$game->description}}</textarea>
                            @error('description') <p class="text-danger">{{$message}} </p> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control border-5 border-black" id="price" name ="price" value={{$game->price}}>
                            @error('price') <p class="text-danger">{{$message}} </p> @enderror
                            
                        </div>
                        <div class="mb-3">
                            <label for="img" class="form-label">Image</label>
                            <input type="file" class="form-control border-5 border-black" id="img" name ="img">
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