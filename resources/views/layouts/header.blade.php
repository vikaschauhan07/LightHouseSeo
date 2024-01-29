<title>SEO</title>
<!--animation style-->
<style>
    body {
        background: linear-gradient(to right, black, hsl(223deg 95.13% 51.54%)) !important;
        /* margin: 0; */
    }

    :root {
        --hue: 223;
        --bg: hsl(var(--hue), 90%, 90%);
        --fg: hsl(var(--hue), 90%, 10%);
        --primary: hsl(var(--hue), 90%, 50%);
        --trans-dur: 0.3s;
        font-size: calc(16px + (32 - 16) * (100vw - 320px) / (2560 - 320));
    }

    .d-none {
        display: none !important;
    }

    .bike {
        display: block;
        margin: auto;
        width: 16em;
        height: auto;
    }

    .bike__body,
    .bike__front,
    .bike__handlebars,
    .bike__pedals,
    .bike__pedals-spin,
    .bike__seat,
    .bike__spokes,
    .bike__spokes-spin,
    .bike__tire {
        animation: bikeBody 3s ease-in-out infinite;
        stroke: var(--primary);
        transition: stroke var(--trans-dur);
    }

    .bike__front {
        animation-name: bikeFront;
    }

    .bike__handlebars {
        animation-name: bikeHandlebars;
    }

    .bike__pedals {
        animation-name: bikePedals;
    }

    .bike__pedals-spin {
        animation-name: bikePedalsSpin;
    }

    .bike__seat {
        animation-name: bikeSeat;
    }

    .bike__spokes,
    .bike__tire {
        stroke: currentColor;
    }

    .bike__spokes {
        animation-name: bikeSpokes;
    }

    .bike__spokes-spin {
        animation-name: bikeSpokesSpin;
    }

    .bike__tire {
        animation-name: bikeTire;
    }

    /* Dark theme */
    @media (prefers-color-scheme: dark) {
        :root {
            --bg: hsl(var(--hue), 90%, 10%);
            --fg: hsl(var(--hue), 90%, 90%);
        }
    }

    /* Animations */
    @keyframes bikeBody {
        from {
            stroke-dashoffset: 79;
        }

        33%,
        67% {
            stroke-dashoffset: 0;
        }

        to {
            stroke-dashoffset: -79;
        }
    }

    @keyframes bikeFront {
        from {
            stroke-dashoffset: 19;
        }

        33%,
        67% {
            stroke-dashoffset: 0;
        }

        to {
            stroke-dashoffset: -19;
        }
    }

    @keyframes bikeHandlebars {
        from {
            stroke-dashoffset: 10;
        }

        33%,
        67% {
            stroke-dashoffset: 0;
        }

        to {
            stroke-dashoffset: -10;
        }
    }

    @keyframes bikePedals {
        from {
            animation-timing-function: ease-in;
            stroke-dashoffset: -25.133;
        }

        33%,
        67% {
            animation-timing-function: ease-out;
            stroke-dashoffset: -21.991;
        }

        to {
            stroke-dashoffset: -25.133;
        }
    }

    @keyframes bikePedalsSpin {
        from {
            transform: rotate(0.1875turn);
        }

        to {
            transform: rotate(3.1875turn);
        }
    }

    @keyframes bikeSeat {
        from {
            stroke-dashoffset: 5;
        }

        33%,
        67% {
            stroke-dashoffset: 0;
        }

        to {
            stroke-dashoffset: -5;
        }
    }

    @keyframes bikeSpokes {
        from {
            animation-timing-function: ease-in;
            stroke-dashoffset: -31.416;
        }

        33%,
        67% {
            animation-timing-function: ease-out;
            stroke-dashoffset: -23.562;
        }

        to {
            stroke-dashoffset: -31.416;
        }
    }

    @keyframes bikeSpokesSpin {
        from {
            transform: rotate(0);
        }

        to {
            transform: rotate(3turn);
        }
    }

    @keyframes bikeTire {
        from {
            animation-timing-function: ease-in;
            stroke-dashoffset: 56.549;
            transform: rotate(0);
        }

        33% {
            stroke-dashoffset: 0;
            transform: rotate(0.33turn);
        }

        67% {
            animation-timing-function: ease-out;
            stroke-dashoffset: 0;
            transform: rotate(0.67turn);
        }

        to {
            stroke-dashoffset: -56.549;
            transform: rotate(1turn);
        }
    }

    .loading {
        overflow: hidden;

    }

    .loader-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.8);
        /* Optionally, add a semi-transparent background */
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        /* Ensure the loader is on top of other elements */
    }
</style>
<!--animation style-->





<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #000 !important; font-family: auto !important; border-bottom: 1px solid #fff !important;">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{url('/')}}">SEO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarScroll">
            <ul class="navbar-nav  navbar-nav-scroll ms-auto " style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li> -->

            </ul>

        </div>
    </div>
</nav>
<style>
    .nav-item {
        font-size: 18px;
    }
</style>