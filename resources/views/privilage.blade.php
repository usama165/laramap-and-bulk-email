<!-- 
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
 <!DOCTYPE html>

 <html lang="en">
 
 <head>
     <meta charset="utf-8" />
     <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('img/apple-icon.png')}}">
     <link rel="icon" type="image/png" href="{{URL::asset('img/favicon.ico')}}">
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
     <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
     <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
     <!--     Fonts and icons     -->
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
     <!-- CSS Files -->
     
     <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" />
     <link href="{{URL::asset('css/light-bootstrap-dashboard.css?v=2.0.0')}}" rel="stylesheet" />
     <!-- CSS Just for demo purpose, don't include it in your project -->
     <link href="{{URL::asset('css/demo.css')}}" rel="stylesheet" />
 </head>
 
 <body>
     <div class="wrapper">
         <div class="sidebar" data-image="{{URL::asset('img/sidebar-5.jpg')}}">
             <!--
         Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
 
         Tip 2: you can also add an image using data-image tag
     -->
             <div class="sidebar-wrapper">
                 <div class="logo">
                     <a href="http://www.creative-tim.com" class="simple-text">
                         CMS
                     </a>
                 </div>
                 <ul class="nav">
                     <li class="nav-item active">
                         <a class="nav-link" href="{{route('dash1')}}">
                             <i class="nc-icon nc-chart-pie-35"></i>
                             <p>Admin Detail</p>
                         </a>
                     </li>
                     <!-- <li>
                         <a class="nav-link" href="{{route('user')}}">
                             <i class="nc-icon nc-circle-09"></i>
                             <p>Customer Detail</p>
                         </a>
                     </li>
                     <li>
                         <a class="nav-link" href="{{route('table')}}">
                             <i class="nc-icon nc-notes"></i>
                             <p>Table List</p>
                         </a>
                     </li>
                     <li>
                         <a class="nav-link" href="{{route('typography')}}">
                             <i class="nc-icon nc-paper-2"></i>
                             <p>Typography</p>
                         </a>
                     </li>
                     <li>
                         <a class="nav-link" href="{{route('icons')}}">
                             <i class="nc-icon nc-atom"></i>
                             <p>Icons</p>
                         </a>
                     </li>
                     <li>
                         <a class="nav-link" href="{{route('maps')}}">
                             <i class="nc-icon nc-pin-3"></i>
                             <p>Maps</p>
                         </a>
                     </li>
                     <li>
                         <a class="nav-link" href="{{route('notifications')}}">
                             <i class="nc-icon nc-bell-55"></i>
                             <p>Notifications</p>
                         </a>
                     </li>
                    
                     <li>
                        <a class="nav-link" href="{{route('contact us')}}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>CONTACT US</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('teams')}}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>TEAMS</p>
                        </a>
                    </li> -->
                    <li>
                        <a class="nav-link" href="{{route('fetch')}}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Sub Admin</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('designation')}}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Designation</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('privilage')}}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Privilages</p>
                        </a>
                    </li>

                 </ul>
             </div>
         </div>
         <div class="main-panel">
             <!-- Navbar -->
             <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                 <div class="container-fluid">
                     <a class="navbar-brand" href="#pablo"> Dashboard </a>
                     <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-bar burger-lines"></span>
                         <span class="navbar-toggler-bar burger-lines"></span>
                         <span class="navbar-toggler-bar burger-lines"></span>
                     </button>
                     <div class="collapse navbar-collapse justify-content-end" id="navigation">
                         <ul class="nav navbar-nav mr-auto">
                             <li class="nav-item">
                                 <a href="#" class="nav-link" data-toggle="dropdown">
                                     <i class="nc-icon nc-palette"></i>
                                     <span class="d-lg-none">Dashboard</span>
                                 </a>
                             </li>
                             <li class="dropdown nav-item">
                                 <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                     <i class="nc-icon nc-planet"></i>
                                     <span class="notification">5</span>
                                     <span class="d-lg-none">Notification</span>
                                 </a>
                                 <ul class="dropdown-menu">
                                     <a class="dropdown-item" href="#">Notification 1</a>
                                     <a class="dropdown-item" href="#">Notification 2</a>
                                     <a class="dropdown-item" href="#">Notification 3</a>
                                     <a class="dropdown-item" href="#">Notification 4</a>
                                     <a class="dropdown-item" href="#">Another notification</a>
                                 </ul>
                             </li>
                             <li class="nav-item">
                                 <a href="#" class="nav-link">
                                     <i class="nc-icon nc-zoom-split"></i>
                                     <span class="d-lg-block">&nbsp;Search</span>
                                 </a>
                             </li>
                         </ul>
                         <ul class="navbar-nav ml-auto">
                             <li class="nav-item">
                                 <a class="nav-link" href="#pablo">
                                     <span class="no-icon">Account</span>
                                 </a>
                             </li>
                             <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     <span class="no-icon">Dropdown</span>
                                 </a>
                                 <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                     <a class="dropdown-item" href="#">Action</a>
                                     <a class="dropdown-item" href="#">Another action</a>
                                     <a class="dropdown-item" href="#">Something</a>
     0                                <a class="dropdown-item" href="#">Something else here</a>
                                     <div class="divider"></div>
                                     <a class="dropdown-item" href="#">Separated link</a>
                                 </div>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="#pablo">
                                     <span class="no-icon">Log out</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </nav>
             <!-- End Navbar -->

            <!-- ADD TEAM MEMBER modal -->
  
  <!-- Modal -->
  <div class="modal fade" id="teamAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ADD TEAM MEMBER</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        
            <form id="addform">
            {{csrf_field() }} 
                <div class="form-group">
                 <input type="text" class="form-control"  name="insert" placeholder="Enter name">
                <div id="insertE" style="display: none;"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control"  name="update" placeholder="description">
                  <div id="updateE" style="display: none;"></div>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name="delete" placeholder="description">
                  <div id="deleteE" style="display: none;"></div>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control"  name="view" placeholder="description">
                  <div id="viewE" style="display: none;"></div>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control"  name="designationId" placeholder="description">
                  <div id="designationIdE" style="display: none;"></div>
                </div>

                
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">ADD Team MEMBER</button>
        </div>
    </form>
      </div>
    </div>
  </div>




          <!-- EDIT TEAM MEMBER modal -->
  
  <!-- Modal -->
  <div class="modal fade" id="teamEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">EDITTEAM MEMBER</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <form id="editform">
                {{ csrf_field()}}
                {{method_field('PUT')}} 

                <input type="hidden" name="id" id="id">
                <div class="form-group">
                  <input type="text" class="form-control" id="insert" name="insert"  placeholder="Enter name">
                 </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="update" name="update"  placeholder="description">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" id="delete" name="delete" placeholder="description">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" id="view" name="view"  placeholder="description">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" id="designationId" name="designationId"  placeholder="description">
                </div>

               
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary"> Team MEMBER</button>
        </div>
    </form>
      </div>
    </div>
  </div>

 <!-- DELETE TEAM MEMBER modal -->
  
  <!-- Modal -->
  <div class="modal fade" id="teamDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">DELETE TEAM MEMBER</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="deleteform">
           <div class="modal-body">
                {{ csrf_field()}}
                {{method_field('delete')}}

            
                <input type="hidden" name="id" id="delete_id">
                <p>Are you sure you want to delete this data</p>
    
                
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Confirm Delete</button>
        </div>
     </form>
      </div>
    </div>
  </div>


















  <div class='container'>
