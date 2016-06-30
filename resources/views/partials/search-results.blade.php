<div class="row">
    <div class="col-xs-12" style="text-align: center">
        @if (Request::is($url))
        <span class="search-results">результаты поиска по запросу <span class="query-string">{{ Request::input('queryString') }}</span>:
        {{ $searchCount }}</span>
        @endif
    </div>
</div>
