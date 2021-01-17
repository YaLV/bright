<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Twitter;
use App\Traits\CacheTrait;

class TwitterConnect
{
    use CacheTrait;

    /**
     * @var array<int>|null
     */
    public $tweets = null;
    /**
     * @var NetworkGather
     */
    public $network = null;

    public function __construct(NetworkGather $network)
    {
        $this->network = $network;
        $this->tweets = $this->getItems();
    }

    public function getTweetHtml(string $user): string
    {
        return $this->network
            ->init()
            ->setUrl('https://publish.twitter.com/oembed?url=https://twitter.com/'.$user.'&chrome=noheader%20nofooter%20noborders&limit=1')
            ->withTransfer()
            ->getData();
    }

    /**
     * @return mixed
     */
    public function getTweets(string $user)
    {
        return \json_decode($this->cached('tweet-'.$user) ?? $this->setCache('tweet-'.$user, $this->getTweetHtml($user), 60));
    }

    public function getItems(): array
    {
        $items = [];
        foreach (Twitter::all() as $user) {
            $tweetHtml = $this->getTweets($user->handle);
            if (\is_object($tweetHtml) && ($tweetHtml->html ?? false)) {
                $items[] = $tweetHtml->html;
            }
        }

        return $items;
    }
}