<div class>
    <div class='row'>
       <h2>  PRIVILAGES TABLE</h2>  
        
    </div><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#teamAddModal">
        ADD PRIVILAGES
      </button>
</div>
  </div>

  


              
              <div class="container">
                <h3>PRIVILAGES DETAIL</h3>            
                <table class="table table-stripped table-hover thead-light">
                  <thead>
                    <tr>
                      
                    <th>PRIVILAGE ID</th>
                      
                      <th>Insert</th>
                      <th>Update</th>
                      
                      <th>Delete</th>
                      <th>View</th>
                      
                      <th>Designation id</th>
                      
                      <th>DELETE FROM RECORD</th>
                    </tr>
                  </thead>
                  <tbody>
                
                    @foreach ($data as $new)

                    <tr>
                        <td>{{$new->privilageId}}</td>
                        <td>{{$new->insert}}</td>
                          
                        <td>{{$new->update}}</td>
                        
                        <td>{{$new->delete}}</td>
                        <td>{{$new->view}}</td>
                        
                        <td>{{$new->designationId}}</td>

                        <td>
                            <a href="#" class="btn btn-success editbtn">Edit</a>
                            
                            <a href="#" class="btn btn-success deletebtn">delete</a>

                        </td>
                        
                       
                    @endforeach
                    </tr>
                  </tbody>
                </table>
              </div>
          
              <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
     <script type="text/javascript">
        $(document).ready(function (){

            $('#addform').on('submit', function(e){

                e.preventDefault();

                $.ajax({
                    type:"POST",
                    url: "test3",
                    data: $('#addform').serialize(),
                    success: function (response){

                        console.log(response)
                        $('#teamAddModal').modal('hide')
                        alert('data saved');
                    },
                    error: function(error){
                        console.log(error)
                        alert('data not saved');
                      
                    }


                });


            });


        });
    </script>


    <script>
        $(document).ready(function (){
    
            $('.editbtn').on('click',function(){
                $('#teamEditModal').modal('show');
                        $tr= $(this).closest('tr');
                var data= $tr.children("td").map(function(){
                        return $(this).text();  }).get();
                              console.log(data);
                 $('#id').val(data[0]);
             $('#insert').val(data[1]);
                $('#update').val(data[2]);
                $('#delete').val(data[3]);
                $('#view').val(data[4]);
                $('#designationId').val(data[5]);
                
                    
                });
        $('#editform').on('submit',function(e){
                    e.preventDefault();
                    var id=$('#id').val();
            $.ajax({
                        type:"PUT",
                        url:"edit3/"+id,
                        data: $('#editform').serialize(),
                        success: function (response){
                            console.log(response)
                            $('#teamEditModal').modal('hide')
                        },
                        error: function(error){
                            console.log(error)
                            alert(id);
                        }
                    });
            });
        });
     </script>  
  
  
    <script>
          $(document).ready(function (){

        $('.deletebtn').on('click',function(){

            $('#teamDeleteModal').modal('show');

            $tr= $(this).closest('tr');

            var data= $tr.children("td").map(function(){

                return $(this).text();
            }).get();

            console.log(data);
        
            $('#delete_id').val(data[0]);

        });


        $('#deleteform').on('submit',function(e){
                e.preventDefault();
                var id=$('#delete_id').val();
        $.ajax({
                    type:"DELETE",
                    url: "delete3/"+id,
                    data: $('#deleteform').serialize(),
                    success: function (response){
                        console.log(response)
                        $('#teamDeleteModal').modal('hide')
                        location.reload();
                    },
                    error: function(error){
                        console.log(error)
                        alert('data not saved');
                    }
                });
        });




    });
  </script>
   










