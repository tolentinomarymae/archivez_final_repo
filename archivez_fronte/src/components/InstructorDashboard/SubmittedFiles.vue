<template>
  
    <body>
      <div class="container-scroller">
       
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
          <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="#"><img src="../../../public/purplejs/images/archivez3.png" alt="logo" /></a>
            <a class="navbar-brand brand-logo-mini" href="#"><img src="../../../public/purplejs/images/archivezLogo1.png" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <div class="search-field d-none d-md-block">
              <form class="d-flex align-items-center h-100" action="#">
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <i class="input-group-text border-0 mdi mdi-magnify"></i>
                  </div>
                  <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
                </div>
              </form>
            </div>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <div class="nav-profile-img">
                    <img src="../../../public/purplejs/images/faces/face1.jpg" alt="image">
                    <span class="availability-status online"></span>
                  </div>
                  <div class="nav-profile-text">
                    <p class="mb-1 text-black">Admin</p>
                  </div>
                </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
                </div>
              </li>
              <li class="nav-item d-none d-lg-block full-screen-link">
                <a class="nav-link">
                  <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email-outline"></i>
                  <span class="count-symbol bg-warning"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../../public/purplejs/images/faces/face4.jpg" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                      <p class="text-gray mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../../public/purplejs/images/faces/face2.jpg" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                      <p class="text-gray mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../../public/purplejs/images/faces/face3.jpg" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                      <p class="text-gray mb-0"> 18 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <h6 class="p-3 mb-0 text-center">4 new messages</h6>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell-outline"></i>
                  <span class="count-symbol bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-success">
                        <i class="mdi mdi-calendar"></i>
                      </div>
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                      <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-warning">
                        <i class="mdi mdi-settings"></i>
                      </div>
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                      <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-info">
                        <i class="mdi mdi-link-variant"></i>
                      </div>
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                      <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <h6 class="p-3 mb-0 text-center">See all notifications</h6>
                </div>
              </li>
              
              <li class="nav-item nav-settings d-none d-lg-block">
              
                  <router-link to="/"><i class="mdi mdi-power"></i></router-link>
                  
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_sidebar.html -->
          <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
              <li class="nav-item nav-profile">
                <a href="#" class="nav-link">
                  <div class="nav-profile-image">
                    <img src="../../../public/purplejs/images/faces/face1.jpg" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                  </div>
                  <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">David Grey. H</span>
                    <span class="text-secondary text-small">Project Manager</span>
                  </div>
                  <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                </a>
              </li>
              <div class="border-bottom"></div>
              <li class="nav-item">
                <a class="nav-link" href="/instructordashboard">
                  <span class="menu-title">Dashboard</span>
                  <i class="mdi mdi-home menu-icon"></i>
                </a>
              </li>
              <li class="nav-item">
                <router-link to="/instructorprofile">
                  <span class="menu-title">My Profile</span>
                  <i class="mdi mdi-account menu-icon"></i>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/submittedfiles">
                  <span class="menu-title">Submitted Files</span>
                  <i class="mdi mdi-file-document menu-icon"></i>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/">
                  <span class="menu-title">Log Out</span>
                  <i class="mdi mdi-redo-variant menu-icon"></i>
                </router-link>
              </li>
              <div class="border-bottom"></div>
            </ul>
          </nav>
          <!-- partial -->
          <div class="main-panel">
            <div class="content-wrapper">
              <div class="page-header">
                <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-folder-upload"></i>
                  </span> Research Outputs
                </h3>
              </div>
              <div class="row">
                
                <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                            <h4 class="card-title mt-2 ml-3">Research Outputs</h4>                               
                            <router-link to="/addnewpaper" class="btn btn-gradient-info btn-fw ml-auto">Add New</router-link>
                             <div class="input-group mt-4">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn btn-gradient-info" type="button">Search</button>
                                    </div>
                                </div>
                               
                    </div>
                  </div>
                                
                    <div class="table-responsive" >
                    <table class="table table-hover">
                      <thead style="text-align: center">
                        <tr>
                          <th>Title</th>
                          <th>Teacher</th>
                          <th>Subject</th>
                          <th>Author</th>
                          <th>ID Number</th>
                          <th>Grade Level</th>
                          <th>Section</th>
                          <th>Published Date</th>
                          <th>Status</th>
                          <th>File</th>
                          <th>Commented by</th>
                          <th>Comment</th>
                          <th>Read</th>
                          <th>Archive</th>
                          <th>Comment</th>

                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="info in info" :key="info.id">
                          <td >{{ info.researchtitle }}</td>
                          <td>{{ info.submittedto }} </td>
                          <td>{{ info.subject }}</td>
                          <td>{{ info.author }}</td>
                          <td>{{ info.idnumber }}</td>
                          <td>{{ info.gradelevel }}</td>
                          <td>{{ info.section }}</td>
                          <td>{{ info.uploaddate }}</td>
                          <td>{{ info.status }}</td>
                          <td>{{ info.file }}</td>
                          <td>{{ info.commentedby }}</td>
                          <td>{{ info.comment }}</td>
                          <td>
                            <button @click="openModal(info)" type="button" class="btn btn-gradient-danger btn-rounded btn-fw">Read</button>
                          </td>
                          <td><button type="button" class="btn btn-gradient-primary btn-rounded btn-fw">Archive</button></td>
                          <td>
                              <button @click="openCommentModal(info)" type="button" class="btn btn-gradient-warning btn-rounded btn-fw">Comment</button>
                          </td>

                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>
            </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
