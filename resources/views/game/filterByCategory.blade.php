<x-layout> 
    <div class="container-fluid img-edit ">
        <div class="row justify-content-center">
            <div class="col-12 my-5">
                <h1 class="text-center mt-4">{{$category->name}} </h1>
            </div>
            @foreach($category->games as $game)
            <div class="col-3 col-md-2 my-3">
                <div class="card border-5 border-black card-index">
                    <img src="{{ Storage::url($game->img) }} " class="card-img-top" alt="immagine di un gioco ">
                    <div class="card-body">
                        <h5 class="card-title">{{ $game->title }} </h5>
                        <p class="card-text">{{ $game->price }} </p>
                        <a href="{{ route('game.filterByCategory',["category"=>$game->category]) }}">{{$game->category->name}}</a>
                        <div class="d-flex justify-content-around">
                            <a href="{{ route('game.show',compact('game'))}}" class="btn btn-primary btn1 fs-5 fw-bold mx-1">Show</a>
                            <a href="{{route('game.edit',compact('game'))}} " class="btn btn-warning btn1 fs-5 fw-bold mx-1">Edit</a>
                            <form action="{{route('game.destroy',compact('game'))}} " method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn1 fs-5 fw-bold mx-1">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            @endforeach
        </div>
    </div>
    
</x-layout>