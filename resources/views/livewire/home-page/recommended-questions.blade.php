<div>
    <div
        class=" w-full  max-w-full dark:text-[#FCFCFC] rounded-xl  border border-[#F4F4F4] dark:border-0 h-min p-3 bg-white dark:bg-[#0C0D0F] dark:border-[#33353B] flex flex-col gap-7 max-h-[511px] overflow-y-auto !overflow-x-hidden min-h-[300px] ">

        <div class="text-center">
            <span class="text-[#173E99] dark:text-[#FCFCFC] text-center">مطالب پیشنهادی</span>
        </div>
        @forelse($questions['data'] as $question)
            <div class="w-full">
                <div class="flex  gap-3 overflow-x-hidden h-max w-full">

                    <div class="w-[25%]">
                        <img src="{{ asset('images/deryn-macey-kPLccIMtS8E-unsplash.jpg') }}" alt="img"
                             class="rounded-lg w-full aspect-square">

                    </div>
                    <div class="flex flex-col justify-between items-center  w-[75%] py-2 ">
                        <div class="flex truncate items-center w-full text-xs ">
                            <a href="{{ route('single-question',$question['slug']) }}"
                               class="text-[#0F0F0E] dark:text-[#FCFCFC] truncate  text-sm">
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
                               class="truncate border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max text-[#A8ABB4] dark:text-[#84858F] px-2"
                               title="{{ $question['author'] ?? '' }}"> {{ $question['author'] ?? '' }} </a>
                            <a href="#"
                               class="truncate border-l border-[#ECEEF3] dark:border-[#191B21] min-w-max text-[#A8ABB4] dark:text-[#84858F] px-2 "
                               title="{{ jdate($question['created_at'])->format('Y/m/d') }}">{{ jdate($question['created_at'])->format('Y/m/d') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
        @endforelse



    </div>
</div>
