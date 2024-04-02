<?php

use Illuminate\Support\Fluent;

if (! function_exists('social_profile_url')) {
    function social_profile_url($network, $profileName): string
    {
        $network = strtolower($network);

        return match ($network) {
            'facebook' => 'https://www.facebook.com/' . $profileName,
            'twitter', 'x' => 'https://twitter.com/' . $profileName,
            'instagram' => 'https://www.instagram.com/' . $profileName,
            'linkedin' => 'https://www.linkedin.com/in/' . $profileName,
            'youtube' => 'https://www.youtube.com/user/' . $profileName,
            'pinterest' => 'https://www.pinterest.com/' . $profileName,
            'tiktok' => 'https://www.tiktok.com/@' . $profileName,
            'snapchat' => 'https://www.snapchat.com/add/' . $profileName,
            'reddit' => 'https://www.reddit.com/user/' . $profileName,
            'yelp' => 'https://www.yelp.com/user_details?userid=' . $profileName,
            'whatsapp' => 'https://wa.me/' . $profileName,
            'telegram' => 'https://t.me/' . $profileName,
            'github' => 'https://github.com/' . $profileName,
            default => 'Social network not supported.'
        };
    }
}

if (! function_exists('fluent')) {
    /**
     * Create a new Fluent instance.
     *
     * Example Usage:
     * ❌ collect($data)->get('user');
     * ✅ fluent($data)->user;
     *
     * ❌ collect($data)->get('user')[' name'];
     * ✅ fluent($data)->get('user.name');
     *
     * ❌ collect(collect($data)->get('posts'))→>pluck('title');
     * ✅ fluent($data)->collect('posts')->pluck('title');
     *
     * ❌ json_encode(collect($data)->get('user')['address']);
     * ✅fluent($data)->scope('user.address')->toJon();
     */
    function fluent(?array $data = null): Fluent
    {
        return new Fluent($data);
    }
}
