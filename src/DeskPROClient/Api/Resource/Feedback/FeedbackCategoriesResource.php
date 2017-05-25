<?php

/*
 * DeskPRO (r) has been developed by DeskPRO Ltd. https://www.deskpro.com/
 * a British company located in London, England.
 *
 * All source code and content Copyright (c) 2017, DeskPRO Ltd.
 *
 * The license agreement under which this software is released
 * can be found at https://www.deskpro.com/eula/
 *
 * By using this software, you acknowledge having read the license
 * and agree to be bound thereby.
 *
 * Please note that DeskPRO is not free software. We release the full
 * source code for our software because we trust our users to pay us for
 * the huge investment in time and energy that has gone into both creating
 * this software and supporting our customers. By providing the source code
 * we preserve our customers' ability to modify, audit and learn from our
 * work. We have been developing DeskPRO since 2001, please help us make it
 * another decade.
 *
 * Like the work you see? Think you could make it better? We are always
 * looking for great developers to join us: http://www.deskpro.com/jobs/
 *
 * ~ Thanks, Everyone at Team DeskPRO
 */

namespace DeskPROClient\Api\Resource\Feedback;

use DeskPROClient\Api\Request\FindRequest;
use DeskPROClient\Api\Resource\AbstractResource;

/**
 * Class FeedbackCategoriesResource.
 */
class FeedbackCategoriesResource extends AbstractResource
{
    /**
     * {@inheritdoc}
     */
    public function getEndpoint()
    {
        return 'feedback_categories';
    }

    /**
     * @see https://support.deskpro.com/api/v2/doc#get--api-v2-feedback_categories
     *
     * @param array  $criteria
     * @param string $orderBy
     * @param string $orderDir
     * @param int    $count
     * @param int    $page
     *
     * @return FindRequest
     */
    public function find(array $criteria = [], $orderBy = null, $orderDir = null, $count = null, $page = null)
    {
        return new FindRequest($this->context, $this->getEndpoint(), $criteria, $orderBy, $orderDir, $count, $page);
    }
}
