<div class="border-t border-secondary">
    <div class="mx-20 pb-16 text-secondary pt-5 dark:text-white">
        <div class="flex flex-col md:flex-row justify-between gap-y-8 md:gap-y-0">
            <div class="flex flex-col gap-y-4">
                <h3 class="font-semibold">Feature</h3>
                <a href="{{ route('tentang-kami') }}" class="hover:text-primary">About</a>
                <a href="{{ route('pengacara.index') }}" class="hover:text-primary">Lawyers</a>
                <a href="{{ route('bantuan-hukum') }}" class="hover:text-primary">Bantuan Hukum</a>
            </div>
            <div class="flex flex-col gap-y-4">
                <h3 class="font-semibold">Help and Support</h3>
                <a href="https://wa.me/6289691973981" class="hover:text-primary">Contact Us</a>
                <a href="#faq" class="hover:text-primary">Knowledge Center</a>
                <a href="https://wa.me/6289691973981" class="hover:text-primary">Partnership & Sponsorship</a>
            </div>
            <div class="flex flex-col gap-y-4">
                <h3 class="font-semibold">Legal</h3>
                <a href="{{ route('privacy-policy') }}" class="hover:text-primary">Privacy Policy</a>
                <a href="{{ route('terms-condition') }}" class="hover:text-primary">Terms & Conditions</a>
            </div>
        </div>

        <div class="flex flex-col items-center justify-center mt-16 gap-y-5 text-center">
            <img src="{{ asset('assets/img/CerdasHukum-logo-landscape-dark.png') }}" class="w-52" alt="CerdasHukum Logo" />
            <p>&copy; 2024 CerdasHukum, Inc. All rights reserved.</p>

            <div class="flex gap-x-5">
                <a href="#"><svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.80078 17.2642C8.80078 17.1938 8.73047 17.1235 8.625 17.1235C8.51953 17.1235 8.44922 17.1938 8.44922 17.2642C8.44922 17.3345 8.51953 17.4048 8.625 17.3696C8.73047 17.3696 8.80078 17.3345 8.80078 17.2642ZM7.71094 17.0884C7.71094 17.1587 7.78125 17.2642 7.88672 17.2642C7.95703 17.2993 8.0625 17.2642 8.09766 17.1938C8.09766 17.1235 8.0625 17.0532 7.95703 17.0181C7.85156 16.9829 7.74609 17.0181 7.71094 17.0884ZM9.29297 17.0532C9.1875 17.0532 9.11719 17.1235 9.11719 17.229C9.11719 17.2993 9.22266 17.3345 9.32812 17.2993C9.43359 17.2642 9.50391 17.229 9.46875 17.1587C9.46875 17.0884 9.36328 17.0181 9.29297 17.0532ZM11.5781 3.55322C6.72656 3.55322 3 7.27979 3 12.1313C3 16.0337 5.42578 19.3735 8.94141 20.5688C9.39844 20.6392 9.53906 20.3579 9.53906 20.147C9.53906 19.9009 9.53906 18.7056 9.53906 17.9673C9.53906 17.9673 7.07812 18.4946 6.55078 16.9126C6.55078 16.9126 6.16406 15.8931 5.60156 15.647C5.60156 15.647 4.79297 15.0845 5.63672 15.0845C5.63672 15.0845 6.51562 15.1548 7.00781 15.9985C7.78125 17.3696 9.04688 16.9829 9.57422 16.7368C9.64453 16.1743 9.85547 15.7876 10.1367 15.5415C8.16797 15.3306 6.16406 15.0493 6.16406 11.6743C6.16406 10.6899 6.44531 10.2329 7.00781 9.6001C6.90234 9.354 6.62109 8.43994 7.11328 7.20947C7.81641 6.99854 9.53906 8.15869 9.53906 8.15869C10.2422 7.94775 10.9805 7.87744 11.7188 7.87744C12.4922 7.87744 13.2305 7.94775 13.9336 8.15869C13.9336 8.15869 15.6211 6.96338 16.3594 7.20947C16.8516 8.43994 16.5352 9.354 16.4648 9.6001C17.0273 10.2329 17.3789 10.6899 17.3789 11.6743C17.3789 15.0493 15.3047 15.3306 13.3359 15.5415C13.6523 15.8228 13.9336 16.3501 13.9336 17.1938C13.9336 18.354 13.8984 19.8306 13.8984 20.1118C13.8984 20.3579 14.0742 20.6392 14.5312 20.5337C18.0469 19.3735 20.4375 16.0337 20.4375 12.1313C20.4375 7.27979 16.4648 3.55322 11.5781 3.55322ZM6.41016 15.6821C6.33984 15.7173 6.375 15.8228 6.41016 15.8931C6.48047 15.9282 6.55078 15.9634 6.62109 15.9282C6.65625 15.8931 6.65625 15.7876 6.58594 15.7173C6.51562 15.6821 6.44531 15.647 6.41016 15.6821ZM6.02344 15.4009C5.98828 15.4712 6.02344 15.5063 6.09375 15.5415C6.16406 15.5767 6.23438 15.5767 6.26953 15.5063C6.26953 15.4712 6.23438 15.436 6.16406 15.4009C6.09375 15.3657 6.05859 15.3657 6.02344 15.4009ZM7.14844 16.6665C7.11328 16.7017 7.11328 16.8071 7.21875 16.8774C7.28906 16.9478 7.39453 16.9829 7.42969 16.9126C7.46484 16.8774 7.46484 16.772 7.39453 16.7017C7.32422 16.6313 7.21875 16.5962 7.14844 16.6665ZM6.76172 16.1392C6.69141 16.1743 6.69141 16.2798 6.76172 16.3501C6.83203 16.4204 6.90234 16.4556 6.97266 16.4204C7.00781 16.3853 7.00781 16.2798 6.97266 16.2095C6.90234 16.1392 6.83203 16.104 6.76172 16.1392Z"
                            fill="#9CA3AF" />
                    </svg>
                </a>
                <a href="#">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19.1367 9.17432C19.8398 8.64697 20.4727 8.01416 20.9648 7.27588C20.332 7.55713 19.5938 7.76807 18.8555 7.83838C19.6289 7.38135 20.1914 6.67822 20.4727 5.79932C19.7695 6.22119 18.9609 6.5376 18.1523 6.71338C17.4492 5.9751 16.5 5.55322 15.4453 5.55322C13.4062 5.55322 11.7539 7.20557 11.7539 9.24463C11.7539 9.52588 11.7891 9.80713 11.8594 10.0884C8.80078 9.9126 6.05859 8.43604 4.23047 6.22119C3.91406 6.74854 3.73828 7.38135 3.73828 8.08447C3.73828 9.3501 4.37109 10.4751 5.39062 11.1431C4.79297 11.1079 4.19531 10.9673 3.70312 10.686V10.7212C3.70312 12.5142 4.96875 13.9907 6.65625 14.3423C6.375 14.4126 6.02344 14.4829 5.70703 14.4829C5.46094 14.4829 5.25 14.4478 5.00391 14.4126C5.46094 15.8892 6.83203 16.9438 8.44922 16.979C7.18359 17.9634 5.60156 18.561 3.87891 18.561C3.5625 18.561 3.28125 18.5259 3 18.4907C4.61719 19.5454 6.55078 20.1431 8.66016 20.1431C15.4453 20.1431 19.1367 14.5532 19.1367 9.6665C19.1367 9.49072 19.1367 9.3501 19.1367 9.17432Z"
                            fill="#9CA3AF" />
                    </svg>
                </a>
                <a href="#">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.7188 3.55322C6.90234 3.55322 3 7.49072 3 12.272C3 17.0884 6.90234 20.9907 11.7188 20.9907C16.5 20.9907 20.4375 17.0884 20.4375 12.272C20.4375 7.49072 16.5 3.55322 11.7188 3.55322ZM17.4492 7.59619C18.5039 8.86182 19.1367 10.479 19.1367 12.2368C18.8906 12.1665 16.4297 11.6743 13.9688 11.9907C13.7578 11.4985 13.582 11.0767 13.3008 10.5142C16.0781 9.38916 17.3086 7.80713 17.4492 7.59619ZM16.6406 6.71729C16.5 6.92822 15.375 8.43994 12.7383 9.42432C11.5078 7.17432 10.1719 5.34619 9.96094 5.06494C12.3164 4.50244 14.8125 5.1001 16.6406 6.71729ZM8.51953 5.55713C8.73047 5.83838 10.0664 7.6665 11.2969 9.88135C7.81641 10.7954 4.75781 10.7954 4.40625 10.7603C4.89844 8.4751 6.44531 6.5415 8.51953 5.55713ZM4.26562 12.3071C4.26562 12.2368 4.26562 12.1665 4.26562 12.061C4.58203 12.0962 8.20312 12.1313 11.8945 11.0063C12.1406 11.4282 12.3164 11.8501 12.5273 12.272C9.82031 13.0454 7.35938 15.2251 6.16406 17.2642C4.96875 15.9634 4.26562 14.2056 4.26562 12.3071ZM7.11328 18.1782C7.92188 16.5962 10.0312 14.522 13.0195 13.5024C14.0742 16.2095 14.4961 18.4946 14.6016 19.1626C12.2109 20.1821 9.32812 19.9009 7.11328 18.1782ZM15.8672 18.4595C15.7969 18.0376 15.375 15.8579 14.4258 13.1509C16.7461 12.7993 18.7852 13.397 19.0664 13.4673C18.7148 15.5415 17.5195 17.3345 15.8672 18.4595Z"
                            fill="#9CA3AF" />
                    </svg>
                </a>
                <a href="#">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16.0352 13.6782L16.5273 10.4438H13.3984V8.33447C13.3984 7.42041 13.8203 6.57666 15.2266 6.57666H16.668V3.79932C16.668 3.79932 15.3672 3.55322 14.1367 3.55322C11.5703 3.55322 9.88281 5.13525 9.88281 7.94775V10.4438H7V13.6782H9.88281V21.5532H13.3984V13.6782H16.0352Z"
                            fill="#9CA3AF" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div
