<!--animations-->
<div class="homePageHeight">
    @include('layouts.header')



    <div class="loader-container d-none">
        <svg class="bike d-none" id="Ani" viewBox="0 0 48 30" width="48px" height="30px">
            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                <g transform="translate(9.5,19)">
                    <circle class="bike__tire" r="9" stroke-dasharray="56.549 56.549" />
                    <g class="bike__spokes-spin" stroke-dasharray="31.416 31.416" stroke-dashoffset="-23.562">
                        <circle class="bike__spokes" r="5" />
                        <circle class="bike__spokes" r="5" transform="rotate(180,0,0)" />
                    </g>
                </g>
                <g transform="translate(24,19)">
                    <g class="bike__pedals-spin" stroke-dasharray="25.133 25.133" stroke-dashoffset="-21.991" transform="rotate(67.5,0,0)">
                        <circle class="bike__pedals" r="4" />
                        <circle class="bike__pedals" r="4" transform="rotate(180,0,0)" />
                    </g>
                </g>
                <g transform="translate(38.5,19)">
                    <circle class="bike__tire" r="9" stroke-dasharray="56.549 56.549" />
                    <g class="bike__spokes-spin" stroke-dasharray="31.416 31.416" stroke-dashoffset="-23.562">
                        <circle class="bike__spokes" r="5" />
                        <circle class="bike__spokes" r="5" transform="rotate(180,0,0)" />
                    </g>
                </g>
                <polyline class="bike__seat" points="14 3,18 3" stroke-dasharray="5 5" />
                <polyline class="bike__body" points="16 3,24 19,9.5 19,18 8,34 7,24 19" stroke-dasharray="79 79" />
                <path class="bike__handlebars" d="m30,2h6s1,0,1,1-1,1-1,1" stroke-dasharray="10 10" />
                <polyline class="bike__front" points="32.5 2,38.5 19" stroke-dasharray="19 19" />
            </g>
        </svg>
    </div>
    <!--end animation-->
    <div id="topHead">
        <div>
            <section class="bannerSec" style="background:url(&#39;/images/BackgroundEndlessConstellation.svg&#39;);min-height:calc(100vh - 263px);display:flex;align-items:center">
                <div class="container" style="color: #fff;">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="bannerLeft">
                                <p class="bannerText m-0">Supercharged analysis &amp; monitoring tools</p>
                                <h1 class="headText">Search Engine Optimization Made Easy</h1>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bannerRight">
                                <div class="searchBox-Head" style="position:relative;padding-top:56%">
                                    <div class="boxSearched" title="service presentation" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                                        <div class="boxSearchedDeatils" tabindex="0" style="width: 100%; height: 100%; background-size: cover; background-position: center center; cursor: pointer; display: flex; align-items: center; justify-content: center; background-image: url(&quot;/images/ssc_video_thumbnail.jpeg&quot;);">
                                            <div class="detailsbOX">
                                                <form novalidate="" action="{{route('getLightHouseResults')}}" id="hii" method="POST">
                                                    @csrf
                                                    <div class="boxedMain">
                                                        <div class="d-flex">
                                                            <div role="group" class="">
                                                                <div class="form-group ">
                                                                    <input type="text" placeholder="Website URL" name="url_input" autocapitalize="off" id="url_input" class="inputBox">
                                                                </div>
                                                            </div>
                                                            <button type="submit" onclick="gio()" class="checkBtn">Checkup</button>
                                                        </div>
                                                        @if($errors)
                                                        <span style="color: red;">
                                                                @foreach($errors->all() as $error)
                                                                <span class="ul-er">{{ $error }}</span>
                                                                @endforeach
                                                        </span>
                                                        @endif
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@extends('layouts.footer')
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        window.addEventListener('pageshow', function(event) {
            if (event.persisted) {
                $(".loader-container").addClass("d-none");
                $("#Ani").addClass("d-none");
            } else {
                $(".loader-container").addClass("d-none");
                $("#Ani").addClass("d-none");
            }
        });
    });

    function gio() {
        var errorDivs = document.querySelectorAll('.validation-error');

        if (errorDivs.length < 1) {
            $("#Ani").removeClass("d-none");
            $(".loader-container").removeClass("d-none");
        }
    }
</script>
<style>
    .homePageHeight {
        display: flex;
        height: 90vh;
        flex-direction: column;
        /* align-items: center; */
        /* justify-content: center; */
    }



    .inputContainer {
        display: flex;
        border: 1px solid #000;
        border-radius: 4px;
        overflow: hidden;
    }

    .inputBox {
        padding: 10px;
        width: 100%;
        color: #000 !important;
        font-size: 16px !important;
        font-weight: 100 !important;
        font-family: "Times New Roman", Times, serif;
        /* Use Times New Roman font */
        min-width: 350px;
    }

    .checkBtn {
        padding: 10px;
        width: 100%;
        background-color: #000 !important;
        color: #fff !important;
        border: none !important;
        /* border-radius: 0 4px 4px 0; */
        /* Rounded corners on the right side */
        cursor: pointer !important;
        font-size: 14px !important;
        font-weight: 200 !important;
        font-family: "Times New Roman", Times, serif;
        min-width: 150px;
        margin-left: 1;
    }

    .checkBtn:hover {
        background-color: hsl(223deg 95.13% 51.54%) !important;
         
        color: #000 !important;
        /* border: 1px solid black !important; */
        border-bottom: 1px solid black !important;
        border-top: 1px solid black !important;
        border-right: 1px solid black !important;
        border-left: 1px solid black !important;
       
    }

    @media only screen and (max-width: 600px) {
        .inputContainer {
            flex-direction: column;
        }

        .inputBox,
        .checkBtn {
            width: 100%;
            border-radius: 1px;
            /* Add rounded corners for both input and button on small screens */
        }

    }

    .ul-er {
        list-style: none;
        font-size: x-large;
        font-family: auto;
        font-stretch: inherit;
    }
</style>