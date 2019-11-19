<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Detalle del servicio</title>
  <link rel="stylesheet" href="detalles-anuncio.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
  <div class="todo">
    <div>
      <div class="card" style="width: 18rem;">
        <img class="card-img-top myimg" src="9.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="carousel">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 imgc" src="6.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 imgc" src="7.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 imgc" src="8.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  
    <div class="map-comments">
      <div id="map">
        <script>
          function iniciarMap() {
            var coord = { lat: -34.5956145, lng: -58.44319449 };
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 10,
              center: coord
            });
            var marker = new google.maps.Marker({
              position: coord,
              map: map
            });
          }
        </script>
        <script
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap">
        </script>
      </div>
      <div class="comments">
        <div class="comment_block">
          <div class="create_new_comment">
            <div class="user_avatar">
              <img src="https://s3.amazonaws.com/uifaces/faces/twitter/BillSKenney/73.jpg">
            </div><!-- the input field --><div class="input_comment">
            <input type="text" placeholder="Join the conversation..">
           </div>
          </div>
         <!-- new comment -->
         <div class="new_comment">
    
          <!-- build comment -->
           <ul class="user_comment">
    
             <!-- current #{user} avatar -->
             <div class="user_avatar">
               <img src="https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/73.jpg">
             </div><!-- the comment body --><div class="comment_body">
               <p>Gastropub cardigan jean shorts, kogi Godard PBR&B lo-fi locavore. Organic chillwave vinyl Neutra. Bushwick Helvetica cred freegan, crucifix Godard craft beer deep v mixtape cornhole Truffaut master cleanse pour-over Odd Future beard. Portland polaroid iPhone.</p>
             </div>
    
             <!-- comments toolbar -->
             <div class="comment_toolbar">
    
               <!-- inc. date and time -->
               <div class="comment_details">
                 <ul>
                   <li><i class="fa fa-clock-o"></i> 13:94</li>
                   <li><i class="fa fa-calendar"></i> 04/01/2015</li>
                   <li><i class="fa fa-pencil"></i> <span class="user">John Smith</span></li>
                 </ul>
               </div><!-- inc. share/reply and love --><div class="comment_tools">
                 <ul>
                   <li><i class="fa fa-share-alt"></i></li>
                   <li><i class="fa fa-reply"></i></li>
                   <li><i class="fa fa-heart love"></i></li>
                 </ul>
               </div>
    
             </div>
    
             <!-- start user replies -->
           <li>
             
             <!-- current #{user} avatar -->
             <div class="user_avatar">
               <img src="https://s3.amazonaws.com/uifaces/faces/twitter/manugamero/73.jpg">
             </div><!-- the comment body --><div class="comment_body">
               <p><div class="replied_to"><p><span class="user">John Smith:</span>Gastropub cardigan jean shorts, kogi Godard PBR&B lo-fi locavore. Organic chillwave vinyl Neutra. Bushwick Helvetica cred freegan, crucifix Godard craft beer deep v mixtape cornhole Truffaut master cleanse pour-over Odd Future beard. Portland polaroid iPhone.</p></div>That's exactly what I was thinking!</p>
             </div>
    
             <!-- comments toolbar -->
             <div class="comment_toolbar">
    
               <!-- inc. date and time -->
               <div class="comment_details">
                 <ul>
                   <li><i class="fa fa-clock-o"></i> 14:52</li>
                   <li><i class="fa fa-calendar"></i> 04/01/2015</li>
                   <li><i class="fa fa-pencil"></i> <span class="user">Andrew Johnson</span></li>
                 </ul>
               </div><!-- inc. share/reply and love --><div class="comment_tools">
                 <ul>
                   <li><i class="fa fa-share-alt"></i></li>
                   <li><i class="fa fa-reply"></i></li>
                   <li><i class="fa fa-heart love"><span class="love_amt"> 4</span></i></li>
                 </ul>
               </div>
    
             </div>
    
    
           </li>
    
             <!-- start user replies -->
           <li>
             
             <!-- current #{user} avatar -->
             <div class="user_avatar">
               <img src="https://s3.amazonaws.com/uifaces/faces/twitter/ManikRathee/73.jpg">
             </div><!-- the comment body --><div class="comment_body">
               <p><div class="replied_to"><p><span class="user">John Smith:</span>Gastropub cardigan jean shorts, kogi Godard PBR&B lo-fi locavore. Organic chillwave vinyl Neutra. Bushwick Helvetica cred freegan, crucifix Godard craft beer deep v mixtape cornhole Truffaut master cleanse pour-over Odd Future beard. Portland polaroid iPhone.</p></div>Finally someone who actually gets it!<div class="replied_to"><p><span class="user">Andrew Johnson:</span>That's exactly what I was thinking!</p></div>That's awesome!</p>
             </div>
    
             <!-- comments toolbar -->
             <div class="comment_toolbar">
    
               <!-- inc. date and time -->
               <div class="comment_details">
                 <ul>
                   <li><i class="fa fa-clock-o"></i> 14:59</li>
                   <li><i class="fa fa-calendar"></i> 04/01/2015</li>
                   <li><i class="fa fa-pencil"></i> <span class="user">Simon Gregor</span></li>
                 </ul>
               </div><!-- inc. share/reply and love --><div class="comment_tools">
                 <ul>
                   <li><i class="fa fa-share-alt"></i></li>
                   <li><i class="fa fa-reply"></i></li>
                   <li><i class="fa fa-heart love"><span class="love_amt"> 4039</span></i></li>
                 </ul>
               </div>
    
             </div>
    
    
           </li>
    
           </ul>
    
         </div>
    
    <!-- new comment -->
         <div class="new_comment">
    
          <!-- build comment -->
           <ul class="user_comment">
    
             <!-- current #{user} avatar -->
             <div class="user_avatar">
               <img src="https://s3.amazonaws.com/uifaces/faces/twitter/kfriedson/73.jpg">
             </div><!-- the comment body --><div class="comment_body">
               <p>Gastropub cardigan jean shorts, kogi Godard PBR&B lo-fi locavore. Organic chillwave vinyl Neutra. Bushwick Helvetica cred freegan, crucifix Godard craft beer deep v mixtape cornhole Truffaut master cleanse pour-over Odd Future beard. Portland polaroid iPhone.</p>
             </div>
    
             <!-- comments toolbar -->
             <div class="comment_toolbar">
    
               <!-- inc. date and time -->
               <div class="comment_details">
                 <ul>
                   <li><i class="fa fa-clock-o"></i> 13:94</li>
                   <li><i class="fa fa-calendar"></i> 04/01/2015</li>
                   <li><i class="fa fa-pencil"></i> <span class="user">Sarah Walkman</span></li>
                 </ul>
               </div><!-- inc. share/reply and love --><div class="comment_tools">
                 <ul>
                   <li><i class="fa fa-share-alt"></i></li>
                   <li><i class="fa fa-reply"></i></li>
                   <li><i class="fa fa-heart love"></i></li>
                 </ul>
               </div>
    
             </div>
    
             <!-- start user replies -->
           <li>
             
             <!-- current #{user} avatar -->
             <div class="user_avatar">
               <img src="https://s3.amazonaws.com/uifaces/faces/twitter/cbillins/73.jpg">
             </div><!-- the comment body --><div class="comment_body">
               <p><div class="replied_to"><p><span class="user">Sarah Walkman:</span>Pork belly migas flexitarian messenger bag Brooklyn gluten-free. Tilde kitsch skateboard Helvetica, lumbersexual four loko direct trade pour-over. Cronut deep v keffiyeh cornhole food truck</p></div>I'm tired, does anybody know a good place to buy extra strength coffee?</p>
             </div>
    
             <!-- comments toolbar -->
             <div class="comment_toolbar">
    
               <!-- inc. date and time -->
               <div class="comment_details">
                 <ul>
                   <li><i class="fa fa-clock-o"></i> 19:23</li>
                   <li><i class="fa fa-calendar"></i> 14/01/2015</li>
                   <li><i class="fa fa-pencil"></i> <span class="user">Blake Anderson</span></li>
                 </ul>
               </div><!-- inc. share/reply and love --><div class="comment_tools">
                 <ul>
                   <li><i class="fa fa-share-alt"></i></li>
                   <li><i class="fa fa-reply"></i></li>
                   <li><i class="fa fa-heart love"><span class="love_amt"> 12</span></i></li>
                 </ul>
               </div>
    
             </div>
    
    
           </li>
    
           </ul>
    
         </div>
    
        </div>
      </div>
    </div>
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>