<!doctype html>
<html dir="rtl" lang="fa-IR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', ' حم')</title>
    <meta name="description" content="@yield('meta_description', 'FAQHub مرجعی جامع برای یافتن پاسخ سوالات متداول در زمینه‌های مختلف از جمله فناوری، کسب‌وکار، آموزش و بیشتر.')">
    <meta name="keywords" content="@yield('meta_keywords', 'سوالات متداول, فناوری, کسب‌وکار, آموزش, FAQHub')">
    
    <link rel="canonical" href="@yield('canonical', url()->current())">
    
    <meta property="og:title" content="@yield('og_title', 'FAQHub - مرکز پاسخگویی به سوالات متداول')">
    <meta property="og:description" content="@yield('og_description', 'FAQHub مرجعی جامع برای یافتن پاسخ سوالات متداول در زمینه‌های مختلف از جمله فناوری، کسب‌وکار، آموزش و بیشتر.')">
    <meta property="og:image" content="@yield('og_image', asset('images/faq.png'))">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <link rel="icon" href="{{ asset('images/faq.png') }}" type="image/x-icon">
        <script type="application/ld+json">
            {
              "@context": "https://schema.org",
              "@graph": [
                {
                  "@type": "Organization",
                  "name": "انجمن حم",
                  "url": "https://faqhub.ir/",
                  "logo": {
                    "@type": "ImageObject",
                    "url": "https://faqhub.ir/logo.png"
                  },
                  "contactPoint": {
                    "@type": "ContactPoint",
                    "telephone": "+989127855049",
                    "contactType": "Customer Support"
                  }
                },
                {
                  "@type": "WebPage",
                  "name": "FAQHub - مرجع پرسش و پاسخ",
                  "url": "https://faqhub.ir/",
                  "description": "FAQHub مرجع پرسش و پاسخ‌های متداول در موضوعات مختلف از تکنولوژی تا کسب‌وکار."
                }
              ]
            }
            </script>
            

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "ItemList",
            "name": "دسته‌بندی‌های محبوب",
            "itemListElement": [
              {
                "@type": "ListItem",
                "position": 1,
                "name": "متاورس",
                "url": "https://faqhub.ir/categories/metaverse"
              },
              {
                "@type": "ListItem",
                "position": 2,
                "name": "تکنولوژی",
                "url": "https://faqhub.ir/categories/technology"
              },
              {
                "@type": "ListItem",
                "position": 3,
                "name": "کسب‌وکار",
                "url": "https://faqhub.ir/categories/business"
              }
            ]
          }
          
        </script>

        <script type="application/ld+json">
            {
              "@context": "https://schema.org",
              "@type": "WebSite",
              "name": "FAQHub",
              "url": "https://faqhub.ir/",
              "potentialAction": {
                "@type": "SearchAction",
                "target": "https://faqhub.ir/search?q={search_term_string}",
                "query-input": "required name=search_term_string"
              }
            }
            </script>
            
            
    @vite('resources/css/app.css')
    @if(request()->is('home'))
        <link rel="stylesheet" href="{{ asset('style/main.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
        

        <style>
            /* استایل سفارشی برای اینپوت Select2 */
            .select2-container--default .select2-selection--multiple {
                background-color: #FFFFFF;
                border: 1px solid #DFE2EB;
                border-radius: 12px;
                padding: 10px 5px 10px 5px;
                min-height: 38px;
                z-index: 50000;
                font-size: 14px;
            }

            .dark .select2-container--default .select2-selection--multiple {
                background-color: #0C0D0F;
                border-color: #33353B;
            }

            .select2-container--default .select2-selection--multiple .select2-selection__choice {
                background-color: #007bff;
                color: white;
                border: 1px solid #0056b3;
                border-radius: 4px;
                padding: 2px 0px 2px 16px;
                margin: 2px;
                z-index: 50000;
                font-size: 14px;
            }

            .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
                color: #ffffff;
                margin-left: 5px;
                cursor: pointer;
                z-index: 50000;
                font-size: 14px;
            }

            /* استایل سفارشی برای برچسب‌ها */
            .tags-container {
                margin-top: 10px;
                z-index: 50000;
            }

            .tag {
                display: inline-block;
                background-color: #F4F4F480;
                color: #5A5F66;
                font-size: 14px;
                padding: 4px 8px 4px 8px;
                margin: 5px;
                border-radius: 8px;
                z-index: 50000;
            }

            .dark .tag {
                background-color: #3434344D;
            }

            .tag .remove-tag {
                margin-right: 10px;
                cursor: pointer;
                color: #5A5F66;

                z-index: 50000;
            }
        </style>

    @else
        {{-- <link rel="stylesheet" href="{{ asset('style/main.css') }}"> --}}
        <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
        <style>
            .ck.ck-toolbar{
                border: none !important ;
            }
            .cke_inner {
                background-color: #ffffff;
                border-radius: 10px;
            }
            .cke_editable {
                background-color: #ffffff;
                color: #000000;
                border-radius: 10px;
            }
            .cke_toolgroup a.cke_button_off, .cke_toolgroup a.cke_button {
                color: #000000;
            }
            .cke_toolgroup {
                border-color: #cccccc;
                border-radius: 10px;
            }
            .cke_path {
                color: #000000;
            }
            .cke_dialog, .cke_dialog .cke_dialog_contents, .cke_dialog_body {
                background-color: #f5f5f5;
            }
            .cke_dialog_title {
                color: #000000;
            }
            .cke_dialog_ui_vbox_child, .cke_dialog_ui_input_text {
                background-color: #ffffff;
                color: #000000;
            }
            /* Dark theme for CKEditor */
            .dark-mode .cke_top, .dark .cke_bottom {
                background-color: #2e2e2e !important;
                color: #ffffff !important;
                border-radius: 10px;
            }
            .dark .cke_inner {
                background-color: #1e1e1e !important;
                border-radius: 10px;
            }
            .dark .cke_editable {
                background-color: #1e1e1e !important;
                color: #ffffff !important;
                border-radius: 10px;
            }
            .toolbar {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 20px;

            }

            .dark-toggle {
                cursor: pointer;
                background-color: #333;
                color: white;
                padding: 5px 10px;
                border: none;
                border-radius: 5px;
            }

            .dark-toggle:hover {
                background-color: #444;
            }

            .dark-toggle:focus {
                outline: none;
                border-width: 0px;
            }

            .dark {
                background-color: #121212;
                color: #e0e0e0;
            }

            .dark .ck-editor__editable_inline {
                background-color: #1e1e1e;
                color: #e0e0e0;
            }
            .ck.ck-content {
                height: 200px;


            }

            .dark .ck.ck-content {
                background-color: #1e1e1e;
                color: #e0e0e0;
                border-width: 0px !important;


            }
            .ck.ck-toolbar {
                padding-top: 20px!important;
                padding-bottom: 20px!important;

            }

            .dark .ck.ck-toolbar {
                background-color: #333;
                border-color: #444;

            }

            .dark .ck.ck-button {
                color: #e0e0e0;
            }

            .dark .ck.ck-button:hover,
            .dark .ck.ck-button:focus {
                background-color: #444;
            }

            .dark .dark-toggle {
                background-color: #e0e0e0;
                color: #333;
            }
            .cke_editable {
                border: none !important;

            }
            .ck.ck-editor__main>.ck-editor__editable:not(.ck-focused){
                border-bottom: none !important;
                border-right: none !important;
                border-left: none !important;
                border-color: #DFE2EB !important;



            }
            .ck.ck-editor__editable.ck-focused:not(.ck-editor__nested-editable){
                border-bottom: none !important;
                border-right: none !important;
                border-left: none !important;
                border-color: #DFE2EB !important;
                box-shadow:none !important;

            }
        </style>
        <style>
            .overflow-y-auto::-webkit-scrollbar-track {
                border-radius: 10px;
                background-color: transparent;
                overflow-x: auto;

            }

            .overflow-y-auto::-webkit-scrollbar {
                width: 6px;
                height: 6px;
                background-color: transparent;
                overflow-x: auto;
                border-radius: 10px;
            }

            .overflow-y-auto::-webkit-scrollbar-thumb {
                border-radius: 10px;

                background-color: #DFE2EB;
                overflow-x: auto;
            }

            /* Dark mode scrollbar styles */

            .dark .overflow-y-auto::-webkit-scrollbar-thumb {
                background-color: #191B21;
            }



            .searchScroll::-webkit-scrollbar-track {
                border-radius: 10px;
                background-color: #F4F4F4;
                overflow-x: auto;
                padding: 5px;
            }

            .dark .searchScroll::-webkit-scrollbar-track {
                border-radius: 10px;
                background-color: black;
                overflow-x: auto;
                width: 20px;
                padding: 5px;
            }

            .searchScroll::-webkit-scrollbar {
                width: 6px;
                height: 6px;
                background-color: #F4F4F4;
                overflow-x: auto;
                border-radius: 10px;
                padding: 5px;

            }


            .searchScroll::-webkit-scrollbar-thumb {
                border-radius: 10px;
                padding: 5px;
                background-color: #DFE2EB;
                overflow-x: auto;
            }

            /* Dark mode scrollbar styles */

            .dark .searchScroll::-webkit-scrollbar-thumb {
                background-color: #191B21;
            }
        </style>
    @endif
    @livewireStyles
