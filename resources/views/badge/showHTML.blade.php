@props(['rating', 'reviews', 'url', 'dark', 'badge_id'])

<x-badge-layout>
    <a href="{{ $url }}">
        @switch( $badge_id )
            @case(1)
            <x-badge1 :rating="$rating" :reviews="$reviews" :dark="$dark" />
        @endswitch
    </a>
</x-badge-layout>
