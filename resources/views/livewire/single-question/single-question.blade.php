@section('title', $question['data']['title'] ?? 'عنوان سوال - انجمن پرسش و پاسخ')

@section('meta_description', Str::limit(strip_tags($question['data']['content'] ?? 'توضیح سوال'), 160))

@section('meta_keywords', "پرسش و پاسخ, " . ($question['data']['category_name'] ?? '') . ", " . ($question['data']['title'] ?? ''))

@section('canonical', url()->current())

{{-- OpenGraph --}}
@section('og_title', $question['data']['title'] )
@section('og_description', Str::limit(strip_tags($question['data']['content'] ?? 'توضیح سوال'), 160))
@section('og_image', asset('images/question-thumbnail.jpg')) 
@section('og_url', url()->current())
@section('og_type', 'article')

<div>
   
    <section class="w-full mx-auto max-w-[1500px] mt-10 px-5">
        <div class="flex flex-col gap-6 p-4">
            <div class="w-full grid grid-cols-2  justify-between items-center gap-y-4">
                <div class="flex  gap-3 w-max">
                    <div class="flex gap-3">
                        <div class="w-[48px] aspect-square overflow-hidden rounded-full ">
                            <img src="{{ asset('images/5ddef01d39f33b711ad7da10be137285.jpg') }}" alt="" class="w-full">
                        </div>
                        <div class="flex flex-col justify-between">
                            <a href="#" class="text-[#0F0F0E] dark:text-[#FCFCFC]">
                                {{ $question['data']['user']['name'] ?? '' }}
                            </a>
                            <span
                                class="text-primery-blue dark:text-dark-yellow text-sm">امتیاز : {{ $question['data']['user']['score'] ?? '' }}</span>
                        </div>
                    </div>
                    <div class="flex gap-3 text-center justify-center">
              <span
                  class="flex justify-center items-center text-[#5A5F66] bg-[#FFFFFF] dark:bg-black border border-[#DFE2EB] dark:border-[#84858F] p-2 md:px-4 md:py-2 rounded-full text-xs md:text-base"><span>
                  {{ $question['data']['category_name'] ?? '' }}
                </span></span>

                    </div>
                </div>
                <div class="hs-dropdown  md:hidden w-auto flex justify-end" id="drop1">
                    <svg class="hs-dropdown-toggle cursor-pointer " id="hs-dropdown-with-dividers" width="24"
                         height="24"
                         viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="dark:fill-slate-50"
                              d="M12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM12 4C10.9 4 10 4.9 10 6C10 7.1 10.9 8 12 8C13.1 8 14 7.1 14 6C14 4.9 13.1 4 12 4ZM12 16C10.9 16 10 16.9 10 18C10 19.1 10.9 20 12 20C13.1 20 14 19.1 14 18C14 16.9 13.1 16 12 16Z"
                              fill="#343434"/>
                    </svg>
                    <div
                        class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-[170px] bg-white shadow-md rounded-lg p-2 mt-2 divide-y divide-gray-200 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700 px-5 "
                        aria-labelledby="hs-dropdown-with-dividers">
                        <div
                            class="p-4  flex items-center gap-1 text-sm min-w-max border-b border-[#ECEEF3] dark:border-[#191B21]">
                            <div>

                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.1665 15.3588H10.8332L7.12483 17.8254C6.57483 18.1921 5.83317 17.8004 5.83317 17.1338V15.3588C3.33317 15.3588 1.6665 13.6921 1.6665 11.1921V6.19206C1.6665 3.69206 3.33317 2.02539 5.83317 2.02539H14.1665C16.6665 2.02539 18.3332 3.69206 18.3332 6.19206V11.1921C18.3332 13.6921 16.6665 15.3588 14.1665 15.3588Z"
                                        stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M10 9.4668V9.29183C10 8.72516 10.35 8.42515 10.7 8.18348C11.0417 7.95015 11.3833 7.65016 11.3833 7.10016C11.3833 6.33349 10.7667 5.7168 10 5.7168C9.23334 5.7168 8.6167 6.33349 8.6167 7.10016"
                                        stroke="#5A5F66" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path d="M9.99641 11.4577H10.0039" stroke="#5A5F66" stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>

                            </div>
                            <a href="#" class="text-[#A8ABB4] dark:text-[#84858F]">گزارش</a>
                        </div>
                        <div
                            class="p-4  flex items-center gap-1 text-sm min-w-max border-b border-[#ECEEF3] dark:border-[#191B21]">
                            <div>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.05 3.00002L4.20829 10.2417C3.94996 10.5167 3.69996 11.0584 3.64996 11.4334L3.34162 14.1334C3.23329 15.1084 3.93329 15.775 4.89996 15.6084L7.58329 15.15C7.95829 15.0834 8.48329 14.8084 8.74162 14.525L15.5833 7.28335C16.7666 6.03335 17.3 4.60835 15.4583 2.86668C13.625 1.14168 12.2333 1.75002 11.05 3.00002Z"
                                        stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path d="M9.9082 4.20801C10.2665 6.50801 12.1332 8.26634 14.4499 8.49967"
                                          stroke="#5A5F66"
                                          stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path d="M2.5 18.333H17.5" stroke="#5A5F66" stroke-width="1.5"
                                          stroke-miterlimit="10"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <a href="#" class="text-[#A8ABB4] dark:text-[#84858F]">ویرایش</a>
                        </div>
                        <div
                            class="p-4 flex items-center gap-1 text-sm min-w-max border-b border-[#ECEEF3] dark:border-[#191B21]">
                            <div>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.47483 12.7502L7.24983 16.5252C8.79983 18.0752 11.3165 18.0752 12.8748 16.5252L16.5332 12.8668C18.0832 11.3168 18.0832 8.80016 16.5332 7.24183L12.7498 3.47516C11.9582 2.6835 10.8665 2.2585 9.74983 2.31683L5.58316 2.51683C3.9165 2.59183 2.5915 3.91683 2.50816 5.57516L2.30816 9.74183C2.25816 10.8668 2.68316 11.9585 3.47483 12.7502Z"
                                        stroke="#5A5F66" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M7.91634 9.99967C9.06693 9.99967 9.99967 9.06693 9.99967 7.91634C9.99967 6.76575 9.06693 5.83301 7.91634 5.83301C6.76575 5.83301 5.83301 6.76575 5.83301 7.91634C5.83301 9.06693 6.76575 9.99967 7.91634 9.99967Z"
                                        stroke="#5A5F66" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <a href="#" class="text-[#A8ABB4] dark:text-[#84858F]">پین کردن </a>
                        </div>
                        <div
                            class="p-4 flex items-center gap-1 text-sm min-w-max border-b border-[#ECEEF3] dark:border-[#191B21]">
                            <div>

                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.5 4.98307C14.725 4.70807 11.9333 4.56641 9.15 4.56641C7.5 4.56641 5.85 4.64974 4.2 4.81641L2.5 4.98307"
                                        stroke="#EB5757" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M7.0835 4.14102L7.26683 3.04935C7.40016 2.25768 7.50016 1.66602 8.9085 1.66602H11.0918C12.5002 1.66602 12.6085 2.29102 12.7335 3.05768L12.9168 4.14102"
                                        stroke="#EB5757" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M15.7082 7.61719L15.1665 16.0089C15.0748 17.3172 14.9998 18.3339 12.6748 18.3339H7.32484C4.99984 18.3339 4.92484 17.3172 4.83317 16.0089L4.2915 7.61719"
                                        stroke="#EB5757" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path d="M8.6084 13.75H11.3834" stroke="#EB5757" stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path d="M7.9165 10.416H12.0832" stroke="#EB5757" stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>

                            </div>
                            <a href="#" class="text-[#EB5757] "> حذف </a>
                        </div>
                    </div>
                </div>
                <div class="text-[#5A5F66] dark:text-[#84858F] text-xs w-full md:text-left">
                    <time> {{ jdate($question['data']['created_at'])->format('Y/m/d') ?? '' }} </time>
                </div>
            </div>
            <div>
                <h1 class="text-[#0F0F0E] dark:text-[#FCFCFC] md:text-[32px]">
                    {{ $question['data']['title'] ?? '' }}
                </h1>
            </div>
            <div class="flex w-full justify-between flex-wrap gap-y-4">
                <div class=" flex items-center flex-wrap gap-y-4">
                    <div
                        class="px-4 flex items-center gap-1 text-sm border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max">
                        @if($question['data']['is_solved'] == 1)
                            <a href="#" class="text-[#20D05C] dark:text-[#FFC700]"># حل شده </a>
                        @else
                            <a href="#" class="text-[#20D05C] dark:text-[#FFC700]"># حل نشده </a>
                        @endif

                    </div>
                    <div
                        class="px-4 flex items-center gap-1 text-sm border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max">
                        <div>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.38672 3.44H11.6134C12.7201 3.44 13.6134 4.33334 13.6134 5.44V7.65334"
                                      stroke="#5A5F66"
                                      stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                      stroke-linejoin="round"></path>
                                <path d="M4.49339 1.33334L2.38672 3.43999L4.49339 5.54668" stroke="#5A5F66"
                                      stroke-width="1.5"
                                      stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M13.6134 12.56H4.38672C3.28005 12.56 2.38672 11.6667 2.38672 10.56V8.34668"
                                      stroke="#5A5F66"
                                      stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                      stroke-linejoin="round"></path>
                                <path d="M11.5068 14.6667L13.6135 12.56L11.5068 10.4533" stroke="#5A5F66"
                                      stroke-width="1.5"
                                      stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <a href="#" class="text-[#A8ABB4] dark:text-[#84858F]">{{ $question['data']['answers_count'] }}
                            پاسخ </a>
                    </div>

                    <div class=" items-center flex-wrap gap-y-4 hidden md:flex">
                        <div
                            class="px-4 flex items-center gap-1 text-sm min-w-max border-l border-[#ECEEF3] dark:border-[#191B21]">
                            <div>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.3866 7.99995C10.3866 9.31995 9.31995 10.3866 7.99995 10.3866C6.67995 10.3866 5.61328 9.31995 5.61328 7.99995C5.61328 6.67995 6.67995 5.61328 7.99995 5.61328C9.31995 5.61328 10.3866 6.67995 10.3866 7.99995Z"
                                        stroke="#6A6B74" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        d="M7.9999 13.5133C10.3532 13.5133 12.5466 12.1266 14.0732 9.72665C14.6732 8.78665 14.6732 7.20665 14.0732 6.26665C12.5466 3.86665 10.3532 2.47998 7.9999 2.47998C5.64656 2.47998 3.45323 3.86665 1.92656 6.26665C1.32656 7.20665 1.32656 8.78665 1.92656 9.72665C3.45323 12.1266 5.64656 13.5133 7.9999 13.5133Z"
                                        stroke="#6A6B74" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <a href="#" class="text-[#A8ABB4] dark:text-[#84858F]">{{ $question['data']['views'] }}
                                بازدید</a>
                        </div>
                        <div
                            class="px-4 flex items-center gap-1 text-sm min-w-max border-l border-[#ECEEF3] dark:border-[#191B21]">
                            <div>

                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.1665 15.3588H10.8332L7.12483 17.8254C6.57483 18.1921 5.83317 17.8004 5.83317 17.1338V15.3588C3.33317 15.3588 1.6665 13.6921 1.6665 11.1921V6.19206C1.6665 3.69206 3.33317 2.02539 5.83317 2.02539H14.1665C16.6665 2.02539 18.3332 3.69206 18.3332 6.19206V11.1921C18.3332 13.6921 16.6665 15.3588 14.1665 15.3588Z"
                                        stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M10 9.4668V9.29183C10 8.72516 10.35 8.42515 10.7 8.18348C11.0417 7.95015 11.3833 7.65016 11.3833 7.10016C11.3833 6.33349 10.7667 5.7168 10 5.7168C9.23334 5.7168 8.6167 6.33349 8.6167 7.10016"
                                        stroke="#5A5F66" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path d="M9.99641 11.4577H10.0039" stroke="#5A5F66" stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>

                            </div>
                            <a href="#" class="text-[#A8ABB4] dark:text-[#84858F]">گزارش</a>
                        </div>
                        <div
                            class="px-4 flex items-center gap-1 text-sm min-w-max border-l border-[#ECEEF3] dark:border-[#191B21]">
                            <div>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.05 3.00002L4.20829 10.2417C3.94996 10.5167 3.69996 11.0584 3.64996 11.4334L3.34162 14.1334C3.23329 15.1084 3.93329 15.775 4.89996 15.6084L7.58329 15.15C7.95829 15.0834 8.48329 14.8084 8.74162 14.525L15.5833 7.28335C16.7666 6.03335 17.3 4.60835 15.4583 2.86668C13.625 1.14168 12.2333 1.75002 11.05 3.00002Z"
                                        stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path d="M9.9082 4.20801C10.2665 6.50801 12.1332 8.26634 14.4499 8.49967"
                                          stroke="#5A5F66"
                                          stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path d="M2.5 18.333H17.5" stroke="#5A5F66" stroke-width="1.5"
                                          stroke-miterlimit="10"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <a href="#" class="text-[#A8ABB4] dark:text-[#84858F]">ویرایش</a>
                        </div>
                        <div
                            class="px-4 flex items-center gap-1 text-sm min-w-max border-l border-[#ECEEF3] dark:border-[#191B21]">
                            <div>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.47483 12.7502L7.24983 16.5252C8.79983 18.0752 11.3165 18.0752 12.8748 16.5252L16.5332 12.8668C18.0832 11.3168 18.0832 8.80016 16.5332 7.24183L12.7498 3.47516C11.9582 2.6835 10.8665 2.2585 9.74983 2.31683L5.58316 2.51683C3.9165 2.59183 2.5915 3.91683 2.50816 5.57516L2.30816 9.74183C2.25816 10.8668 2.68316 11.9585 3.47483 12.7502Z"
                                        stroke="#5A5F66" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M7.91634 9.99967C9.06693 9.99967 9.99967 9.06693 9.99967 7.91634C9.99967 6.76575 9.06693 5.83301 7.91634 5.83301C6.76575 5.83301 5.83301 6.76575 5.83301 7.91634C5.83301 9.06693 6.76575 9.99967 7.91634 9.99967Z"
                                        stroke="#5A5F66" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <a wire:click="pinQuestion" class="text-[#A8ABB4] dark:text-[#84858F]">
                            @if($question['data']['is_pined'] == 1)
                                    خارج کردن از پین
                                @else
                                پین کردن
                            @endif
                            </a>
                        </div>
                        <div
                            class="px-4 flex items-center gap-1 text-sm min-w-max border-l border-[#ECEEF3] dark:border-[#191B21]">
                            <div>

                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.5 4.98307C14.725 4.70807 11.9333 4.56641 9.15 4.56641C7.5 4.56641 5.85 4.64974 4.2 4.81641L2.5 4.98307"
                                        stroke="#EB5757" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M7.0835 4.14102L7.26683 3.04935C7.40016 2.25768 7.50016 1.66602 8.9085 1.66602H11.0918C12.5002 1.66602 12.6085 2.29102 12.7335 3.05768L12.9168 4.14102"
                                        stroke="#EB5757" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M15.7082 7.61719L15.1665 16.0089C15.0748 17.3172 14.9998 18.3339 12.6748 18.3339H7.32484C4.99984 18.3339 4.92484 17.3172 4.83317 16.0089L4.2915 7.61719"
                                        stroke="#EB5757" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path d="M8.6084 13.75H11.3834" stroke="#EB5757" stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path d="M7.9165 10.416H12.0832" stroke="#EB5757" stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>

                            </div>
                            <a href="#" class="text-[#EB5757] "> حذف </a>
                        </div>
                    </div>
                </div>
                <div class=" items-center  flex">
                    <div wire:click="likeQuestion('{{ $question['data']['id'] }}')"
                        class="px-4 flex items-center gap-1 text-sm min-w-max border-l border-[#DFE2EB] dark:border-[#191B21]">
                        <div>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.2334 15.292L8.81673 17.292C9.15006 17.6254 9.90006 17.792 10.4001 17.792H13.5667C14.5667 17.792 15.6501 17.042 15.9001 16.042L17.9001 9.95871C18.3167 8.79205 17.5667 7.79205 16.3167 7.79205H12.9834C12.4834 7.79205 12.0667 7.37538 12.1501 6.79205L12.5667 4.12538C12.7334 3.37538 12.2334 2.54205 11.4834 2.29205C10.8167 2.04205 9.9834 2.37538 9.65006 2.87538L6.2334 7.95871"
                                    stroke="#343434" stroke-width="1.5" stroke-miterlimit="10"></path>
                                <path
                                    d="M1.9834 15.291V7.12435C1.9834 5.95768 2.4834 5.54102 3.65007 5.54102H4.4834C5.65006 5.54102 6.15007 5.95768 6.15007 7.12435V15.291C6.15007 16.4577 5.65006 16.8743 4.4834 16.8743H3.65007C2.4834 16.8743 1.9834 16.4577 1.9834 15.291Z"
                                    stroke="#343434" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <a
                           class="text-[#A8ABB4] dark:text-[#84858F] text-xs md:text-base">{{ $question['data']['likes'] }}</a>
                    </div>
                    <div wire:click="disLikeQuestion('{{ $question['data']['id'] }}')"
                        class="px-4 flex items-center gap-1 text-sm min-w-max border-l border-[#DFE2EB] dark:border-[#191B21]">
                        <div>

                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.7668 4.70898L11.1834 2.70898C10.8501 2.37565 10.1001 2.20898 9.6001 2.20898H6.43344C5.43344 2.20898 4.3501 2.95898 4.1001 3.95898L2.1001 10.0423C1.68344 11.209 2.43344 12.209 3.68344 12.209H7.01677C7.51677 12.209 7.93344 12.6257 7.8501 13.209L7.43344 15.8756C7.26677 16.6256 7.76677 17.459 8.51677 17.709C9.18344 17.959 10.0168 17.6256 10.3501 17.1256L13.7668 12.0423"
                                    stroke="#343434" stroke-width="1.5" stroke-miterlimit="10"></path>
                                <path
                                    d="M18.0168 4.70833V12.875C18.0168 14.0417 17.5168 14.4583 16.3501 14.4583H15.5168C14.3501 14.4583 13.8501 14.0417 13.8501 12.875V4.70833C13.8501 3.54167 14.3501 3.125 15.5168 3.125H16.3501C17.5168 3.125 18.0168 3.54167 18.0168 4.70833Z"
                                    stroke="#343434" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>

                        </div>
                        <a
                           class="text-[#A8ABB4] dark:text-[#84858F] text-xs md:text-base">{{ $question['data']['dislikes'] }}</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row gap-5 mt-5">
            <div class="w-full lg:w-3/4">
                <img src="{{ asset('images/pooster.jpg') }}" alt="" class="w-full rounded-[20px]">
                <div class="flex  items-center gap-1 mt-2">

                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.6668 8.50065C14.6668 12.1807 11.6802 15.1673 8.00016 15.1673C4.32016 15.1673 1.3335 12.1807 1.3335 8.50065C1.3335 4.82065 4.32016 1.83398 8.00016 1.83398C11.6802 1.83398 14.6668 4.82065 14.6668 8.50065Z"
                            stroke="#20D05C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path
                            d="M10.4734 10.6192L8.40675 9.38586C8.04675 9.17253 7.75342 8.65919 7.75342 8.23919V5.50586"
                            stroke="#20D05C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="text-[#63DE8D] dark:text-dark-yellow  text-xs md:text-sm">{{ $question['data']['updated_at'] == 'unknown' ? 'به تازگی' :  jdate($question['data']['updated_at'])->ago() }} ساعت پیش توسط مهدی قربان زاد ه
              ویرایش شد</span>
                </div>
            </div>
            <div class="w-full lg:w-1/4">
                <livewire:home-page.recommended-questions/>
            </div>
        </div>
    </section>
    <section class="w-full mx-auto max-w-[1500px] mt-10 px-5">
        <div class="space-y-5">
            {!! $question['data']['content'] ?? '' !!}
        </div>
        <div class="flex flex-col lg:flex-row gap-7 items-center my-10">
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
    </section>
    <section class="w-full mx-auto max-w-[1500px] mt-10 px-5 ">
        <div class="w-full relative">
            <div
                class="bg-[#FFFFFF] dark:bg-[#0C0D0F] border border-[#ECEEF3] dark:border-[#191B21] rounded-xl w-full p-5 flex flex-col gap-10 h-[945px]  overflow-y-auto overflow-x-hidden relative">


                <span class="text-[#0F0F0E] text-2xl dark:text-[#FCFCFC]">نظرات شما</span>
                @forelse($question['data']['comments'] as $comment)
                    <div class="bg-[#ECEEF3] dark:bg-[#191B21] w-full rounded-[20px] p-5 flex flex-col gap-6">
                        <div class="w-full grid grid-cols-2  justify-between items-center gap-y-4">
                            <div class="flex  gap-3 w-max">
                                <div class="flex gap-3 items-center">
                                    <div class="w-[32px] aspect-square overflow-hidden rounded-full ">
                                        <img src="{{ asset('images/5ddef01d39f33b711ad7da10be137285.jpg') }}" alt=""
                                             class="w-full">
                                    </div>
                                    <div class="flex gap-3 items-center">
                                        <a href="#"
                                           class="text-[#0F0F0E] dark:text-[#FCFCFC] text-sm md:text-base">{{ $comment['user']['name'] }} </a>
                                        <span class="text-primery-blue dark:text-dark-yellow text-xs md:text-sm ">امتیاز : {{ $comment['user']['score'] ?? 0 }}</span>
                                    </div>
                                </div>

                            </div>
                            <div class="hs-dropdown  md:hidden w-auto flex justify-end" id="drop1">
                                <svg class="hs-dropdown-toggle cursor-pointer " id="hs-dropdown-with-dividers"
                                     width="24" height="24"
                                     viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="dark:fill-slate-50"
                                          d="M12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM12 4C10.9 4 10 4.9 10 6C10 7.1 10.9 8 12 8C13.1 8 14 7.1 14 6C14 4.9 13.1 4 12 4ZM12 16C10.9 16 10 16.9 10 18C10 19.1 10.9 20 12 20C13.1 20 14 19.1 14 18C14 16.9 13.1 16 12 16Z"
                                          fill="#343434"/>
                                </svg>
                                <div
                                    class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-[170px] bg-white shadow-md rounded-lg p-2 mt-2 divide-y divide-gray-200 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700 px-5 "
                                    aria-labelledby="hs-dropdown-with-dividers">
                                    <div
                                        class="p-4  flex items-center gap-1 text-sm min-w-max border-b border-[#ECEEF3] dark:border-[#191B21]">
                                        <div>

                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.1665 15.3588H10.8332L7.12483 17.8254C6.57483 18.1921 5.83317 17.8004 5.83317 17.1338V15.3588C3.33317 15.3588 1.6665 13.6921 1.6665 11.1921V6.19206C1.6665 3.69206 3.33317 2.02539 5.83317 2.02539H14.1665C16.6665 2.02539 18.3332 3.69206 18.3332 6.19206V11.1921C18.3332 13.6921 16.6665 15.3588 14.1665 15.3588Z"
                                                    stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                                <path
                                                    d="M10 9.4668V9.29183C10 8.72516 10.35 8.42515 10.7 8.18348C11.0417 7.95015 11.3833 7.65016 11.3833 7.10016C11.3833 6.33349 10.7667 5.7168 10 5.7168C9.23334 5.7168 8.6167 6.33349 8.6167 7.10016"
                                                    stroke="#5A5F66" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                                <path d="M9.99641 11.4577H10.0039" stroke="#5A5F66" stroke-width="1.5"
                                                      stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </svg>

                                        </div>
                                        <a href="#" class="text-[#A8ABB4] dark:text-[#84858F]">گزارش</a>
                                    </div>
                                    <div
                                        class="p-4  flex items-center gap-1 text-sm min-w-max border-b border-[#ECEEF3] dark:border-[#191B21]">
                                        <div>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.05 3.00002L4.20829 10.2417C3.94996 10.5167 3.69996 11.0584 3.64996 11.4334L3.34162 14.1334C3.23329 15.1084 3.93329 15.775 4.89996 15.6084L7.58329 15.15C7.95829 15.0834 8.48329 14.8084 8.74162 14.525L15.5833 7.28335C16.7666 6.03335 17.3 4.60835 15.4583 2.86668C13.625 1.14168 12.2333 1.75002 11.05 3.00002Z"
                                                    stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                                <path
                                                    d="M9.9082 4.20801C10.2665 6.50801 12.1332 8.26634 14.4499 8.49967"
                                                    stroke="#5A5F66"
                                                    stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                                <path d="M2.5 18.333H17.5" stroke="#5A5F66" stroke-width="1.5"
                                                      stroke-miterlimit="10"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <a href="#" class="text-[#A8ABB4] dark:text-[#84858F]">ویرایش</a>
                                    </div>
                                    <div
                                        class="p-4 flex items-center gap-1 text-sm min-w-max border-b border-[#ECEEF3] dark:border-[#191B21]">
                                        <div>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M3.47483 12.7502L7.24983 16.5252C8.79983 18.0752 11.3165 18.0752 12.8748 16.5252L16.5332 12.8668C18.0832 11.3168 18.0832 8.80016 16.5332 7.24183L12.7498 3.47516C11.9582 2.6835 10.8665 2.2585 9.74983 2.31683L5.58316 2.51683C3.9165 2.59183 2.5915 3.91683 2.50816 5.57516L2.30816 9.74183C2.25816 10.8668 2.68316 11.9585 3.47483 12.7502Z"
                                                    stroke="#5A5F66" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                                <path
                                                    d="M7.91634 9.99967C9.06693 9.99967 9.99967 9.06693 9.99967 7.91634C9.99967 6.76575 9.06693 5.83301 7.91634 5.83301C6.76575 5.83301 5.83301 6.76575 5.83301 7.91634C5.83301 9.06693 6.76575 9.99967 7.91634 9.99967Z"
                                                    stroke="#5A5F66" stroke-width="1.5" stroke-linecap="round"/>
                                            </svg>
                                        </div>
                                        <a href="#" class="text-[#A8ABB4] dark:text-[#84858F]">پین کردن </a>
                                    </div>
                                    <div
                                        class="p-4 flex items-center gap-1 text-sm min-w-max border-b border-[#ECEEF3] dark:border-[#191B21]">
                                        <div>

                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.5 4.98307C14.725 4.70807 11.9333 4.56641 9.15 4.56641C7.5 4.56641 5.85 4.64974 4.2 4.81641L2.5 4.98307"
                                                    stroke="#EB5757" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                                <path
                                                    d="M7.0835 4.14102L7.26683 3.04935C7.40016 2.25768 7.50016 1.66602 8.9085 1.66602H11.0918C12.5002 1.66602 12.6085 2.29102 12.7335 3.05768L12.9168 4.14102"
                                                    stroke="#EB5757" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                                <path
                                                    d="M15.7082 7.61719L15.1665 16.0089C15.0748 17.3172 14.9998 18.3339 12.6748 18.3339H7.32484C4.99984 18.3339 4.92484 17.3172 4.83317 16.0089L4.2915 7.61719"
                                                    stroke="#EB5757" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                                <path d="M8.6084 13.75H11.3834" stroke="#EB5757" stroke-width="1.5"
                                                      stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                                <path d="M7.9165 10.416H12.0832" stroke="#EB5757" stroke-width="1.5"
                                                      stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </svg>

                                        </div>
                                        <a href="#" class="text-[#EB5757] "> حذف </a>
                                    </div>
                                </div>
                            </div>
                            <div class="text-[#5A5F66] dark:text-[#84858F] text-xs w-full md:text-left ">
                                <time>{{ jdate($comment['created_at'])->format('Y/m/d') }}</time>
                            </div>
                        </div>
                        <div>
                            <p class="dark:text-[#DEDEE9] text-[#343434] text-xs md:text-base">
                                {!! $comment['content'] ?? '' !!}
                            </p>
                        </div>
                        <div class="flex justify-between gap-10 items-center">
                            <div class=" items-center flex-wrap gap-y-4 flex">
                                <div wire:click="likeComment('{{ $comment['id'] }}')"
                                     class="px-4 flex items-center gap-1 text-sm min-w-max border-l border-[#DFE2EB] dark:border-[#191B21]">
                                    <div>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.2334 15.292L8.81673 17.292C9.15006 17.6254 9.90006 17.792 10.4001 17.792H13.5667C14.5667 17.792 15.6501 17.042 15.9001 16.042L17.9001 9.95871C18.3167 8.79205 17.5667 7.79205 16.3167 7.79205H12.9834C12.4834 7.79205 12.0667 7.37538 12.1501 6.79205L12.5667 4.12538C12.7334 3.37538 12.2334 2.54205 11.4834 2.29205C10.8167 2.04205 9.9834 2.37538 9.65006 2.87538L6.2334 7.95871"
                                                stroke="#343434" stroke-width="1.5" stroke-miterlimit="10"/>
                                            <path
                                                d="M1.9834 15.291V7.12435C1.9834 5.95768 2.4834 5.54102 3.65007 5.54102H4.4834C5.65006 5.54102 6.15007 5.95768 6.15007 7.12435V15.291C6.15007 16.4577 5.65006 16.8743 4.4834 16.8743H3.65007C2.4834 16.8743 1.9834 16.4577 1.9834 15.291Z"
                                                stroke="#343434" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <a
                                        class="text-[#A8ABB4] dark:text-[#84858F] text-xs md:text-base">{{ $comment['likes'] ?? 0 }}</a>
                                </div>
                                <div wire:click="disLikeComment('{{ $comment['id'] }}')"
                                     class="px-4 flex items-center gap-1 text-sm min-w-max border-l border-[#DFE2EB] dark:border-[#191B21]">
                                    <div>

                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.7668 4.70898L11.1834 2.70898C10.8501 2.37565 10.1001 2.20898 9.6001 2.20898H6.43344C5.43344 2.20898 4.3501 2.95898 4.1001 3.95898L2.1001 10.0423C1.68344 11.209 2.43344 12.209 3.68344 12.209H7.01677C7.51677 12.209 7.93344 12.6257 7.8501 13.209L7.43344 15.8756C7.26677 16.6256 7.76677 17.459 8.51677 17.709C9.18344 17.959 10.0168 17.6256 10.3501 17.1256L13.7668 12.0423"
                                                stroke="#343434" stroke-width="1.5" stroke-miterlimit="10"/>
                                            <path
                                                d="M18.0168 4.70833V12.875C18.0168 14.0417 17.5168 14.4583 16.3501 14.4583H15.5168C14.3501 14.4583 13.8501 14.0417 13.8501 12.875V4.70833C13.8501 3.54167 14.3501 3.125 15.5168 3.125H16.3501C17.5168 3.125 18.0168 3.54167 18.0168 4.70833Z"
                                                stroke="#343434" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                        </svg>

                                    </div>
                                    <a
                                        class="text-[#A8ABB4] dark:text-[#84858F] text-xs md:text-base">{{ $comment['dislikes'] ?? 0 }}</a>
                                </div>
                                <div
                                    class="hidden  md:flex px-4 items-center gap-1 text-sm min-w-max border-l border-[#DFE2EB] dark:border-[#191B21]">
                                    <div>

                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.1665 15.3588H10.8332L7.12483 17.8254C6.57483 18.1921 5.83317 17.8004 5.83317 17.1338V15.3588C3.33317 15.3588 1.6665 13.6921 1.6665 11.1921V6.19206C1.6665 3.69206 3.33317 2.02539 5.83317 2.02539H14.1665C16.6665 2.02539 18.3332 3.69206 18.3332 6.19206V11.1921C18.3332 13.6921 16.6665 15.3588 14.1665 15.3588Z"
                                                stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path
                                                d="M10 9.4668V9.29183C10 8.72516 10.35 8.42515 10.7 8.18348C11.0417 7.95015 11.3833 7.65016 11.3833 7.10016C11.3833 6.33349 10.7667 5.7168 10 5.7168C9.23334 5.7168 8.6167 6.33349 8.6167 7.10016"
                                                stroke="#5A5F66" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path d="M9.99641 11.4577H10.0039" stroke="#5A5F66" stroke-width="1.5"
                                                  stroke-linecap="round"
                                                  stroke-linejoin="round"></path>
                                        </svg>

                                    </div>
                                    <a href="#"
                                       class="text-[#A8ABB4] dark:text-[#84858F] text-xs md:text-base">گزارش</a>
                                </div>
                                <div wire:click="setCommentEditMode('{{ $comment['id'] }}')"
                                     class=" px-4 hidden  md:flex items-center gap-1 text-sm min-w-max border-l border-[#DFE2EB] dark:border-[#191B21]">
                                    <div>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.05 3.00002L4.20829 10.2417C3.94996 10.5167 3.69996 11.0584 3.64996 11.4334L3.34162 14.1334C3.23329 15.1084 3.93329 15.775 4.89996 15.6084L7.58329 15.15C7.95829 15.0834 8.48329 14.8084 8.74162 14.525L15.5833 7.28335C16.7666 6.03335 17.3 4.60835 15.4583 2.86668C13.625 1.14168 12.2333 1.75002 11.05 3.00002Z"
                                                stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path d="M9.9082 4.20801C10.2665 6.50801 12.1332 8.26634 14.4499 8.49967"
                                                  stroke="#5A5F66"
                                                  stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                                  stroke-linejoin="round"></path>
                                            <path d="M2.5 18.333H17.5" stroke="#5A5F66" stroke-width="1.5"
                                                  stroke-miterlimit="10"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                    <a class="text-[#A8ABB4] dark:text-[#84858F]">ویرایش</a>
                                </div>
                                @if(!count($comment['replies']) > 0)
                                    <div wire:click="setCommentReplyMode('{{ $comment['id'] }}')"
                                         class=" px-4 hidden  md:flex items-center gap-1 text-sm min-w-max border-l border-[#DFE2EB] dark:border-[#191B21]">
                                        <div>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.05 3.00002L4.20829 10.2417C3.94996 10.5167 3.69996 11.0584 3.64996 11.4334L3.34162 14.1334C3.23329 15.1084 3.93329 15.775 4.89996 15.6084L7.58329 15.15C7.95829 15.0834 8.48329 14.8084 8.74162 14.525L15.5833 7.28335C16.7666 6.03335 17.3 4.60835 15.4583 2.86668C13.625 1.14168 12.2333 1.75002 11.05 3.00002Z"
                                                    stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path
                                                    d="M9.9082 4.20801C10.2665 6.50801 12.1332 8.26634 14.4499 8.49967"
                                                    stroke="#5A5F66"
                                                    stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M2.5 18.333H17.5" stroke="#5A5F66" stroke-width="1.5"
                                                      stroke-miterlimit="10"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <a class="text-[#A8ABB4] dark:text-[#84858F]">پاسخ</a>
                                    </div>
                                @endif
                                <div wire:click="deleteComment('{{ $comment['id'] }}')"
                                     class="px-4 hidden  md:flex items-center gap-1 text-sm min-w-max border-l border-[#DFE2EB] dark:border-[#191B21]">
                                    <div>

                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.5 4.98307C14.725 4.70807 11.9333 4.56641 9.15 4.56641C7.5 4.56641 5.85 4.64974 4.2 4.81641L2.5 4.98307"
                                                stroke="#EB5757" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path
                                                d="M7.0835 4.14102L7.26683 3.04935C7.40016 2.25768 7.50016 1.66602 8.9085 1.66602H11.0918C12.5002 1.66602 12.6085 2.29102 12.7335 3.05768L12.9168 4.14102"
                                                stroke="#EB5757" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path
                                                d="M15.7082 7.61719L15.1665 16.0089C15.0748 17.3172 14.9998 18.3339 12.6748 18.3339H7.32484C4.99984 18.3339 4.92484 17.3172 4.83317 16.0089L4.2915 7.61719"
                                                stroke="#EB5757" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path d="M8.6084 13.75H11.3834" stroke="#EB5757" stroke-width="1.5"
                                                  stroke-linecap="round"
                                                  stroke-linejoin="round"></path>
                                            <path d="M7.9165 10.416H12.0832" stroke="#EB5757" stroke-width="1.5"
                                                  stroke-linecap="round"
                                                  stroke-linejoin="round"></path>
                                        </svg>

                                    </div>
                                    <a class="text-[#EB5757] "> حذف </a>
                                </div>
                            </div>
                            <div class=" flex items-center gap-1 text-sm  min-w-max">
                                <div>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path class=" stroke-[#20D05C] dark:stroke-dark-yellow  "
                                              d="M2.38672 3.44H11.6134C12.7201 3.44 13.6134 4.33334 13.6134 5.44V7.65334"
                                              stroke="#5A5F66"
                                              stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                        <path class=" stroke-[#20D05C] dark:stroke-dark-yellow  "
                                              d="M4.49339 1.33334L2.38672 3.43999L4.49339 5.54668" stroke="#5A5F66"
                                              stroke-width="1.5"
                                              stroke-miterlimit="10" stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                        <path class=" stroke-[#20D05C] dark:stroke-dark-yellow  "
                                              d="M13.6134 12.56H4.38672C3.28005 12.56 2.38672 11.6667 2.38672 10.56V8.34668"
                                              stroke="#5A5F66"
                                              stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                        <path class=" stroke-[#20D05C] dark:stroke-dark-yellow  "
                                              d="M11.5068 14.6667L13.6135 12.56L11.5068 10.4533" stroke="#5A5F66"
                                              stroke-width="1.5"
                                              stroke-miterlimit="10" stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                                <a href="#"
                                   class="text-[#20D05C] dark:text-dark-yellow">{{ count($comment['replies']) }}
                                    پاسخ </a>
                            </div>
                        </div>
                    </div>
                    @if(count($comment['replies']) > 0)
                        <div class="border-r-4 border-[#F4F4F4] mr-3 pr-3 md:pr-10 md:mr-10 dark:border-[#262626]">
                            <div class="bg-[#F4F4F4] w-full rounded-[20px] p-5 flex flex-col gap-6 dark:bg-black  ">
                                <div class="w-full grid grid-cols-2  justify-between items-center gap-y-4">
                                    <div class="flex  gap-3 w-max">
                                        <div class="flex gap-3 items-center">
                                            <div class="w-[32px] aspect-square overflow-hidden rounded-full ">
                                                <img src="{{ asset('images/5ddef01d39f33b711ad7da10be137285.jpg') }}"
                                                     alt="" class="w-full">
                                            </div>
                                            <div class="flex gap-3 items-center">
                                                <a href="#"
                                                   class="text-[#0F0F0E] dark:text-[#FCFCFC] text-xs md:text-base">{{ $comment['replies'][0]['user']['name'] ?? '' }} </a>
                                                <span
                                                    class="text-primery-blue dark:text-dark-yellow text-xs md:text-sm">امتیاز : {{ $comment['replies'][0]['user']['score'] ?? '' }}</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="hs-dropdown  md:hidden w-auto flex justify-end" id="drop1">
                                        <svg class="hs-dropdown-toggle cursor-pointer " id="hs-dropdown-with-dividers"
                                             width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path class="dark:fill-slate-50"
                                                  d="M12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM12 4C10.9 4 10 4.9 10 6C10 7.1 10.9 8 12 8C13.1 8 14 7.1 14 6C14 4.9 13.1 4 12 4ZM12 16C10.9 16 10 16.9 10 18C10 19.1 10.9 20 12 20C13.1 20 14 19.1 14 18C14 16.9 13.1 16 12 16Z"
                                                  fill="#343434"/>
                                        </svg>
                                        <div
                                            class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-[170px] bg-white shadow-md rounded-lg p-2 mt-2 divide-y divide-gray-200 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700 px-5 "
                                            aria-labelledby="hs-dropdown-with-dividers">
                                            <div
                                                class="p-4  flex items-center gap-1 text-sm min-w-max border-b border-[#ECEEF3] dark:border-[#191B21]">
                                                <div>

                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.1665 15.3588H10.8332L7.12483 17.8254C6.57483 18.1921 5.83317 17.8004 5.83317 17.1338V15.3588C3.33317 15.3588 1.6665 13.6921 1.6665 11.1921V6.19206C1.6665 3.69206 3.33317 2.02539 5.83317 2.02539H14.1665C16.6665 2.02539 18.3332 3.69206 18.3332 6.19206V11.1921C18.3332 13.6921 16.6665 15.3588 14.1665 15.3588Z"
                                                            stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"/>
                                                        <path
                                                            d="M10 9.4668V9.29183C10 8.72516 10.35 8.42515 10.7 8.18348C11.0417 7.95015 11.3833 7.65016 11.3833 7.10016C11.3833 6.33349 10.7667 5.7168 10 5.7168C9.23334 5.7168 8.6167 6.33349 8.6167 7.10016"
                                                            stroke="#5A5F66" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"/>
                                                        <path d="M9.99641 11.4577H10.0039" stroke="#5A5F66"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>

                                                </div>
                                                <a href="#" class="text-[#A8ABB4] dark:text-[#84858F] ">گزارش</a>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="text-[#5A5F66] dark:text-[#84858F] text-xs w-full md:text-left">
                                        <time>{{ jdate($comment['replies'][0]['created_at'])->format('Y/m/d') ?? '' }}</time>
                                    </div>
                                </div>
                                <div>
                                    <p class="dark:text-[#DEDEE9] text-[#343434] text-xs md:text-base">
                                        {!! $comment['replies'][0]['content'] !!}
                                    </p>
                                </div>
                                <div class="flex justify-between gap-10 items-center">
                                    <div class=" items-center flex-wrap gap-y-4 flex">
                                        <div wire:click="likeComment('{{ $comment['replies'][0]['id'] }}')"
                                             class="px-4 flex items-center gap-1 text-sm min-w-max border-l border-[#DFE2EB] dark:border-[#191B21]">
                                            <div>
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.2334 15.292L8.81673 17.292C9.15006 17.6254 9.90006 17.792 10.4001 17.792H13.5667C14.5667 17.792 15.6501 17.042 15.9001 16.042L17.9001 9.95871C18.3167 8.79205 17.5667 7.79205 16.3167 7.79205H12.9834C12.4834 7.79205 12.0667 7.37538 12.1501 6.79205L12.5667 4.12538C12.7334 3.37538 12.2334 2.54205 11.4834 2.29205C10.8167 2.04205 9.9834 2.37538 9.65006 2.87538L6.2334 7.95871"
                                                        stroke="#343434" stroke-width="1.5" stroke-miterlimit="10"/>
                                                    <path
                                                        d="M1.9834 15.291V7.12435C1.9834 5.95768 2.4834 5.54102 3.65007 5.54102H4.4834C5.65006 5.54102 6.15007 5.95768 6.15007 7.12435V15.291C6.15007 16.4577 5.65006 16.8743 4.4834 16.8743H3.65007C2.4834 16.8743 1.9834 16.4577 1.9834 15.291Z"
                                                        stroke="#343434" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                            <a
                                                class="text-[#A8ABB4] dark:text-[#84858F] text-xs md:text-base">{{ $comment['replies'][0]['likes'] ?? 0 }}</a>
                                        </div>
                                        <div wire:click="disLikeComment('{{ $comment['replies'][0]['id'] }}')"
                                             class="px-4 flex items-center gap-1 text-sm min-w-max border-l border-[#DFE2EB] dark:border-[#191B21]">
                                            <div>

                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.7668 4.70898L11.1834 2.70898C10.8501 2.37565 10.1001 2.20898 9.6001 2.20898H6.43344C5.43344 2.20898 4.3501 2.95898 4.1001 3.95898L2.1001 10.0423C1.68344 11.209 2.43344 12.209 3.68344 12.209H7.01677C7.51677 12.209 7.93344 12.6257 7.8501 13.209L7.43344 15.8756C7.26677 16.6256 7.76677 17.459 8.51677 17.709C9.18344 17.959 10.0168 17.6256 10.3501 17.1256L13.7668 12.0423"
                                                        stroke="#343434" stroke-width="1.5" stroke-miterlimit="10"/>
                                                    <path
                                                        d="M18.0168 4.70833V12.875C18.0168 14.0417 17.5168 14.4583 16.3501 14.4583H15.5168C14.3501 14.4583 13.8501 14.0417 13.8501 12.875V4.70833C13.8501 3.54167 14.3501 3.125 15.5168 3.125H16.3501C17.5168 3.125 18.0168 3.54167 18.0168 4.70833Z"
                                                        stroke="#343434" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                </svg>

                                            </div>
                                            <a href="#"
                                               class="text-[#A8ABB4] dark:text-[#84858F] text-xs md:text-base">{{ $comment['replies'][0]['dislikes'] ?? 0 }}</a>
                                        </div>
                                        <div
                                            class="px-4 flex items-center gap-1 text-sm min-w-max border-l border-[#DFE2EB] dark:border-[#191B21]">
                                            <div>

                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M14.1665 15.3588H10.8332L7.12483 17.8254C6.57483 18.1921 5.83317 17.8004 5.83317 17.1338V15.3588C3.33317 15.3588 1.6665 13.6921 1.6665 11.1921V6.19206C1.6665 3.69206 3.33317 2.02539 5.83317 2.02539H14.1665C16.6665 2.02539 18.3332 3.69206 18.3332 6.19206V11.1921C18.3332 13.6921 16.6665 15.3588 14.1665 15.3588Z"
                                                        stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path
                                                        d="M10 9.4668V9.29183C10 8.72516 10.35 8.42515 10.7 8.18348C11.0417 7.95015 11.3833 7.65016 11.3833 7.10016C11.3833 6.33349 10.7667 5.7168 10 5.7168C9.23334 5.7168 8.6167 6.33349 8.6167 7.10016"
                                                        stroke="#5A5F66" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path d="M9.99641 11.4577H10.0039" stroke="#5A5F66"
                                                          stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                </svg>

                                            </div>
                                            <a href="#" class="text-[#A8ABB4] dark:text-[#84858F] text-xs md:text-base">گزارش</a>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                    @endif
                @empty

                @endforelse

                <div
                    class="py-5 w-full  bg-white dark:bg-[#0C0D0F] dark:border-[#191B21]   border-[#ECEEF3] absolute bottom-0 right-0 flex justify-between gap-5 items-center p-5 border border-t-0 rounded-b-xl shadow-[0px_-20px_50px_-20px_rgba(0,0,0,0.3)]">
                    <div
                        class="bg-[#FBFDFF] dark:bg-[#191B21] dark:border-[#33353B] dark:text-[#A8ABB4] border border-[#ECEEF3] w-full md:w-[70%] flex items-center justify-center px-4 py-1 rounded-xl">
                        <input type="text" wire:model="commentContent"
                               class=" placeholder:text-[#A8ABB4] w-full bg-transparent ring-0 focus:ring-0 border-0 focus:border-0"
                               placeholder="دیدگاه خود را وارد کنید...">
                        <div wire:click.prevent="
    @if ($commentEditMode === 'create')
        createComment
    @elseif ($commentEditMode === 'edit')
        updateComment
    @elseif ($commentEditMode === 'reply')
        replyComment
    @endif
">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.99983 12.0005L19.3018 19.9665C19.3949 20.0023 19.4965 20.0096 19.5937 19.9875C19.6909 19.9654 19.7793 19.915 19.8478 19.8425C19.9183 19.7681 19.9668 19.6757 19.988 19.5755C20.0092 19.4752 20.0022 19.371 19.9678 19.2745L17.4998 12.0005M2.99983 12.0005L19.3018 4.03452C19.3949 3.99876 19.4965 3.99145 19.5937 4.01353C19.6909 4.0356 19.7793 4.08607 19.8478 4.15852C19.9183 4.23289 19.9668 4.32532 19.988 4.42558C20.0092 4.52583 20.0022 4.62999 19.9678 4.72652L17.4998 12.0005M2.99983 12.0005L17.4998 12.0005"
                                    stroke="#868B90" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                        </div>
                    </div>
                </div>
            </div>

    </section>
    <section class="w-full mx-auto max-w-[1500px] mt-10 px-5">
        <div class="py-6">
        <span class="text-2xl ">
          پاسخ خود را وارد کنید
        </span>
        </div>
        <div
            class="overflow-x-hidden border border-[#DFE2EB] focus:border-primery-blue rounded-xl focus:dark:border-dark-yellow relative">
            <textarea wire:model="answerContent" class="!relative !border-0" name="editor" id="editor"></textarea>
            <button
                wire:click="
        @if ($answerEditMode === 'create')
            createAnswer
        @elseif ($answerEditMode === 'edit')
            updateAnswer('{{ $editingAnswerId }}')
        @endif
    "
                class="bg-[#2667FF] dark:bg-[#FFC700] dark:text-black text-white py-3 w-32 rounded-[10px] text-xl hidden lg:block absolute top-[14px] left-4">
                بپرس
            </button>
        </div>
        <button
            wire:click="
        @if ($answerEditMode === 'create')
            createAnswer
        @elseif ($answerEditMode === 'edit')
            setAnswerEditMode('{{ $editingAnswerId }}')
        @endif
    "
            class="bg-[#2667FF] dark:bg-[#FFC700] dark:text-black text-white py-3 w-32 rounded-[10px] text-xl lg:hidden my-5">
            بپرس
        </button>
    </section>
    <section class="w-full mx-auto max-w-[1500px] mt-10 px-5">
        <div class="flex flex-col gap-6">

            <div class="flex flex-col gap-5">
                <div>
              <span class="text-[#081533] text-2xl dark:text-[#FCFCFC]">
                پاسخ ها
              </span>
                    <span class="text-[#6795FF] text-sm">({{ count($question['data']['answers']) }})</span>
                </div>
                <p class="text-[#84858F]">در این قسمت شما میتوانید پاسخ هایی که به این سوال داده شده را مشاهده کنید
                    .</p>
            </div>
            <div class="flex gap-4">
                <select
                    class="form-control w-max bg-[#FFFFFF] dark:bg-[#0C0D0F] border-[#F4F4F4] dark:border-[#33353B] text-[#262626] dark:text-[#84858F] rounded-xl py-2 pl-4 pr-8 text-xs md:text-base">
                    <option value="1" selected=""> مرتب سازی بر اساس</option>
                    <option value="0">مقالات</option>
                </select>
            </div>
            <div class="flex flex-col gap-10">
                @forelse($question['data']['answers'] as $index => $answer)
                    <div class="answer-item" style="display: {{ $index < 10 ? 'block' : 'none' }};">
                        @if($answer['is_correct_answer'] == 1)
                            {{--CORRECT ANSWER--}}
                            <div class="bg-[#E9FAEF] dark:bg-[#201A06] w-full rounded-[20px] p-5 flex flex-col gap-6">
                                <div class="w-full grid grid-cols-2  justify-between items-center gap-y-4">
                                    <div class="flex  gap-3 w-max">
                                        <div class="flex gap-3 items-center">
                                            <div class="w-[32px] aspect-square overflow-hidden rounded-full ">
                                                <img src="{{ asset('images/5ddef01d39f33b711ad7da10be137285.jpg') }}"
                                                     alt="" class="w-full">
                                            </div>
                                            <div class="flex gap-3 items-center">
                                                <a href="#"
                                                   class="text-[#0F0F0E] dark:text-[#FCFCFC] text-sm md:text-base">{{ $answer['author'] ?? 'admin' }} </a>
                                                <span
                                                    class="text-primery-blue dark:text-dark-yellow text-xs md:text-sm ">امتیاز : {{ $answer['user']['score'] }}</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="hs-dropdown  md:hidden w-auto flex justify-end" id="drop1">
                                        <svg class="hs-dropdown-toggle cursor-pointer " id="hs-dropdown-with-dividers"
                                             width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path class="dark:fill-slate-50"
                                                  d="M12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM12 4C10.9 4 10 4.9 10 6C10 7.1 10.9 8 12 8C13.1 8 14 7.1 14 6C14 4.9 13.1 4 12 4ZM12 16C10.9 16 10 16.9 10 18C10 19.1 10.9 20 12 20C13.1 20 14 19.1 14 18C14 16.9 13.1 16 12 16Z"
                                                  fill="#343434"></path>
                                        </svg>
                                        <div
                                            class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-[170px] bg-white shadow-md rounded-lg p-2 mt-2 divide-y divide-gray-200 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700 px-5 "
                                            aria-labelledby="hs-dropdown-with-dividers">
                                            <div
                                                class="p-4  flex items-center gap-1 text-sm min-w-max border-b border-[#ECEEF3] dark:border-[#191B21]">
                                                <div>

                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.1665 15.3588H10.8332L7.12483 17.8254C6.57483 18.1921 5.83317 17.8004 5.83317 17.1338V15.3588C3.33317 15.3588 1.6665 13.6921 1.6665 11.1921V6.19206C1.6665 3.69206 3.33317 2.02539 5.83317 2.02539H14.1665C16.6665 2.02539 18.3332 3.69206 18.3332 6.19206V11.1921C18.3332 13.6921 16.6665 15.3588 14.1665 15.3588Z"
                                                            stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                            d="M10 9.4668V9.29183C10 8.72516 10.35 8.42515 10.7 8.18348C11.0417 7.95015 11.3833 7.65016 11.3833 7.10016C11.3833 6.33349 10.7667 5.7168 10 5.7168C9.23334 5.7168 8.6167 6.33349 8.6167 7.10016"
                                                            stroke="#5A5F66" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M9.99641 11.4577H10.0039" stroke="#5A5F66"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"></path>
                                                    </svg>

                                                </div>
                                                <a href="#" class="text-[#A8ABB4] dark:text-[#84858F]">گزارش</a>
                                            </div>
                                            <div wire:click="setAnswerEditMode('{{ $answer['id'] }}')"
                                                class="p-4  flex items-center gap-1 text-sm min-w-max border-b border-[#ECEEF3] dark:border-[#191B21]">
                                                <div>
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.05 3.00002L4.20829 10.2417C3.94996 10.5167 3.69996 11.0584 3.64996 11.4334L3.34162 14.1334C3.23329 15.1084 3.93329 15.775 4.89996 15.6084L7.58329 15.15C7.95829 15.0834 8.48329 14.8084 8.74162 14.525L15.5833 7.28335C16.7666 6.03335 17.3 4.60835 15.4583 2.86668C13.625 1.14168 12.2333 1.75002 11.05 3.00002Z"
                                                            stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                            d="M9.9082 4.20801C10.2665 6.50801 12.1332 8.26634 14.4499 8.49967"
                                                            stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M2.5 18.333H17.5" stroke="#5A5F66" stroke-width="1.5"
                                                              stroke-miterlimit="10" stroke-linecap="round"
                                                              stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                                <a class="text-[#A8ABB4] dark:text-[#84858F]">ویرایش</a>
                                            </div>
                                            <div
                                                class="p-4 flex items-center gap-1 text-sm min-w-max border-b border-[#ECEEF3] dark:border-[#191B21]">
                                                <div>
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M3.47483 12.7502L7.24983 16.5252C8.79983 18.0752 11.3165 18.0752 12.8748 16.5252L16.5332 12.8668C18.0832 11.3168 18.0832 8.80016 16.5332 7.24183L12.7498 3.47516C11.9582 2.6835 10.8665 2.2585 9.74983 2.31683L5.58316 2.51683C3.9165 2.59183 2.5915 3.91683 2.50816 5.57516L2.30816 9.74183C2.25816 10.8668 2.68316 11.9585 3.47483 12.7502Z"
                                                            stroke="#5A5F66" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path
                                                            d="M7.91634 9.99967C9.06693 9.99967 9.99967 9.06693 9.99967 7.91634C9.99967 6.76575 9.06693 5.83301 7.91634 5.83301C6.76575 5.83301 5.83301 6.76575 5.83301 7.91634C5.83301 9.06693 6.76575 9.99967 7.91634 9.99967Z"
                                                            stroke="#5A5F66" stroke-width="1.5"
                                                            stroke-linecap="round"></path>
                                                    </svg>
                                                </div>
                                                <a href="#" class="text-[#A8ABB4] dark:text-[#84858F]">پین کردن </a>
                                            </div>
                                            <div wire:click="deleteAnswer('{{ $answer['id'] }}')"
                                                 class="p-4 flex items-center gap-1 text-sm min-w-max border-b border-[#ECEEF3] dark:border-[#191B21]">
                                                <div>

                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17.5 4.98307C14.725 4.70807 11.9333 4.56641 9.15 4.56641C7.5 4.56641 5.85 4.64974 4.2 4.81641L2.5 4.98307"
                                                            stroke="#EB5757" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path
                                                            d="M7.0835 4.14102L7.26683 3.04935C7.40016 2.25768 7.50016 1.66602 8.9085 1.66602H11.0918C12.5002 1.66602 12.6085 2.29102 12.7335 3.05768L12.9168 4.14102"
                                                            stroke="#EB5757" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path
                                                            d="M15.7082 7.61719L15.1665 16.0089C15.0748 17.3172 14.9998 18.3339 12.6748 18.3339H7.32484C4.99984 18.3339 4.92484 17.3172 4.83317 16.0089L4.2915 7.61719"
                                                            stroke="#EB5757" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M8.6084 13.75H11.3834" stroke="#EB5757"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"></path>
                                                        <path d="M7.9165 10.416H12.0832" stroke="#EB5757"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"></path>
                                                    </svg>

                                                </div>
                                                <a class="text-[#EB5757] "> حذف </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-[#5A5F66] dark:text-[#84858F] text-xs w-full md:text-left ">
                                        <time>{{ jdate($answer['created_at'])->format('/Y/m/d') }}</time>
                                    </div>
                                </div>
                                <div>
                                    <p class="dark:text-[#DEDEE9] text-[#343434] text-xs md:text-base">
                                        {!! $answer['content'] ?? '' !!}
                                    </p>
                                </div>

                                <div class="flex flex-col-reverse lg:flex-row gap-6">
                                    @if(count($answer['comments']) == 0)
                                    <div
                                        class="bg-[#FBFDFF] dark:bg-[#191B21] dark:border-[#33353B] dark:text-[#A8ABB4] border border-[#ECEEF3] w-full lg:w-[40%] 3xl:w-[60%] flex items-center justify-center px-4 py-1 rounded-xl">
                                        <input wire:model="answerCommentContent" type="text"
                                               class=" placeholder:text-[#A8ABB4] w-full bg-transparent ring-0 focus:ring-0 border-0 focus:border-0"
                                               placeholder="دیدگاه خود را وارد کنید...">
                                        <div>

                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.99983 12.0005L19.3018 19.9665C19.3949 20.0023 19.4965 20.0096 19.5937 19.9875C19.6909 19.9654 19.7793 19.915 19.8478 19.8425C19.9183 19.7681 19.9668 19.6757 19.988 19.5755C20.0092 19.4752 20.0022 19.371 19.9678 19.2745L17.4998 12.0005M2.99983 12.0005L19.3018 4.03452C19.3949 3.99876 19.4965 3.99145 19.5937 4.01353C19.6909 4.0356 19.7793 4.08607 19.8478 4.15852C19.9183 4.23289 19.9668 4.32532 19.988 4.42558C20.0092 4.52583 20.0022 4.62999 19.9678 4.72652L17.4998 12.0005M2.99983 12.0005L17.4998 12.0005"
                                                    stroke="#868B90" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>

                                        </div>
                                    </div>
                                    @endif
                                    <div class="flex justify-between gap-10 items-center">
                                        <div class=" items-center flex-wrap gap-y-4 flex">
                                            <div wire:click="likeAnswer('{{ $answer['id'] }}')"
                                                class="px-4 flex items-center gap-1 text-sm min-w-max border-l border-[#DFE2EB] dark:border-[#191B21]">
                                                <div>
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.2334 15.292L8.81673 17.292C9.15006 17.6254 9.90006 17.792 10.4001 17.792H13.5667C14.5667 17.792 15.6501 17.042 15.9001 16.042L17.9001 9.95871C18.3167 8.79205 17.5667 7.79205 16.3167 7.79205H12.9834C12.4834 7.79205 12.0667 7.37538 12.1501 6.79205L12.5667 4.12538C12.7334 3.37538 12.2334 2.54205 11.4834 2.29205C10.8167 2.04205 9.9834 2.37538 9.65006 2.87538L6.2334 7.95871"
                                                            stroke="#343434" stroke-width="1.5"
                                                            stroke-miterlimit="10"></path>
                                                        <path
                                                            d="M1.9834 15.291V7.12435C1.9834 5.95768 2.4834 5.54102 3.65007 5.54102H4.4834C5.65006 5.54102 6.15007 5.95768 6.15007 7.12435V15.291C6.15007 16.4577 5.65006 16.8743 4.4834 16.8743H3.65007C2.4834 16.8743 1.9834 16.4577 1.9834 15.291Z"
                                                            stroke="#343434" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                                <a
                                                   class="text-[#A8ABB4] dark:text-[#84858F] text-xs md:text-base">{{ $answer['likes'] ?? 0 }}</a>
                                            </div>
                                            <div wire:click="disLikeAnswer('{{ $answer['id'] }}')"
                                                class="px-4 flex items-center gap-1 text-sm min-w-max border-l border-[#DFE2EB] dark:border-[#191B21]">
                                                <div>

                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.7668 4.70898L11.1834 2.70898C10.8501 2.37565 10.1001 2.20898 9.6001 2.20898H6.43344C5.43344 2.20898 4.3501 2.95898 4.1001 3.95898L2.1001 10.0423C1.68344 11.209 2.43344 12.209 3.68344 12.209H7.01677C7.51677 12.209 7.93344 12.6257 7.8501 13.209L7.43344 15.8756C7.26677 16.6256 7.76677 17.459 8.51677 17.709C9.18344 17.959 10.0168 17.6256 10.3501 17.1256L13.7668 12.0423"
                                                            stroke="#343434" stroke-width="1.5"
                                                            stroke-miterlimit="10"></path>
                                                        <path
                                                            d="M18.0168 4.70833V12.875C18.0168 14.0417 17.5168 14.4583 16.3501 14.4583H15.5168C14.3501 14.4583 13.8501 14.0417 13.8501 12.875V4.70833C13.8501 3.54167 14.3501 3.125 15.5168 3.125H16.3501C17.5168 3.125 18.0168 3.54167 18.0168 4.70833Z"
                                                            stroke="#343434" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>

                                                </div>
                                                <a
                                                   class="text-[#A8ABB4] dark:text-[#84858F] text-xs md:text-base">{{ $answer['dislikes'] ?? 0 }}</a>
                                            </div>
                                            <div
                                                class="hidden  md:flex px-4 items-center gap-1 text-sm min-w-max border-l border-[#DFE2EB] dark:border-[#191B21]">
                                                <div>

                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.1665 15.3588H10.8332L7.12483 17.8254C6.57483 18.1921 5.83317 17.8004 5.83317 17.1338V15.3588C3.33317 15.3588 1.6665 13.6921 1.6665 11.1921V6.19206C1.6665 3.69206 3.33317 2.02539 5.83317 2.02539H14.1665C16.6665 2.02539 18.3332 3.69206 18.3332 6.19206V11.1921C18.3332 13.6921 16.6665 15.3588 14.1665 15.3588Z"
                                                            stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                            d="M10 9.4668V9.29183C10 8.72516 10.35 8.42515 10.7 8.18348C11.0417 7.95015 11.3833 7.65016 11.3833 7.10016C11.3833 6.33349 10.7667 5.7168 10 5.7168C9.23334 5.7168 8.6167 6.33349 8.6167 7.10016"
                                                            stroke="#5A5F66" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M9.99641 11.4577H10.0039" stroke="#5A5F66"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"></path>
                                                    </svg>

                                                </div>
                                                <a href="#"
                                                   class="text-[#A8ABB4] dark:text-[#84858F] text-xs md:text-base">گزارش</a>
                                            </div>
                                            <div wire:click="setAnswerEditMode('{{ $answer['id'] }}')"
                                                class=" px-4 hidden  md:flex items-center gap-1 text-sm min-w-max border-l border-[#DFE2EB] dark:border-[#191B21]">
                                                <div>
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.05 3.00002L4.20829 10.2417C3.94996 10.5167 3.69996 11.0584 3.64996 11.4334L3.34162 14.1334C3.23329 15.1084 3.93329 15.775 4.89996 15.6084L7.58329 15.15C7.95829 15.0834 8.48329 14.8084 8.74162 14.525L15.5833 7.28335C16.7666 6.03335 17.3 4.60835 15.4583 2.86668C13.625 1.14168 12.2333 1.75002 11.05 3.00002Z"
                                                            stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                            d="M9.9082 4.20801C10.2665 6.50801 12.1332 8.26634 14.4499 8.49967"
                                                            stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M2.5 18.333H17.5" stroke="#5A5F66" stroke-width="1.5"
                                                              stroke-miterlimit="10" stroke-linecap="round"
                                                              stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                                <a class="text-[#A8ABB4] dark:text-[#84858F]">ویرایش</a>
                                            </div>

                                            <div wire:click="deleteAnswer('{{ $answer['id'] }}')"
                                                class="px-4 hidden  md:flex items-center gap-1 text-sm min-w-max border-l border-[#DFE2EB] dark:border-[#191B21]">
                                                <div>

                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17.5 4.98307C14.725 4.70807 11.9333 4.56641 9.15 4.56641C7.5 4.56641 5.85 4.64974 4.2 4.81641L2.5 4.98307"
                                                            stroke="#EB5757" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path
                                                            d="M7.0835 4.14102L7.26683 3.04935C7.40016 2.25768 7.50016 1.66602 8.9085 1.66602H11.0918C12.5002 1.66602 12.6085 2.29102 12.7335 3.05768L12.9168 4.14102"
                                                            stroke="#EB5757" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path
                                                            d="M15.7082 7.61719L15.1665 16.0089C15.0748 17.3172 14.9998 18.3339 12.6748 18.3339H7.32484C4.99984 18.3339 4.92484 17.3172 4.83317 16.0089L4.2915 7.61719"
                                                            stroke="#EB5757" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M8.6084 13.75H11.3834" stroke="#EB5757"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"></path>
                                                        <path d="M7.9165 10.416H12.0832" stroke="#EB5757"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"></path>
                                                    </svg>

                                                </div>
                                                <a class="text-[#EB5757] "> حذف </a>
                                            </div>
                                        </div>
                                        <div wire:click="updateAnswerStatus('{{ $answer['id'] }}')" class=" flex items-center gap-1 text-sm  min-w-max">

                                            <a class="text-[#20D05C] dark:text-dark-yellow">تایید شده </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--CORRECT ANSWER--}}
                        @else
                            {{--NOT CORRECT ANSWER--}}
                            <div class="dark:bg-[#0C0D0F] bg-[#FFFFFF] w-full rounded-[20px] p-5 flex flex-col gap-6">
                                <div class="w-full grid grid-cols-2  justify-between items-center gap-y-4">
                                    <div class="flex  gap-3 w-max">
                                        <div class="flex gap-3 items-center">
                                            <div class="w-[32px] aspect-square overflow-hidden rounded-full ">
                                                <img src="{{ asset('images/5ddef01d39f33b711ad7da10be137285.jpg') }}"
                                                     alt="" class="w-full">
                                            </div>
                                            <div class="flex gap-3 items-center">
                                                <a href="#"
                                                   class="text-[#0F0F0E] dark:text-[#FCFCFC] text-sm md:text-base">{{ $answer['author'] ?? 'admin' }} </a>
                                                <span
                                                    class="text-primery-blue dark:text-dark-yellow text-xs md:text-sm ">امتیاز : 65,431</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="hs-dropdown  md:hidden w-auto flex justify-end" id="drop1">
                                        <svg class="hs-dropdown-toggle cursor-pointer " id="hs-dropdown-with-dividers"
                                             width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path class="dark:fill-slate-50"
                                                  d="M12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM12 4C10.9 4 10 4.9 10 6C10 7.1 10.9 8 12 8C13.1 8 14 7.1 14 6C14 4.9 13.1 4 12 4ZM12 16C10.9 16 10 16.9 10 18C10 19.1 10.9 20 12 20C13.1 20 14 19.1 14 18C14 16.9 13.1 16 12 16Z"
                                                  fill="#343434"></path>
                                        </svg>
                                        <div
                                            class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-[170px] bg-white shadow-md rounded-lg p-2 mt-2 divide-y divide-gray-200 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700 px-5 "
                                            aria-labelledby="hs-dropdown-with-dividers">
                                            <div
                                                class="p-4  flex items-center gap-1 text-sm min-w-max border-b border-[#ECEEF3] dark:border-[#191B21]">
                                                <div>

                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.1665 15.3588H10.8332L7.12483 17.8254C6.57483 18.1921 5.83317 17.8004 5.83317 17.1338V15.3588C3.33317 15.3588 1.6665 13.6921 1.6665 11.1921V6.19206C1.6665 3.69206 3.33317 2.02539 5.83317 2.02539H14.1665C16.6665 2.02539 18.3332 3.69206 18.3332 6.19206V11.1921C18.3332 13.6921 16.6665 15.3588 14.1665 15.3588Z"
                                                            stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                            d="M10 9.4668V9.29183C10 8.72516 10.35 8.42515 10.7 8.18348C11.0417 7.95015 11.3833 7.65016 11.3833 7.10016C11.3833 6.33349 10.7667 5.7168 10 5.7168C9.23334 5.7168 8.6167 6.33349 8.6167 7.10016"
                                                            stroke="#5A5F66" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M9.99641 11.4577H10.0039" stroke="#5A5F66"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"></path>
                                                    </svg>

                                                </div>
                                                <a href="#" class="text-[#A8ABB4] dark:text-[#84858F]">گزارش</a>
                                            </div>
                                            <div wire:click="setAnswerEditMode('{{ $answer['id'] }}')"
                                                class="p-4  flex items-center gap-1 text-sm min-w-max border-b border-[#ECEEF3] dark:border-[#191B21]">
                                                <div>
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.05 3.00002L4.20829 10.2417C3.94996 10.5167 3.69996 11.0584 3.64996 11.4334L3.34162 14.1334C3.23329 15.1084 3.93329 15.775 4.89996 15.6084L7.58329 15.15C7.95829 15.0834 8.48329 14.8084 8.74162 14.525L15.5833 7.28335C16.7666 6.03335 17.3 4.60835 15.4583 2.86668C13.625 1.14168 12.2333 1.75002 11.05 3.00002Z"
                                                            stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                            d="M9.9082 4.20801C10.2665 6.50801 12.1332 8.26634 14.4499 8.49967"
                                                            stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M2.5 18.333H17.5" stroke="#5A5F66" stroke-width="1.5"
                                                              stroke-miterlimit="10" stroke-linecap="round"
                                                              stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                                <a class="text-[#A8ABB4] dark:text-[#84858F]">ویرایش</a>
                                            </div>
                                            <div
                                                class="p-4 flex items-center gap-1 text-sm min-w-max border-b border-[#ECEEF3] dark:border-[#191B21]">
                                                <div>
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M3.47483 12.7502L7.24983 16.5252C8.79983 18.0752 11.3165 18.0752 12.8748 16.5252L16.5332 12.8668C18.0832 11.3168 18.0832 8.80016 16.5332 7.24183L12.7498 3.47516C11.9582 2.6835 10.8665 2.2585 9.74983 2.31683L5.58316 2.51683C3.9165 2.59183 2.5915 3.91683 2.50816 5.57516L2.30816 9.74183C2.25816 10.8668 2.68316 11.9585 3.47483 12.7502Z"
                                                            stroke="#5A5F66" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path
                                                            d="M7.91634 9.99967C9.06693 9.99967 9.99967 9.06693 9.99967 7.91634C9.99967 6.76575 9.06693 5.83301 7.91634 5.83301C6.76575 5.83301 5.83301 6.76575 5.83301 7.91634C5.83301 9.06693 6.76575 9.99967 7.91634 9.99967Z"
                                                            stroke="#5A5F66" stroke-width="1.5"
                                                            stroke-linecap="round"></path>
                                                    </svg>
                                                </div>
                                                <a href="#" class="text-[#A8ABB4] dark:text-[#84858F]">پین کردن </a>
                                            </div>
                                            <div wire:click="deleteAnswer('{{ $answer['id'] }}')"
                                                 class="p-4 flex items-center gap-1 text-sm min-w-max border-b border-[#ECEEF3] dark:border-[#191B21]">
                                                <div>

                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17.5 4.98307C14.725 4.70807 11.9333 4.56641 9.15 4.56641C7.5 4.56641 5.85 4.64974 4.2 4.81641L2.5 4.98307"
                                                            stroke="#EB5757" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path
                                                            d="M7.0835 4.14102L7.26683 3.04935C7.40016 2.25768 7.50016 1.66602 8.9085 1.66602H11.0918C12.5002 1.66602 12.6085 2.29102 12.7335 3.05768L12.9168 4.14102"
                                                            stroke="#EB5757" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path
                                                            d="M15.7082 7.61719L15.1665 16.0089C15.0748 17.3172 14.9998 18.3339 12.6748 18.3339H7.32484C4.99984 18.3339 4.92484 17.3172 4.83317 16.0089L4.2915 7.61719"
                                                            stroke="#EB5757" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M8.6084 13.75H11.3834" stroke="#EB5757"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"></path>
                                                        <path d="M7.9165 10.416H12.0832" stroke="#EB5757"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"></path>
                                                    </svg>

                                                </div>
                                                <a class="text-[#EB5757] "> حذف </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-[#5A5F66] dark:text-[#84858F] text-xs w-full md:text-left ">
                                        <time>{{ jdate($answer['created_at'])->format('/Y/m/d') }}</time>
                                    </div>
                                </div>
                                <div>
                                    <p class="dark:text-[#DEDEE9] text-[#343434] text-xs md:text-base">
                                        {!! $answer['content'] ?? '' !!}
                                    </p>
                                </div>
                                <div class="flex justify-between gap-10 items-center">
                                    <div class=" items-center flex-wrap gap-y-4 flex">
                                        <div wire:click="likeAnswer('{{ $answer['id'] }}')"
                                            class="px-4 flex items-center gap-1 text-sm min-w-max border-l border-[#DFE2EB] dark:border-[#191B21]">
                                            <div>
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.2334 15.292L8.81673 17.292C9.15006 17.6254 9.90006 17.792 10.4001 17.792H13.5667C14.5667 17.792 15.6501 17.042 15.9001 16.042L17.9001 9.95871C18.3167 8.79205 17.5667 7.79205 16.3167 7.79205H12.9834C12.4834 7.79205 12.0667 7.37538 12.1501 6.79205L12.5667 4.12538C12.7334 3.37538 12.2334 2.54205 11.4834 2.29205C10.8167 2.04205 9.9834 2.37538 9.65006 2.87538L6.2334 7.95871"
                                                        stroke="#343434" stroke-width="1.5"
                                                        stroke-miterlimit="10"></path>
                                                    <path
                                                        d="M1.9834 15.291V7.12435C1.9834 5.95768 2.4834 5.54102 3.65007 5.54102H4.4834C5.65006 5.54102 6.15007 5.95768 6.15007 7.12435V15.291C6.15007 16.4577 5.65006 16.8743 4.4834 16.8743H3.65007C2.4834 16.8743 1.9834 16.4577 1.9834 15.291Z"
                                                        stroke="#343434" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                            <a
                                               class="text-[#A8ABB4] dark:text-[#84858F] text-xs md:text-base">{{ $answer['likes'] ?? 0 }}</a>
                                        </div>
                                        <div wire:click="disLikeAnswer('{{ $answer['id'] }}')"
                                            class="px-4 flex items-center gap-1 text-sm min-w-max border-l border-[#DFE2EB] dark:border-[#191B21]">
                                            <div>

                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.7668 4.70898L11.1834 2.70898C10.8501 2.37565 10.1001 2.20898 9.6001 2.20898H6.43344C5.43344 2.20898 4.3501 2.95898 4.1001 3.95898L2.1001 10.0423C1.68344 11.209 2.43344 12.209 3.68344 12.209H7.01677C7.51677 12.209 7.93344 12.6257 7.8501 13.209L7.43344 15.8756C7.26677 16.6256 7.76677 17.459 8.51677 17.709C9.18344 17.959 10.0168 17.6256 10.3501 17.1256L13.7668 12.0423"
                                                        stroke="#343434" stroke-width="1.5"
                                                        stroke-miterlimit="10"></path>
                                                    <path
                                                        d="M18.0168 4.70833V12.875C18.0168 14.0417 17.5168 14.4583 16.3501 14.4583H15.5168C14.3501 14.4583 13.8501 14.0417 13.8501 12.875V4.70833C13.8501 3.54167 14.3501 3.125 15.5168 3.125H16.3501C17.5168 3.125 18.0168 3.54167 18.0168 4.70833Z"
                                                        stroke="#343434" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>

                                            </div>
                                            <a
                                               class="text-[#A8ABB4] dark:text-[#84858F] text-xs md:text-base">{{ $answer['dislikes'] ?? 0 }}</a>
                                        </div>
                                        <div
                                            class="hidden  md:flex px-4 items-center gap-1 text-sm min-w-max border-l border-[#DFE2EB] dark:border-[#191B21]">
                                            <div>

                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M14.1665 15.3588H10.8332L7.12483 17.8254C6.57483 18.1921 5.83317 17.8004 5.83317 17.1338V15.3588C3.33317 15.3588 1.6665 13.6921 1.6665 11.1921V6.19206C1.6665 3.69206 3.33317 2.02539 5.83317 2.02539H14.1665C16.6665 2.02539 18.3332 3.69206 18.3332 6.19206V11.1921C18.3332 13.6921 16.6665 15.3588 14.1665 15.3588Z"
                                                        stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path
                                                        d="M10 9.4668V9.29183C10 8.72516 10.35 8.42515 10.7 8.18348C11.0417 7.95015 11.3833 7.65016 11.3833 7.10016C11.3833 6.33349 10.7667 5.7168 10 5.7168C9.23334 5.7168 8.6167 6.33349 8.6167 7.10016"
                                                        stroke="#5A5F66" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path d="M9.99641 11.4577H10.0039" stroke="#5A5F66"
                                                          stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                </svg>

                                            </div>
                                            <a href="#" class="text-[#A8ABB4] dark:text-[#84858F] text-xs md:text-base">گزارش</a>
                                        </div>
                                        <div wire:click="setAnswerEditMode('{{ $answer['id'] }}')"
                                            class=" px-4 hidden  md:flex items-center gap-1 text-sm min-w-max border-l border-[#DFE2EB] dark:border-[#191B21]">
                                            <div>
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.05 3.00002L4.20829 10.2417C3.94996 10.5167 3.69996 11.0584 3.64996 11.4334L3.34162 14.1334C3.23329 15.1084 3.93329 15.775 4.89996 15.6084L7.58329 15.15C7.95829 15.0834 8.48329 14.8084 8.74162 14.525L15.5833 7.28335C16.7666 6.03335 17.3 4.60835 15.4583 2.86668C13.625 1.14168 12.2333 1.75002 11.05 3.00002Z"
                                                        stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path
                                                        d="M9.9082 4.20801C10.2665 6.50801 12.1332 8.26634 14.4499 8.49967"
                                                        stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M2.5 18.333H17.5" stroke="#5A5F66" stroke-width="1.5"
                                                          stroke-miterlimit="10" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                            <a class="text-[#A8ABB4] dark:text-[#84858F]">ویرایش</a>
                                        </div>

                                        <div wire:click="deleteAnswer('{{ $answer['id'] }}')"
                                            class="px-4 hidden  md:flex items-center gap-1 text-sm min-w-max border-l border-[#DFE2EB] dark:border-[#191B21]">
                                            <div>

                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.5 4.98307C14.725 4.70807 11.9333 4.56641 9.15 4.56641C7.5 4.56641 5.85 4.64974 4.2 4.81641L2.5 4.98307"
                                                        stroke="#EB5757" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path
                                                        d="M7.0835 4.14102L7.26683 3.04935C7.40016 2.25768 7.50016 1.66602 8.9085 1.66602H11.0918C12.5002 1.66602 12.6085 2.29102 12.7335 3.05768L12.9168 4.14102"
                                                        stroke="#EB5757" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path
                                                        d="M15.7082 7.61719L15.1665 16.0089C15.0748 17.3172 14.9998 18.3339 12.6748 18.3339H7.32484C4.99984 18.3339 4.92484 17.3172 4.83317 16.0089L4.2915 7.61719"
                                                        stroke="#EB5757" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path d="M8.6084 13.75H11.3834" stroke="#EB5757" stroke-width="1.5"
                                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M7.9165 10.416H12.0832" stroke="#EB5757" stroke-width="1.5"
                                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>

                                            </div>
                                            <a class="text-[#EB5757] "> حذف </a>
                                        </div>
                                    </div>
                                    <div wire:click="updateAnswerStatus('{{ $answer['id'] }}')" class=" flex items-center gap-1 text-sm  min-w-max">

                                        <a  class="text-[#20D05C] dark:text-dark-yellow">تایید نشده </a>
                                    </div>
                                </div>
                                @if(count($answer['comments']) == 0)
                                    <div
                                        class="bg-[#FBFDFF] dark:bg-[#191B21] dark:border-[#33353B] dark:text-[#A8ABB4] border border-[#ECEEF3] w-full md:w-[70%] flex items-center justify-center px-4 py-1 rounded-xl">
                                        <input type="text" wire:model="answerCommentContent.{{ $answer['id'] }}"
                                               class=" placeholder:text-[#A8ABB4] w-full bg-transparent ring-0 focus:ring-0 border-0 focus:border-0"
                                               placeholder="دیدگاه خود را وارد کنید...">
                                        <div wire:click="replyAnswer({{ $answer['id'] }})">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.99983 12.0005L19.3018 19.9665C19.3949 20.0023 19.4965 20.0096 19.5937 19.9875C19.6909 19.9654 19.7793 19.915 19.8478 19.8425C19.9183 19.7681 19.9668 19.6757 19.988 19.5755C20.0092 19.4752 20.0022 19.371 19.9678 19.2745L17.4998 12.0005M2.99983 12.0005L19.3018 4.03452C19.3949 3.99876 19.4965 3.99145 19.5937 4.01353C19.6909 4.0356 19.7793 4.08607 19.8478 4.15852C19.9183 4.23289 19.9668 4.32532 19.988 4.42558C20.0092 4.52583 20.0022 4.62999 19.9678 4.72652L17.4998 12.0005M2.99983 12.0005L17.4998 12.0005"
                                                    stroke="#868B90" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>

                                        </div>
                                    </div>
                                @endif

                            </div>
                            {{--NOT CORRECT ANSWER--}}
                        @endif
                    </div>
                    {{--REPLIES--}}
                    @if(count($answer['comments']) > 0)
                        <div
                            class="border-r-4 border-[#F4F4F4] mr-3 pr-3 md:pr-0 md:mr-0 md:border-0 dark:border-[#262626] w-full md:w-[80%]">
                            <div
                                class="bg-[#F4F4F4] w-full rounded-[20px] p-5 flex flex-col gap-6 dark:bg-[#191B21]   py-7  ">
                                <div class="w-full grid grid-cols-2  justify-between items-center gap-y-4">
                                    <div class="flex  gap-3 w-max">
                                        <div class="flex gap-3 items-center">
                                            <div class="w-[32px] aspect-square overflow-hidden rounded-full ">
                                                <img src="{{ asset('images/5ddef01d39f33b711ad7da10be137285.jpg') }}"
                                                     alt=""
                                                     class="w-full">
                                            </div>
                                            <div class="flex gap-3 items-center">
                                                <a href="#"
                                                   class="text-[#0F0F0E] dark:text-[#FCFCFC] text-xs md:text-base">{{ $answer['comments'][0]['user']['name'] }}</a>
                                                <span
                                                    class="text-primery-blue dark:text-dark-yellow text-xs md:text-sm">امتیاز : {{ $answer['comments'][0]['user']['score'] }}</span>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="text-[#5A5F66] dark:text-[#84858F] text-xs w-full md:text-left">
                                        <time>{{ jdate($answer['comments'][0]['created_at'])->format('Y/m/d') }}</time>
                                    </div>
                                </div>
                                <div>
                                    <p class="dark:text-[#DEDEE9] text-[#343434] text-xs md:text-base">
                                        {!! $answer['comments'][0]['content'] !!}
                                    </p>
                                </div>

                            </div>
                        </div>
                    @endif

                    {{--REPLIES--}}
                @empty
                @endforelse
            </div>
            <div class="my-5">
                <button id="load-more-btn"
                        class="text-primery-blue dark:text-dark-yellow border rounded-lg px-5 py-3 border-primery-blue dark:border-dark-yellow">
                    مشاهده بیشتر
                </button>
            </div>
            <script>

                document.addEventListener("DOMContentLoaded", function () {
                    let visibleCount = 10;
                    const answers = document.querySelectorAll('.answer-item');
                    const loadMoreBtn = document.getElementById('load-more-btn');

                    loadMoreBtn.addEventListener('click', function () {
                        visibleCount += 10;
                        answers.forEach((answer, index) => {
                            if (index < visibleCount) {
                                answer.style.display = 'block';
                            }
                        });

                        if (visibleCount >= answers.length) {
                            loadMoreBtn.style.display = 'none';
                        }
                    });
                });

            </script>
        </div>
    </section>
</div>
