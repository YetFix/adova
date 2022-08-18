 <!-- Left Sidebar - style you can find in sidebar.scss  -->
 <!-- ============================================================== -->
 <aside class="left-sidebar" data-sidebarbg="skin6">
     <!-- Sidebar scroll-->
     <div class="scroll-sidebar">
         <!-- Sidebar navigation-->
         <nav class="sidebar-nav">
             <ul id="sidebarnav">
                 <!-- User Profile-->
                 <li class="sidebar-item pt-2">
                     <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/home" aria-expanded="false">
                         <i class="far fa-clock" aria-hidden="true"></i>
                         <span class="hide-menu">Dashboard</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('categories.index')}}"
                         aria-expanded="false">
                         <i class="fa fa-table" aria-hidden="true"></i>
                         <span class="hide-menu">Categories</span>
                     </a>
                 </li>
                
                 <li class="sidebar-item">
                     <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('products.index')}}"
                         aria-expanded="false">
                         <i class="fas fa-address-book"></i>
                         <span class="hide-menu">Products</span>
                     </a>
                 </li>
                   
                
                 <li class="sidebar-item">
                     <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('sliders.index')}}" aria-expanded="false">
                         <i class="fa fa-globe" aria-hidden="true"></i>
                         <span class="hide-menu">Sliders</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('teams.index')}}" aria-expanded="false">
                         <i class="fa fa-globe" aria-hidden="true"></i>
                         <span class="hide-menu">Teams</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/contacts"
                         aria-expanded="false">
                         <i class="fas fa-address-book"></i>
                         <span class="hide-menu">Contacts</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admins.index')}}" aria-expanded="false">
                         <i class="fa fa-users" aria-hidden="true"></i>
                         <span class="hide-menu">Admins</span>
                     </a>
                 </li>
                 <hr>
                 <li class="sidebar-item">
                     <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/" target="_blank"
                         aria-expanded="false">
                         <i class="fa fa-globe" aria-hidden="true"></i>
                         <span class="hide-menu">Go to AdovaPharama</span>
                     </a>
                 </li>
                 
                 <li class="sidebar-item">
                     <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/logout" aria-expanded="false">
                         <i class="fas fa-sign-out-alt"></i>
                         <span class="hide-menu">Logout</span>
                     </a>
                 </li>
             </ul>

         </nav>
         <!-- End Sidebar navigation -->
     </div>
     <!-- End Sidebar scroll-->
 </aside>
 <!-- ============================================================== -->
 <!-- End Left Sidebar - style you can find in sidebar.scss  -->
 <!-- ============================================================== -->