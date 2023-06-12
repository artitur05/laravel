<div class="max-h-full w-2/12 bg-white shadow">
    <div class="pl-5 pr-5">
        <ul class="pt-5">
            <li class="w-full text-gray-700 cursor-pointer items-center mb-6">
                <a href="{{ route('admin.posts.index') }}"
                   class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">
                    <svg viewBox="0 0 24 24"
                         class="@if(request()->routeIs('admin.post.index')) fill-indigo-500 @else fill-indigo-200 @endif w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M5.25 7.5A2.25 2.25 0 017.5 5.25h9a2.25 2.25 0 012.25 2.25v9a2.25 2.25 0 01-2.25 2.25h-9a2.25 2.25 0 01-2.25-2.25v-9z"/>
                    </svg>
                    <span>Статьи</span>
                </a>
            </li>

            <li class="w-full text-gray-700 cursor-pointer items-center mb-6">
                <a href="{{ route('admin.categories.index') }}"
                   class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">
                    <svg viewBox="0 0 24 24" class="fill-indigo-200 w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M5.25 7.5A2.25 2.25 0 017.5 5.25h9a2.25 2.25 0 012.25 2.25v9a2.25 2.25 0 01-2.25 2.25h-9a2.25 2.25 0 01-2.25-2.25v-9z"/>
                    </svg>
                    <span>Категории статей</span>
                </a>
            </li>
            <li class="w-full text-gray-700 cursor-pointer items-center mb-6">
                <a href="{{ route('admin.users.index') }}"
                   class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">
                    <svg viewBox="0 0 24 24" class="fill-indigo-200 w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M5.25 7.5A2.25 2.25 0 017.5 5.25h9a2.25 2.25 0 012.25 2.25v9a2.25 2.25 0 01-2.25 2.25h-9a2.25 2.25 0 01-2.25-2.25v-9z"/>
                    </svg>
                    <span>Юзеры</span>
                </a>
            </li>
            <li class="w-full text-gray-700 cursor-pointer items-center mb-6">
                <a href="{{ \App\Jobs\MailSender::class }}"
                   class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">
                    <svg viewBox="0 0 24 24" class="fill-indigo-200 w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M5.25 7.5A2.25 2.25 0 017.5 5.25h9a2.25 2.25 0 012.25 2.25v9a2.25 2.25 0 01-2.25 2.25h-9a2.25 2.25 0 01-2.25-2.25v-9z"/>
                    </svg>
                    <span>Сделать рассылку</span>
                </a>
            </li>

        </ul>
    </div>
</div>