{{-- 
            <script>

                    $(document).on("click", ".update" , function() {
                    var edit_id = $(this).data('id');

                    var name = $('#name_'+edit_id).val();
                    var email = $('#email_'+edit_id).val();

                    if(name != '' && email != ''){
                        $.ajax({
                        url: 'updateUser',
                        type: 'post',
                        data: {_token: CSRF_TOKEN,editid: edit_id,name: name,email: email},
                        success: function(response){
                            alert(response);
                        }
                        });
                    }else{
                        alert('Fill all fields');
                    }
                    });





                
            </script>
 --}}









     
 </body>
 <!--   Core JS Files   -->
 <script src="{{URL::asset('js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
 <script src="{{URL::asset('js/core/popper.min.js')}}" type="text/javascript"></script>
 <script src="{{URL::asset('js/core/bootstrap.min.js')}}" type="text/javascript"></script>
 <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
 <script src="{{URL::asset('js/plugins/bootstrap-switch.js')}}"></script>
 <!--  Google Maps Plugin    -->
 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
 <!--  Chartist Plugin  -->
 <script src="{{URL::asset('js/plugins/chartist.min.js')}}"></script>
 <!--  Notifications Plugin    -->
 <script src="{{URL::asset('js/plugins/bootstrap-notify.js')}}"></script>
 <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
 <script src="{{URL::asset('js/light-bootstrap-dashboard.js?v=2.0.0')}}" type="text/javascript"></script>
 <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
 <script src="{{URL::asset('js/demo.js')}}"></script>
 <script type="text/javascript">
     $(document).ready(function() {
         // Javascript method's body can be found in assets/js/demos.js
         demo.initDashboardPageCharts();
 
         demo.showNotification();
 
     });
 </script>
 
 </html>