<?php
	session_start();
?>
<!DOCTYPE html>
    
<head>
    <link rel="stylesheet" type="text/css" href="suppliergrid.css">
    <link rel="stylesheet" type="text/css" href="slide.css">
    <link rel="stylesheet" type="text/css" href="calc1.css">

    <script type="text/javascript" src="calculator.js"></script>
</head> 

<body>

    <div id="grid">
        
        <header class="header">
        
            <a href="supplier_grid.html"><img class="img-responsive" src="../newdeal/images/FundraisingATM120519white.png" alt="FUNDlogo" class="img-responsive" style="margin-left: 15px;"></img></a>
            
            <!-- NAVIGATION --> 
            <nav class="categories">
              <ul class="menu">
                <li>
                  <!-- First Tier Drop Down -->
                  <label for="drop-2" class="toggle" >Mall Store</label>
                  <a href="#" style="color:white; background-color:#cc0000">Mall Store</a>
                  <input type="checkbox" id="drop-2"/>
                  <ul>
                    <li><a href="#">Women</a>
                      <ul>
                          <li><a href="#">HTML/CSS</a></li>
                          <li><a href="#">jQuery</a></li>
                          <li><a href="#">Other</a></li>
                      </ul>
                    
                    
                    </li>
                    <li><a href="#">Accessories</a></li>
                    <li>
                      <!-- Second Tier Drop Down -->        
                      <label for="drop-3" class="toggle">Men</label>
                      <a href="#">Tutorials</a>         
                      <input type="checkbox" id="drop-3"/>

                      <ul>
                          <li><a href="#">HTML/CSS</a></li>
                          <li><a href="#">jQuery</a></li>
                          <li><a href="#">Other</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Juniors</a></li>
                    <li><a href="#">Kids</a></li>
                    <li><a href="#">Fitness</a></li>
                    <li><a href="#">Gifts</a></li>
                    <li><a href="#">Entertainment</a></li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Health</a></li>
                    <li><a href="#">Inspirational</a></li>
                    <li><a href="#">Holiday</a></li>
                    <li><a href="#">Business</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
            
            <a href="#FundraisingProgram" class="categories">
                <span style="font-size: 18px;">Fundraising Program</span>
            </a>
            
            <div class="eIGSYk">
			 <form class="searchInput" method="get" action="/s">
				<input type="search" id="search" name="searchTerm" autocorrect="off" autocapitalize="off" autocomplete="off" value="" placeholder="Search" aria-label="Search: suggestions appear below">
			 </form>
			</div>
			
			<a href="#"  id="accountIcon" class="pull-right  hidden-sm hidden-xs" role="button" data-toggle="modal" data-target="#login-modal"><img style="height:50px;" src="../nd/images/log_icon.png" alt="" />Sign In</a>
			
			
        </header>
        <div class="sub-header">
        
            <div class="fundex"> Fundraiser Examples </div>
            
        </div>

        <div class="tab">
          <button class="tablinks active" onClick="openCity(event, 'Welcome')" id="defaultOpen">Welcome</button>
          <button class="tablinks" onClick="openCity(event, 'FundraisingATMs Program Overview')">FundraisingATMs Program Overview</button>
          <button class="tablinks" onClick="openCity(event, 'FundraisingATM Mission')">FundraisingATM Mission</button>
            <button class="tablinks" onClick="openCity(event, 'Fundraising for the Future')">Fundraising for the Future</button>
            <button class="tablinks" onClick="openCity(event, 'Delivery for the Future')">Delivery for the Future</button>

            <button class="tablinks" onClick="openCity(event, 'Supplier Expectations')">Supplier Expectations</button>

            <button class="tablinks" onClick="openCity(event, 'What You Can Expect From Us')">What You Can Expect from Us</button>
            <button class="tablinks" onClick="openCity(event,'Why Your Company Is the Perfect Fit')">Why Your Company Is the Perfect Fit</button>
            <button class="tablinks" onClick="openCity(event, 'How it Works/Getting Started')">How It Works/ Getting Started</button>
            <button class="tablinks" onClick="openCity(event,'Prospect Opportunities')">Prospect Opportunities</button>
            <button class="tablinks" onClick="openCity(event, 'Calculate Your Success')">Calculate Your Success</button>
            <button class="tablinks" onClick="openCity(event,'Contact Us')">Contact Us</button>
            <button class="tablinks" onclick="openCity(event,'Sign Up')">Sign Up</button>
        </div>

<div id="Welcome" class="tabcontent">
  <h3 align="center">Welcome to FundraisingATM!</h3>
  
  <p>
