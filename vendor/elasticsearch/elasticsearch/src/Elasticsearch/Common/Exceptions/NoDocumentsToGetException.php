<?php
/**
 * User: zach
 * Date: 7/23/13
 * Time: 5:05 PM
 */


namespace Elasticsearch\Common\Exceptions;

/**
 * NoDocumentsToGetException
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Common\Exceptions
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */
class NoDocumentsToGetException extends \Exception implements ElasticsearchException
{
}
