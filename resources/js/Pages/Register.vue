<script setup>
import { useForm } from '@inertiajs/vue3';

const form=useForm({
   'name' : '',
   'email' : '',
   'password' : '',
});

const submit = () => {
    form.post('/register');
};

</script>
 
<template>
   <section class="bg-gray-50 dark:bg-gray-900">
      <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
               <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
               Register    
            </a>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
               <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                 
                  <form class="space-y-4 md:space-y-6" @submit.prevent="submit">
                        <div>
                           <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                           <input type="text" name="name" id="name" v-model="form.name" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your name">
                        </div>
                        <div>
                           <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                           <input type="email" name="email" id="email"  v-model="form.email"  class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your Email">
                        </div>
                        <div>
                           <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                           <input type="password" name="password" id="password"  v-model="form.password"  placeholder="Enter your password" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>

                        <button type="submit" class="w-full bg-primary-600 hover:bg-primary-700 ">Sign Up</button>

                  </form>
               </div>
            </div>
      </div>
   </section>
 
</template>
 
<style scoped>
 
</style>