@extends('layout.app')
@section('content')
<section id="hero" class="d-flex align-items-center mt">
                    <div class="container">
                        <div class="row">        
         <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
         
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5">
                @if($user->detail)
                <div class="my-5 ml-5">
                    <img src="{{ asset('storage/' . $user->detail->photo) }}" alt="" class="img-thumbnail mx-auto d-block" width="200px" length="200px"><br>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" readonly>{{ $user->detail->description }}</textarea>
                    </div>
                </div>
                @endif
            </div>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Profile</h1>
                    </div>

                    <form class="user" action="" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="name" placeholder="Full Name" value="{{ $user->name }}" disabled>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" name="email" placeholder="Email Address" value="{{ $user->email }}" disabled>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="phone" placeholder="Phone Number" value="{{ $user->phone }}" disabled>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="address" placeholder="Address" value="{{ $user->address }}" disabled>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
    </div>
</div>
</section>
@endsection('content')