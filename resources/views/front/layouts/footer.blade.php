<div class="container-fluid">
  <div class="row" style="margin-top: 15px;background-color:#363839;padding-top: 15px;color: #ABABAB;font-family:Noto-Sans">
    <div class="col-md-3">
      <h3><span style="border-bottom: 2px solid black;padding: 5px">Our Location</h3>
    <br>
    <p style="color: #BCBEC0">Brgy.Enclaro, Binalbagan, Negros Occidental</p><hr>
    <p style="color: #BCBEC0">Telephone:007-8000</p><hr>
    <p style="color: #BCBEC0">email:CLMMR@gmail.com</p><hr>
    </div>

     <div class="col-md-3">
      <h3><span style="border-bottom: 2px solid black;padding: 5px">Quick Links</h3>
        <br>
    <p><a href="{{Route('appointment')}}"> Get Appointment</a></p><hr>
     <p><a href="{{Route('dr_home')}}"> Doctor</a></p><hr>
    <p><a href="{{Route('contact')}}">Contact</a></p><hr>
    </div>
     <div class="col-md-3">
      <h3><span style="border-bottom: 2px solid black;padding: 5px">Latest News</span></h3><br>
    <div class="w3-card w3-margin-top">
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">
        <img src="{{asset('front/img/emergency.jpg')}}" alt="Emergency Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Successful Surgery</span>
        <span>in the heart</span>
      </li><hr>
      <li class="w3-padding-16">
        <img src="{{asset('front/img/emergency.jpg')}}" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Successful Operation</span>
        <span>in the Lungs</span>
      </li><hr>
      <li class="w3-padding-16">
        <img src="{{asset('front/img/emergency.jpg')}}" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Successful Operation</span>
        <span>for kidney stones</span>
      </li><hr>
      <li class="w3-padding-16">
        <img src="{{asset('front/img/emergency.jpg')}}" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Successful Operation</span>
        <span>in Eyes</span>
      </li><hr>

    </ul>
  </div>
    </div>
    <div class="col-md-3">
    <h2>Facebook Page</h2>
  <!-- <iframe src="{{asset('front/img/logo.png')}}"
scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:100%; height:80%; background: white; float:left; " allowTransparency="true">
</iframe> -->

    </div>
  </div>
</div>
<!--last footer-->
<div class="container-fluid">
  <div class="row" style="margin-bottom:5px;padding-top: 8px; background-color: black;">
    <div class="col-md-12">

    <p>
         &copy; Copyright <a href="#">CORAZON LOCSIN MONTELIBANO MEMORIAL REGIONAL HOSPITAL</a>. All Rights Reserved.
        </p>
    </div>

    
  </div>
</div>


<script src="{{asset('front/js/jquery-3.4.1.slim.min.js')}}" ></script>
<script src="{{asset('front/js/popper.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>

</body>
</html>
