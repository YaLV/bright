<?php

declare(strict_types=1);

namespace App\Services;

class NetworkGather
{
    /**
     * @var resource
     */
    public $curl = null;

    public function init(): self
    {
        $this->curl = \curl_init();

        return $this;
    }

    public function setUrl(string $url): self
    {
        \curl_setopt($this->curl, CURLOPT_URL, $url);

        return $this;
    }

    /**
     * @return $this
     */
    public function setHeaders(array $headers): self
    {
        \curl_setopt($this->curl, CURLOPT_HTTPHEADER, $headers);

        return $this;
    }

    public function getData(): string
    {
        try {
            $server_output = \curl_exec($this->curl);
            if (false === $server_output) {
                throw new \Exception(\curl_error($this->curl), \curl_errno($this->curl));
            }
            \curl_close($this->curl);

            return true === $server_output ? '' : $server_output;
        } catch (\Exception $e) {
            return \sprintf(
                'Curl failed with error #%d: %s',
                $e->getCode(), $e->getMessage());
        }
    }

    public function withTransfer(): self
    {
        \curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);

        return $this;
    }
}
