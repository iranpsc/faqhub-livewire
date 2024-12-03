<div>

    <div class="w-full  overflow-hidden border border-[#F4F4F4] dark:border-0 h-min rounded-xl ">
        <div class="flex gap-3 items-center px-6 py-4 bg-[#FFFFFF] dark:bg-[#0C0D0F] w-full">
            <span class="text-[#173E99] dark:text-[#5A5F66]">کل سوالات پرسیده شده :   </span>
            <span class="dark:text-[#DFE2EB] text-[#5A5F66]">{{ $statistics['data']['allAskedQuestions'] ?? 0 }}</span>
        </div>
        <div class="flex gap-3 items-center px-6 py-4 bg-[#E9F0FF66] dark:bg-[#191B21B2] w-full">
            <span class="text-[#173E99] dark:text-[#5A5F66]">کل سوالات حل شده :   </span>
            <span class="dark:text-[#DFE2EB] text-[#5A5F66]">{{ $statistics['data']['allSolvedQuestions'] ?? 0 }}</span>
        </div>
        <div class="flex gap-3 items-center px-6 py-4 bg-[#FFFFFF] dark:bg-[#0C0D0F] w-full">
            <span class="text-[#173E99] dark:text-[#5A5F66]">کل پاسخ ارسال شده است :   </span>
            <span class="dark:text-[#DFE2EB] text-[#5A5F66]">{{ $statistics['data']['answeredQuestions'] ?? 0 }}</span>
        </div>
        <div class="flex gap-3 items-center px-6 py-4 bg-[#E9F0FF66] dark:bg-[#191B21B2] w-full">
            <span class="text-[#173E99] dark:text-[#5A5F66]">کل اعضای انجمن :   </span>
            <span class="dark:text-[#DFE2EB] text-[#5A5F66]">{{ $statistics['data']['usersCount'] ?? 0 }}</span>
        </div>
    </div>
</div>