In today’s world we see people spending a large portion
of their days on the internet, because of easily accessibility to smart phones and tablets
for people to on the go during a busy day. We also live in a social media culture which
gives people more of a reason to be checking the internet frequently.
</p><p></p>
<p></p>
At FundraisingATM we are changing the way fundraising is done by building around
those needs of consumers, and making it as convenient as possible for the fundraisers, the
customers, and the suppliers!
<p></p>
<p></p>
We are looking for Suppliers that are dependable with their inventory on best sellers, that
always have those items in stock, and would like to increase their market by selling on
FundraisingATM’s online store that will be offered nationwide to schools and
organizations to sell for their fundraisers.
<p></p>
<p></p>
The FundraisingATM online store has a large range of categories that will be offered to
these customers, and we are looking for suppliers that would like to be a part of various
categories we offer to our customers.
<p></p>
<p></p>
Cash will be deposited every week into your account on every individual sale. We add an
additional 35 % markup to go towards the fundraiser of that group. Products being sold
for FundraisingATM not only helps open up another market for your company but also
helps fundraisers reach their goals with your quality products.
<p></p>
<p></p>
<p>
We would love to work with you on being a supplier for FundraisingATM. This website
is tailored to answer any questions you may have about the company and the process of
how things work. We would love to assist with any other questions you may have that
were left unanswered. Please contact us with questions and we can answer them and/or
help you get set up!</p>
<br><br>
<div id="vid">
<video width="800" controls >
    <source src="https://www.youtube.com/embed/watch?v=V3jN_6lHW0U" type="video/mov">
</video>

</div>   
    
    
    
    
    
</div>
    


<div id="FundraisingATMs Program Overview" class="tabcontent" style="display: none;">
  <h3 align="center">FundraisingATMs Program Overview</h3>
<br>
  <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1</div>
  <img src="images/presentation/1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2</div>
  <img src="images/presentation/2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3</div>
  <img src="images/presentation/3.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">4</div>
  <img src="../images/presentation/gm_presentation6-4.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">5</div>
  <img src="../images/presentation/gm_presentation6-5.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">6</div>
  <img src="../images/presentation/gm_presentation6-6.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">7</div>
  <img src="../images/presentation/gm_presentation6-7.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">8</div>
  <img src="../images/presentation/6-8.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">9</div>
  <img src="../images/presentation/gm_presentation6-9.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">10</div>
  <img src="../images/presentation/6-10.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">11</div>
  <img src="../images/presentation/gm_presentation6-11.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">12</div>
  <img src="../images/presentation/6-12.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">13</div>
  <img src="../images/presentation/gm_presentation6-13.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">14</div>
  <img src="../images/presentation/gm_presentation6-14.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">15</div>
  <img src="../images/presentation/6-15.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">16</div>
  <img src="../images/presentation/gm_presentation6-16.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">17</div>
  <img src="../images/presentation/gm_presentation6-17.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">18</div>
  <img src="../images/presentation/gm_presentation6-18.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">19</div>
  <img src="../images/presentation/gm_presentation6-19.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">20</div>
  <img src="../images/presentation/gm_presentation6-20.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">21</div>
  <img src="../images/presentation/gm_presentation6-21.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">22</div>
  <img src="../images/presentation/gm_presentation6-22.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">23</div>
  <img src="../images/presentation/gm_presentation6-23.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">24</div>
  <img src="../images/presentation/gm_presentation6-24.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">25</div>
  <img src="../images/presentation/gm_presentation6-25.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">26</div>
  <img src="../images/presentation/gm_presentation6-26.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">27</div>
  <img src="../images/presentation/gm_presentation6-27.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">28</div>
  <img src="../images/presentation/gm_presentation6-28.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">29</div>
  <img src="../images/presentation/gm_presentation6-29.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">30</div>
  <img src="../images/presentation/gm_presentation6-30.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">31</div>
  <img src="../images/presentation/gm_presentation6-31.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">32</div>
  <img src="../images/presentation/gm_presentation6-32.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">33</div>
  <img src="../images/presentation/6-33.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">34</div>
  <img src="../images/presentation/6-34.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">35</div>
  <img src="../images/presentation/6-35.jpg" style="width:100%">
