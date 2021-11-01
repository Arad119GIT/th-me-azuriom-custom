<div class="container">
    <div class="row">
        <div class="col-md-6" style="color:#4DA647";>
            <h4>{{ trans('theme::michel.footer.about') }}</h4>
          		<div style="color:white";>
            		<p>{!! theme_config('footer_description') !!}</p>
        		</div>
        	</div>
        <div class="col-md-3 links" style="color:#4DA647";>
            <h4>{{ trans('theme::michel.footer.links') }}</h4>

            <ul class="list-unstyled">
                @foreach(theme_config('footer_links') ?? [] as $link)
                    <li>
                        <a href="{{ $link['value'] }}"><i class="fas fa-chevron-right"></i> {{ $link['name'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-3 social" style="color:#4DA647";>
            <h4>{{ trans('theme::michel.footer.social') }}</h4>

            <ul class="list-inline">
                @foreach(['twitter', 'youtube', 'discord', 'teamspeak'] as $social)
                    @if($socialLink = theme_config("footer_social_{$social}"))
                        <li class="list-inline-item">
                            <a href="{{ $socialLink }}" target="_blank" rel="noreferrer noopener" title="{{ trans('theme::michel.links.'.$social) }}"><i class="fab fa-{{ $social }} fa-2x"></i></a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>

    <hr>

    <div class="row footer-bottom">
        <div class="col-md-6">
            <a style="color:#8dea2e"; href="/">MICHEL</a>
            © 2021
        </div>
        <div class="col-md-6 text-right">
            @lang('messages.copyright')
        </div>
    </div>
</div>
