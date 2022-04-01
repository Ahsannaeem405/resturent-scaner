<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=0">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- style link -->
    <link rel="stylesheet" href="{{asset('assetoo/css/style.css')}}">

    <!-- Bootstap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Scan</title>
</head>

<body>

    <section class="client-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-12">

                    <form class="order-form p-3 " method='post' action='{{ route("save-order") }}'>
                        @csrf
                        <div class="form-logo text-center mx-auto">
                            <img src="{{ isset($info->site_logo) ? asset('uploads/'.$info->site_logo) : asset('assetoo/img/new-logo.png') }}" alt="main-logo" class="img-fluid">
                        </div>
                        <h2 class="text-center mb-4"> Order Pickup</h2>
                        @if(Session::has("success"))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Successful!</strong> {{Session::get("success")}}.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

                        <div class="form-group">
                            @if($name->shown==1)  
                            <label>What name does your order have?</label>
                            <input type="text" name="name" class="form-control" placeholder="Your Name*" @if($name->required==1) required @endif>
                            @endif
                            <span class='text-danger'>@error('name'){{ $message }} @enderror</span>
                            @if($phone_no->shown==1)
                            <input type="number" name="phone_number" class="form-control mt-3" placeholder="Your Phone Number*" @if($phone_no->required==1) required @endif>
                            @endif
                            <span class='text-danger'>@error('phone_number'){{ $message }} @enderror</span>
                            @if($order_no->shown==1)
                            <input type="number" name="order_number" class="form-control mt-3" placeholder="Order Number*" @if($order_no->required==1) required @endif>
                            @endif
                            <span class='text-danger'>@error('order_number'){{ $message }} @enderror</span>
                        </div>
                        <div class="form-group mt-3">
                        @if($vehicle_color->shown==1)
                            <label>Which vehicle do you have?</label>
                            <select name="vehicle_color" id="" class="form-control" @if($vehicle_color->required==1) required @endif>
                                <option value="" selected>Vehicle Color* . . .</option>
                                @foreach($vColor as $color)
                                <option value="{{ isset($color->id) ? $color->id : ''}}">{{ isset($color->color) ? $color->color : ''}}</option>
                                @endforeach
                                
                            </select>
                            @endif
                            <span class='text-danger'>@error('vehicle_color'){{ $message }} @enderror</span>
                            @if($vehicle_type->shown==1)
                            <select name="vehicle_type" id="" class="form-control mt-3" @if($vehicle_type->required==1) required @endif>
                                <option value="" selected>Vehicle type* . . .</option>
                                @foreach($vType as $type)
                                <option value="{{ isset($type->id) ? $type->id : ''}}">{{ isset($type->type) ? $type->type : ''}}</option>
                                @endforeach
                                
                            </select>
                            @endif
                            <span class='text-danger'>@error('vehicle_type'){{ $message }} @enderror</span>
                        </div>
                        @if($parking->shown==1)
                        <div class="form-group mt-3">
                            <label>What parking sort are you in*</label>
                            <input type="text" name="parking" class="form-control" placeholder="" @if($parking->required==1) required @endif>
                            <span class='text-danger'>@error('parking'){{ $message }} @enderror</span>
                        </div>
                        @endif
                        @if($detail->shown==1)
                        <div class="form-group mt-3">
                            <label>Order details*</label>
                            <textarea name="details" id="" rows="5" class="form-control" @if($detail->required==1) required @endif></textarea>
                            <span class='text-danger'>@error('details'){{ $message }} @enderror</span>
                        </div>
                        @endif

                        <div class="row justify-content-center">
                            <div class="col-md-6 col-12">
                                <button type="submit" class="btn btn-primary w-100 mb-4">Submit</button>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="alert alert-success border border-warning"><strong>{{$info->name}} </strong> <br>
                            {{$info->address }} ,&nbsp {{$info->street}},&nbsp {{$info->house_no}},&nbsp {{$info->zip}} <br>
                            <small><strong>Note: </strong> {{$info->message}} </small>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap javaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>