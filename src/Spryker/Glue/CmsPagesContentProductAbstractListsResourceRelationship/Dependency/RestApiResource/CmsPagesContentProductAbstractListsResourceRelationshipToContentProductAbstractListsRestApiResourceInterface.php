<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\CmsPagesContentProductAbstractListsResourceRelationship\Dependency\RestApiResource;

interface CmsPagesContentProductAbstractListsResourceRelationshipToContentProductAbstractListsRestApiResourceInterface
{
    /**
     * @param array<string> $contentProductAbstractListKeys
     * @param string $localeName
     *
     * @return array<string, \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResourceInterface>
     */
    public function getContentProductAbstractListsByKeys(
        array $contentProductAbstractListKeys,
        string $localeName
    ): array;
}
