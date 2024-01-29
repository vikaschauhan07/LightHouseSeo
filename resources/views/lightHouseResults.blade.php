<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
    

    .mainSection {
        flex-grow: 1;
    }

    .second_sec {
        width: 85%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: 8%;
    }
    .imagesSmall {
        max-width: 100%;
        max-height: 100%;
    }
    /* .lh-audit-group {
        display: none !important;
    } */
    .lh-footer{
        display: none !important;
    }
    
    .lh-sticky-header--visible {
        display: inline-block !important; 
        grid-auto-flow: column;
        pointer-events: auto;
    }
    .lh-tools {
        display: none !important;
    }
    .lh-topbar {
        position: relative !important;
    }
</style>
<div class="ultraMain">
    <div class="header">
        @include('layouts.header')
    </div>

    <div class="mainSection">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1 p-0">
                    <div class="second_sec">
                        <img class="imagesSmall" src="https://buffer.com/cdn-cgi/image/w=1000,fit=contain,q=90,f=auto/library/content/images/size/w1200/2023/10/free-images.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-10 p-0">
                    <div class="second_sec" id="seo-result-append">
                        {!! $html !!}
                    </div>
                </div>
                <div class="col-md-1 p-0">
                    <div class="second_sec">
                        <img class="imagesSmall" src="https://buffer.com/cdn-cgi/image/w=1000,fit=contain,q=90,f=auto/library/content/images/size/w1200/2023/10/free-images.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer_">
        @extends('layouts.footer')
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
$(document).ready(function() {
    var articleToMove = $('article.lh-root.lh-vars.lh-max-viewport.lh-screenshot-overlay--enabled');
    var removedArticle = articleToMove.detach();
    removedArticle.appendTo('#seo-result-append');
});
</script>