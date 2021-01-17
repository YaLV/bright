<?php

declare(strict_types=1);

namespace App\Services;

use App\Traits\CacheTrait;

class RSSFeed
{
    use CacheTrait;

    /**
     * @var array<int>|null
     */
    public $news = null;
    /**
     * @var NetworkGather
     */
    public $network = null;

    public function __construct(NetworkGather $network)
    {
        $this->network = $network;
        $this->getNews();
    }

    public function getNewsItems(): string
    {
        return $this->network
            ->init()
            ->setUrl(config('app.news_url'))
            ->withTransfer()
            ->getData();
    }

    public function getNews(): void
    {
        try {
            $source = \simplexml_load_string($this->getNewsItems());
            if (!$source instanceof \SimpleXMLElement) {
                throw new \Exception('Can not convert response to XML element', 0);
            }
            $this->news = \json_decode($this->cached('news') ?? $this->setCache('news', $this->createReadableData($source), 10));
        } catch (\Exception $e) {
            \trigger_error(\sprintf(
                'Error loading news feed #%d: %s',
                $e->getCode(), $e->getMessage()),
                E_USER_ERROR);
        }
    }

    public function createReadableData(\SimpleXMLElement $source): string
    {
        $itemCount = 0;
        $newsItems = [];
        foreach ($source->channel->item as $item) {
            $image = '';
            foreach ($item->children('media', true) as $i) {
                $image = $i->attributes()['url'] ?? '';
            }
            $newsItems[] = [
                'title' => (string) $item->title,
                'url' => (string) $item->link,
                'short_description' => (string) $item->description,
                'title_image' => (string) $image,
            ];
            if (++$itemCount == config('app.news_amount')) {
                break;
            }
        }

        $items = \json_encode($newsItems);

        return false !== $items ? $items : '';
    }
}