</head>

<body class="bg-[#fbfdff] dark:bg-black w-full font-azarMehr font-bold">
<!-- start nav -->
<header>
    <!-- start head mobile nav -->
    <nav class=" w-full m-0 p-0 fixed top-0 z-[1000]  lg:hidden">
        <div class="w-full  items-center flex justify-between p-4 bg-white  dark:bg-[#0F0F0E] ">
            <div
                class="flex justify-between items-center w-full fixed right-0 top-0 lg:relative  bg-white dark:bg-[#0F0F0E] lg:bg-transparent lg:p-0 px-5 py-4">
                <!-- start open btn nav -->
                <div class="flex items-center gap-5">
                    <div class="w-max  p-3 rounded-full cursor-pointer flex" onclick="openNav2()">
                        <svg class="lg:hidden dark:fill-white" width="30" height="22" viewBox="0 0 30 22" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path class="dark:fill-white" fill-rule="evenodd" clip-rule="evenodd"
                                  d="M0 1.375C0 0.615608 0.6296 0 1.40625 0H28.5938C29.3704 0 30 0.615608 30 1.375C30 2.13439 29.3704 2.75 28.5938 2.75H1.40625C0.6296 2.75 0 2.13439 0 1.375ZM0 11C0 10.2406 0.6296 9.625 1.40625 9.625H28.5938C29.3704 9.625 30 10.2406 30 11C30 11.7594 29.3704 12.375 28.5938 12.375H1.40625C0.6296 12.375 0 11.7594 0 11ZM0 20.625C0 19.8656 0.6296 19.25 1.40625 19.25H28.5938C29.3704 19.25 30 19.8656 30 20.625C30 21.3844 29.3704 22 28.5938 22H1.40625C0.6296 22 0 21.3844 0 20.625Z"
                                  fill="#0713EF"/>
                        </svg>
                    </div>
                    <!-- end open btn nav -->
                    <div class="w-max lg:w-auto flex justify-center items-center">
                        <a href="#"><img src="{{ asset('images/faq-irpsc 1.png') }}" alt="faq"></a>
                    </div>
                </div>
                <div class="w-1/3 flex justify-center">
                    <button
                        class="bg-[#2667FF] dark:bg-[#FFC700] dark:text-black text-white py-3 w-32 rounded-[10px] text-xl ">
                        بپرس
                    </button>
                </div>

            </div>

        </div>
    </nav>
    <div class="lg:hidden mt-28">
        <div class="w-full  px-7">
            <input type="text" id="searchInput" placeholder="سوال یا کلمه مورد نظر خود را جستجو کنید"
                   class="bg-[#FFFFFF] dark:bg-black border border-[#ECEEF3] focus:border-[#2667FF] focus:ring-[#2667FF]   dark:focus:border-[#FFC700] dark:focus:ring-[#FFC700] text-[#A8ABB4] placeholder-[#A8ABB4] focus:ring-1 p-3 rounded-xl w-full ">
        </div>
        <div id="hiddenDiv"
             class="bg-white dark:bg-[#0C0D0F] w-full hidden  absolute top-44 right-0 px-7 md:px-20 duration-1000 transition-all z-10 overflow-hidden ">
            <div class="overflow-y-scroll searchScroll h-full py-5">
                <div class="pb-7">
            <span class="text-[#A8ABB4] ">
              34 مورد یافت شد
            </span>
                </div>
                <div class="flex flex-col gap-7 border-b pb-10">
                    <div class="w-full">
                        <div class="flex  gap-3 overflow-x-hidden h-max w-full">
                            <div class="w-16">
                                <img src="{{ asset('images/deryn-macey-kPLccIMtS8E-unsplash.jpg') }}" alt="img"
                                     class="rounded-lg w-full aspect-square">
                            </div>
                            <div class="flex flex-col justify-between items-center  w-[75%] py-2 ">
                                <div class="flex truncate items-center w-full text-xs ">
                                    <a href="#" class="text-[#0F0F0E] dark:text-[#FCFCFC] truncate  text-sm">مبلغ بیعانه
                                        برای اجاره خانه
                                        بر چه مبنایی تعیین میشه؟</a>
                                </div>
                                <div class="flex truncate items-center w-full text-xs ">
                                    <a href="#"
                                       class="truncate border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max text-[#A8ABB4] dark:text-[#84858F] px-2"
                                       title="رشته های ورزشی">رشته های ورزشی</a>
                                    <a href="#"
                                       class="truncate border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max text-[#A8ABB4] dark:text-[#84858F] px-2"
                                       title="مهدی قربان زاده "> مهدی قربان زاده </a>
                                    <a href="#"
                                       class="truncate border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max text-[#A8ABB4] dark:text-[#84858F] px-2 "
                                       title="13 اردیبهشت 1402">13 اردیبهشت 1402</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="flex  gap-3 overflow-x-hidden h-max w-full">

                            <div class="w-16">
                                <img src="{{ asset('images/deryn-macey-kPLccIMtS8E-unsplash.jpg') }}" alt="img"
                                     class="rounded-lg w-full aspect-square">

                            </div>
                            <div class="flex flex-col justify-between items-center  w-[75%] py-2 ">
                                <div class="flex truncate items-center w-full text-xs ">
                                    <a href="#" class="text-[#0F0F0E] dark:text-[#FCFCFC] truncate  text-sm">مبلغ بیعانه
                                        برای اجاره خانه
                                        بر چه مبنایی تعیین میشه؟</a>
                                </div>
                                <div class="flex truncate items-center w-full text-xs ">
                                    <a href="#"
                                       class="truncate border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max text-[#A8ABB4] dark:text-[#84858F] px-2"
                                       title="رشته های ورزشی">رشته های ورزشی</a>
                                    <a href="#"
                                       class="truncate border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max text-[#A8ABB4] dark:text-[#84858F] px-2"
                                       title="مهدی قربان زاده "> مهدی قربان زاده </a>
                                    <a href="#"
                                       class="truncate border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max text-[#A8ABB4] dark:text-[#84858F] px-2 "
                                       title="13 اردیبهشت 1402">13 اردیبهشت 1402</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-7 mt-10">
                    <div class="w-full">
                        <div class="flex  gap-4 overflow-x-hidden h-max w-full">
                            <div class="flex justify-center items-start">
                                <svg width="50" height="50" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path class="dark:stroke-[#FFC700]"
                                          d="M17 18.43H13L8.54999 21.39C7.88999 21.83 7 21.36 7 20.56V18.43C4 18.43 2 16.43 2 13.43V7.42993C2 4.42993 4 2.42993 7 2.42993H17C20 2.42993 22 4.42993 22 7.42993V13.43C22 16.43 20 18.43 17 18.43Z"
                                          stroke="#20D05C" stroke-width="1.5" stroke-miterlimit="10"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path class="dark:stroke-[#FFC700]"
                                          d="M12.0001 11.36V11.15C12.0001 10.47 12.4201 10.11 12.8401 9.82001C13.2501 9.54001 13.66 9.18002 13.66 8.52002C13.66 7.60002 12.9201 6.85999 12.0001 6.85999C11.0801 6.85999 10.3401 7.60002 10.3401 8.52002"
                                          stroke="#20D05C" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path class="dark:stroke-[#FFC700]" d="M11.9955 13.75H12.0045" stroke="#20D05C"
                                          stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="flex flex-col justify-between items-center  w-[75%]   gap-1">
                                <div class="flex truncate items-center w-full text-xs ">
                                    <a href="#" class="text-[#0F0F0E] dark:text-[#FCFCFC] truncate  text-sm"> استاندارد
                                        متاورس چیست و
                                        استاندارد های متاورس را چه کسانی با چه هدفی عنوان خواهند کرد ؟
                                    </a>
                                </div>
                                <div class="flex truncate items-center w-full text-xs ">
                                    <a href="#"
                                       class="truncate border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max text-[#A8ABB4] dark:text-[#84858F] px-2"
                                       title="رشته های ورزشی">رشته های ورزشی</a>
                                    <a href="#"
                                       class="truncate border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max text-[#A8ABB4] dark:text-[#84858F] px-2"
                                       title="مهدی قربان زاده "> مهدی قربان زاده </a>
                                    <a href="#"
                                       class="truncate border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max text-[#A8ABB4] dark:text-[#84858F] px-2 "
                                       title="13 اردیبهشت 1402">13 اردیبهشت 1402</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="flex  gap-4 overflow-x-hidden h-max w-full">

                            <div class="flex justify-center items-start">
                                <svg width="50" height="50" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path class="dark:storke-[#FFC700]"
                                          d="M17 18.43H13L8.54999 21.39C7.88999 21.83 7 21.36 7 20.56V18.43C4 18.43 2 16.43 2 13.43V7.42993C2 4.42993 4 2.42993 7 2.42993H17C20 2.42993 22 4.42993 22 7.42993V13.43C22 16.43 20 18.43 17 18.43Z"
                                          stroke="#20D05C" stroke-width="1.5" stroke-miterlimit="10"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path class="dark:stroke-[#FFC700]"
                                          d="M12.0001 11.36V11.15C12.0001 10.47 12.4201 10.11 12.8401 9.82001C13.2501 9.54001 13.66 9.18002 13.66 8.52002C13.66 7.60002 12.9201 6.85999 12.0001 6.85999C11.0801 6.85999 10.3401 7.60002 10.3401 8.52002"
                                          stroke="#20D05C" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path class="dark:storke-[#FFC700]" d="M11.9955 13.75H12.0045" stroke="#20D05C"
                                          stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                            </div>
                            <div class="flex flex-col justify-between items-center  w-[75%]   gap-1">
                                <div class="flex truncate items-center w-full text-xs ">
                                    <a href="#" class="text-[#0F0F0E] dark:text-[#FCFCFC] truncate  text-sm">مبلغ بیعانه
                                        برای اجاره خانه
                                        بر چه مبنایی تعیین میشه؟</a>
                                </div>
                                <div class="flex truncate items-center w-full text-xs ">
                                    <a href="#"
                                       class="truncate border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max text-[#A8ABB4] dark:text-[#84858F] px-2"
                                       title="رشته های ورزشی">رشته های ورزشی</a>
                                    <a href="#"
                                       class="truncate border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max text-[#A8ABB4] dark:text-[#84858F] px-2"
                                       title="مهدی قربان زاده "> مهدی قربان زاده </a>
                                    <a href="#"
                                       class="truncate border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max text-[#A8ABB4] dark:text-[#84858F] px-2 "
                                       title="13 اردیبهشت 1402">13 اردیبهشت 1402</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="flex  gap-4 overflow-x-hidden h-max w-full">

                            <div class="flex justify-center items-start">
                                <svg width="50" height="50" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path class="dark:storke-[#FFC700]"
                                          d="M17 18.43H13L8.54999 21.39C7.88999 21.83 7 21.36 7 20.56V18.43C4 18.43 2 16.43 2 13.43V7.42993C2 4.42993 4 2.42993 7 2.42993H17C20 2.42993 22 4.42993 22 7.42993V13.43C22 16.43 20 18.43 17 18.43Z"
                                          stroke="#20D05C" stroke-width="1.5" stroke-miterlimit="10"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path class="dark:stroke-[#FFC700]"
                                          d="M12.0001 11.36V11.15C12.0001 10.47 12.4201 10.11 12.8401 9.82001C13.2501 9.54001 13.66 9.18002 13.66 8.52002C13.66 7.60002 12.9201 6.85999 12.0001 6.85999C11.0801 6.85999 10.3401 7.60002 10.3401 8.52002"
                                          stroke="#20D05C" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path class="dark:storke-[#FFC700]" d="M11.9955 13.75H12.0045" stroke="#20D05C"
                                          stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                            </div>
                            <div class="flex flex-col justify-between items-center  w-[75%]   gap-1">
                                <div class="flex truncate items-center w-full text-xs ">
                                    <a href="#" class="text-[#0F0F0E] dark:text-[#FCFCFC] truncate  text-sm">مبلغ بیعانه
                                        برای اجاره خانه
                                        بر چه مبنایی تعیین میشه؟</a>
                                </div>
                                <div class="flex truncate items-center w-full text-xs ">
                                    <a href="#"
                                       class="truncate border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max text-[#A8ABB4] dark:text-[#84858F] px-2"
                                       title="رشته های ورزشی">رشته های ورزشی</a>
                                    <a href="#"
                                       class="truncate border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max text-[#A8ABB4] dark:text-[#84858F] px-2"
                                       title="مهدی قربان زاده "> مهدی قربان زاده </a>
                                    <a href="#"
                                       class="truncate border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max text-[#A8ABB4] dark:text-[#84858F] px-2 "
                                       title="13 اردیبهشت 1402">13 اردیبهشت 1402</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="flex  gap-4 overflow-x-hidden h-max w-full">

                            <div class="flex justify-center items-start">
                                <svg width="50" height="50" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path class="dark:storke-[#FFC700]"
                                          d="M17 18.43H13L8.54999 21.39C7.88999 21.83 7 21.36 7 20.56V18.43C4 18.43 2 16.43 2 13.43V7.42993C2 4.42993 4 2.42993 7 2.42993H17C20 2.42993 22 4.42993 22 7.42993V13.43C22 16.43 20 18.43 17 18.43Z"
                                          stroke="#20D05C" stroke-width="1.5" stroke-miterlimit="10"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path class="dark:stroke-[#FFC700]"
                                          d="M12.0001 11.36V11.15C12.0001 10.47 12.4201 10.11 12.8401 9.82001C13.2501 9.54001 13.66 9.18002 13.66 8.52002C13.66 7.60002 12.9201 6.85999 12.0001 6.85999C11.0801 6.85999 10.3401 7.60002 10.3401 8.52002"
                                          stroke="#20D05C" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path class="dark:storke-[#FFC700]" d="M11.9955 13.75H12.0045" stroke="#20D05C"
                                          stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                            </div>
                            <div class="flex flex-col justify-between items-center  w-[75%]   gap-1">
                                <div class="flex truncate items-center w-full text-xs ">
                                    <a href="#" class="text-[#0F0F0E] dark:text-[#FCFCFC] truncate  text-sm">مبلغ بیعانه
                                        برای اجاره خانه
                                        بر چه مبنایی تعیین میشه؟</a>
                                </div>
                                <div class="flex truncate items-center w-full text-xs ">
                                    <a href="#"
                                       class="truncate border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max text-[#A8ABB4] dark:text-[#84858F] px-2"
                                       title="رشته های ورزشی">رشته های ورزشی</a>
                                    <a href="#"
                                       class="truncate border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max text-[#A8ABB4] dark:text-[#84858F] px-2"
                                       title="مهدی قربان زاده "> مهدی قربان زاده </a>
                                    <a href="#"
                                       class="truncate border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max text-[#A8ABB4] dark:text-[#84858F] px-2 "
                                       title="13 اردیبهشت 1402">13 اردیبهشت 1402</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end head mobile nav -->

    <!-- Start active  navigation -->
    <div id="main-nav" class="sidenav  !z-[5000]">
        <!-- start opened nav -->
        <div id="open00" dir="ltr"
             class="hidden bg-white  dark:bg-[#0F0F0E]  p-4  relative  pr-0 h-full !overflow-y-scroll scrollbar !z-[5000]">
            <nav dir="rtl" class="w-full   space-y-6  relative">
                <div class="space-y-6 ">
                    <!-- strat head icon RGB -->
                    <div
                        class=" gap-5  my-2 w-full  items-center flex justify-between px-2  bg-white  dark:bg-[#0F0F0E] ">
                        <div class="flex items-center gap-1">
                            <a href="#"><img src="{{ asset('icon/3dmeta55.png') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('icon/3ddmetaa143.png') }}" alt=""></a>
                        </div>

                        <!-- start close btn nav -->
                        <div>
                            <div id="close-nav-btn"
                                 class="bg-slate-200 dark:bg-[#090909] w-10 h-10 p-3 rounded-full cursor-pointer flex items-center justify-center  "
                                 onclick="closeNav2()">
                                <img src="{{ asset('icon/aroowww.svg') }}" alt="" class="w-[60%] ">
                            </div>
                        </div>
                        <!-- end close btn nav -->
                    </div>
                    <!-- end head icon RGB -->
                    <div>
                        <ul class="tree">
                            <li class="flex flex-col gap-4">
                                <input type="checkbox" id="c1" class="peer"/>
                                <label
                                    class="px-[20px] py-4 w-full rounded-[10px]  text-[#282828]  font-bold  dark:text-[#868B90]   peer-checked:[&>div>svg]:rotate-180 transition-[3s] flex  items-center"
                                    for="c1">
                                    <div class="flex w-full items-center justify-between gap-5">
                                        <div class="flex items-center gap-4">
                                            <img src="{{ asset('icon/profile3d.png') }}" alt=""
                                                 class="w-7 h-7  rounded-full">
                                            <a href="#">نام یوزرنیم</a>
                                        </div>
                                        <svg class="transition-[5s] duration-300" width="15" height="9"
                                             viewBox="0 0 15 9" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path class="dark:stroke-[#2C2F32]" d="M14 1L7.5 7.5L1 0.999999"
                                                  stroke="black" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>

                                </label>
                                <ul>
                                    <li>
                                        <label class="text-[#868B90] before:text-transparent tree_label">
                                            <div class="flex justify-between items-center">
                                                <img src="{{ asset('icon/Union.svg') }}" alt="" class="w-7 h-7  ">
                                                @if(auth()->check())
                                                    <a href="#">{{ auth()->user()->name }} || {{ auth()->user()->level_slug }}</a>
                                                @else
                                                    <a href="#">پروفایل</a>
                                                @endif

                                            </div>
                                        </label>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div
                        class="flex gap-5 items-center select-none  border-b-2 pb-5 border-[#EFEFEF]   dark:border-[#868B90] text-[#868B90] px-6"
                        for="c2">
                        <img src="{{ asset('icon/bag.svg') }}" alt="" class="w-7 h-7  ">
                        <p> سبد خرید</p>
                        <div
                            class="bg-[#FF5722] w-5 h-5 rounded-full text-white text-xs font-bold flex justify-center items-center">
                            <span>2</span>
                        </div>
                    </div>
                </div>
                <div class=" h-auto  lg:h-[30vh] xl:h-[35vh] 2xl:h-[45vh] 3xl:h-[53vh] overflow-auto  space-y-3">
                    <div class="pr-[20PX] p-[14px] flex items-center gap-4">
                        <img src="{{ asset('icon/3dmetaicon.svg') }}" alt="" class="w-7 h-7  ">
                        <a href="#" class="text-[#868B90]"> سه بعدی متا</a>
                    </div>
                    <div>
                        <ul class="tree ">
                            <li class="flex flex-col gap-3  ">
                                <input type="checkbox" id="c2" class="peer"/>
                                <label
                                    class="px-[20px] py-[14px] w-full rounded-[10px] text-[#868B90]  peer-checked:text-white head_label peer-checked:bg-[#000BEE] dark:peer-checked:bg-[#C2008C] peer-checked:[&>div>svg]:rotate-180  peer-checked:[&>div>svg>path]:stroke-white"
                                    for="c2">
                                    <div class="flex w-full justify-between items-center select-none" for="c2">
                                        <div class="flex gap-4 items-center">
                                            <img src="{{ asset('icon/Group1000002695.svg') }}" alt="" class="w-7 h-7  ">
                                            <p>بانک مدل های سه بعدی</p>
                                        </div>
                                        <svg class="transition-[5s] duration-300" width="15" height="9"
                                             viewBox="0 0 15 9" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path class="stroke-[#868B90]" d="M14 1L7.5 7.5L1 0.999999" stroke="black"
                                                  stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </label>
                                <ul>
                                    <li class="">
                                        <input type="checkbox" id="c3" class="peer"/>
                                        <label for="c3"
                                               class="tree_label w-full text-[#868B90] peer-checked:text-[#000BEE] dark:peer-checked:text-white peer-checked:bg-[#ECF4FE] dark:peer-checked:bg-[#C2008C]/30">
                                            مدل سه بعدی</label>
                                        <ul>
                                            <div
                                                class="flex flex-col text-sm text-[#000BEE] font-bold gap-5 p-3 pr-[20PX] dark:text-[#868B90]">
                                                <a href="#">آواتار</a>
                                                <a href="#">پکیج آواتار
                                                </a>
                                                <a href="#">سه بعدی
                                                </a>
                                                <a href="#">پکیج سه بعدی</a>
                                            </div>

                                        </ul>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="c4" class="peer"/>
                                        <label for="c4"
                                               class="tree_label w-full text-[#868B90] peer-checked:text-[#000BEE] dark:peer-checked:text-white peer-checked:bg-[#ECF4FE] dark:peer-checked:bg-[#C2008C]/30">آیکون
                                            ها </label>
                                        <ul>
                                            <div
                                                class="flex flex-col text-sm text-[#000BEE] font-bold gap-5 p-3 pr-[20PX] dark:text-[#868B90]">
                                                <a href="#">لورم</a>
                                                <a href="#">لورم</a>
                                                <a href="#">لورم</a>
                                                <a href="#">لورم</a>
                                            </div>
                                        </ul>

                                    </li>
                                    <li>
                                        <input type="checkbox" id="c5" class="peer"/>
                                        <label for="c5"
                                               class="tree_label w-full text-[#868B90] peer-checked:text-[#000BEE] dark:peer-checked:text-white peer-checked:bg-[#ECF4FE] dark:peer-checked:bg-[#C2008C]/30">
                                            وکتور و ایلوستریتور </label>
                                        <ul>
                                            <div
                                                class="flex flex-col text-sm text-[#000BEE] font-bold gap-5 p-3 pr-[20PX] dark:text-[#868B90]">
                                                <a href="#">لورم</a>
                                                <a href="#">لورم</a>
                                                <a href="#">لورم</a>
                                                <a href="#">لورم</a>
                                            </div>
                                        </ul>

                                    </li>
                                    <li>
                                        <input type="checkbox" id="c6" class="peer"/>
                                        <label for="c6"
                                               class="tree_label w-full text-[#868B90] peer-checked:text-[#000BEE] dark:peer-checked:text-white peer-checked:bg-[#ECF4FE] dark:peer-checked:bg-[#C2008C]/30">
                                            انیمیشن Lotties </label>
                                        <ul>
                                            <div
                                                class="flex flex-col text-sm text-[#000BEE] font-bold gap-5 p-3 pr-[20PX] dark:text-[#868B90]  ">
                                                <a href="#">لورم</a>
                                                <a href="#">لورم</a>
                                                <a href="#">لورم</a>
                                                <a href="#">لورم</a>
                                            </div>
                                        </ul>

                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="pr-[20PX] p-[14px] flex items-center gap-4">
                        <img src="{{ asset('icon/amoozesh.svg') }}" alt="" class="w-7 h-7  ">
                        <a href="#" class="text-[#868B90]">آموزش </a>
                    </div>
                    <div class="pr-[20PX] p-[14px] flex items-center gap-4">
                        <img src="{{ asset('icon/sefareshicon.svg') }}" alt="" class="w-7 h-7  ">
                        <a href="#" class="text-[#868B90]">ثبت سفارش</a>
                    </div>
                    <div class="pr-[20PX] p-[14px] flex items-center gap-4">
                        <img src="{{ asset('icon/contactus.svg') }}" alt="" class="w-7 h-7  ">
                        <a href="#" class="text-[#868B90]"> تماس با ما</a>
                    </div>
                    <div class="pr-[20PX] p-[14px] flex items-center gap-4">
                        <img src="{{ asset('icon/abuotus.svg') }}" alt="" class="w-7 h-7  ">
                        <a href="#" class="text-[#868B90]"> درباره ما</a>
                    </div>
                    <div>
                        <ul class="tree">
                            <li class="flex flex-col gap-3">
                                <input type="checkbox" id="c11" class="peer"/>
                                <label
                                    class="px-[20px] py-4 w-full rounded-[10px] text-[#868B90]  peer-checked:text-white head_label peer-checked:bg-[#000BEE] dark:peer-checked:bg-[#C2008C] peer-checked:[&>div>svg]:rotate-180 peer-checked:[&>div>svg>path]:stroke-white"
                                    for="c11">
                                    <div class="flex w-full justify-between items-center select-none" for="c2">
                                        <div class="flex items-center gap-4">
                                            <img src="{{ asset('icon/zaban.svg') }}" alt="" class="w-7 h-7  ">
                                            <p> زبان </p>
                                        </div>
                                        <svg class="transition-[5s] duration-300" width="15" height="9"
                                             viewBox="0 0 15 9" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path class=" stroke-[#868B90]" d="M14 1L7.5 7.5L1 0.999999" stroke="black"
                                                  stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </label>
                                <ul>
                                    <div id="zaban"
                                         class="flex flex-col text-sm text-[#000BEE] font-bold gap-5 p-3 pr-[20PX] dark:text-[#868B90]">
                                        <a href="#">فارسی</a>
                                        <a href="#"> انگیلیسی</a>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    class="space-y-6  lg:absolute bottom-0  w-full h-auto lg:h-1/5 2xl:h-1/6 bg-white  dark:bg-[#0F0F0E] pb-10 lg:pb-1">
                    <div
                        class=" w-full flex justify-between items-center px-6 p-[10px] font-bold text-white dark:text-black bg-[#2667FF] dark:bg-[#FFC700] rounded-[10px] ">
                        <img src="{{ asset('icon/login3d.svg') }}" alt="" class="w-7 h-7">

                        @if(auth()->check())
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit">خروج</button>
                            </form>

                        @else
                            <a href="{{ route('login') }}" class="font-bold">ورود</a>
                        @endif
                    </div>
                    <div class="pt-5 border-t-2 border-[#EFEFEF]   dark:border-[#868B90] ">
                        <div class=" flex rounded-full w-full p-[6px] bg-[#F4F4F4] dark:bg-[#090909] ">
                            <button
                                class="enable-dark-mode bg-transparent dark:bg-[#0F0F0E] flex justify-center p-1 rounded-full w-1/2  ">
                                <div>
                                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                        <path class="fill-slate-400 dark:fill-white"
                                              d="M6.2 1C3.2 1.8 1 4.6 1 7.9 1 11.8 4.2 15 8.1 15c3.3 0 6-2.2 6.9-5.2C9.7 11.2 4.8 6.3 6.2 1Z"/>
                                        <path class="fill-slate-500 dark:fill-white"
                                              d="M12.5 5a.625.625 0 0 1-.625-.625 1.252 1.252 0 0 0-1.25-1.25.625.625 0 1 1 0-1.25 1.252 1.252 0 0 0 1.25-1.25.625.625 0 1 1 1.25 0c.001.69.56 1.249 1.25 1.25a.625.625 0 1 1 0 1.25c-.69.001-1.249.56-1.25 1.25A.625.625 0 0 1 12.5 5Z"/>
                                    </svg>
                                </div>
                            </button>
                            <button
                                class="disable-dark-mode  bg-[#FCFCFC] dark:bg-transparent flex justify-center p-1 rounded-full w-1/2 shadow-[0_0_6px_0_rgba(0,0,0,0.1)] dark:shadow-none">
                                <div for="light-switch">
                                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                        <path class="fill-slate-300 dark:fill-white"
                                              d="M7 0h2v2H7zM12.88 1.637l1.414 1.415-1.415 1.413-1.413-1.414zM14 7h2v2h-2zM12.95 14.433l-1.414-1.413 1.413-1.415 1.415 1.414zM7 14h2v2H7zM2.98 14.364l-1.413-1.415 1.414-1.414 1.414 1.415zM0 7h2v2H0zM3.05 1.706 4.463 3.12 3.05 4.535 1.636 3.12z"/>
                                        <path class="fill-slate-400 dark:fill-white"
                                              d="M8 4C5.8 4 4 5.8 4 8s1.8 4 4 4 4-1.8 4-4-1.8-4-4-4Z"/>
                                    </svg>
                                </div>
                            </button>
                        </div>

                    </div>
                </div>
            </nav>
        </div>
        <!-- End opened nav -->
        <!-- start closed nav -->
        <div dir="ltr" id="close00" class=" h-full">
            <nav dir="rtl"
                 class="bg-[#FCFCFC] dark:bg-[#0F0F0E]  pr-0 space-y-9 flex justify-start items-center flex-col py-6 h-full relative">
                <div
                    class="w-full space-y-9 flex flex-col items-center justify-center border-b-2 border-[#EFEFEF] px-3  dark:border-[#868B90] pb-6  lg:h-[40%] xl:[40%] 2xl:h-[35%] 3xl:h-[30%]">
                    <!-- start open btn nav -->
                    <div id="open-nav-btn" class="items-center w-7 h-7" onclick="openNav2()">
                        <svg class=" dark:fill-white" width="30" height="22" viewBox="0 0 30 22" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path class="dark:fill-white" fill-rule="evenodd" clip-rule="evenodd"
                                  d="M0 1.375C0 0.615608 0.6296 0 1.40625 0H28.5938C29.3704 0 30 0.615608 30 1.375C30 2.13439 29.3704 2.75 28.5938 2.75H1.40625C0.6296 2.75 0 2.13439 0 1.375ZM0 11C0 10.2406 0.6296 9.625 1.40625 9.625H28.5938C29.3704 9.625 30 10.2406 30 11C30 11.7594 29.3704 12.375 28.5938 12.375H1.40625C0.6296 12.375 0 11.7594 0 11ZM0 20.625C0 19.8656 0.6296 19.25 1.40625 19.25H28.5938C29.3704 19.25 30 19.8656 30 20.625C30 21.3844 29.3704 22 28.5938 22H1.40625C0.6296 22 0 21.3844 0 20.625Z"
                                  fill="#0713EF"/>
                        </svg>
                    </div>
                    <!-- end open btn nav -->
                    <div class="w-7  flex items-center justify-center">
                        <a href="#" class="w-full">
                            <img src="{{ asset('icon/3ddmetaa143.png') }}" alt="" class="w-full">
                        </a>
                    </div>
                    <div class="w-7 flex items-center justify-center">
                        <a href="#" class="w-full">
                            <img src="{{ asset('icon/profile3d.png') }}" alt="" class="w-full border rounded-full">
                        </a>
                    </div>
                    <div class="w-7 flex items-center justify-center">
                        <a href="#" class="w-full">
                            <img src="{{ asset('icon/bag.svg') }}" alt="" class="w-full">
                        </a>
                    </div>
                </div>
                <div
                    class="flex  items-center flex-col gap-11 h-auto pr-4 lg:h-[30%] xl:h-[35%] 2xl:h-[50%] 3xl:h-[55%] !overflow-y-scroll scrollbar">
                    <div class=" w-7 h-7  ">
                        <a href="#" class="w-full">
                            <img src="{{ asset('icon/3dmetaicon.svg') }}" alt="" class="w-full">
                        </a>
                    </div>
                    <div class="w-7 h-7">
                        <a href="#" class="w-full">
                            <img src="{{ asset('icon/Group1000002695.svg') }}" alt="" class="w-full">
                        </a>
                    </div>
                    <div class="w-7 h-7 ">
                        <a href="#" class="w-full">
                            <img src="{{ asset('icon/amoozesh.svg') }}" alt="" class="w-full h-full">
                        </a>
                    </div>
                    <div class="w-7 h-7">
                        <a href="#" class="w-full">
                            <img src="{{ asset('icon/sefareshicon.svg') }}" alt="" class="w-full">
                        </a>
                    </div>
                    <div class="w-7 h-7">
                        <a href="#" class="w-full">
                            <img src="{{ asset('icon/contactus.svg') }}" alt="" class="w-full">
                        </a>
                    </div>
                    <div class="w-7 h-7">
                        <a href="#" class="w-full">
                            <img src="{{ asset('icon/abuotus.svg') }}" alt="" class="w-full">
                        </a>
                    </div>
                    <div class="w-7 h-7">
                        <a href="#" class="w-full">
                            <img src="{{ asset('icon/zaban.svg') }}" alt="" class="w-full">
                        </a>
                    </div>
                </div>
                <div
                    class="w-full space-y-6 px-3   h-auto lg:h-[30%] xl:h-[26%] 2xl:h-[15%] bg-white  dark:bg-[#0F0F0E] pb-5">
                    <div class="w-10  justify-center items-center">
                        <a href="#"
                           class=" flex w-full p-1 justify-center items-center  aspect-square font-bold text-white  bg-[#2667FF] dark:bg-[#FFC700] rounded-[10px] ">
                            <img src="{{ asset('icon/login3d.svg') }}" alt="" class="w-[70%]">
                        </a>
                    </div>
                    <div class="pt-6 border-t-2 border-[#EFEFEF] flex justify-center   dark:border-[#868B90]">
                        <div class=" flex rounded-full w-max p-[6px] bg-[#F4F4F4] dark:bg-[#090909]">
                            <button
                                class="enable-dark-mode2 dark:hidden bg-transparent dark:bg-[#0F0F0E] flex justify-center items-center p-1 rounded-full w-5 h-5  ">
                                <div>
                                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                        <path class="fill-slate-400 dark:fill-white"
                                              d="M6.2 1C3.2 1.8 1 4.6 1 7.9 1 11.8 4.2 15 8.1 15c3.3 0 6-2.2 6.9-5.2C9.7 11.2 4.8 6.3 6.2 1Z"/>
                                        <path class="fill-slate-500 dark:fill-white"
                                              d="M12.5 5a.625.625 0 0 1-.625-.625 1.252 1.252 0 0 0-1.25-1.25.625.625 0 1 1 0-1.25 1.252 1.252 0 0 0 1.25-1.25.625.625 0 1 1 1.25 0c.001.69.56 1.249 1.25 1.25a.625.625 0 1 1 0 1.25c-.69.001-1.249.56-1.25 1.25A.625.625 0 0 1 12.5 5Z"/>
                                    </svg>
                                </div>
                            </button>
                            <button
                                class="disable-dark-mode2 hidden   bg-[#FCFCFC] dark:bg-transparent dark:flex justify-center items-center p-1 rounded-full w-5 h-5  shadow-[0_0_6px_0_rgba(0,0,0,0.1)] dark:shadow-none">
                                <div for="light-switch">
                                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                        <path class="fill-slate-300 dark:fill-white"
                                              d="M7 0h2v2H7zM12.88 1.637l1.414 1.415-1.415 1.413-1.413-1.414zM14 7h2v2h-2zM12.95 14.433l-1.414-1.413 1.413-1.415 1.415 1.414zM7 14h2v2H7zM2.98 14.364l-1.413-1.415 1.414-1.414 1.414 1.415zM0 7h2v2H0zM3.05 1.706 4.463 3.12 3.05 4.535 1.636 3.12z"/>
                                        <path class="fill-slate-400 dark:fill-white"
                                              d="M8 4C5.8 4 4 5.8 4 8s1.8 4 4 4 4-1.8 4-4-1.8-4-4-4Z"/>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>

                </div>
            </nav>
        </div>
        <!-- end closed nav -->
    </div>
    <!-- End nsvigation -->
