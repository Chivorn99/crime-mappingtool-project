@extends('layout.user')

@section('contents')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</head>
<body>
    <style>
        body {
    background: rgb(224 231 255);
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(30 64 175);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
    </style>
<div class="container bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-7">
                <img class="rounded-circle mt-5" width="150px" src="https://pbs.twimg.com/media/GExdZSKaYAAVrhO?format=jpg&name=medium">
                    <span class="font-weight-bold">{{ $user->name }}</span>
                    <span class="text-black-50">{{ $user->email }}</span>
                    <!-- <button type="button" href="{{ url('userprofileupdate') }}" class="btn btn-primary mt-4 ">Update</button> -->
                    <a href="{{ route('userprofile.edit') }}" class="btn btn-primary mt-4 ">Update</a>

            <!-- <div class="col-md-5">
              <div class="card mb-2"> -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ $user->name }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ $user->email }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ $user->phone ?? 'N/A' }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ $user->address ?? 'N/A' }}
                    </div>
                  </div>
                  <hr>
        

    </div>

    </div>
        </div>
        
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
            <div class="dflex justify-start mb-6">
    <a href="{{ url('overview') }}" class="btn btn-primary mr-9" >Overview</a>
    <a href="{{ url('activity') }}" class="btn btn-primary ">Activity</a>
    </div>
    <hr style="background-color: blue; height: 5px;">
    
            <div class="card-body">
                  <div class="row">
                    <div class="col-12 col-lg-6 col-md-8">
                      <h6 class="mb-2">Last seen at : </h6>
                    </div>
                    <div class="col-12 col-lg-6 col-md-4">
                        Yesterday
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-md-8">
                      <h6 class="mb-2">Sign up at : </h6>
                    </div>
                    <div class="col-12 col-lg-6 col-md-4">
                    2 Year ago
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-md-8">
                      <h6 class="mb-2">Report Activity :</h6>
                    </div>
                    <div class="col-12 col-lg-6 col-md-4">
                    2
                    </div>
                    </div>

                  <hr>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-md-8">
                      <h6 class="mb-4">Report Date : </h6>
                    </div>
                    <div class="col-12 col-lg-6 col-md-4">
                    1st September 2023
                    <br>
                    <br>

                    2nd December 2023
                    </div>
                  </div>
                  <hr class="mb-4">
        

    </div>

                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">View Report</button></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience">
                    <span>New Report</span>
                    <div class="col text-end">
            <a href="{{ url('getalerthome') }}" class="no-underline">
                <span class="border px-3 py-1 add-experience">
                    <i class="fa fa-plus"></i>&nbsp;Report
                </span>
            </a>
        </div>
                    </div><br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>



@endsection