</div>
           
      
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)">1</span> 
  <span class="dot" onclick="currentSlide(2)">2</span> 
  <span class="dot" onclick="currentSlide(3)">3</span>
    <span class="dot" onclick="currentSlide(4)">4</span> 
  <span class="dot" onclick="currentSlide(5)">5</span> 
  <span class="dot" onclick="currentSlide(6)">6</span> 
    <span class="dot" onclick="currentSlide(7)">7</span> 
  <span class="dot" onclick="currentSlide(8)">8</span> 
  <span class="dot" onclick="currentSlide(9)">9</span>
    <span class="dot" onclick="currentSlide(10)">10</span> 
  <span class="dot" onclick="currentSlide(11)">11</span> 
  <span class="dot" onclick="currentSlide(12)">12</span>
    <span class="dot" onclick="currentSlide(13)">13</span> 
  <span class="dot" onclick="currentSlide(14)">14</span> 
  <span class="dot" onclick="currentSlide(15)">15</span> 
    <span class="dot" onclick="currentSlide(16)">16</span> 
  <span class="dot" onclick="currentSlide(17)">17</span> 
  <span class="dot" onclick="currentSlide(18)">18</span>
    <span class="dot" onclick="currentSlide(19)">19</span> 
  <span class="dot" onclick="currentSlide(20)">20</span> 
  <span class="dot" onclick="currentSlide(21)">21</span>
    <span class="dot" onclick="currentSlide(22)">22</span> 
  <span class="dot" onclick="currentSlide(23)">23</span> 
  <span class="dot" onclick="currentSlide(24)">24</span> 
    <span class="dot" onclick="currentSlide(25)">25</span> 
  <span class="dot" onclick="currentSlide(26)">26</span> 
  <span class="dot" onclick="currentSlide(27)">27</span>
    <span class="dot" onclick="currentSlide(28)">28</span> 
  <span class="dot" onclick="currentSlide(29)">29</span>
    <span class="dot" onclick="currentSlide(30)">30</span> 
  <span class="dot" onclick="currentSlide(31)">31</span> 
  <span class="dot" onclick="currentSlide(32)">32</span>
    <span class="dot" onclick="currentSlide(33)">33</span> 
  <span class="dot" onclick="currentSlide(34)">34</span> 
  <span class="dot" onclick="currentSlide(35)">35</span> 
    
    
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
    
</div>

<div id="FundraisingATM Mission" class="tabcontent" style="display: none;">

  <h3 align="center">Achieving Success for Your Goals!</h3>
<p style="text-decoration: underline; font-size: 25px;">
    <b>Purpose</b>
    </p>
    <b>Be Kind</b> – to those in need of help
<p></p>
    <b>Do Good</b> – for Individuals, Groups, Organizations and Communities
<p></p>
<p>
    <b>Achieve Happiness and Success</b> – for every Goal, Vision, Dream or Mission</p>
</div>
    
<div id="Fundraising for the Future" class="tabcontent" style="display: block;">
<h3 align="center">Fundraising for the Future</h3>
<p>You can see in today’s age that the majority of industries are shifting towards having a
strong online presence, and one of the biggest reasons is it’s simply more convenient for
customers to have the business online. E-commerce is needed for almost any business
and industry to be successful, and to continue to grow, which is why it shouldn’t be any
different when it comes to fundraising.</p>
<p></p>
<p>Rather than going from door to door or handing out a catalog to every potential donator
we will have everything available on an online storefront at fundraisingATM.com. Sales
reps will be hired to connect with any school, organization, club, church, and group
nationwide to sign up as an account with Fundraising ATM to raise money for their
fundraisers through selling your products.</p>
<p></p>
<p>With average amount of time people spend on laptops, smartphones, and smart devices
increasing every year will be easily accessible to almost everyone. Fundraising this way
will make it more efficient for fundraisers to reach their goals, and for a larger volume of
products being purchased for your company. The future of fundraising has large potential
and success for you as a supplier.</p>
<p></p>
</div>

<div id="Delivery for the Future" class="tabcontent" style="display: none;">
    <h3 align="center">Delivery for the Future</h3>
    <p>Drop shipping is essential when it comes to delivery fulfillment with a large number of
    suppliers. Amazon, for example has many small businesses that sell through Amazon but
    must drop ship the products to the customers home. This helps avoid any conflicts with
    inventory and overhead cost. At FundraisingATM this will also be a requirement for
    suppliers to drop ship to the customers home.</p>
    
    <p>For many years now and for the future, drop shipping is very important when it comes to
    online stores and ecommerce. Drop shipping is a great method as long as suppliers are
    able to fulfill the orders with the products being purchased. This may mean to only have
    items that are best sellers and are always kept in stock for FundraisingATM.</p>
        
</div>

