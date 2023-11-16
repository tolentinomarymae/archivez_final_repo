<template>
    <body>
   <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
     <div
       class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
       <div class="flex flex-col overflow-y-auto md:flex-row">
         <div class="h-32 md:h-auto md:w-1/2">
           <img
             aria-hidden="true"
             class="object-cover w-full h-full dark:hidden"
             src="./dashboardjs/img/login-office.jpeg"
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
               <form action="#" method="POST">
                   <div class="form-group">
                       <input type="text" id="firstname" name="firstname" placeholder="Firstname" required>
                   </div>
                   <div class="form-group">
                       <input type="text" id="lastname" name="lastname" placeholder="Lastname" required>
                   </div>
                   <div class="form-group">
                       <input type="text" id="email" name="email" placeholder="Email" required>
                   </div>
                   <div class="form-group">
                       <input type="password" id="password" name="password" placeholder="Password" required>
                   </div>
                   <div class="form-group">
                       <input type="password" id="password_confirm" name="password_confirm" placeholder="Confirm Password" required>
                   </div>
                   <div class="form-group">
                       <input type="submit" value="Register">
                   </div>
               </form>
             </div>
             <div class="signup-link">
               <p>Already have an account? <router-link to="/adminlogin">Log In</router-link></p>
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


.form-group input {
           width: 100%;
           padding: 10px;
           margin-top: 5px;
           margin-bottom: 15px;
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
</style>