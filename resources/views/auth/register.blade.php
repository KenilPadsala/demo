<x-layout>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-4 mx-auto">
                <h2>Register</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" value="{{ old('name') }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
                    </div>
                    <div class="form-group mb-2">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="confirm-password" placeholder="Enter Confirm Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>


                </form>

                <p>Existing User? Please <a href="{{ route('login') }}"> Login here</a> </p>

            </div>
        </div>
    </div>
</x-layout>
