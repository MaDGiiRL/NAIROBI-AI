<x-layout title="Forgot Password">
    <div class="bg-forgot pb-5 vh-100 mt-5 pt-5">
        <div class="container py-5 my-5 py-md-0 my-md-0">
            <div class="row justify-content-start p-5 mt-4 mt-md-0">
                <div class="col-md-6 bg-dark-auth text-white p-4 p-md-5">
                    <h3 class="text-center">Forgot Password</h3>
                    <p class="text-center text-white-50">Please enter your e-mail:</p>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        
                        @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                            {{ session('status') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li><i class="bi bi-exclamation-circle"></i> {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control-dark text-bg-dark form-control" placeholder="Email">
                        </div>
                        <button type="submit" class="btn btn-danger w-100 mt-3">Send Reset Link</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>