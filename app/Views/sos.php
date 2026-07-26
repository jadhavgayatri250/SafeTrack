<!DOCTYPE html>
<html>
<head>
    <title>Send SOS | SafeTrack</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f4f6f9;
        }

        .card{
            border:none;
            border-radius:20px;
            box-shadow:0 10px 25px rgba(0,0,0,.1);
        }

        .sos-btn{
            width:180px;
            height:180px;
            border-radius:50%;
            font-size:35px;
            font-weight:bold;
        }

    </style>

</head>

<body>

<div class="container mt-5">

<div class="card p-5 text-center">

<h2 class="text-danger mb-4">
Emergency SOS
</h2>

<h5>Current Location</h5>

<p id="location">
Detecting Location...
</p>

<input type="hidden" id="latitude">
<input type="hidden" id="longitude">
<input type="hidden" id="pincode">

<button class="btn btn-danger sos-btn mt-4"
onclick="sendSOS()">
SOS
</button>

<br><br>

<a href="/dashboard" class="btn btn-secondary">
Back to Dashboard
</a>

</div>

</div>

<script>

let latitude="";
let longitude="";
let pincode="";

if(navigator.geolocation){

navigator.geolocation.getCurrentPosition(function(position){

latitude=position.coords.latitude;
longitude=position.coords.longitude;

document.getElementById("latitude").value=latitude;
document.getElementById("longitude").value=longitude;

fetch("https://nominatim.openstreetmap.org/reverse?format=json&lat="+latitude+"&lon="+longitude)

.then(response=>response.json())

.then(data=>{

pincode=data.address.postcode || "";

document.getElementById("pincode").value=pincode;

document.getElementById("location").innerHTML=
"Latitude : "+latitude+
"<br>Longitude : "+longitude+
"<br>Pincode : "+pincode;

})

.catch(()=>{

document.getElementById("location").innerHTML=
"Latitude : "+latitude+
"<br>Longitude : "+longitude+
"<br>Pincode : Not Found";

});

},function(){

alert("Please Allow Location Permission");

});

}

function sendSOS(){

if(latitude=="" || longitude==""){

alert("Location not found");
return;

}

pincode=document.getElementById("pincode").value;


if(pincode==""){

alert("Pincode not detected. Please wait a few seconds and try again.");
return;

}

fetch("/sos/save",{

method:"POST",

headers:{
"Content-Type":"application/x-www-form-urlencoded"
},

body:
"latitude="+encodeURIComponent(latitude)+
"&longitude="+encodeURIComponent(longitude)+
"&pincode="+encodeURIComponent(pincode)

})

.then(response=>response.json())

.then(data=>{

alert(data.message);

});

}

</script>

</body>
</html>