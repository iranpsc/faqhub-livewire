<div>
    <div
        class=" w-full  max-w-full dark:text-[#FCFCFC] rounded-xl  border border-[#F4F4F4] dark:border-0 h-min p-3 bg-white dark:bg-[#0C0D0F] dark:border-[#33353B] flex flex-col gap-7 max-h-[511px] overflow-y-auto !overflow-x-hidden min-h-[300px] ">

        <div class="text-center">
            <span class="text-[#173E99] dark:text-[#FCFCFC] text-center"> سوالات پر بازدید هفته</span>
        </div>
        @forelse($questions['data'] as $question)
            <div class="w-full">
                <div class="flex flex-row  gap-3 overflow-hidden h-max w-full">

                    <div class="w-5 flex justify-center items-center">
                        <span class="w-full text-[44px] dark:text-[#FFC700]">{{ $loop->iteration }}</span>

                    </div>
                    <div class="flex flex-col justify-between items-center   py-2 ">
                        <div class="flex truncate items-center w-full text-xs ">
                            <a href="{{ route('single-question',$question['slug']) }}" class="text-[#0F0F0E] dark:text-[#FCFCFC] truncate  text-sm">مبلغ بیعانه
                                {{ $question['title'] }}
                            </a>
                        </div>
                        <div class="flex truncate items-center w-full text-xs ">
                            <a href="#"
                               class="truncate border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max text-[#A8ABB4] dark:text-[#84858F] px-2"
                               title="{{ $question['category_name'] ?? '' }}">
                                {{ $question['category_name'] ?? '' }}
                            </a>
                            <a href="#"
                               class="truncate border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max text-[#A8ABB4] dark:text-[#84858F] px-2 flex gap-1 items-center">

                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.28996 6.49996C8.28996 7.48996 7.48996 8.28996 6.49996 8.28996C5.50996 8.28996 4.70996 7.48996 4.70996 6.49996C4.70996 5.50996 5.50996 4.70996 6.49996 4.70996C7.48996 4.70996 8.28996 5.50996 8.28996 6.49996Z"
                                        stroke="#84858F" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M6.49992 10.6349C8.26492 10.6349 9.90992 9.59486 11.0549 7.79486C11.5049 7.08986 11.5049 5.90486 11.0549 5.19986C9.90992 3.39986 8.26492 2.35986 6.49992 2.35986C4.73492 2.35986 3.08992 3.39986 1.94492 5.19986C1.49492 5.90486 1.49492 7.08986 1.94492 7.79486C3.08992 9.59486 4.73492 10.6349 6.49992 10.6349Z"
                                        stroke="#84858F" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                </svg>
                                {{ $question['views'] ?? 0 }}
                            </a>
                            <a href="#"
                               class="truncate border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max text-[#A8ABB4] dark:text-[#84858F] px-2 "
                               title="{{ jdate($question['created_at'])->format('Y/m/d') }}">
                                {{ jdate($question['created_at'])->format('Y/m/d') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
        @endforelse



    </div>
</div>
