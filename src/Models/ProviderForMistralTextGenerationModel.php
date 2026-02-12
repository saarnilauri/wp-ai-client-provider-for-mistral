<?php

declare(strict_types=1);

namespace WpAiClientProviderForMistral\Models;

use WordPress\AiClient\Providers\Http\DTO\Request;
use WordPress\AiClient\Providers\Http\Enums\HttpMethodEnum;
use WordPress\AiClient\Providers\OpenAiCompatibleImplementation\AbstractOpenAiCompatibleTextGenerationModel;
use WpAiClientProviderForMistral\Provider\ProviderForMistral;

/**
 * Class for text generation models used by the provider for Mistral.
 *
 * @since 1.0.0
 */
class ProviderForMistralTextGenerationModel extends AbstractOpenAiCompatibleTextGenerationModel
{
    /**
     * {@inheritDoc}
     *
     * @since 1.0.0
     */
    protected function createRequest(
        HttpMethodEnum $method,
        string $path,
        array $headers = [],
        $data = null
    ): Request {
        return new Request(
            $method,
            ProviderForMistral::url($path),
            $headers,
            $data,
            $this->getRequestOptions()
        );
    }
}
