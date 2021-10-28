<section class="">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if(count($errors->all()))
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Error:</h4>
                    <ul class="alert-danger">
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block py-2">  
                        <strong class="py-2">{{ $message }}</strong>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>