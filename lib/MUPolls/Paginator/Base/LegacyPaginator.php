<?php
/**
 * MUPolls.
 *
 * @copyright Michael Ueberschaer (MU)
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License
 * @package MUPolls
 * @author Michael Ueberschaer <kontakt@webdesign-in-bremen.com>.
 * @link http://webdesign-in-bremen.com
 * @link http://zikula.org
 * @version Generated by ModuleStudio 0.7.0 (http://modulestudio.de).
 */

use Doctrine\ORM\Query;
use DoctrineExtensions\Paginate\Paginate;

/**
 * Paginator switch base class for 1.3.x modules.
 * Uses the old Paginator.
 */
abstract class MUPolls_Paginator_Base_LegacyPaginator
{
    /**
     * @var Query The query instance.
     */
    private $query;

    /**
     * @var boolean Whether the currently queries entity has relationships or not.
     */
    private $hasRelationships;

    /**
     * The constructor.
     *
     * @param Query   $query            The query instance.
     * @param boolean $hasRelationships Whether the currently queries entity has relationships or not.
     */
    public function __construct(Query $query, $hasRelationships)
    {
        $this->query = $query;
        $this->hasRelationships = $hasRelationships;
    }

    /**
     * Retrieves the paginated results.
     *
     * @param integer $offset         The query offset.
     * @param integer $resultsPerPage The amount of records per page.
     *
     * @return array Query object and total amount of rows affected by the query.
     */
    public function getResults($offset, $resultsPerPage)
    {
        // count the total number of affected items
        $count = Paginate::getTotalQueryResults($this->query);
        if ($this->hasRelationships) {
            // prefetch unique relationship ids for given pagination frame
            $this->query = Paginate::getPaginateQuery($this->query, $offset, $resultsPerPage);
        }

        return array($this->query, $count);
    }
}
