<aside class="main-sidebar active" id="sidebar">
    <!-- sidebar-->
    <section class="sidebar ">
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="user-profile treeview">
          <a href="index.html">
			<img src="images/compony_logo.jpg" alt="user">
              <span>
				<span class="d-block font-weight-600 font-size-16">Property manager</span>
				<span class="email-id">property@gmail.com</span>
			  </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
                <li><a href="javascript:void()"><i class="fa fa-user mr-5"></i>My Profile </a></li>
                <li><a href="javascript:void()"><i class="fa fa-money mr-5"></i>My Balance</a></li>
                <li><a href="javascript:void()"><i class="fa fa-envelope-open mr-5"></i>Inbox</a></li>
                <li><a href="javascript:void()"><i class="fa fa-cog mr-5"></i>Account Setting</a></li>
                <li><a href="javascript:void()"><i class="fa fa-power-off mr-5"></i>Logout</a></li>
          </ul>
        </li>
		
		<li class="treeview active">
          <a href="#">
            <i class="mdi mdi-view-dashboard"></i>

            <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li class="treeview">
              <a href="#">
                <i class="mdi mdi-table"></i>
                <span>Users</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="{{route('AgencyInf')}}" 
                  @if(app('request')->route()->uri=="AgencyInf")
                    class="nav-link active"
                  @else
                    class="nav-link"
                  @endif   ><i class="mdi mdi-toggle-switch-off"></i>Agency</a>
                </li>
                <li>
                  <a href="{{route('NormalUserInf')}}" 
                  @if(app('request')->route()->uri=="NormalUserInf")
                    class="nav-link active"
                  @else
                    class="nav-link"
                  @endif   ><i class="mdi mdi-toggle-switch-off"></i>Normal User</a>
                </li>
                <li>
                  <a href="{{route('TenantInf')}}" 
                  @if(app('request')->route()->uri=="TenantInf")
                    class="nav-link active"
                  @else
                    class="nav-link"
                  @endif   ><i class="mdi mdi-toggle-switch-off"></i>Tenants</a>
                </li>
                <li>
                  <a href="{{route('RealTorInf')}}" 
                  @if(app('request')->route()->uri=="RealTorInf")
                    class="nav-link active"
                  @else
                    class="nav-link"
                  @endif   ><i class="mdi mdi-toggle-switch-off"></i>RealTor</a>
              </li>
                <li>
                  <a href="{{route('LandOwnerInf')}}" 
                  @if(app('request')->route()->uri=="LandOwnerInf")
                    class="nav-link active"
                  @else
                    class="nav-link"
                  @endif   ><i class="mdi mdi-toggle-switch-off"></i>Landowner</a>
              </li>
                <li>
                    <a href="{{route('regUser')}}" 
                    @if(app('request')->route()->uri=="regUser")
                      class="nav-link active"
                    @else
                      class="nav-link"
                    @endif   ><i class="mdi mdi-toggle-switch-off"></i>Register</a>
                </li>
              </ul>
