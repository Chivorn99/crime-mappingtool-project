@extends('layout.user')

@section('contents')
<style>
  .background-overlay {
      background-image: url('https://st3.depositphotos.com/1653909/18078/i/450/depositphotos_180781134-stock-photo-crime-scene-with-dramatic-lighting.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      position: relative;
      min-height: 100vh;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
  }

  .background-overlay::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 1;
  }

  .content-container {
      position: relative;
      z-index: 2;
      width: 100%;
      padding: 20px;
      text-align: center;
      color: white;
  }

  .form-container {
      position: relative;
      z-index: 2;
      width: 100%;
      max-width: 600px;
      padding: 20px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .content-wrapper {
      position: relative;
      z-index: 2;
      width: 100%;
      text-align: center;
      color: white;
  }
</style>

<div class="background-overlay">
  <div class="content-container">
    <div class="flex justify-center items-center">
      <div class="col-md-6 p-5 flex-col space-y-8">
        <h1 class="font-italic font-bold text-4xl">CrimeTrack</h1>
        <p class="text-xl">
          CrimeTrack is your premier online resource for tracking and analyzing crime incidents in Cambodia. We understand the complexities of criminal activity and are committed to developing a dynamic real-time crime mapping tool to empower individuals and communities to proactively prevent crime.
          <br><br>
          Our user-friendly interface provides access to comprehensive crime data, interactive maps, and insightful analyses. This empowers users to make informed decisions and develop strategies to mitigate risks and safeguard communities. We continuously update our platform to ensure you have access to the latest information and trends in crime dynamics.
          <br><br>
        </p>
        <p class="text-xl font-bold">Join us in building a safer Cambodia. Explore CrimeTrack today!</p>
      </div>
      <div class="flex justify-center col-md-5 p-0">
        <img src="{{ asset('storage/crime.png') }}" class="img-fluid" alt="CrimeTrack">
      </div>
    </div>
  </div>
</div>

@endsection
