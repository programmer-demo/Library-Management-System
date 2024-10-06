@if (session('success'))
    <div class="alert alert-primary" id="alerts" style="display: block">
        {{ session('success') }}
    </div>
    <script>
        setTimeout(function(){
            const div = document.getElementById("alerts")
            div.style.display = "none";
        },4000);
    </script>
@endif
 <!--fail-->
 @if (session('fail'))
     <div class="translate-middle-x m-3" style="position: absolute; top: 0; right: 0; ">
         <div id="alert" class="alert shadow bg-danger-600 rounded" style="margin-top: 1.8rem; z-index: 9999;">
             <b><i class="fal fa-exclamation-circle fa-lg"></i></b> {{ session('fail') }}
         </div>
     </div>
 @endif
