<div>
    <section class="w-full mx-auto  hidden lg:block sticky top-0" style="z-index: 2000;  left: 0px;">
        <div
            class="flex justify-between w-full bg-white dark:bg-[#0F0F0E] py-4 px-6 drop-shadow-[0_1px_3px_rgba(0,0,0,0.05)] relative ">
            <div class="w-2/3">
                <input wire:model.debounce.2000ms="query" wire:keydown="searchQuestions" type="text" id="searchInput2"
                       placeholder="سوال یا کلمه مورد نظر خود را جستجو کنید"
                       class=" mr-5 bg-[#FFFFFF] dark:bg-black border border-[#ECEEF3] focus:border-[#2667FF] focus:ring-[#2667FF]   dark:focus:border-[#FFC700] dark:focus:ring-[#FFC700] text-[#A8ABB4] placeholder-[#A8ABB4] focus:ring-1 p-3 rounded-xl max-w-sm w-full ">
            </div>
            <div id="hiddenDiv2"
                 class="suggestions bg-white dark:bg-[#0C0D0F] w-full  absolute top-20 right-0 px-7 md:px-20 duration-1000 transition-all  overflow-hidden overflow-y-scroll searchScroll">
                <div class="h-full py-5">
                    <div class="pb-7">
              <span class="text-[#A8ABB4] ">
                34 مورد یافت شد
              </span>
                    </div>
                    <div class="flex flex-col gap-7 mt-10">
                        @forelse($questions as $searchItem)
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
                                            <a href="#" class="text-[#0F0F0E] dark:text-[#FCFCFC] truncate  text-sm">
                                               {{ $searchItem->title }}
                                            </a>
                                        </div>
                                        <div class="flex truncate items-center w-full text-xs ">
                                            <a href="#"
                                               class="truncate border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max text-[#A8ABB4] dark:text-[#84858F] px-2"
                                               title="رشته های ورزشی">{{ $searchItem->category->name ?? '' }}</a>
                                            <a href="#"
                                               class="truncate border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max text-[#A8ABB4] dark:text-[#84858F] px-2"
                                               title="مهدی قربان زاده "> {{ $searchItem->user->name ?? '' }} </a>
                                            <a href="#"
                                               class="truncate border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max text-[#A8ABB4] dark:text-[#84858F] px-2 "
                                               title="13 اردیبهشت 1402">{{ jdate($searchItem->created_at)->format('Y/m/d') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <h2>هیچ موردی یافت نشد</h2>
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="w-1/3 flex justify-center ">
                <button id="openModalBtn"
                        class="bg-[#2667FF] dark:bg-[#FFC700] dark:text-black text-white py-3 w-32 rounded-[10px] text-xl 3xl:ml-[-200px]">
                    بپرس
                </button>
            </div>
        </div>

    </section>
    <!-- qa modal start -->
    <div id="modal"
         class="hidden w-full h-full bg-black/60 flex justify-center md:items-center fixed z-[2000] pt-10 md:pt-0 top-0 bottom-0 right-0  ">
        <div
            class="bg-[#FBFDFF] dark:bg-[#000000] rounded-xl w-full md:w-[90%] lg:w-[80%] 3xl:w-[70%] p-5 overflow-y-auto md:h-[95vh] relative ">
            <span id="closeModalBtn"
                  class="close absolute right-5 top-5 text-4xl cursor-pointer  w-5 h-5">&times;</span>
            <!-- دکمه بستن -->
            <div class="text-[#0F0F0E] text-lg text-center space-y-2">
                <p class="dark:text-[#FCFCFC] md:text-[32px]">سوال خود را وارد کنید</p>
                <p class="text-sm md:text-xl dark:text-[#DEDEE9]">مشخصات مربوط به سوال خود را در کادرهای زیر وارد
                    کنید. </p>
            </div>
            <div class="flex items-center gap-2  mb-4 mt-3">
                <div
                    class="rounded-full overflow-hidden bg-[#E9F0FF80] flex items-center justify-center w-[40px] aspect-square">

                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="dark:stroke-dark-yellow"
                              d="M8 7.9987C9.84095 7.9987 11.3333 6.50631 11.3333 4.66536C11.3333 2.82442 9.84095 1.33203 8 1.33203C6.15905 1.33203 4.66667 2.82442 4.66667 4.66536C4.66667 6.50631 6.15905 7.9987 8 7.9987Z"
                              stroke="#93B3FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path class="dark:stroke-dark-yellow"
                              d="M13.7267 14.6667C13.7267 12.0867 11.16 10 8 10C4.84 10 2.27334 12.0867 2.27334 14.6667"
                              stroke="#93B3FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <a href="#" class="text-primery-blue text-xs md:text-sm font-normal dark:text-dark-yellow">وارد شوید</a>
            </div>
            <div class="flex flex-col gap-[23px]">
                <div class="flex flex-col gap-2">
                    <span class="text-[#0F0F0E] text-sm dark:text-[#FCFCFC]">دسته بندی </span>
                    <select wire:model="category"
                            class="w-full md:w-1/2 bg-[#FFFFFF] dark:bg-[#0C0D0F] dark:border-[#33353B] border-[#DFE2EB]  text-[#262626] dark:text-[#84858F] rounded-xl py-[14px] pl-4 pr-8 text-xs md:text-base">
                        <option selected=""> انتخاب دسته بندی</option>
                        @forelse($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @empty
                            <option disabled selected=""> هیچ دسته بندی تعریف نشده است</option>
                        @endforelse

                    </select>
                </div>
                <div class="flex flex-col gap-2">
                    <span class="text-[#0F0F0E] text-sm dark:text-[#FCFCFC]">عنوان سوال</span>
                    <div
                        class=" bg-[#FFFFFF] dark:bg-[#0C0D0F] dark:border-[#33353B] dark:text-[#A8ABB4] border border-[#DFE2EB] w-full md:w-full  flex items-center justify-center px-4 py-1 rounded-xl">
                        <input type="text" wire:model="title"
                               class=" placeholder:text-[#A8ABB4] w-full bg-transparent ring-0 focus:ring-0 border-0 focus:border-0"
                               placeholder="دیدگاه خود را وارد کنید...">
                    </div>

                </div>
                <div class="flex flex-col gap-2">
                    <span class="text-[#0F0F0E] text-sm dark:text-[#FCFCFC]">شرح سوال</span>
                    <div
                        class="overflow-x-hidden border border-[#DFE2EB] dark:border-[#33353B] focus:border-primery-blue rounded-xl focus:dark:border-dark-yellow relative">
                        {{--                        <textarea wire:model="content" class="!relative !border-0" name="editor" id="editor"></textarea>--}}
                        <textarea cols="15" rows="15" wire:model="content"></textarea>
                    </div>
                </div>
                <div class="flex flex-col gap-2 ">
                    <span class="text-[#0F0F0E] text-sm dark:text-[#FCFCFC]">برچسب ها</span>
                    <p class="text-[#5A5F66] text-xs font-normal dark:text-[#A0A0AB]">مثال : سوالی درباره کود مناسب
                        درختان نوشته
                        اید پس
                        برچسب ها میتواند ( کود مناسب ، تغذیه درختان ، مواد غذایی برای درخت ، کود برای رشد درخت ، رشد
                        بهتر درخت ) باشد .
                    </p>
                    <!-- مولتی سلکت -->
                    <select class="my-select" multiple="multiple" style="width: 100%;">
                        <option value="1">گزینه 1</option>
                        <option value="2">گزینه 2</option>
                        <option value="3">گزینه 3</option>
                        <option value="4">گزینه 4</option>
                    </select>

                    <!-- ناحیه نمایش برچسب‌ها -->
                    <div class="tags-container"></div>
                </div>

            </div>
            <div>
                <button wire:click="createNewQuestion"
                        class="py-2 bg-primery-blue px-4 text-sm md:w-[141px] h-[48px] text-white rounded-[10px]  w-full dark:bg-dark-yellow ">
                    ثبت
                    سوال
                </button>
            </div>
        </div>
    </div>
    <!-- qa modal end -->
</div>
