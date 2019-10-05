<?php
/**
 * Implementation of Paginator
 *
 * @author Artur Turchin <a.turchin@artox.com>
 */

declare(strict_types=1);

namespace ArtoxLab\Bundle\ClarcBundle\Core\Interfaces\Gateways;
use ArtoxLab\Bundle\ClarcBundle\Core\UseCases\Interfaces\PaginatorInterface;

class Paginator implements PaginatorInterface
{
    /**
     * Number of page
     *
     * @var int
     */
    protected $page;

    /**
     * Number of results per page
     *
     * @var int
     */
    protected $limit;

    /**
     * Results
     *
     * @var array
     */
    protected $results;

    /**
     * The total number of results
     *
     * @var int
     */
    protected $total;

    /**
     * Paginator constructor.
     *
     * @param int   $page    Number of page
     * @param int   $limit   Number of results per page
     * @param array $results Results
     * @param int   $total   The total number of results
     */
    public function __construct(int $page, int $limit, array $results, int $total)
    {
        $this->page    = $page;
        $this->limit   = $limit;
        $this->results = $results;
        $this->total   = $total;
    }

    /**
     * Results
     *
     * @return array
     */
    public function getResults(): array
    {
        return $this->results;
    }

    /**
     * Number of page
     *
     * @return int
     */
    public function getCurrentPage() : int
    {
        return $this->page;
    }

    /**
     * Number of results per page
     *
     * @return int
     */
    public function getLimit() : int
    {
        return $this->limit;
    }

    /**
     * The total number of results
     *
     * @return int
     */
    public function getTotal() : int
    {
        return $this->total;
    }

}
