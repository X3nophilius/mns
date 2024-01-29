<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Organelle</title>
    </head>
    <body>
        <clip-path id="clip1">
            <path style="pointer-events: stroke; fill-opacity: 0; stroke: rgb(186, 218, 85); stroke-width: 2px;" onclick="document.location.href='organell.php?organell=zellwand'" d="M 45.455 18.214 Q 50 16.647 54.545 18.214 L 83.333 28.137 Q 87.878 29.704 89.001 33.224 L 96.111 55.521 Q 97.233 59.042 94.088 61.865 L 74.166 79.746 Q 71.021 82.569 65.976 82.569 L 34.024 82.569 Q 28.979 82.569 25.834 79.746 L 5.912 61.865 Q 2.767 59.042 3.889 55.521 L 10.999 33.224 Q 12.122 29.704 16.667 28.137 Z"></path>
        </clip-path>
        <div class="top">
            <p id="title">Die Organelle der Zelle</p> 
            <div class="arrow"></div>
        </div>
        <div class="main-page">
            <div class="layer1" datay=20 datax=50 style=";pointer-events:none;clip-path:url(images/zellwand.svg)">
                <!--Vakuole-->
                <svg viewBox="-130 -170 240 240" style="pointer-events:none;">
                    <path style="pointer-events: all; fill: rgb(41, 146, 255); stroke-width: 4px; stroke: rgb(63, 168, 255);" onclick="document.location.href='organell.php?organell=vakuole'" d="M 51.365 32.888 C 73.902 30.597 84.786 17.909 93.382 30.664 C 112.347 58.807 50.174 83.196 19.089 71.482 C 5.38 66.316 -1.757 49.946 4.113 37.712 C 11.708 21.882 31.63 34.893 51.365 32.888 Z" transform="matrix(0.007171, -0.999974, 0.999974, 0.007171, 0.000002, 0.000003)"></path>
                </svg>
                <!--Chloroplast-->
                <svg viewBox="-200 -150 500 500" style="pointer-events:none;">
                    <ellipse style="pointer-events:all; stroke: rgb(49, 178, 35); fill: rgb(89, 210, 116); stroke-width: 4px;" onclick="document.location.href='organell.php?organell=chloroplast'" cx="50" cy="50" rx="46.915" ry="23.359"></ellipse>
                    <path style="pointer-events:all; stroke-linecap: round; stroke-dashoffset: -2px; stroke: rgb(49, 134, 6); fill: none; stroke-dasharray: 8; stroke-width: 6px;" onclick="document.location.href='organell.php?organell=chloroplast'" d="M 14.821 58.267 C 7.46 52.125 13.716 39.097 22.539 36.064 C 42.921 29.057 12.786 66.55 36.76 68.004 C 58.331 69.312 28.656 32.351 50.007 31.255 C 68.861 30.287 45.886 72.412 65.228 68.247 C 87.22 63.512 57.448 45.105 75.667 38.409 C 86.012 34.607 87.047 54.437 87.047 55.918"></path>
                </svg>
                <!--Mitochondire-->
                <svg viewBox="-150 -300 500 500" style="pointer-events:none;">
                    <ellipse onclick="document.location.href='organell.php?organell=mitochondrie'" style="pointer-events:all; stroke-width: 3px; stroke: rgb(207, 75, 75); fill: rgb(236, 135, 135);" cx="50" cy="50" rx="48.109" ry="26.535"/>
                    <path onclick="document.location.href='organell.php?organell=mitochondrie'" style="pointer-events:all; stroke: rgb(208, 75, 75); fill: rgb(255, 174, 174); stroke-width: 2px;" d="M 73.498 44.326 C 76.792 43.887 74.072 31.056 81.619 35.716 C 91.24 41.657 80.146 43.782 82.979 45.385 C 86.658 47.466 92.353 40.223 92.971 49.251 C 93.208 52.709 92.903 55.559 86.835 60.342 C 85.443 61.44 83.628 50.996 82.305 52.176 C 79.384 54.781 87.983 64.033 78.414 66.976 C 71.257 69.177 76.896 55.646 74.598 56.548 C 69.298 58.627 72.396 70.623 64.686 71.416 C 58.814 72.02 63.888 57.204 63.339 51.327 C 63.142 49.222 60.764 50.637 59.241 50.512 C 56.914 50.321 56.569 50.292 55.489 52.742 C 52.77 58.911 57.703 73.746 50.969 73.424 C 35.43 72.681 47.076 59.727 46.475 55.308 C 46.271 53.809 47.076 52.107 44.057 51.466 C 42.546 51.145 41.35 53.175 40.558 54.5 C 37.725 59.238 38.756 70.428 33.332 69.401 C 19.708 66.822 37.961 54.603 30.461 55.092 C 27.781 55.267 25.183 57.075 23.522 59.185 C 22.376 60.642 17.981 64.316 17.125 62.672 C 14.539 57.708 22.953 51.3 18.029 48.639 C 14.318 46.634 12.101 59.018 8.45 56.906 C 0.764 52.459 5.932 38.535 23.192 31.686 C 27.273 30.067 20.9 45.942 25.18 46.923 C 31.102 48.281 27.946 34.881 29.048 32.996 C 31.89 28.136 34.005 29.067 36.534 29.344 C 40.865 29.818 32.315 45.377 36.563 44.41 C 42.448 43.07 34.565 25.551 49.318 26.222 C 66.55 27.006 48.085 43.835 52.98 44.294 C 57.001 44.671 59.655 30.528 63.667 30.07 C 68.989 29.462 72.283 31.382 72.684 32.512 C 73.971 36.138 69.423 44.516 73.498 44.326 Z"/>    
                </svg>
                <!--Golgiapperat-->
                <svg viewBox="-100 -600 1700 1700" style="pointer-events:none;">
                    <path style="pointer-events:all" onclick="document.location.href='organell.php?organell=golgi-apperat'" fill="rgba(255,0,0,0.01)" stroke="rgba(255,0,0,0.1)" stroke-width="0" d="M 208.819 48.617 C 238.721 49.241 219.807 18.165 246.367 15.728 C 251.945 15.216 305.971 23.888 307.232 27.452 C 310.933 37.913 312.891 58.261 316.955 68.586 C 328.076 96.838 353.531 120.159 357.202 150.299 C 361.63 186.656 345.042 222.547 340.127 258.842 C 339.741 261.691 336.084 276.797 335.249 282.015 C 331.178 307.46 332.529 333.745 326.712 358.849 C 324.65 367.749 313.509 372.998 312.077 382.021 C 309.27 399.705 315.74 417.819 314.516 435.683 C 313.687 447.783 310.314 459.724 305.979 471.051 C 303.901 476.481 272.866 489.439 268.205 485.963 C 219.989 450.005 215.099 419.941 182.652 369.296 C 171.623 352.082 200.232 266.17 202.447 245.846 C 207.204 202.192 182.08 211.32 175.349 167.926 C 172.207 147.67 168.822 136.419 158.175 118.902 C 156.211 115.671 132.913 38.585 156.86 32.132 C 192.147 22.624 163.957 47.681 208.819 48.617 Z" style="fill: rgb(166, 209, 48); stroke: rgb(129, 151, 57); stroke-width: 2px;"/>    
                    <g id="layer1" transform="matrix(0, 0.222601, -0.222601, 0, -2602.121582, -51.244213)" style="transform-origin: 2851.27px 299.668px;">
                        <path onclick="document.location.href='organell.php?organell=golgi-apperat'" style="pointer-events:none;fill: rgb(213, 113, 139); fill-opacity: 1; stroke-width: 17.9694px; stroke: rgb(178, 71, 99);" d="M 2361.761 472.882 C 2331.595 483.637 2277.579 507.309 2286.12 536.885 C 2350.525 759.92 2467.893 508.782 2690.504 461.245 C 2889.616 418.726 3278.666 664.114 3336.355 568.887 C 3389.583 481.024 3065.828 437.971 2972.701 423.425 C 2914.634 414.355 2735.417 411.819 2641.047 420.516 C 2590.582 425.166 2459.512 438.031 2361.761 472.882 Z" id="path7352"/>
                        <path onclick="document.location.href='organell.php?organell=golgi-apperat'" style="pointer-events:none;fill: rgb(213, 113, 139); fill-opacity: 1; stroke-width: 17.9694px; stroke: rgb(178, 71, 99);" d="M 3481.817 533.976 C 3715.86 416.955 3344.955 353.24 2988.112 332.77 C 2812.888 322.719 2569.293 333.238 2542.133 333.238 C 2400.66 333.238 2147.66 323.328 2047.562 423.425 C 2001.142 469.845 2088.779 541.006 2143.568 513.611 C 2195.992 487.399 2412.722 410.186 2639.107 385.348 C 2891.154 357.695 3154.506 384.867 3202.53 408.879 C 3250.026 432.626 3417.504 566.133 3481.817 533.976 Z" id="path7381"/>
                        <path onclick="document.location.href='organell.php?organell=golgi-apperat'" style="pointer-events:none;fill: rgb(213, 113, 139); fill-opacity: 1; stroke-width: 17.9694px; stroke: rgb(178, 71, 99);" d="M 2143.568 219.778 C 2047.085 228.578 1668.807 269.634 1873.008 376.877 C 1983.205 434.751 2142.238 329.961 2225.233 302.296 C 2310.719 273.8 2453.3 267.156 2587.17 266.053 C 2721.041 264.951 3096.169 293.947 3182.319 302.895 C 3268.468 311.842 3352.628 323.147 3435.27 350.694 C 3451.974 356.262 3505.379 380.679 3557.361 400.951 C 3609.344 421.222 3657.692 434.562 3670.918 426.334 C 3756.801 372.909 3721.652 330.939 3679.971 296.346 C 3642.881 265.564 3591.129 234.324 3531.274 234.324 C 3307.634 234.324 3117.419 233.421 2890.359 223.951 C 2663.298 214.481 2399.391 196.444 2143.568 219.778 L 2143.568 219.778 Z" id="path7517"/>
                        <path onclick="document.location.href='organell.php?organell=golgi-apperat'" style="pointer-events:none;fill: rgb(213, 113, 139); fill-opacity: 1; stroke-width: 17.9694px; stroke: rgb(178, 71, 99);" d="M 2283.684 93.285 C 2214.288 86.659 1786.229 -6.675 1867.544 159.582 C 1901.322 228.647 2138.123 174.298 2204.794 174.882 C 2363.675 176.275 3461.219 215.436 3575.015 162.209 C 3723.718 92.655 3532.467 26.059 3440.439 25.252 C 3327.708 24.264 3231.366 138.624 3126.755 137.707 C 3024.662 136.811 2920.179 127.667 2814.154 126.737 C 2628.526 125.109 2471.274 111.197 2283.684 93.285 Z" id="path7587"/>
                        <path onclick="document.location.href='organell.php?organell=golgi-apperat'" style="pointer-events:none;fill: rgb(213, 113, 139); fill-opacity: 1; stroke-width: 17.9694px; stroke: rgb(178, 71, 99);" d="M 2829.134 19.883 C 2642.379 63.554 2237.829 -120.8 2187.306 7.54 C 2166.306 60.884 2451.922 75.426 2487.649 75.426 C 2649.057 75.426 2803.477 86.188 2964.906 85.712 C 3126.428 85.235 3255.926 38.657 3217.934 -13.031 C 3167.168 -82.1 3085.231 30.169 3010.162 30.169 C 2915.513 30.169 2910.129 12.506 2938.041 8.046 C 2962.089 4.204 2984.994 -13.385 2957.706 -27.431 C 2943.106 -34.946 2905.314 -38.069 2876.975 -39.057 C 2848.637 -40.046 2830.923 -40.092 2805.477 -31.545 C 2778.76 -22.572 2778.256 -8.228 2793.162 2.947 C 2810.946 16.279 2837.649 17.892 2829.134 19.883 Z" id="path7601"/>
                        <path onclick="document.location.href='organell.php?organell=golgi-apperat'" style="pointer-events:none;fill: rgb(213, 113, 139); fill-opacity: 1; stroke-width: 17.9694px; stroke: rgb(178, 71, 99);" d="M 2057.745 615.435 C 1989.182 614.156 1963.155 589.041 1913.737 638.709 C 1843.394 709.408 2090.266 788.015 2204.662 673.62 C 2237.263 641.017 2091.528 616.065 2057.745 615.435 Z" id="path7719"/>
                        <path onclick="document.location.href='organell.php?organell=golgi-apperat'" style="pointer-events:none;fill: rgb(213, 113, 139); fill-opacity: 1; stroke-width: 17.9694px; stroke: rgb(178, 71, 99);" d="M 3792.05 102.374 C 3747.027 101.608 3723.95 68.558 3697.484 116.298 C 3666.275 172.595 3872.745 237.576 3888.527 137.185 C 3896.942 83.658 3814.235 102.751 3792.05 102.374 Z" id="path7719-0"/>
                        <path onclick="document.location.href='organell.php?organell=golgi-apperat'" style="pointer-events:none;fill: rgb(213, 113, 139); fill-opacity: 1; stroke-width: 17.9694px; stroke: rgb(178, 71, 99);" d="M 2655.82 -87.869 C 2655.947 -138.05 2514.099 -149.412 2486.681 -102.159 C 2459.088 -54.604 2655.614 -6.532 2655.82 -87.869 Z" id="path7719-0-0"/>
                    </g>          
                </svg>
                <!--Zellkern-->
                <svg style="pointer-events:none" viewBox="-180 -220 500 500">
                    <g z-index="3">
                        <ellipse onclick="document.location.href='organell.php?organell=zellkern'" style="pointer-events:all;stroke: rgb(255, 146, 48); fill: rgb(255, 173, 100);" cx="50" cy="50" rx="25.882" ry="25.882"/>
                        <ellipse onclick="document.location.href='organell.php?organell=zellkern'" style="pointer-events:all;fill: rgb(252, 206, 58); stroke: rgb(233, 187, 41);" cx="50" cy="50" rx="23.1" ry="23.1"/>
                        <ellipse onclick="document.location.href='organell.php?organell=zellkern'" style="pointer-events:all;fill: rgb(255, 173, 101); stroke: rgb(255, 146, 48);" cx="50" cy="50" rx="7.909" ry="7.909"/>
                        <path    onclick="document.location.href='organell.php?organell=zellkern'" style="pointer-events:all;fill: none; stroke: rgb(255, 146, 48);" d="M 30.958 48.227 C 32.13 48.171 34.241 49.209 34.475 48.059 C 34.917 45.888 33.762 43.428 32.27 41.79 C 31.675 41.137 30.525 43.08 30.723 43.94 C 31.532 47.463 43.621 40.873 38.163 39.131 C 32.078 37.189 37.499 43.945 37.548 44.558 C 37.616 45.402 36.155 45.881 36.223 46.725 C 36.558 50.904 35.574 57.594 37.414 61.362 C 37.935 62.43 40.636 59.005 39.555 58.511 C 37.367 57.51 30.932 57.109 32.356 59.049 C 34.825 62.413 39.712 63.186 43.752 64.229 C 44.77 64.492 45.496 62.447 46.515 62.706 C 47.246 62.892 47.102 64.361 46.65 64.966 C 45.026 67.141 36.146 63.566 38.775 62.889 C 43.206 61.748 49.021 65.621 53.338 64.104 C 58.816 62.179 50.084 54.894 48.65 65.634 C 48.011 70.419 57.909 71.776 58.512 67.905 C 58.75 66.38 56.95 65.237 56.303 63.835 C 55.814 62.775 58.55 65.999 59.483 65.299 C 60.131 64.813 59.651 63.688 59.735 62.882"/>
                    </g>
                    <path z-index="2" onclick="document.location.href='organell.php?organell=endoplasmatisches-reticulum'" d="M 80.476 50 A 30.476 30.476 0 0 1 50 80.476 A 30.476 30.476 0 0 1 19.524 50 A 30.476 30.476 0 0 1 50 19.524 A 30.476 30.476 0 0 1 80.476 50 Z" style="pointer-events: stroke;fill: none; stroke-width: 3px; stroke-linecap: round; stroke-dasharray: 20, 10, 20, 5, 10, 5; stroke-dashoffset: 39px; stroke: rgb(85, 114, 211);"/>
                    <path z-index="2" onclick="document.location.href='organell.php?organell=endoplasmatisches-reticulum'" d="M 84.887 49.963 A 34.758 34.758 0 0 1 50.129 84.721 A 34.758 34.758 0 0 1 15.371 49.963 A 34.758 34.758 0 0 1 50.129 15.205 A 34.758 34.758 0 0 1 84.887 49.963 Z" style="pointer-events: stroke;fill: none; stroke-width: 3px; stroke-dasharray: 40, 4, 20, 5, 10; stroke-linecap: round; stroke: rgb(113, 103, 214);"/>
                </svg>
            </div>
            <div class="layer2" datay=20 datax=50 style="pointer-events:none;">
                <!--Vesikel-->
                <?php 
                    for ($i = 1; $i < 5; $i++) {
                        echo '
                        <svg viewBox="'.(rand(-14*2,-58*2)*4).' '.(rand(-20*2,-55*2)*4).' 600 600" style="pointer-events:none;" clip-path="url(#clippath)">
                            <ellipse style="pointer-events:all; stroke-width: 4px; fill: rgb(80, 243, 194); stroke: rgb(49, 165, 134);" onclick="document.location.href='."'organell.php?organell=vesikel'".'" cx="10.023" cy="9.94" rx="7" ry="7"></ellipse>
                        </svg>
                        ';
                    } 
                ?>
                <!--Ribosome-->
                <?php 
                    for ($i = 1; $i < 10; $i++) {
                        echo '
                        <svg style="pointer-events:none" clip-path="url(#clippath)" viewBox="'.(rand(-100*4,-500*4)/4).' '.(rand(-175*4,-450*4)/4).' 700 700">
                          <path onclick="document.location.href='."'organell.php?organell=ribosom'".'" fill="rgb(255,0,0)" stroke="rgb(255,0,0)" stroke-width="3" d="M 49.282 41.721 C 50.557 41.573 51.905 41.804 53.096 42.323 C 54.356 42.871 55.764 43.795 56.609 45.033 C 57.529 46.378 58.197 48.645 58.215 50.252 C 58.232 51.698 57.638 53.152 57.011 54.267 C 56.433 55.293 55.555 56.15 54.702 56.777 C 53.906 57.361 53.038 57.744 52.093 57.981 C 51.104 58.228 50.081 58.492 48.88 58.182 C 47.325 57.779 44.676 56.215 43.561 55.07 C 42.709 54.196 42.427 53.294 42.156 52.26 C 41.869 51.165 41.598 49.948 41.955 48.646 C 42.401 47.025 43.922 44.481 45.267 43.327 C 46.427 42.332 47.948 41.875 49.282 41.721 Z" style="pointer-events:all;fill: rgb(166, 209, 48); stroke: rgb(129, 151, 57); stroke-width: 2px;" transform="matrix(1, 0, 0, 1, 1.4210854715202004e-14, 1.4210854715202004e-14)"/>
                        </svg>
                        ';
                    }
                ?>
                <!--Zellwand-->
                <svg id="zellwand" viewBox="0 0 100 100" style="pointer-events:none;">
                    <path style="pointer-events: stroke; fill-opacity: 0; stroke: rgb(186, 218, 85); stroke-width: 2px;" onclick="document.location.href='organell.php?organell=zellwand'" d="M 45.455 18.214 Q 50 16.647 54.545 18.214 L 83.333 28.137 Q 87.878 29.704 89.001 33.224 L 96.111 55.521 Q 97.233 59.042 94.088 61.865 L 74.166 79.746 Q 71.021 82.569 65.976 82.569 L 34.024 82.569 Q 28.979 82.569 25.834 79.746 L 5.912 61.865 Q 2.767 59.042 3.889 55.521 L 10.999 33.224 Q 12.122 29.704 16.667 28.137 Z"></path>
                </svg>
            </div>
            <div class="layer3" datay=20 datax=50 style="pointer-events:none;">
                <!--cytoplasma-->
                <svg viewBox="0 0 100 100" style="pointer-events:none">
                    <path style="pointer-events:fill; fill: rgb(150, 244, 255); stroke-opacity:0;" onclick="document.location.href='organell.php?organell=cytoplasma'" d="M 45.455 18.214 Q 50 16.647 54.545 18.214 L 83.333 28.137 Q 87.878 29.704 89.001 33.224 L 96.111 55.521 Q 97.233 59.042 94.088 61.865 L 74.166 79.746 Q 71.021 82.569 65.976 82.569 L 34.024 82.569 Q 28.979 82.569 25.834 79.746 L 5.912 61.865 Q 2.767 59.042 3.889 55.521 L 10.999 33.224 Q 12.122 29.704 16.667 28.137 Z"></path>
                </svg>
                <!--Vesikel-->
                <?php 
                    for ($i = 1; $i < 5; $i++) {
                        echo '
                        <svg viewBox="'.(rand(-14*2,-58*2)*4).' '.(rand(-20*2,-55*2)*4).' 600 600" style="pointer-events:none;" clip-path="url(#clippath)">
                            <ellipse style="pointer-events:all; stroke-width: 4px; fill: rgb(80, 243, 194); stroke: rgb(49, 165, 134);" onclick="document.location.href='."'organell.php?organell=vesikel'".'" cx="10.023" cy="9.94" rx="7" ry="7"></ellipse>
                        </svg>
                        ';
                    } 
                ?>
                <!--Ribosome-->
                <?php 
                    for ($i = 1; $i < 10; $i++) {
                        echo '
                        <svg style="pointer-events:none" clip-path="url(#clippath)" viewBox="'.(rand(-100*4,-500*4)/4).' '.(rand(-175*4,-450*4)/4).' 700 700">
                          <path onclick="document.location.href='."'organell.php?organell=ribosom'".'" fill="rgb(255,0,0)" stroke="rgb(255,0,0)" stroke-width="3" d="M 49.282 41.721 C 50.557 41.573 51.905 41.804 53.096 42.323 C 54.356 42.871 55.764 43.795 56.609 45.033 C 57.529 46.378 58.197 48.645 58.215 50.252 C 58.232 51.698 57.638 53.152 57.011 54.267 C 56.433 55.293 55.555 56.15 54.702 56.777 C 53.906 57.361 53.038 57.744 52.093 57.981 C 51.104 58.228 50.081 58.492 48.88 58.182 C 47.325 57.779 44.676 56.215 43.561 55.07 C 42.709 54.196 42.427 53.294 42.156 52.26 C 41.869 51.165 41.598 49.948 41.955 48.646 C 42.401 47.025 43.922 44.481 45.267 43.327 C 46.427 42.332 47.948 41.875 49.282 41.721 Z" style="pointer-events:all;fill: rgb(166, 209, 48); stroke: rgb(129, 151, 57); stroke-width: 2px;" transform="matrix(1, 0, 0, 1, 1.4210854715202004e-14, 1.4210854715202004e-14)"/>
                        </svg>
                        ';
                    }
                ?>
            </div>
            <?php
                echo '<button style="display:none" id="light" onclick="changemode()"><img width=25vw id="mode" src="images/light.svg"></button>';
                echo '<button id="dark" onclick="changemode()"><img  width=25vw id="mode" src="images/dark.svg"></button>';
            ?>
        </div>
        <div class="fixed"> 
        </div>
        <script src="script.js"></script>
    </body>
</html>
