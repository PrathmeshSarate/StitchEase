<style>
body {
  margin: 0;
  font-family:'Roboto Condensed', sans-serif;
}
.active {
  color: white;
  background-color: #17a2b8;
}
.sidebar{
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }}
</style>
<div class="container-fluid mb-5" >
  <div class="row">
   <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
    <div class="sidebar">
     <ul class="nav flex-column">
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'dash') { echo 'active'; } ?> " href="dash.php">
       <i class="fas fa-tachometer-alt"></i>
         Dashboard
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'cloths') { echo 'active'; } ?>" href="cloths.php">
        <i class="fas fa-envelope-open-text"></i>
         Cloths
       </a>
      </li>  
      
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'orders') { echo 'active'; } ?>" href="orders.php">
       <i class="fas fa-cart-arrow-down"></i>
         Orders
       </a>
      </li>

      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'feedback') { echo 'active'; } ?>" href="feedback.php">
        <i class="fas fa-tshirt"></i>
        Feedback
       </a>
      </li>   
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'contactus') { echo 'active'; } ?>" href="contactus.php">
        <i class="fas fa-tshirt"></i>
        Contact Us
       </a>
      </li>   
      <li class="nav-item">
       <a class="nav-link" href="logout.php">
        <i class="fas fa-sign-out-alt"></i>
         Logout
       </a>
      </li>
      
     </ul>
    </div>
   </nav>