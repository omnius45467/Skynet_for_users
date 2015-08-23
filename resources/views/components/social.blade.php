<div class="soc-block">
    <div class="soc-link">
        <img class="svg img-responsive soc-link-img" src="/img/svg/share.svg" alt="share">
    </div>

    <div class="social-links-wrap">
        <div class="social-links animated fadeOutRight">
            <a href="#" class="social-btn soc-link-close">
                <img class="svg" width="13" height="13" src="/img/svg/close.svg" alt="close">
            </a>
            {!! link_to_route('wall.index', '', [], ['class' => 'fa fa-comment fa-2x']) !!}
            {!! link_to_route('wall.create', '', [], ['class' => 'fa fa-edit fa-2x']) !!}
            {{--<a target="_blank" href="https://www.facebook.com/ItemBridge" class="social-btn">--}}
                {{--<img class="svg" width="25" height="25" src="img/svg/social/Facebook.svg" alt="Facebook">--}}
            {{--</a>--}}
            {{--<a target="_blank" href="https://twitter.com/Itembridge" class="social-btn">--}}
                {{--<img class="svg"  width="25" height="25" src="img/svg/social/Twitter.svg" alt="Twitter">--}}
            {{--</a>--}}
            {{--<a target="_blank" href="https://plus.google.com/+Itembridge" class="social-btn">--}}
                {{--<img class="svg"  width="25" height="25" src="img/svg/social/Google_.svg" alt="Google_">--}}
            {{--</a>--}}
            {{--<a target="_blank" href="https://accounts.google.com/ServiceLogin?service=blogger&hl=uk&passive=1209600&continue=https://www.blogger.com/home" class="social-btn">--}}
                {{--<img class="svg"  width="25" height="25" src="img/svg/social/Blogger.svg" alt="Blogger">--}}
            {{--</a>--}}
            {{--<a target="_blank" href="https://ru.pinterest.com/" class="social-btn">--}}
                {{--<img class="svg"  width="25" height="25" src="img/svg/social/Pinterest.svg" alt="Pinterest">--}}
            {{--</a>--}}
        </div>
    </div>
</div>