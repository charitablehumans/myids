<?php

return [
    /*
     * Set trusted proxy IP addresses.
     *
     * Both IPv4 and IPv6 addresses are
     * supported, along with CIDR notation.
     *
     * The "*" character is syntactic sugar
     * within TrustedProxy to trust any proxy
     * that connects directly to your server,
     * a requirement when you cannot know the address
     * of your proxy (e.g. if using Rackspace balancers).
     *
     * The "**" character is syntactic sugar within
     * TrustedProxy to trust not just any proxy that
     * connects directly to your server, but also
     * proxies that connect to those proxies, and all
     * the way back until you reach the original source
     * IP. It will mean that $request->getClientIp()
     * always gets the originating client IP, no matter
     * how many proxies that client's request has
     * subsequently passed through.
     */
    // 'proxies' => [
    //     '192.168.1.10',
    // ],

    /*
     * Or, to trust all proxies that connect
     * directly to your server, uncomment this:
     */
     //'proxies' => '*',

    /*
     * Or, to trust ALL proxies, including those that
     * are in a chain of forwarding, uncomment this:
    */
    'proxies' => '**',

    /*
     * Which headers to use to detect proxy related data (For, Host, Proto, Port)
     *
     * Options include:
     *
     * - Illuminate\Http\Request::HEADER_X_FORWARDED_ALL (use all x-forwarded-* headers to establish trust)
     * - Illuminate\Http\Request::HEADER_FORWARDED (use the FORWARDED header to establish trust)
     *
     * @link https://symfony.com/doc/current/deployment/proxies.html
     */
    'headers' => Illuminate\Http\Request::HEADER_X_FORWARDED_ALL,
];
