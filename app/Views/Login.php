<?php
include "header.php";
?>
<link rel="stylesheet" type="text/css" href="sass/login.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.0/angular.js"></script>
<script src="angular/controllers/header.controller.js"></script>
<meta charset="UTF-8">
<title>Login</title>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<body>
<div ng-app="myProject" ng-controller="header_controller">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 welcome-div">
                <div class="welcome">
                    <p class="title-page">Welcome Back!</p>
                    <p>Connect with us please login with your personal info ( :</p>
                </div>
            </div>
            <div class="col-md-6 form-date">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">E-mail address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <p class="div-or">or</p>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-dark">Sign in with Facebook</button>
                            <button type="button" class="btn btn-dark">Sign in with Gmail</button>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-first">SIGN IN</button>
                    <br>
                    <div class="row">
                        <div class="col-md-12 link-singup">
                            <a href="">You not have account? Sign up here!</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
