<?php

/*
 * This file is part of the BaitPollBundle package.
 *
 * (c) BAIT s.r.o. <http://www.bait.sk/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bait\PollBundle\Model;

/**
 * Interface defining shape of vote managers in this bundle.
 *
 * @author Ondrej Slintak <ondrowan@gmail.com>
 */
interface VoteManagerInterface
{
    /**
     * Creates vote instance.
     *
     * @param FieldInterface $field Poll field
     * @param string $value Vote value
     *
     * @return VoteInterface
     */
    public function create(FieldInterface $field, $value);

    /**
     * Saves vote to DB.
     *
     * @param mixed $votes Votes to save (VoteInterface or array of them)
     */
    public function save($votes);

    /**
     * Checks if user has already voted in poll.
     *
     * @return boolean
     */
    public function hasVoted(PollInterface $poll);

    /**
     * Check if anonymous user has already voted in poll.
     *
     * @return boolean
     */
    public function hasVotedAnonymously(PollInterface $poll);

    /**
     * Counts all votes for given field.
     *
     * @parem FieldInterface $field Field to check votes for
     *
     * @return interger
     */
    public function countByField(FieldInterface $field);
}
