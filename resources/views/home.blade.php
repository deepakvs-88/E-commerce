<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-commerce</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body>
    @include('header')
    @yield('content')
</body>
<style>
    .trending-image {
        height: 100px;
    }

    .trending-item {
        float: left;
        width: 20%;
    }

    .trending-wrap {
        margin: 30px;
    }

    .appliances-wrap {
        margin: 30px;
    }

    .custom-product {
        height: 600px;
    }

    .detail-img {
        height: 300px;
        padding-left: 30px;
    }

    .search-image {
        height: 200px;
    }

    .search-name {
        margin-top: 20px;
    }

    .cart-list {
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }

    .form-group {
        padding-left: 20px;

    }

    .form-group-address {
        width: 100%;
        padding-left: 20px;
    }

    .order-table {
        padding-left: 20px;
    }

    img.slider-img {
        height: 400px !important;
    }

    .custom-login {
        height: 500px;
        padding-top: 50px;
    }

    .slider-text {
        background-color: #35443585 !important;
        width: 600px;
    }

    .search-box {
        width: 500px !important
    }

    .custom-login {
        background-image: url("images/new.jpg");
    }

    .user-form {
        width: 300px;
    }
</style>

</html>