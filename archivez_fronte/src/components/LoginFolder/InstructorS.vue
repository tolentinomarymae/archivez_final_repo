<template>
    <body>
   <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
     <div
       class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
       <div class="flex flex-col overflow-y-auto md:flex-row">
         <div class="h-32 md:h-auto md:w-1/2 flex items-center">
           <img
             aria-hidden="true"
             class="object-cover w-half h-half dark:hidden"
             src="https://scontent.fmnl13-1.fna.fbcdn.net/v/t39.30808-6/306201095_455085189969923_8362709336925624569_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_ohc=u8jPz0Rfh4sAX9lA1Fd&_nc_zt=23&_nc_ht=scontent.fmnl13-1.fna&oh=00_AfBcVmjLnGfKuPV3pot_aXldNJeWJSk4kZr2r1uCT5vq5w&oe=655DD17B"
             alt="Office" />
           <img
             aria-hidden="true"
             class="hidden object-cover w-full h-full dark:block"
             src="./dashboardjs/img/login-office-dark.jpeg"
             alt="Office"/>
         </div>
         <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
           <div class="w-full">
             <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200"><center>Sign Up</center></h1>
             <div class="login-container">
              <form @submit.prevent="signup">
                   <div class="form-group">
                    <label for="firstname">Firstname</label>
                       <input type="text" id="firstname" name="firstname" placeholder="Firstname" v-model="firstname" required>
                   </div>
                   <div class="form-group">
                    <label for="lastname">Lastname</label>
                       <input type="text" id="lastname" name="lastname" placeholder="Lastname" v-model="lastname" required>
                   </div>

                   <div class="form-group">
                      <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">User Type</span>
                        <select id="usertype" name="usertype" v-model="usertype" required
                          class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        >
                          <option value="student">Student</option>
                          <option value="instructor">Instructor</option>
                          <option value="admin">Admin</option>
                        </select>
                      </label>
                   </div>

                   <div class="form-group">
                    <label for="email">Email</label>
                       <input type="email" id="email" name="email" placeholder="Email" v-model="email" required>
                   </div>
                   <div class="form-group">
                    <label for="password">Password</label>
                       <input type="password" id="password" name="password" placeholder="********" v-model="password" required>
                   </div>
                   <div class="form-group">
                    <label for="password_confirm">Confirm Password</label>
                       <input type="password" id="password_confirm" name="password_confirm" placeholder="********" v-model="password_confirm" required>
                   </div>
                   <div v-if="message === 'passwordMismatch'">Passwords do not match</div>
                   <div class="form-group">
                       <input type="submit" value="Register">
                   </div>
               </form>
             </div>
             <div class="signup-link">
               <p>Already a member? <router-link to="/instructorlogin">Log in</router-link></p>
             </div>
             <p class="mt-4">
               <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline" href="#"> Forgot your password?</a>
             </p>
               <router-link to="/">Back to home</router-link>
             
           </div>
         </div>
       </div>
     </div>
   </div>
 </body>
</template>

<style scoped>


.form-group {
           margin: 20px 0;
       }

       .form-group label {
           display: block;
       }

       .form-group input {
           width: 100%;
           padding: 10px;
           margin-top: 5px;
           border: 1px solid #ccc;
           border-radius: 3px;
       }

       .form-group input[type="submit"] {
           background-color: #007BFF;
           color: #fff;
           border: none;
           padding: 10px 20px;
           border-radius: 3px;
           cursor: pointer;
       }

       .form-group input[type="submit"]:hover {
           background-color: #0056b3;
       }

       .signup-link {
           text-align: center;
       }

       .signup-link a {
           text-decoration: none;
           color: #007BFF;
       }

       .signup-link a:hover {
           text-decoration: underline;
       }
</style>

<script> 
  import router from '@/router'; 
  import axios from 'axios'; 

  export default { 

    data() { 
      return { 
        firstname: '', 
        lastname: '', 
        usertype: '', 
        email: '',
        password: '', 
        password_confirm: '', 
        message: [], 
      }; 

    }, 

    methods: { 
      async signup() { 
        if (this.password === this.password_confirm) { 
          const datasign = await axios.post("signup", { 
            firstname: this.firstname,
            lastname: this.lastname,
            usertype: this.usertype,
            email: this.email,
            password: this.password 
          }); 

          this.message = datasign.data.msg; 
          if (datasign.data.msg === 'okay') { 
            //sessionStorage.setItem("jwt", data.data.token) 
            alert("Registered successfully"); 
            router.push('/instructorlogin'); 
          } 
        } else { 
          this.message = "passwordMismatch"; 
        } 
      } 
    }
  }; 
</script> 