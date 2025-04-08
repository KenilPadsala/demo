<x-layout>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-4 mx-auto">
                <h2>Login</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="Enter Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>

                <p>New User? Please <a href="{{ route('register') }}"> Register here</a> </p>
            </div>
        </div>
    </div>
</x-layout>