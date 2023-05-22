<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Nikko Landing Page</title>
    <link rel="stylesheet" href="css/main.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      
  </head>
  
<body class="relative">


<nav class="px-[20px] md:px-[160px] pt-[39px] absolute top-0 left-0 right-0 hidden md:block">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
    <a href="./index.php">
        <img src="./img/navbar-logo.svg" class="" alt="Flowbite Logo" />
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="mobile-navbar-btn inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-8 md:mt-0">
        <li>
          <a href="#" class="text-[#003F6C] hover:text-[#002743] montserrat font-semibold text-[16px] leading-[19.5px] dropdown-list">Product</a>
          <ul class="dropdown-list-body">
            <li><a href="./invoices.php">Invoices</a></li>
            <li><a href="./bookkeeping.php">Bookkeeping</a></li>
          </ul>
        </li>
        <li>
          <a href="./pricing.php" class="text-[#003F6C] hover:text-[#002743] montserrat font-semibold text-[16px] leading-[19.5px]">Pricing</a>
        </li>
        <li>
          <a href="./why_us.php" class="text-[#003F6C] hover:text-[#002743] montserrat font-semibold text-[16px] leading-[19.5px]">Why us</a>
        </li>
        <li>
          <a href="./blog.php" class="text-[#003F6C] hover:text-[#002743] montserrat font-semibold text-[16px] leading-[19.5px]">Blog</a>
        </li>
        <li>
          <a href="./contact.php" class="text-[#003F6C] hover:text-[#002743] montserrat font-semibold text-[16px] leading-[19.5px]">Contact</a>
        </li>
      </ul>
    </div>
    <div class="hidden md:block">
      <a href="" class="montserrat font-semibold text-[16px] leading-[19.5px] text-[#818B95] mr-[23px] hover:text-[#0D7AFF]">Log in</a>
      <a href="" class="montserrat font-semibold text-[16px] leading-[19.5px] text-[#0D7AFF] border border-[#0D7AFF] px-[22px] py-[16px] rounded-[10px] hover:bg-[#0D7AFF] hover:text-white">Get started</a>
    </div>
  </div>
</nav>


<nav class="mobile-menu py-[22px] px-[20px] md:hidden absolute left-0 right-0 z-40 top-0">
  <div class="flex justify-between items-center"> 
    <button class="menu-toggle-btn">
      <svg class="menu-inactive-icon" width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect width="20" height="2" fill="#003F6C"/>
      <rect y="8" width="20" height="2" fill="#003F6C"/>
      <rect y="16" width="20" height="2" fill="#003F6C"/>
      </svg>
      
      <svg class="menu-active-icon hidden" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M1.8188 19.6687L0.331299 18.1812L8.51255 9.99999L0.331299 1.81874L1.8188 0.331238L10 8.51249L18.1813 0.331238L19.6688 1.81874L11.4875 9.99999L19.6688 18.1812L18.1813 19.6687L10 11.4875L1.8188 19.6687Z" fill="#003F6C"/>
      </svg>

    </button> 
    <a href="./index.php">
        <img class="h-[27px]" src="./img/navbar-logo.svg" class="" alt="Flowbite Logo" />
    </a>
    <a href="" class="montserrat text-[#818B95] font-semibold text-[16px] leading-[19.5px] hover:text-[#003F6C]">Log in</a>
  </div>
  <div class="mobile-menu-body hidden pt-[32px]">
    <a href="./contact.php" class="dropdown-menu-mobile-btn text-[#003F6C] hover:text-[#002743] montserrat font-semibold text-[20px] leading-[24.4px]">Product
      <svg class="ml-[8px] inline" width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M5.5 8L0 0H11L5.5 8Z" fill="#003F6C"/>
      </svg>
    </a>
    <div class="hidden dropdown-menu-mobile-list">
      <a href="./invoices.php" class="text-[#003F6C] pl-[20px] mt-[19px] block hover:text-[#002743] montserrat font-semibold text-[20px] leading-[24.4px]">Invoices</a>
      <a href="./bookkeeping.php" class="text-[#003F6C] pl-[20px] mt-[19px] block hover:text-[#002743] montserrat font-semibold text-[20px] leading-[24.4px]">Bookkeeping</a>
    </div>
    <hr class="border-[#D9D9D9] mt-[18px] mb-[16px]"/>
    <a href="./pricing.php" class="text-[#003F6C] hover:text-[#002743] montserrat font-semibold text-[20px] leading-[24.4px]">Pricing</a>
    <hr class="border-[#D9D9D9] mt-[18px] mb-[16px]"/>
    <a href="./why_us.php" class="text-[#003F6C] hover:text-[#002743] montserrat font-semibold text-[20px] leading-[24.4px]">Why us</a>
    <hr class="border-[#D9D9D9] mt-[18px] mb-[16px]"/>
    <a href="./blog.php" class="text-[#003F6C] hover:text-[#002743] montserrat font-semibold text-[20px] leading-[24.4px]">Blog</a>
    <hr class="border-[#D9D9D9] mt-[18px] mb-[16px]"/>
    <a href="./contact.php" class="text-[#003F6C] hover:text-[#002743] montserrat font-semibold text-[20px] leading-[24.4px]">Contact</a>
    <hr class="border-[#D9D9D9] mt-[18px] mb-[16px]"/>

    <a href="" class="mt-[34px] border-[2px] py-[17px] w-full  border-[#0D7AFF] text-[#0D7AFF] hover:bg-[#0D7AFF] hover:text-white rounded-[10px] inline-flex justify-center items-center montserrat font-semibold text-[16px] leading-[19.5px] ">Get started</a>

  </div>
</nav>