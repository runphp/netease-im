<?php

declare(strict_types=1);

/*
 * This file is part of eelly package.
 *
 * (c) eelly.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Shadon\Neteaseim\Command\Nimserver\Chatroom;

use Psr\Http\Message\ResponseInterface;
use Shadon\Neteaseim\Command\Action;

/**
 *删除聊天室云端历史消息.
 *
 * @author hehui<runphp@dingtalk.com>
 */
class DeleteHistoryMessage extends Action
{
    public function __construct(array $arguments)
    {
        $this->setUri('/nimserver/chatroom/deleteHistoryMessage.action');
        parent::__construct($arguments);
    }

    public function __invoke(ResponseInterface $response)
    {
        $return = parent::__invoke($response);

        return $return['code'];
    }
}
