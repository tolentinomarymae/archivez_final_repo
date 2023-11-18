<template>
    <body>
   <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
     <div
       class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
       <div class="flex flex-col overflow-y-auto md:flex-row">
         <div class="h-32 md:h-auto md:w-1/2 flex items-center justify-center">
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
             <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">Sign Up as Student</h1>
             <div class="login-container">
                <form action="#" method="POST">
            <div class="form-group">
                <input type="text" id="id" name="id" placeholder="ID Number" required>
            </div>
            <div class="form-group">
                <input type="text" id="firstname" name="firstname" placeholder="First Name" required>
            </div>
            <div class="form-group">
                <input type="text" id="lastname" name="lastname" placeholder="Last Name" required>
            </div>
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
            </div>
            <div class="form-group">
                <select id="department" name="department">
                    <option value="Junior High School">Junior High School</option>
                    <option value="Senior High School">Senior High School</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="Login">
            </div>
        </form>
             </div>
             <div class="signup-link">
               <p>Not a member yet? <router-link to="/studentlogin">Login</router-link></p>
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

       .form-group input , select{
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
