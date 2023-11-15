import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue'
import AdminLogin from '../views/Login/AdminLogin.vue'
import AdminSignup from '../views/Login/AdminSignup.vue'
import InstructorLogin from '../views/Login/InstructorLogin.vue'
import InstructorSignup from '../views/Login/InstructorSignup.vue'
import StudentLogin from '../views/Login/StudentLogin.vue'
import StudentSignup from '../views/Login/StudentSignup.vue'
import StudentDashboard from '../views/SDashboard/StudentDashboard.vue'
import MyProfile from '../views/SDashboard/MyProfileView.vue'
import ResearchOutput from '../views/SDashboard/ResearchOutputView.vue'
import Archive from '../views/SDashboard/ArchiveView.vue'
import AdminDashboard from '../views/ADashboard/AdminDashboardView.vue'
import AdminProfile from '../views/ADashboard/AdminProfileView.vue'
import ResearchCoordinator from '../views/ADashboard/ResearchCoordinatorView.vue'
import StudentAccounts from '../views/ADashboard/StudentAccountsView.vue'
import ViewUploads from '../views/ADashboard/ViewUploadsView.vue'
import InstructorDashboard from '../views/IDashboard/InstructorDashboardView.vue'
import InstructorProfile from '../views/IDashboard/InstructorProfileView.vue'
import SubmittedFiles from '../views/IDashboard/SubmittedFilesView.vue'
import AddNewPaper from '../views/SDashboard/AddNewPaperView.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: Home
  },
  {
    path: '/adminlogin',
    name: 'adminlogin',
    component: AdminLogin
  },
  {
    path: '/adminsignup',
    name: 'adminsignup',
    component: AdminSignup,
  },
  {
    path: '/instructorlogin',
    name: 'instructorlogin',
    component: InstructorLogin,
  },
  {
    path: '/instructorsignup',
    name: 'instructorsignup',
    component: InstructorSignup,
  },
  {
    path: '/studentlogin',
    name: 'studentlogin',
    component: StudentLogin,
  },
  {
    path: '/studentsignup',
    name: 'studentsignup',
    component: StudentSignup,
  },
  {
    path: '/studentdashboard',
    name: 'studentdashboard',
    component: StudentDashboard,
  },
  {
    path: '/myprofile',
    name: 'myprofile',
    component: MyProfile,
  },
  {
    path: '/researchoutput',
    name: 'researchoutput',
    component: ResearchOutput,
  },
  {
    path: '/archive',
    name: 'archive',
    component: Archive,
  },
  {
    path: '/admindashboard',
    name: 'admindashboard',
    component: AdminDashboard,
  },
  {
    path: '/adminprofile',
    name: 'adminprofile',
    component: AdminProfile,
  },
  {
    path: '/researchcoordinator',
    name: 'researchcoordinator',
    component: ResearchCoordinator,
  },
  {
    path: '/studentaccounts',
    name: 'studentaccounts',
    component: StudentAccounts,
  },
  {
    path: '/viewuploads',
    name: 'viewuploads',
    component: ViewUploads,
  },
  {
    path: '/instructordashboard',
    name: 'instructordashboard',
    component: InstructorDashboard,
  },
  {
    path: '/instructorprofile',
    name: 'instructorprofile',
    component: InstructorProfile,
  },
  {
    path: '/submittedfiles',
    name: 'submittedfiles',
    component: SubmittedFiles,
  },
  {
    path: '/addnewpaper',
    name: 'addnewpaper',
    component: AddNewPaper,
  },
]


const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