</li>

            <li class="treeview">
              <a href="#">
                <i class="mdi mdi-table"></i>
                <span>Property</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="{{route('ViewDefineMainCatProperty')}}" 
                  @if(app('request')->route()->uri=="ViewDefineMainCatProperty")
                    class="nav-link active"
                  @else
                    class="nav-link"
                  @endif   ><i class="mdi mdi-toggle-switch-off"></i>Define Property Category</a>
                </li>
                <li>
                  <a href="{{route('ViewDefinePropertyState')}}" 
                  @if(app('request')->route()->uri=="ViewDefinePropertyState")
                    class="nav-link active"
                  @else
                    class="nav-link"
                  @endif   ><i class="mdi mdi-toggle-switch-off"></i>Define Property State</a>
                </li>
               
                
                <li>
                  <a href="{{route('PropertyInf')}}" 
                  @if(app('request')->route()->uri=="PropertyInf")
                    class="nav-link active"
                  @else
                    class="nav-link"
                  @endif   ><i class="mdi mdi-toggle-switch-off"></i>Property</a>
                </li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="mdi mdi-receipt"></i>
                <span>Move-in</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="{{route('ViewDefinedMoveIn')}}" 
                  @if(app('request')->route()->uri=="ViewDefinedMoveIn")
                    class="nav-link active"
                  @else
                    class="nav-link"
                  @endif   ><i class="mdi mdi-toggle-switch-off"></i>Move-in</a>
                </li>
                <li>
                  <a href="{{route('ViewMainPartMoveIn')}}" 
                  @if(app('request')->route()->uri=="ViewMainPartMoveIn")
                    class="nav-link active"
                  @else
                    class="nav-link"
                  @endif   ><i class="mdi mdi-toggle-switch-off"></i>Main Part</a>
                </li>
                <li>
                  <a href="{{route('ViewSecondPartMoveIn')}}" 
                  @if(app('request')->route()->uri=="ViewSecondPartMoveIn")
                    class="nav-link active"
                  @else
                    class="nav-link"
                  @endif   ><i class="mdi mdi-toggle-switch-off"></i>Second State</a>
                </li>
                <li>
                  <a href="{{route('ViewDefineFurniture')}}" 
                  @if(app('request')->route()->uri=="ViewDefineFurniture")
                    class="nav-link active"
                  @else
                    class="nav-link"
                  @endif   ><i class="mdi mdi-toggle-switch-off"></i>Define Furniture</a>
                </li>
                <li>
                  <a href="{{route('ViewDefinePropertyStuffs')}}" 
                  @if(app('request')->route()->uri=="ViewDefinePropertyStuffs")
                    class="nav-link active"
                  @else
                    class="nav-link"
                  @endif   ><i class="mdi mdi-toggle-switch-off"></i>Define Stuffs</a>
                </li>
                <li>
                  <a href="{{route('ViewDefinePropertyUtility')}}" 
                  @if(app('request')->route()->uri=="ViewDefinePropertyUtility")
                    class="nav-link active"
                  @else
                    class="nav-link"
                  @endif   ><i class="mdi mdi-toggle-switch-off"></i>Define Utility</a>
                </li>

                <li>
                  <a href="{{route('complainPage')}}" 
                  @if(app('request')->route()->uri=="complainPage")
                    class="nav-link active"
                  @else
                    class="nav-link"
                  @endif   ><i class="mdi mdi-toggle-switch-off"></i>Complaint</a>
                </li>
             
                <li>
                  <a href="{{route('problemPage')}}" 
                  @if(app('request')->route()->uri=="problemPage")
                    class="nav-link active"
                  @else
                    class="nav-link"
                  @endif   ><i class="mdi mdi-toggle-switch-off"></i>Problem</a>
                </li>

                <li>
                  <a href="{{route('needPage')}}" 
                  @if(app('request')->route()->uri=="needPage")
                    class="nav-link active"
                  @else
                    class="nav-link"
                  @endif   ><i class="mdi mdi-toggle-switch-off"></i>Need</a>
                </li>

              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="mdi mdi-chart-bar"></i>
                <span>Chart</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/charts_chartjs.html"><i class="mdi mdi-toggle-switch-off"></i>ChartJS</a></li>
                <li><a href="pages/charts_flot.html"><i class="mdi mdi-toggle-switch-off"></i>Flot</a></li>
                <li><a href="pages/charts_inline.html"><i class="mdi mdi-toggle-switch-off"></i>Inline charts</a></li>
                <li><a href="pages/charts_morris.html"><i class="mdi mdi-toggle-switch-off"></i>Morris</a></li>
                <li><a href="pages/charts_peity.html"><i class="mdi mdi-toggle-switch-off"></i>Peity</a></li>
                <li><a href="pages/charts_chartist.html"><i class="mdi mdi-toggle-switch-off"></i>Chartist</a></li>
              </ul>
            </li> 
              

            <li class="treeview">
              <a href="#">
                <i class="mdi mdi-ungroup"></i>
                <span>Invoice</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/invoice.html"><i class="mdi mdi-toggle-switch-off"></i>Invoice</a></li>
                <li><a href="pages/invoicelist.html"><i class="mdi mdi-toggle-switch-off"></i>Invoice List</a></li>	
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="mdi mdi-ungroup"></i>
                <span>Setting</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{route('sendFilesPage')}}"><i class="mdi mdi-toggle-switch-off"></i>send files</a></li>
              </ul>
            </li>	 
          </ul>
        </li>	
        <a href="pages/auth_login.html">
          <i class="mdi mdi-directions"></i>
          <span>Log Out</span>
        </a>
        </li> 	        
      </ul>
    </section>
  </aside>
<script>
     // JavaScript function to toggle the sidebar
     function change_active(lement_id){
      var elemntTag=document.getElementById(lement_id);
      if (elemntTag.classList.contains("active")) {
        
        elemntTag.classList.remove("active");
        } else {
        // If the sidebar is hidden, show it
        elemntTag.classList.add("active");
        }
          document.addEventListener("DOMContenchange_activetLoaded", function() {
          document.getElementById(lement_id).classList.add("active");
        });
     }
    function toggleSidebar() {
      change_active("sidebar");
      change_active("main-header");
      change_active("content-wrapper");
    } 

        // When the page loads, we want to show the sidebar
        
</script>