 <nav class="menuColor navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>


      
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <div class="navbar-header">
       <a class="navbar-brand" href="#">Laravel CRM</a>
     </div>

     <ul class="nav navbar-nav navbar-left">
      <li>
       <a href="" class="fas fa-tachometer-alt">Dashboard</a>         
     </li>

     <li>
       <a href="{{route('users')}}" class="fas fa-users">Users</a>         
     </li>    

     <li>
       <a href="">Projects</a>         
     </li>
     
   </ul>    

   <ul class="nav navbar-nav navbar-right">                                 

    <li id="imgprofile">
    </li>

    <li><a class="navbar-brand"></a></li>

    <li>
     <a class="navbar-brand fas fa-user-tie" href="">Profile</a>          
   </li>  

   <li>
     <a class="navbar-brand fas fa-times-circle" href="">Logout</a>          
   </li>                                    
   
 </ul>           

</div>
<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>