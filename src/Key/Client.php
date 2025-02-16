<?php

namespace Freyo\ApiGateway\Key;

use Freyo\ApiGateway\Kernel\TencentCloudClient;

class Client extends TencentCloudClient
{
    /**
     * @return string
     */
    protected function getBaseUri()
    {
        return 'https://apigateway.api.qcloud.com/v2/';
    }

    /**
     * @param $secretId
     *
     * @return array|\Freyo\ApiGateway\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \Freyo\ApiGateway\Kernel\Exceptions\InvalidConfigException
     */
    public function get($secretId)
    {
        $params = [
            'Action' => 'DescribeApiKey',
            'secretId' => $secretId,
        ];

        return $this->httpPost('index.php', $params);
    }
}