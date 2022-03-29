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
    <link rel="stylesheet" href="./css/style.css">

    <!-- Bootstap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Scan</title>
</head>

<body>

    <section class="client-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-12 pt-5">
                    <form class="order-form p-3 mt-5">
                        <div class="form-logo text-center mx-auto">
                            <img src="./img/main-logo.png" alt="main-logo" class="img-fluid">
                        </div>
                        <h2 class="text-center my-4"> Order Pickup</h2>
                        <div class="form-group">
                            <label>What name does your order have?</label>
                            <input type="text" class="form-control" placeholder="Your Name*">
                            <input type="number" class="form-control mt-3" placeholder="Your Phone Number*">
                            <input type="number" class="form-control mt-3" placeholder="Order Number*">
                        </div>
                        <div class="form-group mt-3">
                            <label>Which vehicle do you have?</label>
                            <select name="" id="" class="form-control">
                                <option value="" selected>Vehicle Color* . . .</option>
                                <option value="">Red</option>
                                <option value="">Green</option>
                                <option value="">Blue</option>
                                <option value="">Black</option>
                            </select>
                            <select name="" id="" class="form-control mt-3">
                                <option value="" selected>Vehicle type* . . .</option>
                                <option value="">Car</option>
                                <option value="">Bicycle</option>
                                <option value="">Blue</option>
                                <option value="">Black</option>
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label>What parking sort are you in*</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="form-group mt-3">
                            <label>Order details*</label>
                            <textarea name="" id="" rows="5" class="form-control"></textarea>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-6 col-12">
                                <button type="button" class="btn btn-primary w-100 mb-4" type="button">Submit</button>
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