<div id="Supplier Expectations" class="tabcontent" style="display: block;">
<h3 align="center">What We Expect from Our Suppliers </h3>      
<p>What we need from our suppliers is dependability on fulfilling the orders from the FundraisingATM store. Export information from our ecommerce database will be sent to you. And then you must notify us when the item is being sent out, so we can update the tracking information for the item the customer has purchased. </p>
<p></p>
<p>Any complications or issues customers have with any products sold by your company will have to be addressed through your customer service. We don’t accept returns so it’s best to be as transparent as possible with us when setting up your products on the website about anything that would result in someone wanting to return an item especially be clear on the size for clothing.</p>
</div>
<div id="Why Your Company Is the Perfect Fit" class="tabcontent" style="display: block;">
<h3 align="center">Why Your Company Is the Perfect Fit</h3>
<p>Our fundraiser contains over 100 different businesses, over 20,000 products, which includes national distribution for all of your products, excellent long-term cash accounts for decades to come and national sales representatives in all 50 states.</p>  
<p>There is a mixture of both personality and skill that create beautiful collaboration between the two of us. Which means you demonstrate skills between us and your company that have the ability to read and adapt to the situation at hand.</p>
<p>You can do the work and deliver exceptional results. You will fit in handsomely and be a great addition to the team. You possess a combination of skills and experience that make you stand out from the crowd.
</p>  
</div>


<div id="What You Can Expect From Us" class="tabcontent" style="display: none;">
    <h3 align="center">What You Can Expect from Us</h3>
    <p>Consistent reliability from our team. Appealing to everyone is our goal; like Schools,
    Churches, Fundraising leaders, Fundraising Members, Professional Reps, Suppliers,
    Universities, and last, but not least; friends and family.</p>
    
</div>
    
    
<div id="How it Works/Getting Started" class="tabcontent" style="display: none;">
    <h3 align="center">How It Works/ Getting Started</h3>
    <p>From door to door sales of cookies and ice cream. To doing everything from the click of
        a mouse in your own home. You don&#39;t even have to get up and answer the door. The best
        way to check your income is to check your bank account, no other steps necessary. Your
        income is given weekly on every order, which goes directly into your own <b><a href="https://www.paypal.com/us/signin" target="_blank" style="color:#cc0000">PayPal</a></b>
        account, every day, 365 days a year.</p>
    
    <a href="Product%20Setup%20Example%202_1%20v1.6.xlsx" download><b>Spreadsheet of Product Setup Template Download</b></a>
    <br><br><br><br>
<div id="vid"> 
<video width="800" controls>
  <source src="FFA%20ATM%20Message%20video%202.0.mov" type="video/mov">
</video>    
</div> 
    
</div>
    
<div id="Prospect Opportunities" class="tabcontent" style="display: block;">
<h3 align="center">Prospect Opportunities</h3>
<p>Prospects become opportunities once they decide to consider your product/service or admit that they are looking for a solution. Ultimately, you want that opportunity to turn into a sale or a loyal customer. A prospect is an organization or potential client who resembles the seller’s ideal customer profile but has not yet expressed interest in their products or services. A qualified lead is an organization or potential client which has expressed interest in the products or services of the seller.
</p>
</div>
    
<div id="Calculate Your Success" class="tabcontent" style="display: none;">
    <h3 align="center">Calculate Your Success</h3>
    <p>Before you begin your calculations, take the time to clearly define what your goals
    mean to you. Once that is done you can calculate your success by using our income
    calculator.
    </p>
    <p>Enter the number of accounts you think you can set up, before entering the number of
    groups in each organization that might participate in the fundraiser. Next, you will want
    to enter the total number of students or members in the organization. Furthermore, enter
    in the percentage of students or members who might participate in the fundraiser.</p>
    <p>Moreover, enter the average number of products and gifts each participant will sell. Now,
    multiply it by $22.75 (Average wholesale price of a product). You will enter the average
    number of fundraisers each account will setup in one year.
    (Most accounts will do 3 to 5 fundraising opportunities in a year with our program.)
        Lastly, multiplied by your commission percentage — <b style="color:#cc0000">6%</b> and you have successfully
    calculated your success.</p>

