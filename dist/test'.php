<?php

include('start.php');
?>
<head>
    <link rel="stylesheet" href="test.css">
    <div class="container">
</head><div class="home-content">
<div class="title1">
<p>Admin Dashboard</p>
</div> 
   
    <div class="overview-boxes">
      <div class="box">
        <div class="right-side">
          <div class="box-topic">Total Order</div>
          <div class="number">40,876</div>
          <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
            <span class="text">Up from yesterday</span>
          </div>
        </div>
        <i class='bx bx-cart-alt cart'></i>
      </div>
      <div class="box">
        <div class="right-side">
          <div class="box-topic">Total Sales</div>
          <div class="number">38,876</div>
          <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
            <span class="text">Up from yesterday</span>
          </div>
        </div>
        <i class='bx bxs-cart-add cart two' ></i>
      </div>
      </div>
      <div class="overview-boxes">
      <div class="box">
        <div class="right-side">
          <div class="box-topic">Total Profit</div>
          <div class="number">$12,876</div>
          <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
            <span class="text">Up from yesterday</span>
          </div>
        </div>
        <i class='bx bx-cart cart three' ></i>
      </div>
      <div class="box">
        <div class="right-side">
          <div class="box-topic">Total Return</div>
          <div class="number">11,086</div>
          <div class="indicator">
            <i class='bx bx-down-arrow-alt down'></i>
            <span class="text">Down From Today</span>
          </div>
        </div>
        <i class='bx bxs-cart-download cart four' ></i>
      </div>
    </div>
    </div>
    <?php

include('end.php');
?>