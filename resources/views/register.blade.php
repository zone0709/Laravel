<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Register</title>
</head>
<body>

    <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <h2>Register Form</h2>
                    <form method="POST">
                        @csrf
                        {{--  {{csrf_field()}}  --}}
                        <div class="form-group">
                            <label for="name">Fullname</label>
                            <input type="text" class="form-control" 
                            id="name" aria-describedby="nameHelp" 
                            placeholder="Enter Fullname" name="fullname">
                            @if ($errors->has("fullname"))
                            <div class="text-danger">
                                <ul>
                                    @foreach ($errors->get("fullname") as $error)
                                        {{ $error }}
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" 
                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                            @if ($errors->has("email"))
                            <div class="text-danger">
                                <ul>
                                    @foreach ($errors->get("email") as $error)
                                        {{ $error }}
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" 
                            id="exampleInputPassword1" placeholder="Password" name="password">
                            @if ($errors->has("password"))
                            <div class="text-danger">
                                <ul>
                                    @foreach ($errors->get("password") as $error)
                                        {{ $error }}
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
                            @if ($errors->has("confirm_password"))
                            <div class="text-danger">
                                <ul>
                                    @foreach ($errors->get("confirm_password") as $error)
                                        {{ $error }}
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Address</label>
                            <input type="text" class="form-control" placeholder="Address" name="address">
                            @if ($errors->has("address"))
                            <div class="text-danger">
                                <ul>
                                    @foreach ($errors->get("address") as $error)
                                        {{ $error }}
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Phone</label>
                            <input type="text" class="form-control" placeholder="Phone" name="phone">
                            @if ($errors->has("phone"))
                            <div class="text-danger">
                                <ul>
                                    @foreach ($errors->get("phone") as $error)
                                        {{ $error }}
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
    
        </div>
    
</body>
</html>