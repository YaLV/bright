<?php

declare(strict_types=1);

namespace App\Rules;

use App\Facades\TwitterConnect;
use Illuminate\Contracts\Validation\Rule;

class TwitterValidator implements Rule
{
    /**
     * @var string
     */
    private $error = '';

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed  $value
     */
    public function passes($attribute, $value): bool
    {
        try {
            $tweetHtml = \json_decode(TwitterConnect::getTweetHtml($value), true);

            if (!\is_array($tweetHtml) || !($tweetHtml['html'] ?? false)) {
                throw new \Exception('Invalid Twitter user');
            }

            return true;
        } catch (\Exception $e) {
            $this->error = $e->getMessage();
        }

        return false;
    }

    /**
     * Get the validation error message.
     */
    public function message(): string
    {
        return $this->error;
    }
}
