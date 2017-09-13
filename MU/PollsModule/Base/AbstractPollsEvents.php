<?php
/**
 * Polls.
 *
 * @copyright Michael Ueberschaer (MU)
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License
 * @author Michael Ueberschaer <info@homepages-mit-zikula.de>.
 * @link https://homepages-mit-zikula.de
 * @link http://zikula.org
 * @version Generated by ModuleStudio (https://modulestudio.de).
 */

namespace MU\PollsModule\Base;

/**
 * Events definition base class.
 */
abstract class AbstractPollsEvents
{
    /**
     * The mupollsmodule.option_post_load event is thrown when options
     * are loaded from the database.
     *
     * The event listener receives an
     * MU\PollsModule\Event\FilterOptionEvent instance.
     *
     * @see MU\PollsModule\Listener\EntityLifecycleListener::postLoad()
     * @var string
     */
    const OPTION_POST_LOAD = 'mupollsmodule.option_post_load';
    
    /**
     * The mupollsmodule.option_pre_persist event is thrown before a new option
     * is created in the system.
     *
     * The event listener receives an
     * MU\PollsModule\Event\FilterOptionEvent instance.
     *
     * @see MU\PollsModule\Listener\EntityLifecycleListener::prePersist()
     * @var string
     */
    const OPTION_PRE_PERSIST = 'mupollsmodule.option_pre_persist';
    
    /**
     * The mupollsmodule.option_post_persist event is thrown after a new option
     * has been created in the system.
     *
     * The event listener receives an
     * MU\PollsModule\Event\FilterOptionEvent instance.
     *
     * @see MU\PollsModule\Listener\EntityLifecycleListener::postPersist()
     * @var string
     */
    const OPTION_POST_PERSIST = 'mupollsmodule.option_post_persist';
    
    /**
     * The mupollsmodule.option_pre_remove event is thrown before an existing option
     * is removed from the system.
     *
     * The event listener receives an
     * MU\PollsModule\Event\FilterOptionEvent instance.
     *
     * @see MU\PollsModule\Listener\EntityLifecycleListener::preRemove()
     * @var string
     */
    const OPTION_PRE_REMOVE = 'mupollsmodule.option_pre_remove';
    
    /**
     * The mupollsmodule.option_post_remove event is thrown after an existing option
     * has been removed from the system.
     *
     * The event listener receives an
     * MU\PollsModule\Event\FilterOptionEvent instance.
     *
     * @see MU\PollsModule\Listener\EntityLifecycleListener::postRemove()
     * @var string
     */
    const OPTION_POST_REMOVE = 'mupollsmodule.option_post_remove';
    
    /**
     * The mupollsmodule.option_pre_update event is thrown before an existing option
     * is updated in the system.
     *
     * The event listener receives an
     * MU\PollsModule\Event\FilterOptionEvent instance.
     *
     * @see MU\PollsModule\Listener\EntityLifecycleListener::preUpdate()
     * @var string
     */
    const OPTION_PRE_UPDATE = 'mupollsmodule.option_pre_update';
    
    /**
     * The mupollsmodule.option_post_update event is thrown after an existing new option
     * has been updated in the system.
     *
     * The event listener receives an
     * MU\PollsModule\Event\FilterOptionEvent instance.
     *
     * @see MU\PollsModule\Listener\EntityLifecycleListener::postUpdate()
     * @var string
     */
    const OPTION_POST_UPDATE = 'mupollsmodule.option_post_update';
    
    /**
     * The mupollsmodule.poll_post_load event is thrown when polls
     * are loaded from the database.
     *
     * The event listener receives an
     * MU\PollsModule\Event\FilterPollEvent instance.
     *
     * @see MU\PollsModule\Listener\EntityLifecycleListener::postLoad()
     * @var string
     */
    const POLL_POST_LOAD = 'mupollsmodule.poll_post_load';
    
    /**
     * The mupollsmodule.poll_pre_persist event is thrown before a new poll
     * is created in the system.
     *
     * The event listener receives an
     * MU\PollsModule\Event\FilterPollEvent instance.
     *
     * @see MU\PollsModule\Listener\EntityLifecycleListener::prePersist()
     * @var string
     */
    const POLL_PRE_PERSIST = 'mupollsmodule.poll_pre_persist';
    
    /**
     * The mupollsmodule.poll_post_persist event is thrown after a new poll
     * has been created in the system.
     *
     * The event listener receives an
     * MU\PollsModule\Event\FilterPollEvent instance.
     *
     * @see MU\PollsModule\Listener\EntityLifecycleListener::postPersist()
     * @var string
     */
    const POLL_POST_PERSIST = 'mupollsmodule.poll_post_persist';
    
