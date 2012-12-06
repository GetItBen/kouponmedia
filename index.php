<!DOCTYPE html>
<html>
  <head>
    <title>Koupon Media</title>
    
    <link rel="stylesheet" type="text/css" href="css/reset.css"  />
    <link rel="stylesheet" type="text/css" href="css/style.css"  />
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>
    
      $(document).ready(function() {
        
        
        /* SCHEDULE */
        $('.scheduleDemo').click(function() {
          $('div#header').animate({top: 90},{duration:300});
          $('div#schedule').animate({top: 0},{duration:300});
        });
        
        $('img.scheduleClose').click(function() {
          $('div#header').animate({top: 0},{duration:300});
          $('div#schedule').animate({top: -90},{duration:300});
        });
        
        
        /* SLIDER */
        $('div.slider li.on').show();
        $('div.slider li.on img.slide_img').css('right','0px').css('opacity','1');
        $('div.slider li.on div.text').show();
        
        function slider(direc) {
          
          
          
          var last    = $('div.slider li').last().attr('id');
          var first   = $('div.slider li').first().attr('id');
          
          var current   = $("#"+$('div.slider li.on').attr('id'));
          var img     = current.children().children('img.slide_img');
          var text    = current.children().children('div.text');
          
          
          if (direc == 'next') {
            if(last == current.attr('id')) {
              var next    = $("#"+first);
            } else {
              var next    = $('#'+current.next().attr('id'));
            }
          } else if (direc == 'prev') {
            if(first == current.attr('id')) {
              var next    = $("#"+last);
            } else {
              var next    = $('#'+current.prev().attr('id'));
            }
          } else {
            if(last == current.attr('id')) {
              var next    = $("#"+first);
            } else {
              var next    = $('#'+current.next().attr('id'));
            }
          }
          
          
          var nextimg   = next.children().children('img.slide_img');
          var nexttext  = next.children().children('div.text');
          
          img.animate(
            { right: -20, opacity: 0},{
              duration:400
            });
            
          text.fadeOut(400, function() { 
          
              current.fadeOut(); //img.fadeOut();
              next.fadeIn();
              next.fadeIn(400, function() {
                //nextimg.fadeIn();
                nextimg.animate({right: 0, opacity:1},{duration:400});
                nexttext.fadeIn();
                current.fadeOut();
              });
          
          }); 
          
          
          next.addClass('on');
          current.removeClass('on');
        
        }
        
        function reset() {
          clearInterval(autoSlider);
          //setTimeout(function() {
          //    var autoSlider = setInterval(slider, 10000);
          //  }, 5000);
        }
        
        $('div.right').click(function() {
          slider('next');
          reset();
        });
        
        $('div.left').click(function() {
          slider('prev');
          reset();
        });
      
        var autoSlider = setInterval(slider, 10000);
      });
    
    </script>
  
  </head>
  <body id="home">
    <div id="schedule">
      <div class="inner">
        <span>Schedule a Demo</span>
        <div class="scheduleform">
          <form action="" method="post">
            <div class="line"></div>
            <input type="text" name="name" id="name" placeholder="Your Name" />
            <input type="text" name="company" id="company" placeholder="Company" />
            <input type="text" name="email" id="email" placeholder="Email address" />
            <input type="submit" name="submit" id="submit" value="Submit" />
            <img src="images/icon-scheduleClose.png" alt="Close" class="scheduleClose" />
          </form>
        </div>
      </div>
    <!-- schedule -->
    </div>
    <div id="header">
      <div class="inner">
        <h1><a href="index.php" title="Koupon Media">Koupon Media</a></h1>
        
        <div id="nav">
          <ul>
            <li><a href="retailers.html" title="Retailers">Retailers</a></li>
            <li><a href="brands.html" title="Brands">Brands</a></li>
            <li><a href="partners.html" title="Partners">Partners</a></li>
            <li><a title="Schedule a Demo" class="icon scheduleDemo">Schedule a Demo</a></li>
            <li><a href="http://portal.kouponmedia.com/" title="Sign In" class="icon">Sign In</a></li>
          </ul>
        </div>
        
      <!-- header inner --> 
      </div>
    <!-- header -->
    </div>
    
    <div id="main">
      
      <div class="slider">
        <ul>
          <li id="1" class="on" style="background: url('images/slider/slide1.png') center no-repeat;">
            <div class="slider_inner">
              <div class="text">
                <h1>Brand Solutions:</h1>
                <h2>Create, Distribute, & Measure Mobile Coupons</h2>
                <div class="slide_div"></div>
                <p>
                Reach millions of consumers through Koupon Media's digital coupon network.
                <br />
                <a class="scheduleDemo">Schedule a Demo</a>
                </p>
              </div>
              <img class="slide_img" src="images/slider/img3.png" />            
            </div>
          </li>
          
          <li id="2"  class="" style="background: url('images/slider/slide2.png') center no-repeat;">
            <div class="slider_inner">
              <div class="text">
                <h1>Retail Solutions:</h1> 
                <h2>Deliver & Redeem Digital Coupons 
                <br />& Offers Today.</h2>
                <div class="slide_div"></div>
                <p>
                Koupon Media's offer management platform can be tailored to meet your needs.
                <br />
                <a class="scheduleDemo">Schedule a Demo</a>
                </p>
              </div>
              <img class="slide_img" src="images/slider/img2.png" />
            </div>
          </li>
          
          <li id="3"  class="" style="background: url('images/slider/slide3.png') center no-repeat;">
            <div class="slider_inner">
              <div class="text">
                <h1>Digital Campaign Management</h1>
                <div class="slide_div"></div>
                <p>
                We provide a centralized platform to distribute and measure promotions through multiple channels.
                <br />
                <a class="scheduleDemo">Schedule a Demo</a>
                </p>
              </div>
              <img class="slide_img" src="images/slider/img1.png" />
            </div>
          </li>
                    
        </ul>
        <div class="control">
          <div class="control_inner">
            <div class="left"></div>
            <div class="right"></div>
          </div>
        </div>
        
       <!-- slide -->
       </div>
      
       <div class="overlay">
        <div class="slide_div"></div>
        <div class="logos">
          <img src="images/logos-711.png" alt="7/11" />
          <img src="images/logos-michaels.png" alt="Michaels" />
          <img src="images/logos-pepsi.png" alt="Pepsi" />
        </div>
       <!-- overlay --> 
       </div>
      
    <!-- main -->
    </div>
    
    <div id="footer">
    
      <div class="inner">
        <ul>
          <li><a href="career.html" title="Careers">Careers</a></li>
          <li><a href="company.html" title="Our Company">Our Company</a></li>
          <li><a href="contact.html" title="Contact">Contact</a></li>
          <!--<li><a href="#" title="New">News</a></li>
          <li><a href="#" title="Developer Center">Developer Center</a></li>-->
        </ul>
        <span>iPhone 
          and iMac are trademarks of Apple Inc.<br />  HTC One X is a trademark of HTC Corporation.</span>
        <p>&copy; 2012-2013 Koupon Media, Inc. All Rights Reserved</p>
      </div>
      
    <!-- footer -->
    </div>
    
    
  </body>
</html>
