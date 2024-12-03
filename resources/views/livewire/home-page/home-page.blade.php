<div wire:poll.5000ms="updateData">
    {{--CATEGORIES SECTION--}}
    <section class="w-full mx-auto max-w-[1500px] ">
        <div class="flex flex-col gap-10 items-center px-5 mt-10">
            <div class="flex justify-start w-full">
                <span class="text-[#081533] text-xl dark:text-[#FCFCFC]">دسته بندي</span>
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-4 xl:grid-cols-6 gap-7  w-full justify-between  ">
                @forelse($homePageData['latestCategories'] as $category)
                    <a wire:click="getCategoryQuestions('{{$category['id']}}')"
                       class="flex gap-[10px] dark:text-[#FCFCFC] bg-[#FFFFFF] dark:bg-[#0C0D0F] dark:border-[#191B21] border border-[#F4F4F4] rounded-xl px-2 py-2 md:px-6 md:py-4 w-full items-center">
                        <div class="bg-[#ECEEFF] dark:bg-[#201A06] rounded-full p-[1px] w-[33px] h-[33px]">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path class="dark:stroke-[#A8ABB4]" d="M5.96016 15.2267L3.64017 12.9067L1.3335 15.2267"
                                      stroke="#0F0F0E"
                                      stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path class="dark:stroke-[#A8ABB4]" d="M26.04 16.7734L28.36 19.0934L30.68 16.7734"
                                      stroke="#0F0F0E"
                                      stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path class="dark:stroke-[#A8ABB4]"
                                      d="M28.3465 19.0933V16C28.3465 9.17333 22.8132 3.65332 15.9999 3.65332C12.1065 3.65332 8.62653 5.4667 6.35986 8.28003"
                                      stroke="#0F0F0E" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path class="dark:stroke-[#A8ABB4]"
                                      d="M3.65332 12.9067V16C3.65332 22.8267 9.18666 28.3467 16 28.3467C19.8933 28.3467 23.3733 26.5333 25.64 23.72"
                                      stroke="#0F0F0E" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path class="dark:stroke-[#A8ABB4]"
                                      d="M12 11.3333H17.84C19.1333 11.3333 20.1733 12.5066 20.1733 13.6666C20.1733 14.96 19.1333 16 17.84 16H12V11.3333Z"
                                      stroke="#0F0F0E" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path class="dark:stroke-[#A8ABB4]"
                                      d="M12 16H18.6667C20.1333 16 21.3333 17.04 21.3333 18.3333C21.3333 19.6267 20.1333 20.6667 18.6667 20.6667H12V16Z"
                                      stroke="#0F0F0E" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path class="dark:stroke-[#A8ABB4]" d="M15.7334 20.6667V23" stroke="#0F0F0E"
                                      stroke-width="1.5"
                                      stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path class="dark:stroke-[#A8ABB4]" d="M15.7334 9V11.3333" stroke="#0F0F0E"
                                      stroke-width="1.5"
                                      stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="text-center mx-auto text-sm md:text-base">
              {{ $category['name'] ?? '' }}
            </span>
                    </a>
                @empty
                @endforelse
            </div>
        </div>
    </section>
    {{--CATEGORIES SECTION--}}


    {{--QUESTIONS LIST SECTION--}}
    <section class="w-full mx-auto max-w-[1500px]">
        <div class="px-5 mt-16 flex flex-col md:flex-row gap-5 w-full  md:items-center">
            <span class="text-[#081533] text-xl dark:text-[#FCFCFC]">فیلتر ها</span>
            <div class="flex gap-4  flex-wrap">
                <div class="flex gap-4">
                    <div class="relative inline-block w-max">
                        <div class="relative  w-max min-w-[200px]">
                            <button id="dropdownButton"
                                    class="  w-full bg-[#ffffff] dark:bg-[#0C0D0F] border border-[#F4F4F4] dark:border-[#33353B] text-[#262626] dark:text-[#84858F] rounded-xl py-2 pl-4 pr-8 text-xs md:text-base flex justify-between items-center">
                                انتخاب گزینه‌ها
                                <svg class="w-4 h-4 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div id="dropdownMenu"
                                 class="select-dropdown absolute z-[10] w-full  hidden rounded-xl !bg-white shadow-lg">
                                <div class="p-2">
                                    <input type="text" placeholder=" جستجو کنید"
                                           class="bg-[#FFFFFF] dark:bg-black border border-[#ECEEF3] focus:border-[#2667FF] focus:ring-[#2667FF]   dark:focus:border-[#FFC700] dark:focus:ring-[#FFC700] text-[#A8ABB4] placeholder-[#A8ABB4] focus:ring-1 p-3 rounded-xl w-full ">
                                </div>
                                <div class=" overflow-y-auto max-h-[200px] ">
                                    <label
                                        class="py-[0.5rem]  px-[1rem] items-center cursor-pointer flex hover:bg-[#F3F4F6]">
                                        <input type="checkbox"
                                               class="form-checkbox h-4 w-4 text-[#262626] dark:text-[#84858F] mx-2 ">
                                        فعال
                                    </label>
                                    <label
                                        class="py-[0.5rem]  px-[1rem] items-center cursor-pointer flex hover:bg-[#F3F4F6]">
                                        <input type="checkbox"
                                               class="form-checkbox h-4 w-4 text-[#262626] dark:text-[#84858F] mx-2 ">
                                        جدید
                                    </label>
                                    <label
                                        class="py-[0.5rem]  px-[1rem] items-center cursor-pointer flex hover:bg-[#F3F4F6]">
                                        <input type="checkbox"
                                               class="form-checkbox h-4 w-4 text-[#262626] dark:text-[#84858F] mx-2 ">
                                        جدید
                                    </label>
                                    <label
                                        class="py-[0.5rem]  px-[1rem] items-center cursor-pointer flex hover:bg-[#F3F4F6]">
                                        <input type="checkbox"
                                               class="form-checkbox h-4 w-4 text-[#262626] dark:text-[#84858F] mx-2 ">
                                        جدید
                                    </label>
                                    <label
                                        class="py-[0.5rem]  px-[1rem] items-center cursor-pointer flex hover:bg-[#F3F4F6]">
                                        <input type="checkbox"
                                               class="form-checkbox h-4 w-4 text-[#262626] dark:text-[#84858F] mx-2 ">
                                        جدید
                                    </label>
                                    <label
                                        class="py-[0.5rem]  px-[1rem] items-center cursor-pointer flex hover:bg-[#F3F4F6]">
                                        <input type="checkbox"
                                               class="form-checkbox h-4 w-4 text-[#262626] dark:text-[#84858F] mx-2 ">
                                        جدید
                                    </label>
                                    <label
                                        class="py-[0.5rem]  px-[1rem] items-center cursor-pointer flex hover:bg-[#F3F4F6]">
                                        <input type="checkbox"
                                               class="form-checkbox h-4 w-4 text-[#262626] dark:text-[#84858F] mx-2 ">
                                        جدید
                                    </label>
                                </div>
                                <div class=" flex justify-center gap-2 items-center p-2">
                                    <button disabled
                                            class=" border rounded-lg w-1/2 text-center py-[10px] text-gray-400 border-gray-400">
                                        حذف
                                    </button>
                                    <button
                                        class="text-primery-blue dark:text-dark-yellow border rounded-lg w-1/2 text-center py-[10px] border-primery-blue dark:border-dark-yellow">
                                        انتخاب
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2 text-[#262626] dark:text-[#84858F]">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M7 10l5 5 5-5H7z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <div
                    class=" text-xs md:text-base bg-[#F4F4F480] dark:bg-[#34343480] w-max rounded-xl px-4 py-2 flex items-center gap-3">
                    <span class="text-[#5A5F66] dark:text-[#6A6B74]">حل نشده</span>
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="dark:storke-[#6A6B74]"
                              d="M11.7464 10.5L16.6346 5.61179C16.8666 5.38021 16.9971 5.06595 16.9974 4.73815C16.9977 4.41035 16.8677 4.09586 16.6361 3.86387C16.4045 3.63188 16.0903 3.50138 15.7625 3.50109C15.4347 3.5008 15.1202 3.63074 14.8882 3.86233L10 8.75054L5.11179 3.86233C4.8798 3.63033 4.56515 3.5 4.23706 3.5C3.90897 3.5 3.59432 3.63033 3.36233 3.86233C3.13033 4.09432 3 4.40897 3 4.73706C3 5.06515 3.13033 5.3798 3.36233 5.61179L8.25054 10.5L3.36233 15.3882C3.13033 15.6202 3 15.9349 3 16.2629C3 16.591 3.13033 16.9057 3.36233 17.1377C3.59432 17.3697 3.90897 17.5 4.23706 17.5C4.56515 17.5 4.8798 17.3697 5.11179 17.1377L10 12.2495L14.8882 17.1377C15.1202 17.3697 15.4349 17.5 15.7629 17.5C16.091 17.5 16.4057 17.3697 16.6377 17.1377C16.8697 16.9057 17 16.591 17 16.2629C17 15.9349 16.8697 15.6202 16.6377 15.3882L11.7464 10.5Z"
                              fill="#5A5F66"/>
                    </svg>
                </div>
                <div class="flex gap-4">
                    <select
                        class=" text-xs md:text-base w-max bg-[#FFFFFF] dark:bg-[#0C0D0F] border-[#F4F4F4] dark:border-[#33353B] text-[#262626] dark:text-[#84858F] rounded-xl py-2 pl-4 pr-8">
                        <option value="1" selected="">برجسب ها</option>
                        <option value="0">مقالات</option>
                    </select>

                </div>
            </div>
        </div>
        <div class="flex flex-col gap-7 md:flex-row mt-5 p-5">
            <div class="  w-full md:w-[50%] xl:w-[63%] 2xl:w-[70%] 3xl:w-[73%] flex flex-col gap-7">
                @forelse($homePageData['pinnedQuestions'] as $question)
                    <div
                        class="w-full bg-[#E9FAEF66] dark:bg-[#342A0933] rounded-xl border border-[#F4F4F4] dark:border-[#191B21]  flex flex-col gap-4">
                        <div class="w-full flex justify-between items-center p-4">
                            <div class="flex gap-3">
                <span
                    class="text-[#5A5F66] bg-[#FFFFFF] dark:bg-black border border-[#DFE2EB] dark:border-[#84858F] p-2 md:px-4 md:py-2 rounded-full text-xs md:text-base">
                   {{ $question['category_name'] ?? '' }}
                </span>
                                <div
                                    class="flex gap-3 items-center text-[#20D05C] dark:text-[#FFC700] bg-[#FFFFFF] dark:bg-black border border-[#20D05C] dark:border-[#FFC700] px-4 py-2 rounded-full text-xs md:text-base">
                                    <span>پین شده</span>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path class="dark:stroke-[#FFC700]"
                                              d="M2.77977 10.2L5.79977 13.22C7.03977 14.46 9.0531 14.46 10.2998 13.22L13.2264 10.2934C14.4664 9.05337 14.4664 7.04003 13.2264 5.79337L10.1998 2.78003C9.56643 2.1467 8.6931 1.8067 7.79977 1.85337L4.46643 2.01337C3.1331 2.07337 2.0731 3.13337 2.00643 4.46003L1.84643 7.79337C1.80643 8.69337 2.14643 9.5667 2.77977 10.2Z"
                                              stroke="#20D05C" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path class="dark:stroke-[#FFC700]"
                                              d="M6.33317 8.00002C7.25365 8.00002 7.99984 7.25383 7.99984 6.33335C7.99984 5.41288 7.25365 4.66669 6.33317 4.66669C5.4127 4.66669 4.6665 5.41288 4.6665 6.33335C4.6665 7.25383 5.4127 8.00002 6.33317 8.00002Z"
                                              stroke="#20D05C" stroke-width="1.5" stroke-linecap="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="text-[#5A5F66] dark:text-[#84858F] text-xs">
                                <time>
                                    {{ jdate($question['created_at'])->format('Y/m/d') }}
                                </time>
                            </div>
                        </div>
                        <div class="mt-[-20px]">
                            <a href="{{ route('single-question',$question['slug']) }}">
                                <h2
                                    class="text-[#0F0F0E] md:text-xl dark:text-[#FCFCFC] border-r-2 border-[#20D05C] dark:border-[#FFC700] px-4 py-2">
                                    {{ $question['title'] ?? '' }}
                                </h2>
                            </a>
                            <p class="text-[#A8ABB4] dark:text-[#84858F] mt-1 px-4 truncate hidden md:block">
                                {!! \Illuminate\Support\Str::limit(strip_tags($question['content']),60,'...') !!}
                            </p>
                        </div>
                        <div class="p-4 flex flex-wrap items-center gap-y-4">
                            <div
                                class="px-4 flex items-center gap-1 text-sm border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max">
                                <img class="w-6 h-6 rounded-full" src="{{ asset('images/profile.png') }}" alt="profile">
                                <a href="#"
                                   class="text-[#20D05C] dark:text-[#FFC700]">{{ $question['author'] ??'' }} </a>
                            </div>
                            <div
                                class="px-4 flex items-center gap-1 text-sm border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max">
                                <div>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.38672 3.44H11.6134C12.7201 3.44 13.6134 4.33334 13.6134 5.44V7.65334"
                                            stroke="#5A5F66"
                                            stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path d="M4.49339 1.33334L2.38672 3.43999L4.49339 5.54668" stroke="#5A5F66"
                                              stroke-width="1.5"
                                              stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path
                                            d="M13.6134 12.56H4.38672C3.28005 12.56 2.38672 11.6667 2.38672 10.56V8.34668"
                                            stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path d="M11.5068 14.6667L13.6135 12.56L11.5068 10.4533" stroke="#5A5F66"
                                              stroke-width="1.5"
                                              stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <a href="#"
                                   class="text-[#A8ABB4] dark:text-[#84858F]">{{ $question['answers_count'] ?? 0 }}
                                    پاسخ </a>
                            </div>
                            <div
                                class="px-4 flex items-center gap-1 text-sm border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max">
                                <div>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 1.33334V5.33334L9.33333 4.00001" stroke="#5A5F66" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7.99984 5.33333L6.6665 4" stroke="#5A5F66" stroke-width="1.5"
                                              stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path
                                            d="M4.66667 8C2 8 2 9.19333 2 10.6667V11.3333C2 13.1733 2 14.6667 5.33333 14.6667H10.6667C13.3333 14.6667 14 13.1733 14 11.3333V10.6667C14 9.19333 14 8 11.3333 8C10.6667 8 10.48 8.14 10.1333 8.4L9.45333 9.12C8.66667 9.96 7.33333 9.96 6.54 9.12L5.86667 8.4C5.52 8.14 5.33333 8 4.66667 8Z"
                                            stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path d="M3.3335 8V5.33333C3.3335 3.99333 3.3335 2.88666 5.3335 2.69333"
                                              stroke="#5A5F66"
                                              stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M12.6665 8V5.33333C12.6665 3.99333 12.6665 2.88666 10.6665 2.69333"
                                              stroke="#5A5F66"
                                              stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <a href="#"
                                   class="text-[#A8ABB4] dark:text-[#84858F] min-w-max">{{ $question['votes_count'] ?? 0 }}
                                    رای </a>
                            </div>
                            <div class="px-4 flex items-center gap-1 text-sm ">
                                <div>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.3866 7.99995C10.3866 9.31995 9.31995 10.3866 7.99995 10.3866C6.67995 10.3866 5.61328 9.31995 5.61328 7.99995C5.61328 6.67995 6.67995 5.61328 7.99995 5.61328C9.31995 5.61328 10.3866 6.67995 10.3866 7.99995Z"
                                            stroke="#6A6B74" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path
                                            d="M7.9999 13.5133C10.3532 13.5133 12.5466 12.1266 14.0732 9.72665C14.6732 8.78665 14.6732 7.20665 14.0732 6.26665C12.5466 3.86665 10.3532 2.47998 7.9999 2.47998C5.64656 2.47998 3.45323 3.86665 1.92656 6.26665C1.32656 7.20665 1.32656 8.78665 1.92656 9.72665C3.45323 12.1266 5.64656 13.5133 7.9999 13.5133Z"
                                            stroke="#6A6B74" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <a href="#" class="text-[#A8ABB4] dark:text-[#84858F]">{{ $question['views'] ?? 0 }}
                                    بازدید</a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
                @forelse($homePageData['latestQuestions'] as $questionItem)
                   @if(auth()->check())
                    {{--USER LOGGED IN--}}

                       @if(auth()->user()->level_slug == \App\Enum\LevelEnum::LEVEL_ZERO->value || auth()->user()->level_slug == \App\Enum\LevelEnum::LEVEL_ONE->value)
                        {{--USER WITHOUT ENOUGH LEVEL--}}
                                @if($questionItem['status'] == \App\Enum\QuestionStatus::PUBLISHED->value)
                                    @if($questionItem['status'] == \App\Enum\QuestionStatus::PUBLISHED->value)
                                        <div
                                            class="w-full bg-[#FFFFFF] dark:bg-[#0C0D0F] rounded-xl border border-[#F4F4F4] dark:border-[#191B21]  flex flex-col gap-4">
                                            <div class="w-full flex justify-between items-center p-4">
                                                <div class="flex gap-3">
                <span
                    class="text-[#5A5F66] bg-[#FFFFFF] dark:bg-black border border-[#DFE2EB] dark:border-[#84858F] p-2 md:px-4 md:py-2 text-xs md:text-base rounded-full">
                   {{ $questionItem['category_name'] ?? '' }}
                </span>
                                                </div>
                                                <div class="flex gap-3">
                <span
                    class="text-[#5A5F66] bg-[#FFFFFF] dark:bg-black border border-[#DFE2EB] dark:border-[#84858F] p-2 md:px-4 md:py-2 text-xs md:text-base rounded-full">
                   @if($questionItem['status'] == 0)
                        منتشر نشده
                    @else
                        منتشر شده
                    @endif
                </span>
                                                </div>
                                                <div class="text-[#5A5F66] dark:text-[#84858F] text-xs">
                                                    <time>{{ jdate($questionItem['created_at'])->format('Y/m/d') }}</time>
                                                </div>
                                            </div>
                                            <div class="mt-[-20px]">
                                                <a href="{{ route('single-question',$questionItem['slug']) }}">
                                                    <h2
                                                        class="text-[#0F0F0E] md:text-xl dark:text-[#FCFCFC] border-r-2 border-[#20D05C] dark:border-[#FFC700] px-4 py-2 ">
                                                        {{ $questionItem['title'] ?? '' }}
                                                    </h2>
                                                </a>
                                                <p class="text-[#A8ABB4] dark:text-[#84858F] mt-1 px-4 truncate hidden md:block">
                                                    {{ \Illuminate\Support\Str::limit(strip_tags($questionItem['content']),60,'...') }}
                                                </p>
                                            </div>
                                            <div class="p-4 flex items-center flex-wrap gap-y-4">
                                                <div
                                                    class="px-4 flex items-center gap-1 text-sm border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max">
                                                    <img class="w-6 h-6 rounded-full" src="{{ asset('images/profile.png') }}"
                                                         alt="profile">
                                                    <a href="#"
                                                       class="text-[#20D05C] dark:text-[#FFC700]">{{ $questionItem['author'] ?? '' }}</a>
                                                </div>
                                                <div
                                                    class="px-4 flex items-center gap-1 text-sm border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max">
                                                    <div>
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M2.38672 3.44H11.6134C12.7201 3.44 13.6134 4.33334 13.6134 5.44V7.65334"
                                                                stroke="#5A5F66"
                                                                stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                                                stroke-linejoin="round"/>
                                                            <path d="M4.49339 1.33334L2.38672 3.43999L4.49339 5.54668"
                                                                  stroke="#5A5F66"
                                                                  stroke-width="1.5"
                                                                  stroke-miterlimit="10" stroke-linecap="round"
                                                                  stroke-linejoin="round"/>
                                                            <path
                                                                d="M13.6134 12.56H4.38672C3.28005 12.56 2.38672 11.6667 2.38672 10.56V8.34668"
                                                                stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"/>
                                                            <path d="M11.5068 14.6667L13.6135 12.56L11.5068 10.4533"
                                                                  stroke="#5A5F66"
                                                                  stroke-width="1.5"
                                                                  stroke-miterlimit="10" stroke-linecap="round"
                                                                  stroke-linejoin="round"/>
                                                        </svg>
                                                    </div>
                                                    <a href="#"
                                                       class="text-[#A8ABB4] dark:text-[#84858F]">{{ $questionItem['answers_count'] ?? 0 }}
                                                        پاسخ </a>
                                                </div>
                                                <div
                                                    class="px-4 flex items-center gap-1 text-sm border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max">
                                                    <div>
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M8 1.33334V5.33334L9.33333 4.00001" stroke="#5A5F66"
                                                                  stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M7.99984 5.33333L6.6665 4" stroke="#5A5F66" stroke-width="1.5"
                                                                  stroke-linecap="round"
                                                                  stroke-linejoin="round"/>
                                                            <path
                                                                d="M4.66667 8C2 8 2 9.19333 2 10.6667V11.3333C2 13.1733 2 14.6667 5.33333 14.6667H10.6667C13.3333 14.6667 14 13.1733 14 11.3333V10.6667C14 9.19333 14 8 11.3333 8C10.6667 8 10.48 8.14 10.1333 8.4L9.45333 9.12C8.66667 9.96 7.33333 9.96 6.54 9.12L5.86667 8.4C5.52 8.14 5.33333 8 4.66667 8Z"
                                                                stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"/>
                                                            <path d="M3.3335 8V5.33333C3.3335 3.99333 3.3335 2.88666 5.3335 2.69333"
                                                                  stroke="#5A5F66"
                                                                  stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                                                  stroke-linejoin="round"/>
                                                            <path
                                                                d="M12.6665 8V5.33333C12.6665 3.99333 12.6665 2.88666 10.6665 2.69333"
                                                                stroke="#5A5F66"
                                                                stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                                                stroke-linejoin="round"/>
                                                        </svg>
                                                    </div>
                                                    <a href="#"
                                                       class="text-[#A8ABB4] dark:text-[#84858F] ">{{ $questionItem['votes_count'] ?? 0 }}
                                                        رای </a>
                                                </div>
                                                <div class="px-4 flex items-center gap-1 text-sm min-w-max">
                                                    <div>
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10.3866 7.99995C10.3866 9.31995 9.31995 10.3866 7.99995 10.3866C6.67995 10.3866 5.61328 9.31995 5.61328 7.99995C5.61328 6.67995 6.67995 5.61328 7.99995 5.61328C9.31995 5.61328 10.3866 6.67995 10.3866 7.99995Z"
                                                                stroke="#6A6B74" stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"/>
                                                            <path
                                                                d="M7.9999 13.5133C10.3532 13.5133 12.5466 12.1266 14.0732 9.72665C14.6732 8.78665 14.6732 7.20665 14.0732 6.26665C12.5466 3.86665 10.3532 2.47998 7.9999 2.47998C5.64656 2.47998 3.45323 3.86665 1.92656 6.26665C1.32656 7.20665 1.32656 8.78665 1.92656 9.72665C3.45323 12.1266 5.64656 13.5133 7.9999 13.5133Z"
                                                                stroke="#6A6B74" stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"/>
                                                        </svg>
                                                    </div>
                                                    <a href="#"
                                                       class="text-[#A8ABB4] dark:text-[#84858F]">{{ $questionItem['views'] ?? 0 }}
                                                        بازدید</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endif
                            @else
                                {{--USER WITH ENOUGH LEVEL--}}
                                <div
                                    class="w-full bg-[#FFFFFF] dark:bg-[#0C0D0F] rounded-xl border border-[#F4F4F4] dark:border-[#191B21]  flex flex-col gap-4">
                                    <div class="w-full flex justify-between items-center p-4">
                                        <div class="flex gap-3">
                <span
                    class="text-[#5A5F66] bg-[#FFFFFF] dark:bg-black border border-[#DFE2EB] dark:border-[#84858F] p-2 md:px-4 md:py-2 text-xs md:text-base rounded-full">
                   {{ $questionItem['category_name'] ?? '' }}
                </span>
                                        </div>
                                        <div class="flex gap-3" wire:click="changeQuestionStatus('{{ $questionItem['slug'] }}')">
                <span
                    class="text-[#5A5F66] bg-[#FFFFFF] dark:bg-black border border-[#DFE2EB] dark:border-[#84858F] p-2 md:px-4 md:py-2 text-xs md:text-base rounded-full">
                   @if($questionItem['status'] == 0)
                        منتشر نشده
                    @else
                        منتشر شده
                    @endif
                </span>
                                        </div>
                                        <div class="text-[#5A5F66] dark:text-[#84858F] text-xs">
                                            <time>{{ jdate($questionItem['created_at'])->format('Y/m/d') }}</time>
                                        </div>
                                    </div>
                                    <div class="mt-[-20px]">
                                        <a href="{{ route('single-question',$questionItem['slug']) }}">
                                            <h2
                                                class="text-[#0F0F0E] md:text-xl dark:text-[#FCFCFC] border-r-2 border-[#20D05C] dark:border-[#FFC700] px-4 py-2 ">
                                                {{ $questionItem['title'] ?? '' }}
                                            </h2>
                                        </a>
                                        <p class="text-[#A8ABB4] dark:text-[#84858F] mt-1 px-4 truncate hidden md:block">
                                            {{ \Illuminate\Support\Str::limit(strip_tags($questionItem['content']),60,'...') }}
                                        </p>
                                    </div>
                                    <div class="p-4 flex items-center flex-wrap gap-y-4">
                                        <div
                                            class="px-4 flex items-center gap-1 text-sm border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max">
                                            <img class="w-6 h-6 rounded-full" src="{{ asset('images/profile.png') }}"
                                                 alt="profile">
                                            <a href="#"
                                               class="text-[#20D05C] dark:text-[#FFC700]">{{ $questionItem['author'] ?? '' }}</a>
                                        </div>
                                        <div
                                            class="px-4 flex items-center gap-1 text-sm border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max">
                                            <div>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2.38672 3.44H11.6134C12.7201 3.44 13.6134 4.33334 13.6134 5.44V7.65334"
                                                        stroke="#5A5F66"
                                                        stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path d="M4.49339 1.33334L2.38672 3.43999L4.49339 5.54668"
                                                          stroke="#5A5F66"
                                                          stroke-width="1.5"
                                                          stroke-miterlimit="10" stroke-linecap="round"
                                                          stroke-linejoin="round"/>
                                                    <path
                                                        d="M13.6134 12.56H4.38672C3.28005 12.56 2.38672 11.6667 2.38672 10.56V8.34668"
                                                        stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path d="M11.5068 14.6667L13.6135 12.56L11.5068 10.4533"
                                                          stroke="#5A5F66"
                                                          stroke-width="1.5"
                                                          stroke-miterlimit="10" stroke-linecap="round"
                                                          stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                            <a href="#"
                                               class="text-[#A8ABB4] dark:text-[#84858F]">{{ $questionItem['answers_count'] ?? 0 }}
                                                پاسخ </a>
                                        </div>
                                        <div
                                            class="px-4 flex items-center gap-1 text-sm border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max">
                                            <div>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 1.33334V5.33334L9.33333 4.00001" stroke="#5A5F66"
                                                          stroke-width="1.5"
                                                          stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.99984 5.33333L6.6665 4" stroke="#5A5F66" stroke-width="1.5"
                                                          stroke-linecap="round"
                                                          stroke-linejoin="round"/>
                                                    <path
                                                        d="M4.66667 8C2 8 2 9.19333 2 10.6667V11.3333C2 13.1733 2 14.6667 5.33333 14.6667H10.6667C13.3333 14.6667 14 13.1733 14 11.3333V10.6667C14 9.19333 14 8 11.3333 8C10.6667 8 10.48 8.14 10.1333 8.4L9.45333 9.12C8.66667 9.96 7.33333 9.96 6.54 9.12L5.86667 8.4C5.52 8.14 5.33333 8 4.66667 8Z"
                                                        stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path d="M3.3335 8V5.33333C3.3335 3.99333 3.3335 2.88666 5.3335 2.69333"
                                                          stroke="#5A5F66"
                                                          stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                                          stroke-linejoin="round"/>
                                                    <path
                                                        d="M12.6665 8V5.33333C12.6665 3.99333 12.6665 2.88666 10.6665 2.69333"
                                                        stroke="#5A5F66"
                                                        stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                            <a href="#"
                                               class="text-[#A8ABB4] dark:text-[#84858F] ">{{ $questionItem['votes_count'] ?? 0 }}
                                                رای </a>
                                        </div>
                                        <div class="px-4 flex items-center gap-1 text-sm min-w-max">
                                            <div>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.3866 7.99995C10.3866 9.31995 9.31995 10.3866 7.99995 10.3866C6.67995 10.3866 5.61328 9.31995 5.61328 7.99995C5.61328 6.67995 6.67995 5.61328 7.99995 5.61328C9.31995 5.61328 10.3866 6.67995 10.3866 7.99995Z"
                                                        stroke="#6A6B74" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path
                                                        d="M7.9999 13.5133C10.3532 13.5133 12.5466 12.1266 14.0732 9.72665C14.6732 8.78665 14.6732 7.20665 14.0732 6.26665C12.5466 3.86665 10.3532 2.47998 7.9999 2.47998C5.64656 2.47998 3.45323 3.86665 1.92656 6.26665C1.32656 7.20665 1.32656 8.78665 1.92656 9.72665C3.45323 12.1266 5.64656 13.5133 7.9999 13.5133Z"
                                                        stroke="#6A6B74" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                            <a href="#"
                                               class="text-[#A8ABB4] dark:text-[#84858F]">{{ $questionItem['views'] ?? 0 }}
                                                بازدید</a>
                                        </div>
                                    </div>
                                </div>
                       @endif
                        @else
                        {{--USER NOT LOGGED IN--}}
                            @if($questionItem['status'] == \App\Enum\QuestionStatus::PUBLISHED->value)
                                <div
                                    class="w-full bg-[#FFFFFF] dark:bg-[#0C0D0F] rounded-xl border border-[#F4F4F4] dark:border-[#191B21]  flex flex-col gap-4">
                                    <div class="w-full flex justify-between items-center p-4">
                                        <div class="flex gap-3">
                <span
                    class="text-[#5A5F66] bg-[#FFFFFF] dark:bg-black border border-[#DFE2EB] dark:border-[#84858F] p-2 md:px-4 md:py-2 text-xs md:text-base rounded-full">
                   {{ $questionItem['category_name'] ?? '' }}
                </span>
                                        </div>
                                        <div class="flex gap-3">
                <span
                    class="text-[#5A5F66] bg-[#FFFFFF] dark:bg-black border border-[#DFE2EB] dark:border-[#84858F] p-2 md:px-4 md:py-2 text-xs md:text-base rounded-full">
                   @if($questionItem['status'] == 0)
                        منتشر نشده
                    @else
                        منتشر شده
                    @endif
                </span>
                                        </div>
                                        <div class="text-[#5A5F66] dark:text-[#84858F] text-xs">
                                            <time>{{ jdate($questionItem['created_at'])->format('Y/m/d') }}</time>
                                        </div>
                                    </div>
                                    <div class="mt-[-20px]">
                                        <a href="{{ route('single-question',$questionItem['slug']) }}">
                                            <h2
                                                class="text-[#0F0F0E] md:text-xl dark:text-[#FCFCFC] border-r-2 border-[#20D05C] dark:border-[#FFC700] px-4 py-2 ">
                                                {{ $questionItem['title'] ?? '' }}
                                            </h2>
                                        </a>
                                        <p class="text-[#A8ABB4] dark:text-[#84858F] mt-1 px-4 truncate hidden md:block">
                                            {{ \Illuminate\Support\Str::limit(strip_tags($questionItem['content']),60,'...') }}
                                        </p>
                                    </div>
                                    <div class="p-4 flex items-center flex-wrap gap-y-4">
                                        <div
                                            class="px-4 flex items-center gap-1 text-sm border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max">
                                            <img class="w-6 h-6 rounded-full" src="{{ asset('images/profile.png') }}"
                                                 alt="profile">
                                            <a href="#"
                                               class="text-[#20D05C] dark:text-[#FFC700]">{{ $questionItem['author'] ?? '' }}</a>
                                        </div>
                                        <div
                                            class="px-4 flex items-center gap-1 text-sm border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max">
                                            <div>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2.38672 3.44H11.6134C12.7201 3.44 13.6134 4.33334 13.6134 5.44V7.65334"
                                                        stroke="#5A5F66"
                                                        stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path d="M4.49339 1.33334L2.38672 3.43999L4.49339 5.54668"
                                                          stroke="#5A5F66"
                                                          stroke-width="1.5"
                                                          stroke-miterlimit="10" stroke-linecap="round"
                                                          stroke-linejoin="round"/>
                                                    <path
                                                        d="M13.6134 12.56H4.38672C3.28005 12.56 2.38672 11.6667 2.38672 10.56V8.34668"
                                                        stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path d="M11.5068 14.6667L13.6135 12.56L11.5068 10.4533"
                                                          stroke="#5A5F66"
                                                          stroke-width="1.5"
                                                          stroke-miterlimit="10" stroke-linecap="round"
                                                          stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                            <a href="#"
                                               class="text-[#A8ABB4] dark:text-[#84858F]">{{ $questionItem['answers_count'] ?? 0 }}
                                                پاسخ </a>
                                        </div>
                                        <div
                                            class="px-4 flex items-center gap-1 text-sm border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max">
                                            <div>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 1.33334V5.33334L9.33333 4.00001" stroke="#5A5F66"
                                                          stroke-width="1.5"
                                                          stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.99984 5.33333L6.6665 4" stroke="#5A5F66" stroke-width="1.5"
                                                          stroke-linecap="round"
                                                          stroke-linejoin="round"/>
                                                    <path
                                                        d="M4.66667 8C2 8 2 9.19333 2 10.6667V11.3333C2 13.1733 2 14.6667 5.33333 14.6667H10.6667C13.3333 14.6667 14 13.1733 14 11.3333V10.6667C14 9.19333 14 8 11.3333 8C10.6667 8 10.48 8.14 10.1333 8.4L9.45333 9.12C8.66667 9.96 7.33333 9.96 6.54 9.12L5.86667 8.4C5.52 8.14 5.33333 8 4.66667 8Z"
                                                        stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path d="M3.3335 8V5.33333C3.3335 3.99333 3.3335 2.88666 5.3335 2.69333"
                                                          stroke="#5A5F66"
                                                          stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                                          stroke-linejoin="round"/>
                                                    <path
                                                        d="M12.6665 8V5.33333C12.6665 3.99333 12.6665 2.88666 10.6665 2.69333"
                                                        stroke="#5A5F66"
                                                        stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                            <a href="#"
                                               class="text-[#A8ABB4] dark:text-[#84858F] ">{{ $questionItem['votes_count'] ?? 0 }}
                                                رای </a>
                                        </div>
                                        <div class="px-4 flex items-center gap-1 text-sm min-w-max">
                                            <div>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.3866 7.99995C10.3866 9.31995 9.31995 10.3866 7.99995 10.3866C6.67995 10.3866 5.61328 9.31995 5.61328 7.99995C5.61328 6.67995 6.67995 5.61328 7.99995 5.61328C9.31995 5.61328 10.3866 6.67995 10.3866 7.99995Z"
                                                        stroke="#6A6B74" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path
                                                        d="M7.9999 13.5133C10.3532 13.5133 12.5466 12.1266 14.0732 9.72665C14.6732 8.78665 14.6732 7.20665 14.0732 6.26665C12.5466 3.86665 10.3532 2.47998 7.9999 2.47998C5.64656 2.47998 3.45323 3.86665 1.92656 6.26665C1.32656 7.20665 1.32656 8.78665 1.92656 9.72665C3.45323 12.1266 5.64656 13.5133 7.9999 13.5133Z"
                                                        stroke="#6A6B74" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                            <a href="#"
                                               class="text-[#A8ABB4] dark:text-[#84858F]">{{ $questionItem['views'] ?? 0 }}
                                                بازدید</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                   @endif
                @if($loop->iteration == 1)
                           <div class="flex flex-col lg:flex-row gap-7 items-center">
                               <div class="bg-[#1E52CC] w-full lg:w-1/2 rounded-xl ">
                                   <div class="flex flex-col gap-5 p-7">
                                       <p class="text-white text-xl">1,432 فعال انجمن متاورس رو میشناسی؟ </p>
                                       <span class="text-[#DFE2EB] text-xs ">
                  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها
                  و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                </span>
                                       <a href="#" class="dark:bg-black bg-white rounded-xl px-5 py-3 w-max">
                                           <span class="text-[#1E52CC] text-sm">فعالان انجمن </span>
                                       </a>
                                   </div>
                               </div>
                               <div class="bg-[#1DBB53] w-full lg:w-1/2 rounded-xl ">
                                   <div class="flex flex-col gap-5 p-7">
                                       <p class="text-white text-xl">1,432 فعال انجمن متاورس رو میشناسی؟ </p>
                                       <span class="text-[#DFE2EB] text-xs ">
                  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها
                  و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                </span>
                                       <a href="#" class="dark:bg-black bg-white rounded-xl px-5 py-3 w-max">
                                           <span class="text-[#20D05C] text-sm">فعالان انجمن </span>
                                       </a>
                                   </div>
                               </div>
                           </div>
                @endif
                @empty

                @endforelse

















            </div>
            <div class="w-full md:w-[46%] xl:w-[35%] 2xl:w-[27.5%] 3xl:w-[25%] flex flex-col gap-7">
                <livewire:home-page.statistics/>
                <livewire:home-page.recommended-questions/>
                <livewire:home-page.most-liked-questions/>
            </div>

        </div>

    </section>
    {{--QUESTIONS LIST SECTION--}}



    {{--ACTIVE USERS SECTION--}}
    <section class="w-full mx-auto max-w-[1500px] mt-20 px-5">
        <livewire:home-page.active-users/>
    </section>
    {{--ACTIVE USERS SECTION--}}
</div>