</header>
<!-- end nav -->
<main class="w-full main-content-smallNav relative">
    <livewire:header.header/>

    {{ $slot }}

    <footer class="px-5 w-full max-w-[1500px] mx-auto mt-32">
        <div class="flex-wrap flex justify-center items-ctener gap-2 mx-auto " style="margin-bottom:50px ;">
            <a href="https://irpsc.com" style="width:55px ;" target="_blank " title="وزارت تعاون کار و رفاه اجتماعی">
                <img src="https://irpsc.com/img-icon/vezarat.png">
            </a>
            <a class="active" href="#" target="_blank " style="width:55px ;" title="نماد اعتماد الکترونیک">
                <img src="https://irpsc.com/img-icon/enamad.png">
                <i class="vi vi-chat"></i>
            </a>
            <a href="https://irpsc.com" target="_blank " style="width:55px ;" title="ثبت اسناد و املاک کشور">
                <img src="https://irpsc.com/img-icon/qazaii.png">
            </a>
            <a href="https://video.irpsc.com" target="_blank " style="width:55px ;" title="مرکز آموزش ویدئویی">
                <img src="https://irpsc.com/img-icon/video.png">
            </a>
            <a href="https://faq.irpsc.com" target="_blank " style="width:55px ;" title="انجمن پرسش و پاسخ">
                <img src="https://irpsc.com/img-icon/faq.png">
            </a>
            <a href="https://Shop.irpsc.com" target="_blank " style="width:55px ;" title="فروشگاه ملی">
                <img src="https://irpsc.com/img-icon/shop.png">
            </a>
            <a href="https://supply.irpsc.com" target="_blank " style="width:55px ;" title="تولید کنندگان">
                <img src="https://irpsc.com/img-icon/supply.png">
            </a>
            <a href="https://crm.irpsc.com" target="_blank " style="width:55px ;" title="مدیریت بر مدیران">
                <img src="https://irpsc.com/img-icon/crm.png">
            </a>
            <a href="https://target.irpsc.com" target="_blank " style="width:55px ;" title="نگرش ملی">
                <img src="https://irpsc.com/img-icon/target.png">
            </a>
            <a href="https://animal.irpsc.com" target="_blank " style="width:55px ;" title="حیوانات و دامپزشک">
                <img src="https://irpsc.com/img-icon/animal.png">
            </a>
            <a href="https://irpsc.com" target="_blank " style="width:55px ;" title="رسانه ملی">
                <img src="https://irpsc.com/img-icon/irpsc.png">
            </a>
            <a href="https://meta.irpsc.com" target="_blank " style="width:55px ;" title="اخبار متا">
                <img src="https://irpsc.com/img-icon/meta.png">
            </a>
            <a href="https://uni.irpsc.com" target="_blank " style="width:55px ;" title="دانشگاه متاورس">
                <img src="https://irpsc.com/img-icon/uni.png">
            </a>
            <a href="https://crm.irpsc.com/knowledgebase" target="_blank " style="width:55px ;"
               title="استخدام | دانش محور">
                <img src="https://irpsc.com/img-icon/knowledge.png">
            </a>
            <a href="https://sale.irpsc.com" target="_blank " style="width:55px ;" title="فروشگاه مجازی حم">
                <img src="https://irpsc.com/img-icon/sale.png">
            </a>
            <a href="https://ad.irpsc.com" target="_blank " style="width:55px ;" title="تبلیغات ملی">
                <img src="https://irpsc.com/img-icon/ad.png">
            </a>
            <a href="https://nft.irpsc.com" target="_blank " style="width:55px ;" title="بازار NFT">
                <img src="https://irpsc.com/img-icon/nft.png">
            </a>
            <a href="https://rgb.irpsc.com" target="_blank " style="width:55px ;" title="متاورس رنگ">
                <img src="https://irpsc.com/img-icon/rgb.png">
            </a>
            <a href="https://rgb.irpsc.com" target="_blank " style="width:55px ;" title="سه بعدی متا">
                <img src="https://irpsc.com/img-icon/3d.gif">
            </a>
            <a title="خانه" style="width:55px ;">
                <img src="https://irpsc.com/img-icon/home-soon.png">
            </a>
        </div>
        <div class="flex flex-col md:flex-row gap-10">
            <div
                class="bg-[#2667FF] dark:bg-[#002886] w-full md:w-[55%] rounded-[32px] text-white p-10 flex flex-col lg:flex-row gap-y-7 justify-between items-center">
                <div class="space-y-3  lg:w-1/2">
                    <p class="m-0 p-0 font-bold text-3xl ">
                        ثبت سفارش
                    </p>
                    <p>
                        طراحی مدل سه بعدی خود را به ما واگذار کنید
                    </p>
                </div>
                <div class="font-bold ">
                    <a href="#" class="rounded-3xl bg-white dark:bg-[#DAE5FF]/75 py-3 px-5 text-[#2667FF]">ثبت سفارش و
                        نمونه
                        کار ها</a>
                </div>
            </div>
            <div
                class="bg-[#20D05C] dark:bg-[#02501D] w-full md:w-[45%] rounded-[32px] text-white p-10 flex flex-col md:flex-row gap-y-7 justify-between items-center">
                <div class="space-y-3">
                    <p class="m-0 p-0 font-bold text-3xl">
                        پشتیبانی 24 ساعته
                    </p>
                    <p>
                        پیام خود را در واتس آپ ارسال کنید
                    </p>
                </div>
                <div class="font-bold">
                    <a href="#"
                       class="rounded-3xl bg-white dark:bg-[#DCFFE8]/75 py-3 px-5 text-[#20D05C] dark:text-[#02501D]">09028689789</a>
                </div>
            </div>
        </div>
        <div class="bg-[#c6d9fc] dark:bg-[#001448] w-full  p-5 rounded-t-[32px] mt-10 gap-6 flex flex-col">
            <div class="flex flex-col md:flex-row gap-5 md:gap-14 w-max mx-auto">
                <a href="#" class="text-stone-800 dark:text-[#ffffff] font-bold">بانک مدل 3 بعدی</a>
                <a href="#" class="text-stone-800 dark:text-[#ffffff] font-bold">آموزش</a>
                <a href="#" class="text-stone-800 dark:text-[#ffffff] font-bold">سیاست و حریم خصوصی</a>
            </div>
            <div class="flex flex-wrap justify-center gap-5 mx-auto ">
                <div>
                    <a href="#">
                        <img src="{{ asset('images/youtub.png') }}" alt="">
                    </a>
                </div>
                <div>
                    <a href="whatsapp://send?text=http://+98 933 785 0424">
                        <img src="{{ asset('images/whatsapp.png') }}" alt="">
                    </a>
                </div>
                <div>
                    <a href="https://discord.gg/GnwvaDB7"
                       class="bg-gray-200 w-[38px] h-[38px] rounded-full flex justify-center items-center">
                        <img src="{{ asset('images/discord-icon-svgrepo-com.png') }}" alt="" class="w-6 h-6  mt-1">
                    </a>
                </div>
                <div>
                    <a href="https://www.instagram.com/3dmeta.irpsc?igsh=ZzRhNXVndXZldXYy">
                        <img src="{{ asset('images/istagram.png') }}" alt="">
                    </a>
                </div>
                <div>
                    <a href="mailto:dmeta.irpsc@gmail.com"
                       class="rounded-full bg-gray-500 p-2 w-max flex justify-center items-center">
                        <img src="{{ asset('images/sms.png') }}" alt="">
                    </a>
                </div>
                <div>
                    <a href="https://pin.it/7C5mYf6Q6"
                       class="rounded-full bg-[#E70000] p-2 px-[10px] w-max flex justify-center items-center">
                        <img src="{{ asset('images/Vector (9).png') }}" alt="">
                    </a>
                </div>
            </div>
            <div>
                <p class="text-sm text-[#393939] text-center m-0  p-0">
                    تمام حقوق مادی و معنوی مطالب و طرح قالب برای این سایت میباشد.
                </p>
            </div>
        </div>
    </footer>
