<template>
  
    <body>
      <div class="container-scroller">
       
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
          <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="#"><img src="./purplejs/images/archivez3.png" alt="logo" /></a>
            <a class="navbar-brand brand-logo-mini" href="#"><img src="./purplejs/images/archivezLogo1.png" alt="logo" /></a>
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
                    <img src="./purplejs/images/faces/face1.jpg" alt="image">
                    <span class="availability-status online"></span>
                  </div>
                  <div class="nav-profile-text">
                    <p class="mb-1 text-black">David Greymaax</p>
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
                      <img src="./purplejs/images/faces/face4.jpg" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                      <p class="text-gray mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="./purplejs/images/faces/face2.jpg" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                      <p class="text-gray mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="./purplejs/images/faces/face3.jpg" alt="image" class="profile-pic">
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
                    <img src="./purplejs/images/faces/face1.jpg" alt="profile">
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
              <li class="nav-item">
                <router-link to="/studentdashboard">
                  <span class="menu-title">Dashboard</span>
                  <i class="mdi mdi-home menu-icon"></i>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/myprofile">
                  <span class="menu-title">My Profile</span>
                  <i class="mdi mdi-account menu-icon"></i>
                </router-link>
              </li>
              <li class="nav-item">
              <router-link to="">
                  <span class="menu-title">Classes</span>
                  <i class="mdi mdi-note-text menu-icon"></i>
                </router-link>
            </li>
              <li class="nav-item">
                <router-link to="/researchoutput">
                  <span class="menu-title">Research Outputs</span>
                  <i class="mdi mdi-folder-upload menu-icon"></i>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/archive">
                  <span class="menu-title">Archive</span>
                  <i class="mdi mdi-archive menu-icon"></i>
                </router-link>
              </li>
              <li class="nav-item">
              <router-link to="/">
                <span class="menu-title">Log Out</span>
                <i class="mdi mdi-redo-variant menu-icon"></i>
              </router-link>
            </li>
              <li class="nav-item sidebar-actions">
                <span class="nav-link">
                  <div class="border-bottom">
                    <h6 class="font-weight-normal mb-3">Research Paper</h6>
                  </div>
                  <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a Paper</button>
                  
                </span>
              </li>
            </ul>
          </nav>
          <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-folder-upload"></i>
                  </span> Upload Research Paper
                </h3>              
                <nav aria-label="breadcrumb" >
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><router-link to="/researchoutput">Research Output</router-link></li>
                  <li class="breadcrumb-item active" aria-current="page">Add New</li>
                </ol>
              </nav>
            </div>
                <div v-if="showSuccessAlert" class="alert alert-success ">
                  File uploaded successfully!
                </div>
              
            <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Upload Research Papers</h4>
                    <form @submit.prevent="save" class="forms-sample">                      
                      <p class="card-description"> Research Paper Details </p>
                      <div class="form-group">
                        <label for="researchtitle">Research Title</label>
                        <textarea rows="3" class="form-control" v-model="researchtitle" required placeholder="Research Title"></textarea>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="submittedto" class="col-sm-3 col-form-label">Teacher</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" v-model="submittedto" required placeholder="Teacher">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="subject" class="col-sm-3 col-form-label">Subject</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" v-model="subject" required placeholder="Subject">
                            </div>
                          </div>
                      </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="author" class="col-sm-3 col-form-label">Author/s</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" v-model="author" required placeholder="Author/s">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="idnumber" class="col-sm-3 col-form-label">ID Number</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" v-model="idnumber" required placeholder="ID Number">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="gradelevel" class="col-sm-3 col-form-label">Grade Level</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" v-model="gradelevel" required placeholder="Grade Level">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="section" class="col-sm-3 col-form-label">Section</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" v-model="section" required placeholder="Section">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="uploaddate">Upload Date</label>
                        <input type="date" class="form-control" v-model="uploaddate" required placeholder="Upload Date">
                      </div> 
                      <p class="card-description"> Research Paper Body </p>
                      <div class="form-group">
                        <label for="abstract">Abstract</label>
                        <textarea class="form-control" v-model="abstract" required rows="4" placeholder="Abstract"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="keywords">Keywords</label>
                        <textarea class="form-control" v-model="keywords" required placeholder="Keyword/s"></textarea>
                      </div>    
                      <div class="form-group">
                        <label for="filebody">File Body</label>
                        <textarea class="form-control" v-model="filebody" rows="10" required placeholder="Paste here the body of your research"></textarea>
                      </div>  
                      <div class="form-group">
                        <label for="citation">Citations</label>
                        <textarea class="form-control" v-model="citation" required rows="4" placeholder="Citation"></textarea>
                      </div>  
                      <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" v-model="status">
                          <option>Under Revision</option>
                          <option>Approved</option>
                        </select>
                      </div>
                      <div class="form-group">         
                      <input type="file" required  name="researchpaper" v-on:change="researchpaper">
                    </div>       
                      <button type="submit" class="btn btn-gradient-primary mr-2 ml-auto">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->

    <!-- Success Alert -->
    
  
  </body>
  
  </template>
  <style scoped>
  .breadcrumb-item .hover{
    text-decoration: none;
  }
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
            researchtitle:"",
            submittedto:"",
            subject:"",
            author:"",
            idnumber:"",
            gradelevel:"",
            section:"",
            uploaddate:"",
            abstract:"",
            keywords:"",
            filebody:"",
            citation:"",
            status:"",
            file:"",
            showSuccessAlert: false,

        }
    },
    methods:{
        async save(){
          try{
            const ins = await axios.post("save", {
             researchtitle: this.researchtitle,
             submittedto: this.submittedto,
             subject: this.subject,
             author: this.author,             
             idnumber: this.idnumber,
             gradelevel: this.gradelevel,
             section: this.section,
             uploaddate: this.uploaddate,
             abstract: this.abstract,
             keywords: this.keywords,
             filebody: this.filebody,
             citation: this.citation,
             status: this.status,
             file: this.file,


            });
            this.showSuccessAlert = true;

            this.researchtitle="";
            this.submittedto="";
            this.subject="";
            this.author="";
            this.idnumber="";
            this.gradelevel="";
            this.section="";
            this.uploaddate="";
            this.abstract="";
            this.keywords="";
            this.filebody="";
            this.citation="";
            this.status="";
            this.file="";
            this.$emit('data-saved');
            this.getInfo();
          }
         
          catch(error){

          }
        }
    }
}

</script>