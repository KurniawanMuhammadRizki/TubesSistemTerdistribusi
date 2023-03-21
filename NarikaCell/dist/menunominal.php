<?php
    include 'koneksi.php';
$NomerHp = $_GET['NomerHp'];

?>
<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Narika Cell</title>
      <link rel="stylesheet" href="style.css" />
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer ></script> 
    </head>
    <body>
       <section class="h-full w-full border-box transition-all duration-500 linear" style="background-color: #141432">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .header-2-3 .btn-outline {
        border: 1px solid #707092;
        color: #707092;
        transition: 0.3s;
      }

      .header-2-3 .btn-outline:hover {
        border: 1px solid #ffffff;
        color: #ffffff;
        transition: 0.3s;
      }

      .header-2-3 .btn-outline:hover div path {
        fill: #ffffff;
        transition: 0.3s;
      }

      .header-2-3 .box-shadow:hover {
        --tw-shadow: inset 0 0px 25px 0 rgba(20, 20, 50, 0.7);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
      }

      .header-2-3 .navigation a:hover,
      .header-2-3 .active {
        font-weight: 600;
        transition: 0.2s;
      }

      .header-2-3 .navigation a:hover,
      .header-2-3 .navigation .active,
      .header-2-3 .btn-log {
        color: #e7e7e8;
        transition: 0.2s;
      }

      .header-2-3 .navigation {
        color: #707092;
      }

      .header-2-3 .bg-screen {
        background-color: #707092;
      }

      .header-2-3 .bg-popup {
        background-color: #141432;
      }

      .header-2-3 .btn-try,
      .header-2-3 .btn-fill {
        background-color: #524eee;
        transition: 0.3s;
      }

      .header-2-3 .small-text {
        color: #fb6262;
      }

      .header-2-3 .title-font {
        color: #cbcbd2;
        line-height: 1.2;
      }
      .content-3-6 .input {
        border: 1px solid #292738;
        background-color: #252332;
        color: #d8d7df;
        transition: 0.3s;
      }

      .content-3-6 .input:focus-within {
        border: 1px solid #2ec49c;
        color: #d8d7df;
        transition: 0.3s;
      }

      .content-3-6 .input input::placeholder {
        color: #4e4b62;
        transition: 0.3s;
        
      }

      .content-3-6 .input:focus-within input::placeholder {
        color: #d8d7df;
        outline: none;
        transition: 0.3s;
      }

      .content-3-6 .input:focus-within .icon path {
        transition: 0.3;
        fill: #2ec49c;
        transition: 0.3s;
      }

      .content-3-6 .input .icon-toggle path {
        transition: 0.3;
        fill: #2ec49c;
        transition: 0.3s;
      }

      .content-3-6 .centered {
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
      }

      .content-3-6 .width-left {
        width: 0%;
      }

      .content-3-6 .width-right {
        width: 100%;
      }

      .content-3-6 .forgot-password {
        color: #737182;
        transition: 0.3s;
      }

      .content-3-6 .forgot-password:hover {
        color: #d8d7df;
      }

      .content-3-6 .btn-fill {
        background-image: linear-gradient(rgba(91, 203, 173, 1),
            rgba(39, 194, 153, 1));
      }

      .content-3-6 .btn-fill:hover {
        background-image: linear-gradient(#2ec49c, #2ec49c);
      }

     

      .content-3-6 .text-gray {
        color: #737182;
      }

      .content-3-6 .text-green {
        color: #2ec49c;
      }

      .content-3-6 .text-medium-white {
        color: #d8d7df;
      }

      @media (min-width: 1024px) {
        .content-3-6 .width-left {
          width: 48%;
        }

        .content-3-6 .width-right {
          width: 52%;
        }
      }
      
    </style>
    <!-- Navbar -->
    <div class="header-2-3" style="font-family: 'Poppins', sans-serif">
      <header x-data="{ open: false }">
        <div class="mx-auto flex py-12 lg:px-24 md:px-16 sm:px-8 px-8 items-center justify-between lg:justify-start">
          <a href="#">
            <img src="../src/img/Narikaa.png"
              alt="" width="80px" height="80px"/>
          </a>
          <div class="flex mr-0 lg:hidden cursor-pointer">
            <svg class="w-6 h-6" @click="open = !open" fill="none" stroke="#E7E7E8" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </div>
          <div :class="{'hidden': !open}"
            class="bg-screen bg-black fixed w-full hidden h-full top-0 left-0 z-30 bg-opacity-60" @click="open = !open">
          </div>
          <nav
            class="navigation lg:mr-auto hidden lg:flex flex-col text-base justify-center z-50 fixed top-8 left-3 right-3 p-8 rounded-md shadow-md bg-white lg:flex lg:flex-row lg:relative lg:top-0 lg:shadow-none bg-popup lg:bg-transparent lg:p-0 lg:items-center items-start"
            :class="{'flex': open, 'hidden': !open}">
            <a href="#">
              <img class="m-0 lg:hidden mb-3"
                src="../src/img/Narikaa.png" 
                width="70px"
                height="70px"
                alt="" />
            </a>
            <a class="text-lg font-semibold leading-6 mx-0 lg:mx-5 my-4 lg:my-0 relative active" href="#">Home</a>
            <!-- <a class="text-lg font-light leading-6 mx-0 lg:mx-5 my-4 lg:my-0 relative" href="#">Feature</a> -->
            <a class="text-lg font-light leading-6 mx-0 lg:mx-5 my-4 lg:my-0 relative" href="#">Payment</a>
            <a class="text-lg font-light leading-6 mx-0 lg:mx-5 my-4 lg:my-0 relative" href="#">About Us</a>
            <a class="text-lg font-light leading-6 mx-0 lg:mx-5 my-4 lg:my-0 relative" href="#">Contact</a>
            <div class="flex items-center justify-end w-full lg:hidden mt-3">
              <button class="btn-log font-light py-3 px-8 focus:outline-none">
                Log In
              </button>
              <button
                class="btn-try text-white text-lg py-3 px-8 rounded-xl focus:outline-none box-shadow font-semibold">
                Sign Up
              </button>
            </div>
            <svg @click="open = !open" class="w-6 h-6 absolute top-4 right-4 lg:hidden cursor-pointer" fill="none"
              stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </nav>
          <div class="hidden lg:inline-flex">
            <button class="btn-log inline-flex text-black font-light text-lg leading-7 py-3 px-8 focus:outline-none">
              Log In
            </button>
            <button
              class="btn-try inline-flex text-white text-lg leading-7 py-3 px-8 rounded-xl focus:outline-none box-shadow font-semibold">
              Sign Up
            </button>
          </div>
        </div>
      </header>

      <!-- Hero -->

      <div>
        <div class="md:container md:mx-auto items-center text-center">
            <h1 class="title-font  font-semibold sm:leading-tight">
                Silahkan Pilih Nominal Anda<br class="lg:block hidden" />
              </h1>
        </div>
        <div class="mx-auto flex pt-12 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
          <!-- Left Column -->
          <div
            class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">
            
            <div class="content-3-6" style="font-family: 'Poppins', sans-serif">
                <form class="mt-6" action="updatenominal.php" method="POST" x-data="{ show: false }">
                <input type="hidden" name="NomerHp" value="<?=$NomerHp;?>">
                    <div class="grid grid-cols-3 gap-4">

                        <div class="mb-1">
                            <label >
                            <div class="flex w-full px-5 py-2 mt-3 text-base font-light rounded-xl input">
                                <img src="../src/img/gocengg.png"
                                alt="" width="80px" height="80px"/>
                                <input type="radio" name="NOM" id="" value="5.000"
                                class="w-full  text-base font-light bg-medium-black-2"  />
                            </div>
                            </label>
                        </div>
                        <div class="mb-1">
                            <label >
                            <div class="flex w-full px-5 py-2 mt-3 text-base font-light rounded-xl input">
                                <img src="../src/img/cebannn.png"
                                alt="" width="80px" height="80px"/>
                                <input type="radio" name="NOM" id="" value="10.000"
                                class="w-full  text-base font-light bg-medium-black-2"  />
                            </div>
                            </label>
                        </div>
                        <div class="mb-1">
                            <label >
                            <div class="flex w-full px-5 py-2 mt-3 text-base font-light rounded-xl input">
                                <img src="../src/img/mabelas.png"
                                alt="" width="80px" height="80px"/>
                                <input type="radio" name="NOM" id="" value="15.000"
                                class="w-full  text-base font-light bg-medium-black-2"  />
                            </div>
                            </label>
                        </div>
                        <div class="mb-1">
                            <label >
                            <div class="flex w-full px-5 py-2 mt-3 text-base font-light rounded-xl input">
                                <img src="../src/img/duapuluh.png"
                                alt="" width="80px" height="80px"/>
                                <input type="radio" name="NOM" id="" value="20.000"
                                class="w-full  text-base font-light bg-medium-black-2"  />
                            </div>
                            </label>
                        </div>
                        <div class="mb-1">
                            <label >
                            <div class="flex w-full px-5 py-2 mt-3 text-base font-light rounded-xl input">
                                <img src="../src/img/gocap.png"
                                alt="" width="80px" height="80px"/>
                                <input type="radio" name="NOM" id="" value="50.000"
                                class="w-full  text-base font-light bg-medium-black-2"  />
                            </div>
                            </label>
                        </div>
                        <div class="mb-1">
                            <label >
                            <div class="flex w-full px-5 py-2 mt-3 text-base font-light rounded-xl input">
                                <img src="../src/img/cepe.png"
                                alt="" width="80px" height="80px"/>
                                <input type="radio" name="NOM" id="" value="100.000"
                                class="w-full focus:outline-none text-base font-light bg-medium-black-2"  />
                            </div>
                            </label>
                          </div>
                    </div>
                    
        
                    <button type="submit"
                      class="btn-fill block w-full px-4 py-3 mt-9 font-medium text-xl text-white transition duration-500 ease-in-out transform rounded-xl hover:bg-gray-800 hover:to-black focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">
                      Lanjut
                    </button>
                  </form>
                    </div>
                </DIV>
            
            
            
          <!-- Right Column -->
          <div class="w-full lg:w-1/2 text-center justify-center flex pr-0">
            <img id="hero"
              src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-1.png"
              alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>    
    </body>
  </html>