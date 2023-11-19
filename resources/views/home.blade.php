<x-layout>
    <header>
        {{-- header --}}
        
        <div class="container-fluid vh-100 header">
            <div class="container-fluid">
                <div class="row vh-100 justify-content-center align align-items-center text-center header">
                    <div class="col-10 col-md-8 h1-home d-flex align-items-center">
                        <h1 class="h1-h">For The players</h1>
                        
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container-fluid d-flex justify-content-evenly img">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="text-center m-5">I grandi successi</h2>
                </div>
                <div class="col-12 col-md-3 m-5 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="./media/the last of us.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">The last of us</h5>
                            <p class="card-text text-truncate">Nel 2013 un'epidemia generata dal fungo Cordyceps mutato si scatena negli Stati Uniti d'America, trasformando gli esseri umani in creature aggressive. Nei sobborghi di Austin Joel Miller sfugge al caos insieme a suo fratello Tommy e alla figlia tredicenne Sarah.</p>
                            <a href="{{route('game.index')}}" class="btn btn-primary">Altri giochi</a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-3 m-5 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="./media/red dead.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Red dead redemption II</h5>
                            <p class="card-text text-truncate">Tutto comincia con l'arrivo a Blackwater, o almeno così sembra. John Marston, ex bandito oggi rancher si è ritrovato il neonato Federal Bureau of Investigation che gli ha fatto la classica "offerta che non si può rifiutare"</p>
                            <a href="{{route('game.index')}}" class="btn btn-primary">Altri giochi</a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-3 m-5 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="./media/batman.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Batman Arkam Knight</h5>
                            <p class="card-text text-truncate">Ad Halloween, lo Spaventapasseri rilascia una piccola quantità della sua nuova potente tossina della paura in una tavola calda e minaccia di scaten</p>
                            <a href="{{route('game.index')}}" class="btn btn-primary">Altri giochi</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>