<!-- Comment Modal -->
<div class="modal fade" id="commentModal" tabindex="-1" role="dialog" aria-labelledby="commentModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: white;">
                <h5 class="modal-title" id="commentModalLabel">Research Details</h5>
                </div>
                <div class="modal-body" style="background-color: white;">
                <div v-if="showSuccessAlert" class="alert alert-success ">
                  File uploaded successfully!
                </div>
                <form @submit.prevent="save" class="forms-sample">                     
                      <div class="form-group">
                        <label for="commentedby">Commented by</label>
                        <input type="text" class="form-control" v-model="commentedby" required placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="comment">Comment</label>
                        <textarea rows="3" class="form-control" v-model="comment" required placeholder="Comment"></textarea>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary mr-2 ml-auto">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
            
          </div>
            
            <div class="modal-footer" style="background-color: white;">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div></div>

<!-- Modal -->
<div class="modal fade" id="readModal" tabindex="-1" role="dialog" aria-labelledby="readModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="readModalLabel">Research Details</h5>
                
            </div>
            <div class="modal-body" style="background-color: white;">
                <!-- Display details here -->
                <p><strong>Title:</strong> {{ modalInfo.researchtitle }}</p>
                <p><strong>Teacher:</strong> {{ modalInfo.submittedto }}</p>
                <p><strong>Subject:</strong> {{ modalInfo.subject }}</p>
                <p><strong>Author:</strong> {{ modalInfo.author }}</p>
                <p><strong>ID Number:</strong> {{ modalInfo.idnumber }}</p>
                <p><strong>Grade Level:</strong> {{ modalInfo.gradelevel }}</p>
                <p><strong>Section:</strong> {{ modalInfo.section }}</p>
                <p><strong>Published Date:</strong> {{ modalInfo.uploaddate }}</p>
                <p><strong>Abstract:</strong> {{ modalInfo.abstract }}</p>
                <p><strong>Keywords:</strong> {{ modalInfo.keywords }}</p>
                <p><strong>Body:</strong> {{ modalInfo.filebody }}</p>
                <p><strong>Citation:</strong> {{ modalInfo.citation }}</p>
                <p><strong>Status:</strong> {{ modalInfo.status }}</p>
                <p><strong>Commented by:</strong> {{ modalInfo.commentedby }}</p>
                <p><strong>Comment:</strong> {{ modalInfo.comment }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

  </body>
  </template>
  <style scoped>
  .modal-dialog {
  max-width: 80%;
  margin: 0 auto;
  background-color: white;
}
/*
.table tbody td,
.table tbody th {
  white-space: normal;
  word-wrap: normal; 
}
.table tbody .abstract-cell {
  max-width: 50000vw;
  white-space: normal;
  word-wrap: break-word;
}
*/
  .nav-item {
    float: right;
  }

  .nav-item a{
    text-decoration: none;
  }
  
  .menu-icon {
    float: right;
    margin-right: 10px;
    color: #beabc2;
    text-decoration: none;
  }
  ul li, ol li, dl li {
    line-height: 4;
}

input[type="date"] {
  background-color: #fff;
  border-color: #ccc;
  border-radius: 8px;
  padding: 15px;
}
.profile {
    display: flex;
    align-items: flex-start;
    padding: 20px;
    background-color: white;
}

.profile-picture img {
    width: 250px;
    height: 250px;
    border-radius: 50%;
}

.profile-details {
    margin-left: 20px;
}

.profile-details h1 {
    font-size: 24px;
    margin: 0;
}

.profile-details p {
    margin: 5px 0;
}

.profile-details a {
    text-decoration: none;
    color: blue;
}

.profile-details a:hover {
    text-decoration: underline;
}

@media screen and (max-width: 768px) {
    .profile {
        flex-direction: column; 
        align-items: center; 
    }

    .profile-picture {
        margin-bottom: 20px; 
    }
}


  </style>

<script>
import axios from 'axios'
export default{
  data(){
    return{
      
      info:[],
      modalInfo: {},
            
    }
  },

  created(){
    this.getInfo();
  },
  methods:{
    async getInfo(){
      try{
        const inf = await axios.get('getResearchOutput');
      this.info = inf.data;
      } catch (error){
        console.log(error);
      }
    },
    async save(){
          try{
            const ins = await axios.post("save", {
             commentedby: this.commentedby,
             comment: this.comment,
            });
            this.showSuccessAlert = true;

            this.commentedby="";
            this.comment="";
            this.$emit('data-saved');
            this.getInfo();
          }
         
          catch(error){

          }
        },
    openModal(selectedInfo) {
            this.modalInfo = selectedInfo;
            $('#readModal').modal('show');  
        },
        openCommentModal(selectedInfo) {
        this.modalInfo = selectedInfo;
        $('#commentModal').modal('show');
    },
  }

}
</script>


