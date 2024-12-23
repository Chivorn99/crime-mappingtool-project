@extends('layout.master')

@section('content')
   <div class="aboutUs">
     <div class="flex items-center">
        <div class="col-md-6 p-5 flex-col space-y-8">
          <h1 class="font-italic font-bold text-4xl">CrimeTrack</h1>
          <p class=" text-xl">CrimeTrack is your premier online resource for tracking and analyzing crime incidents in Cambodia. We understand the complexities of criminal activity and are committed to developing a dynamic real-time crime mapping tool to empower individuals and communities to proactively prevent crime. <br><br>

Our user-friendly interface provides access to comprehensive crime data, interactive maps, and insightful analyses. This empowers users to make informed decisions and develop strategies to mitigate risks and safeguard communities. We continuously update our platform to ensure you have access to the latest information and trends in crime dynamics. <br><br></p>

<p class="text-xl font-bold">Join us in building a safer Cambodia. Explore CrimeTrack today!</p>
        </div>
        <div class="col-md-6 p-0">
          <img src="{{ asset('storage/crime.png') }}" class="img-fluid" alt="CrimeTrack">
        </div>
      </div>
   </div>
@endsection