    /**
     * The mupollsmodule.poll_pre_remove event is thrown before an existing poll
     * is removed from the system.
     *
     * The event listener receives an
     * MU\PollsModule\Event\FilterPollEvent instance.
     *
     * @see MU\PollsModule\Listener\EntityLifecycleListener::preRemove()
     * @var string
     */
    const POLL_PRE_REMOVE = 'mupollsmodule.poll_pre_remove';
    
    /**
     * The mupollsmodule.poll_post_remove event is thrown after an existing poll
     * has been removed from the system.
     *
     * The event listener receives an
     * MU\PollsModule\Event\FilterPollEvent instance.
     *
     * @see MU\PollsModule\Listener\EntityLifecycleListener::postRemove()
     * @var string
     */
    const POLL_POST_REMOVE = 'mupollsmodule.poll_post_remove';
    
    /**
     * The mupollsmodule.poll_pre_update event is thrown before an existing poll
     * is updated in the system.
     *
     * The event listener receives an
     * MU\PollsModule\Event\FilterPollEvent instance.
     *
     * @see MU\PollsModule\Listener\EntityLifecycleListener::preUpdate()
     * @var string
     */
    const POLL_PRE_UPDATE = 'mupollsmodule.poll_pre_update';
    
    /**
     * The mupollsmodule.poll_post_update event is thrown after an existing new poll
     * has been updated in the system.
     *
     * The event listener receives an
     * MU\PollsModule\Event\FilterPollEvent instance.
     *
     * @see MU\PollsModule\Listener\EntityLifecycleListener::postUpdate()
     * @var string
     */
    const POLL_POST_UPDATE = 'mupollsmodule.poll_post_update';
    
    /**
     * The mupollsmodule.vote_post_load event is thrown when votes
     * are loaded from the database.
     *
     * The event listener receives an
     * MU\PollsModule\Event\FilterVoteEvent instance.
     *
     * @see MU\PollsModule\Listener\EntityLifecycleListener::postLoad()
     * @var string
     */
    const VOTE_POST_LOAD = 'mupollsmodule.vote_post_load';
    
    /**
     * The mupollsmodule.vote_pre_persist event is thrown before a new vote
     * is created in the system.
     *
     * The event listener receives an
     * MU\PollsModule\Event\FilterVoteEvent instance.
     *
     * @see MU\PollsModule\Listener\EntityLifecycleListener::prePersist()
     * @var string
     */
    const VOTE_PRE_PERSIST = 'mupollsmodule.vote_pre_persist';
    
    /**
     * The mupollsmodule.vote_post_persist event is thrown after a new vote
     * has been created in the system.
     *
     * The event listener receives an
     * MU\PollsModule\Event\FilterVoteEvent instance.
     *
     * @see MU\PollsModule\Listener\EntityLifecycleListener::postPersist()
     * @var string
     */
    const VOTE_POST_PERSIST = 'mupollsmodule.vote_post_persist';
    
    /**
     * The mupollsmodule.vote_pre_remove event is thrown before an existing vote
     * is removed from the system.
     *
     * The event listener receives an
     * MU\PollsModule\Event\FilterVoteEvent instance.
     *
     * @see MU\PollsModule\Listener\EntityLifecycleListener::preRemove()
     * @var string
     */
    const VOTE_PRE_REMOVE = 'mupollsmodule.vote_pre_remove';
    
    /**
     * The mupollsmodule.vote_post_remove event is thrown after an existing vote
     * has been removed from the system.
     *
     * The event listener receives an
     * MU\PollsModule\Event\FilterVoteEvent instance.
     *
     * @see MU\PollsModule\Listener\EntityLifecycleListener::postRemove()
     * @var string
     */
    const VOTE_POST_REMOVE = 'mupollsmodule.vote_post_remove';
    
    /**
     * The mupollsmodule.vote_pre_update event is thrown before an existing vote
     * is updated in the system.
     *
     * The event listener receives an
     * MU\PollsModule\Event\FilterVoteEvent instance.
     *
     * @see MU\PollsModule\Listener\EntityLifecycleListener::preUpdate()
     * @var string
     */
    const VOTE_PRE_UPDATE = 'mupollsmodule.vote_pre_update';
    
    /**
     * The mupollsmodule.vote_post_update event is thrown after an existing new vote
     * has been updated in the system.
     *
     * The event listener receives an
     * MU\PollsModule\Event\FilterVoteEvent instance.
     *
     * @see MU\PollsModule\Listener\EntityLifecycleListener::postUpdate()
     * @var string
     */
    const VOTE_POST_UPDATE = 'mupollsmodule.vote_post_update';
    
}