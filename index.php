<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Satisfaction Meter</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="feedback">
            <img src="meg.png" alt="" style="width: 200px" />
            <h5 class="question" style="color: #00A0AD; font-weight: 600;">YOUR OPINION MATTERS!</h5>
            <h6 class="question" style="font-weight: 500;">HOW WOULD YOU RATE THIS WASHROOM TODAY?
            </h6>
            <div class="emoji-slider-container">
                <!-- Left Arrow -->
                <button class="arrow-left">&#10094;</button>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-slide-active" data-rating="1" data-color="#f05930">
                            <!-- rating-1 -->
                            <!-- <svg class="rating-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                <defs>
                                    <radialGradient id="radial-gradient" cx="14.714" cy="2.714" r="6"
                                        gradientTransform="matrix(2.667 0 0 1.167 -15.238 17.833)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#63b300" />
                                        <stop offset=".13" stop-color="#7ab80f" />
                                        <stop offset=".547" stop-color="#c1c63d" />
                                        <stop offset=".848" stop-color="#eed059" />
                                        <stop offset="1" stop-color="#ffd364" />
                                    </radialGradient>
                                    <style>
                                        .r1-4 {
                                            fill: #f6fafd
                                        }

                                        .r1-6 {
                                            fill: #273941
                                        }

                                        .r1-7 {
                                            fill: #78b300
                                        }

                                        .r1-8 {
                                            fill: #4f813b
                                        }

                                        .r1-11 {
                                            fill: #a9cc11
                                        }
                                    </style>
                                </defs>
                                <g id="_26-puke" data-name="26-puke">
                                    <circle cx="24" cy="24" r="23" style="fill:#ffce52" />
                                    <path
                                        d="M24 4c12.15 0 22 8.507 22 19h.975a23 23 0 0 0-45.95 0H2C2 12.507 11.85 4 24 4z"
                                        style="fill:#ffe369" />
                                    <path
                                        d="M46 23c0 10.493-9.85 19-22 19S2 33.493 2 23h-.975c-.014.332-.025.665-.025 1a23 23 0 0 0 46 0c0-.335-.011-.668-.025-1z"
                                        style="fill:#ffb32b" />
                                    <ellipse class="r1-4" cx="37" cy="9" rx=".825" ry="1.148"
                                        transform="rotate(-45.02 37 9)" />
                                    <ellipse class="r1-4" cx="30.746" cy="4.5" rx=".413" ry=".574"
                                        transform="rotate(-45.02 30.745 4.5)" />
                                    <ellipse class="r1-4" cx="34" cy="7" rx="1.65" ry="2.297"
                                        transform="rotate(-45.02 34 7)" />
                                    <ellipse cx="24" cy="21" rx="16" ry="7" style="fill:url(#radial-gradient)" />
                                    <ellipse class="r1-6" cx="24" cy="30" rx="13" ry="7" />
                                    <path class="r1-7"
                                        d="M9.6 41.93A3.324 3.324 0 0 1 12 41a2.959 2.959 0 0 1 2.92 1.74A2.486 2.486 0 0 1 16 42.5a2.354 2.354 0 0 1 1.38.42A3.259 3.259 0 0 1 20 41.75a3.259 3.259 0 0 1 2.62 1.17 2.477 2.477 0 0 1 2.76 0 3.519 3.519 0 0 1 5.24 0A2.354 2.354 0 0 1 32 42.5c.06 0 .12.01.18.01A3.047 3.047 0 0 1 35 41a3.394 3.394 0 0 1 .97.13 2.943 2.943 0 0 1 1.56.92 3.68 3.68 0 0 1 1.06-.28h.01c.13-.01.26-.02.4-.02a3.347 3.347 0 0 1 2.5 1.01 3.347 3.347 0 0 1 2.5-1.01c1.66 0 3 1.01 3 2.25v3H1v-3c0-.83.9-1.5 2-1.5a2.354 2.354 0 0 1 1.38.42A3.259 3.259 0 0 1 7 41.75a3.434 3.434 0 0 1 2.19.73 1.926 1.926 0 0 1 .41-.55z" />
                                    <path class="r1-8"
                                        d="M34.41 34.19c.38 2.7.99 6.21 1.59 6.81l-.03.13A3.394 3.394 0 0 0 35 41a3.047 3.047 0 0 0-2.82 1.51c-.06 0-.12-.01-.18-.01a2.354 2.354 0 0 0-1.38.42 3.519 3.519 0 0 0-5.24 0 2.477 2.477 0 0 0-2.76 0A3.259 3.259 0 0 0 20 41.75a3.259 3.259 0 0 0-2.62 1.17A2.354 2.354 0 0 0 16 42.5a2.486 2.486 0 0 0-1.08.24A2.959 2.959 0 0 0 12 41c.6-.6 1.21-4.11 1.59-6.81.25-1.77.41-3.19.41-3.19v-1a3 3 0 0 1 3-3h14a3 3 0 0 1 3 3v1s.16 1.42.41 3.19z" />
                                    <path class="r1-6"
                                        d="M37.553 20.9C35.764 20 33.717 20 30 20a1 1 0 0 1-1-1c0-2.265 3.568-5 8-5v2a7.8 7.8 0 0 0-5.418 2c3.057.018 4.962.151 6.865 1.1zM10.447 20.9l-.894-1.79c1.9-.951 3.808-1.084 6.865-1.1A7.8 7.8 0 0 0 11 16v-2c4.432 0 8 2.735 8 5a1 1 0 0 1-1 1c-3.717 0-5.764 0-7.553.9zM36 13c-5.131 0-9-2.149-9-5h2c0 1.416 2.994 3 7 3zM12 13v-2c4.006 0 7-1.584 7-3h2c0 2.851-3.869 5-9 5z" />
                                    <path
                                        d="M24 25c6.547 0 11.949 2.609 12.852 6A3.846 3.846 0 0 0 37 30c0-3.866-5.82-7-13-7s-13 3.134-13 7a3.846 3.846 0 0 0 .148 1c.903-3.391 6.305-6 12.852-6z"
                                        style="fill:#141e21" />
                                    <path class="r1-7"
                                        d="M14 33v-1a3 3 0 0 1 3-3h14a3 3 0 0 1 3 3v1s.16 1.42.41 3.19c.223 1.581.524 3.437.856 4.827a3.187 3.187 0 0 1 .7.113L36 41c-.6-.6-1.21-4.11-1.59-6.81C34.16 32.42 34 31 34 31v-1a3 3 0 0 0-3-3H17a3 3 0 0 0-3 3v1s-.16 1.42-.41 3.19c-.38 2.7-.99 6.21-1.59 6.81a3.931 3.931 0 0 1 .72.074c.337-1.4.644-3.281.87-4.884.25-1.77.41-3.19.41-3.19z" />
                                    <path
                                        d="M35 39a3.047 3.047 0 0 0-2.82 1.51c-.06 0-.12-.01-.18-.01a2.354 2.354 0 0 0-1.38.42 3.519 3.519 0 0 0-5.24 0 2.477 2.477 0 0 0-2.76 0A3.259 3.259 0 0 0 20 39.75a3.259 3.259 0 0 0-2.62 1.17A2.354 2.354 0 0 0 16 40.5a2.486 2.486 0 0 0-1.08.24 2.737 2.737 0 0 0-2.2-1.666A5.137 5.137 0 0 1 12 41a2.959 2.959 0 0 1 2.92 1.74A2.486 2.486 0 0 1 16 42.5a2.354 2.354 0 0 1 1.38.42A3.259 3.259 0 0 1 20 41.75a3.259 3.259 0 0 1 2.62 1.17 2.477 2.477 0 0 1 2.76 0 3.519 3.519 0 0 1 5.24 0A2.354 2.354 0 0 1 32 42.5c.06 0 .12.01.18.01A3.047 3.047 0 0 1 35 41a3.394 3.394 0 0 1 .97.13L36 41a5.292 5.292 0 0 1-.734-1.983C35.178 39.011 35.091 39 35 39z"
                                        style="fill:#426704" />
                                    <circle class="r1-7" cx="19" cy="32" r="2" />
                                    <circle class="r1-7" cx="22" cy="36" r="1" />
                                    <circle class="r1-7" cx="25" cy="32" r="1" />
                                    <circle class="r1-8" cx="16" cy="45" r="1" />
                                    <circle class="r1-8" cx="24" cy="44" r="1" />
                                    <circle class="r1-8" cx="32" cy="45" r="1" />
                                    <circle class="r1-8" cx="44" cy="43" r="1" />
                                    <circle class="r1-8" cx="8" cy="44" r="1" />
                                    <circle class="r1-11" cx="16.5" cy="37.5" r=".5" />
                                    <circle class="r1-11" cx="29.5" cy="31.5" r=".5" />
                                    <circle class="r1-11" cx="32.5" cy="36.5" r=".5" />
                                    <circle class="r1-11" cx="34.5" cy="44.5" r=".5" />
                                    <circle class="r1-11" cx="3.5" cy="43.5" r=".5" />
                                    <circle class="r1-11" cx="42.5" cy="43.5" r=".5" />
                                    <circle class="r1-11" cx="44.5" cy="45.5" r=".5" />
                                    <circle class="r1-11" cx="34.5" cy="42.5" r=".5" />
                                    <circle class="r1-11" cx="18.5" cy="43.5" r=".5" />
                                    <circle class="r1-11" cx="27.5" cy="45.5" r=".5" />
                                    <circle class="r1-11" cx="24.5" cy="38.5" r=".5" />
                                    <circle class="r1-7" cx="28" cy="36" r="2" />
                                    <circle class="r1-11" cx="39" cy="44" r="2" />
                                    <circle class="r1-11" cx="12" cy="44" r="2" />
                                    <ellipse class="r1-4" cx="41" cy="44" rx=".825" ry="1.148"
                                        transform="rotate(-45.02 41 44)" />
                                    <ellipse class="r1-4" cx="32" cy="31" rx=".825" ry="1.148"
                                        transform="rotate(-45.02 32 31)" />
                                    <ellipse class="r1-4" cx="38.746" cy="43.5" rx=".413" ry=".574"
                                        transform="rotate(-45.02 38.745 43.5)" />
                                    <ellipse class="r1-4" cx="32.746" cy="33.5" rx=".413" ry=".574"
                                        transform="rotate(-45.02 32.746 33.5)" />
                                </g>
                            </svg> -->
                            <svg class="rating-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                <defs>
                                    <radialGradient id="radial-gradient" cx="-27.957" cy="8.563" r="6"
                                        gradientTransform="matrix(3 0 0 2.5 107.871 -4.408)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#5987dd" />
                                        <stop offset=".118" stop-color="#638bd6" />
                                        <stop offset=".316" stop-color="#7d98c3" />
                                        <stop offset=".572" stop-color="#a8aba3" />
                                        <stop offset=".871" stop-color="#e3c678" />
                                        <stop offset="1" stop-color="#ffd364" />
                                    </radialGradient>
                                    <style>
                                        .cls-3 {
                                            fill: #ffb32b
                                        }

                                        .cls-4 {
                                            fill: #273941
                                        }

                                        .cls-5 {
                                            fill: #141e21
                                        }

                                        .cls-6 {
                                            fill: #f6fafd
                                        }
                                    </style>
                                </defs>
                                <g id="_27-feel_bad" data-name="27-feel bad">
                                    <circle cx="24" cy="24" r="23" style="fill:#ffce52" />
                                    <!-- <ellipse cx="24" cy="17" rx="18" ry="15" style="fill:url(#radial-gradient)" /> -->
                                    <path class="cls-3"
                                        d="M46 23c0 10.493-9.85 19-22 19S2 33.493 2 23h-.975c-.014.332-.025.665-.025 1a23 23 0 0 0 46 0c0-.335-.011-.668-.025-1z" />
                                    <ellipse class="cls-4" cx="33" cy="23" rx="3" ry="4" />
                                    <ellipse class="cls-5" cx="33" cy="23" rx="2" ry="3" />
                                    <circle class="cls-6" cx="34" cy="22" r="1" />
                                    <ellipse class="cls-4" cx="15" cy="23" rx="3" ry="4" />
                                    <ellipse class="cls-5" cx="15" cy="23" rx="2" ry="3" />
                                    <circle class="cls-6" cx="16" cy="22" r="1" />
                                    <path class="cls-5"
                                        d="M10 19v-2c3.722 0 6-1.295 6-2h2c0 2.626-4.024 4-8 4zM38 19c-3.976 0-8-1.374-8-4h2c0 .705 2.278 2 6 2z" />
                                    <path class="cls-4"
                                        d="M24 35h-5.5a5.265 5.265 0 0 1 5.5-5 5.265 5.265 0 0 1 5.5 5z" />
                                    <path class="cls-5"
                                        d="M24 31a5.4 5.4 0 0 1 5.39 4h.11a5.265 5.265 0 0 0-5.5-5 5.265 5.265 0 0 0-5.5 5h.11A5.4 5.4 0 0 1 24 31z" />
                                    <path d="M47 12a4 4 0 0 1-8 0c0-2.209 3-8 4-8s4 5.791 4 8z" style="fill:#3bc5f6" />
                                    <path
                                        d="M43 4c-1 0-4 5.791-4 8a4 4 0 0 0 8 0c0-2.209-3-8-4-8zm0 8.5a2.848 2.848 0 0 1-3-2.667C40 8.361 42.25 4.5 43 4.5s3 3.861 3 5.333a2.848 2.848 0 0 1-3 2.667z"
                                        style="fill:#00a3e1" />
                                    <path class="cls-3"
                                        d="M43 16a3.991 3.991 0 0 1-3.861-3.008A4.661 4.661 0 0 0 39 14a4 4 0 0 0 6.846 2.807q-.255-.777-.562-1.529A3.982 3.982 0 0 1 43 16z" />
                                    <ellipse class="cls-6" cx="44" cy="11" rx=".825" ry="1.148"
                                        transform="rotate(-45.02 44 11)" />
                                    <ellipse class="cls-6" cx="44.746" cy="9.5" rx=".413" ry=".574"
                                        transform="rotate(-45.02 44.746 9.5)" />
                                    <ellipse class="cls-6" cx="36" cy="9" rx=".825" ry="1.148"
                                        transform="rotate(-45.02 36 9)" />
                                    <ellipse class="cls-6" cx="29.746" cy="4.5" rx=".413" ry=".574"
                                        transform="rotate(-45.02 29.746 4.5)" />
                                    <ellipse class="cls-6" cx="33" cy="7" rx="1.65" ry="2.297"
                                        transform="rotate(-45.02 33 7)" />
                                </g>
                            </svg>
                        </div>
                        <div class="swiper-slide swiper-slide-active" data-rating="2" data-color="#f5924b">
                            <!-- rating-2 -->
                            <svg class="rating-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                <defs>
                                    <style>
                                        .r2-3 {
                                            fill: #273941
                                        }

                                        .r2-4 {
                                            fill: #141e21
                                        }

                                        .r2-5 {
                                            fill: #f6fafd
                                        }

                                        .r2-7 {
                                            fill: #ffb32b
                                        }
                                    </style>
                                </defs>
                                <g id="_23-sad" data-name="23-sad">
                                    <circle cx="24" cy="24" r="23" style="fill:#ffce52" />
                                    <!-- <path
                                        d="M37 35.667A3.179 3.179 0 0 1 34 39a3.179 3.179 0 0 1-3-3.333C31 33.826 33.25 29 34 29s3 4.826 3 6.667z"
                                        style="fill:#3bc5f6" /> -->
                                    <path class="r2-3"
                                        d="M10 17v-2c3.722 0 6-1.295 6-2h2c0 2.626-4.024 4-8 4zM38 17c-3.976 0-8-1.374-8-4h2c0 .705 2.278 2 6 2zM24 35a10.343 10.343 0 0 0-4 1 4 4 0 0 1 8 0 10.343 10.343 0 0 0-4-1z" />
                                    <circle class="r2-3" cx="34" cy="22" r="5" />
                                    <circle class="r2-3" cx="14" cy="22" r="5" />
                                    <circle class="r2-4" cx="34" cy="22" r="4" />
                                    <circle class="r2-4" cx="14" cy="22" r="4" />
                                    <circle class="r2-5" cx="35.5" cy="20.5" r="1.5" />
                                    <circle class="r2-5" cx="32.5" cy="23.5" r="1.5" />
                                    <circle class="r2-5" cx="35.5" cy="23.5" r=".5" />
                                    <circle class="r2-5" cx="12.5" cy="20.5" r="1.5" />
                                    <circle class="r2-5" cx="15.5" cy="23.5" r="1.5" />
                                    <circle class="r2-5" cx="12.5" cy="23.5" r=".5" />
                                    <path
                                        d="M24 4c12.15 0 22 8.507 22 19h.975a23 23 0 0 0-45.95 0H2C2 12.507 11.85 4 24 4z"
                                        style="fill:#ffe369" />
                                    <path class="r2-7"
                                        d="M46 23c0 10.493-9.85 19-22 19S2 33.493 2 23h-.975c-.014.332-.025.665-.025 1a23 23 0 0 0 46 0c0-.335-.011-.668-.025-1z" />
                                    <ellipse class="r2-5" cx="37" cy="9" rx=".825" ry="1.148"
                                        transform="rotate(-45.02 37 9)" />
                                    <ellipse class="r2-5" cx="30.746" cy="4.5" rx=".413" ry=".574"
                                        transform="rotate(-45.02 30.745 4.5)" />
                                    <ellipse class="r2-5" cx="34" cy="7" rx="1.65" ry="2.297"
                                        transform="rotate(-45.02 34 7)" />
                                    <!-- <path
                                        d="M34.135 29.047c.723.439 2.365 3.908 2.365 5.286a2.505 2.505 0 1 1-5 0c0-1.378 1.642-4.847 2.365-5.286-.852.469-2.865 4.877-2.865 6.62A3.179 3.179 0 0 0 34 39a3.179 3.179 0 0 0 3-3.333c0-1.743-2.013-6.151-2.865-6.62z"
                                        style="fill:#00a3e1" />
                                    <ellipse class="r2-5" cx="35" cy="35" rx=".825" ry="1.148"
                                        transform="rotate(-45.02 35 35)" />
                                    <ellipse class="r2-5" cx="35.746" cy="33.5" rx=".413" ry=".574"
                                        transform="rotate(-45.02 35.746 33.5)" />
                                    <path class="r2-7"
                                        d="M34 39a3.048 3.048 0 0 1-2.853-2.354A4.808 4.808 0 0 0 31 37.667 3.179 3.179 0 0 0 34 41a3.179 3.179 0 0 0 3-3.333 4.808 4.808 0 0 0-.147-1.021A3.048 3.048 0 0 1 34 39z" /> -->
                                </g>
                            </svg>
                        </div>
                        <div class="swiper-slide swiper-slide-active" data-rating="3" data-color="#ffc900">
                            <!-- rating-3 -->
                            <svg class="rating-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                <defs>
                                    <style>
                                        .r3-2 {
                                            fill: #273941
                                        }

                                        .r3-3 {
                                            fill: #141e21
                                        }

                                        .r3-4 {
                                            fill: #f6fafd
                                        }
                                    </style>
                                </defs>
                                <g id="_12-neutral" data-name="12-neutral">
                                    <circle cx="24" cy="24" r="23" style="fill:#ffce52" />
                                    <ellipse class="r3-2" cx="33" cy="18" rx="3" ry="4" />
                                    <ellipse class="r3-2" cx="15" cy="18" rx="3" ry="4" />
                                    <ellipse class="r3-3" cx="33" cy="18" rx="2" ry="3" />
                                    <ellipse class="r3-3" cx="15" cy="18" rx="2" ry="3" />
                                    <circle class="r3-4" cx="34" cy="17" r="1" />
                                    <circle class="r3-4" cx="16" cy="17" r="1" />
                                    <path
                                        d="M24 4c12.15 0 22 8.507 22 19h.975a23 23 0 0 0-45.95 0H2C2 12.507 11.85 4 24 4z"
                                        style="fill:#ffe369" />
                                    <path
                                        d="M46 23c0 10.493-9.85 19-22 19S2 33.493 2 23h-.975c-.014.332-.025.665-.025 1a23 23 0 0 0 46 0c0-.335-.011-.668-.025-1z"
                                        style="fill:#ffb32b" />
                                    <path class="r3-2" d="M16 32h16v2H16z" />
                                    <ellipse class="r3-4" cx="37" cy="9" rx=".825" ry="1.148"
                                        transform="rotate(-45.02 37 9)" />
                                    <ellipse class="r3-4" cx="30.746" cy="4.5" rx=".413" ry=".574"
                                        transform="rotate(-45.02 30.745 4.5)" />
                                    <ellipse class="r3-4" cx="34" cy="7" rx="1.65" ry="2.297"
                                        transform="rotate(-45.02 34 7)" />
                                </g>
                            </svg>
                        </div>
                        <div class="swiper-slide swiper-slide-active" data-rating="4" data-color="#a8d400">
                            <!-- rating-4 -->
                            <svg class="rating-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                <defs>
                                    <style>
                                        .r4-2 {
                                            fill: #273941
                                        }

                                        .r4-3 {
                                            fill: #141e21
                                        }

                                        .r4-4 {
                                            fill: #f6fafd
                                        }
                                    </style>
                                </defs>
                                <g id="_02-smile" data-name="02-smile">
                                    <circle cx="24" cy="24" r="23" style="fill:#ffce52" />
                                    <ellipse class="r4-2" cx="33" cy="18" rx="3" ry="4" />
                                    <ellipse class="r4-2" cx="15" cy="18" rx="3" ry="4" />
                                    <ellipse class="r4-3" cx="33" cy="18" rx="2" ry="3" />
                                    <ellipse class="r4-3" cx="15" cy="18" rx="2" ry="3" />
                                    <circle class="r4-4" cx="34" cy="17" r="1" />
                                    <circle class="r4-4" cx="16" cy="17" r="1" />
                                    <path class="r4-2"
                                        d="M24 39c-7.72 0-14-5.832-14-13h2c0 6.065 5.383 11 12 11s12-4.935 12-11h2c0 7.168-6.28 13-14 13z" />
                                    <path
                                        d="M24 4c12.15 0 22 8.507 22 19h.975a23 23 0 0 0-45.95 0H2C2 12.507 11.85 4 24 4z"
                                        style="fill:#ffe369" />
                                    <path
                                        d="M46 23c0 10.493-9.85 19-22 19S2 33.493 2 23h-.975c-.014.332-.025.665-.025 1a23 23 0 0 0 46 0c0-.335-.011-.668-.025-1z"
                                        style="fill:#ffb32b" />
                                    <ellipse class="r4-4" cx="37" cy="9" rx=".825" ry="1.148"
                                        transform="rotate(-45.02 37 9)" />
                                    <ellipse class="r4-4" cx="30.746" cy="4.5" rx=".413" ry=".574"
                                        transform="rotate(-45.02 30.745 4.5)" />
                                    <ellipse class="r4-4" cx="34" cy="7" rx="1.65" ry="2.297"
                                        transform="rotate(-45.02 34 7)" />
                                </g>
                            </svg>
                        </div>
                        <div class="swiper-slide swiper-slide-active" data-rating="5" data-color="#5abf00">
                            <!-- rating-5 -->
                            <svg class="rating-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                <defs>
                                    <style>
                                        .r5-4 {
                                            fill: #f6fafd
                                        }

                                        .r5-6 {
                                            fill: #ae2d4c
                                        }

                                        .r5-7 {
                                            fill: #cf4054
                                        }

                                        .r5-10 {
                                            fill: #fbb40a
                                        }
                                    </style>
                                </defs>
                                <g id="_13-love" data-name="13-love">
                                    <circle cx="24" cy="24" r="23" style="fill:#ffce52" />
                                    <path
                                        d="M24 4c12.15 0 22 8.507 22 19h.975a23 23 0 0 0-45.95 0H2C2 12.507 11.85 4 24 4z"
                                        style="fill:#ffe369" />
                                    <path
                                        d="M46 23c0 10.493-9.85 19-22 19S2 33.493 2 23h-.975c-.014.332-.025.665-.025 1a23 23 0 0 0 46 0c0-.335-.011-.668-.025-1z"
                                        style="fill:#ffb32b" />
                                    <ellipse class="r5-4" cx="37" cy="9" rx=".825" ry="1.148"
                                        transform="rotate(-45.02 37 9)" />
                                    <ellipse class="r5-4" cx="30.746" cy="4.5" rx=".413" ry=".574"
                                        transform="rotate(-45.02 30.745 4.5)" />
                                    <ellipse class="r5-4" cx="34" cy="7" rx="1.65" ry="2.297"
                                        transform="rotate(-45.02 34 7)" />
                                    <path
                                        d="M34 39c0-2.76-4.47-5-10-5s-10 2.24-10 5l-.1.13A10.727 10.727 0 0 1 9 30.15 2.025 2.025 0 0 1 10.87 28c1.88 1.08 6.39 1 13.13 1s11.25.08 13.12-1A2.026 2.026 0 0 1 39 30.15a10.727 10.727 0 0 1-4.9 8.98z"
                                        style="fill:#273941" />
                                    <path class="r5-6"
                                        d="m34 39 .1.13A17.882 17.882 0 0 1 24 42a17.882 17.882 0 0 1-10.1-2.87L14 39c0-2.76 4.47-5 10-5s10 2.24 10 5z" />
                                    <path class="r5-7"
                                        d="M16.5 9a4.465 4.465 0 0 1 4.5 4.8C21 21 13.5 25 12 25c-.72 0-8.38-3.7-8.97-10.39Q3 14.205 3 13.8a4.451 4.451 0 0 1 3.58-4.7A4.053 4.053 0 0 1 7.5 9c2.25 0 3.75 1.6 4.5 4 .75-2.4 2.25-4 4.5-4zM45 13.8q0 .4-.03.81C44.44 21.3 37.44 25 36 25c-.75 0-9-4-9-11.2A4.465 4.465 0 0 1 31.5 9c2.25 0 3.75 1.6 4.5 4 .75-2.4 2.25-4 4.5-4a4.053 4.053 0 0 1 .92.1A4.451 4.451 0 0 1 45 13.8z" />
                                    <path
                                        d="M10.87 30c1.88 1.08 6.39 1 13.13 1s11.25.08 13.12-1a1.926 1.926 0 0 1 1.793 1.536A11.043 11.043 0 0 0 39 30.15 2.026 2.026 0 0 0 37.12 28c-1.87 1.08-6.38 1-13.12 1s-11.25.08-13.13-1A2.025 2.025 0 0 0 9 30.15a11.015 11.015 0 0 0 .087 1.385A1.92 1.92 0 0 1 10.87 30z"
                                        style="fill:#141e21" />
                                    <path
                                        d="M33.531 37.486A18.171 18.171 0 0 1 24 40a18.171 18.171 0 0 1-9.531-2.514A2.809 2.809 0 0 0 14 39l-.1.13A17.882 17.882 0 0 0 24 42a17.882 17.882 0 0 0 10.1-2.87L34 39a2.809 2.809 0 0 0-.469-1.514z"
                                        style="fill:#8a293d" />
                                    <path class="r5-10"
                                        d="M36 25c-.71 0-8.131-3.59-8.921-10.081A6 6 0 0 0 27 15.8C27 23 35.25 27 36 27c1.44 0 8.44-3.7 8.97-10.39q.03-.41.03-.81a6.079 6.079 0 0 0-.07-.907C44.225 21.4 37.419 25 36 25zM12 25c-.71 0-8.131-3.59-8.921-10.081A6 6 0 0 0 3 15.8C3 23 11.25 27 12 27c1.44 0 8.44-3.7 8.97-10.39q.03-.41.03-.81a6.079 6.079 0 0 0-.07-.907C20.225 21.4 13.419 25 12 25z" />
                                    <path class="r5-6"
                                        d="M40.5 9c-2.25 0-3.75 1.6-4.5 4 .583-1.8 1.75-3 3.5-3a3.408 3.408 0 0 1 3.5 3.6c0 5.4-5.833 8.4-7 8.4-.56 0-6.518-2.775-6.977-7.793A8.167 8.167 0 0 1 29 13.6a3.366 3.366 0 0 1 2.784-3.525A3.243 3.243 0 0 1 32.5 10c1.75 0 2.917 1.2 3.5 3-.75-2.4-2.25-4-4.5-4a4.053 4.053 0 0 0-.92.1A4.451 4.451 0 0 0 27 13.8q0 .4.03.81C27.62 21.3 35.28 25 36 25c1.5 0 9-4 9-11.2A4.465 4.465 0 0 0 40.5 9zM16.5 9c-2.25 0-3.75 1.6-4.5 4 .583-1.8 1.75-3 3.5-3a3.408 3.408 0 0 1 3.5 3.6c0 5.4-5.833 8.4-7 8.4-.56 0-6.518-2.775-6.977-7.793A8.25 8.25 0 0 1 5 13.6a3.366 3.366 0 0 1 2.784-3.525A3.243 3.243 0 0 1 8.5 10c1.75 0 2.917 1.2 3.5 3-.75-2.4-2.25-4-4.5-4a4.053 4.053 0 0 0-.92.1A4.451 4.451 0 0 0 3 13.8q0 .4.03.81C3.62 21.3 11.28 25 12 25c1.5 0 9-4 9-11.2A4.465 4.465 0 0 0 16.5 9z" />
                                    <ellipse class="r5-4" cx="42" cy="13" rx=".825" ry="1.148"
                                        transform="rotate(-45.02 41.999 13)" />
                                    <ellipse class="r5-4" cx="40.746" cy="11.5" rx=".413" ry=".574"
                                        transform="rotate(-45.02 40.746 11.5)" />
                                    <ellipse class="r5-4" cx="18" cy="13" rx=".825" ry="1.148"
                                        transform="rotate(-45.02 18 13)" />
                                    <ellipse class="r5-4" cx="16.746" cy="11.5" rx=".413" ry=".574"
                                        transform="rotate(-45.02 16.745 11.5)" />
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Right Arrow -->
                <button class="arrow-right">&#10095;</button>
            </div>
            <div class="stars" id="starDisplay"></div> <!-- put stars here -->
            <br>
            <textarea name="comment" id="comment" class="form-control" rows="4"
                placeholder="Your feedback helps us get better—tell us about your experience!"></textarea>
            <br>
            <button type="button" id="submit" class="btn" style="background-color: #004AAD; color: white;">Submit
                Rating</button>
            <!-- <br> -->
            <!-- <a href="result.php">View result</a> -->
            <!-- <img src="3logo.png" alt="" style="width: 100%"> -->
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
<script>
    var rating = 0;

    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        initialSlide: 4,
        spaceBetween: 10,
        loop: true,
        centeredSlides: true,
        on: {
            slideChangeTransitionEnd: function () {
                var activeSlide = this.slides[this.activeIndex];

                rating = parseInt(activeSlide.getAttribute("data-rating"));
                updateStars(rating);

                document.querySelectorAll('.swiper-slide svg').forEach(svg => {
                    if (window.innerWidth <= 768) {
                        svg.style.width = "40px";  // Reset size
                        svg.style.height = "40px";
                    } else {
                        svg.style.width = "50px";  // Reset size
                        svg.style.height = "50px";
                    }
                });

                let activeSvg = document.querySelector('.swiper-slide-active svg');
                if (window.innerWidth <= 768) {
                    activeSvg.style.width = "50px";
                    activeSvg.style.height = "50px";
                } else {
                    activeSvg.style.width = "70px";
                    activeSvg.style.height = "70px";
                }
            }
        },
    });

    function updateStars(rating) {
        let starContainer = document.getElementById("starDisplay");
        starContainer.innerHTML = ''; // Clear previous stars

        // Create the stars based on the rating
        for (let i = 1; i <= rating; i++) {
            let star = document.createElement('span');
            star.classList.add('star'); // Add a class to style the stars
            starContainer.appendChild(star);
        }
    }

    // Set initial star display and background color
    var initialSlide = document.querySelector(".swiper-slide[data-rating='3']");
    updateStars(5);

    // Arrow controls
    document.querySelector('.arrow-left').addEventListener('click', () => {
        swiper.slidePrev();
    });

    document.querySelector('.arrow-right').addEventListener('click', () => {
        swiper.slideNext();
    });

    function valid() {
        if (rating == 0) {
            Swal.fire({
                title: 'Your Rating is required.',
                text: 'Please select a rating!',
                icon: 'info',
                confirmButtonText: 'OK',
                customClass: {
                    title: 'swal-title',
                    confirmButton: 'swal-confirm-button'
                }
            });
            return false;
        }

        return true;
    }

    $(document).on('click', '#submit', function () {
        if (valid())
            Swal.fire({
                title: 'Sending...',
                text: 'Thank you for your patience!',
                icon: 'info',
                allowOutsideClick: false,
                showConfirmButton: false,
                didOpen: () => {
                    // Show loading spinner
                    Swal.showLoading();

                    $.ajax({
                        type: "post",
                        url: "rater.php",
                        data: {
                            c: '<?php echo $_GET['c']; ?>',
                            f: '<?php echo $_GET['f']; ?>',
                            o: '<?php echo $_GET['o']; ?>',
                            g: '<?php echo $_GET['g']; ?>',
                            t: '<?php echo $_GET['t']; ?>',
                            rate: rating,
                            comment: $('#comment').val()
                        },
                        success: function (response) {
                            if (Number.isInteger(parseInt(response))) {
                                Swal.fire({
                                    title: 'We appreciate your feedback!',
                                    text: 'Thank you for sharing your thoughts. We will keep working to provide a better experience.',
                                    icon: 'success',
                                    confirmButtonText: 'Rate us again!',
                                    allowOutsideClick: false,
                                    customClass: {
                                        title: 'swal-title',
                                        confirmButton: 'swal-confirm-button'
                                    }
                                }).then((result) => {
                                    $('#comment').val('');
                                    $('input[type="radio"]').prop('checked', false);
                                });
                            } else {
                                Swal.fire({
                                    title: 'Error!',
                                    text: 'Something went wrong and your rating was not submitted!',
                                    icon: 'error',
                                    confirmButtonText: 'Try again',
                                    customClass: {
                                        title: 'swal-title',
                                        confirmButton: 'swal-confirm-button'
                                    }
                                });
                            }
                        }, error: function () {
                            Swal.fire({
                                title: 'Error!',
                                text: 'Something went wrong and your rating was not submitted!',
                                icon: 'error',
                                confirmButtonText: 'Try again',
                                customClass: {
                                    title: 'swal-title',
                                    confirmButton: 'swal-confirm-button'
                                }
                            });
                        }
                    });
                }
            })
    });
</script>

</html>