</main>

@if(request()->is('home'))

    <script>


        ClassicEditor
            .create(document.querySelector('#editor'), {
                toolbar: {
                    items: [
                        'heading',
                        '|',
                        'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote',
                        '|',
                        'insertTable', 'mediaEmbed',
                        '|',
                        'undo', 'redo', 'alignment', 'fontColor', 'fontBackgroundColor', 'highlight',
                        'codeBlock', 'horizontalLine', 'htmlEmbed', 'imageUpload', 'indent', 'outdent',
                        'specialCharacters', 'strikethrough', 'subscript', 'superscript', 'underline'
                    ]
                },

                language: 'fa',
                table: {
                    contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells']
                },
                licenseKey: '',
            })
            .then(editor => {
                // Ensure the editor adapts to the dark mode
                if (isDarkMode) {
                    editor.ui.view.editable.element.classList.add('dark-mode');
                }

                // Listen for changes in dark mode state and update the editor accordingly
                const observer = new MutationObserver(mutations => {
                    mutations.forEach(mutation => {
                        if (mutation.attributeName === 'class') {
                            if (document.documentElement.classList.contains('dark')) {
                                editor.ui.view.editable.element.classList.add('dark-mode');
                            } else {
                                editor.ui.view.editable.element.classList.remove('dark-mode');
                            }
                        }
                    });
                });

                observer.observe(document.documentElement, { attributes: true });

            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script src="{{ asset('script/preline.js') }}"></script>
    <script src="{{ asset('script/script.js') }}"></script>
    <script src="{{ asset('script/custom.js') }}"></script>
@else
    <script>


        ClassicEditor
            .create(document.querySelector('#editor'), {
                toolbar: {
                    items: [
                        'heading',
                        '|',
                        'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote',
                        '|',
                        'insertTable', 'mediaEmbed',
                        '|',
                        'undo', 'redo', 'alignment', 'fontColor', 'fontBackgroundColor', 'highlight',
                        'codeBlock', 'horizontalLine', 'htmlEmbed', 'imageUpload', 'indent', 'outdent',
                        'specialCharacters', 'strikethrough', 'subscript', 'superscript', 'underline'
                    ]
                },

                language: 'fa',
                table: {
                    contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells']
                },
                licenseKey: '',
            })
            .then(editor => {
                // Ensure the editor adapts to the dark mode
                if (isDarkMode) {
                    editor.ui.view.editable.element.classList.add('dark-mode');
                }

                // Listen for changes in dark mode state and update the editor accordingly
                const observer = new MutationObserver(mutations => {
                    mutations.forEach(mutation => {
                        if (mutation.attributeName === 'class') {
                            if (document.documentElement.classList.contains('dark')) {
                                editor.ui.view.editable.element.classList.add('dark-mode');
                            } else {
                                editor.ui.view.editable.element.classList.remove('dark-mode');
                            }
                        }
                    });
                });

                observer.observe(document.documentElement, { attributes: true });

            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script src="{{ asset('script/custom.js') }}"></script>
    <script src="{{ asset('script/preline.js') }}"></script>
    <script src="{{ asset('script/script.js') }}"></script>

@endif
@livewireScripts
</body>


</html>
