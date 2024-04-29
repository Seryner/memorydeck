<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="bg-gray-50 text-black/50">
            <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" />
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                 width="270.000000pt" height="270.000000pt" viewBox="0 0 270.000000 270.000000"
                                 preserveAspectRatio="xMidYMid meet">
                                <metadata>
                                    Created by potrace 1.10, written by Peter Selinger 2001-2011
                                </metadata>
                                <g transform="translate(0.000000,270.000000) scale(0.100000,-0.100000)"
                                   fill="#000000" stroke="none">
                                    <path d="M1235 2217 c-59 -23 -184 -101 -178 -110 3 -6 1 -7 -5 -3 -11 6 -310
                                            -170 -350 -207 -50 -46 -52 -59 -52 -327 0 -208 3 -256 16 -281 9 -18 22 -29
                                            31 -27 13 3 15 36 14 260 -2 201 1 264 12 290 12 29 49 55 262 183 137 81 269
                                            154 293 162 55 16 133 17 187 2 54 -15 452 -253 491 -294 42 -43 48 -95 43
                                            -379 -4 -191 -2 -221 11 -221 8 0 23 16 32 35 16 30 18 66 18 275 -1 271 -5
                                            295 -66 350 -50 45 -447 282 -493 295 -49 13 -229 11 -266 -3z"/>
                                    <path d="M1405 2090 c-16 -4 -138 -70 -270 -147 -296 -172 -291 -164 -148
                                            -251 54 -32 141 -85 193 -117 80 -50 101 -59 143 -59 40 -1 52 3 68 22 23 29
                                            13 53 -31 74 l-31 15 46 27 46 28 40 -26 c44 -29 71 -33 89 -11 16 20 6 43
                                            -25 57 -14 6 -25 14 -25 17 0 3 19 18 42 33 l42 27 36 -21 c74 -46 70 -45 90
                                            -20 23 28 17 47 -21 62 -16 7 -29 15 -29 19 0 3 19 16 42 29 l41 22 56 -33
                                            c37 -22 56 -40 56 -52 0 -14 -36 -41 -130 -99 -311 -189 -354 -218 -360 -236
                                            -5 -15 -15 -20 -45 -20 -21 0 -42 5 -45 10 -3 6 -9 10 -13 10 -4 0 -7 -117 -7
                                            -260 0 -190 3 -262 12 -271 7 -7 37 -14 68 -17 44 -4 60 -1 75 13 19 17 20 32
                                            20 265 0 209 2 249 15 253 8 4 17 2 20 -3 3 -5 5 -111 4 -236 -1 -161 2 -229
                                            11 -237 17 -17 41 20 35 52 -3 14 -3 100 1 189 l7 164 40 29 c68 49 67 51 67
                                            -155 0 -102 4 -187 9 -191 5 -3 17 2 25 11 14 13 16 47 16 219 0 134 4 206 11
                                            210 6 4 12 5 15 2 3 -2 5 -87 6 -188 2 -184 8 -220 34 -198 11 9 14 55 14 214
                                            0 157 3 205 13 214 8 6 17 8 20 4 4 -3 7 -91 7 -195 l0 -189 23 3 22 3 5 268
                                            c5 277 8 295 47 280 9 -3 11 0 7 10 -3 9 -14 14 -25 12 -11 -2 -17 0 -14 6 4
                                            5 11 7 16 4 12 -8 12 8 -1 21 -6 6 -1 10 15 12 14 1 25 -3 25 -9 0 -6 -7 -9
                                            -14 -6 -10 4 -13 1 -9 -8 3 -8 8 -13 12 -10 4 2 7 -6 6 -17 -1 -12 -7 -24 -13
                                            -26 -9 -3 -12 -69 -12 -243 0 -205 2 -240 15 -245 8 -4 22 -1 30 6 13 11 15
                                            58 15 300 0 273 -1 289 -20 313 -23 30 -372 241 -432 263 -44 15 -49 16 -93 4z
                                            m107 -54 c20 -10 41 -15 47 -12 7 4 8 1 5 -8 -6 -15 5 -20 33 -17 6 1 14 -3
                                            18 -9 3 -6 0 -7 -10 -4 -9 4 -15 2 -13 -4 2 -5 -1 -11 -7 -12 -5 0 -13 -10
                                            -17 -21 -7 -17 -11 -18 -30 -8 -22 12 -22 11 -8 -6 9 -11 10 -16 3 -11 -8 4
                                            -13 2 -13 -5 0 -7 -3 -9 -7 -6 -3 4 -17 0 -30 -8 -35 -24 -73 -36 -73 -25 0 6
                                            9 10 20 10 11 0 20 5 20 10 0 6 8 10 18 10 13 0 14 2 4 9 -11 7 -10 9 3 15 9
                                            3 13 11 9 17 -4 7 -3 9 2 6 6 -3 16 -2 24 4 13 7 13 9 0 10 -8 1 -18 1 -23 0
                                            -4 -1 -21 14 -38 31 -17 18 -28 26 -24 18 4 -10 2 -9 -8 2 -9 12 -17 14 -24 7
                                            -7 -7 -12 -6 -16 5 -3 8 -1 18 5 22 7 4 8 3 4 -4 -4 -7 -3 -12 3 -12 5 0 13 5
                                            16 10 5 8 12 7 23 -2 10 -8 13 -9 9 -1 -7 12 23 24 33 13 3 -3 21 -13 42 -24z
                                            m-207 -59 c-11 -6 -14 -12 -7 -16 7 -4 4 -11 -8 -18 -23 -15 -44 4 -30 27 8
                                            12 10 13 10 1 0 -20 40 17 41 38 1 12 3 11 6 -3 3 -12 -2 -23 -12 -29z m129
                                            -3 l38 -26 -42 -19 c-42 -19 -43 -19 -76 2 -19 11 -34 22 -34 24 0 4 63 45 70
                                            45 3 0 23 -12 44 -26z m242 -47 c-12 -12 -122 -82 -243 -155 l-221 -132 -41
                                            23 c-22 12 -41 24 -41 27 0 3 22 19 48 35 64 41 68 73 14 113 l-40 28 45 27
                                            44 27 32 -22 c18 -12 34 -23 37 -26 3 -2 -3 -8 -13 -13 -26 -15 -22 -58 8 -69
                                            32 -12 37 -10 185 78 102 60 128 72 142 63 23 -14 31 -14 22 1 -4 6 -3 8 4 4
                                            6 -3 13 -2 17 4 3 5 10 10 15 10 5 0 -1 -10 -14 -23z m-325 -31 c5 3 12 -2 15
                                            -10 3 -9 10 -13 15 -10 5 3 15 -1 23 -9 12 -11 11 -15 -5 -25 -10 -6 -26 -9
                                            -35 -5 -10 4 -15 2 -11 -3 3 -5 -2 -10 -12 -10 -10 0 -18 6 -18 12 0 7 6 10
                                            14 7 7 -3 13 -1 14 3 0 5 2 17 4 27 2 9 -1 15 -6 11 -5 -3 -6 -11 -3 -17 4 -7
                                            4 -9 0 -5 -4 3 -8 10 -9 15 -2 13 -21 31 -29 26 -4 -2 -5 4 -1 13 5 13 3 15
                                            -7 9 -9 -6 -11 -4 -5 5 6 10 13 6 27 -14 11 -14 24 -24 29 -20z m-189 17 c-6
                                            -2 -10 -9 -7 -14 4 -5 -2 -6 -11 -2 -11 4 -15 3 -10 -5 3 -6 2 -14 -4 -17 -8
                                            -5 -8 -11 0 -20 17 -20 -2 -25 -30 -8 l-25 14 25 -5 c21 -4 22 -3 8 7 -15 10
                                            -13 13 15 34 17 13 36 23 41 22 6 0 5 -3 -2 -6z m485 -78 c6 -16 -26 -60 -36
                                            -50 -3 4 1 10 9 15 13 8 13 10 0 10 -9 0 -21 -5 -28 -10 -6 -6 -10 -7 -7 -4 3
                                            4 0 13 -5 19 -8 9 -6 15 6 19 9 4 19 4 22 1 3 -3 0 -5 -6 -5 -7 0 -12 -5 -12
                                            -10 0 -7 6 -7 19 0 14 7 21 6 24 -3 3 -7 6 -6 6 5 1 9 -5 19 -11 21 -10 4 -10
                                            6 0 6 7 1 15 -6 19 -14z m-546 -22 c16 -10 29 -20 29 -24 0 -4 -17 -17 -37
                                            -29 -35 -21 -39 -21 -65 -5 -15 9 -32 13 -38 10 -5 -3 -8 0 -5 7 4 10 63 51
                                            83 57 2 1 17 -7 33 -16z m-138 -20 c-9 -3 -8 -11 5 -31 16 -26 16 -26 -1 -13
                                            -9 7 -17 10 -17 5 0 -5 -4 -2 -10 6 -10 16 5 41 24 39 7 0 7 -2 -1 -6z m213
                                            -27 c-16 -14 -36 -22 -44 -18 -11 4 -13 2 -7 -8 5 -9 4 -11 -4 -6 -16 10 -3
                                            27 17 24 10 -2 16 3 14 10 -1 8 1 11 6 8 4 -2 14 -1 22 5 28 17 25 8 -4 -15z
                                            m307 -16 c-13 -5 -23 -14 -23 -20 0 -6 6 -8 13 -4 6 4 9 3 4 -1 -4 -5 0 -16 9
                                            -26 15 -16 14 -17 -10 -15 -14 2 -32 9 -40 15 -8 7 -19 10 -24 7 -5 -3 -9 1
                                            -9 8 0 8 7 12 15 8 11 -4 13 -1 7 9 -4 8 -5 11 0 7 4 -4 17 -1 29 7 11 8 27
                                            15 36 14 9 0 6 -4 -7 -9z m-373 -55 c0 -29 -12 -32 -31 -9 -10 13 -10 17 2 25
                                            23 14 29 11 29 -16z m704 -54 c-3 -20 -7 -44 -9 -54 -2 -9 0 -15 5 -12 4 3 10
                                            -1 13 -8 3 -8 -8 -13 -32 -14 -21 -2 -43 -11 -53 -23 -9 -11 -23 -18 -30 -15
                                            -17 7 -74 -54 -69 -74 2 -13 0 -13 -13 -2 -13 11 -20 11 -41 -3 -21 -14 -24
                                            -14 -19 -1 4 8 1 15 -5 15 -6 0 -11 -9 -11 -21 0 -11 -4 -18 -9 -14 -5 3 -17
                                            -2 -25 -11 -15 -14 -16 -14 -16 5 0 12 -5 21 -11 21 -6 0 -8 7 -5 16 4 11 2
                                            15 -8 11 -10 -4 -13 -1 -9 9 3 7 10 14 15 14 6 0 7 7 4 16 -6 15 -4 15 11 3
                                            15 -12 16 -12 10 4 -4 11 -3 16 3 12 13 -8 52 19 43 29 -4 4 1 4 12 0 14 -6
                                            17 -4 12 9 -4 11 -2 14 7 11 8 -3 24 7 36 23 13 15 20 21 17 11 -4 -11 -1 -15
                                            11 -13 10 1 16 9 14 20 -2 9 1 15 6 12 9 -7 73 29 84 47 3 6 20 11 36 12 29 1
                                            30 0 26 -35z m-498 12 c-15 -4 -16 -7 -5 -15 10 -7 8 -8 -9 -5 -19 5 -21 3
                                            -11 -9 6 -7 15 -12 19 -9 4 3 13 -1 19 -9 9 -11 9 -15 -1 -19 -7 -3 -2 -6 12
                                            -6 20 -1 22 -3 10 -11 -13 -9 -13 -10 0 -11 10 0 8 -3 -5 -9 -27 -12 -43 -12
                                            -25 0 11 7 7 10 -18 10 -23 0 -31 -4 -26 -12 4 -7 3 -8 -5 -4 -6 4 -9 12 -6
                                            17 4 5 0 9 -7 9 -8 0 -22 10 -32 21 -18 22 -18 22 10 15 28 -7 28 -7 9 8 -25
                                            19 -6 21 21 2 18 -14 18 -15 -6 -25 -15 -6 -19 -10 -9 -10 25 -1 41 23 26 38
                                            -9 10 -8 15 7 27 11 8 27 13 35 13 11 -1 10 -3 -3 -6z m96 -210 c-6 -2 -10 -9
                                            -6 -14 3 -5 0 -9 -6 -9 -14 0 -10 -392 4 -402 7 -5 7 -11 -2 -20 -14 -14 -16
                                            -42 -2 -33 6 3 10 -1 10 -9 0 -8 -5 -18 -12 -22 -7 -4 -8 -3 -4 4 5 8 2 10 -8
                                            6 -9 -3 -13 -11 -9 -18 4 -6 -2 -4 -12 4 -11 9 -16 10 -11 3 10 -17 -24 -16
                                            -46 1 -16 12 -18 35 -18 222 0 115 4 214 8 221 4 6 23 14 43 18 25 5 40 14 48
                                            31 6 13 16 24 23 23 10 0 10 -2 0 -6z"/>
                                    <path d="M757 1773 c-4 -3 -7 -129 -7 -278 0 -229 2 -275 15 -285 8 -7 22 -10
                                            30 -6 23 8 22 537 -1 560 -17 17 -27 20 -37 9z"/>
                                    <path d="M840 1640 c0 -63 8 -77 60 -111 25 -16 25 -17 30 -220 5 -196 6 -204
                                            25 -204 19 0 20 8 23 188 3 196 2 195 45 188 4 0 7 4 7 9 0 10 -18 14 -57 11
                                            -11 -1 -24 3 -29 10 -4 7 -3 10 3 6 11 -7 11 22 0 40 -4 6 -3 14 3 18 6 4 7
                                            12 4 18 -4 7 -4 9 1 5 4 -4 13 -3 20 2 8 7 12 5 12 -5 0 -8 -4 -12 -9 -9 -4 3
                                            -8 3 -8 1 0 -7 73 -49 90 -52 8 -1 15 -9 14 -17 -1 -8 5 -15 12 -15 7 0 10 5
                                            7 11 -4 6 0 5 9 -1 8 -7 17 -10 21 -7 3 3 3 -5 0 -18 -3 -16 -2 -19 5 -9 7 9
                                            11 10 17 2 4 -7 1 -20 -6 -29 -11 -14 -11 -15 1 -4 8 6 20 12 28 12 12 0 12
                                            -3 2 -15 -10 -12 -10 -15 3 -15 11 0 14 -5 10 -17 -4 -10 -2 -14 4 -10 5 3 10
                                            0 10 -7 0 -10 -6 -10 -28 3 -15 8 -25 19 -22 24 3 5 -1 7 -8 6 -27 -5 -81 13
                                            -103 35 l-21 21 -3 -204 c-2 -205 1 -231 34 -231 11 0 14 34 14 179 0 99 4
                                            182 8 185 4 2 29 -9 55 -25 l47 -29 0 -189 c0 -153 3 -191 15 -201 31 -26 35
                                            -1 35 253 l0 252 -184 113 c-101 61 -187 112 -190 112 -3 0 -6 -27 -6 -60z
                                            m90 -30 c-8 -5 -7 -9 5 -14 17 -6 12 -26 -6 -26 -6 0 -7 5 -3 12 5 7 3 8 -6 3
                                            -10 -6 -7 -12 10 -25 20 -15 20 -18 6 -23 -10 -4 -14 -3 -11 3 5 9 -29 33 -36
                                            25 -2 -2 -4 9 -4 24 -1 23 3 27 19 23 13 -3 17 -1 12 6 -5 8 -1 10 9 5 12 -4
                                            13 -8 5 -13z"/>
                                    <path d="M847 1503 c-9 -8 -9 -316 -1 -337 3 -9 14 -16 25 -16 17 0 18 12 21
                                            158 2 86 0 167 -4 180 -7 21 -28 29 -41 15z"/>
                                    <path d="M1106 1332 c-4 -7 -9 -237 -7 -297 1 -11 10 -26 20 -32 19 -12 19 -7
                                            21 156 1 142 -2 169 -14 174 -9 4 -17 3 -20 -1z"/>
                                    <path d="M1557 1334 c-10 -10 -8 -316 2 -332 6 -10 10 -10 20 1 8 10 11 62 9
                                            173 -3 147 -9 180 -31 158z"/>
                                    <path d="M0 1016 c0 -11 16 -14 73 -14 254 1 747 -8 753 -14 11 -12 54 -10 54
                                            2 0 6 -5 10 -12 10 -6 0 -9 2 -6 5 9 10 37 -6 32 -18 -3 -9 14 -10 68 -5 40 4
                                            88 8 105 8 46 -1 33 26 -15 33 -20 2 -265 5 -544 6 -436 2 -508 0 -508 -13z"/>
                                    <path d="M1610 1022 c-6 -2 -8 -8 -4 -13 3 -5 0 -9 -6 -9 -6 0 -9 -4 -6 -8 3
                                            -5 54 -12 113 -15 59 -3 117 -9 128 -13 14 -5 17 -4 10 4 -5 5 -19 12 -30 15
                                            -11 3 2 3 30 0 47 -6 49 -5 35 12 -13 16 -11 17 20 15 61 -5 100 0 100 11 0 8
                                            -56 10 -190 8 -104 -2 -194 -6 -200 -7z"/>
                                    <path d="M2180 1022 c-33 -3 -40 -6 -30 -13 11 -7 3 -9 -25 -4 -22 3 -58 7
                                            -80 10 l-40 3 40 -7 40 -8 -42 -2 c-23 0 -44 -4 -46 -8 -7 -11 234 -9 257 1
                                            10 5 84 7 165 4 80 -2 126 -1 101 3 l-45 7 50 -3 c28 -1 78 -5 113 -9 51 -5
                                            62 -3 62 9 0 8 -6 15 -12 16 -39 3 -470 3 -508 1z"/>
                                    <path d="M755 950 c-7 -12 19 -12 55 0 22 7 21 8 -12 9 -20 1 -40 -3 -43 -9z"/>
                                    <path d="M373 923 c20 -2 54 -2 75 0 20 2 3 4 -38 4 -41 0 -58 -2 -37 -4z"/>
                                    <path d="M705 920 c-16 -7 -13 -9 18 -9 20 -1 37 4 37 9 0 12 -27 12 -55 0z"/>
                                    <path d="M1900 893 c-14 -3 -29 -9 -35 -15 -13 -14 55 -2 69 12 10 10 9 11
                                            -34 3z"/>
                                    <path d="M805 870 c3 -5 22 -10 41 -10 19 0 33 -3 31 -7 -3 -5 16 -6 41 -4
                                            l47 4 -70 13 c-89 16 -98 16 -90 4z"/>
                                    <path d="M970 847 c15 -15 172 -33 245 -27 44 3 94 2 110 -2 32 -9 115 -1 115
                                            11 0 4 -73 8 -162 9 -90 1 -197 5 -238 8 -41 4 -73 4 -70 1z"/>
                                    <path d="M1650 840 c30 -5 73 -11 95 -14 l40 -5 -35 14 c-19 7 -62 13 -95 13
                                            l-60 0 55 -8z"/>
                                    <path d="M1945 841 c-72 -7 -49 -16 65 -26 54 -5 71 -4 60 4 -8 6 -28 11 -45
                                            12 -23 2 -20 4 15 9 l45 7 -40 0 c-22 0 -67 -3 -100 -6z"/>
                                    <path d="M245 750 c-4 -6 8 -10 30 -10 22 0 34 4 30 10 -3 6 -17 10 -30 10
                                            -13 0 -27 -4 -30 -10z"/>
                                    <path d="M447 713 c-4 -3 -7 -44 -7 -90 0 -66 3 -83 14 -83 21 0 24 9 28 73 3
                                            54 21 66 21 13 0 -34 20 -51 37 -32 6 9 9 19 7 23 -3 5 2 9 12 10 16 1 18 -5
                                            13 -43 -4 -40 -3 -44 17 -44 20 0 21 5 21 84 0 114 -14 121 -70 37 l-16 -23
                                            -27 41 c-27 40 -37 47 -50 34z"/>
                                    <path d="M673 712 c-22 -3 -23 -8 -23 -88 l0 -84 60 0 c47 0 60 3 60 15 0 11
                                            -11 15 -40 15 -33 0 -40 3 -40 20 0 16 7 20 35 20 25 0 35 4 35 16 0 13 -8 15
                                            -38 12 -35 -3 -38 -1 -34 19 4 19 11 23 43 23 28 0 39 4 39 15 0 8 -3 15 -7
                                            16 -32 3 -72 3 -90 1z"/>
                                    <path d="M816 711 c-8 -12 -10 -161 -3 -168 4 -3 13 -3 21 0 11 5 14 17 10 46
                                            -5 47 10 55 28 16 6 -14 17 -25 25 -25 18 0 16 10 -4 25 -13 9 -13 14 -3 20 8
                                            5 11 4 7 -2 -7 -12 17 -25 27 -16 11 11 6 24 -6 17 -7 -4 -10 -3 -6 1 5 5 20
                                            10 35 11 15 2 23 0 17 -4 -15 -10 -25 -42 -13 -42 6 0 6 -7 -1 -20 -9 -16 -8
                                            -22 5 -26 25 -10 29 1 30 81 2 56 -2 78 -13 87 -12 10 -18 8 -31 -10 -50 -71
                                            -44 -69 -74 -23 -27 40 -41 49 -51 32z"/>
                                    <path d="M1064 706 c-55 -24 -65 -102 -18 -143 38 -34 86 -31 118 8 14 17 26
                                            39 26 50 0 32 -26 74 -55 87 -32 15 -32 15 -71 -2z m67 -45 c20 -16 22 -23 14
                                            -46 -12 -34 -46 -49 -70 -31 -23 17 -22 66 1 83 23 17 27 17 55 -6z"/>
                                    <path d="M1253 712 l-33 -3 0 -85 c0 -77 2 -84 20 -84 16 0 20 7 20 31 0 28 2
                                            31 24 25 15 -4 26 -1 29 7 4 9 6 9 6 0 1 -6 -4 -15 -10 -18 -13 -8 18 -45 38
                                            -45 17 0 17 20 -2 47 -13 18 -13 22 0 33 16 13 20 47 7 68 -11 16 -59 28 -99
                                            24z m52 -32 c-3 -5 -1 -10 4 -10 17 0 13 -27 -5 -34 -31 -12 -44 -6 -44 18 0
                                            18 7 26 23 29 12 2 23 5 25 6 2 0 0 -3 -3 -9z"/>
                                    <path d="M1390 707 c0 -8 14 -33 30 -55 20 -28 30 -54 30 -77 0 -28 4 -35 20
                                            -35 16 0 20 7 20 33 0 22 11 47 30 73 16 21 30 47 30 57 0 31 -28 18 -53 -24
                                            l-25 -41 -24 41 c-22 39 -58 56 -58 28z"/>
                                    <path d="M1800 712 c-6 -2 -10 -40 -10 -88 l0 -84 60 0 c47 0 60 3 60 15 0 11
                                            -11 15 -40 15 -33 0 -40 3 -40 20 0 16 7 20 35 20 24 0 35 5 35 15 0 10 -11
                                            15 -35 15 -28 0 -35 4 -35 20 0 17 7 20 40 20 29 0 40 4 40 15 0 8 -6 16 -12
                                            16 -28 4 -88 4 -98 1z"/>
                                    <path d="M1995 706 c-31 -13 -55 -51 -55 -86 0 -10 12 -32 26 -49 20 -24 34
                                            -31 62 -31 45 0 67 13 59 33 -4 11 -16 14 -45 10 -34 -5 -42 -2 -52 16 -23 44
                                            19 93 60 71 11 -6 25 -8 30 -5 19 11 10 35 -16 45 -31 12 -32 12 -69 -4z"/>
                                    <path d="M2137 714 c-4 -4 -7 -45 -7 -91 0 -76 2 -83 20 -83 15 0 20 7 20 24
                                            0 38 18 40 46 7 14 -17 34 -31 45 -31 26 0 24 9 -11 50 -17 19 -30 39 -30 44
                                            0 6 14 25 32 43 27 28 29 33 14 39 -20 8 -76 -40 -76 -65 0 -26 -18 2 -22 33
                                            -3 29 -18 43 -31 30z"/>
                                    <path d="M1600 625 l0 -85 43 0 c64 0 83 9 102 44 21 38 16 71 -15 104 -17 18
                                            -32 22 -75 22 l-55 0 0 -85z m100 35 c26 -26 25 -55 -2 -74 -44 -31 -58 -22
                                            -58 39 0 48 2 55 20 55 11 0 29 -9 40 -20z"/>
                                    <path d="M2095 490 c-4 -6 4 -10 18 -10 14 0 39 -3 56 -6 19 -4 31 -2 31 4 0
                                            6 -12 10 -28 10 -15 -1 -37 2 -49 6 -12 4 -24 2 -28 -4z"/>
                                    <path d="M2240 460 c0 -13 50 -13 70 0 11 7 4 10 -27 10 -24 0 -43 -4 -43 -10z"/>
                                </g>
                            </svg>

                        </div>
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Connexion
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                        >
                                            Inscription
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>

                    <main class="mt-6">
                        <!-- Premier élément -->
                        <a class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10">
                            <div class="relative flex items-center gap-6 lg:items-end lg:ml-10 lg:w-1/2">
                                <div id="docs-card-content" class="flex items-start justify-center gap-6 lg:flex-col">
                                    <!-- Contenu du premier élément -->
                                    <div class="flex size-14 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                             width="300.000000pt" height="300.000000pt" viewBox="0 0 300.000000 300.000000"
                                             preserveAspectRatio="xMidYMid meet">
                                            <metadata>
                                                Created by potrace 1.10, written by Peter Selinger 2001-2011
                                            </metadata>
                                            <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)"
                                               fill="#000000" stroke="none">
                                                <path d="M1365 2756 c-203 -39 -377 -117 -494 -221 -91 -81 -202 -265 -236
                                                        -390 -7 -27 -20 -64 -29 -80 -22 -43 -27 -142 -10 -184 8 -18 14 -42 14 -53 0
                                                        -30 -46 -112 -117 -211 -69 -95 -102 -158 -103 -193 0 -27 22 -45 93 -79 51
                                                        -23 57 -30 57 -56 0 -17 -9 -51 -21 -76 -17 -38 -18 -48 -7 -58 19 -18 58 -29
                                                        58 -16 0 6 -6 11 -14 11 -21 0 -29 48 -12 80 11 22 12 39 4 74 -5 25 -13 45
                                                        -16 44 -18 -5 -99 44 -111 66 -12 22 -10 31 18 91 17 37 35 64 41 60 5 -3 10
                                                        0 10 8 0 8 15 34 34 58 54 71 96 153 96 188 0 18 -5 52 -11 76 -12 49 -5 104
                                                        29 218 24 77 102 247 114 247 4 0 8 6 8 13 0 7 11 24 25 39 14 15 25 32 25 38
                                                        0 5 4 10 8 10 5 0 15 11 22 25 8 14 20 23 27 21 7 -3 13 0 13 6 0 13 43 51 79
                                                        70 14 7 28 16 31 19 9 11 84 49 97 49 7 0 13 4 13 9 0 5 16 12 35 15 19 4 35
                                                        11 35 16 0 5 8 9 18 8 9 0 42 7 72 16 147 44 380 56 530 26 146 -28 166 -33
                                                        185 -43 11 -6 22 -12 25 -12 3 -1 18 -7 33 -13 16 -7 33 -12 38 -12 6 0 7 -5
                                                        3 -12 -4 -7 -3 -8 5 -4 6 4 17 3 24 -2 7 -5 29 -19 50 -31 21 -12 44 -26 50
                                                        -31 7 -6 29 -23 49 -38 80 -62 227 -259 211 -285 -4 -6 -1 -7 7 -2 10 6 12 1
                                                        8 -19 -3 -15 -3 -24 0 -21 10 10 42 -68 42 -102 0 -20 4 -32 10 -28 6 4 10 -6
                                                        10 -22 0 -16 5 -34 11 -40 8 -8 12 -63 13 -155 1 -125 -2 -154 -24 -228 -13
                                                        -47 -30 -90 -36 -97 -6 -6 -17 -25 -24 -42 -7 -17 -16 -31 -21 -31 -5 0 -9 -5
                                                        -9 -10 0 -6 -15 -32 -34 -59 -41 -58 -89 -156 -93 -191 -2 -14 -7 -32 -10 -40
                                                        -9 -21 -11 -55 -11 -210 0 -191 2 -229 10 -224 4 2 7 -8 6 -23 0 -16 7 -47 16
                                                        -70 10 -28 11 -43 4 -43 -7 0 -7 -4 -1 -12 12 -16 27 -68 24 -85 -1 -7 3 -13
                                                        9 -13 5 0 10 -14 10 -31 0 -17 5 -40 11 -51 20 -38 49 -152 43 -171 -4 -13
                                                        -14 -17 -31 -15 -29 3 -41 30 -93 218 -58 208 -80 334 -87 496 -6 159 -17 209
                                                        -21 101 -4 -105 -12 -76 -12 45 0 200 19 255 170 478 25 37 70 152 64 162 -3
                                                        5 -1 15 5 22 16 20 7 212 -13 276 -61 190 -94 251 -194 361 -60 65 -175 145
                                                        -193 133 -5 -3 -9 -2 -9 3 0 9 -31 24 -97 47 -24 8 -43 11 -43 6 0 -6 -7 -10
                                                        -16 -10 -8 0 -12 5 -9 10 4 6 -12 10 -39 11 -25 1 -58 3 -73 5 -63 8 -241 10
                                                        -278 4 -27 -5 -6 -7 65 -7 58 1 149 -4 204 -11 105 -14 268 -62 292 -86 13
                                                        -13 11 -19 -15 -45 -35 -35 -57 -32 -66 9 -11 48 -35 67 -88 67 -26 0 -50 -3
                                                        -53 -8 -3 -5 -10 -7 -15 -4 -5 4 -9 1 -9 -5 0 -6 -6 -8 -12 -4 -7 4 -10 4 -6
                                                        -1 4 -4 2 -15 -4 -23 -7 -8 -15 -37 -18 -63 l-5 -49 -53 26 -53 25 -39 -29
                                                        c-22 -16 -37 -32 -33 -35 3 -4 1 -7 -5 -7 -7 0 -12 -7 -12 -15 0 -8 -5 -15
                                                        -10 -15 -16 0 1 -53 23 -72 11 -10 17 -18 13 -18 -4 0 0 -8 9 -17 16 -16 16
                                                        -17 -1 -30 -10 -7 -33 -13 -53 -13 -19 0 -31 -3 -28 -7 4 -3 -2 -12 -13 -20
                                                        -11 -8 -20 -21 -20 -29 0 -13 -3 -13 -21 -1 -14 11 -30 12 -55 7 -43 -10 -51
                                                        3 -36 60 11 45 -1 71 -47 95 -28 14 -103 16 -94 2 6 -10 -23 -38 -31 -30 -3 4
                                                        -6 1 -6 -6 0 -18 -25 9 -34 36 -13 39 -37 52 -87 44 -68 -11 -85 -32 -88 -108
                                                        -1 -25 -12 -23 -68 10 l-33 19 39 56 c41 60 135 152 156 152 7 0 18 7 25 15
                                                        10 12 10 15 0 15 -15 0 -111 -69 -123 -87 -4 -7 -16 -13 -26 -13 -12 0 -21
                                                        -10 -25 -25 -4 -14 -11 -25 -16 -25 -24 0 -99 -144 -140 -270 -35 -106 -36
                                                        -134 -13 -200 16 -46 16 -48 -5 -93 -12 -26 -22 -51 -22 -57 0 -5 -4 -10 -8
                                                        -10 -4 0 -13 -15 -20 -34 -7 -18 -21 -41 -32 -51 -11 -10 -20 -22 -20 -27 0
                                                        -5 -12 -20 -26 -35 -14 -14 -30 -36 -35 -50 -5 -13 -14 -21 -19 -18 -12 7 15
                                                        60 43 86 9 9 17 21 17 28 0 6 4 11 8 11 5 0 13 10 19 23 6 12 25 51 42 86 20
                                                        42 31 78 30 105 l-1 41 -8 -42 c-12 -59 -43 -115 -119 -218 -37 -50 -73 -100
                                                        -80 -113 -16 -31 -7 -56 19 -49 12 3 20 -1 23 -12 4 -14 5 -14 6 2 0 9 5 17
                                                        11 17 5 0 9 -5 7 -11 -1 -7 21 -17 50 -24 56 -13 83 -29 83 -51 0 -8 5 -14 10
                                                        -14 31 0 -34 89 -66 90 -6 0 -23 9 -37 20 -28 22 -27 43 5 71 10 9 18 21 18
                                                        27 0 6 4 12 8 14 30 11 130 191 134 241 2 22 7 27 25 24 13 -2 23 -6 23 -10 0
                                                        -4 0 -12 0 -18 0 -5 -6 -7 -12 -3 -7 4 -10 4 -6 -1 4 -4 1 -17 -7 -29 -20 -28
                                                        -19 -58 4 -83 11 -12 17 -24 14 -27 -6 -6 12 -10 30 -7 4 0 7 -4 7 -9 0 -14
                                                        35 -12 74 4 33 14 34 14 41 -11 3 -14 4 -27 1 -30 -2 -3 7 -18 21 -34 22 -24
                                                        34 -29 73 -29 50 0 75 17 82 55 3 21 48 35 48 16 0 -6 13 -17 30 -26 16 -8 29
                                                        -19 28 -23 -7 -25 14 -73 37 -82 24 -9 35 -30 15 -30 -5 0 -6 -7 -3 -17 4 -10
                                                        2 -14 -4 -10 -16 10 -7 -71 11 -88 23 -24 30 1 9 35 l-18 31 32 24 c42 34 35
                                                        63 -18 71 -42 7 -48 20 -29 69 9 24 15 27 46 23 49 -6 63 21 34 63 -25 34 -21
                                                        54 14 70 20 10 30 8 56 -11 40 -29 60 -20 60 25 0 39 23 55 66 47 17 -3 24
                                                        -13 29 -42 8 -50 31 -55 71 -18 l31 29 29 -25 29 -25 -18 -33 c-27 -51 -15
                                                        -72 38 -64 38 5 43 3 49 -17 13 -48 7 -65 -24 -72 -17 -4 -35 -16 -41 -28 -12
                                                        -21 -4 -31 40 -56 14 -9 10 -42 -8 -71 -8 -12 -15 -12 -44 -2 -36 13 -67 8
                                                        -67 -12 0 -6 4 -26 9 -44 9 -31 8 -33 -26 -47 -33 -14 -37 -14 -49 2 -7 10
                                                        -16 26 -19 36 -4 10 -16 17 -30 17 -18 0 -26 -8 -35 -35 -12 -38 -21 -41 -68
                                                        -24 -28 10 -30 12 -21 42 13 45 11 55 -10 62 -21 6 -91 -23 -91 -38 0 -5 16
                                                        -6 36 -3 31 6 35 5 32 -12 -9 -57 62 -103 115 -73 15 8 27 19 27 23 0 15 30 8
                                                        51 -13 39 -39 129 1 116 51 -6 22 21 44 45 35 17 -6 52 24 72 63 15 29 15 33
                                                        1 38 -9 4 -14 13 -11 20 3 9 -1 11 -12 7 -9 -3 -14 -3 -10 2 4 4 3 14 -4 22
                                                        -6 8 -7 13 -2 12 21 -4 35 2 29 11 -3 6 0 10 9 10 8 0 17 13 21 31 6 24 2 39
                                                        -16 63 -12 17 -16 26 -8 20 17 -13 99 1 99 17 0 6 4 7 10 4 6 -3 7 1 4 9 -3 9
                                                        -1 16 5 16 6 0 8 6 5 13 -2 7 2 21 10 32 14 19 15 19 50 -17 38 -39 85 -71 71
                                                        -48 -5 9 -2 10 12 6 23 -7 80 28 97 59 6 11 16 23 21 27 6 5 5 8 -3 8 -7 0
                                                        -10 5 -7 10 4 6 2 16 -3 23 -5 7 -13 22 -17 35 -6 21 -4 22 34 20 23 -2 41 -6
                                                        41 -10 0 -4 14 -2 30 4 33 11 47 31 66 93 10 34 9 44 -4 68 -9 15 -19 27 -22
                                                        27 -3 0 -22 12 -41 26 -19 15 -26 24 -17 21 12 -4 15 -2 11 9 -3 9 1 14 15 14
                                                        11 0 25 7 32 15 16 20 30 4 53 -61 43 -121 43 -277 0 -394 -9 -25 -45 -90 -79
                                                        -145 -106 -170 -134 -266 -134 -457 0 -94 5 -145 25 -278 9 -60 27 -147 35
                                                        -165 5 -11 12 -38 15 -60 4 -22 18 -75 32 -118 13 -43 22 -81 19 -84 -2 -3
                                                        -208 -7 -458 -9 -428 -4 -518 1 -518 24 0 43 -27 207 -46 280 -45 173 -68 194
                                                        -218 199 -219 7 -276 17 -276 50 0 7 -7 13 -15 13 -22 0 -18 -14 11 -43 32
                                                        -32 51 -35 229 -40 158 -4 204 -18 206 -67 4 -66 9 -92 28 -161 22 -79 51
                                                        -267 51 -331 0 -38 0 -38 -39 -38 -22 0 -43 4 -46 10 -3 5 -25 10 -48 11 -23
                                                        0 -51 4 -62 8 -15 6 -11 9 22 14 23 4 49 4 57 1 12 -5 16 0 16 20 0 14 -3 26
                                                        -7 26 -11 0 -232 -21 -268 -25 -16 -2 -36 -4 -43 -4 -7 -1 -10 -6 -7 -11 4 -6
                                                        11 -8 16 -5 5 4 9 1 9 -4 0 -8 6 -7 19 0 11 7 26 9 37 4 11 -4 27 -7 37 -6 10
                                                        1 24 -2 31 -9 8 -6 31 -11 52 -12 22 -1 42 -6 45 -11 8 -12 86 -26 146 -26 46
                                                        -1 49 3 55 74 l3 30 502 3 502 2 16 -29 c16 -33 22 -67 6 -42 -7 11 -9 11 -14
                                                        0 -4 -12 -7 -11 -16 1 -9 13 -12 13 -20 1 -10 -15 -35 -6 -26 10 3 5 -1 6 -9
                                                        3 -23 -9 -8 -31 27 -38 18 -4 72 -9 121 -13 85 -6 89 -5 82 13 -32 78 -122
                                                        414 -141 526 -20 113 -20 357 1 444 18 81 35 114 124 251 79 120 105 191 121
                                                        328 12 97 7 173 -17 275 -89 376 -329 618 -696 701 -119 27 -397 35 -503 15z
                                                        m554 -325 c14 -46 21 -56 45 -62 24 -7 32 -4 50 19 12 15 30 37 41 50 l20 23
                                                        48 -30 c26 -17 47 -35 47 -40 0 -5 -9 -30 -20 -56 -19 -44 -19 -47 -2 -71 14
                                                        -19 22 -22 47 -17 17 4 45 7 64 8 32 0 35 -3 52 -53 l18 -53 -54 -26 c-49 -24
                                                        -55 -31 -55 -58 0 -27 6 -34 55 -58 l55 -27 -21 -57 c-12 -32 -23 -60 -25 -61
                                                        -1 -2 -28 2 -59 8 -53 11 -59 10 -77 -8 -20 -19 -20 -20 1 -67 12 -26 21 -53
                                                        21 -59 0 -12 -106 -74 -113 -66 -2 3 -19 25 -38 51 -28 38 -38 44 -59 39 -19
                                                        -5 -28 -17 -41 -60 l-17 -55 -43 2 c-85 4 -85 5 -81 75 3 60 2 63 -24 75 -24
                                                        11 -32 9 -73 -18 -51 -35 -58 -34 -105 24 l-30 37 43 44 c35 36 41 47 36 69
                                                        -6 22 -14 27 -53 32 -26 4 -54 7 -62 8 -11 2 -16 19 -18 69 l-3 66 61 7 c53 6
                                                        63 10 71 33 9 22 5 30 -32 68 -47 47 -47 45 14 118 l24 30 53 -33 c47 -29 56
                                                        -31 77 -20 20 11 23 20 23 75 0 58 2 64 23 68 12 3 31 7 42 10 47 10 57 2 74
                                                        -53z m321 -133 c0 -4 -13 -8 -30 -8 -30 0 -37 11 -24 45 6 14 9 13 30 -6 13
                                                        -12 24 -26 24 -31z m-1122 -70 c13 -41 19 -48 41 -48 19 0 34 11 54 40 l29 40
                                                        48 -27 49 -27 -16 -36 c-23 -53 -24 -63 -9 -83 13 -17 18 -17 64 -4 l50 15 20
                                                        -55 20 -55 -49 -21 c-40 -18 -49 -27 -49 -47 0 -21 8 -29 38 -40 20 -8 40 -16
                                                        45 -18 4 -2 7 1 7 7 0 6 -7 11 -16 11 -8 0 -12 5 -9 10 4 6 3 10 -2 9 -27 -5
                                                        -32 1 -21 26 6 14 13 23 15 21 2 -2 16 7 30 20 14 13 31 20 37 17 6 -4 18 -9
                                                        27 -10 40 -6 69 -24 69 -42 0 -11 -3 -21 -7 -23 -17 -7 -54 -69 -51 -85 2 -10
                                                        -2 -18 -9 -18 -20 0 -65 -46 -59 -61 4 -9 -2 -14 -17 -14 -13 0 -17 3 -11 8 6
                                                        4 14 17 18 30 4 12 11 22 16 22 4 0 8 16 7 35 -1 42 -6 38 -27 -23 -18 -50
                                                        -22 -52 -91 -39 -30 6 -37 4 -48 -16 -10 -18 -9 -29 4 -59 21 -53 20 -56 -30
                                                        -80 -45 -22 -45 -22 -59 -3 -56 80 -84 81 -108 7 -13 -43 -17 -47 -44 -44 -72
                                                        6 -74 8 -74 65 0 74 -21 86 -81 46 l-44 -30 -38 42 -38 42 37 38 c34 35 36 41
                                                        26 64 -8 18 -19 25 -39 25 -66 0 -74 8 -71 64 2 36 7 51 18 53 74 9 88 15 94
                                                        36 4 15 -4 33 -24 59 -17 20 -30 40 -30 45 0 4 13 24 29 43 l29 34 42 -28 c36
                                                        -24 46 -26 67 -17 22 10 24 17 22 63 -3 48 -1 53 21 59 14 4 38 7 54 6 25 -2
                                                        31 -8 44 -49z m-303 -187 c2 -11 0 -21 -6 -21 -5 0 -12 0 -16 0 -11 0 -11 23
                                                        0 38 12 15 16 12 22 -17z"/>
                                                <path d="M1852 2170 c-134 -61 -51 -270 91 -229 63 18 87 53 87 124 0 40 -5
                                                        52 -34 81 -19 19 -43 34 -54 34 -11 0 -26 2 -34 5 -7 2 -32 -4 -56 -15z m93
                                                        -26 c22 -10 38 -28 48 -51 14 -36 12 -83 -4 -83 -5 0 -9 -6 -9 -13 0 -19 -56
                                                        -39 -89 -32 -38 8 -72 41 -64 62 4 11 3 14 -5 9 -8 -5 -12 2 -12 21 0 46 11
                                                        71 33 79 12 4 31 10 42 14 11 5 22 8 23 9 2 1 19 -6 37 -15z"/>
                                                <path d="M1071 2017 c-85 -43 -85 -162 0 -197 26 -11 38 -11 73 1 85 29 101
                                                        136 27 186 -38 26 -65 29 -100 10z m98 -46 c12 -13 21 -37 21 -53 0 -27 -29
                                                        -67 -50 -69 -5 -1 -16 -2 -22 -3 -7 -1 -19 3 -27 8 -12 9 -13 8 -7 -2 7 -11 4
                                                        -12 -11 -3 -41 21 -46 131 -6 131 7 0 13 4 13 8 0 19 69 6 89 -17z"/>
                                                <path d="M1385 2666 c-139 -23 -295 -83 -399 -155 -109 -76 -211 -230 -271
                                                        -410 -37 -111 -45 -174 -28 -206 9 -15 10 -9 6 26 -10 88 93 348 180 453 60
                                                        73 134 139 153 135 4 0 10 4 14 11 4 6 15 12 24 14 10 1 21 8 25 15 5 7 11 12
                                                        15 11 3 0 21 6 39 13 84 38 224 76 282 77 11 1 52 3 90 6 73 6 307 -12 334
                                                        -26 9 -5 40 -13 69 -19 61 -13 166 -60 204 -93 14 -13 38 -32 53 -42 49 -36
                                                        65 -53 57 -61 -4 -5 -2 -5 4 -2 17 10 121 -113 107 -127 -3 -3 -2 -6 4 -6 6 0
                                                        23 -28 38 -62 14 -35 33 -77 41 -95 8 -17 14 -40 14 -52 0 -12 5 -21 11 -21 5
                                                        0 8 -3 5 -8 -2 -4 2 -34 10 -67 7 -33 14 -75 14 -94 0 -19 3 -31 7 -27 10 10
                                                        4 91 -13 162 -20 86 -71 217 -111 287 -33 55 -139 171 -193 210 -88 64 -215
                                                        117 -342 142 -105 22 -345 27 -443 11z"/>
                                                <path d="M1335 2573 c-11 -3 -24 -9 -29 -14 -6 -5 -22 -9 -37 -9 -15 0 -30 -4
                                                        -34 -9 -3 -5 -19 -12 -35 -16 -45 -10 -104 -41 -92 -49 6 -3 13 -2 17 4 3 5
                                                        15 10 26 10 10 0 19 4 19 8 0 8 37 19 220 70 l35 10 -35 0 c-19 0 -44 -2 -55
                                                        -5z"/>
                                                <path d="M1493 1568 c-31 -34 -36 -63 -18 -97 15 -31 51 -47 90 -42 30 3 65
                                                        48 65 82 0 68 -92 106 -137 57z m105 -64 c-1 -18 -5 -31 -10 -28 -4 3 -8 1 -8
                                                        -4 0 -21 -42 -20 -67 2 -23 20 -25 26 -16 52 7 21 18 31 39 35 40 7 64 -14 62
                                                        -57z"/>
                                                <path d="M685 1320 c-3 -5 -11 -7 -18 -4 -8 3 -23 -18 -40 -51 -39 -80 -36
                                                        -102 10 -70 16 11 28 13 48 5 38 -14 39 -13 16 16 -13 17 -18 31 -13 38 5 6
                                                        14 26 20 44 9 26 8 32 -3 32 -8 0 -16 -4 -20 -10z"/>
                                                <path d="M690 1155 c-40 -26 -76 -80 -60 -90 6 -3 22 3 36 14 24 19 28 19 50
                                                        5 20 -13 22 -19 13 -36 -6 -11 -19 -22 -29 -25 -34 -9 -41 -157 -10 -194 l20
                                                        -24 -5 34 c-4 25 -1 37 15 51 30 26 36 163 8 201 -16 21 -17 30 -8 53 6 16 9
                                                        30 8 31 -2 2 -19 -8 -38 -20z"/>
                                                <path d="M542 1078 c-17 -17 -16 -21 23 -61 19 -20 35 -34 35 -32 0 13 -25 55
                                                        -32 55 -5 0 -6 11 -2 25 7 27 -4 33 -24 13z"/>
                                                <path d="M586 900 c-5 -59 -3 -77 13 -108 27 -52 57 -81 110 -106 41 -18 64
                                                        -21 208 -21 155 0 162 -1 186 -23 28 -26 51 -108 66 -231 12 -93 31 -118 29
                                                        -38 -1 31 -4 57 -8 57 -3 0 -7 19 -9 43 -6 115 -58 200 -130 212 -20 3 -92 5
                                                        -161 3 -138 -2 -194 6 -186 27 3 9 0 12 -9 9 -17 -7 -33 8 -69 64 -23 36 -26
                                                        53 -25 108 3 88 -7 91 -15 4z"/>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="pt-3 sm:pt-5 lg:pt-0">
                                        <h2 class="text-xl font-semibold text-black">Bienvenue sur Memorydeck !</h2>
                                        <p class="mt-4 text-sm/relaxed">
                                            Notre plateforme est conçue pour vous aider à améliorer vos compétences linguistiques de manière efficace et ludique. Que vous soyez en train d'apprendre une nouvelle langue ou que vous souhaitiez simplement consolider vos connaissances existantes, notre site vous offre les outils nécessaires pour réussir.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </main>


                    <footer class="py-16 text-center text-sm text-black">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
