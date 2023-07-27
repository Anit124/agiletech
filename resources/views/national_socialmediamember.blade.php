<style>
.how-section1{
    margin-top:-15%;
    padding: 10%;
}
.how-section1 h4{
    color: #ffa500;
    font-weight: bold;
    font-size: 30px;
}

.how-section1 .row
{
    margin-top: 10%;
}
.how-img 
{
    text-align: center;
}
.how-img img{
   border-radius:10px;
}
</style>



@extends('inner_header')
@section('index')


<div class="how-section1">
        <div class="row">
            <div class="col-md-6 how-img">
                <img src="img/rahul.jpg" class=" img-fluid" alt="">
            </div>
        <div class="col-md-6">
                <h4 style="color: black; font-family: cursive;">The OBC Morcha Social Media Team is led by Dynamic leader</h4>
                <h4>Shri. Rahul Nagar</h4>
                <p class="text-muted">Our Team is a strong reflection of PM Narendra Modi’s vision of Nav Bharat.</p>
        </div>
            </div>
                    
</div>


<br>
 <div class="container">
        <div class="row">
            <div class="col-md-3">
            <img src="img/31.jpg" class=" img-fluid" alt="">
            </div>
            <div class="col-md-3">
            <img src="img/32.jpg" class=" img-fluid" alt="">
            </div>
            <div class="col-md-3">
            <img src="img/33.jpg" class=" img-fluid" alt="">
            </div>
            <div class="col-md-3">
            <img src="img/34.jpg" class=" img-fluid" alt="">
            </div>
        </div> 
</div> 
   <br>    

@endsection