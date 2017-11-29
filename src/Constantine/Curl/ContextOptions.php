<?php
namespace Constantine\Curl;

final class ContextOptions {
    const METHOD = 'method';
    const HEADER = 'header';
    const USER_AGENT = 'user_agent';
    const CONTENT = 'content';
    const PROXY = 'proxy';
    const MAX_REDIRECTS = 'max_redirects';
    const VERIFY_SSL_HOST = 'curl_verify_ssl_host';
    const VERIFY_SSL_PEER = 'curl_verify_ssl_peer';
}
