@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
     <div class="col-3 p-5">
        <img src="/img/profile-photo.jpg" class="w-100 rounded-circle">     
     </div>
         <div class="col-9 p-5">
            <div class="d-flex align-items:center pb-4"> 
               <h1>{{ $user -> username}}</h1> 
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>127k</strong> post</div>
                <div class="pr-5"><strong>24K</strong> followers</div>            
                <div class="pr-5"><strong>300</strong> following</div>
            </div>
               <div class="pt-4 font-weight-bold">
                  Developer Mode
               </div>
               <div> This is sample description</div>
               <div><a href="https://github.com/Ran05">Developer Mode</div>
         </div>
            <div class="row">
               <div class="col-4">
                     <img src="/img/post1.jpg" class=w-100>
               </div>
               <div class="col-4">
                     <img src="img/post2.jpg" class=w-100>
               </div>
               <div class="col-4">
                     <img src="img/post3.jpg" class=w-100>
               </div>
            </div>
  </div>
</div>
@endsection