<div>
    <table class="calculatorTable" width="100%" border="0" cellspacing="0" cellpadding="3" summary="Calculator for a school fundraiser showing math and total commission">
        <tr>
          <th class="calcCategoryHead">Schools</th>
          <th>Number of<br>Schools</th>
          <th scope="col">&nbsp;</th>
          <th>Number of<br>Clubs, Teams<br>and Groups</th>
          <th scope="col">&nbsp;</th>
          <th>Number of <br>Students</th>
          <th scope="col">&nbsp;</th>
          <th>Participating <br>Percent of <br>Students (%)</th>
          <th scope="col">&nbsp;</th>
          <th>Products<br>& Gifts<br>Sold Per <br>Participant</th>
          <th scope="col">&nbsp;</th>
          <th>$22.75 Avg. <br>Wholesale <br>Price</th>
          <th scope="col">&nbsp;</th>
          <th>Fundraisers <br>Per Year</th>
          <th scope="col">&nbsp;</th>
          <th>Percent <br>Commission</th>
          <th scope="col">&nbsp;</th>
          <th>Total <br>Commission</th>
        </tr>
        <tr>
          <td class="fl">Large High Schools <br>
            2400+ Students <br>
            (55 Clubs/Teams)</td>
          <td><input type="text" id='LHnum' name"" size="4" onchange='calculateSchool("LH")'/></td>
          <td>x</td>
          <td><input type="text" id='LHfund' name"" size="4" onchange='calculateSchool("LH")'/></td>
          <td>x</td>
          <td><input type="text" id='LHpeople' name"" size="4" onchange='calculateSchool("LH")'/></td>
          <td>x</td>
          <td><input type="text" id='LHpercent' name"" size="4" onchange='calculateSchool("LH")'/>
            </td>
          <td>x</td>
          <td><input type="text" id='LHbaskets' name"" size="4" onchange='calculateSchool("LH")'/></td>
          <td>x</td>
          <td id='LHprice'>$22.75</td>
          <td>x</td>
          <td><input type="text" id='LHnumPerYear' name"" size="3" onchange='calculateSchool("LH")'/></td>
          <td>x</td>
          <td id='commission'>6%</td>
          <td>=</td>
          <td id='LHtotal'></td>
        </tr>
        <tr>
          <td class="fl">Average High Schools <br>
            855+ Students <br>
            (40 Clubs/Teams)</td>
          <td><input type="text" id='AHnum' name"" size="4" onchange='calculateSchool("AH")'/></td>
          <td>x</td>
          <td><input type="text" id='AHfund' name"" size="4" onchange='calculateSchool("AH")'/></td>
          <td>x</td>
          <td><input type="text" id='AHpeople' name"" size="4" onchange='calculateSchool("AH")'/></td>
          <td>x</td>
          <td><input type="text" id='AHpercent' name"" size="4" onchange='calculateSchool("AH")'/></td>
          <td>x</td>
          <td><input type="text" id='AHbaskets' name"" size="4" onchange='calculateSchool("AH")'/></td>
          <td>x</td>
          <td>$22.75</td>
          <td>x</td>
          <td><input type="text" id='AHnumPerYear' name"" size="3" onchange='calculateSchool("AH")'/></td>
          <td>x</td>
          <td id='commission'>6%</td>
          <td>=</td>
          <td id='AHtotal'></td>
        </tr>
        <tr>
          <td class="fl">Large Middle Schools <br>
            1855+ Students <br>
            (40 Clubs/Teams)</td>
          <td><input type="text" id='LMnum' name"" size="4" onchange='calculateSchool("LM")'/></td>
          <td>x</td>
          <td><input type="text" id='LMfund' name"" size="4" onchange='calculateSchool("LM")'/></td>
          <td>x</td>
          <td><input type="text" id='LMpeople' name"" size="4" onchange='calculateSchool("LM")'/></td>
          <td>x</td>
          <td><input type="text" id='LMpercent' name"" size="4" onchange='calculateSchool("LM")'/></td>
          <td>x</td>
          <td><input type="text" id='LMbaskets' name"" size="4" onchange='calculateSchool("LM")'/></td>
          <td>x</td>
          <td id='LMprice'>$22.75</td>
          <td>x</td>
          <td><input type="text" id='LMnumPerYear' name"" size="3" onchange='calculateSchool("LM")'/></td>
          <td>x</td>
          <td id='commission'>6%</td>
          <td>=</td>
          <td id='LMtotal'></td>
        </tr>
        <tr>
          <td class="fl">Avg Middle Schools <br>
            650+ Students <br>
            (40 Clubs/Teams)</td>
          <td><input type="text" id='AMnum' name"" size="4" onchange='calculateSchool("AM")'/></td>
          <td>x</td>
          <td><input type="text" id='AMfund' name"" size="4" onchange='calculateSchool("AM")'/></td>
          <td>x</td>
          <td><input type="text" id='AMpeople' name"" size="4" onchange='calculateSchool("AM")'/></td>
          <td>x</td>
          <td><input type="text" id='AMpercent' name"" size="4" onchange='calculateSchool("AM")'/></td>
          <td>x</td>
          <td><input type="text" id='AMbaskets' name"" size="4" onchange='calculateSchool("AM")'/></td>
          <td>x</td>
          <td id='AMprice'>$22.75</td>
          <td>x</td>
          <td><input type="text" id='AMnumPerYear' name"" size="3" onchange='calculateSchool("AM")'/></td>
          <td>x</td>
          <td id='commission'>6%</td>
          <td>=</td>
          <td id='AMtotal'></td>
        </tr>
        <tr>
          <td class="fl">Elementary Schools<br>
            500+ <br>
            (PTO Others)</td>
          <td><input type="text" id='Enum' name"" size="4" onchange='calculateSchool("E")'/></td>
          <td>x</td>
          <td><input type="text" id='Efund' name"" size="4" onchange='calculateSchool("E")'/></td>
          <td>x</td>
          <td><input type="text" id='Epeople' name"" size="4" onchange='calculateSchool("E")'/></td>
          <td>x</td>
          <td><input type="text" id='Epercent' name"" size="4" onchange='calculateSchool("E")'/></td>
          <td>x</td>
          <td><input type="text" id='Ebaskets' name"" size="4" onchange='calculateSchool("E")'/></td>
          <td>x</td>
          <td id='Eprice'>$22.75</td>
          <td>x</td>
          <td><input type="text" id='EnumPerYear' name"" size="3" onchange='calculateSchool("E")'/></td>
          <td>x</td>
          <td id='commission2'>6%</td>
          <td>=</td>
          <td id='Etotal'></td>
        </tr>
        <tr>
          <td id="total" colspan="15" class="fl">Total Commission From Schools:</td>
          <td colspan="2" class ="fl"><button type="button" onclick="calculateSchool('LH')" class="medredbutton" title="Click to Calculate Your Total Commission">Calculate</button></td>
          <td id='schoolTotal'></td>
        </tr>
      </table>
      <table class="calculatorTable" border="0" cellspacing="0" cellpadding="3" summary="Table shows an example of how the calculator works for a church fundraiser showing math and total commission">
        <tr>
          <th>Churches</th>
          <th>Number of<br>Churches</th>
          <th>&nbsp;</th>
          <th>Number of <br>Ministries, <br>Groups <br>and Events</th>
          <th>&nbsp;</th>
          <th>Number of <br>Members</th>
          <th>&nbsp;</th>
          <th>Participating <br>Percent of <br>Members (%)</th>
          <th>&nbsp;</th>
          <th>Products<br>& Gifts<br>Sold Per <br>Participant</th>
          <th>&nbsp;</th>
          <th>$22.75 Avg. <br>Wholesale <br>Price</th>
          <th>&nbsp;</th>
          <th>Fundraisers <br>Per Year</th>
          <th>&nbsp;</th>
          <th>Percent <br>Commission</th>
          <th>&nbsp;</th>
          <th>Total<br>Commission</th>
        </tr>
        <tr>
          <td class="fl">Large Churches <br>
            1000+ Members<br>(30 Ministries/<br>Groups/Events)</td>
          <td><input type="text" id='LCnum' name"" size="4" onchange='calculateSchool("LC")'/></td>
          <td>x</td>
          <td><input type="text" id='LCfund' name"" size="4" onchange='calculateSchool("LC")'/></td>
          <td>x</td>
          <td><input type="text" id='LCpeople' name"" size="4" onchange='calculateSchool("LC")'/></td>
          <td>x</td>
          <td><input type="text" id='LCpercent' name"" size="4" onchange='calculateSchool("LC")'/></td>
          <td>x</td>
          <td><input type="text" id='LCbaskets' name"" size="4" onchange='calculateSchool("LC")'/></td>
          <td>x</td>
          <td id='LCprice'>$22.75</td>
          <td>x</td>
          <td><input type="text" id='LCnumPerYear' name"" size="3" onchange='calculateSchool("LC")'/></td>
          <td>x</td>
          <td id='commission'>6%</td>
          <td>=</td>
          <td id='LCtotal'>&nbsp;</td>
        </tr>
        <tr>
          <td class="fl">Avg Churches <br>
            100-999 Members<br>(20 Ministries/<br>Groups/Events)</td>
          <td><input type="text" id='ACnum' name"" size="4" onchange='calculateSchool("AC")'/></td>
          <td>x</td>
          <td><input type="text" id='ACfund' name"" size="4" onchange='calculateSchool("AC")'/></td>
          <td>x</td>
          <td><input type="text" id='ACpeople' name"" size="4" onchange='calculateSchool("AC")'/></td>
          <td>x</td>
          <td><input type="text" id='ACpercent' name"" size="4" onchange='calculateSchool("AC")'/></td>
          <td>x</td>
          <td><input type="text" id='ACbaskets' name"" size="4" onchange='calculateSchool("AC")'/></td>
          <td>x</td>
          <td id='ACprice'>$22.75</td>
          <td>x</td>
          <td><input type="text" id='ACnumPerYear' name"" size="3" onchange='calculateSchool("AC")'/></td>
          <td>x</td>
          <td id='commission'>6%</td>
          <td>=</td>
          <td id='ACtotal'>&nbsp;</td>
        </tr>
        <tr>
          <td id="total" colspan="15" class="fl">Total Commission From Churches:</td>
          <td colspan="2" class ="fl"><button type="button" onclick="calculateSchool('A')" class="medredbutton" title="Click to Calculate Your Total Commission">Calculate</button></td>
          <td id='churchTotal'>&nbsp;</td>
        </tr>
      </table>
      <table class="calculatorTable" border="0" cellspacing="0" cellpadding="3" summary="Calculator for a elementary school and organization fundraisers showing math and total commission">
        <tr>
          <th>Organizations</th>
          <th>Number of <br>            Organizations</th>
          <th scope="col">&nbsp;</th>
          <th>Number of <br>            Groups <br>            and Events</th>
          <th scope="col">&nbsp;</th>
          <th>Number of <br>            Members</th>
          <th scope="col">&nbsp;</th>

          <th>Participating <br>Percent of <br>Members (%)</th>
          <th scope="col">&nbsp;</th>
          <th>Products<br>& Gifts<br>Sold Per <br>Participant</th>
          <th scope="col">&nbsp;</th>
          <th>$22.75 Avg. <br>Wholesale <br>Price</th>
          <th scope="col">&nbsp;</th>
          <th>Fundraisers <br>Per Year</th>
          <th scope="col">&nbsp;</th>
          <th>Percent <br>Commission</th>
          <th scope="col">&nbsp;</th>
          <th>Total <br>Commission</th>
        </tr>
        <tr>
          <td class="fl">Organizations</td>
          <td><input type="text" id='Onum' name"" size="4" onchange='calculateSchool("O")'/></td>
          <td>x</td>
          <td><input type="text" id='Ofund' name"" size="4" onchange='calculateSchool("O")'/></td>
          <td>x</td>
          <td><input type="text" id='Opeople' name"" size="4" onchange='calculateSchool("O")'/></td>
          <td>x</td>
          <td><input type="text" id='Opercent' name"" size="4" onchange='calculateSchool("O")'/></td>

          <td>x</td>
          <td><input type="text" id='Obaskets' name"" size="4" onchange='calculateSchool("O")'/></td>
          <td>x</td>
          <td id='Oprice'>$22.75</td>
          <td>x</td>
          <td><input type="text" id='OnumPerYear' name"" size="3" onchange='calculateSchool("O")'/></td>
          <td>x</td>
          <td id='commission2'>6%</td>
          <td>=</td>
          <td id='Ototal'>&nbsp;</td>
        </tr>
        <tr>
          <td id="total" colspan="15" class="fl">Total Commission From Schools and Organizations:</td>
          <td colspan="2" class ="fl"><button type="button" onclick="calculateSchool('O')" class="medredbutton"  title="Click to Calculate Your Total Commission">Calculate</button></td>
          <td id='orgTotal'>&nbsp;</td>
        </tr>
      </table>
      <div id="redBar2">
        <table border="0" cellspacing="0" cellpadding="3" summary="Table shows grand total commissions from schools, churches and organizations">
          <tr>
            <td class="gTotal"><span></span>Total Number of commissions from schools, churches and organizations:</td>
            <td class="grandTotal"><input id="grandTotal" type="text" name="" value="$"></td>
          </tr>
        </table>
          
    </div>
