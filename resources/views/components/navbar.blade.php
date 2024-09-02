<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Qwords</title>
</head>

<body>
    <div class="navbar lg:px-5 navbar-glass">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="font-bold menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 gap-2 shadow">
                    <li>
                        <details>
                            <summary>Cloud Hosting</summary>
                            <ul class="p-2">
                                <li><a>Submenu 1</a></li>
                                <li><a>Submenu 2</a></li>
                            </ul>
                        </details>
                    </li>
                    <li>
                        <details>
                            <summary>Server</summary>
                            <ul class="p-2">
                                <li><a>Submenu 1</a></li>
                                <li><a>Submenu 2</a></li>
                            </ul>
                        </details>
                    </li>
                    <li>
                        <details>
                            <summary>Domain</summary>
                            <ul class="p-2">
                                <li><a>Submenu 1</a></li>
                                <li><a>Submenu 2</a></li>
                            </ul>
                        </details>
                    </li>
                    <li>
                        <details>
                            <summary>Email Suite</summary>
                            <ul class="p-2">
                                <li><a>Submenu 1</a></li>
                                <li><a>Submenu 2</a></li>
                            </ul>
                        </details>
                    </li>
                    <li>
                        <details>
                            <summary>Services</summary>
                            <ul class="p-2">
                                <li><a>Submenu 1</a></li>
                                <li><a>Submenu 2</a></li>
                            </ul>
                        </details>
                    </li>
                    <li>
                        <details>
                            <summary>Internet Access</summary>
                            <ul class="p-2">
                                <li><a>Submenu 1</a></li>
                                <li><a>Submenu 2</a></li>
                            </ul>
                        </details>
                    </li>
                    <li><a>Promo</a></li>
                    <li class="flex flex-col justify-center gap-2">
                        <a href="https://portal.qwords.com/orderv10/orderhosting?pid=1006&billingcycle=annually"
                            class="w-full rounded-full text-white btn btn-primary">Daftar</a>
                        <a href="https://portal.qwords.com/login"
                            class="w-full rounded-full text-white btn btn-primary">Login</a>
                    </li>
                </ul>
            </div>
            <a href="/"><img src="{{ asset('assets/qwords.webp') }}" width="100" alt="qwords logo" /></a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal font-bold px-1">
                <li>
                    <details>
                        <summary>Cloud Hosting</summary>
                        <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </details>
                </li>
                <li>
                    <details>
                        <summary>Server</summary>
                        <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </details>
                </li>
                <li>
                    <details>
                        <summary>Domain</summary>
                        <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </details>
                </li>
                <li>
                    <details>
                        <summary>Email Suite</summary>
                        <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </details>
                </li>
                <li>
                    <details>
                        <summary>Services</summary>
                        <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </details>
                </li>
                <li>
                    <details>
                        <summary>Internet Access</summary>
                        <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </details>
                </li>
                <li><a>Promo</a></li>
            </ul>
        </div>
        <div class="navbar-end hidden lg:flex gap-2">
            <a href="https://portal.qwords.com/orderv10/orderhosting?pid=1006&billingcycle=annually"
                class="w-24 rounded-full text-white btn btn-primary">Daftar</a>
            <a href="https://portal.qwords.com/login"
                class="w-24 rounded-full text-white btn btn-primary">Login</a>
        </div>
    </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const detailsElements = document.querySelectorAll('details');

            detailsElements.forEach(details => {
                details.addEventListener('toggle', function() {
                    if (this.open) {
                        detailsElements.forEach(otherDetails => {
                            if (otherDetails !== this && otherDetails.open) {
                                otherDetails.open = false;
                            }
                        });
                        document.addEventListener('click', closeDetailsOutside);
                    }
                });
            });

            function closeDetailsOutside(event) {
                detailsElements.forEach(details => {
                    if (details.open && !details.contains(event.target)) {
                        details.open = false;
                    }
                });
            }
        });
    </script>
</body>

</html>
