<url>
    @if (! empty($tag->url))
    <loc>{{ url($tag->url) }}</loc>
    @endif
@if (count($tag->alternates))
    @foreach ($tag->alternates as $alternate)
    <xhtml:link rel="alternate" hreflang="{{ $alternate->locale }}" href="{{ url($alternate->url) }}" />
    @endforeach
    @endif
@if (! empty($tag->lastModificationDate))
    <lastmod>{{ $tag->lastModificationDate->format(DateTime::ATOM) }}</lastmod>
    @endif
@if (! empty($tag->changeFrequency))
    <changefreq>{{ $tag->changeFrequency }}</changefreq>
    @endif
@if (! empty($tag->priority))
    <priority>{{ number_format($tag->priority,1) }}</priority>
@endif
    @foreach ($tag->images as $image)
    <image:image>
    @if (! empty($image->url))
        <image:loc>{{ url($image->url) }}</image:loc>
    @endif
@if (! empty($image->caption))
        <image:caption>{{ $image->caption }}</image:caption>
    @endif
@if (! empty($image->geo_location))
        <image:geo_location>{{ $image->geo_location }}</image:geo_location>
    @endif
@if (! empty($image->title))
        <image:title>{{ $image->title }}</image:title>
    @endif
@if (! empty($image->license))
        <image:license>{{ $image->license }}</image:license>
    @endif
    </image:image>
    @endforeach
</url>