</div>
</div>
    
<div id="Contact Us" class="tabcontent" style="display: block;">
<h3 align="center">Questions? Contact Us, We’d Love to Hear from You!!</h3>  
<p>There is no limit for helping others. That’s why we would love to work with you. Please contact us by replying through email or call us at our number.</p>
<p>Don’t hesitate! -- Let us, help you, achieve your dreams.</p>
</div>

<div id="Sign Up" class="tabcontent" style="display: none;">

      <div class="table" >
          
        <form action="supplierNew.php" method="post">
          <div class="interim-form" style="width: 60%">
              
            <div class="interim-header" style="color:black; text-align: center;"><h2>Sign Up</h2></div>
              <div class="col-lg-7">
                <br>
                <span for="email" style="color:black;">Supplier Name</span>
                <input type="text" class="form-control input-sm" id="suppname" placeholder="" name="sn">
                <br>
              </div>
              <div class="col-lg-7">
                <span for="email" style="color:black;">Phone Number</span>
                <input type="text" class="form-control input-sm" id="suppemail" placeholder="" name="phone">
                <br>
              </div>
              <div class="col-lg-7">
                <span for="email" style="color:black;">Supplier Address</span>
                <input type="text" class="form-control input-sm" id="suppad" placeholder="" name="ad">
                <br>
              </div>
              <div class="col-lg-7">
                <span for="email" style="color:black;">City</span>
                <input type="text" class="form-control input-sm" id="suppad" placeholder="" name="city">
                <br>
              </div>
              <div class="col-lg-4">
                <span for="email" style="color:black;">State</span>
              </div>
              <div class="col-lg-4">
                <select id="state" name="state" style="border-radius: 15px; outline: none;">
                  <option value="" selected="selected">--</option>
                  <option value="AK">Alaska</option>
                  <option value="AL">Alabama</option>
                  <option value="AR">Arkansas</option>
                  <option value="AZ">Arizona</option>
                  <option value="CA">California</option>
                  <option value="CO">Colorado</option>
                  <option value="CT">Connecticut</option>
                  <option value="DC">District of Columbia</option>
                  <option value="DE">Delaware</option>
                  <option value="FL">Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="HI">Hawaii</option>
                  <option value="IA">Iowa</option>
                  <option value="ID">Idaho</option>
                  <option value="IL">Illinois</option>
                  <option value="IN">Indiana</option>
                  <option value="KS">Kansas</option>
                  <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>
                  <option value="MA">Massachusetts</option>
                  <option value="MD">Maryland</option>
                  <option value="ME">Maine</option>
                  <option value="MI">Michigan</option>
                  <option value="MN">Minnesota</option>
                  <option value="MO">Missouri</option>
                  <option value="MS">Mississippi</option>
                  <option value="MT">Montana</option>
                  <option value="NC">North Carolina</option>
                  <option value="ND">North Dakota</option>
                  <option value="NE">Nebraska</option>
                  <option value="NH">New Hampshire</option>
                  <option value="NJ">New Jersey</option>
                  <option value="NM">New Mexico</option>
                  <option value="NV">Nevada</option>
                  <option value="NY">New York</option>
                  <option value="OH">Ohio</option>
                  <option value="OK">Oklahoma</option>
                  <option value="OR">Oregon</option>
                  <option value="PA">Pennsylvania</option>
                  <option value="PR">Puerto Rico</option>
                  <option value="RI">Rhode Island</option>
                  <option value="SC">South Carolina</option>
                  <option value="SD">South Dakota</option>
                  <option value="TN">Tennessee</option>
                  <option value="TX">Texas</option>
                  <option value="UT">Utah</option>
                  <option value="VA">Virginia</option>
                  <option value="VT">Vermont</option>
                  <option value="WA">Washington</option>
                  <option value="WI">Wisconsin</option>
                  <option value="WV">West Virginia</option>
                  <option value="WY">Wyoming</option>
                </select>
                <br>
              </div>
              <br>
              <div class="col-lg-4">
                <span for="email" style="color:black;">Zip Code</span>
                <input type="text" class="form-control input-sm" id="zip" placeholder="" name="zip">
                <br>
              </div>
              <div class="col-lg-7">
                <span for="email" style="color:black;">Supplier Code</span>
                <input type="text" class="form-control input-sm" id="zip" placeholder="" name="code">
                <br>
              </div>
              <hr>
              <div class="col-lg-7">
                <span for="email" style="color:black;">Email Address</span>
                <input type="email" class="form-control input-sm" id="suppemail" placeholder="example@email.com" name="email"><br>
              </div>
              <div class="col-lg-4">
                <span for="email" style="color:black;">Password</span>
                <input type="password" id="password" placeholder="" name="pass"><br>
                
              </div>
              <div class="col-lg-4">
                <br>
                <button1 type="submit" class="btn btn-default" name="submit">Submit</button1>
                <br>
              </div>
            </div>
        </form>
      </div>
 
    
    
    
    
    
</div>
    
    
</div>
    


<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
</script>


<?php
		include 'supplier_footer.php' ;
	?>

</body>
</html>


<?php
	ob_end_flush();
?>
