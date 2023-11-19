<x-layout>
    <div class="img-register">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Register</h1>
            </div>
            <div class="col-12">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label fs-2 fw-bold">Username</label>
                        <input type="text" class="form-control border-5 border-black" id="username" aria-describedby="emailHelp" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fs-2 fw-bold">Email address</label>
                        <input type="email" class="form-control border-5 border-black" id="email" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fs-2 fw-bold">Password</label>
                        <input type="password" class="form-control border-5 border-black" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label fs-2 fw-bold">Password Confirmation</label>
                        <input type="password" class="form-control border-5 border-black" id="password_confirmation" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</x-layout>