<div>
    <div class="flex justify-between items-center w-full">
        <div class="flex flex-col gap-4">
            <p class="text-xl text-[#081533] dark:text-[#FCFCFC]">فعالان انجمن</p>
            <p class="text-[#5A5F66] dark:text-[#5A5F66] ">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                لازم است
            </p>
        </div>
        <div class="hidden lg:block">
            <a href="#"
               class="bg-[#E9F0FF] dark:bg-black w-max rounded-lg text-[#2667FF] dark:text-[#FFC700]  px-5 py-3 border border-[#2667FF] dark:border-[#FFC700]">
                <span>مشاهده بیشتر</span>
            </a>
        </div>
    </div>
    <div class="mt-20 grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-[30px] gap-y-10">
        @forelse($activeUsers['data'] as $user)
        <div class="w-full rounded-xl bg-white dark:bg-[#0C0D0F] flex flex-col gap-5 p-1  ">
            <div class="w-full flex justify-center mt-[-35px]">
                <img src="{{ asset('images/fasetest.jpg') }}" alt="profile"
                     class="aspect-square w-[64px] 3xl:w-[100px] border-[3px] border-[#E9F0FF] dark:border-[#6A6B74] rounded-full ">
            </div>
            <div class=" w-full flex flex-col justify-center items-center gap-4">
                <div
                    class="flex flex-col items-center justify-center gap-[9px] py-5 dark:border-[#A0A0AB] border-b w-full">
              <span class="text-[#0F0F0E] md:text-xl dark:text-gray-200">
                {{ $user['name'] ?? '' . $user['last_name'] ?? '' }}
              </span>
                    <span
                        class="dark:text-[#A0A0AB] text-[10px] md:text-base text-[#5A5F66] border rounded-full border-[#ECEEF3] dark:border-[#A0A0AB] px-[10px] py-1 bg-white dark:bg-black">{{ $user['score'] ?? '' }}
                امتیاز</span>
                    <div
                        class="flex items-center gap-2 text-[#5A5F66] dark:text-[#A0A0AB] text-[10px] md:text-base">

                        <div class="flex items-center gap-1 text-[10px] ">
                            <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path class=" dark:stroke-[#A0A0AB] "
                                      d="M1.79004 3.07996H8.71005C9.54005 3.07996 10.2101 3.74996 10.2101 4.57996V6.23996"
                                      stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path class=" dark:stroke-[#A0A0AB] " d="M3.37004 1.5L1.79004 3.07999L3.37004 4.66"
                                      stroke="#5A5F66"
                                      stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path class=" dark:stroke-[#A0A0AB] "
                                      d="M10.2101 9.92001H3.29004C2.46004 9.92001 1.79004 9.25001 1.79004 8.42001V6.76001"
                                      stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path class=" dark:stroke-[#A0A0AB] "
                                      d="M8.62988 11.5L10.2099 9.91998L8.62988 8.33997"
                                      stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                            <span>
                    پاسخ داده شده :
                  </span>
                        </div>
                        <span>{{ $user['answers_count'] ?? 0 }}</span>
                    </div>
                    <div
                        class="flex items-center gap-2 text-[#5A5F66] dark:text-[#A0A0AB] text-[10px] md:text-base">

                        <div class="flex items-center gap-1 ">

                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path class=" dark:stroke-[#A0A0AB] "
                                      d="M12.4868 7.69334V10.36C12.4868 10.5333 12.4802 10.7 12.4602 10.86C12.3068 12.66 11.2468 13.5533 9.2935 13.5533H9.02684C8.86017 13.5533 8.70016 13.6333 8.60016 13.7667L7.80017 14.8333C7.44684 15.3067 6.8735 15.3067 6.52016 14.8333L5.72015 13.7667C5.63349 13.6533 5.44016 13.5533 5.2935 13.5533H5.02684C2.90017 13.5533 1.8335 13.0267 1.8335 10.36V7.69334C1.8335 5.74001 2.7335 4.68001 4.52684 4.52667C4.68684 4.50667 4.8535 4.5 5.02684 4.5H9.2935C11.4202 4.5 12.4868 5.56667 12.4868 7.69334Z"
                                      stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path class=" dark:stroke-[#A0A0AB] "
                                      d="M15.1535 5.02671V7.69338C15.1535 9.65338 14.2535 10.7067 12.4602 10.86C12.4802 10.7 12.4869 10.5334 12.4869 10.36V7.69338C12.4869 5.56671 11.4202 4.50004 9.29352 4.50004H5.02686C4.85352 4.50004 4.68686 4.50671 4.52686 4.52671C4.68019 2.73338 5.74019 1.83337 7.69352 1.83337H11.9602C14.0869 1.83337 15.1535 2.90005 15.1535 5.02671Z"
                                      stroke="#5A5F66" stroke-width="1.5" stroke-miterlimit="10"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path class=" dark:stroke-[#A0A0AB] " d="M9.49684 9.33333H9.50284" stroke="#5A5F66"
                                      stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                                <path class=" dark:stroke-[#A0A0AB] " d="M7.16383 9.33333H7.16983" stroke="#5A5F66"
                                      stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                                <path class=" dark:stroke-[#A0A0AB] " d="M4.83033 9.33333H4.83633" stroke="#5A5F66"
                                      stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span>
                    نظرات :
                  </span>
                        </div>
                        <span>{{ $user['comments_count'] ?? 0 }}</span>
                    </div>
                </div>
                <div class="w-full p-2">
                    <a href="#"
                       class="bg-[#E9F0FF] dark:bg-black rounded-lg w-full text-[#2667FF] dark:text-[#FFC700]  flex items-center justify-between px-4 py-3 text-[12px] md:text-base">
                        <span>گفتوگو</span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path class=" dark:stroke-[#FFC700] " d="M8.5 10.5H15.5" stroke="#2667FF"
                                  stroke-width="1.5"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path class=" dark:stroke-[#FFC700] "
                                  d="M7 18.4299H11L15.45 21.39C16.11 21.83 17 21.3599 17 20.5599V18.4299C20 18.4299 22 16.4299 22 13.4299V7.42993C22 4.42993 20 2.42993 17 2.42993H7C4 2.42993 2 4.42993 2 7.42993V13.4299C2 16.4299 4 18.4299 7 18.4299Z"
                                  stroke="#2667FF" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>

                    </a>
                </div>
            </div>
        </div>
        @empty
        @endforelse
    </div>


    <div class="mt-10 w-full flex justify-center lg:hidden">
        <a href="#"
           class="bg-[#E9F0FF] dark:bg-black w-max rounded-lg text-[#2667FF] dark:text-[#FFC700]  px-5 py-3 border border-[#2667FF] dark:border-[#FFC700]">
            <span>مشاهده بیشتر</span>
        </a>
    </div>
</div>
