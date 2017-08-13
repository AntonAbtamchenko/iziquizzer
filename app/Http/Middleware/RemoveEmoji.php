<?php

namespace App\Http\Middleware;

use Closure;

class RemoveEmoji
{
    /**
     * Clean not allowed UTF-8 chars
     *
     * @param $text
     * @return mixed
     */
    protected function removeEmoji($text)
    {
        $text = mb_convert_encoding($text, "UTF-8");
        // Match Emoticons
        $regexEmoticons = '/[\x{1F600}-\x{1F64F}]/u';
        $cleanText = preg_replace($regexEmoticons, '', $text);

        // Match Miscellaneous Symbols and Pictographs
        $regexSymbols = '/[\x{1F300}-\x{1F5FF}]/u';
        $cleanText = preg_replace($regexSymbols, '', $cleanText);

        // Match Transport And Map Symbols
        $regexTransport = '/[\x{1F680}-\x{1F6FF}]/u';
        $cleanText = preg_replace($regexTransport, '', $cleanText);

        // Match Miscellaneous Symbols
        $regexMisc = '/[\x{2600}-\x{26FF}]/u';
        $cleanText = preg_replace($regexMisc, '', $cleanText);

        // Match Dingbats
        $regexDingbats = '/[\x{2700}-\x{27BF}]/u';
        $cleanText = preg_replace($regexDingbats, '', $cleanText);

        // Match Flags
        $regexDingbats = '/[\x{1F1E6}-\x{1F1FF}]/u';
        $cleanText = preg_replace($regexDingbats, '', $cleanText);

        // Others
        $regexDingbats = '/[\x{1F910}-\x{1F95E}]/u';
        $cleanText = preg_replace($regexDingbats, '', $cleanText);

        $regexDingbats = '/[\x{1F980}-\x{1F991}]/u';
        $cleanText = preg_replace($regexDingbats, '', $cleanText);

        $regexDingbats = '/[\x{1F9C0}]/u';
        $cleanText = preg_replace($regexDingbats, '', $cleanText);

        $regexDingbats = '/[\x{1F9F9}]/u';
        $cleanText = preg_replace($regexDingbats, '', $cleanText);

        return $cleanText;
    }

    /**
     * Remove emoji from request
     *
     * @param $item
     * @param $key
     */
    public function cleanUp(&$item, $key)
    {
        if (is_string($item) && strlen($item) > 0) {
            $item = $this->removeEmoji($item);
        }
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->isMethod('GET')) {
            $input = $request->all();
            array_walk_recursive($input, [$this, 'cleanUp']);
            $request->replace($input);
        }

        return $next($request);
    }
}
